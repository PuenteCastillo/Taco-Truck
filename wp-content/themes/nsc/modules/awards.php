<?php
$small_title_tag=get_sub_field('awards_sec_small_title_tag');
$main_title_tag=get_sub_field('awards_sec_title_tag');
?>
<section class="awards inner_spacing" style="background-color: <?php echo get_sub_field('awards_section_background_color');?>;">
	<div class="container">
		<div class="row awards_row <?php if ( get_sub_field('awards_sec_content_position')=="left" ) { echo "right"; } else { echo "left"; }?>">
			<div class="col-12 col-sm-12 col-md-6 col-lg-5 awards_left">
				<div class="awards_content" data-aos="fade-up">
				    <?php if( get_sub_field('awards_sec_small_title') ) : ?><<?php echo $small_title_tag;?> class="accent_color"><?php echo get_sub_field('awards_sec_small_title');?></<?php echo $small_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('awards_sec_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('awards_sec_title');?></<?php echo $main_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('awards_sec_content') ) : the_sub_field('awards_sec_content'); endif; ?>
				    <?php 
                    $link = get_sub_field('awards_sec_cta_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="<?php echo ctabtntype(get_sub_field('awards_sec_cta_button_type'));?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php echo ctabtntypearrow(get_sub_field('awards_sec_cta_button_type'));?></a>
                    <?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-7 awards_right">
			    <?php if ( have_rows('awards_sec_logos') ) : ?>
                    <ul class="awards_logos">
                        <?php $data_i=0; while( have_rows('awards_sec_logos') ) : the_row(); ?>
                            <li data-aos="fade-up" data-aos-delay="<?php echo $data_i;?>"><img src="<?php echo get_sub_field('awards_sec_logos_logo');?>" alt="logo"></li>
                        <?php $data_i=$data_i+100; endwhile; ?>
                    </ul>
                <?php endif; ?>
			</div>
		</div>	
	</div>

</section>