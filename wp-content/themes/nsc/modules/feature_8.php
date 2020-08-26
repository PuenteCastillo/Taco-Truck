<?php
$small_title_tag=get_sub_field('fet8_small_title_tag');
$big_title_tag=get_sub_field('fet8_big_title_tag');

if ( get_sub_field('solutions_sec_section_background_color') ) { 
    $bgcolorstl='style="background-color:'.get_sub_field('blog1_sec_section_background_color').'"';
} else {
    $bgcolorstl='';
}


?>
<section class="feature_service inner_spacing <?php if ( get_sub_field('fet8_side_image_enable_shadow_overlapping')=="yes" ) { echo "sideimg_lg"; }?>" <?php echo $bgcolorstl;?>>
	<div class="container">		
		<?php if ( get_sub_field('fet8_side_image_position') == "left" ){ 
            $dtdir="left"; 
            $dtimgaos="fade-right";
        } else { 
            $dtdir="right";
            $dtimgaos="fade-left";
        }
        ?>
		<div class="row <?php echo $dtdir;?>">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 feature_service_image" data-aos="<?php echo $dtimgaos;?>">
			    <?php if( get_sub_field('fet8_side_image') ): ?><img src="<?php the_sub_field('fet8_side_image'); ?>" alt="img" /><?php endif; ?>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 feature_service_content" data-aos="fade-up" data-aos-duration="2000">
				<div class="app_title clearfix">
				    <?php if( get_sub_field('fet8_icon') ) : ?>
    					<figure class="app_title_img"><img src="<?php echo get_sub_field('fet8_icon'); ?>" alt="img"></figure>
				    <?php endif; ?>
					<div class="app_title_text">
					    <?php if( get_sub_field('fet8_small_title') ) : ?><<?php echo $small_title_tag;?> class="accent_color"><?php echo get_sub_field('fet8_small_title'); ?></<?php echo $small_title_tag;?>><?php endif; ?>
					    <?php if( get_sub_field('fet8_big_title') ) : ?><<?php echo $big_title_tag;?> class="primary_color"><?php echo get_sub_field('fet8_big_title'); ?></<?php echo $big_title_tag;?>><?php endif; ?>
					</div>
				</div>
			    <?php if( get_sub_field('fet8_content') ) : ?><div class="wysiwyg_content_editor"><?php the_sub_field('fet8_content');?></div><?php endif; ?>
			    
			    <div class="btngrp">
			    <?php 
                $link = get_sub_field('fet8_cta_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="<?php echo ctabtntype(get_sub_field('fet8_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('fet8_cta_button_type'));?></a>
                <?php endif; ?>
                <?php 
                $link = get_sub_field('fet8_cta_second_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="<?php echo ctabtntype(get_sub_field('fet8_cta_second_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('fet8_cta_second_button_type'));?></a>
                <?php endif; ?>
                </div>
                
                
			</div>
		</div>	
	</div>
</section>