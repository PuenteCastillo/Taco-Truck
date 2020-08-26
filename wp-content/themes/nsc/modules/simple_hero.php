<section class="simple_hero inner_spacing" style="background-image: url('<?php echo get_sub_field('simple_hero_background_image'); ?>');">
	<div class="overlay" style="background-image: linear-gradient(#ffffff 10%, transparent 50%);"></div>	
	<?php if( get_sub_field('simple_hero_content') ) : ?>
	<div class="container">		
		<div class="row justify-content-end">
			<div class="col-12 col-sm-12 col-md-6 col-lg-5" data-aos="fade-left" data-aos-duration="1500">
				<p><?php echo get_sub_field('simple_hero_content'); ?></p>
			</div>
		</div>	
	</div>
	<?php endif; ?>
</section> 