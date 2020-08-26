<?php
if ( get_sub_field('contact_banner_parallax') == "yes" ){
    $bgstyle='class="parallax" data-parallax="scroll" data-image-src="'.get_sub_field('contact_banner_background_image').'"';
} else { 
    $skcls='';
	if ( get_sub_field('contact_banner_enable_banner_slant')=="yes" ) {
	    if ( get_sub_field('contact_banner_banner_slant_position')=="left" )
	    {
	        $skcls=' skew skew_left';
	    } else {
	        $skcls=' skew skew_right';
	    }
	}
    $bgstyle='class="map_bg '.get_sub_field('contact_banner_background_position').$skcls.'" style="background-image:url('.get_sub_field('contact_banner_background_image').');"';
}
?>
<section class="contact_banner">
	<div class="contact_banner_inner">
    	<div <?php echo $bgstyle;?>>
    	    <?php if ( get_sub_field('contact_banner_background_overlay_color') ){ ?>
    	        <div class="overlay" style="background-color: <?php echo get_sub_field('contact_banner_background_overlay_color');?>;opacity:<?php echo get_sub_field('contact_banner_background_overlay_opacity');?>"></div>
    	    <?php } ?>
    	</div>
	</div>
	<div class="container">		
		<div class="contact_block" style="background-image: url('<?php echo get_sub_field('content_content_background_image');?>'); border-radius: <?php echo get_sub_field('content_background_image_radius');?>px;" data-aos="fade-up" data-aos-duration="2000">
			<?php if ( get_sub_field('content_background_image_overlay_color') ){ ?>
			    <div class="contact_block_overlay" style="background-color: <?php echo get_sub_field('content_background_image_overlay_color');?>;"></div>
			<?php } ?>

			<?php if ( have_rows('contact_content_blocks') ) : ?>
                <div class="row justify-content-center">
                    <?php while( have_rows('contact_content_blocks') ) : the_row(); ?>
                    	<div class="col-12 col-sm-12 col-md-4 col-lg-4">
        					<div class="address_block">
        						<h4 class="address_title"><?php echo get_sub_field('contact_content_block_header');?></h4>
        						<address>
        							<?php echo get_sub_field('contact_content_block_content_area');?>
        						</address>
        					</div>
				        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
		</div>
	</div>
</section>