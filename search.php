<?php
/**
 * Search Results Template
 *
 * @package Picowind\Child\Tw
 * @since 1.0.0
 */

declare(strict_types=1);

$context = \Picowind\context();
$context['title'] = sprintf(
    /* translators: %s: search query */
    __('Search Results for: %s', 'picowind-tw'),
    get_search_query(),
);
$context['search_query'] = get_search_query();
$context['posts'] = \Timber\Timber::get_posts();

\Picowind\render(['search.twig', 'archive.twig', 'index.twig'], $context);
