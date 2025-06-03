# Website Templates

This repository contains example PHP and CSS templates for quickly building websites. Two template families are included:

- **`gs/`** – the "Gutter Shutter" template.
- **`krs-main/`** – the "KRS" template with tools for generating client specific copies.
- **`krs/`** – an older KRS directory kept for reference.

## Generating a Client Template

The `krs-main` directory ships with a script that can produce a fully customised copy of the template based on a JSON configuration file.

1. Copy `krs-main/config.json_template` and edit the values to match your client. A filled out example is provided in `krs-main/client_configs/example_client.json`.
2. Run the generator from the repository root:

```bash
python krs-main/generate_client_template.py path/to/your_config.json new_folder_name
```

The script will create `new_folder_name` containing the PHP and CSS files with your client values injected.

## Creating the JSON Config via a Form

To make filling out the configuration easier, open `krs-main/client_config_form.html` in your browser (double-click it on most systems). This page shows a friendly form for every field in the config file. After you complete the form and click **Generate JSON**, the resulting JSON will appear at the bottom of the page along with a **Download JSON** button. Save the file and move it into `krs-main/client_configs/` (for example `clientA.json`) and use it with the generator script.

## Repository Layout

```
/gs             Gutter Shutter template files
/krs            Legacy KRS template
/krs-main       Main KRS template with generator script and config tools
```

Each template directory contains PHP and CSS files that you can modify or extend for your project.

## License

This project is released under the MIT License.
