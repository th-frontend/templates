import argparse
import json
import os
import shutil
import re

# --- Configuration for Placeholders and CSS Selectors ---

# CSS Color Replacements: (Original_Color_Regex_Pattern, Config_Theme_Key_For_New_Color)
CSS_COLOR_REPLACEMENTS = [
    (r"#d8340c", "primaryColor"),        # KRS Red
    (r"#FCD066", "accentColorYellow"),   # KRS Yellow
    (r"#1E1E1E", "textColorDark"),       # Dark Gray / Black text
    (r"#000000", "backgroundColorDark"), # Pure Black background (use with context awareness)
    (r"#222222", "textColorDark"),
    (r"#313131", "textColorDark"),
    (r"#353535", "textColorDark"),
    (r"#555555", "textColorDark"),       # Medium Gray text
    (r"#666666", "textColorDark"),       # Medium Gray text
    (r"#bbbbbb", "accentColorLightGray"), # Light Gray for borders/backgrounds
    (r"#ededed", "backgroundColorLight"),# Very Light Gray background
    (r"#f1f1f1", "backgroundColorLight"), # Very Light Gray background
    (r"#274287", "accentColorBlue"),     # A specific blue found
    (r"#ed242c", "accentColorBrightRed") # Financing Red
]

# Font Family Replacements: (Original_Font_Regex_Pattern, Config_Theme_Key_For_New_Font)
CSS_FONT_REPLACEMENTS = [
    (r"['\"]Montserrat['\"],\s*sans-serif", "fontPrimary"),
    (r"['\"]Montserrat['\"],\s*serif", "fontPrimary"), # Catch serif version too
    (r"['\"]brother-1816['\"]", "fontCustom1") # Example for a custom font
]

# Specific URL replacements in CSS: (Original_URL_Regex_Pattern, Config_Key_Path_For_New_URL)
# Note: Config_Key_Path uses dot notation for nesting, e.g., "section.subsection.key"
CSS_URL_REPLACEMENTS = {
    "inline.css": [
        (r"url\(['\"]https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS_FINAL2_Black.png['\"]\)", "websiteSettings.stickyLogoUrl"),
        (r"url\(/core/images/toolbox/red-royal/(\d+)\.png\)", "serviceInfo.numberedListIconsPath") # Path prefix for numbered icons
    ],
    "template.css": [
        # Service Box Images - These might need more dynamic handling if service items change frequently.
        # For now, examples for a few specific replacements.
        (r"url\('https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=75,\s*format=auto/cms_images/2900/RepairServicebutton.png'\)", "serviceInfo.servicePageLinks.0.serviceBoxImageUrl"), # Assumes first service in config
        (r"url\('https://cdn.treehouseinternetgroup.com/cms_images/2882/roof-repair.jpg'\)", "serviceInfo.servicePageLinks.0.serviceBoxImageUrl"), # Can map multiple old URLs to the same new configured one
        (r"url\('https://cdn.treehouseinternetgroup.com/cms_images/4148/disaster-restoration_service-img.png'\)", "serviceInfo.servicePageLinks.1.serviceBoxImageUrl"), # Assumes second service
        (r"url\(https://cdn.treehouseinternetgroup.com/cms_images/2738/klaus-haus.svg\)", "websiteSettings.klausHausSvgUrl"),
        (r"url\(\"/core/images/templates/des/play-btn.png\"\)", "serviceInfo.playButtonIconUrl")
        # Example for a generic silo header if needed:
        # (r"url\('/core/images/templates/spruce/headers/silo-roofing-2.jpg'\)", "serviceInfo.defaultSiloHeaderBackground")
    ]
}

# Known PHP placeholders (literal strings)
PHP_PLACEHOLDERS = {
    "title": "[[title]]",
    "description": "[[description]]",
    "keywords": "[[keywords]]",
    "custom_core_v3_5_css": "[[custom_core_v3_5]]",
    "inline_css": "[[inline_css]]", # This is a special placeholder for inline CSS block, not for replacement by this script
    "company_alt_text": "[company]",
    "territory_header": "[territory]",
    "major_cities_header": "[major cities 3]",
    "phone_display": "[phone]",
    "state_display": "[state]",
    "top_nav": "[[top_nav]]", # CMS managed
    "breadcrumbs": "[[breadcrumbs]]", # CMS managed
    "content_main": "[[content]]", # CMS managed
    "single_silo_nav": "[[single_silo_nav]]", # CMS managed
    "city_scroll": "[[city_scroll:50]]", # CMS managed
    "service_area_google_map": "[[service_area_google_map]]", # CMS managed
    "social_footer": "[[social_footer]]", # CMS managed
    "display_addresses": "[[display_addresses]]",
    "license_number_comment": "[license number]", # Placeholder within a comment
    "cn_logo_placeholder": "[[cn-logo]]",
    "custom_core_v3_js": "[[custom_core_v3_js]]"
}


