<section class="testimonial inner_spacing" style="background-color:<?php echo get_sub_field('testimonial_section_background_color');?>">

<?php if ( have_rows('testimonials') ) : ?>

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-12 col-sm-12 col-md-12 col-lg-10">

				<div class="testimonial_slider">

                    <?php while( have_rows('testimonials') ) : the_row(); ?>

                		<blockquote>

    						<img src="<?php echo get_field('testimonial_quote_image','option');?>" alt="img" class="quote svg">

    						<?php if( get_sub_field('testimonials_quote') ) : ?><p class="primary_color"><?php echo get_sub_field('testimonials_quote');?>”</p><?php endif; ?>

    						<?php if( get_sub_field('testimonials_name') ) : ?>

    						    <cite class="secondary_color">— <?php echo get_sub_field('testimonials_name');?><?php if( get_sub_field('testimonials_company_name') ) : ?><span class="divider">|</span> <?php echo get_sub_field('testimonials_company_name');?><?php endif; ?></cite>

    						<?php endif; ?>

    					</blockquote>

		            <?php endwhile; ?>

    			</div>

				<div class="pagination_nav text-center">

					<a href="javascript:void(0);" class="prev slick-arrow"><i class='fas fa-caret-left'></i> Prev</a>		

					<div id="testimonial_slider_dots"></div>

					<a href="javascript:void(0);" class="next slick-arrow">Next <i class='fas fa-caret-right'></i></a>

				</div>

			</div>

		</div>

	</div>

<?php endif; ?>

</section>

