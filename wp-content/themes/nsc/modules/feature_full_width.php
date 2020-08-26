<?php
if ( get_sub_field('fetfullwidth_background_type') == "color" ){
    $bgstyle='style="background-color:'.get_sub_field('fetfullwidth_section_background_color').';"';
    $sctbg='';
}
else{
    $bgstyle='style="background-image:url('.get_sub_field('fetfullwidth_section_background_image').');"';
    $sctbg='section_bg';
}
?>

<section class="feature_full_width inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">	
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-10 col-lg-10">
			    <?php if( get_sub_field('fetfullwidth_main_image') ) : ?><div class="feature_imgbox" style="background-image: url('<?php echo get_sub_field('fetfullwidth_main_image'); ?>');border-radius:<?php echo get_sub_field('fetfullwidth_main_image_border_radius');?>px;" data-aos="fade-in"></div><?php endif; ?>
				<div class="feature_content_column">
				    <?php if ( get_sub_field('fetfullwidth_title_text') || get_sub_field('fetfullwidth_small_image') ){ ?>
    					<div class="feature_content_left">
    					    <?php if ( get_sub_field('fetfullwidth_title_text_or_image') == "title" ){ 
    					    $title_tag=get_sub_field('etfullwidth_title_text_tag');
    					    ?>
    					        <<?php echo $title_tag;?> class="primary_color"><?php echo get_sub_field('fetfullwidth_title_text');?></<?php echo $title_tag;?>>
    					    <?php } else { ?>
    					   		<img src="<?php echo get_sub_field('fetfullwidth_small_image');?>" alt="img">
    					   	<?php } ?>
    					</div>
    				<?php } ?>
					<div class="feature_content_right">
    				    <?php if( get_sub_field('fetfullwidth_content') ) : the_sub_field('fetfullwidth_content'); endif; ?>
    				    <?php if ( have_rows('fetfullwidth_table_below_content') ) : ?>
						<div class="feature_data_table">
							<table>
								<tbody>
                                    <?php while( have_rows('fetfullwidth_table_below_content') ) : the_row(); ?>
                                        <?php $tdlink=get_sub_field('fetfullwidth_tbl_row_link');?>
                                        <tr>
    										<td><a href="<?php echo $tdlink;?>"><?php echo get_sub_field('fetfullwidth_tbl_col1_text');?></a></td>
    										<td><a href="<?php echo $tdlink;?>"><?php echo get_sub_field('fetfullwidth_tbl_col2_text');?></a></td>
    										<td><a href="<?php echo $tdlink;?>"><?php echo get_sub_field('fetfullwidth_tbl_column3_text');?></a></td>
    									</tr>
                                    <?php endwhile; ?>
                               	</tbody>
							</table>
						</div>
                        <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>