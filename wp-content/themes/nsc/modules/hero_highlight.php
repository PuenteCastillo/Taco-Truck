<section class="hero_highlight">
	<div class="hero_highlight_top" style="background-image: url('<?php echo get_sub_field('hero_highlight_banner_image');?>');">
		<div class="overlay"></div>
		<div class="container">	
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6">
					<div class="hero_highlight_title" data-aos="fade-up">
					    <?php if( get_sub_field('hero_highlight_banner_title') ) : ?><h1><?php echo get_sub_field('hero_highlight_banner_title'); ?></h1><?php endif; ?>
					    <?php if( get_sub_field('hero_highlight_banner_sub_head') ) : ?><h2><?php echo get_sub_field('hero_highlight_banner_sub_head'); ?></h2><?php endif; ?>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="hero_highlight_middle">
		<div class="hero_highlight_skew"></div>
		<div class="container">
			<div class="row elan_google_row">
				
				<?php if( get_sub_field('hero_highlight_banner_right_image_below') ) : ?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 elan_google_img" data-aos="fade-left"><img src="<?php echo get_sub_field('hero_highlight_banner_right_image_below'); ?>" alt="img"></div>
                <?php endif; ?>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 elan_google_content" data-aos="fade-right">
				    <?php if( get_sub_field('hero_highlight_banner_title') || get_sub_field('hero_highlight_banner_title') ) : ?>
    				    <div class="hero_logo_title">
    						<?php if( get_sub_field('hero_highlight_banner_logo_below') ) : ?><img src="<?php echo get_sub_field('hero_highlight_banner_logo_below'); ?>" alt="img"><?php endif; ?>
    						<?php if( get_sub_field('hero_highlight_banner_text_after_logo_below') ) : ?><h2 class="primary_color"><?php echo get_sub_field('hero_highlight_banner_text_after_logo_below'); ?></h2><?php endif; ?>
    					</div>
				    <?php endif; ?>

				    <?php if( get_sub_field('hero_highlight_banner_content_below') ) : ?>
                        <h2 class="primary_color"><?php echo get_sub_field('hero_highlight_banner_content_below'); ?></h2>
                    <?php endif; ?>
                    <?php 
                    $link = get_sub_field('hero_highlight_banner_cta_link_below');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="link accent_color" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="far fa-long-arrow-right"></i></a>
                    <?php endif; ?>
				</div>
				
			</div>
		</div>
	</div>
</section>