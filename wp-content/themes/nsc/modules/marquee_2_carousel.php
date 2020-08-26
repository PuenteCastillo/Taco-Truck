<?php
if ( get_sub_field('marq2car_hero_image_parallax') == "yes" ){
    $bgstyle='class="parallax" data-parallax="scroll" data-image-src="'.get_sub_field('marq2car_hero_image').'"';
}
else{
    $bgstyle='class="marquee_bg" style="background-image:url('.get_sub_field('marq2car_hero_image').');"';
}
$ssuniqid=get_row_index();
$cartimer=get_sub_field('marq2car_carousel_images_timer')*1000;
$lnktype=ctabtntype(get_sub_field('marq2car_cta_button_type'));
?>
<section class="marquee marquee_2">	
	<div <?php echo $bgstyle;?>><!--<div class="overlay" style="background-color: #000000;"></div>--></div>
	<?php if ( have_rows('marq2car_slides') ) : ?>
        <div class="container h-100">
		    <div class="banner_inner">
			    <div class="marquee2_carousel" id="marquee2<?php echo $ssuniqid;?>_carousel">
                    <?php while( have_rows('marq2car_slides') ) : the_row(); ?>
        				<div class="banner_content">
            			    <?php if( get_sub_field('marq2car_slides_sub_title') ) : ?><h5><?php echo get_sub_field('marq2car_slides_sub_title');?></h5><?php endif; ?>
            			    <?php if( get_sub_field('marq2car_slides_title') ) : ?><h1><?php echo get_sub_field('marq2car_slides_title');?></h1><?php endif; ?>
            			    <?php if( get_sub_field('marq2car_slides_content') ) :?><p><?php echo get_sub_field('marq2car_slides_content');?></p><?php endif; ?>
            			    <?php 
                            $link = get_sub_field('marq2car_slides_cta_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="<?php echo $lnktype;?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
        				</div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
<script>
jQuery(document).ready(function() {
    jQuery('#marquee2<?php echo $ssuniqid;?>_carousel').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: <?php echo $cartimer;?>,
        pauseOnHover: true,
        arrows: true,
        dots: false,
        useTransform: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});
</script>