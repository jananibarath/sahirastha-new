# SahiRastha Theme

Block theme implementation target for the consolidated SahiRastha website.

## Usage notes
- Set this as the active theme in WordPress.
- On theme activation, a one-time setup routine creates the required core, service, and pathway pages when missing and seeds editable page content.
- The setup routine also assigns `Home` as static front page and creates/repairs a `Primary Navigation` menu.

## Content model
- Core site chrome is in `parts/` and `theme.json`.
- Page-level conversion copy lives in block templates under `templates/` so editors can further refine in Site Editor.
