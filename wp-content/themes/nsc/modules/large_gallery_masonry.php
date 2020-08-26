<?php
if ( get_sub_field('lrg_gallm_background_type') == "color" ){
    $bgstyle='style="background-color:'.get_sub_field('lrg_gallm_section_background_color').';"';
    $sctbg='';
}
else{
    $bgstyle='style="background-image:url('.get_sub_field('lrg_gallm_section_background_image').');"';
    $sctbg='section_bg';
}
$small_title_tag=get_sub_field('lrg_gallm_section_small_title_tag');
$section_title_tag=get_sub_field('lrg_gallm_section_title_tag');
?>
<section class="large_gallery_masonry inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>	
	<?php if ( get_sub_field('lrg_gallm_content_above_gallery') == "true" ) { ?>
        <?php if ( have_rows('lrg_gallm_main_content') ) : ?>
            <div class="container">
            	<div class="row gallery_text_col">
                    <?php while( have_rows('lrg_gallm_main_content') ) : the_row(); ?>
                    	<div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
            				<div class="gallery_text_col_inner">
            					<?php if( get_sub_field('lrg_gallm_main_content_title') ) : ?><h5 class="primary_color"><?php echo get_sub_field('lrg_gallm_main_content_title');?></h5><?php endif; ?>
            					<?php if( get_sub_field('lrg_gallm_main_content_content') ) :?><div class="wysiwyg_content_editor"><?php the_sub_field('lrg_gallm_main_content_content');?></div><?php endif; ?>
            				</div>
            			</div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>	

    <?php if( get_sub_field('lrg_gallm_section_small_title') || get_sub_field('lrg_gallm_section_title') ) { ?>
    <div class="container">
        <div class="module_title text-center" data-aos="fade-up">
    		<div class="row justify-content-center">
    			<div class="col-12 col-sm-12 col-md-12 col-lg-10">
    			    <?php if( get_sub_field('lrg_gallm_section_small_title') ) : ?><<?php echo $small_title_tag;?> class="accent_color"><?php echo get_sub_field('lrg_gallm_section_small_title');?></<?php echo $small_title_tag;?>><?php endif; ?>
    			    <?php if( get_sub_field('lrg_gallm_section_title') ) : ?><<?php echo $section_title_tag; ?>><?php echo get_sub_field('lrg_gallm_section_title');?></<?php echo $section_title_tag; ?>><?php endif; ?>
    			</div>
    		</div>
    	</div>
    </div>

    <?php } ?>

    <?php 

        $bordrradis=get_sub_field('lrg_gallm_content_blocks_border_radius');
        if ( have_rows('lrg_gallm_content_blocks') ) :
        $catfilt=array();
        while( have_rows('lrg_gallm_content_blocks') ) : the_row();
            $catfilt[]=get_sub_field('lrg_gallm_cnblock_filter_type');
        endwhile; 
        $catfilt=array_unique($catfilt); 
        ?>

	    <div class="container">
	        <hr>
	        <?php if ( !empty($catfilt) ){ ?>
    		<ul class="masonry_filter_menu button-group filters-button-group">
    			<li class="active"><a href="javascript:void(0);" title="ALL" class="button active" data-filter="*">ALL</a></li>
    			<?php foreach ($catfilt as $value) {?>
                  <li><a href="javascript:void(0);" title="<?php echo $value;?>" class="button" data-filter=".<?php echo strtolower($value);?>"><?php echo $value;?></a></li>
                <?php } ?>
        	</ul>
        	<?php } ?>

    		<div class="grid">
    			<div class="grid-sizer"></div>
    			<?php $i=1; while( have_rows('lrg_gallm_content_blocks') ) : the_row(); ?>
        			<div class="grid-item <?php if ( ($i%8)==0 || $i==1 || ($i%11)==0) { echo "grid-item--width2 grid-item--height2"." ".$i; }?> <?php echo strtolower(get_sub_field('lrg_gallm_cnblock_filter_type'));?>" data-category="<?php echo strtolower(get_sub_field('lrg_gallm_cnblock_filter_type'));?>">
        			    <?php if( get_sub_field('lrg_gallm_cnblock_url') ) { 
                                $blckurl=get_sub_field('field_name');
                        } else {
                                $blckurl="javascript:void(0)";
                        } ?>
        				<a href="<?php echo $blckurl; ?>" class="grid-item-block" style="background-image: url('<?php echo get_sub_field('lrg_gallm_cnblock_image'); ?>');border-radius:<?php echo $bordrradis;?>px;">
        				    <?php if( get_sub_field('lrg_gallm_cnblock_hover_text') ) : ?>
                                <div class="overlay"><p><?php echo get_sub_field('lrg_gallm_cnblock_hover_text'); ?></p></div>
                            <?php endif; ?>
        				</a>
        			</div>
    			<?php $i++;endwhile;?> 
    		</div>
    	</div>	
	<?php endif; ?>
</section>