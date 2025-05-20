# Site Templates

This project provides website templates for different purposes.

## Project Structure

The project is organized into the following directories:

- `gs/`: This directory contains the "Gutter Shutter" template.
- `krs/`: This directory contains the "KRS Template - Brown Roofing Remix".

## gs/ Template

The `gs/` template is a website template for Gutter Shutter. It consists of the following files:

- `before-borders.php`: This file contains PHP code that defines CSS styles and HTML structure for various components of the template, such as sidebar navigation, city pages, and an inline step form.
- `borders.php`: This is the main template file. It includes the HTML structure for the header, hero section, page content, map, and footer. It also contains PHP logic for conditional rendering of certain sections based on the page type.
- `inline.css`: This file contains extensive CSS rules, including a reset, typography styles, button styles, and layout styles for the template.
- `template.css`: This file defines some root CSS variables and base styles for widgets.

## krs/ Template

The `krs/` template is referred to as the "KRS Template - Brown Roofing Remix". Currently, the main template file (`krs/borders.php`) and CSS file (`krs/template.css`) are empty. The `krs/readme.md` provides a starting point for its documentation.

## How to Use

To use these templates:

1.  Identify the template you want to use (`gs/` or `krs/`).
2.  Copy the files from the chosen template directory to your web server or Content Management System (CMS).
3.  Modify the template files as needed to fit your specific requirements. This may involve:
    *   Customizing content within the PHP and HTML files.
    *   Adjusting styles in the CSS files.
    *   Integrating with any backend systems or databases if necessary.
4.  Ensure your web server is configured to execute PHP files if you are using the PHP functionalities within the templates.

## Contributing

Contributions to improve and expand these templates are welcome! If you have new templates, improvements to existing ones, or bug fixes, please follow these steps:

1.  Fork the repository.
2.  Create a new branch for your changes.
3.  Make your changes, including clear comments and documentation where applicable.
4.  Submit a pull request for review.

## License

This project is licensed under the MIT License. See the LICENSE file for details (if a LICENSE file is added in the future).
