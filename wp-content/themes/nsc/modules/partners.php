<?php

$section_ttile_tag=get_sub_field('prtnrs_section_title_tag');

$imgborder_radius=get_sub_field('prtnrs_image_border_radius');

$imgbackground_color=get_sub_field('prtnrs_image_background_color');

?>

<section class="partners inner_spacing">

	<div class="container">		

		<div class="module_title">

		    <?php if( get_sub_field('prtnrs_section_title') ) : ?><<?php echo $section_ttile_tag;?> class="accent_color"><?php echo get_sub_field('prtnrs_section_title'); ?></<?php echo $section_ttile_tag; ?>><?php endif; ?>

		</div>

		<?php if ( have_rows('prtnrs_partner_logos') ) : ?>

	        <div class="row partner_logos">

                <?php $data_i=0; while( have_rows('prtnrs_partner_logos') ) : the_row(); ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-in" data-aos-delay="<?php echo $data_i;?>">

        				<div class="partner_logo" style="background-color: <?php echo $imgbackground_color;?>; border-radius: <?php echo $imgborder_radius;?>px;">

        					<img src="<?php echo get_sub_field('prtnrs_partner_logo'); ?>" alt="img">

        				</div>

        			</div>

                <?php $data_i=$data_i+200;endwhile; ?>

            </div>

        <?php endif; ?>

	</div>

</section>