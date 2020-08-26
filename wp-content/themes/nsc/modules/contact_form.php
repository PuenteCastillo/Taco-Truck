<section class="contact_form inner_spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-10 col-lg-8">
			    <?php if( get_sub_field('cnfrm_form_title') ) : ?><div class="module_title"><h5 class="accent_color"><?php echo get_sub_field('cnfrm_form_title'); ?></h5></div><?php endif; ?>
			    <?php if( get_sub_field('cnfrm_contact_form_shortcode') ) : ?><?php echo do_shortcode(get_sub_field('cnfrm_contact_form_shortcode')); ?><?php endif; ?>
			</div>
	    </div>
    </div>
</section>