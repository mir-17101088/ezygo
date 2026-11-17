# Ezygo website

Source for [ezygobd.com](https://www.ezygobd.com), an electric scooter and e-bike rental service in Bangladesh. Plain PHP, CSS and JavaScript with no build step and no framework.

The redesign is in progress. The homepage uses the new design system (`assets/css/v2.css`, `includes/v2/`). Every other page still uses the old styles until it is rebuilt.

## Folders

| Path | What it is |
|---|---|
| `index.php`, `about.php`, … | Pages |
| `includes/v2/` | New shared head, header, footer and helpers (icons, responsive images, bike data) |
| `includes/` | Old shared parts, still used by the pages that aren't redesigned yet |
| `assets/css/v2.css` | Design system: tokens, light and dark mode, components |
| `assets/js/site.js` | Theme switch, mobile menu, bike picker, form messages |
| `assets/img/` | Optimised AVIF/WebP images and icons |
| `assets/fonts/` | Archivo variable font, self-hosted (SIL Open Font License) |
| `form-handler.php` | Receives every form and saves submissions outside the web root |
| `preview/` | Static HTML export for the Vercel design preview (generated) |
| `tools/export_preview.py` | Rebuilds `preview/` |

## Run locally

```bash
php -S localhost:8000
```

Then open http://localhost:8000. Form submissions are written to `../ezygo-submissions/`, next to the site folder.

## Design preview on Vercel

Vercel can't run PHP, so it serves the static export in `preview/` (set in `vercel.json`). The preview has forms switched off, shows a "Design preview" badge and is marked noindex.

To rebuild the preview after changes, run the PHP server as above, then:

```bash
python tools/export_preview.py
```

## Deploying to the live site (cPanel)

Upload only the site files to `public_html`. Never upload `preview/`, `tools/`, `vercel.json` or `README.md`; `.htaccess` blocks them anyway. Take a cPanel backup before every upload.
