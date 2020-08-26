<?php
if ( get_sub_field('callto_action_background_type') == "color" ){ 
    $bgstyle='style="background-color:'.get_sub_field('callto_action_section_background_color').';"';
    $sctbg='';
} else { 
    $bgstyle='style="background-image:url('.get_sub_field('callto_action_section_background_image').');"';
    $sctbg='section_bg';
}

if ( get_sub_field('callto_action_no_of_column')==1 ) {
    $colclass="col-12 col-sm-12 col-md-12 col-lg-12";
    $lsclss="listcol_1";
} else if ( get_sub_field('callto_action_no_of_column')==2 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";
    $lsclss="listcol_2";
} else if ( get_sub_field('callto_action_no_of_column')==3 ) {
    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";
    $lsclss="listcol_3";
} else { 
    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";
    $lsclss="listcol_4";
}
$brdreradis=get_sub_field('callto_action_block_border_radius');
$title=get_sub_field('callto_action_title');
$title_tag=get_sub_field('callto_action_title_tag');
if ( have_rows('callto_action_content_blocks') ) : ?>
<section class="call_to_action inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
	    <hr>
	    <?php if( !empty($title) ) : ?>
	    <div class="module_title text-center">
	        <<?php echo $title_tag;?> class="primary_color"><?php echo $title; ?></<?php echo $title_tag;?>>
	   </div>
	   <?php endif; ?>
		<div class="row cta_row <?php echo $lsclss;?>">
		    <?php $data_i=0; while( have_rows('callto_action_content_blocks') ) : the_row(); ?>
			    <div class="<?php echo $colclass;?> cta_col" data-aos="zoom-in" data-aos-delay="<?php echo $data_i;?>">
			            <?php 
			            if ( get_sub_field('callto_action_contblocks_block_background_type') == "color" ){ 
                            $clnkbgstyle='style="background-color:'.get_sub_field('callto_action_contblocks_block_background_color').';border-radius:'.$brdreradis.'px;"';
                        } else { 
                            $clnkbgstyle='style="background-image:url('.get_sub_field('callto_action_contblocks_block_background_image').');background-size:cover;border-radius:'.$brdreradis.'px;"';
                        }
                        $link = get_sub_field('callto_action_contblocks_title');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a <?php echo $clnkbgstyle;?> class="cta_link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h4><?php echo esc_html( $link_title ); ?></h4></a>
                        <?php endif; ?>
				</div>
            <?php $data_i=$data_i+300; endwhile; ?>
		</div>	
	</div>
</section>
<?php endif;?>