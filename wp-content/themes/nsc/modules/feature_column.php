<?php
if ( get_sub_field('fetcolm_background_type') == "color" ){ 
    $bgstyle='style="background-color:'.get_sub_field('fetcolm_section_background_color').';"';
    $sctbg='';
}
else { 
    $bgstyle='style="background-image:url('.get_sub_field('fetcolm_section_background_image').');"';
    $sctbg='section_bg';
}

if ( get_sub_field('fetcolm_no_of_column')==1 ) {
    $colclass="col-12 col-sm-12 col-md-12 col-lg-12";
    $lsclss="listcol_1";
} else if ( get_sub_field('fetcolm_no_of_column')==2 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";
    $lsclss="listcol_2";
} else if ( get_sub_field('fetcolm_no_of_column')==3 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";
    $lsclss="listcol_3";
} else { 
    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";
    $lsclss="listcol_4";
}
$lnktype=ctabtntype(get_sub_field('fetcolm_cta_link_type'));

$pribtn_left_top_rad=get_sub_field('fetcolm_left_top_image_radius');
$pribtn_left_bottom_rad=get_sub_field('fetcolm_left_bottom_image_radius');
$pribtn_right_top_rad=get_sub_field('fetcolm_right_top_image_radius');
$pribtn_right_bottom_rad=get_sub_field('fetcolm_right_bottom_image_radius');
$brdrradius=$pribtn_left_top_rad."px ".$pribtn_right_top_rad."px ".$pribtn_right_bottom_rad."px ".$pribtn_left_bottom_rad."px";

if ( have_rows('fetcolm_content_blocks') ) : ?>
<section class="feature_column inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
		<div class="row feature_column_row <?php echo $lsclss;?>">
		    <?php while( have_rows('fetcolm_content_blocks') ) : the_row(); ?>
			    <div class="<?php echo $colclass;?>">
					<div class="feature_column_inner">
					    <?php if( get_sub_field('fetcolm_contblocks_image') ) : ?><div class="feature_column_image" style="background-image: url('<?php echo get_sub_field('fetcolm_contblocks_image');?>');border-radius:<?php echo $brdrradius;?>;" data-aos="fade-in" data-aos-duration="1500"></div><?php endif; ?>
					    <div class="feature_column_body" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
    						<div class="feature_column_title">
        					    <?php if( get_sub_field('fetcolm_contblocks_sub_title') ) : ?><h5 class="accent_color"><?php echo get_sub_field('fetcolm_contblocks_sub_title');?></h5><?php endif; ?>
        					    <?php if( get_sub_field('fetcolm_contblocks_title') ) : ?><h2 class="primary_color"><?php echo get_sub_field('fetcolm_contblocks_title');?></h2><?php endif; ?>
    					    </div>
    					    <?php if( get_sub_field('fetcolm_contblocks_copy') ) : ?><div class="wysiwyg_content_editor"><?php the_sub_field('fetcolm_contblocks_copy');?></div><?php endif; ?>
    					    <?php 
                            $link = get_sub_field('fetcolm_contblocks_cta_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="<?php echo $lnktype;?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
    					</div>
				    </div>
				</div>
            <?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif;?>