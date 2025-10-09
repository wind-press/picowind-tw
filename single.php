<?php

declare(strict_types=1);

/**
 * The template for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Picowind\Child\Tw
 * @since 1.0.0
 */

$context = \Picowind\context();
$timber_post = \Timber\Timber::get_post();
$context['post'] = $timber_post;

if (post_password_required($timber_post->ID)) {
    \Picowind\render('single-password.twig', $context);
} else {
    \Picowind\render([
        'single-' . $timber_post->ID . '.twig',
        'single-' . $timber_post->post_type . '.twig',
        'single-' . $timber_post->slug . '.twig',
        'single.twig'
    ], $context);
}
