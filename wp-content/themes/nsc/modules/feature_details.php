<?php

$main_title_tag=get_sub_field('fetdtl_title_tag');

$bgstyle='';

if ( get_sub_field('fetdtl_section_background_color') ){

    $bgstyle='style="background-color:'.get_sub_field('fetdtl_section_background_color').';"';

}

?>

<section class="feature_details inner_spacing" <?php echo $bgstyle;?>>

	<div class="container">

		<div class="row feature_details_row <?php echo get_sub_field('fetdtl_content_position'); ?>">



			<div class="col-12 col-sm-12 col-md-12 col-lg-5 feature_details_narrow_col" data-aos="fade-up">				

			    <?php if( get_sub_field('fetdtl_title') ) : ?>

		            <div class="module_title"><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('fetdtl_title'); ?></<?php echo $main_title_tag; ?>></div>

		        <?php endif; ?>

				<div class="feature_details_narrow_content">

				    <?php if( get_sub_field('fetdtl_content') ) : the_sub_field('fetdtl_content'); endif; ?>

				    <?php 

                    $link = get_sub_field('fetdtl_cta_button');

                    if( $link ): 

                        $link_url = $link['url'];

                        $link_title = $link['title'];

                        $link_target = $link['target'] ? $link['target'] : '_self';

                        ?>

                        <a class="<?php echo ctabtntype(get_sub_field('fetdtl_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('fetdtl_cta_button_type'));?></a>

                    <?php endif; ?>

    		    </div>				

	    	</div>

			

			<?php if ( have_rows('fetdtl_features') ) : ?>

            <div class="col-12 col-sm-12 col-md-12 col-lg-7 feature_details_wide_col">

                <div class="row">

                    <?php while( have_rows('fetdtl_features') ) : the_row(); ?>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="fade-up"> 

    						<div class="feature_details_inner">

                                <?php if( get_sub_field('fetdtl_fet_icon') ) : ?><img src="<?php echo get_sub_field('fetdtl_fet_icon'); ?>" alt="img"><?php endif; ?>

                                <?php if( get_sub_field('fetdtl_fet_title') ) : ?><h5 class="accent_color"><?php echo get_sub_field('fetdtl_fet_title'); ?></h5><?php endif; ?>

                                <?php if( get_sub_field('fetdtl_fet_content') ) : ?><?php the_sub_field('fetdtl_fet_content'); ?><?php endif; ?>

                            </div>

                        </div>

                    <?php endwhile; ?>

                </div>

            </div>

            <?php endif; ?>



		</div>	

	</div>

</section>