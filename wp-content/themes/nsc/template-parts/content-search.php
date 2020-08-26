<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nsc
 */
?>
<a href="<?php echo esc_url( get_permalink() );?>" class="search_post clearfix">
        <?php if ( has_post_thumbnail() ) { ?><div class="search_post_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"></div><?php } ?>
        <div class="search_post_content">
            <span class="search_post_date"><?php the_time( 'l, F j, Y' ); ?></span>
            <h3 class="primary_color"><?php echo get_the_title();?></h3>
            <?php the_excerpt(); ?>
            <span class="accent_color">Read More <i class="fas fa-caret-right"></i></span>
        </div>
</a>