<?php

declare(strict_types=1);

/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 *
 * @package Picowind\Child\Tw
 * @since 1.0.0
 */

$context = \Picowind\context();

$timber_post = \Timber\Timber::get_post();
$context['post'] = $timber_post;

\Picowind\render([
    'page-' . $timber_post->post_name . '.twig',
    'page.twig'
], $context);
