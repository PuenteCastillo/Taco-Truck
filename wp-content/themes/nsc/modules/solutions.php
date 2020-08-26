<?php 
$main_title_tag=get_sub_field('solutions_sec_title_tag');
$sub_head_tag=get_sub_field('solutions_sec_sub_head_tag');
$cont_block_tag=get_sub_field('solutions_sec_content_blocks_title_tag');

if ( "styleone" == get_sub_field('solutions_sec_style') ) { ?>
<section class="solutions solutions_style1 inner_spacing" style="background-color: <?php echo get_sub_field('solutions_sec_section_background_color'); ?>;">	
	<div class="container">
		<div class="solutions_inner">
			<div class="module_title text-center">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-12 col-md-12 col-lg-10">
					    <?php if( get_sub_field('solutions_sec_title') ) : ?><<?php echo $main_title_tag;?> class="accent_color"><?php echo get_sub_field('solutions_sec_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
				        <?php if( get_sub_field('solutions_sec_sub_head') ) : ?><<?php echo $sub_head_tag; ?> class="primary_color"><?php echo get_sub_field('solutions_sec_sub_head'); ?></<?php echo $sub_head_tag; ?>><?php endif; ?>
					</div>
				</div>
			</div>
			<?php if ( have_rows('solutions_sec_content_blocks') ) : ?>
		    <div class="row color_box_row justify-content-center">
                <?php $data_i=0; while( have_rows('solutions_sec_content_blocks') ) : the_row(); ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-in" data-aos-delay="<?php echo $data_i;?>"> 
    					<a href="<?php echo get_sub_field('sol_cnblock_url'); ?>" title="<?php echo get_sub_field('sol_cnblock_title'); ?>" class="color_box_wrap">
    						<?php if ( get_sub_field('sol_cnblock_icon') ){ ?>
    						<div class="color_box " style="background-color: <?php echo get_sub_field('sol_cnblock_icon_box_background_color'); ?>;">
    							<img src="<?php echo get_sub_field('sol_cnblock_icon'); ?>" alt="img">
    						</div>
    						<?php } ?>
    						<?php if ( get_sub_field('sol_cnblock_title') ){ ?>
    						    <<?php echo $cont_block_tag; ?> class="primary_color"><?php echo get_sub_field('sol_cnblock_title'); ?></<?php echo $cont_block_tag; ?>>
    						<?php } ?>
    					</a>
    				</div>
                <?php $data_i=$data_i+200;endwhile; ?>
            </div>
            <?php endif; ?>
		</div>
	</div>
</section>
<?php } else { ?>
<section class="solutions solutions_style2 inner_spacing" style="background-color: <?php echo get_sub_field('solutions_sec_section_background_color'); ?>;">	
	<div class="container">
		<div class="solutions_inner">
		    
			<div class="module_title text-center">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-12 col-md-12 col-lg-10">
						<?php if( get_sub_field('solutions_sec_title') ) : ?><<?php echo $main_title_tag;?> class="accent_color"><?php echo get_sub_field('solutions_sec_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
				        <?php if( get_sub_field('solutions_sec_sub_head') ) : ?><<?php echo $sub_head_tag; ?> class="primary_color"><?php echo get_sub_field('solutions_sec_sub_head'); ?></<?php echo $sub_head_tag; ?>><?php endif; ?>
					</div>
				</div>
			</div>
			<?php if ( have_rows('solutions_sec_content_blocks') ) : ?>
		    <div class="row color_box_row">
                <?php $data_i=0; while( have_rows('solutions_sec_content_blocks') ) : the_row(); ?>
                	<div class="col-12 col-sm-12 col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="<?php echo $data_i;?>">
    					<a href="<?php echo get_sub_field('sol_cnblock_url'); ?>" title="<?php echo get_sub_field('sol_cnblock_title'); ?>" class="color_box_wrap" onmouseover="jQuery(this).find(&quot;.link&quot;).css(&quot;color&quot;,&quot;<?php echo get_sub_field('sol_cnblock_icon_box_background_color'); ?>&quot;)" onmouseout="jQuery(this).find(&quot;.link&quot;).css(&quot;color&quot;,&quot;#000000&quot;)">
    						<div class="color_box" style="background-color: <?php echo get_sub_field('sol_cnblock_icon_box_background_color'); ?>;">
    							<img src="<?php echo get_sub_field('sol_cnblock_icon'); ?>" alt="img">
    						</div>
    						<div class="color_box_content">
    							<<?php echo $cont_block_tag; ?> class="primary_color"><?php echo get_sub_field('sol_cnblock_title'); ?></<?php echo $cont_block_tag; ?>>
        				        <?php if( get_sub_field('sol_cnblock_short_description') ) :  echo get_sub_field('sol_cnblock_short_description'); endif; ?>
    							<span class="link">Explore <i class="fas fa-caret-right"></i></span>
    						</div>
    					</a>
				    </div>
                <?php $data_i=$data_i+200;endwhile; ?>
            </div>
            <?php endif; ?>
		</div>
	</div>
</section>
<?php } ?>