# EzygoBD — Complete Project Changelog

> **Project:** EzygoBD — Bangladesh's #1 EV Rental Network  
> **Date:** April 19, 2026  
> **Document:** Shuru theke shesh — shob change er record

---

## Table of Contents

1. [Client Change Requests (Content Updates)](#1-client-change-requests-content-updates)
2. [New Page Created — join.php](#2-new-page-created--joinphp)
3. [Navigation Overhaul (Header, Mega-Menu, Footer)](#3-navigation-overhaul-header-mega-menu-footer)
4. [Dark Mode Selector Bug Fix (3 Files, 32+ Selectors)](#4-dark-mode-selector-bug-fix)
5. [Fade Animation Standardization (7 Files)](#5-fade-animation-standardization)
6. [Mobile Chrome Optimization (10 Fixes)](#6-mobile-chrome-optimization)
7. [Final Bug Fixes (4 Items)](#7-final-bug-fixes)
8. [Files Modified — Summary Table](#8-files-modified--summary-table)
9. [Project Architecture](#9-project-architecture)
10. [Tech Stack](#10-tech-stack)
11. [Project Readiness Assessment — 85-90%](#11-project-readiness-assessment--85-90)
12. [Production Deployment Checklist](#12-production-deployment-checklist)
13. [Known Low-Priority Items](#13-known-low-priority-items)

---

## 1. Client Change Requests (Content Updates)

### 1.1 AI References Removed (6 Files)
All "AI-powered", "artificial intelligence", "AI platform" etc. references removed.

| File | What was removed |
|------|------------------|
| `index.php` | AI-powered fleet/platform references |
| `evs.php` | AI-powered fleet/platform references |
| `services.php` | "EzyFleet.ai" → "EzyFleet" |
| `about.php` | AI references in company description |
| `franchise.php` | AI references in franchise pitch |
| `advertising.php` | AI references in advertising pitch |

### 1.2 Vehicle Specifications Added — `index.php`, `evs.php`
- **Inline specs** added inside the rental form (vehicle type dropdown context)
- **Full Vehicle Specifications section** added with 3 cards:
  - E-Scooter specs
  - E-Bike specs
  - E-Rickshaw specs

### 1.3 Section Anchors Added — `index.php`
- `id="rent-ev"` added to the Rent Our EV section
- `id="ezyfleet"` added to the Fleet Optimization section

### 1.4 About Page → "Our Story" — `about.php`
- Page renamed/restructured as "Our Story"
- **Certificates section** added (4 cards)
- **Awards section** added (3 cards)
- Founder bio updated (Md Sazzatul Islam — electrical engineer, EV innovation expert)

### 1.5 Team Bios Updated — `team.php`
- Each team member card now has **competency tags** (`.team-tag` elements)
- Examples: "EV Powertrain Systems", "Renewable Energy", "Business Development", "Climate Governance"
- Join CTA link updated to `join.php`

### 1.6 Stale Link Fixed — `contact.php`
- FAQ section: `franchise.php` link → `join.php#franchise`

### 1.7 Form Handler Updated — `form-handler.php`
- New form type `join` added to the handler
- Supports franchise, careers, and advertising submissions from join.php

---

## 2. New Page Created — `join.php`

**Purpose:** Combined "Join Us" page replacing separate franchise/advertising application flows.

**Sections:**
- Hero: "Build Your Future with EzygoBD"
- Franchise (FOCO & FOFO models) — `#franchise`
- Advertising opportunities — `#advertising`
- Careers section
- Navigation tabs for switching between sections

**CSS:** Uses `franchise.css`  
**Form type:** `join` → handled by `form-handler.php`

---

## 3. Navigation Overhaul (Header, Mega-Menu, Footer)

### 3.1 Header — `includes/header.php` + `assets/css/styles.css`

**Before:** Logo + nav links + CTA + toggle + hamburger  
**After:** Logo (left) + Book Now CTA + Theme Toggle + Hamburger (right)

- Nav links **completely removed** from header
- Layout: `justify-content: space-between`
- Padding: `clamp(1.25rem, 4vw, 3.5rem)`
- `max-width: none` (full width)

### 3.2 Mega Menu — `includes/mega-menu.php` + `assets/css/styles.css`

**Structure (4 columns):**

| Column | Label | Links |
|--------|-------|-------|
| Get Started (green) | Home, Our Story, Team, Environment |
| For Riders (dark) | 2W Services → `#rent-ev`, Rent to Own, 3W Loader → `#rent-ev` |
| For Partners (orange) | Franchise FOCO/FOFO → `join.php`, Advertisement → `join.php`, EV for Delivery, EzyFleet → `#ezyfleet` |
| Resources (green) | Contact Us, Join Us, Blogs & Press |

**Bottom:** 4 service cards (Last Mile, 2W, 3W, Franchise)

**Features Added:**
- `megaActive()` PHP function — current page highlighting
- `.mega-active` class — green color + left border on active page
- Backdrop click to close (JS: `megaMenu.addEventListener('click', ...)`)
- Duplicate links removed
- Font-weights: hardcoded `700` → `var(--fw-bold)`

### 3.3 Mega Menu Dark Mode — `assets/css/styles.css`

Full dark mode CSS added:
- `.mega-inner` background
- `.mega-top` background
- `.mega-logo` color
- `.mega-close` color
- `.mega-col a` colors
- `.mega-svc-label` background

### 3.4 Footer — `includes/footer.php`

**4-column grid:**
1. Brand (logo, tagline, social icons)
2. Riders (Daily Rental, Monthly Plan, E-Rickshaw, Find a Hub)
3. Partners (Delivery Fleet, Franchise, Advertising, EzyFleet)
4. Company (Our Story, Contact, Join Us, Privacy Policy)

**Elements:**
- WhatsApp floating button → `https://wa.me/8801828721222`
- Back-to-top button

---

## 4. Dark Mode Selector Bug Fix

### Problem
Multiple CSS files used `[data-theme="dark"]` selectors, but the JS toggles `body.dark-mode` class. Dark mode was **completely broken** on 3 pages.

### Fix — 32+ selectors updated across 3 files:

| File | Selectors Fixed | Sections Affected |
|------|----------------|-------------------|
| `assets/css/evs.css` | 10 selectors | Hero, fleet cards, specs, form, stats |
| `assets/css/about.css` | 8 selectors | Certificates section, Awards section |
| `assets/css/team.css` | 14+ selectors | Hero, team cards, tags, section headers, bios |

**team.css special fix:** Scoped `.team-section .section-header` to avoid global selector leakage.

**Verification:** `grep -r "data-theme" assets/css/` → 0 results after fix.

---

## 5. Fade Animation Standardization

### Problem
Each page CSS had different fade-up values — inconsistent feel across pages.

### Standard: `translateY(30px)` + `0.65s ease`

| File | Class | Before | After |
|------|-------|--------|-------|
| `assets/css/styles.css` | `.fade-up` | 30px / 0.7s | 30px / 0.7s (kept — global) |
| `assets/css/evs.css` | `.ef-fade` | 30px / 0.65s | ✅ Already correct |
| `assets/css/about.css` | `.au-fade-up` | 32px / 0.7s | 30px / 0.65s |
| `assets/css/team.css` | `.team-fade` | 30px / 0.6s | 30px / 0.65s |
| `assets/css/services.css` | `.sf-fade` | 28px / 0.65s | 30px / 0.65s |
| `assets/css/franchise.css` | `.ff-fade` | 28px / 0.65s | 30px / 0.65s |
| `assets/css/advertising.css` | `.af-fade` | 28px / 0.6s | 30px / 0.65s |

---

## 6. Mobile Chrome Optimization

### 10 fixes applied for mobile browser compatibility:

| # | Fix | File(s) | Details |
|---|-----|---------|---------|
| 1 | **Input font-size** | `styles.css` | `.95rem` → `1rem` (prevents iOS auto-zoom on focus) |
| 2 | **100vh → 100dvh fallback** | `styles.css`, `evs.css`, `about.css`, `services.css`, `franchise.css`, `advertising.css` | All hero sections + mega menu get `dvh` after `vh` |
| 3 | **Touch target: Hamburger** | `styles.css` | 30px → 44×44px with centered content |
| 4 | **Touch target: Theme toggle** | `styles.css` | Height adjusted, `::after` pseudo for 44px tap area |
| 5 | **Touch target: Footer social** | `styles.css` | 36px → 44px |
| 6 | **Touch target: Back-to-top** | `styles.css` | 44px → 48px |
| 7 | **Touch target: WhatsApp float** | `styles.css` | 44px → 48px on mobile, `env(safe-area-inset-bottom)` |
| 8 | **theme-color meta** | `includes/head.php` | `<meta name="theme-color" content="#00c853">` |
| 9 | **viewport-fit=cover** | `includes/head.php` | Added to viewport meta for iPhone notch |
| 10 | **Footer grid gap** | `styles.css` | `gap: 1.5rem` at 1024px breakpoint |

### Additional Mobile Enhancements:
- `@media (prefers-reduced-motion: reduce)` — disables all animations for accessibility
- `a, button { -webkit-tap-highlight-color: rgba(0,200,83,.2); }` — branded tap feedback
- `env(safe-area-inset-bottom)` on back-to-top + WhatsApp float
- Mega menu: `height: 100dvh` fallback

---

## 7. Final Bug Fixes

| # | Bug | Fix | File |
|---|-----|-----|------|
| 1 | Hamburger spans invisible (`align-items: center` zeroed width) | Removed `align-items: center`, kept `justify-content: center` | `styles.css` |
| 2 | Theme toggle 54×44px looked square | Height → 28px visual + `::after` invisible tap area (44px) | `styles.css` |
| 3 | Footer link touch area too small (24px) | Padding `.3rem` → `.5rem` | `styles.css` |
| 4 | team.css hero missing dvh | Added `min-height: 50dvh` fallback | `team.css` |

---

## 8. Files Modified — Summary Table

### PHP Files

| File | Changes |
|------|---------|
| `index.php` | AI refs removed, vehicle specs added, `#rent-ev` + `#ezyfleet` anchors |
| `evs.php` | AI refs removed, vehicle specs added, same structure as index |
| `about.php` | AI refs removed, "Our Story" rebrand, Certificates + Awards sections, founder bio |
| `team.php` | Competency tags added, bios updated, Join CTA → join.php |
| `services.php` | "EzyFleet.ai" → "EzyFleet" |
| `contact.php` | `franchise.php` → `join.php#franchise` |
| `form-handler.php` | `join` form type added |
| **`join.php`** | **NEW FILE** — Combined Join Us page |
| `includes/head.php` | `viewport-fit=cover`, `theme-color #00c853` meta |
| `includes/header.php` | Nav links removed, logo + CTA + toggle + hamburger only |
| `includes/mega-menu.php` | 4-column layout, `megaActive()`, active indicators, service cards |
| `includes/footer.php` | 4-column grid, WhatsApp float, back-to-top |

### CSS Files

| File | Changes |
|------|---------|
| `assets/css/styles.css` (~1600 lines) | Header layout, mega menu dark mode, touch targets, dvh, safe-area, reduced-motion, tap-highlight, fade-up, footer grid, hamburger fix, toggle fix, footer link padding |
| `assets/css/evs.css` | 10× `[data-theme]` → `body.dark-mode`, dvh fallback, fade standardized |
| `assets/css/about.css` | 8× `[data-theme]` → `body.dark-mode`, dvh fallback, fade 32px→30px, 0.7s→0.65s |
| `assets/css/team.css` | 14× `[data-theme]` → `body.dark-mode`, scoped selectors, fade 0.6s→0.65s, dvh fallback |
| `assets/css/services.css` | Fade 28px→30px, dvh fallback |
| `assets/css/franchise.css` | Fade 28px→30px, dvh fallback |
| `assets/css/advertising.css` | Fade 28px→30px, 0.6s→0.65s, dvh fallback |

### JS Files

| File | Changes |
|------|---------|
| `assets/js/script.js` | Backdrop click handler for mega menu close |

---

## 9. Project Architecture

```
EzygoBD/
├── index.php              ← Homepage (rental form, fleet, specs)
├── evs.php                ← Our EVs (similar to index)
├── about.php              ← Our Story (mission, founder, certs, awards)
├── team.php               ← Team (bios + competency tags)
├── services.php           ← Services catalog
├── contact.php            ← Contact + support forms
├── join.php               ← NEW: Franchise + Advertising + Careers
├── franchise.php          ← Franchise details (FOCO/FOFO)
├── advertising.php        ← Advertising services
├── form-handler.php       ← Central form processor ($devMode=true)
│
├── includes/
│   ├── head.php           ← <head> (fonts, meta, CSS loader)
│   ├── header.php         ← Fixed header (logo + CTA + toggle + hamburger)
│   ├── mega-menu.php      ← Full-screen nav (4 cols + service cards)
│   └── footer.php         ← Footer (4 cols + WhatsApp + back-to-top)
│
├── assets/
│   ├── css/
│   │   ├── styles.css     ← Global (~1600 lines)
│   │   ├── evs.css        ← EVs page
│   │   ├── about.css      ← About page
│   │   ├── team.css       ← Team page
│   │   ├── services.css   ← Services page
│   │   ├── contact.css    ← Contact page
│   │   ├── franchise.css  ← Franchise page
│   │   └── advertising.css← Advertising page
│   │
│   ├── js/
│   │   ├── script.js      ← Global (dark mode, mega menu, observers)
│   │   ├── evs.js         ← EVs interactions
│   │   ├── about.js       ← About interactions
│   │   ├── contact.js     ← Contact forms
│   │   ├── services.js    ← Services interactions
│   │   ├── franchise.js   ← Franchise interactions
│   │   └── advertising.js ← Advertising interactions
│   │
│   ├── photo/             ← Images (product/, team/)
│   └── videos/            ← Hero background videos
│
└── submissions/           ← Form logs (dev mode)
    └── 2026-04-02.log
```

## 10. Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP 8.3.6 (built-in dev server, port 5500) |
| Frontend | HTML5, CSS3, Vanilla JavaScript (no frameworks) |
| Fonts | Google Fonts — Poppins (300, 400, 500, 600, 700, 800, 900) |
| Icons | Font Awesome 6.5.1 CDN |
| CSS Features | Custom Properties, Grid, Flexbox, `clamp()`, `dvh`, `env()` |
| Dark Mode | `body.dark-mode` class toggle via JS + localStorage |
| Responsive | Breakpoints: 480px, 500px, 580px, 640px, 768px, 900px, 1024px |
| Forms | All → `form-handler.php`, dev mode logs to `/submissions/` |
| Accessibility | `prefers-reduced-motion`, 44px+ touch targets, `-webkit-tap-highlight` |

---

## 11. Project Readiness Assessment — 85-90%

### Code Side — COMPLETE

| Area | Status | Details |
|------|--------|---------|
| Dark Mode | ✅ Done | `body.dark-mode` consistent across all 8 CSS files |
| Responsive Layout | ✅ Done | Breakpoints at 480, 500, 580, 640, 768, 900, 1024px |
| Fade Animations | ✅ Done | 30px / 0.65s standardized across 7 files |
| Mobile Chrome | ✅ Done | dvh, touch targets, safe-area, reduced-motion |
| Navigation | ✅ Done | Mega menu, active page, backdrop close |
| Forms | ✅ Done | All route through form-handler.php, sanitized |
| Header/Footer | ✅ Done | Clean, consistent across all pages |
| Accessibility | ✅ Done | reduced-motion, tap-highlight, 44px+ targets |

### Content Side — NEEDS CLIENT INPUT

| # | Issue | Severity | Count | Action Required |
|---|-------|----------|-------|-----------------|
| 1 | **Dead links (`href="#"`)** | HIGH | 30+ | Social icons, app store badges, resource cards, team social, privacy policy — all point to `#` |
| 2 | **`$devMode = true`** in form-handler.php | HIGH | 1 | Emails disabled, only logs to `/submissions/`. Set `false` for production |
| 3 | **Privacy Policy page missing** | MEDIUM | 1 | Legal requirement — need to create page |
| 4 | **Social media URLs dummy** | MEDIUM | 4 per location | Facebook, Instagram, LinkedIn, YouTube all `#` |
| 5 | **App Store / Google Play links `#`** | MEDIUM | 2 | CTA buttons dead — need real store URLs |
| 6 | **Team member social links `#`** | LOW | 6 | LinkedIn/email per member all dummy |

### Dead Links Inventory

**Footer (`includes/footer.php`):**
- Facebook → `#`
- Instagram → `#`
- LinkedIn → `#`
- YouTube → `#`
- Privacy Policy → `#`

**About page (`about.php`):**
- Founder LinkedIn → `#`
- Founder X/Twitter → `#`
- Founder Facebook → `#`
- Resource: User Manual → `#`
- Resource: Charging Map → `#`
- Resource: Safety Guidelines → `#`
- CTA social (Facebook, Instagram, YouTube, LinkedIn) → `#`

**Team page (`team.php`):**
- 3 members × (LinkedIn + Email) = 6 dead links

**Index page (`index.php`):**
- Google Play badge → `#`
- App Store badge → `#`
- Footer social (Facebook, Instagram, LinkedIn) → `#`

---

## 12. Production Deployment Checklist

```
PRE-DEPLOY (Required):
[ ] $devMode = false                → form-handler.php line 136
[ ] Configure real SMTP             → email sending for form submissions
[ ] Add real social URLs            → footer.php, about.php, index.php
[ ] Add real App Store URLs         → index.php (Google Play + App Store)
[ ] Add team member LinkedIn/email  → team.php
[ ] Create Privacy Policy page      → new file, link from footer.php
[ ] Add real team photos            → assets/photo/team/
[ ] Add real product photos         → assets/photo/product/
[ ] Compress hero videos            → assets/videos/ (target < 5MB each)

SERVER SETUP:
[ ] SSL certificate (HTTPS)
[ ] Domain DNS configured
[ ] PHP 8.x on production server
[ ] File permissions secured (submissions/ writable)
[ ] .htaccess or nginx config for clean URLs
[ ] Error reporting off (display_errors = 0)

POST-DEPLOY:
[ ] Test all forms (contact, rent_ev, join, support, partnership)
[ ] Test dark mode on all pages
[ ] Test on real mobile devices (iPhone Safari + Android Chrome)
[ ] Verify email delivery
[ ] Check all navigation links work
[ ] Run Google PageSpeed Insights
[ ] Submit sitemap to Google Search Console
```

---

## 13. Known Low-Priority Items

| Item | Impact | Notes |
|------|--------|-------|
| `backdrop-filter: blur(20px)` on header | Low-end Android may lag | Consider reducing to `blur(12px)` if needed |
| Some hardcoded `rgba()` colors | Code consistency | Could migrate to CSS custom properties |
| `contact.css` uses some `px` values | Minor inconsistency | Functional, just not matching `rem` convention |
| Hero video autoplay | May not work on some mobile browsers | Fallback background image already in place |

---

*Document generated: April 19, 2026*  
*Last updated: April 19, 2026*  
*Total files modified: 18 (12 PHP + 7 CSS + 1 JS, minus overlaps)*  
*Project readiness: ~85-90% (code complete, content pending)*
