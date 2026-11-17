# Ezygo website

Source for [ezygobd.com](https://www.ezygobd.com), an electric scooter and e-bike rental service in Bangladesh. Plain PHP, CSS and JavaScript with no build step and no framework.

All nine pages use one design system: `assets/css/v2.css` plus the shared parts in `includes/v2/`. There is one typeface (Archivo, self-hosted), one accent colour (the logo lime) and light and dark mode from the same colour tokens. It is built for old Android phones (Chrome 87+) and screens down to 320 px wide.

## Folders

| Path | What it is |
|---|---|
| `index.php` | Homepage: hero, bikes, how renting works, booking form, clients, FAQ, contact |
| `evs.php` | Bikes and specs (all three bikes, comparison table) |
| `services.php` | Rental plans for riders and services for business |
| `franchise.php`, `advertising.php` | Business offers, each with its own enquiry form |
| `about.php`, `team.php`, `join.php`, `contact.php` | Company pages |
| `includes/v2/head.php` | Meta tags, social cards, JSON-LD. Each page sets `$pageTitle`, `$pageDesc`, `$pagePath` before including it |
| `includes/v2/header.php`, `footer.php` | Site header, mobile menu, dark footer |
| `includes/v2/helpers.php` | Icons (`icon()`), bike photos (`bike_pic()`), team photos (`team_pic()`) and the bike data (`$BIKES`) |
| `assets/css/v2.css` | Design system: tokens, light and dark mode, components |
| `assets/js/site.js` | Theme switch, mobile menu, bike picker, form messages |
| `assets/img/` | Optimised AVIF/WebP images and icons, made from the originals in `assets/photo/` |
| `assets/fonts/` | Archivo variable font, self-hosted (SIL Open Font License) |
| `form-handler.php` | Receives every form and saves submissions outside the web root |
| `preview/` | Static HTML export for the Vercel design preview (generated) |
| `tools/export_preview.py` | Rebuilds `preview/` |

## Changing things

- **Bike specs or prices:** edit `$BIKES` in `includes/v2/helpers.php`. The homepage, the bikes page and the comparison table all read from it.
- **Colours, type sizes, spacing:** the tokens at the top of `assets/css/v2.css`. Dark mode values are in the two blocks just below them. After a CSS change, bump `v2.css?v=` in `includes/v2/head.php` so browsers fetch the new file.
- **Forms:** every form posts to `form-handler.php` with a hidden `form_type` (`rent_ev`, `contact`, `franchise`, `advertising`, `join`). The handler sends the visitor back to the same page with `?status=success&form=<type>`, and `site.js` shows the matching message.

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
