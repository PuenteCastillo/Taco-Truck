<?php

if ( get_sub_field('featoview_background_type') == "color" ){

    $bgstyle='style="background-color:'.get_sub_field('featoview_section_background_color').';"';

    $sctbg='';

}

else{

    $bgstyle='style="background-image:url('.get_sub_field('featoview_section_background_image').');"';

    $sctbg='section_bg';

}

$brdrradius=get_sub_field('featoview_section_block_image_radius');

?>

<section class="feature_overview inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>

	<div class="container">	

		<div class="row justify-content-center">

			<div class="col-12 col-sm-12 col-md-10 col-lg-10">

				<div class="row feature_overview_row">

					<?php if ( have_rows('featoview_content_blocks') ) : ?>

                        <?php while( have_rows('featoview_content_blocks') ) : the_row(); ?>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">

                            <?php if( get_sub_field('featoview_cntblock_image') ) : ?><div class="feature_overview_img" style="background-image: url('<?php echo get_sub_field('featoview_cntblock_image'); ?>');border-radius:<?php echo $brdrradius;?>px;"></div><?php endif; ?>

    						<div class="feature_overview_body">

    						    <?php if( get_sub_field('featoview_cntblock_title') ) : ?><h3 class="primary_color"><?php the_sub_field('featoview_cntblock_title');?></h3><?php endif; ?>

    						    <?php if( get_sub_field('featoview_cntblock_content') ) : the_sub_field('featoview_cntblock_content'); endif; ?>

    						    <?php if ( have_rows('featoview_cntblock_table_below_content') ) : ?>

        						<div class="feature_data_table">

        							<table>

        								<tbody>

                                            <?php while( have_rows('featoview_cntblock_table_below_content') ) : the_row(); ?>

                                                <?php $tdlink=get_sub_field('featoview_cntblock_tbl_row_link');?>

                                                <tr>

            										<td><a href="<?php echo $tdlink;?>"><?php echo get_sub_field('featoview_cntblock_tbl_col1_text');?></a></td>

            										<td><a href="<?php echo $tdlink;?>"><?php echo get_sub_field('featoview_cntblock_tbl_col2_text');?></a></td>

            										<td><a href="<?php echo $tdlink;?>"><?php echo get_sub_field('featoview_cntblock_tbl_col3_text');?></a></td>

            									</tr>

                                            <?php endwhile; ?>

                                       	</tbody>

        							</table>

        						</div>

                                <?php endif; ?>

    						</div>

					    </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

				</div>				

			</div>

		</div>

	</div>

</section> 