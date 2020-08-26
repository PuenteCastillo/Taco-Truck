<?php

if ( get_sub_field('banner_cta_parallax') == "yes" ){

    $bgstyle='class="parallax" data-parallax="scroll" data-image-src="'.get_sub_field('banner_cta_background_image').'"';

}

else{

    $bgstyle='class="banner_cta_bg '.get_sub_field('banner_cta_background_position').'" style="background-image:url('.get_sub_field('banner_cta_background_image').');"';

}

$lnktype=ctabtntype(get_sub_field('banner_cta_cta_button_type'));

$lnkarrowtyp=ctabtntypearrow(get_sub_field('banner_cta_cta_button_type'));

?>

<section class="banner_cta inner_spacing">

	<div class="container">

		<div class="banner_cta_inner">

		

			<div <?php echo $bgstyle;?>>

				<div class="overlay" style="background-color: <?php echo get_sub_field('banner_cta_background_overlay_color');?>;opacity:<?php echo get_sub_field('banner_cta_background_overlay_opacity');?>"></div>

			</div>



			<div class="row banner_cta_row <?php echo get_sub_field('banner_cta_content_position');?>">

				<div class="col-12 col-sm-12 col-md-8 col-lg-8" data-aos="fade-in">

					<div class="banner_cta_left">

					    <?php if( get_sub_field('banner_cta_header') ) : ?><h3><?php echo get_sub_field('banner_cta_header');?></h3><?php endif; ?>

        			    <?php if( get_sub_field('banner_cta_content') ) : ?><h4><?php echo get_sub_field('banner_cta_content');?></h4><?php endif; ?>

					</div>

				</div>

				

			    <?php if ( have_rows('banner_cta_cta_buttons') ) : ?>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4" data-aos="fade-in" data-aos-delay="300">

                		<div class="banner_cta_right">

                            <?php while( have_rows('banner_cta_cta_buttons') ) : the_row(); ?>

                                <?php 

                                $link = get_sub_field('banner_cta_cta_button');

                                if( $link ): 

                                    $link_url = $link['url'];

                                    $link_title = $link['title'];

                                    $link_target = $link['target'] ? $link['target'] : '_self';

                                    ?>

                                    <a class="<?php echo $lnktype;?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo $lnkarrowtyp;?></a>

                                <?php endif; ?>

                            <?php endwhile; ?>

                	    </div>

				    </div>        

                <?php endif; ?>

			</div>	

			

		</div>

	</div>

</section>