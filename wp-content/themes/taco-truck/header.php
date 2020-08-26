<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Taco_Truck
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/58b7c2ba37.js"></script>

	<?php wp_head();?>
	<?php require get_template_directory() . '/template-parts/styles.php';?>
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.4.1/dist/simpleParallax.min.js"></script>

</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
<div id="page" class="site">


	<?php
require get_template_directory() . '/template-parts/Nav-bar/nav-hero.php';
?>

	<header id="masthead" class="site-header sticky-top">
<?php
require get_template_directory() . '/template-parts/Nav-bar/nav.php';
?>
	</header>

	<?php
require get_template_directory() . '/template-parts/Nav-bar/banner.php';
?>


	<!-- #masthead -->
