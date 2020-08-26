<?php 
if ( get_sub_field('ctasimple_background_color') ){
    $sbgcolor=get_sub_field('ctasimple_background_color');
}
else{
    $sbgcolor='#FFFFFF';
}
?>
<section class="cta_simple inner_spacing" style="background-color:<?php echo $sbgcolor;?>;">
	<div class="container">
		<div class="cta_simple_bg" style="background-image: url('<?php echo get_sub_field('ctasimple_image'); ?>');" data-aos="fade-in" data-aos-duration="2000"></div>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-9">
				<div class="cta_simple_inner text-center" data-aos="fade-up">
					<div class="module_title">
					    <?php if( get_sub_field('ctasimple_title') ) : ?>
					        <<?php echo get_sub_field('ctasimple_title_tag');?> class="primary_color"><?php echo get_sub_field('ctasimple_title'); ?></<?php echo get_sub_field('ctasimple_title_tag');?>>
					    <?php endif; ?>
					</div>
					<?php if( get_sub_field('ctasimple_content') ) : ?><?php the_sub_field('ctasimple_content'); ?><?php endif; ?>
				    <?php 
                    $link = get_sub_field('ctasimple_cta_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="<?php echo ctabtntype(get_sub_field('ctasimple_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('ctasimple_cta_button_type'));?></a>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>