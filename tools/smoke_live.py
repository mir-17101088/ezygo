"""Read-only checks to run right after uploading to cPanel (submits nothing).

  python tools/smoke_live.py [https://www.ezygobd.com]

Checks: every page loads with the new design, private paths are blocked,
redirects/404 work, security headers are present. Exit code 1 if anything fails.
"""
import sys, urllib.request, urllib.error, ssl

BASE = (sys.argv[1] if len(sys.argv) > 1 else 'https://www.ezygobd.com').rstrip('/')
UA = {'User-Agent': 'Mozilla/5.0 (site check)'}
ctx = ssl.create_default_context()
fails = 0


class NoRedirect(urllib.request.HTTPRedirectHandler):
    def redirect_request(self, *a, **k):
        return None


def get(path, follow=True):
    opener = urllib.request.build_opener() if follow else urllib.request.build_opener(NoRedirect)
    req = urllib.request.Request(BASE + path, headers=UA)
    try:
        r = opener.open(req, timeout=30)
        return r.status, dict(r.headers), r.read().decode('utf-8', 'replace')
    except urllib.error.HTTPError as e:
        return e.code, dict(e.headers), e.read().decode('utf-8', 'replace')


def check(ok, msg):
    global fails
    print(('PASS  ' if ok else 'FAIL  ') + msg)
    if not ok:
        fails += 1


for p in ['/', '/evs.php', '/services.php', '/franchise.php', '/advertising.php', '/about.php',
          '/team.php', '/join.php', '/contact.php', '/privacy.php']:
    s, h, body = get(p)
    check(s == 200 and 'assets/css/site.css' in body and 'buckdomain' not in body.lower(), f'{p} loads the new site ({s})')

for p in ['/includes/config.php', '/includes/footer.php', '/submissions/', '/tools/', '/preview/', '/.git/config',
          '/README.md', '/.htaccess', '/form-handler.php.bak']:
    s, _, _ = get(p)
    check(s in (403, 404), f'{p} is blocked ({s})')

s, h, _ = get('/form-handler.php', follow=False)
check(s in (301, 302, 303) , f'GET /form-handler.php redirects ({s})')
s, _, body = get('/this-page-does-not-exist')
check(s == 404 and 'wrong turn' in body, f'404 page ({s})')
s, h, _ = get('/')
for k in ['X-Content-Type-Options', 'X-Frame-Options', 'Referrer-Policy', 'Strict-Transport-Security']:
    check(any(x.lower() == k.lower() for x in h), f'header {k}')
for p in ['/robots.txt', '/sitemap.xml', '/assets/img/og-cover.jpg', '/assets/video/ezygo-hero-720.mp4', '/assets/fonts/satoshi-400.woff2']:
    s, _, _ = get(p)
    check(s == 200, f'{p} ({s})')

print(f'\n{fails} failed' if fails else '\nAll checks passed')
sys.exit(1 if fails else 0)
