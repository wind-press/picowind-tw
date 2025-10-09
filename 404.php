<?php

declare(strict_types=1);

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Picowind\Child\Tw
 * @since 1.0.0
 */

$context = \Picowind\context();

\Picowind\render('404.twig', $context);
