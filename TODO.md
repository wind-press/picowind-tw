# TODO

This is the TODO file for the Picowind Tailwind Child Theme.

In the initial phase, the focus will be on adapting picostrap5 template files and use the https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/ and https://developer.wordpress.org/themes/classic-themes/basics/template-files/ as the main reference.

## Core Template Files (Based on Picostrap5)

- [x] index.php
- [x] 404.php
- [x] archive.php
- [x] home.php (via index.php)
- [x] single.php - Single post template
- [x] comments.php - Comments template
- [x] page.php - Single page template
- [x] search.php - Search results template
- [x] sidebar.php - Sidebar template
- [x] header.php - Header template (currently via Timber/Twig)
- [x] footer.php - Footer template (currently via Timber/Twig)

## Page Templates (Based on Picostrap5)

- [x] page-templates/blank.php - Blank page template
- [x] page-templates/blank-nofooter.php - Blank without footer
- [x] page-templates/empty.php - Empty template
- [x] page-templates/page-sidebar-left.php - Page with left sidebar
- [x] page-templates/page-sidebar-right.php - Page with right sidebar
- [x] page-templates/bootstrap-demo.php -> will be replaced with DaisyUI 5 demo (page-templates/daisyui-demo.php)

## Features to adapt from Picostrap5

see https://picostrap.com/

- [x] Instantly Customize Colors ❌ (replaced by Tailwind CSS + DaisyUI)
- [x] Built-in SCSS compiler ❌ (replaced by Tailwind CSS + DaisyUI)
- [x] Beautiful Font Combos ✅ (via Yabe Webfont plugin)
- [x] Set your own variables ❌ (use theme's style.css or dedicated snippet plugin)
- [x] Add your own CSS/SCSS code ❌ (use theme's style.css or dedicated snippet plugin)
- [x] Responsive Typography ❌ (replaced by Tailwind CSS + DaisyUI)
- [x] Hide unnecessary tags
- [x] Disable Comments
- [x] Keeps your head clean
- [ ] Sharing Buttons [OPT-IN] - WIP
- [ ] TopBar [OPT-IN]
- [x] Lightbox
- [x] Prefetch CSS ❌ (Not relevant with current adoption)
- [x] Dark Mode ✅ (via DaisyUI)
- [x] LiveCanvas Editor content filtering 


- [x] Custom navigation walker ✅ (via Twig + DaisyUI)
- [ ] WooCommerce support (optional)

===

Start from here, it's just a reference, not a TODO list

===


## Theme Functions & Setup

- [x] function.php - Basic functions file
- [x] src/Theme.php - Main theme class
- [x] src/Menu.php - Menu class
- [ ] Enqueue scripts and styles
- [ ] Widget areas registration
- [ ] Theme customizer options
- [ ] Custom post type support

---
