# Central Strategies — WordPress Theme

A custom WordPress theme converted from the static HTML prototype. All navigation, logos, and internal links are powered by WordPress menus, widgets, Custom Logo, and Page Templates — **no hardcoded `.html` links**.

---

## Theme Structure

```
central-strategies/
├── style.css                          # Theme header (required by WP)
├── functions.php                      # Setup, menus, walkers, helpers
├── header.php                         # <head>, wp_head(), loads header partial
├── footer.php                         # Loads footer partial, wp_footer()
├── front-page.php                     # Home page (section partials)
├── index.php                          # Fallback template
├── page.php                           # Default page template
├── page-about.php                     # Template Name: About
├── page-blog.php                      # Template Name: Blog
├── page-faq.php                       # Template Name: FAQ
├── page-contact.php                   # Template Name: Contact
├── page-services.php                  # Template Name: Services
├── assets/js/site-home.js             # Front-end JS (header, reveal, counters)
├── template-parts/
│   ├── head/head-inner-home.php       # Tailwind CDN + global CSS
│   ├── header/site-header-home.php    # Header — front page
│   ├── header/site-header-inner.php   # Header — inner pages
│   ├── footer/site-footer.php         # Four-column footer
│   └── sections/                      # Home page section partials
│       ├── section-hero.php
│       ├── section-solutions.php
│       ├── section-clients.php
│       ├── section-about.php
│       ├── section-stats.php
│       ├── section-insights.php
│       ├── section-cta.php
│       └── section-careers.php
└── README.md
```

---

## Setup Steps (After Installing WordPress)

### Step 1 — Install the Theme

1. Copy the entire `central-strategies/` folder into `wp-content/themes/`.
2. Go to **Appearance → Themes** and activate **Central Strategies**.

### Step 2 — Upload the Logo

1. Go to **Appearance → Customize → Site Identity**.
2. Click **Select Logo** and upload `logo.png`.
3. Publish.

The theme uses `has_custom_logo()` everywhere — header, footer, and the about section on the home page all pull from this single source.

### Step 3 — Create Pages

Create the following pages in **Pages → Add New**:

| Page Title   | Slug (Permalink) | Page Template (right sidebar) |
|-------------|------------------|-------------------------------|
| Home        | `home`           | — (leave default)             |
| About       | `about`          | **About**                     |
| Services    | `services`       | **Services**                  |
| Blog        | `blog`           | **Blog**                      |
| FAQ         | `faq`            | **FAQ**                       |
| Contact     | `contact`        | **Contact**                   |

**Important**: For each page, select the matching **Page Template** from the "Template" dropdown in the Page editor's right sidebar/panel. Without this, WordPress will use the generic `page.php` instead of the styled template.

For the **About** page, add your "Our Story" content in the WordPress editor — it renders inside the styled section automatically. Same for **Contact** (add a contact form plugin like WPForms or Contact Form 7) and **Services**.

The **Blog** template pulls real WordPress posts automatically — no need to add body content. The **FAQ** template renders the hardcoded Q&A list (you can later convert this to an ACF repeater or custom post type).

### Step 4 — Set the Homepage

1. Go to **Settings → Reading**.
2. Select **A static page**.
3. Set **Homepage** to the "Home" page you created.
4. Optionally set **Posts page** to the "Blog" page.
5. Save.

### Step 5 — Set Up Navigation Menus

Go to **Appearance → Menus** and create the following menus:

#### Menu 1: Primary Navigation
- **Menu Name**: Primary Navigation
- **Display location**: ✅ Primary Navigation
- **Items to add** (in order):
  1. Home → link to `Home` page
  2. Services → link to `Services` page
  3. About → link to `About` page
  4. Blog → link to `Blog` page
  5. FAQ → link to `FAQ` page

#### Menu 2: Mobile Navigation
- **Menu Name**: Mobile Navigation
- **Display location**: ✅ Mobile Navigation
- **Items**: Same as Primary (or add extra items like Careers as a custom link)

