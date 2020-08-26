<?php 
if ( get_sub_field('quicklinks_background_type') == "Color" ){ 
    if ( get_sub_field('quicklinks_background_color') ) {
        $bgstyle='style="background-color:'.get_sub_field('quicklinks_background_color').';"';
    } else {
        $bgstyle='style="background-color:#FFFFFF;"';
    }
    $sctbg='';
}
else {
    $bgstyle='style="background-image:url('.get_sub_field('quicklinks_background_image').');"';
    $sctbg='section_bg';
}

$main_title_tag=get_sub_field('quicklinks_header_tag');
?>
<section class="quicklinks inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">		
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-lg-8">
				<div class="quicklinks_wide_col">
				    <?php if( get_sub_field('quicklinks_header') ) : ?>
				        <<?php echo $main_title_tag;?> class="accent_color" data-aos="fade-up"><?php echo get_sub_field('quicklinks_header'); ?></<?php echo $main_title_tag;?>>
				    <?php endif; ?>
				    <?php if( get_sub_field('quicklinks_content') ) : the_sub_field('quicklinks_content'); endif; ?>
					<?php if( get_sub_field('quicklinks_contact_form_title') ) : ?>
                        <div class="module_title underline_show"><h5 class="primary_color"><?php echo get_sub_field('quicklinks_contact_form_title'); ?></h5></div>					
                    <?php endif; ?>
					<?php if( get_sub_field('quicklinks_contact_form_shortcode') ) : ?><?php echo do_shortcode(get_sub_field('quicklinks_contact_form_shortcode')); ?><?php endif; ?>

				</div>				
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				<div class="quicklinks_side_col">
				    <?php if( get_sub_field('quicklinks_links_title') ) : ?><h3 class="accent_color"><?php echo get_sub_field('quicklinks_links_title'); ?></h3><?php endif; ?>
                    <?php if ( have_rows('quicklinks_links') ) : ?>
                    	<ul class="quicklinks_menu">
                            <?php while( have_rows('quicklinks_links') ) : the_row(); ?>
                                <?php 
                                $link = get_sub_field('quicklinks_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <li>
                                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                            <?php if( get_sub_field('quicklinks_link_icon') ) : ?><i class="<?php echo get_sub_field('quicklinks_link_icon'); ?>"></i><?php endif; ?>
                                            <?php echo esc_html( $link_title ); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
				</div>
			</div>
		</div>	
	</div>
</section> 