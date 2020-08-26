<?php
if ( get_sub_field('feature_banner_parallax') == "yes" ){
    $bgstyle='class="parallax" data-parallax="scroll" data-image-src="'.get_sub_field('feature_banner_background_image').'"';
} else {
    $skcls='';
	if ( get_sub_field('feature_banner_enable_banner_slant')=="yes" ) {
	    if ( get_sub_field('feature_banner_banner_slant_position')=="left" )
	    {
	        $skcls=' skew skew_left';
	    } else {
	        $skcls=' skew skew_right';
	    }
	}
    $bgstyle='class="feature_banner_bg '.get_sub_field('feature_banner_background_position').$skcls.'" style="background-image:url('.get_sub_field('feature_banner_background_image').');"';
}
?>

<section class="feature_banner">
	<div class="feature_banner_inner inner_spacing <?php echo get_sub_field('feature_banner_content_position');?>">
    	<div <?php echo $bgstyle;?>>
    	    <div class="overlay" style="background-color: <?php echo get_sub_field('feature_banner_background_overlay_color');?>;opacity:<?php echo get_sub_field('feature_banner_background_overlay_opacity');?>"></div>
    	</div>
		<div class="container">
			<div class="module_title" data-aos="fade-up" data-aos-duration="2000">
	            <?php if( get_sub_field('feature_banner_sub_header') ) : ?><h4 class="accent_color"><?php echo get_sub_field('feature_banner_sub_header');?></h4><?php endif; ?>
    	    	<?php if( get_sub_field('feature_banner_header') ) : ?><h2><?php echo get_sub_field('feature_banner_header');?></h2><?php endif; ?>
			</div>
		</div>
	</div>
	<div class="feature_middle" data-aos="fade-up" data-aos-duration="2000">
		<div class="container">
			<?php if ( get_sub_field('feature_banner_content')=="Image" ){ ?>
			    <div class="feature_middle_image" style="background-image: url('<?php echo get_sub_field('feature_banner_content_image');?>');border-radius: <?php echo get_sub_field('feature_banner_content_image_radius');?>;"></div>
			<?php } else { ?>
    			<div class="feature_video">
    			    <?php if ( get_sub_field('feature_banner_content_video_type')=="Custom" ){ ?>
        				<video controls autoplay>
        				    <source src="<?php echo get_sub_field('feature_banner_content_upload_video');?>" type="video/mp4">
        				    Your browser does not support the HTML5 Video element.
        				</video>
    				<?php } else { ?>
    				    <?php echo get_sub_field('feature_banner_content_video_embedded_code');?>
	               <?php } ?>
		   		</div>
			<?php } ?>

				<!-- Youtube Video -->
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/XsI9F3n-Bog" frameborder="0" allowfullscreen></iframe> -->

				<!-- Vimeo Video -->
				<!-- <iframe src="https://player.vimeo.com/video/76979871" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> -->				

        		<!-- Wistia Video -->
				<!-- <iframe src="//fast.wistia.net/embed/iframe/avk9twrrbn" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="620" height="349"></iframe> -->
		</div>
	</div>
</section>