<?php
$skwclass='';
if ( get_sub_field('page_banner_parallax') == "yes" ){
    $bgstyle='class="parallax" data-parallax="scroll" data-image-src="'.get_sub_field('page_banner_background_image').'"';
    $sctbg='';
} else {
    $bgstyle='class="page_top_bg '.get_sub_field('page_banner_background_position').'" style="background-image:url('.get_sub_field('page_banner_background_image').');"';
    $sctbg='section_bg';
    $skcls='';
	if ( get_sub_field('page_banner_enable_slant', 'option')=="yes" ) {
	    if ( get_sub_field('page_banner_banner_slant_position', 'option')=="left" )
	    {
	        $skcls=' skew skew_left';
	    } else {
	        $skcls=' skew skew_right';
	    }
	}
	$sctbg.=$skcls;
}
?>
<section class="page_top_image <?php echo get_sub_field('page_banner_content_position');?> inner_spacing <?php echo $sctbg;?>">
	<div <?php echo $bgstyle;?>>
	    <div class="overlay" style="background-color: <?php echo get_sub_field('page_banner_background_overlay_color');?>;opacity:<?php echo get_sub_field('page_banner_background_overlay_opacity');?>"></div>
	</div>
    <div class="container">
    	<div class="module_title" data-aos="fade-up" data-aos-duration="2000">
    	    <?php if( get_sub_field('page_banner_sub_header') ) : ?><h4 class="accent_color"><?php echo get_sub_field('page_banner_sub_header');?></h4><?php endif; ?>
    		<?php if( get_sub_field('page_banner_header') ) : ?><h2><?php echo get_sub_field('page_banner_header');?></h2><?php endif; ?>
    	</div>
    </div>
</section>