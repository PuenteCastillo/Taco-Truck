<section class="partners_header">
	<div class="partners_header_top" style="background-image: url('<?php echo get_sub_field('partner_header_banner_image');?>');">
		<div class="container">
			<div class="partners_header_top_inner">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-12 col-md-10 col-lg-8">
						<div class="partners_header_col">
						    <?php if( get_sub_field('partner_header_banner_text') ) : ?>
    						    <div class="module_title" data-aos="fade-up" data-aos-duration="1500"><h2><?php echo get_sub_field('partner_header_banner_text'); ?></h2></div>
                            <?php endif; ?>
                            <?php if( get_sub_field('partner_header_image_on_banner') ) : ?>
                                <img src="<?php echo get_sub_field('partner_header_image_on_banner'); ?>" alt="img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
                            <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if ( have_rows('partner_header_partner_logos') ) : ?>
    	<div class="partners_header_bottom">
    		<div class="container">
    			<div class="row justify-content-center">
    				<div class="col-12 col-sm-12 col-md-10 col-lg-10">
    					<ul class="partners_logo">
                            <?php $data_i=0;while( have_rows('partner_header_partner_logos') ) : the_row(); ?>
                        		 <li data-aos="fade-right" data-aos-delay="<?php echo $data_i;?>"><img src="<?php echo get_sub_field('partner_header_partner_logo');?>" alt="logo"></li>
                            <?php $data_i=$data_i+200;endwhile; ?>
    	                </ul>					
    				</div>
    			</div>
    		</div>
    	</div>
    <?php endif; ?>
</section>