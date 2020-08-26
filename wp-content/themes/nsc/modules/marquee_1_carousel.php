<?php
if ( get_sub_field('marq1car_hero_image_parallax') == "yes" ){
    $bgstyle='class="parallax" data-parallax="scroll" data-image-src="'.get_sub_field('marq1car_hero_image').'"';
}
else{
    $bgstyle='class="marquee_bg" style="background-image:url('.get_sub_field('marq1car_hero_image').');"';
}
$ssuniqid=get_row_index();
$cartimer=get_sub_field('marq1car_carousel_images_timer')*1000;
?>
<section class="marquee marquee_1">
	<div <?php echo $bgstyle;?>><!--<div class="overlay" style="background-color: #000000;"></div>--></div>
	<div class="container">
		<div class="banner_inner d-flex h-100" data-aos="fade-up" data-aos-duration="2000">
			<div class="banner_content">
			    <?php if( get_sub_field('marq1car_sub_title') ) : ?><<?php echo get_sub_field('marq1car_sub_title_tag');?>><?php echo get_sub_field('marq1car_sub_title');?></<?php echo get_sub_field('marq1car_sub_title_tag');?>><?php endif; ?>
			    <?php if( get_sub_field('marq1car_title') ) : ?><<?php echo get_sub_field('marq1car_title_tag');?>><?php echo get_sub_field('marq1car_title');?></<?php echo get_sub_field('marq1car_title_tag');?>><?php endif; ?>
			    <?php if( get_sub_field('marq1car_content') ) :?><p><?php echo get_sub_field('marq1car_content');?></p><?php endif; ?>
			    <?php 
                $link = get_sub_field('marq1car_cta_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="<?php echo ctabtntype(get_sub_field('marq1car_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php if ( have_rows('marq1car_carousel_images') ) : ?>
<div class="marquee1_carousel_block">
	<div class="marquee1_carousel_wrap">
		<div class="marquee1_carousel" id="marquee1<?php echo $ssuniqid;?>_carousel">
            <?php while( have_rows('marq1car_carousel_images') ) : the_row(); ?>
                <div class="feature_slide" style="background-image: url('<?php echo get_sub_field('marq1car_car_carousel_image');?>');"></div>
            <?php endwhile; ?>
        </div>
	</div>
</div>
<script>
jQuery(document).ready(function() {
    jQuery('#marquee1<?php echo $ssuniqid;?>_carousel').slick({
        centerMode: true,
        slidesToShow: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: <?php echo $cartimer;?>,
        pauseOnHover: true,
        arrows: true
    });
});
</script>
<?php endif; ?>