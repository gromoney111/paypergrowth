# PayPerGrowth WordPress Theme

A professional, responsive WordPress theme designed for digital marketing agencies. Built with SEO best practices, Google Analytics/GTM integration, Schema.org structured data, and conversion-focused layouts.

## Features

### Design & Layout
- **Fully Responsive** - Mobile-first design optimized for all screen sizes
- **Digital Marketing Agency Theme** - Professional design tailored for PPC/SEM agencies
- **Modern UI** - Clean, conversion-focused layouts with smooth animations
- **Custom Page Templates** - 9 pre-built page templates for every section
- **Accessibility Ready** - ARIA landmarks, keyboard navigation, semantic HTML5

### SEO (Latest Google Guidelines 2024-2026)
- **Schema.org Structured Data** - Organization, LocalBusiness, WebSite, BreadcrumbList, FAQPage, Article
- **SEO Meta Tags** - Auto-generated title, description, Open Graph, Twitter Cards
- **Canonical URLs** - Automatic canonical tag generation
- **Robots Directives** - Proper index/noindex handling per page type
- **XML Sitemap** - WordPress 5.5+ built-in sitemap support
- **Core Web Vitals Optimized** - Fast loading, minimal layout shifts
- **Semantic HTML5** - Proper heading hierarchy and landmark roles

### Analytics & Tracking
- **Google Tag Manager** (GTM-M6FPT4LF) - Head and body integration
- **Google Analytics 4** (G-00X84FLPB5) - gtag.js implementation
- **Google Search Console** - Verification meta tag support
- **Event Tracking** - Contact form submissions tracked in GA4 + GTM dataLayer
- **Customizer Controls** - Change GTM/GA4 IDs without editing code

### Performance
- **Preconnect** hints for external resources
- **Deferred JavaScript** loading
- **No jQuery dependency** - Vanilla JavaScript only
- **Disabled WordPress emojis** for faster loading
- **Lazy loading** for images below the fold
- **Minimal CSS** - No bloated frameworks

### WordPress Integration
- **Custom Post Types** - Case Studies, Services, Testimonials, Team Members
- **Custom Taxonomies** - Service Categories, Industries
- **Theme Customizer** - Contact info, social links, analytics IDs
- **Widget Areas** - Footer widgets, blog sidebar
- **AJAX Contact Form** - Server-side validation with email notifications
- **Navigation Menus** - Primary and footer menu locations

---

## Installation

### Method 1: WordPress Admin Upload
1. Download or zip the `paypergrowth` theme folder
2. Go to **WordPress Admin > Appearance > Themes > Add New > Upload Theme**
3. Select the zipped theme file and click **Install Now**
4. Click **Activate**

### Method 2: FTP/File Manager
1. Upload the `paypergrowth` folder to `/wp-content/themes/`
2. Go to **WordPress Admin > Appearance > Themes**
3. Find "PayPerGrowth" and click **Activate**

---

## Setup Guide

### Step 1: Activate Theme
Navigate to **Appearance > Themes** and activate PayPerGrowth.

### Step 2: Create Pages
Create the following pages in **Pages > Add New**:

| Page Title | Slug | Template to Select |
|---|---|---|
| Home | (set as front page) | Front Page (auto) |
| About Us | about-us | About Us |
| Google Ads | google-ads | Google Ads Service |
| Bing Ads | bing-ads | Bing Ads Service |
| Digital Marketing | digital-marketing | Digital Marketing Service |
| Web Development | web-development | Web Development Service |
| Case Studies | case-studies | Case Studies |
| Pricing | pricing | Pricing |
| Contact | contact | Contact |
| Privacy Policy | privacy-policy | Default |
| Terms of Service | terms-of-service | Default |
| Refund Policy | refund-policy | Default |

### Step 3: Set Homepage
1. Go to **Settings > Reading**
2. Select **"A static page"**
3. Set **Homepage** to your "Home" page
4. Set **Posts page** to a "Blog" page (create one if needed)

### Step 4: Configure Menus
1. Go to **Appearance > Menus**
2. Create a menu and assign it to **"Primary Menu"**
3. Add your pages to the menu in the desired order

### Step 5: Configure Theme Settings
Go to **Appearance > Customize** and set:

#### Contact Information
- Phone number
- Email address
- Office address

#### Social Media Links
- Facebook URL
- Twitter/X URL
- LinkedIn URL
- Instagram URL

#### Analytics & Tracking
- GTM Container ID (default: GTM-M6FPT4LF)
- GA4 Measurement ID (default: G-00X84FLPB5)
- Google Search Console verification code

