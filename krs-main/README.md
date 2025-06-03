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

## Automated Client Template Generation

This section describes how to use the provided Python script and JSON configuration to automate much of the template customization process.

### 1. Overview

The automation relies on two key components:
*   `krs-main/config.json_template`: A template file for client-specific configurations.
*   `krs-main/generate_client_template.py`: A Python script that processes the configuration and applies it to a copy of the template.

### 2. `config.json_template` Usage

1.  **Copy the Template:**
    *   Locate the `krs-main/config.json_template` file.
    *   Copy this file to a new location (e.g., a client-specific project directory or a temporary working folder).
    *   Rename the copied file to `config.json`.

2.  **Edit `config.json`:**
    *   Open your newly created `config.json` file in a text editor.
    *   Carefully review and update the placeholder values with the specific client's information. This includes:
        *   Company details (`companyInfo`): Name, phone, address, service areas, etc.
        *   Website settings (`websiteSettings`): Metadata, URLs for new logos, favicon, and other brand-specific assets.
        *   Theme preferences (`theme`): Desired primary, secondary, text, and background colors; primary and secondary font family declarations.
        *   Homepage content (`homepageContent`): URLs for specific homepage images (e.g., main background, owner photo).
        *   Service information (`serviceInfo`): Links to service pages, URLs for service-specific header images or icons.
        *   Navigation (`navigation.socialMediaLinks`): URLs for the client's social media profiles.
        *   Integrations (`integrations`): New Google Fonts URL, Adobe Fonts Kit ID, Google Maps API key if applicable.
    *   Refer to the structure and comments within `config.json_template` for guidance on what each field represents.

### 3. `generate_client_template.py` Usage

1.  **The Script:**
    *   The script `krs-main/generate_client_template.py` is responsible for creating a new client-specific template folder and applying the customizations defined in your `config.json`.

2.  **Command-Line Execution:**
    *   Open your terminal or command prompt.
    *   Navigate to the directory that *contains* the `krs-main` folder (i.e., the parent directory of `krs-main`).
    *   Run the script using the following command structure:

    ```bash
    python krs-main/generate_client_template.py path/to/your/client_config.json new_client_template_folder_name
    ```

    *   **`path/to/your/client_config.json`**: This is the full or relative path to the `config.json` file you prepared in the previous step.
    *   **`new_client_template_folder_name`**: This is the name for the new directory that will be created to house the customized template files (e.g., `krs_client_abc_site`). This folder will be created at the same level as the `krs-main` directory.

3.  **Script Actions:**
    *   The script will first create the `new_client_template_folder_name` directory.
    *   It will then copy all files and subdirectories from the `krs-main` template into this new folder, excluding `generate_client_template.py` itself and `config.json_template`.
    *   Next, it will read your specified `client_config.json`.
    *   Finally, it will process `borders.php`, `inline.css`, and `template.css` within the new folder, replacing placeholders and hardcoded values (like colors, fonts, and specific URLs) with the settings from your configuration file.

### 4. Output

Upon successful execution, you will have a new folder (e.g., `krs_client_abc_site`) containing a version of the web template tailored with the client's specific information, branding, and asset links as defined in your `config.json`.

### 5. Important Notes

*   **Python Version:** This script is intended for use with Python 3.
*   **Server-Side Placeholders:** Placeholders that are processed by server-side languages/CMS (e.g., `[[content]]`, `[[top_nav]]`, `[[single_silo_nav]]`, `[[social_footer]]`, `[[custom_core_v3_5]]`, `[[custom_core_v3_js]]`) are generally *not* replaced with final content by this Python script. They will remain in the generated PHP files for the server-side rendering engine or CMS to handle. The script may replace some of these with HTML comments or basic structural links if defined in the config (e.g., custom CSS/JS links).
*   **Review Output:** Always review the generated files to ensure all replacements have occurred as expected and to make any further manual adjustments if necessary.
*   **Backup:** It's always a good practice to work with version control or have backups of your original template and configuration files.

### Using the GitHub Action for Template Generation

For a more integrated approach, you can use the GitHub Action to generate client templates.

1.  **Accessing the Action:**
    *   Navigate to the main page of the repository on GitHub.
    *   Click on the "Actions" tab.
    *   In the left sidebar, you will find a list of workflows. Click on "Generate Client Template".

2.  **Manual Trigger:**
    *   This workflow is designed for manual triggering via `workflow_dispatch`.
    *   Above the list of workflow runs, you will see a "Run workflow" dropdown button. Click it.

3.  **Input Parameters:**
    *   You will be prompted to provide the following inputs:
        *   **`config_filename`**: Enter the name of the client's JSON configuration file (e.g., `clientA.json`). This file **must be located in the `krs-main/client_configs/` directory** within the repository *before* running the action.
        *   **`branch_name`**: Specify the desired name for the new branch that will be created to store the generated client template (e.g., `client/clientA`, `feature/clientA-template`).

4.  **Running the Action:**
    *   After filling in the input parameters, select the branch you want to run the workflow from (usually your main development branch, e.g., `main` or `master`).
    *   Click the "Run workflow" button.

5.  **Outcome:**
    *   The GitHub Action will execute the `krs-main/generate_client_template.py` script using the configuration you specified.
    *   Upon successful completion, a new branch (with the name you provided for `branch_name`) will be automatically created in the repository. This branch will contain the full website template, customized with the client's information and branding from their configuration file. The customized files will be at the root of this new branch.

6.  **Prerequisites:**
    *   Ensure the client's JSON configuration file (e.g., `clientA.json`) has been created, populated, and pushed to the `krs-main/client_configs/` directory in the repository *before* attempting to run the GitHub Action.
    *   The `generate_client_template.py` script must be up-to-date in the branch from which you run the workflow.
