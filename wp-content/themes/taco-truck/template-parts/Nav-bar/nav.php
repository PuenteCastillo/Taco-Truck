<?php

// Variables
$custom_logo_id = get_theme_mod('custom_logo');
$custom_logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

?>



<nav class="navbar navbar-light  <?php echo get_field('add_box_shadow', 'option') ? 'add-shadow' : '' ?>" style="background-color:  <?php echo get_field('background_color', 'option') ?>"  >
	<div class="container">

        <a class="navbar-brand" href="/">
			<img src="<?php echo $custom_logo_url[0] ? $custom_logo_url[0] : 'https://via.placeholder.com/400x200'; ?>" alt="" loading="lazy" />
		</a>
	</div>
</nav>

