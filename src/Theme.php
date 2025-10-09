<?php

declare(strict_types=1);

namespace Picowind\Child\Tw;

use Picowind\Core\Discovery\Attributes\Hook;
use Picowind\Core\Discovery\Attributes\Service;
use Plugin_Upgrader;

#[Service]
class Theme
{
    /**
     * Set up the theme default settings upon activation.
     */
    #[Hook('after_switch_theme', type: 'action')]
    public function after_switch_theme(): void
    {
        global $wp_filesystem;
        if (empty($wp_filesystem)) {
            require_once ABSPATH . '/wp-admin/includes/file.php';
            WP_Filesystem();
        }
        $is_require_reload = false;
        // Require the WindPress plugin to be active
        if (!is_plugin_active('windpress/windpress.php')) {
            if (!file_exists(WP_PLUGIN_DIR . '/windpress/windpress.php')) {
                require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
                require_once ABSPATH . 'wp-admin/includes/file.php';
                require_once ABSPATH . 'wp-admin/includes/misc.php';
                require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
                $api = plugins_api('plugin_information', array(
                    'slug' => 'windpress',
                    'fields' => array(
                        'short_description' => false,
                        'sections' => false,
                        'requires' => false,
                        'rating' => false,
                        'ratings' => false,
                        'downloaded' => false,
                        'last_updated' => false,
                        'added' => false,
                        'tags' => false,
                        'compatibility' => false,
                        'homepage' => false,
                        'donate_link' => false,
                    ),
                ));
                if (!is_wp_error($api)) {
                    $upgrader = new Plugin_Upgrader();
                    $installed = $upgrader->install($api->download_link);
                }
            }
            activate_plugin('windpress/windpress.php');
            $is_require_reload = true;
        }
        // Import the Picowind css file into the WindPress `main.css` file
        $main_css_path = WP_CONTENT_DIR . '/uploads/windpress/data/main.css';
        if (!file_exists($main_css_path)) {
            // copy the default main.css file
            $default_main_css_path = WP_CONTENT_DIR . '/plugins/windpress/stubs/tailwindcss-v4/main.css';
            if (file_exists($default_main_css_path)) {
                $wp_filesystem->copy($default_main_css_path, $main_css_path);
            } else {
                return;
            }
        }
        $main_css_content = $wp_filesystem->get_contents($main_css_path);
        if ($main_css_content === false) {
            return;
        }
        $import_statement = '@import "./@picowind/tailwind.css";';
        if (strpos($main_css_content, $import_statement) === false) {
            $main_css_content .= "\n" . $import_statement . "\n";
        }
        $preflight_statement = '/* @import "tailwindcss/preflight.css" layer(base); */';
        if (strpos($main_css_content, $preflight_statement) !== false) {
            $main_css_content = str_replace(
                $preflight_statement,
                '@import "tailwindcss/preflight.css" layer(base);',
                $main_css_content,
            );
        }
        $wp_filesystem->put_contents($main_css_path, $main_css_content);
        if ($is_require_reload) {
            // reload with js to avoid "Headers already sent" error
            echo '<script>location.reload();</script>';
            exit();
        }
    }

    #[Hook('after_setup_theme', type: 'action')]
    public function after_setup_theme(): void
    {
        /*
         * Make theme available for translation.
         */
        load_theme_textdomain('picowind-tw', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in locations.
        register_nav_menus([
            'primary' => __('Primary Menu', 'picowind-tw'),
            'secondary' => __('Secondary Menu', 'picowind-tw'),
        ]);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]);

        /*
         * Adding Thumbnail basic support
         */
        add_theme_support('post-thumbnails');

        /*
         * Adding support for Widget edit icons in customizer
         */
        add_theme_support('customize-selective-refresh-widgets');

        /*
         * Enable support for Post Formats.
         */
        add_theme_support('post-formats', [
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ]);

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('f!picowind-tw/theme/support:custom_background', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ]));

        // Set up the WordPress Theme logo feature.
        add_theme_support('custom-logo');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
    }
}
