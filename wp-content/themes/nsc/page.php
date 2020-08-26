<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nsc
 */

get_header();

while ( have_posts() ) : the_post();

    echo do_shortcode( '[flexmodules name=layout_modules]' );

endwhile; 

get_footer();