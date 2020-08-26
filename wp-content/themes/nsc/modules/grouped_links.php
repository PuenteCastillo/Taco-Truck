<?php 
if ( get_sub_field('groupedlinks_background_type') == "Color" ){ 
    if ( get_sub_field('groupedlinks_background_color') ) {
        $bgstyle='style="background-color:'.get_sub_field('groupedlinks_background_color').';"';
    } else {
        $bgstyle='style="background-color:#FFFFFF;"';
    }
    $sctbg='';
}
else {
    $bgstyle='style="background-image:url('.get_sub_field('groupedlinks_background_image').');"';
    $sctbg='section_bg';
}
?>

<section class="grouped_links inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
	    <?php if( get_sub_field('groupedlinks_header') ) : ?>
    	    <div class="row justify-content-center">
    			<div class="col-12 col-sm-12 col-md-12 col-lg-11"><div class="module_title"><?php the_sub_field('groupedlinks_header'); ?></div></div>
    		</div>
        <?php endif; ?>
		<?php if ( have_rows('groupedlinks_content_blocks') ) : ?>
            <div class="row">
                <?php while( have_rows('groupedlinks_content_blocks') ) : the_row(); ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        				<div class="info_links">
        				    <div class="subheading underline_show"><h5 class="primary_color"><?php echo get_sub_field('groupedlinks_cntblock_category'); ?></h5></div>					
                            <?php if ( have_rows('groupedlinks_cntblock_links') ) : ?>
                                <ul>
                                    <?php while( have_rows('groupedlinks_cntblock_links') ) : the_row(); ?>
                                        <?php 
                                        $link = get_sub_field('groupedlinks_cntblock_links_link');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
		</div>	
	</div>
</section>