<?php if ( have_rows('split_highlights') ) : ?>
<section class="split_highlight inner_spacing">
	<div class="container">		
		<div class="row">
            <?php $i=0; while( have_rows('split_highlights') ) : the_row(); ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 <?php if ( ($i%2)==0 ){ echo 'img_content_col'; } else { echo 'content_img_col'; }?>">
    				<div class="split_highlight_column">
    					<div class="split_col_bg" style="background-image: url('<?php echo get_sub_field('split_highlight_image');?>');" data-aos="fade-down"></div>
    					<div class="split_col_content" data-aos="fade-up">
    						<h2 class="primary_color"><?php echo get_sub_field('split_highlight_title');?></h2>
    						<p><?php echo get_sub_field('split_highlight_content');?></p>
    					</div>
    				</div>
			    </div>
            <?php $i++;endwhile; ?>
		</div>	
	</div>
</section>
<?php endif; ?>