<section class="faq faq_simple inner_spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-10 pl-4 pr-4">
				<div class="module_title">
				    <?php if( get_sub_field('faqsimple_section_header') ) : ?>
    			        <<?php echo get_sub_field('faqsimple_section_header_tag');?> class="primary_color"><?php echo get_sub_field('faqsimple_section_header'); ?></<?php echo get_sub_field('faqsimple_section_header_tag');?>>
					<?php endif; ?>
					<?php if( get_sub_field('faqsimple_section_sub_head') ) : ?>
	    		        <<?php echo get_sub_field('faqsimple_section_sub_head_tag');?>><?php echo get_sub_field('faqsimple_section_sub_head'); ?></<?php echo get_sub_field('faqsimple_section_sub_head_tag');?>>
					<?php endif; ?>
				</div>
				<div class="faq_simple_block">
				    <?php if ( have_rows('faqsimple_faqs') ) : ?>
                        <?php while( have_rows('faqsimple_faqs') ) : the_row(); ?>
                            <div class="faq_content">
                                <h3 class="accent_color"><?php echo get_sub_field('faqsimple_faqs_category');?></h3>                                                    
                                <?php if ( have_rows('faqsimple_faqs_questions_answers') ) : ?>
                                    <?php while( have_rows('faqsimple_faqs_questions_answers') ) : the_row(); ?>
                                        <h5><?php echo get_sub_field('faqsimple_faqs_question'); ?></h5>
                                        <?php the_sub_field('faqsimple_faqs_answer'); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
        		</div>	
			</div>
		</div>
	</div>
</section>