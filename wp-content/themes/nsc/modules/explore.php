<?php if ( get_sub_field('ctasimple_background_color') ){ $sbgcolor=get_sub_field('ctasimple_background_color'); } else { $sbgcolor='#FFFFFF'; } 
$blocktitletag=get_sub_field('explore_block_title_tag');
$blockbtntype=get_sub_field('explore_block_button_type');
?>
<section class="explore inner_spacing" style="background-color:<?php echo $sbgcolor;?>;">
	<div class="container">	
		<div class="row">
		    <?php if ( have_rows('explore_content_blocks') ) : ?>
                <?php $data_i=0; while( have_rows('explore_content_blocks') ) : the_row(); ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="<?php echo $data_i;?>">
        				<div class="explore_block">
        					<div class="explore_block_bg" style="background-image: url('<?php echo get_sub_field('explore_cont_block_image');?>');"></div>
        					<div class="explore_block_content">
        					    <?php if( get_sub_field('explore_cont_block_title') ) : ?>
					                <<?php echo $blocktitletag;?>><?php echo get_sub_field('explore_cont_block_title'); ?></<?php echo $blocktitletag;?>>
					            <?php endif; ?>
					            <?php if( get_sub_field('explore_cont_block_content') ) : the_sub_field('explore_cont_block_content'); endif; ?>
					            <?php 
                                $link = get_sub_field('explore_cont_block_cta_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="<?php echo ctabtntype($blockbtntype);?> btn-sm" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow($blockbtntype);?></a>
                                <?php endif; ?>
        					</div>
        				</div>
        			</div>
                <?php $data_i=$data_i+200; endwhile; ?>
            <?php endif; ?>
		</div>	
	</div>
</section>