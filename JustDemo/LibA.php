<?php

declare(strict_types=1);

namespace JustDemo;

use Picowind\Core\Discovery\Attributes\Hook;

class LibA
{
    #[Hook('init', type: 'action', priority: 20)]
    public static function init(): void
    {
        // error_log('LibA init called');
        // error_log(print_r(\Picowind\render_string('<div>{{ $name }}</div>', ['name' => 'John'], 'blade', false), true));
        // Blade rendering test
        // error_log(\Picowind\render_string('<div>{{ $name }}</div>', ['name' => 'Blade'], 'blade', false));
        // // Twig rendering test
        // error_log(\Picowind\render_string('<div>{{ name }}</div>', ['name' => 'Twig'], 'twig', false));
        // // Latte rendering test
        // error_log(\Picowind\render_string('<div>{$name}</div>', ['name' => 'Latte'], 'latte', false));
    }
}
