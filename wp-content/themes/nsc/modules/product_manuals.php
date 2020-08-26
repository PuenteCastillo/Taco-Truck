<?php if (get_sub_field('wysiwyg_section_background_type') == "color") {$bgstyle = 'style="background-color:' . get_sub_field('wysiwyg_sec_background_color') . ';"';
    $sctbg = '';} else { $bgstyle = 'style="background-image:url(' . get_sub_field('wysiwyg_sec_background_image') . ');"';
    $sctbg = 'section_bg';}
$container_class = "container";if (get_sub_field('wysiwyg_sec_full_width_container') == 'yes') {$container_class = "container-fluid";}?>

<section class="product_manuals &lt;?php echo $sctbg; ?&gt;">
    <div class="container">
        <div class="row PM_header">
            <h2 class="primary_color">
                <?php echo get_sub_field('header'); ?>
                </h2>
            <div class="row justify-content-md-center">
                <div class="col-12 col-lg-8">

                    <?php echo get_sub_field('content'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="container table_container">
        <div class="card">
            <table data-pagination="true" data-pagination-h-align="left" data-page-size="16" data-pagination-detail-h-align="right" data-pagination-pre-text="PREV" data-pagination-next-text="NEXT" data-search="true" data-toggle="table" id="table">
                <thead>
                    <tr>

                        <th class="left-x" data-sortable="true" data-field="10">Brand</th>
                        <th data-sortable="true">Status</th>
                        <th data-sortable="true">Owner's manual</th>
                        <th data-sortable="true">Instruction manual</th>
                        <th data-sortable="true" class="right-x">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0;?>
                    <?php if (have_rows('table_row')): while (have_rows('table_row')): the_row();?>
				                    <?php $count++;?>
				                    <tr>


				                        <td class="left-x">
				                            <div>
				                                <?php echo get_sub_field('brand'); ?> </div>
				                        </td>
				                        <?php if (get_sub_field('status') === 'current') {?>
				                        <td><span style="color: green"><i class="fas fa-circle"></i> Current </span>
				                        </td>
				                        <?} else {?>
				                            <td><span style="color: red"><i class="fas fa-circle"></i> Discontinued  </span>
				                            </td>

				                            <?php }?>

				                            <td>
				                                <?php while (have_rows('owners_manual')): the_row();?>


						                                <?php $link_m = get_sub_field('manual');if ($link_m): $link_m_url = $link_m['url'];
                $link_m_title = $link_m['title'];
                $link_m_target = $link_m['target'] ? $link_m['target'] : '_self';?>
								                                <?php if ($link_m_url != "#") {?>

								                                <div class="block">
								                                    <a href="<?php echo esc_url($link_m_url); ?>" target="<?php echo esc_attr($link_m_target); ?>">
								                                        <?php echo esc_html($link_m_title); ?> </a>
								                                    <?php if (get_sub_field('language') != 'null') {?>
								                                    <div class="language"><img src="https://www.countryflags.io/<?php echo get_sub_field('language') ?>/flat/64.png">
								                                    </div>
								                                    <?php }?>

								                                </div>

								                                <?php } else {?>


								                                <div class="block">
								                                    <span>  <?php echo esc_html($link_m_title); ?> </span>
								                                    <?php if (get_sub_field('language') != 'null') {?>
								                                    <div class="language"><img src="https://www.countryflags.io/<?php echo get_sub_field('language') ?>/flat/64.png">
								                                    </div>
								                                    <?php }?>
								                                </div>

								                                <?php }?>
								                                <?php endif;?>



						                                <?php endwhile;?>

				                            </td>
				                            <td>
				                                <?php while (have_rows('instruction_manual')): the_row();?>


						                                <?php $link_m = get_sub_field('manual');if ($link_m): $link_m_url = $link_m['url'];
                $link_m_title = $link_m['title'];
                $link_m_target = $link_m['target'] ? $link_m['target'] : '_self';?>
								                                <?php if ($link_m_url != "#") {?>

								                                <div class="block">
								                                    <a href="<?php echo esc_url($link_m_url); ?>" target="<?php echo esc_attr($link_m_target); ?>">
								                                        <?php echo esc_html($link_m_title); ?> </a>
								                                    <?php if (get_sub_field('language') != 'null') {?>
								                                    <div class="language"><img src="https://www.countryflags.io/<?php echo get_sub_field('language') ?>/flat/64.png">
								                                    </div>
								                                    <?php }?>

								                                </div>

								                                <?php } else {?>


								                                <div class="block">
								                                    <span>  <?php echo esc_html($link_m_title); ?> </span>
								                                    <?php if (get_sub_field('language') != 'null') {?>
								                                    <div class="language"><img src="https://www.countryflags.io/<?php echo get_sub_field('language') ?>/flat/64.png">
								                                    </div>
								                                    <?php }?>
								                                </div>

								                                <?php }?>
								                                <?php endif;?>



						                                <?php endwhile;?>

				                            </td>
				                            <td class="right-x">

				                                <?php while (have_rows('notes')): the_row();?>


						                                <?php $link_m = get_sub_field('manual');if ($link_m): $link_m_url = $link_m['url'];
                $link_m_title = $link_m['title'];
                $link_m_target = $link_m['target'] ? $link_m['target'] : '_self';?>
								                                <?php if ($link_m_url != "#") {?>

								                                <div class="block">
								                                    <a href="<?php echo esc_url($link_m_url); ?>" target="<?php echo esc_attr($link_m_target); ?>">
								                                        <?php echo esc_html($link_m_title); ?> </a>
								                                    <?php if (get_sub_field('language') != 'null') {?>
								                                    <div class="language"><img src="https://www.countryflags.io/<?php echo get_sub_field('language') ?>/flat/64.png">
								                                    </div>
								                                    <?php }?>

								                                </div>

								                                <?php } else {?>


								                                <div class="block">
								                                    <span>  <?php echo esc_html($link_m_title); ?> </span>
								                                    <?php if (get_sub_field('language') != 'null') {?>
								                                    <div class="language"><img src="https://www.countryflags.io/<?php echo get_sub_field('language') ?>/flat/64.png">
								                                    </div>
								                                    <?php }?>
								                                </div>

								                                <?php }?>
								                                <?php endif;?>



						                                <?php endwhile;?>
				                            </td>
				                    </tr>


				                    <?php endwhile;endif;?>


                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>

<script>
    function priceSorter(a, b) {
        var aa = a.replace('$', '')
        var bb = b.replace('$', '')
        return aa - bb
    }
</script>