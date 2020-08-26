<?php

$fimgborder_radius=get_sub_field('vdgallery_featured_image_border_radius');

?>

<section class="video_gallery inner_spacing">

	<div class="container">		

		<div class="row video_gallery_row">

		    <?php $i=1;if ( have_rows('vdgallery_videos') ) : ?>

                <?php $data_i=0; while( have_rows('vdgallery_videos') ) : the_row(); ?>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 video_gallery_col" data-aos="zoom-in" data-aos-delay="<?php echo $data_i;?>">

    				    <div class="video_block">

    					

    					<?php if (get_sub_field('vdgallery_vdo_video_type') == "Custom") { ?>

    					    <a href="#popup_custom_video-<?php echo $i;?>" class="popup_custom_video_link"></a>

    					<?php } else if (get_sub_field('vdgallery_vdo_video_type') == "Youtube") { ?>

    					    <a href="http://www.youtube.com/watch?v=<?php echo get_sub_field('vdgallery_vdo_video_id');?>" class="popup_video_link"></a>

    					<?php } else if (get_sub_field('vdgallery_vdo_video_type') == "Vimeo") { ?>

    					    <a href="https://vimeo.com/<?php echo get_sub_field('vdgallery_vdo_video_id');?>" class="popup_video_link"></a>

    					<?php } else { ?>

        					<div class="wistia_embed wistia_async_<?php echo get_sub_field('vdgallery_vdo_video_id');?> popover=true popoverAnimateThumbnail=true"></div>

        				<?php } ?>

        				

        				

    					<div class="video_image_wrap" style="border-radius: <?php echo $fimgborder_radius;?>px;">

    						<div class="video_image" style="background-image: url('<?php echo get_sub_field('vdgallery_vdo_feature_image');?>');">

    							<div class="video_image_overlay" style="background-color: #000000;"></div>

    						</div>

    						<span class="playicon"><i class="fas fa-play"></i></span>

    					</div>

    					<div class="video_gallery_body">

    						<h5 class="primary_color"><?php echo get_sub_field('vdgallery_vdo_title');?></h5>

    						<p><?php echo get_sub_field('vdgallery_vdo_description');?></p>

    					</div>					

    				    </div>

    			    </div>

    			    <?php if (get_sub_field('vdgallery_vdo_video_type') == "Custom") { ?>

        			    <div id="popup_custom_video-<?php echo $i;?>" class="mfp-hide white-popup-block popup_video">

                        	<div class="container">

                        		<div class="popup_video_inner">

                        			<div class="video_wrap">

                        				<!-- Video -->

                        				<video controls="controls">

                        				    <source src="<?php echo get_sub_field('vdgallery_vdo_upload_video');?>" type="video/mp4">

                        				    Your browser does not support the HTML5 Video element.

                        				</video>

                        			</div>

                        			<button title="Close (Esc)" type="button" class="mfp-close">×</button>

                        		</div>

                        	</div>	

                        </div>

                    <?php } ?>

                <?php $i++; $data_i=$data_i+100;endwhile; ?>

            <?php endif; ?>

		</div>	

	</div>

</section>

<!-- Popup Video -->