def get_config_value(config, key_path, default=None):
    """Safely gets a value from a nested config dictionary using a dot-separated path."""
    keys = key_path.split('.')
    value = config
    try:
        for key in keys:
            if isinstance(value, list):
                idx = int(key)
                if 0 <= idx < len(value):
                    value = value[idx]
                else:
                    # print(f"Warning: Index {idx} out of bounds for key path '{key_path}'.")
                    return default
            elif isinstance(value, dict):
                value = value[key]
            else:
                # print(f"Warning: Cannot access key '{key}' from non-dict/list type for key path '{key_path}'.")
                return default
        return value
    except (KeyError, TypeError, IndexError, ValueError) : # Added ValueError for int conversion
        # print(f"Warning: Key path '{key_path}' not found or invalid in config. Using default: {default}. Error: {e}")
        return default

def create_output_folder(output_folder_name):
    """Creates the output folder relative to the current working directory."""
    # Output path is relative to the current working directory
    output_path = os.path.join(os.getcwd(), output_folder_name)

    if os.path.exists(output_path):
        print(f"Output folder '{output_path}' already exists. Removing it.")
        try:
            shutil.rmtree(output_path)
        except OSError as e:
            print(f"Error removing existing folder '{output_path}': {e}")
            return None
    try:
        os.makedirs(output_path)
        print(f"Created output folder: {output_path}")
        return output_path
    except OSError as e:
        print(f"Error creating output folder '{output_path}': {e}")
        return None

def copy_template_files(script_dir, output_folder_path):
    """Copies files from krs-main (script_dir) to the output folder, excluding specific files."""
    source_dir = script_dir # This is the krs-main directory
    excluded_files = ['generate_client_template.py', 'config.json_template', '.git']

    try:
        for item_name in os.listdir(source_dir):
            if item_name in excluded_files or item_name.startswith('.'): # Also exclude other hidden files
                continue

            source_item_path = os.path.join(source_dir, item_name)
            destination_item_path = os.path.join(output_folder_path, item_name)

            if os.path.isdir(source_item_path):
                shutil.copytree(source_item_path, destination_item_path, symlinks=False)
            else:
                shutil.copy2(source_item_path, destination_item_path)
        print(f"Copied template files from '{source_dir}' to '{output_folder_path}'")
    except Exception as e:
        print(f"Error copying template files: {e}")
        return False
    return True

def load_config(config_path):
    """Loads the client's JSON configuration file."""
    try:
        # Ensure config_path is absolute or correctly relative to CWD
        abs_config_path = os.path.abspath(config_path)
        with open(abs_config_path, 'r', encoding='utf-8') as f:
            config_data = json.load(f)
        print(f"Loaded configuration from: {abs_config_path}")
        return config_data
    except FileNotFoundError:
        print(f"Error: Configuration file not found at '{os.path.abspath(config_path)}'")
    except json.JSONDecodeError as e:
        print(f"Error parsing JSON configuration file '{os.path.abspath(config_path)}': {e}")
    except Exception as e:
        print(f"An unexpected error occurred while loading config '{os.path.abspath(config_path)}': {e}")
    return None

