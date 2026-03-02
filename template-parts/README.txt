# Kiezbrand Theme Documentation

This document is a **complete practical guide** for both developers and content editors working with the Kiezbrand WordPress theme.

---

## 1) Developer Documentation

### 1.1 Theme architecture

The theme is a classic PHP-based WordPress theme that keeps logic lightweight and lets Elementor handle most layout/design work.

Core architectural points:

- **Theme bootstrap + feature registration** lives in `functions.php`.
  - Registers theme supports (title tag, featured images, HTML5, custom logo, editor styles, responsive embeds).
  - Registers menu locations (`primary`, `footer`).
  - Registers Elementor Theme Builder locations.
  - Enqueues main CSS + component CSS + frontend JS.
  - Registers widget area (`sidebar-1`).
- **Templates** use standard WordPress hierarchy:
  - `front-page.php` for the homepage marketing layout.
  - `page.php` for pages.
  - `single.php` for single posts.
  - `archive.php` for post archives.
  - `index.php` fallback template.
- **Reusable layout shell**:
  - `header.php` defines the HTML head, body open, branding and primary navigation.
  - `footer.php` currently exists but is empty (no footer markup output from this file yet).
- **Styling strategy**:
  - `style.css` holds base reset, typography, layout, header, hero and responsive rules.
  - `assets/css/components.css` provides reusable content component styles.
  - `assets/css/editor-style.css` aligns editor typography with frontend feel.
- **JavaScript strategy**:
  - `assets/js/main.js` is enqueued but currently empty (ready for progressive enhancement scripts).

---

### 1.2 File structure explanation

```text
X-Theme/
├─ functions.php                  # Theme setup, supports, menus, Elementor locations, assets, sidebar, excerpt filter
├─ style.css                      # Theme metadata + base and layout styles
├─ header.php                     # Global header markup and primary navigation
├─ footer.php                     # Footer template file (currently empty)
├─ front-page.php                 # Conversion-focused homepage template with placeholder sections
├─ page.php                       # Standard page rendering
├─ single.php                     # Single post rendering with meta + featured image
├─ archive.php                    # Archive listing template with excerpts
├─ index.php                      # Main fallback loop template
├─ template-parts/
│  └─ content-none.php            # “No posts found” message block
├─ assets/
│  ├─ css/
│  │  ├─ components.css           # Shared content and widget styling
│  │  └─ editor-style.css         # Block editor typography tuning
│  └─ js/
│     └─ main.js                  # Frontend JS entry (currently empty)
└─ screenshot.png                 # Theme preview image
```

---

### 1.3 How Elementor integration works

This theme is Elementor-friendly by design.

1. In `functions.php`, the theme hooks `elementor/theme/register_locations` and calls `register_all_core_location()`.
   - This allows Elementor Pro Theme Builder to control core theme locations (e.g., header/footer/single/archive templates where configured in Elementor).
2. Templates output `the_content()` in page/post contexts.
   - Elementor writes content into WordPress content, so Elementor-built content renders correctly through normal templates.
3. CSS is intentionally minimal and utility-focused.
   - The base reset avoids heavy opinionated styling to reduce conflicts with Elementor widgets.

Developer note: if Elementor Pro is not active, WordPress templates still render normally and the theme remains functional.

---

### 1.4 How to extend the theme

Recommended extension paths:

#### A) Add a custom post type for tours (optional upgrade)

Current state: tours are represented as normal content placeholders on `front-page.php`.

If you need scalable tour management:

- Register a `tour` custom post type in `functions.php` or a site plugin.
- Add archive/single templates (`archive-tour.php`, `single-tour.php`) if needed.
- Keep Elementor templates for visual design while using CPT data for structure.

#### B) Add dedicated template parts

To reduce duplication across `page.php`, `single.php`, `index.php`, move common article markup into `template-parts/` files and call `get_template_part()`.

#### C) Add JS enhancements safely

Use `assets/js/main.js` for non-blocking enhancements such as:

- sticky header interactions,
- smooth anchor offset fixes,
- micro-interactions for CTA buttons.

Keep all JS progressive so pages work without script execution.

#### D) Add theme options carefully

For editor-friendly controls, add settings in:

- Customizer (legacy-compatible), or
- an options page via ACF/other plugin.

Use these for global links (ticket provider, shop URL, social links) so editors do not need code edits.

---

### 1.5 Performance notes

Current performance-positive decisions:

- Only 2 stylesheets + 1 script are enqueued, versioned with theme version.
- Script is loaded in footer (`true` in `wp_enqueue_script`) to reduce render-blocking.
- No heavy JS framework in the theme.
- CSS is concise and mostly layout-level.

