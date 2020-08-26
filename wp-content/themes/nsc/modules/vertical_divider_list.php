<?php
if ( get_sub_field('verti_divderlst_background_type') == "color" ){ 
    $bgstyle='style="background-color:'.get_sub_field('verti_divderlst_section_background_color').';"';
    $sctbg='';
} else { 
    $bgstyle='style="background-image:url('.get_sub_field('verti_divderlst_section_background_image').');"';
    $sctbg='section_bg';
}

if ( get_sub_field('verti_divderlst_under_line') == "true" ){ $ushadow='underline_show'; } else{ $ushadow=''; }
if ( get_sub_field('verti_divderlst_divider') == "true" ){ $udivider='dividers'; } else{ $udivider=''; }

if ( get_sub_field('verti_divderlst_no_of_column')==1 ) {
    $colclass="col-12 col-sm-12 col-md-12 col-lg-12";
    $lsclss="listcol_1";
} else if ( get_sub_field('verti_divderlst_no_of_column')==2 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";
    $lsclss="listcol_2";
} else if ( get_sub_field('verti_divderlst_no_of_column')==3 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";
    $lsclss="listcol_3";
} else { 
    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";
    $lsclss="listcol_4";
}

if( get_sub_field('verti_divderlst_center_aligned')=="yes" ) { 
    $contcenter='justify-content-center text-center';
    
} else {
    $contcenter='';
}


if ( have_rows('verti_divderlst_content_blocks') ) : ?>
<section class="vertical_divider_list inner_spacing <?php echo $udivider;?> <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
		<div class="row vertical_content_row <?php echo $lsclss.' '.$contcenter;?> ">
		    <?php $data_i=0; while( have_rows('verti_divderlst_content_blocks') ) : the_row(); ?>
			    <div class="<?php echo $colclass;?> vertical_content_col" data-aos="fade-up" data-aos-delay="<?php echo $data_i;?>">
					<div class="vertical_content">
						<div class="vertical_content_title <?php echo $ushadow;?>" ><h5 class="primary_color"><?php echo get_sub_field('verti_divderlst_contblocks_title');?></h5></div>
						<?php the_sub_field('verti_divderlst_contblocks_copy');?>
					</div>
				</div>
            <?php $data_i=$data_i+200; endwhile; ?>
		</div>	
	</div>
</section>
<?php endif;?>