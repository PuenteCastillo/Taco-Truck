<?php
if ( get_sub_field('wysiwyg_section_background_type') == "color" ){ 
    $bgstyle='style="background-color:'.get_sub_field('wysiwyg_sec_background_color').';"';
    $sctbg='';
}
else { 
    $bgstyle='style="background-image:url('.get_sub_field('wysiwyg_sec_background_image').');"';
    $sctbg='section_bg';
}

$container_class="container";
if( get_sub_field('wysiwyg_sec_full_width_container') == 'yes' ) { 
    $container_class="container-fluid";
}

?>
<section class="wysiwyg <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="<?php echo $container_class;?>">
	    <?php the_sub_field('wysiwyg_sec_content');?>
	</div>
</section>