Performance watchouts / improvements:

- `front-page.php` includes placeholder inline styles on sections; migrate these to CSS files for cache efficiency.
- `main.js` is empty; keep it lean and avoid large dependencies.
- If adding media-heavy Elementor sections, enforce image compression and responsive image sizes.

---

### 1.6 SEO setup

SEO in the current theme is foundational and plugin-compatible.

Already implemented:

- `title-tag` support lets WordPress/SEO plugins control `<title>`.
- Semantic template hierarchy with clear heading usage in templates.
- Archive excerpts (`the_excerpt()`) support cleaner listing pages.

Recommended SEO stack for production:

- Install and configure an SEO plugin (Yoast, Rank Math, etc.).
- Set unique SEO titles/meta descriptions per key page (home, tours, fan shop, guide pages).
- Configure schema via plugin (Organization, Article, Breadcrumb).
- Ensure one clear H1 per page in Elementor templates.
- Use descriptive alt text for all tour and merch imagery.

---

## 2) Editor Documentation (Beginner-Friendly)

This section is written for non-developer WordPress users.

### 2.1 How to edit pages in Elementor

1. In WordPress admin, go to **Pages**.
2. Open the page you want to change.
3. Click **Edit with Elementor**.
4. Click any section/widget and update text, images, buttons, and spacing.
5. Click **Update** to publish.

Tips:

- Keep one clear headline at the top of each page.
- Use consistent button labels (e.g., “Book now”, “See dates”, “Shop now”).
- Preview on desktop + mobile before publishing.

---

### 2.2 How to replace demo content

The current homepage contains placeholder text in `front-page.php`. You can replace this in two ways:

#### Option A (recommended): Elementor homepage

1. Create or open your Home page.
2. Build the full page in Elementor (hero, tours, testimonials, shop links).
3. Go to **Settings → Reading**.
4. Set **Your homepage displays → A static page** and choose your Home page.

#### Option B: Code-based placeholders

If your team still uses the PHP homepage template, a developer must edit `front-page.php` to replace placeholder copy.

---

### 2.3 How to add new tours

Current theme does not include a dedicated “Tours” custom post type by default.

Simple workflow (no code):

1. Go to **Posts → Add New** (or create a normal **Page**).
2. Add tour title, description, images, schedule, and CTA button.
3. Publish.
4. Add this new tour link to:
   - homepage Elementor sections,
   - primary menu (Appearance → Menus),
   - any “Featured Tours” widgets/sections.

If you need structured tour management (price fields, duration fields, guide assignment), ask a developer to add a Tours CPT.

---

### 2.4 How to update guides

If “guides” are team/member pages:

1. Store each guide as a page or post.
2. Edit content in Elementor (bio, languages, specialties, photo).
3. Keep a consistent layout template for every guide profile.
4. Update links from your main tour pages to the correct guide pages.

Editorial checklist for each guide profile:

- Clear profile photo
- Short bio paragraph
- Languages spoken
- Tour focus areas
- Contact or booking CTA

---

### 2.5 How to manage fan shop links

You usually manage fan shop links in three places:

1. **Elementor buttons** (homepage/shop sections).
2. **Navigation menus** in **Appearance → Menus**.
3. **Any promotional banners** inside Elementor pages/posts.

Best practice:

- Use one canonical shop URL.
- Update all major CTAs after changing the link.
- After updating links, click through them on mobile and desktop.

---

### 2.6 How to maintain SEO basics (editor workflow)

For every important page/post:

1. Set one primary keyword/topic.
2. Write a clear page title with that topic.
3. Write a short meta description in your SEO plugin.
4. Keep one H1 and logical H2/H3 headings.
5. Add internal links to related tours, guides, and shop pages.
6. Add alt text to every meaningful image.
7. Update content when details change (dates, pricing, availability).

Monthly SEO hygiene:

- Check broken links (especially booking/shop links).
- Refresh top pages with new details or FAQs.
- Confirm homepage and tour pages still match user intent.

---

## 3) Quick maintenance checklist

### Developer

- Keep `functions.php` lightweight and modular.
- Test template hierarchy after adding new content types.
- Avoid CSS conflicts with Elementor by scoping custom rules.
- Keep JS optional and performance-focused.

### Editor

- Update tour offers and guide info regularly.
- Verify all booking/shop links after every content update.
- Maintain clear headings and image alt text.
- Preview desktop + mobile before publishing.

---

## 4) Current limitations to be aware of

- `footer.php` has no output yet (add markup if you need a theme-level footer fallback).
- `assets/js/main.js` is currently empty.
- No dedicated tours/guides custom post types are included by default.

These are normal for an Elementor-first project and can be expanded as requirements grow.
