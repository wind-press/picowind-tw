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

===

Start from here, it's just a reference, not a TODO list

===


## Theme Functions & Setup

- [x] function.php - Basic functions file
- [x] src/Theme.php - Main theme class
- [x] src/Menu.php - Menu class
- [ ] Enqueue scripts and styles
- [ ] Widget areas registration
- [ ] Custom navigation walker
- [ ] Theme customizer options
- [ ] WooCommerce support (optional)
- [ ] Custom post type support

---

## Picowind Parent Theme - Templates to Remove (Make it Backbone Only)

### PHP Template Files (to be removed from parent)
- [ ] author.php - Move to child theme
- [ ] footer.php - Move to child theme
- [ ] header.php - Move to child theme
- [ ] index.php - Move to child theme
- [ ] page.php - Move to child theme
- [ ] search.php - Move to child theme
- [ ] sidebar.php - Move to child theme
- [ ] single.php - Move to child theme

### Twig Files in views-old/ (legacy templates - can be deleted)
- [ ] views-old/404.twig
- [ ] views-old/archive.twig
- [ ] views-old/author.twig
- [ ] views-old/base.example.twig
- [ ] views-old/base.twig
- [ ] views-old/base.blade.php
- [ ] views-old/comment-form.twig
- [ ] views-old/comment.twig
- [ ] views-old/footer.twig
- [ ] views-old/header.twig
- [ ] views-old/index.twig
- [ ] views-old/menu.twig
- [ ] views-old/page-plugin.twig
- [ ] views-old/page.twig
- [ ] views-old/search.twig
- [ ] views-old/sidebar.twig
- [ ] views-old/single-password.twig
- [ ] views-old/single.twig
- [ ] views-old/tease-post.twig
- [ ] views-old/tease.twig
- [ ] views-old/macros/attributes.twig
- [ ] views-old/partial/pagination.twig

### Current views/ directory (minimal, clean these up)
- [ ] views/page-plugin.twig - Move to child or remove
- [ ] views/components/ - Empty, can keep as placeholder
- [ ] views/macros/ - Empty, can keep as placeholder

**Goal**: Picowind parent should only contain:
- Core theme functionality (functions.php, classes in src/)
- Composer dependencies
- Timber/Twig setup
- Helper functions and utilities
- No template files (PHP or Twig) - all should be in child themes