def process_borders_php(output_folder_path, config):
    """Reads, processes, and writes changes to borders.php in the output folder."""
    borders_file_path = os.path.join(output_folder_path, 'borders.php')

    try:
        with open(borders_file_path, 'r', encoding='utf-8') as f:
            content = f.read()
    except FileNotFoundError:
        print(f"Error: '{borders_file_path}' not found in the output folder.")
        return
    except Exception as e:
        print(f"Error reading '{borders_file_path}': {e}")
        return

    # Metadata and Head
    content = content.replace(PHP_PLACEHOLDERS["title"], get_config_value(config, 'websiteSettings.title', 'Default Title'))
    content = content.replace(PHP_PLACEHOLDERS["description"], get_config_value(config, 'websiteSettings.metaDescription', 'Default Description'))
    content = content.replace(PHP_PLACEHOLDERS["keywords"], get_config_value(config, 'websiteSettings.metaKeywords', 'default, keywords'))
    content = content.replace('https://cdn.treehouseinternetgroup.com/cms_images/4148/favicon.ico', get_config_value(config, 'websiteSettings.faviconUrl', 'assets/favicon.ico'))

    # Logo and Company Info
    content = content.replace('https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS-Roofing-Restoration.png', get_config_value(config, 'websiteSettings.logoUrl', 'assets/logo.png'))
    content = content.replace(PHP_PLACEHOLDERS["company_alt_text"], get_config_value(config, 'companyInfo.name', 'Client Company'))
    content = content.replace(PHP_PLACEHOLDERS["territory_header"], get_config_value(config, 'companyInfo.serviceTerritory', 'Service Area'))
    major_cities = get_config_value(config, 'companyInfo.majorCities', [])
    content = content.replace(PHP_PLACEHOLDERS["major_cities_header"], ', '.join(major_cities[:3]))

    # Phone (used in multiple places, simple string replacement)
    content = content.replace(PHP_PLACEHOLDERS["phone_display"], get_config_value(config, 'companyInfo.phone', 'N/A'))

    content = content.replace(PHP_PLACEHOLDERS["state_display"], get_config_value(config, 'companyInfo.state', 'N/A'))
    content = content.replace(PHP_PLACEHOLDERS["display_addresses"], get_config_value(config, 'companyInfo.address', 'N/A'))

    # License Number (uncomment and replace)
    license_placeholder_str = PHP_PLACEHOLDERS["license_number_comment"]
    new_license_text = f"Contractor ID: {get_config_value(config, 'companyInfo.licenseNumber', 'N/A')}"
    content = re.sub(r"<!-----p>\s*Contractor ID: " + re.escape(license_placeholder_str) + r"\s*</p------>", f"<p>{new_license_text}</p>", content)

    # CN Logo
    cn_logo_url = get_config_value(config, 'websiteSettings.contractorNationLogoUrl')
    cn_logo_html = f'<img src="{cn_logo_url}" alt="Contractor Nation Affiliated">' if cn_logo_url else ''
    content = content.replace(PHP_PLACEHOLDERS["cn_logo_placeholder"], cn_logo_html)

    # Homepage specific images
    content = content.replace('https://cdn.treehouseinternetgroup.com/cms_images/4148/raising_the_roof.png', get_config_value(config, 'homepageContent.marketingImageUrl', 'assets/marketing_image.png'))
    content = content.replace('https://cdn.treehouseinternetgroup.com/cms_images/966/BANNER.png', get_config_value(config, 'homepageContent.warrantyBannerDesktopUrl', 'assets/warranty_banner_desktop.png'))
    content = content.replace('https://cdn.treehouseinternetgroup.com/cms_images/2936/banner-mobile.png', get_config_value(config, 'homepageContent.warrantyBannerMobileUrl', 'assets/warranty_banner_mobile.png'))
    content = content.replace('https://cdn.treehouseinternetgroup.com/cms_images/801/no-nail-pledge-web.png', get_config_value(config, 'websiteSettings.noNailPledgeBadgeUrl', 'assets/no_nail_pledge.png'))

    # External Font CSS
    google_fonts_url = get_config_value(config, 'integrations.googleFontsUrl')
    if google_fonts_url:
        content = re.sub(r"https://fonts.googleapis.com/css\?family=Montserrat[^\"\'>]+", google_fonts_url, content)

    adobe_kit_id = get_config_value(config, 'integrations.adobeFontsKitId')
    if adobe_kit_id:
        content = re.sub(r"https://use.typekit.net/[^\"\']+\.css", f"https://use.typekit.net/{adobe_kit_id}.css", content)

    # Custom Core CSS/JS (replaced with actual links from config)
    custom_css_url = get_config_value(config, 'websiteSettings.customCssUrl', 'assets/css/custom.css')
    custom_js_url = get_config_value(config, 'websiteSettings.customJsUrl', 'assets/js/custom.js')
    content = content.replace(PHP_PLACEHOLDERS["custom_core_v3_5_css"], f'<link rel="stylesheet" href="{custom_css_url}">')
    content = content.replace(PHP_PLACEHOLDERS["custom_core_v3_js"], f'<script src="{custom_js_url}"></script>')

    # CMS-Handled Placeholders (replace with HTML comments to note they are server-side)
    for key in ["top_nav", "single_silo_nav", "social_footer", "breadcrumbs", "content_main", "city_scroll", "service_area_google_map"]:
        content = content.replace(PHP_PLACEHOLDERS[key], f'<!-- {PHP_PLACEHOLDERS[key]} (Managed by CMS/PHP) -->')

    # [[inline_css]] is a special case, should not be replaced by a config value here.
    # It's meant for the PHP template system to inject CSS directly.

    try:
        with open(borders_file_path, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Processed and updated: {borders_file_path}")
    except Exception as e:
        print(f"Error writing changes to '{borders_file_path}': {e}")

def process_css_file(file_path, config):
    """Helper function to process a single CSS file."""
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
    except Exception as e:
        print(f"Error reading CSS file '{file_path}': {e}")
        return

    original_content = content
    theme_config = get_config_value(config, "theme", {})

    # Replace Colors
    for old_color_pattern, config_key in CSS_COLOR_REPLACEMENTS:
        new_color = theme_config.get(config_key)
        if new_color:
            try:
                # Use word boundaries for hex colors to avoid partial replacements if a hex is part of a longer string
                content = re.sub(r'\b' + old_color_pattern + r'\b', new_color, content, flags=re.IGNORECASE)
            except re.error as e:
                print(f"Regex error for color {old_color_pattern} with {new_color}: {e}")
        # else:
            # print(f"Warning: Color key '{config_key}' not found in theme config for CSS: {os.path.basename(file_path)}.")

    # Replace Font Families
    for old_font_pattern, config_key in CSS_FONT_REPLACEMENTS:
        new_font = theme_config.get(config_key)
        if new_font:
            try:
                content = re.sub(r"font-family:\s*" + old_font_pattern, rf"font-family: {new_font}", content, flags=re.IGNORECASE)
            except re.error as e:
                 print(f"Regex error for font {old_font_pattern} with {new_font}: {e}")
        # else:
            # print(f"Warning: Font key '{config_key}' not found in theme config for CSS: {os.path.basename(file_path)}.")

    # Replace Specific URLs
    css_filename = os.path.basename(file_path)
    if css_filename in CSS_URL_REPLACEMENTS:
        for old_url_pattern, config_key_path in CSS_URL_REPLACEMENTS[css_filename]:
            new_url_value = get_config_value(config, config_key_path)
            if new_url_value:
                try:
                    if "numberedListIconsPath" in config_key_path:
                         # Replace path prefix, keep the icon number (e.g., /1.png, /2.png)
                         content = re.sub(old_url_pattern, rf"url({new_url_value}\1.png)", content)
                    else:
                        content = re.sub(old_url_pattern, rf"url('{new_url_value}')", content)
                except re.error as e:
                    print(f"Regex error for URL {old_url_pattern} with {new_url_value}: {e}")
            # else:
                # print(f"Warning: URL key '{config_key_path}' not found in config for CSS: {css_filename}.")

    if content != original_content:
        try:
            with open(file_path, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"Processed and updated CSS: {file_path}")
        except Exception as e:
            print(f"Error writing changes to CSS file '{file_path}': {e}")
    # else:
        # print(f"No changes made to CSS: {file_path}")

def process_css_files(output_folder_path, config):
    """Processes inline.css and template.css in the output folder."""
    css_files_to_process = ['inline.css', 'template.css'] # Assuming these are at the root of output_folder_path
    for css_file_name in css_files_to_process:
        file_path = os.path.join(output_folder_path, css_file_name)
        if os.path.exists(file_path):
            process_css_file(file_path, config)
        else:
            print(f"Warning: CSS file '{file_path}' not found. Skipping.")

def main():
    parser = argparse.ArgumentParser(description="Generate a client-specific template from krs-main.")
    parser.add_argument("config_path", help="Path to the client's config.json file.")
    parser.add_argument("output_folder_name", help="Name for the new client template folder (e.g., krs-main-clientxyz).")

    args = parser.parse_args()
    script_dir = os.path.dirname(os.path.abspath(__file__)) # Absolute path to krs-main directory

    # Create output folder relative to CWD
    output_folder_path = create_output_folder(args.output_folder_name)
    if not output_folder_path: return

    # Copy files from script's directory (krs-main) to the new output folder
    if not copy_template_files(script_dir, output_folder_path): return

    config = load_config(args.config_path)
    if not config: return

    process_borders_php(output_folder_path, config)
    process_css_files(output_folder_path, config)

    print("\nClient template generation complete!")
    print(f"Output located at: {output_folder_path}")

if __name__ == "__main__":
    main()
