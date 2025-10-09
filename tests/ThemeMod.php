<?php

declare(strict_types=1);

namespace Tests\Picowind;

use Picowind\Core\Discovery\Attributes\Hook;
use Picowind\Core\Discovery\Attributes\Service;
use stdClass;

/**
 * This is only for testing purposes.
 * A temporary solution to add theme mods to the context for testing.
 * To be removed once we have a complete settings page implementation.
 */
#[Service]
class ThemeMod
{
    #[Hook('f!picowind/context', type: 'filter', priority: 20)]
    public function add_theme_mods_to_context(array $context): array
    {
        if (!isset($context['theme']->mods)) {
            $context['theme']->mods = new stdClass();
        }

        if (!is_object($context['theme']->mods)) {
            $context['theme']->mods = (object) $context['theme']->mods;
        }

        $context['theme']->mods->enable_dark_mode_switch = true;
        $context['theme']->mods->enable_search_form = true;
        $context['theme']->mods->enable_header_elements = true;
        $context['theme']->mods->enable_footer_elements = true;
        $context['theme']->mods->picowind_header_navbar_color_choice = 'bg-base-100';
        $context['theme']->mods->footer_text = 'This is a custom footer text set from ThemeMod service.';

        // Topbar settings
        $context['theme']->mods->enable_topbar = true;
        $context['theme']->mods->topbar_content = 'Welcome to our site! Free shipping on orders over $50';
        $context['theme']->mods->topbar_bg_color_choice = 'bg-primary';
        $context['theme']->mods->topbar_text_color_choice = 'text-primary-content';

        // Single post settings
        $context['theme']->mods->singlepost_disable_entry_cats = false;
        $context['theme']->mods->singlepost_disable_date = false;
        $context['theme']->mods->singlepost_disable_author = false;
        $context['theme']->mods->singlepost_disable_sharing_buttons = false;
        $context['theme']->mods->enable_sharing_buttons = true;

        return $context;
    }
}
