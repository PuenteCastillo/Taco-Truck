<?php

$main_title_tag=get_sub_field('featblock_title_tag');

$bgstyle='';

if ( get_sub_field('featblock_section_background_color') ){

    $bgstyle='style="background-color:'.get_sub_field('featblock_section_background_color').';"';

}

?>

<section class="featured_blocks inner_spacing" <?php echo $bgstyle;?>>

	<div class="container">

		<?php if( get_sub_field('featblock_title') ) : ?>

		    <div class="module_title text-center" data-aos="fade-up"><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('featblock_title'); ?></<?php echo $main_title_tag; ?>></div>

		<?php endif; ?>

		<div class="row <?php echo get_sub_field('featblock_image_position'); ?>">

			<div class="col-12 col-sm-12 col-md-12 col-lg-8 featured_image_col">

				<div class="featured_image" style="background-image: url('<?php echo get_sub_field('featblock_image'); ?>');border-radius:<?php echo get_sub_field('featblock_image_border_radius');?>px;" data-aos="fade-right"></div>

			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-4 featured_content_col">

				<div class="featured_content">

					<?php if ( have_rows('featblock_content_blocks') ) : ?>

                        <?php while( have_rows('featblock_content_blocks') ) : the_row(); ?>

                    			<div class="featured_box clearfix" data-aos="fade-left">

        						<figure class="featured_box_img" style="background-color: <?php echo get_sub_field('featblock_cntblock_icon_background_color'); ?>">

        							<img src="<?php echo get_sub_field('featblock_cntblock_icon'); ?>" alt="img">

        						</figure>

        						<div class="featured_box_text">

        							<h5 class="accent_color"><?php echo get_sub_field('featblock_cntblock_title'); ?></h5>

        							<?php the_sub_field('featblock_cntblock_content'); ?>

        							<?php if ( have_rows('featblock_cntblock_cta_links') ) : ?>

                                        <div class="btngrp">

                                            <?php while( have_rows('featblock_cntblock_cta_links') ) : the_row(); ?>

                                                <?php 

                                                $link = get_sub_field('featblock_cntblock_ctainks_link');

                                                if( $link ): 

                                                    $link_url = $link['url'];

                                                    $link_title = $link['title'];

                                                    $link_target = $link['target'] ? $link['target'] : '_self';

                                                    ?>

                                                    <a class="morelink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="fas fa-caret-right"></i></a><br>

                                                <?php endif; ?>

                                            <?php endwhile; ?>

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