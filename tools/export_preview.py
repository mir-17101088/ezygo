"""Render the PHP site to static HTML in preview/ for a Vercel design preview.

Vercel can't run PHP, so this saves each page as served by a local PHP server,
points links at the .html files, turns the forms off and marks pages noindex.

  1. From the repo root:  <php> -S localhost:8000
  2. Then:                python tools/export_preview.py
"""
import re, shutil, sys, urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
OUT = ROOT / 'preview'
BASE = 'http://localhost:8000/'
PAGES = ['index', 'about', 'services', 'team', 'contact', 'join', 'evs', 'franchise', 'advertising']
# Only what the pages use; source photos and videos stay out of the preview
ASSET_DIRS = ['assets/css', 'assets/fonts', 'assets/img', 'assets/js']

PREVIEW_HEAD = """
  <meta name="robots" content="noindex, nofollow">
  <style>.preview-badge{position:fixed;left:12px;bottom:12px;z-index:9999;background:#16181D;color:#fff;font:600 12px/1 system-ui,sans-serif;padding:9px 12px;border-radius:999px;opacity:.85}
  .preview-toast{position:fixed;left:50%;bottom:24px;transform:translateX(-50%);z-index:9999;max-width:min(92vw,420px);background:#16181D;color:#fff;font:15px/1.45 system-ui,sans-serif;padding:14px 18px;border-radius:14px;box-shadow:0 8px 30px rgba(0,0,0,.25)}</style>
  <script>document.addEventListener('submit',function(e){e.preventDefault();e.stopImmediatePropagation();var t=document.createElement('div');t.className='preview-toast';t.setAttribute('role','status');t.textContent='This is a design preview, so forms are switched off. Nothing was sent.';document.body.appendChild(t);setTimeout(function(){t.remove()},4500)},true);</script>
"""
BADGE = '<div class="preview-badge" aria-hidden="true">Design preview</div>'


def fetch(page):
    with urllib.request.urlopen(BASE + page + '.php', timeout=30) as r:
        return r.read().decode('utf-8')


def to_static(html):
    # page.php / page.php#x / page.php?x  ->  page.html...
    html = re.sub(r'((?:href|action)=")([a-z0-9-]+)\.php', r'\1\2.html', html)
    html = html.replace('</head>', PREVIEW_HEAD + '</head>', 1)
    html = re.sub(r'(<body[^>]*>)', r'\1' + BADGE, html, count=1)
    return html


def main():
    OUT.mkdir(exist_ok=True)
    for child in OUT.iterdir():  # clear contents (the folder itself may be open in a server)
        shutil.rmtree(child) if child.is_dir() else child.unlink()
    for p in PAGES:
        try:
            html = fetch(p)
        except Exception as e:
            sys.exit(f'Could not fetch {p}.php — is the PHP server running on :8000? ({e})')
        (OUT / f'{p}.html').write_text(to_static(html), encoding='utf-8')
        print('page', p)
    for d in ASSET_DIRS:
        shutil.copytree(ROOT / d, OUT / d)
    print('done ->', OUT)


if __name__ == '__main__':
    main()
