<section class="leadership inner_spacing">
	<div class="container">
	    <?php if( get_sub_field('leadership_section_title') ) : ?>
	    	<div class="module_title text-center" data-aos="fade-up"><h2 class="accent_color"><?php echo get_sub_field('leadership_section_title'); ?></h2></div>
	   <?php endif; ?>		
        <?php if ( have_rows('leadership_content_blocks') ) : ?>
            <div class="row">
                <?php while( have_rows('leadership_content_blocks') ) : the_row(); ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        				<div class="leadership_col">
        					<div class="leadership_img" style="background-image: url('<?php echo get_sub_field('leadercblock_image'); ?>'); border-radius: 0 10px 10px 10px" data-aos="fade-in"></div>
        					<div data-aos="fade-up">
        						<div class="leadership_title subheading underline_show">
        							<h5 class="primary_color"><?php echo get_sub_field('leadercblock_name'); ?></h5>
        							<?php if( get_sub_field('leadercblock_position') ) : ?><span class="profile_post"><?php echo get_sub_field('leadercblock_position'); ?></span><?php endif; ?>
        						</div>
        						 <?php if( get_sub_field('leadercblock_description') ) : ?><p><?php echo get_sub_field('leadercblock_description'); ?></p><?php endif; ?>
        						 <?php if( get_sub_field('leadercblock_linkedin_url') ) : ?>
            						<div class="social_icons">
            							<a href="<?php echo get_sub_field('leadercblock_linkedin_url'); ?>" target="_blank" title="Linkedin" rel="noopener noreferrer"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
            						</div>
        						<?php endif; ?>
        					</div>
        				</div>
			        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>		
	</div>
</section> 