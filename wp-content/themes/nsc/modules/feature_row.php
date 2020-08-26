<?php
$small_title_tag=get_sub_field('fetrow_small_title_tag');
$main_title_tag=get_sub_field('fetrow_title_tag');

if ( get_sub_field('fetrow_background_type') == "color" ){
    $bgstyle='style="background-color:'.get_sub_field('fetrow_section_background_color').';"';
    $sctbg='';
}
else{
    $bgstyle='style="background-image:url('.get_sub_field('fetrow_section_background_image').');"';
    $sctbg='section_bg';
}
if ( get_sub_field('fetrow_style') == "styleone" ){
?>
<section class="feature_row inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
        <?php if ( get_sub_field('fetrow_side_image_position') == "left" ){ 
            $dtdir="left"; 
            $dtimgaos="fade-right";
            $dtcntaos="fade-left";
        } else { 
            $dtdir="right";
            $dtimgaos="fade-left";
            $dtcntaos="fade-right";
        }
        ?>
		<div class="row feature_col_row <?php echo $dtdir;?>">
			<div class="col-12 col-sm-12 col-md-7 col-lg-7 feature_image_col" data-aos="<?php echo $dtimgaos;?>">
				<div class="feature_image" style="background-image: url('<?php echo get_sub_field('fetrow_side_image'); ?>');border-radius:<?php echo get_sub_field('fetrow_side_image_corner_radius');?>px;"></div>
			</div>
			<div class="col-12 col-sm-12 col-md-5 col-lg-5 feature_content_col" data-aos="<?php echo $dtcntaos;?>">
				<div class="feature_content_column">
				    <?php if( get_sub_field('fetrow_logo') ) : ?><figure class="feature_title_img"><img src="<?php echo get_sub_field('fetrow_logo'); ?>"></figure><?php endif; ?>
				    <?php if( get_sub_field('fetrow_small_title') ) : ?><<?php echo $small_title_tag;?> class="accent_color"><?php echo get_sub_field('fetrow_small_title'); ?></<?php echo $small_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('fetrow_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('fetrow_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('fetrow_content') ) : ?><div class="wysiwyg_content_editor"><?php the_sub_field('fetrow_content');?></div><?php endif; ?>
				    <?php 
                    $link = get_sub_field('fetrow_cta_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        if ( !empty($link['title']) )
                        {
                            $link_title = $link['title'];
                        }
                        else
                        {
                            $link_title ='Learn More';
                        }
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="<?php echo ctabtntype(get_sub_field('fetrow_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('fetrow_cta_button_type'));?></a>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } elseif ( get_sub_field('fetrow_style') == "styletwo" ){ ?>

<section class="feature_row feature_row_style2 inner_spacing" <?php echo $bgstyle;?>>
	<div class="container">
        <?php if ( get_sub_field('fetrow_side_image_position') == "left" ){ 
            $dtdir="left"; 
            $dtimgaos="fade-right";
            $dtcntaos="fade-left";
        } else { 
            $dtdir="right";
            $dtimgaos="fade-left";
            $dtcntaos="fade-right";
        }
        ?>

		<div class="row feature_col_row <?php echo $dtdir;?>">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 feature_image_col" data-aos="<?php echo $dtimgaos;?>">
				<div class="feature_image" style="background-image: url('<?php echo get_sub_field('fetrow_side_image'); ?>');border-radius:<?php echo get_sub_field('fetrow_side_image_corner_radius');?>px;"></div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 feature_content_col ml-auto" data-aos="<?php echo $dtcntaos;?>">
				<div class="feature_content_column">
				    <?php if( get_sub_field('fetrow_small_title') ) : ?><<?php echo $small_title_tag;?> class="accent_color"><?php echo get_sub_field('fetrow_small_title'); ?></<?php echo $small_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('fetrow_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('fetrow_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
    			    <?php if( get_sub_field('fetrow_content') ) : ?><div class="wysiwyg_content_editor"><?php the_sub_field('fetrow_content');?></div><?php endif; ?>
				    <?php 
                    $link = get_sub_field('fetrow_cta_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        if ( !empty($link['title']) )
                        {
                            $link_title = $link['title'];
                        }
                        else
                        {
                            $link_title ='Learn More';
                        }
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="<?php echo ctabtntype(get_sub_field('fetrow_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('fetrow_cta_button_type'));?></a>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } else { ?>
    <section class="feature_row feature_row_style3 inner_spacing" <?php echo $bgstyle;?>>
        <div class="feature_image d-block d-lg-none" style="background-image: url('<?php echo get_sub_field('fetrow_side_image'); ?>');" data-aos="fade-in" data-aos-duration="2000"></div>
    	<div class="container">
    		<div class="row feature_col_row <?php if ( get_sub_field('fetrow_side_image_position') == "left" ){ echo "left"; } else { echo "right";}?>">
    			<div class="col-12 col-sm-12 col-md-6 col-lg-6 feature_image_col d-none d-lg-block" data-aos="fade-in" data-aos-duration="2000">
    				<div class="feature_image" style="background-image: url('<?php echo get_sub_field('fetrow_side_image'); ?>');"></div>
    			</div>
    			<div class="col-12 col-sm-12 col-md-12 col-lg-6 feature_content_col ml-auto" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="300">
    				<div class="feature_content_column">
    				    <?php if( get_sub_field('fetrow_small_title') ) : ?><<?php echo $small_title_tag;?> class="accent_color"><?php echo get_sub_field('fetrow_small_title'); ?></<?php echo $small_title_tag;?>><?php endif; ?>
    				    <?php if( get_sub_field('fetrow_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('fetrow_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
        			    <?php if( get_sub_field('fetrow_content') ) : ?><div class="wysiwyg_content_editor"><?php the_sub_field('fetrow_content');?></div><?php endif; ?>
    				    <?php 
                        $link = get_sub_field('fetrow_cta_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            if ( !empty($link['title']) )
                            {
                                $link_title = $link['title'];
                            }
                            else
                            {
                                $link_title ='Learn More';
                            }
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="<?php echo ctabtntype(get_sub_field('fetrow_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('fetrow_cta_button_type'));?></a>
                        <?php endif; ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
<?php } ?>
