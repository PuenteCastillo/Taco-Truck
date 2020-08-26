<?php
$bgcolor=get_sub_field('divdr_background_color');
if ( wp_is_mobile() ) {  $moheght=get_sub_field('divdr_module_height_mobile'); }  else { $moheght=get_sub_field('divdr_module_height_desktop'); }
$hrwidth=get_sub_field('divdr_width');
$hrcolor=get_sub_field('divdr_color');
?>
<section class="divider_module" style="background-color: <?php echo $bgcolor;?>; height: <?php echo $moheght;?>px;">
	<div class="container">
		<hr style="width: <?php echo $hrwidth;?>%; border-color: <?php echo $hrcolor;?>; ">
	</div>
</section>