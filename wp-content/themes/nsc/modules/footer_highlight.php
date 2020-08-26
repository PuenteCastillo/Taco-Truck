<section class="footer_highlight inner_spacing" style="background-image:url('<?php echo get_sub_field('footer_highlight_background_image'); ?>');">
	<div class="container">		
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-9">
			    <?php if( get_sub_field('footer_highlight_small_title') || get_sub_field('footer_highlight_title') ) : ?>
                    <div class="module_title" data-aos="fade-up" data-aos-duration="1500">	
                        <?php if( get_sub_field('footer_highlight_small_title') ) : ?>
                            <div class="subheading underline_show"><h5><?php echo get_sub_field('footer_highlight_small_title'); ?></h5></div>
                        <?php endif; ?>
                        <?php if( get_sub_field('footer_highlight_title') ) : ?><h2><?php echo get_sub_field('footer_highlight_title'); ?></h2><?php endif; ?>
    				</div>
                <?php endif; ?>
                <?php if( get_sub_field('footer_highlight_content') ) : ?>
                    <div class="footer_highlight_content" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
    					<p><?php echo get_sub_field('footer_highlight_content'); ?></p>
    				</div>
                <?php endif; ?>
			</div>
		</div>	
	</div>
</section> 