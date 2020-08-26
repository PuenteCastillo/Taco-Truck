<section class="banner main_hero_banner" style="background-image: url('<?php echo get_field('hero_banner_image');?>');">
	<div class="overlay" style="background-color: #000000"></div>
	<div class="container h-100">
		<div class="banner_inner d-flex h-100">
		    <?php  if( get_field('logo_on_banner') ) { ?>
                <div class="banner_logo"><img src="<?php echo get_field('logo_on_banner');?>" alt="<?php echo get_bloginfo('name');?>"></div>
    		<?php } ?>
			<?php if ( get_field('text_on_banner') ) : ?><div class="banner_content"><h1><?php echo get_field('text_on_banner'); ?></h1></div><?php endif; ?>
		</div>		
	</div>
</section>