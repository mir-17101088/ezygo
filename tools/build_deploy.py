"""Build the exact set of files to upload to cPanel public_html.

  python tools/build_deploy.py

Creates ../deploy/public_html/ and ../deploy/ezygo-public_html-<date>.zip next to
the repo (outside it), plus MANIFEST.txt with a SHA-256 for every file, so what
goes live is exactly what was tested. Never includes preview/, tools/, *.md,
vercel.json, git files or form submissions.
"""
import hashlib, shutil, sys, zipfile, datetime, subprocess
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
OUT = ROOT.parent / 'deploy'
DEST = OUT / 'public_html'

PAGES = ['index.php', 'evs.php', 'services.php', 'franchise.php', 'advertising.php', 'about.php',
         'team.php', 'join.php', 'contact.php', 'privacy.php', '404.php', 'form-handler.php']
FILES = PAGES + ['.htaccess', 'robots.txt', 'sitemap.xml', 'submissions/.htaccess']
DIRS = ['includes', 'assets/css', 'assets/fonts', 'assets/img', 'assets/js', 'assets/video']
SKIP_SUFFIX = {'.md', '.py', '.pyc', '.log', '.zip'}

# Files the OLD site had on the server that the new site no longer uses.
# Delete them in cPanel only after the new pages are checked live.
OLD_ON_SERVER = [
    'includes/mega-menu.php',
    'assets/css/styles.css', 'assets/css/about.css', 'assets/css/advertising.css', 'assets/css/contact.css',
    'assets/css/evs.css', 'assets/css/franchise.css', 'assets/css/services.css', 'assets/css/team.css',
    'assets/js/script.js', 'assets/js/about.js', 'assets/js/advertising.js', 'assets/js/contact.js',
    'assets/js/evs.js', 'assets/js/franchise.js', 'assets/js/join.js', 'assets/js/services.js',
    'assets/videos/  (folder: the old 3 MB teaser)',
    'CHANGELOG.md, README.md  (if still there)',
]


def main():
    dirty = subprocess.run(['git', 'status', '--porcelain', '--', '.', ':!preview'], cwd=ROOT, capture_output=True, text=True).stdout.strip()
    commit = subprocess.run(['git', 'rev-parse', '--short', 'HEAD'], cwd=ROOT, capture_output=True, text=True).stdout.strip()
    if dirty and '--allow-dirty' not in sys.argv:
        sys.exit('Uncommitted changes. Commit first so the upload matches a known version (or pass --allow-dirty).')

    if DEST.exists():
        shutil.rmtree(DEST)
    DEST.mkdir(parents=True)
    copied = []
    for f in FILES:
        src = ROOT / f
        if not src.exists():
            sys.exit(f'Missing {f}')
        (DEST / f).parent.mkdir(parents=True, exist_ok=True)
        shutil.copy2(src, DEST / f)
        copied.append(f)
    for d in DIRS:
        for src in sorted((ROOT / d).rglob('*')):
            if src.is_file() and src.suffix not in SKIP_SUFFIX:
                rel = src.relative_to(ROOT).as_posix()
                (DEST / rel).parent.mkdir(parents=True, exist_ok=True)
                shutil.copy2(src, DEST / rel)
                copied.append(rel)

    stamp = datetime.date.today().isoformat()
    lines = [f'EzygoBD public_html upload — commit {commit} — built {stamp}', '']
    total = 0
    for rel in sorted(copied):
        data = (DEST / rel).read_bytes(); total += len(data)
        lines.append(f'{hashlib.sha256(data).hexdigest()[:16]}  {len(data):>9}  {rel}')
    lines += ['', f'{len(copied)} files, {total / 1e6:.1f} MB', '', 'After the new site is verified live, delete these OLD files from public_html:']
    lines += ['  ' + x for x in OLD_ON_SERVER]
    (OUT / 'MANIFEST.txt').write_text('\n'.join(lines) + '\n', encoding='utf-8')

    zpath = OUT / f'ezygo-public_html-{stamp}-{commit}.zip'
    with zipfile.ZipFile(zpath, 'w', zipfile.ZIP_DEFLATED) as z:
        for rel in sorted(copied):
            z.write(DEST / rel, rel)
    print(f'{len(copied)} files, {total / 1e6:.1f} MB -> {DEST}')
    print('zip:', zpath)
    print('manifest:', OUT / 'MANIFEST.txt')


if __name__ == '__main__':
    main()
