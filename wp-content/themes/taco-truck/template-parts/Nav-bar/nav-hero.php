<?php
// Variables:
$custom_logo_id = get_theme_mod('custom_logo');
$custom_logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

if (get_field('header')) {
    ?>


<div class="header-hero" style=" background-image: url('<?php echo get_field('nav_hero_image') ? get_field('nav_hero_image') : 'http://via.placeholder.com/1600x600' ?>') ">
    <div class="container">
        <img class="hero-logo" src="<?php echo $custom_logo_url[0] ? $custom_logo_url[0] : 'https://via.placeholder.com/400x200'; ?>" alt="" loading="lazy" />
        <div class="headet-text-container">
            <p> <?php get_field('nav_hero_text') ? the_field('nav_hero_text') : ' '?> </p>
        </div>
    </div>
</div>

<?php }?>
