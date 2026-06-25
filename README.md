# vibert.mathieu

Personal CV / portfolio website of **Mathieu Vibert** — a bilingual (French / English)
single-page application built in plain PHP, served at
[vibert.mathieu.free.fr](http://vibert.mathieu.free.fr).

The site presents a home page (presentation, contact and professional networks) and a
detailed *Curriculum Vitae* (computer skills, work experience, education) that can also be
downloaded as a PDF.

## Features

- **Bilingual content** — French (default) and English, switchable from the navbar. The
  chosen language is persisted in the PHP session.
- **Single front controller** — every page is routed through [index.php](index.php) using
  a query-string parameter (`?home`, `?cv`).
- **Skills summary** — technology "signs" (logos) grouped by category (software, web,
  DBMS, version control, OS, education, companies), each linking to the relevant external
  site.
- **Downloadable CV** — the CV is served as a PDF through
  [files/downloadFile.php](files/downloadFile.php), in the language currently selected.
- **Responsive layout** — built on Bootstrap and jQuery.
- **SEO / analytics** — `robots.txt`, `sitemap.xml`, Google site verification and Google
  Analytics (gtag).
- **Environment-aware** — automatically detects whether it runs locally (WAMP) or on the
  remote host and adjusts URL paths and database settings accordingly.

## Tech stack

- **PHP** (procedural, no framework) — server-side rendering
- **Bootstrap** + **jQuery** — bundled under [frameworks/](frameworks/)
- **Apache** (WAMP locally, free.fr hosting in production)

## Project structure

```
.
├── index.php               # Front controller: routing, language selection, page layout
├── admin/                  # Restricted area (denied by .htaccess); holds DB settings
├── arrays/                 # Configuration data
│   ├── common.php          #   pages, languages, networks, skills summary groups
│   ├── cvInfo.php          #   name, email, CV file formats / MIME types
│   └── externalLinks.php   #   external URLs for the skill/company signs
├── classes/                # PHP classes (Query helper)
├── contents/               # View fragments included by index.php
│   ├── header.php / menu.php / footer.php
│   ├── home.php / cv.php / summary.php
│   └── seo_google.php
├── css/                    # Site-specific stylesheet
├── files/                  # CV documents (PDF/DOCX) + downloadFile.php handler
├── flags/                  # Language flag images
├── frameworks/             # Bootstrap & jQuery
├── inc/                    # Include helpers
│   ├── htmlFacilities.inc.php   # rendering helpers, URL/redirect, remote detection
│   └── testFunctions.inc.php
├── js/                     # site.js (language dropdown behaviour)
├── lang/                   # Translations
│   ├── french.php
│   └── english.php
├── pictures/               # Profile picture, icons and technology signs
├── robots.txt
└── sitemap.xml
```

Every PHP source file (except entry points) starts with
`defined('ROOT') or die('Restricted access');` so it cannot be executed by direct access.

## How it works

1. [index.php](index.php) defines the `ROOT` constant, then includes the configuration
   arrays and helper functions.
2. The requested page is resolved from the query string (`$contents` in
   [arrays/common.php](arrays/common.php)); it defaults to `home`.
3. The session language is set from `?lang=`, a posted language form, or defaults to
   `french`, then the matching file in [lang/](lang/) is loaded.
4. The layout is assembled by including the header, the selected content fragment, the
   skills summary and the footer.

## Running locally

This project is designed to run under **WAMP** (Windows / Apache / MySQL / PHP).

1. Place the project in your Apache web root (e.g. `c:\wamp64\www\vibert.mathieu`).
2. Start WAMP (Apache + PHP).
3. Open <http://localhost/vibert.mathieu> in a browser.

Local vs. remote behaviour is detected automatically in
[inc/htmlFacilities.inc.php](inc/htmlFacilities.inc.php) by checking whether the path
contains `wamp`, which adjusts the base URL path (`/vibert.mathieu`) accordingly.

## Deployment

The production site is hosted on **free.fr** at
[vibert.mathieu.free.fr](http://vibert.mathieu.free.fr). Deployment is a matter of
uploading the files; when not running under WAMP the site treats itself as remote.

## License / contact

This is a personal website. Content © Mathieu Vibert — all rights reserved.

Contact: see the links on the site (email and professional networks).
