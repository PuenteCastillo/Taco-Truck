<?php

if ( get_sub_field('cont_col_background_type') == "color" ){ 
    $bgstyle='style="background-color:'.get_sub_field('cont_col_section_background_color').';"';
    $sctbg='';

}
else 
{ 
    $bgstyle='style="background-image:url('.get_sub_field('cont_col_section_background_image').');"';
    $sctbg='section_bg';
}

if ( get_sub_field('cont_col_under_line') == "true" ){ $ushadow='underline_show'; } else{ $ushadow=''; }


if ( get_sub_field('cont_col_no_of_column')==1 ) {
    $colclass="col-12 col-sm-12 col-md-12 col-lg-12";
    $lsclss="listcol_1";
} else if ( get_sub_field('cont_col_no_of_column')==2 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";
    $lsclss="listcol_2";
} else if ( get_sub_field('cont_col_no_of_column')==3 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";
    $lsclss="listcol_3";
} else { 
    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";
    $lsclss="listcol_4";
}
$pribtn_left_top_rad=get_sub_field('cont_col_left_top_border_radius');
$pribtn_left_bottom_rad=get_sub_field('cont_col_left_bottom_border_radius');
$pribtn_right_top_rad=get_sub_field('cont_col_right_top_border_radius');
$pribtn_right_bottom_rad=get_sub_field('cont_col_right_bottom_border_radius');
$brdrradius=$pribtn_left_top_rad."px ".$pribtn_right_top_rad."px ".$pribtn_right_bottom_rad."px ".$pribtn_left_bottom_rad."px";

if ( have_rows('cont_col_content_blocks') ) : ?>
<section class="images_3_col inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
		<div class="image_col_row_wrap">
			<div class="row image_col_row <?php echo $lsclss;?>">
			    <?php while( have_rows('cont_col_content_blocks') ) : the_row(); ?>
    			    <div class="<?php echo $colclass;?> image_col" data-aos="fade-up">
    					<div class="image_col_content">
    						<div class="image_col_bg" style="background-image: url('<?php echo get_sub_field('contcol_contblocks_image');?>');border-radius:<?php echo $brdrradius;?>;"></div>
    						<div class="image_col_title <?php echo $ushadow;?>">
    							<h5 class="primary_color"><?php echo get_sub_field('contcol_contblocks_title');?></h5>
    						</div>
    						<?php the_sub_field('contcol_contblocks_copy');?>
    					</div>
    				</div>
                <?php endwhile; ?>
			</div>	
		</div>
	</div>
</section>
<?php endif;?>