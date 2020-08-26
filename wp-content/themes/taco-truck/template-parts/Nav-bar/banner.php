<?php
if (get_field('add_banner')) {
    ?>

<div class="banner-container " >
<img  class=" cover-img thumbnail" src="<?php echo get_field('banner_image') ? get_field('banner_image') : 'http://via.placeholder.com/1600x500' ?>" alt="" />

	<div class="container">
		<div class="parent">
			<div class="child">
				<h1 class="accent-text">

                    <?php get_field('banner_header_text') ? the_field('banner_header_text') : ' '?>
				</h1>
				<h2>
                 <?php get_field('banner_subheading') ? the_field('banner_subheading') : ' '?>

				</h2>
			</div>
		</div>
	</div>

</div>

<?php }?>