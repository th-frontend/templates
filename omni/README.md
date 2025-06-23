# Omni Company Landing Page Template

This directory contains a static HTML and CSS template for a company landing page, presumably for "Omni Basement Systems" or a similar service-based company.

## Files

*   `index.html`: This is the main HTML file containing the structure of the landing page. It includes sections such as:
    *   Header (Top utility bar, Main navigation with logo)
    *   Hero section (Mascot, Messaging, Photo collage)
    *   Solutions section (Grid of service cards, Financing banner)
    *   Reviews section (Customer testimonials, CTA)
    *   Why Choose Us section (Banner, Benefit icons)
    *   Intro Content section (Main textual content)
    *   Credibility Logos section
    *   Service Area Map section
    *   Footer (Contact info, Navigation links, Social media)
*   `style.css`: This file contains all the CSS rules for styling the `index.html` page. It is organized into blocks corresponding to the sections in the HTML. It includes responsive design considerations for various screen sizes.
*   `o-images/`: This directory likely contains images used in the template, although the current `index.html` uses placeholder images from `placehold.co` and `upload.wikimedia.org`.

## Usage

This is a static template. To use it:

1.  Open `index.html` in a web browser to view the page.
2.  Modify `index.html` to change the content (text, links, image paths).
3.  Modify `style.css` to change the appearance (colors, fonts, layout).
4.  Replace placeholder images with actual company assets, updating the `src` attributes in `index.html` and potentially adding new images to the `o-images/` directory (or another preferred location).

## Structure & Comments

Both `index.html` and `style.css` have been commented to delineate major sections and explain the purpose of different code blocks. This is intended to make the template easier to understand, debug, and customize.

*   In `index.html`, comments like `<!-- ========= SECTION NAME ========= -->` mark the beginning and end of major page sections.
*   In `style.css`, comments like `/* =============== SECTION NAME STYLES =============== */` mark blocks of styles related to specific sections or components. CSS variables are defined at the root for easy theming of colors and fonts.

## Dependencies

There are no external JavaScript dependencies or complex build steps required for this template. It relies solely on HTML and CSS.
The main `index.html` file links to `/style.css`. Ensure that if you move these files, the path in the `<link>` tag within `index.html` is updated accordingly if `style.css` is no longer in the same directory or a parent directory named `omni` (if served from root). Currently, it's `href="/style.css"` which might imply the CSS is expected at the root, or this path needs adjustment based on deployment. Given the project structure, it should likely be `href="style.css"`.

*(Self-correction during README creation: The `index.html` currently has `<link rel="stylesheet" href="/style.css" />`. This should probably be `href="style.css"` if `index.html` and `style.css` are in the same `omni/` directory and served from there. I will make this correction in the HTML file as part of this process.)*
