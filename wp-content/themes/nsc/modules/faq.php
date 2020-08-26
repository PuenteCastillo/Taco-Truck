<?php 
if ( get_sub_field('faq_section_background_type') == "Color" ){
    if ( get_sub_field('faq_section_background_color') ) {
        $bgstyle='style="background-color:'.get_sub_field('faq_section_background_color').';"';
    } else {
        $bgstyle='style="background-color:#FFFFFF;"';
    }
    $sctbg='';
}
else{
    $bgstyle='style="background-image:url('.get_sub_field('faq_section_background_image').');"';
    $sctbg='section_bg';
}
?>
<section class="faq inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="module_title text-center">
				    <?php if( get_sub_field('faq_section_header') ) : ?>
    			        <<?php echo get_sub_field('faq_section_header_tag');?> class="primary_color"><?php echo get_sub_field('faq_section_header'); ?></<?php echo get_sub_field('faq_section_header_tag');?>>
					<?php endif; ?>
					<?php if( get_sub_field('faq_section_sub_head') ) : ?>
	    		        <<?php echo get_sub_field('faq_section_sub_head_tag');?>><?php echo get_sub_field('faq_section_sub_head'); ?></<?php echo get_sub_field('faq_section_sub_head_tag');?>>
					<?php endif; ?>
				</div>				
				<!--Accordion wrapper-->
		        <div class="accordion <?php if ( get_sub_field('faq_section_style')=="styletwo" ) { echo 'style2'; }?>" id="accordion_faq" role="tablist" aria-multiselectable="true">
		           	<div class="row">
    	        	        <?php if ( have_rows('faqs_questions_answers') ) : 
    	        	        $count = 0;
                            while( have_rows('faqs_questions_answers') ) : the_row();
                              $count++;
                            endwhile;
                            $midcnt=round($count/2)+1;
    	        	        ?>
                                <?php while( have_rows('faqs_questions_answers') ) : the_row(); ?>
                                    <?php if ( get_row_index()=="1" || get_row_index()==$midcnt ) { ?><div class="col-12 col-sm-12 col-md-6 col-lg-6"><?php } ?>                                  
                                    <div class="card">
        						      <div class="card-header p-0" role="tab" id="heading<?php echo get_row_index();?>">
        						         <a data-toggle="collapse" data-parent="#accordion_faq" href="#collapse<?php echo get_row_index();?>" aria-expanded="true"
        						            aria-controls="collapse<?php echo get_row_index();?>" class="collapsed"><?php echo get_row_index();?>. <?php echo get_sub_field('faq_faqs_question');?> <span class="acco_icon"><i class="fas fa-plus"></i><i class="fas fa-minus"></i></span>
        						         </a>
        						      </div>
        						      <div id="collapse<?php echo get_row_index();?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo get_row_index();?>" data-parent="#accordion_faq">
        						         <div class="card-body"><?php the_sub_field('faq_faqs_answer');?></div>
        						      </div>
						            </div>				   
						          <?php if ( get_row_index()==$count || get_row_index()==($midcnt-1) ) { ?></div><?php } ?>                                                
                                <?php endwhile; ?>
                            <?php endif; ?>         
		        	</div>
				</div>
				<!--/.Accordion wrapper-->
			</div>
		</div>
	</div>
</section>