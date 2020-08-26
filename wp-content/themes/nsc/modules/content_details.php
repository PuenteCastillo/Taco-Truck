<?php

if ( get_sub_field('cont_det_background_type') == "color" ){ 

    if ( get_sub_field('cont_det_section_background_color') ) { 

        $bgstyle='style="background-color:'.get_sub_field('blog1_sec_section_background_color').'"';

    } else {

        $bgstyle='';

    }

    $sctbg='';   

}

else 

{ 

    $bgstyle='style="background-image:url('.get_sub_field('cont_det_section_background_image').');"';

    $sctbg='section_bg';

}



if ( get_sub_field('cont_det_divider') == "true" ){ $udivider='dividers'; } else{ $udivider=''; }



if ( get_sub_field('cont_det_no_of_column')==1 ) {

    $colclass="col-12 col-sm-12 col-md-12 col-lg-12";

    $lsclss="listcol_1";

} else if ( get_sub_field('cont_det_no_of_column')==2 ) {

    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";

    $lsclss="listcol_2";

} else if ( get_sub_field('cont_det_no_of_column')==3 ) {

    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";

    $lsclss="listcol_3";

} else { 

    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";

    $lsclss="listcol_4";

}



if ( have_rows('cont_det_content_blocks') ) : 

?>

<section class="icon_3_col inner_spacing <?php echo $udivider;?> <?php echo $sctbg;?>" <?php echo $bgstyle;?>>

	<div class="container">

		<div class="row icon_col_row <?php echo $lsclss;?>">

		    <?php while( have_rows('cont_det_content_blocks') ) : the_row(); ?>

			    <div class="<?php echo $colclass;?> icon_col" data-aos="fade-up">

					<div class="icon_col_content">

					    <?php if( get_sub_field('contdet_contblocks_image') ) : ?><img src="<?php echo get_sub_field('contdet_contblocks_image'); ?>" alt="img"><?php endif; ?>

					    <?php if( get_sub_field('contdet_contblocks_title') ) : ?><h5 class="accent_color"><?php echo get_sub_field('contdet_contblocks_title');?></h5><?php endif; ?>

					    <?php if( get_sub_field('contdet_contblocks_copy') ) : the_sub_field('contdet_contblocks_copy'); endif; ?>

					</div>

				</div>

            <?php endwhile; ?>

		</div>

	</div>

</section>

<?php endif;?>