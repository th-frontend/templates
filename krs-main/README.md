# Adapting the KRS Web Template for a New Company

This document outlines the necessary modifications to adapt the "KRS" web template for a new company. It is based on an analysis of `borders.php`, `inline.css`, and `template.css`.

## 1. Global Placeholders & Settings (primarily in `borders.php`)

These are template-wide variables and initial setup items that need customization.

*   **Metadata & Document Head:**
    *   `[[title]]`: Page title (appears in browser tab/window).
    *   `[[description]]`: Meta description for SEO.
    *   `[[keywords]]`: Meta keywords for SEO.
    *   **Favicon:** Update URL `https://cdn.treehouseinternetgroup.com/cms_images/4148/favicon.ico` (L24 in `borders.php`).
*   **Company & Contact Information:**
    *   `[company]`: Company name (used in logo alt text, L35 in `borders.php`).
    *   `[phone]`: Main contact phone number (L70, L411 in `borders.php`).
    *   `[[display_addresses]]`: Company's physical address(es) (L414 in `borders.php`).
    *   `[license number]`: Contractor license number (commented out, L417 in `borders.php`).
*   **Regional Information:**
    *   `[territory]`: Main service territory description (L42 in `borders.php`).
    *   `[major cities 3]`: List of major cities served (L42 in `borders.php`).
    *   `[state]`: State where the company operates (L130, L141 in `borders.php`).
*   **Main Logo:**
    *   Update image URL `https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS-Roofing-Restoration.png` (L35 in `borders.php`).
*   **Contractor Nation Logo Placeholder:**
    *   `[[cn-logo]]` (L419 in `borders.php`).

## 2. Styling & Theming (primarily in `inline.css` and `template.css`)

Update these to match the new company's branding.

*   **Primary Color Palette:**
    *   KRS Red: `#d8340c` (buttons, accents, backgrounds, icons, links)
    *   KRS Yellow: `#FCD066` (accents, open sign, sticky phone button)
    *   Dark Gray/Black: `#1E1E1E` (text, backgrounds)
    *   Black: `#000` (text, backgrounds)
    *   White: `#fff` (text, backgrounds)
    *   Other grays used: `#222`, `#313131`, `#353535`, `#555`, `#666`, `#bbbbbb`, `#ededed`, `#f1f1f1`.
    *   Financing Red: `#ed242c` (in `inline.css` for financing section).
    *   Review distinct blue tones in `template.css`: `rgb(52, 82, 164)` and `#00529B`.
*   **Font Families:**
    *   Primary Font: `'Montserrat', sans-serif`. Ensure this is suitable or replace globally.
    *   Custom Font: `'brother-1816'` (used in financing section in `inline.css`). This font must be available or replaced.
    *   Icon Font: `FontAwesome` is used for icons (e.g., list bullets in `template.css`). Ensure it's correctly referenced and available.
*   **Company-Specific CSS & Background Images:**
    *   **Sticky Logo:** `#logo-sticky a` in `inline.css` has `background-image:url('https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS_FINAL2_Black.png');`.
    *   **Numbered List Icons:** `.sub1` through `.sub10` in `inline.css` use `/core/images/toolbox/red-royal/*.png`.
    *   **Service Item Backgrounds (in `template.css`):** Classes like `.service-item.service1` through `.service-item.service6`, and also general `.service-item` styles involve background images and color overlays (e.g., `rgba(216, 52, 12, 0.7)` which is KRS Red).
        *   Example: `.service-item.service2 { background-image:url('https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=75,format=auto/cms_images/2900/RepairServicebutton.png'); }`
    *   **"Why Choose Us" Section (in `template.css`):**
        *   `.row.choose-wrap` uses `background-image:url(https://cdn.treehouseinternetgroup.com/cms_images/2738/klaus-haus.svg);`.
        *   Commented out styles also reference `/core/images/krs/krs-wcu-2.jpg` and `/core/images/krs/svg/klaus-haus.svg`.
    *   **Silo Header Backgrounds (in `template.css`):** Each silo page (e.g., `#about #silo-header`, `#roof-repair #silo-header`) has a specific background image. These are mostly generic stock photos but should be reviewed. Example: `#about #silo-header { background-image:url('/core/images/templates/spruce/headers/silo-roofing-2.jpg'); }`.

## 3. Image & Asset Updates

Replace these assets with the new company's versions.

*   **Critical Assets (Branding):**
    *   Favicon: `https://cdn.treehouseinternetgroup.com/cms_images/4148/favicon.ico`
    *   Main Logo: `https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS-Roofing-Restoration.png`
    *   Alternate/Sticky Logo: `https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS_FINAL2_Black.png`
    *   Klaus-branded SVGs (if not applicable, remove/replace):
        *   `/core/images/krs/svg/put-a-klaus-black.svg`
        *   `https://cdn.treehouseinternetgroup.com/cms_images/2738/klaus-haus.svg` (and `/core/images/krs/svg/klaus-haus.svg`)