#### Menu 3: Footer — Our Solutions
- **Menu Name**: Footer Solutions
- **Display location**: ✅ Footer — Our Solutions
- **Items**: Custom Links for each solution (Cybersecurity, Enterprise IT, AI/ML, etc.) — point to `#` or to individual service anchors/pages as you build them out.

#### Menu 4: Footer — Company
- **Menu Name**: Footer Company
- **Display location**: ✅ Footer — Company
- **Items**:
  1. About Us → link to `About` page
  2. Blog → link to `Blog` page
  3. FAQ → link to `FAQ` page
  4. Careers → custom link (or page)
  5. Newsroom → custom link (or page)

#### Menu 5: Footer — Legal
- **Menu Name**: Footer Legal
- **Display location**: ✅ Footer — Legal
- **Items**: Custom Links for Privacy Policy, Terms of Service, Accessibility.

### Step 6 — Add Blog Posts

1. Go to **Posts → Categories** and create categories like: Cybersecurity, Cloud, AI/ML, Data Analytics, etc.
2. Create blog posts and assign them to categories.
3. The Blog page template automatically displays posts with category filter buttons.

### Step 7 — Site Identity

1. Go to **Settings → General**.
2. Set **Site Title** to "Central Strategies".
3. Set **Tagline** to your company description (this appears in the footer).

---

## How It Works — No More `.html` Links

| Before (static)                        | After (WordPress)                              |
|----------------------------------------|------------------------------------------------|
| `<a href="about.html">`               | `wp_nav_menu()` with custom walker             |
| `<a href="contact.html">`             | `<?php echo esc_url(cs_contact_url()); ?>`     |
| `<a href="blog.html">`                | `get_permalink(get_page_by_path('blog'))`      |
| `<img src="logo.png">`                | `has_custom_logo()` + `wp_get_attachment_image_url()` |
| Hardcoded copyright year               | `<?php echo date('Y'); ?>`                     |
| Hardcoded site name                    | `<?php bloginfo('name'); ?>`                   |

**Custom Nav Walkers** in `functions.php` output the exact same Tailwind classes as the static HTML, so the design is preserved pixel-for-pixel while navigation is fully dynamic.

---

## Registered Menu Locations

| Location ID        | Label                   | Used In                     |
|-------------------|-------------------------|-----------------------------|
| `primary`         | Primary Navigation      | Desktop nav (both headers)  |
| `mobile`          | Mobile Navigation       | Mobile hamburger menu       |
| `footer_solutions`| Footer — Our Solutions  | Footer column 2             |
| `footer_company`  | Footer — Company        | Footer column 3             |
| `footer_legal`    | Footer — Legal          | Footer bottom bar           |

---

## Page Templates Available

| Template File       | Template Name | Purpose                         |
|---------------------|--------------|----------------------------------|
| `page-about.php`    | About        | About page with hero + values    |
| `page-blog.php`     | Blog         | Blog listing with category filter|
| `page-faq.php`      | FAQ          | Accordion FAQ + CTA              |
| `page-contact.php`  | Contact      | Contact page with hero           |
| `page-services.php` | Services     | Services page with hero          |

---

## Production Notes

- **Tailwind CSS**: Currently loaded via CDN in `head-inner-home.php`. For production, compile Tailwind locally and enqueue the built CSS file.
- **Blog Filtering JS**: The category filter buttons on the Blog page template use the same JS pattern from the static prototype. Posts are loaded via `WP_Query` and use `data-category` attributes for client-side filtering.
- **ACF Integration**: The FAQ page currently uses a hardcoded PHP array. Convert to an ACF repeater field or custom post type for admin-editable FAQs.
- **Contact Form**: Use WPForms, Contact Form 7, or Gravity Forms — add the shortcode to the Contact page's WordPress editor.
