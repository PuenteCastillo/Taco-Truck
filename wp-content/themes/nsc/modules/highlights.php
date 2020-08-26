<?php 
if ( get_sub_field('highlights_background_type') == "Color" ){ 
    if ( get_sub_field('highlights_background_color') ) {
        $bgstyle='style="background-color:'.get_sub_field('highlights_background_color').';"';
    } else {
        $bgstyle='style="background-color:#FFFFFF;"';
    }
    $sctbg='';
}
else {
    $bgstyle='style="background-image:url('.get_sub_field('highlights_background_image').');"';
    $sctbg='section_bg';
}

$main_title_tag=get_sub_field('highlights_section_title_tag');
?>
<section class="highlights inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">		
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-10 col-lg-9">				
				<div class="module_title text-center">
				    <?php if( get_sub_field('highlights_section_title') ) : ?>
				        <<?php echo $main_title_tag;?> class="accent_color" data-aos="fade-up"><?php echo get_sub_field('highlights_section_title'); ?></<?php echo $main_title_tag;?>>
				    <?php endif; ?>
				    <?php if( get_sub_field('highlights_section_subhead') ) : the_sub_field('highlights_section_subhead'); endif; ?>
				</div>
			</div>
		</div>
		<?php if ( have_rows('highlights_content_blocks') ) : ?>
            <div class="row">
            <?php $data_id=0; while( have_rows('highlights_content_blocks') ) : the_row(); ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="<?php echo $data_id;?>" >
    				<div class="highlights_col section_bg" style="background-image:url('<?php echo get_sub_field('highlights_block_image');?>');">
    				    <div class="bg_overlay"></div>
    					<div class="highlights_content">
    					    <?php if( get_sub_field('highlights_block_header') ) :?><h5 class="primary_color"><?php echo get_sub_field('highlights_block_header');?></h5><?php endif; ?>
    					    <?php if( get_sub_field('highlights_block_content') ) : the_sub_field('highlights_block_content'); endif; ?>
    					    <?php 
                            $link = get_sub_field('highlights_block_cta_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="fas fa-caret-right"></i></a>
                            <?php endif; ?>
    					</div>
    				</div>
    			</div>
            <?php $data_id=$data_id+300; endwhile; ?>
            </div>
        <?php endif; ?>
	</div>
</section>