*   **Company-Specific Content Images (Review & Replace):**
    *   Owner Photo: `/core/images/krs/klaus-owner-photo.png`
    *   Marketing Images:
        *   `/core/images/krs/roof-mm-bg.jpg`
        *   `https://cdn.treehouseinternetgroup.com/cms_images/4148/raising_the_roof.png`
    *   Badges: `https://cdn.treehouseinternetgroup.com/cms_images/801/no-nail-pledge-web.png`
    *   Service Images (examples):
        *   `https://cdn.treehouseinternetgroup.com/cms_images/4148/disaster-restoration_service-img.png`
        *   `https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=75,format=auto/cms_images/2900/RepairServicebutton.png`
        *   `https://cdn.treehouseinternetgroup.com/cms_images/2882/roof-repair.jpg`
        *   `https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=75,format=auto/cms_images/2900/RoofReplacementService.png`
    *   Banners:
        *   `https://cdn.treehouseinternetgroup.com/cms_images/966/BANNER.png` (Desktop Warranty Banner)
        *   `https://cdn.treehouseinternetgroup.com/cms_images/2936/banner-mobile.png` (Mobile Warranty Banner)
*   **Generic Stock/Template Images (Review, replace if needed, but generally reusable):**
    *   Numbered icons: `/core/images/toolbox/red-royal/1.png` through `10.png`.
    *   Various images in `/core/images/attic-systems/`, `/core/images/roofers/`.
    *   Silo headers: Numerous images under `/core/images/templates/spruce/headers/` and `/core/images/templates/des/headers/`.
    *   Play button: `/core/images/templates/des/play-btn.png`.

## 4. Service & Content Placeholders

Update these sections with the new company's specific offerings and information.

*   **Main Message (Homepage):** The section with `id="main-message"` in `borders.php` contains headline text, offers (e.g., "$500 Off"), and calls to action that are specific to KRS.
*   **Service Page Links (Commented Out in `borders.php` but indicate typical services):**
    *   `/roof-repair.html`
    *   `/roof-replacement.html`
    *   `/roof-inspection.html`
    *   `/skylights.html`
    *   `/gutters-and-downspouts.html`
    *   `/wind-mitigation.html`
    These will need to be created or updated to match the new company's services.
*   **General Content Placeholder:** `[[content]]` in `borders.php` is where page-specific content is injected. This will be managed by the CMS but ensure new content fits the template structure.
*   **Service Area Zip Search:** The form in `borders.php` (around L326) submitting to `/zip-search.html` should be configured.
*   **Coupons Page:** Links like `/about-us/coupons.html` point to specific promotional content.

## 5. Navigation & Links

Customize navigation elements to reflect the new company's sitemap and social media.

*   **Top Navigation:** `[[top_nav]]` (L83 in `borders.php`). This is likely generated by a CMS or included partial. It needs to be updated with the new company's primary navigation links.
*   **Silo Navigation:** `[[single_silo_nav]]` (L344 in `borders.php`). This is for side navigation on interior pages and needs to be updated based on content structure.
*   **Footer Links:**
    *   The PHP code generating footer links (`$superNav->generateSuperMarkup();` L401 in `borders.php`) will need to be adapted.
    *   `[[social_footer]]` (L403 in `borders.php`) for social media icons and links.
*   **Static Page Links:** Review all hardcoded `href` attributes for internal pages (e.g., `/free-estimate.html`, `/service-area.html`) to ensure they align with the new site structure.

## 6. Third-Party Services & Integrations

Review and update configurations for external services.

*   **Font Services:**
    *   Google Fonts: `https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap`
    *   Adobe Fonts (Typekit): `https://use.typekit.net/weh7cpy.css` (The kit ID `weh7cpy` might be specific and may need a new kit for the new company).
*   **CDN for JavaScript:**
    *   `https://a80427d48f9b9f165d8d-c913073b3759fb31d6b728a919676eab.ssl.cf1.rackcdn.com/v3/js/sticky-sidebar.js` (Sticky sidebar script).
*   **Custom Core CSS/JS Placeholders:**
    *   `[[custom_core_v3_5]]` (L25 in `borders.php`): For custom CSS.
    *   `[[custom_core_v3_js]]` (L438 in `borders.php`): For custom JavaScript (e.g., analytics, tracking scripts).
*   **Google Maps Integration:**
    *   `[[service_area_google_map]]` (L364 in `borders.php`). This will require configuration with the new company's service area data and potentially API keys.

By addressing these areas, the template can be successfully adapted for a new company's website.

