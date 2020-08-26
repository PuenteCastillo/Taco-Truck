<?php 
$main_title_tag=get_sub_field('launchpad_sec_title_tag');
$sub_head_tag=get_sub_field('launchpad_sec_sub_head_tag');
$cont_block_tag=get_sub_field('launchpad_sec_content_blocks_title_tag');

if ("styleone" == get_sub_field('launchpad_sec_style') ) { ?>
<section class="launchpad launchpad_style1 inner_spacing" style="background-color: <?php echo get_sub_field('launchpad_sec_section_background_color'); ?>;">	
    <div class="container">
        <div class="row">
    	    <div class="col-12 col-sm-12 col-md-3 col-lg-3" data-aos="fade-in">
    		    <div class="launchpad_title_box">
    		        <?php if( get_sub_field('launchpad_sec_title') ) : ?><<?php echo $main_title_tag;?> class="accent_color"><?php echo get_sub_field('launchpad_sec_title'); ?></<?php echo $main_title_tag; ?>><?php endif; ?>
				    <?php if( get_sub_field('launchpad_sec_subhead') ) : ?><<?php echo $sub_head_tag; ?> class="primary_color"><?php echo get_sub_field('launchpad_sec_subhead'); ?></<?php echo $sub_head_tag; ?>><?php endif; ?>
    			</div>
    		</div>
	    	<?php if ( have_rows('launchpad_sec_content_blocks') ) : ?>
    			<div class="col-12 col-sm-12 col-md-9 col-lg-9">
    				<div class="row launchpad_row">
                        <?php $data_i=0; while( have_rows('launchpad_sec_content_blocks') ) : the_row(); ?>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3" data-aos="fade-in" data-aos-delay="<?php echo $data_i;?>">
        						<div class="launchpad_inner_box" style="border-top-color: <?php echo get_sub_field('lpd_cnblock_block_color'); ?>;">
        							<?php if( get_sub_field('lpd_cnblock_title') ) : ?><<?php echo $cont_block_tag; ?> class="primary_color"><?php echo get_sub_field('lpd_cnblock_title'); ?></<?php echo $cont_block_tag; ?>><?php endif; ?>
        							<?php if( get_sub_field('lpd_cnblock_content') ) : ?><?php the_sub_field('lpd_cnblock_content'); ?><?php endif; ?>
        							<?php if ( get_sub_field('lpd_cnblock_learn_more_link') ) : 
            							$link = get_sub_field('lpd_cnblock_learn_more_link');
            							$link_url = $link['url'];
                                        //$link_title = $link['title'];
                                        $link_title = 'Learn More';
                                        $link_target = $link['target'] ? $link['target'] : '_self';
        							?>
                                    <a class="learn_more" style="color: <?php echo get_sub_field('lpd_cnblock_block_color'); ?>;" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <span class="learn_more_text"><?php echo esc_html( $link_title ); ?></span> <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                    <?php endif; ?>
        						</div>
					        </div>
                        <?php $data_i=$data_i+200;endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
		</div>
	</div>
</section>

<?php } else { ?>
    
<section class="launchpad launchpad_style2 inner_spacing" style="background-color: <?php echo get_sub_field('launchpad_sec_section_background_color'); ?>;">
	<div class="container">
		<div class="launchpad_title_box text-center">
			<?php if( get_sub_field('launchpad_sec_title') ) : ?><<?php echo $main_title_tag;?> class="accent_color"><?php echo get_sub_field('launchpad_sec_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
			<?php if( get_sub_field('launchpad_sec_subhead') ) : ?><<?php echo $sub_head_tag; ?> class="primary_color"><?php echo get_sub_field('launchpad_sec_subhead'); ?></<?php echo $sub_head_tag; ?>><?php endif; ?>
		</div>		
	    <?php if ( have_rows('launchpad_sec_content_blocks') ) : ?>
		    <div class="row launchpad_row">
                <?php $data_i=0; while( have_rows('launchpad_sec_content_blocks') ) : the_row(); ?>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $data_i;?>">
            		    <div class="launchpad_inner_box">
            		        <?php if( get_sub_field('lpd_cnblock_icon_image') ) : ?>
            	            <div class="launchpad_inner_circle" style="background-color: <?php echo get_sub_field('lpd_cnblock_block_color'); ?>;">
            	                <img src="<?php echo get_sub_field('lpd_cnblock_icon_image'); ?>" alt="img">
            	            </div>
            	            <?php endif; ?>
                    	    <?php if( get_sub_field('lpd_cnblock_title') ) : ?><<?php echo $cont_block_tag; ?> class="primary_color"><?php echo get_sub_field('lpd_cnblock_title'); ?></<?php echo $cont_block_tag; ?>><?php endif; ?>
        					<?php if( get_sub_field('lpd_cnblock_content') ) : ?><?php the_sub_field('lpd_cnblock_content'); ?><?php endif; ?>
            				<?php if ( get_sub_field('lpd_cnblock_learn_more_link') ) : 
            	    			$link = get_sub_field('lpd_cnblock_learn_more_link');
            					$link_url = $link['url'];
                                //$link_title = $link['title'];
                                $link_title = 'Learn More';
                                $link_target = $link['target'] ? $link['target'] : '_self';
            				?>
                            <a href="<?php echo esc_url( $link_url ); ?>" class="btn" style="color: <?php echo get_sub_field('lpd_cnblock_block_color'); ?>; border-color: <?php echo get_sub_field('lpd_cnblock_block_color'); ?>; background-color: rgb(255, 255, 255);" onmouseover="jQuery(this).css({&quot;background-color&quot;:&quot;<?php echo get_sub_field('lpd_cnblock_block_color'); ?>&quot;,&quot;color&quot;:&quot;#ffffff&quot;})" onmouseout="jQuery(this).css({&quot;background-color&quot;:&quot;#ffffff&quot;,&quot;color&quot;:&quot;<?php echo get_sub_field('lpd_cnblock_block_color'); ?>&quot;})"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
            			</div>
    				</div>
                <?php $data_i=$data_i+200;endwhile; ?>
            </div>
        <?php endif; ?>
	</div>
</section>
    
<?php } ?>