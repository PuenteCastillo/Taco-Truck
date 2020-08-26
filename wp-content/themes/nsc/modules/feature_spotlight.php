<?php 
if ( get_sub_field('feature_spotlight_background_type') == "Color" ){ 
    if ( get_sub_field('feature_spotlight_background_color') ) {
        $bgstyle='style="background-color:'.get_sub_field('feature_spotlight_background_color').';"';
    } else {
        $bgstyle='style="background-color:#FFFFFF;"';
    }
    $sctbg='';
}
else { 
    $bgstyle='style="background-image:url('.get_sub_field('feature_spotlight_background_image').');"';
    $sctbg='section_bg';
}

if ( get_sub_field('feature_spotlight_no_of_columns')==1 ) {
    $colclass="col-12 col-sm-12 col-md-12 col-lg-12";
    $lsclss="listcol_1";
} else if ( get_sub_field('feature_spotlight_no_of_columns')==2 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";
    $lsclss="listcol_2";
} else if ( get_sub_field('feature_spotlight_no_of_columns')==3 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";
    $lsclss="listcol_3";
} else { 
    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";
    $lsclss="listcol_4";
}
?>

<section class="feature_spotlight inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">		
		<div class="row spotlight_row <?php echo $lsclss;?>">
		    <?php if ( have_rows('feature_spotlight_content_blocks') ) : ?>
                <?php while( have_rows('feature_spotlight_content_blocks') ) : the_row(); ?>
                    <div class="<?php echo $colclass;?>">
        				<div class="spotlight_col">
        					<div class="spotlight_col_bg" style="background-image: url('<?php echo get_sub_field('feature_spotlight_block_image');?>');"></div>
        					<div class="spotlight_col_caption">
        					    <?php if( get_sub_field('feature_spotlight_block_header') ) : ?>
        					        <span class="accent_color subheading"><?php echo get_sub_field('feature_spotlight_block_header'); ?></span>
                                <?php endif; ?>
                                <?php if( get_sub_field('feature_spotlight_block_sub_head') ) : ?>
                                    <h4 class="primary_color"><?php echo get_sub_field('feature_spotlight_block_sub_head'); ?></h4>
                                <?php endif; ?>
        					</div>
        				</div>
        			</div>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>	
	</div>
</section>