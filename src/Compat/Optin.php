<?php

declare(strict_types=1);

namespace Picowind\Child\Tw\Compat;

use Picowind\Core\Discovery\Attributes\Hook;
use Picowind\Core\Discovery\Attributes\Service;

/**
 * The backward compatibility of various Picostrap 5 Opt-in features.
 *
 * Available features:
 * - Lightbox
 *
 */
#[Service]
class Optin
{
    /**
     * Opt-in Lightbox
     *
     * This feature is disabled by default, but can be enabled by adding the following line to snippet or your theme's functions.php file:
     * ```php
     * add_filter('f!picostrap/compat/optin:lightbox', '__return_true');
     * ```
     *
     * @link https://github.com/livecanvas-team/picostrap5/blob/master/inc/opt-in/lightbox.php
     */
    #[Hook('wp_footer', type: 'action', priority: 20)]
    public function picostrap_optin_lightbox(): void
    {
        if (!apply_filters('f!picostrap/compat/optin:lightbox', false)) {
            return;
        }

        if (isset($_GET['lc_page_editing_mode'])) {
            return;
        }

        \Picowind\render('compat/optin/lightbox.twig');
    }
}
