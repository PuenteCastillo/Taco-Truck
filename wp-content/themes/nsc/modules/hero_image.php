<section class="hero_image inner_spacing" style="background-image: url('<?php echo get_sub_field('hero_image_background_image'); ?>'); color: <?php echo get_sub_field('hero_image_text_color'); ?>;">
	<!-- Gradient Overlay -->
	<div class="overlay" style="background-image: linear-gradient(<?php echo hexColorToRgba(get_sub_field('hero_image_gradient_color'),'0.95'); ?> 40%, transparent 100%);"></div>	
	<div class="container">		
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-10">
				<div class="module_title" data-aos="fade-up" data-aos-duration="1500">
				    <?php if( get_sub_field('hero_image_small_title') ) : ?><div class="subheading underline_show text-center"><h5><?php echo get_sub_field('hero_image_small_title'); ?></h5></div><?php endif; ?>
				    <?php if( get_sub_field('hero_image_title') ) : ?><h2><?php echo get_sub_field('hero_image_title'); ?></h2><?php endif; ?>
				</div>
				<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
					<div class="col-12 col-sm-12 col-md-12 col-lg-8">
					    <?php if( get_sub_field('hero_image_content') ) : ?><p><?php echo get_sub_field('hero_image_content'); ?></p><?php endif; ?>
					    <?php 
                        $link = get_sub_field('hero_image_cta_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn primary_btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
					</div>	
				</div>
			</div>
		</div>	
	</div>
</section>