### Step 6: Google Search Console Setup
1. Go to [Google Search Console](https://search.google.com/search-console/)
2. Add your property (URL prefix: https://paypergrowth.com)
3. Choose **HTML tag** verification method
4. Copy the `content` value from the meta tag
5. Paste it in **Customize > Analytics & Tracking > Search Console Verification Code**
6. Verify in Search Console

### Step 7: Submit Sitemap
1. In Google Search Console, go to **Sitemaps**
2. Submit: `https://paypergrowth.com/wp-sitemap.xml`
3. This will index all pages automatically

### Step 8: Index All Pages
WordPress generates sitemaps automatically. Ensure:
- All pages are set to **Published** status
- No pages have `noindex` meta (only 404/search pages are noindexed)
- Sitemap is submitted to Search Console
- Pages are linked from navigation (they already are via the theme)

---

## Google Analytics & GTM Setup

### GTM (Google Tag Manager)
The theme includes GTM container `GTM-M6FPT4LF` with:
- Script in `<head>` (loaded first for early tracking)
- `<noscript>` fallback in `<body>` via `wp_body_open`

### GA4 (Google Analytics 4)
The theme includes GA4 measurement ID `G-00X84FLPB5` with:
- gtag.js loaded asynchronously
- Page views tracked automatically
- Contact form submissions tracked as `generate_lead` events

### Custom Events Tracked
| Event | Trigger | Parameters |
|---|---|---|
| `generate_lead` | Contact form submission | event_category, event_label |
| `form_submission` | Form submit (GTM dataLayer) | form_type, service_interest |

---

## Custom Post Types

### Case Studies
- Add via **Case Studies > Add New**
- Custom fields: `metric_1_value`, `metric_1_label`, `metric_2_value`, `metric_2_label`, `metric_3_value`, `metric_3_label`
- Taxonomy: Industries

### Testimonials
- Add via **Testimonials > Add New**
- Custom field: `position` (e.g., "CEO, Company Name")
- Featured image used as avatar

### Team Members
- Add via **Team Members > Add New**
- Custom field: `position` (e.g., "Head of PPC")
- Use excerpt for short bio
- Menu order for display sequence

### Services
- Add via **Services > Add New**
- Taxonomy: Service Categories
- Use page templates for detailed service pages

---

## File Structure

```
paypergrowth/
├── style.css                          # Main stylesheet + theme metadata
├── functions.php                      # Theme setup, GTM, GA4, SEO, Schema
├── header.php                         # Site header with navigation
├── footer.php                         # Site footer
├── front-page.php                     # Homepage template
├── index.php                          # Blog listing
├── page.php                           # Default page template
├── single.php                         # Single post template
├── archive.php                        # Archive/category template
├── search.php                         # Search results
├── searchform.php                     # Custom search form
├── 404.php                            # 404 error page
├── screenshot.png                     # Theme screenshot
├── assets/
│   ├── css/
│   │   └── editor-style.css          # Gutenberg editor styles
│   ├── js/
│   │   └── main.js                   # Frontend JavaScript
│   └── images/                        # Theme images
├── inc/
│   ├── custom-post-types.php         # CPTs & taxonomies
│   └── theme-helpers.php             # Utility functions
└── page-templates/
    ├── template-about.php             # About Us page
    ├── template-contact.php           # Contact page
    ├── template-pricing.php           # Pricing page
    ├── template-case-studies.php      # Case Studies page
    ├── template-service.php           # Generic service page
    ├── template-google-ads.php        # Google Ads service
    ├── template-bing-ads.php          # Bing Ads service
    ├── template-digital-marketing.php # Digital Marketing service
    └── template-web-development.php   # Web Development service
```

---

## SEO Checklist

- [x] Schema.org JSON-LD (Organization, LocalBusiness, WebSite, BreadcrumbList)
- [x] FAQPage schema on FAQ sections
- [x] Open Graph meta tags
- [x] Twitter Card meta tags
- [x] Canonical URLs
- [x] Meta descriptions (auto-generated from content/excerpts)
- [x] Robots meta (index, follow with max-image-preview:large)
- [x] XML Sitemap (WordPress built-in at /wp-sitemap.xml)
- [x] Semantic HTML5 with proper heading hierarchy
- [x] Mobile responsive (Google Mobile-First Indexing)
- [x] Fast page speed (no bloat, deferred JS, preconnect)
- [x] Accessible (ARIA labels, keyboard nav, alt text support)
- [x] Clean URL structure with breadcrumbs
- [x] Internal linking structure in navigation & footer

---

## Recommended Plugins

While the theme works standalone, these plugins enhance functionality:

| Plugin | Purpose |
|---|---|
| **Yoast SEO** or **Rank Math** | Advanced SEO controls (optional - theme has built-in SEO) |
| **WPForms** or **Contact Form 7** | Enhanced form builder (optional - theme has built-in form) |
| **WP Rocket** | Page caching & performance |
| **Smush** or **ShortPixel** | Image optimization |
| **UpdraftPlus** | Backups |
| **Wordfence** | Security |
| **MonsterInsights** | Enhanced GA4 dashboard (optional) |

---

## Browser Support

- Chrome 90+ (and Chromium-based)
- Firefox 90+
- Safari 14+
- Edge 90+
- iOS Safari 14+
- Android Chrome 90+

---

## Requirements

- WordPress 6.0+
- PHP 7.4+
- MySQL 5.7+ or MariaDB 10.3+

---

## License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

---

## Support

- Email: hello@paypergrowth.com
- Website: https://paypergrowth.com
