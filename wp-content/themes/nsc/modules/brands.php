<?php $main_title_tag=get_sub_field('brand_sec_header_tag');?>
<section class="brands inner_spacing" style="background-color: <?php echo get_sub_field('brand_sec_section_background_color'); ?>;">
	<div class="container">
		<div class="row brands_logos">
			<div class="col-12 col-sm-12 col-md-12 col-lg-9">
				<blockquote>
				    <?php if( get_sub_field('brand_sec_header') ) : ?><<?php echo $main_title_tag;?>><?php echo get_sub_field('brand_sec_header'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('brand_sec_quote') ) : ?><h2 class="accent_color"><?php echo get_sub_field('brand_sec_quote'); ?></h2><?php endif; ?>
				    <?php if( get_sub_field('brand_sec_sub_head') ) : ?><cite class="primary_color"><?php echo get_sub_field('brand_sec_sub_head'); ?></cite><?php endif; ?>
				</blockquote>
			</div>

			<?php if ( have_rows('brand_sec_content_blocks') ) : while( have_rows('brand_sec_content_blocks') ) : the_row(); ?>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in">
				<a href="<?php echo get_sub_field('brand_sec_cnblock_url'); ?>" class="brand_logo" target="_blank">
					<div class="brand_logo_content logo_img">
						<figure><img src="<?php echo get_sub_field('brand_sec_cnblock_logo'); ?>" alt="img"></figure>
					</div>
					<div class="brand_logo_content hover_logo_img" style="background-color: <?php echo get_sub_field('brand_sec_cnblock_hover_color'); ?>;">
						<figure>
							<img src="<?php echo get_sub_field('brand_sec_cnblock_hover_logo'); ?>" alt="img">
							<figcaption class="link_text">Explore <i class="fal fa-long-arrow-right"></i></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>