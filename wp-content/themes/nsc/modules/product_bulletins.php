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
                        <th data-sortable="true">Product Bulletin	</th>
                        <th data-sortable="true">Description</th>
                        <th data-sortable="true" >Date Issued</th>
                        <th  class="right-x">DL</th>
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
																																		                        <td class="set-width"><span style="color: green"><i class="fas fa-circle"></i> Current </span>
																																		                        </td>
																																		                        <?} else {?>
																																		                            <td  class="set-width"><span style="color: red"><i class="fas fa-circle"></i> Discontinued  </span>
																																		                            </td>

																																		                            <?php }?>

																																		                            <td>
																																										<?php echo get_sub_field('product_bulletin') ?>


																																		                            </td>
																																		                            <td>
																																									<?php echo get_sub_field('description') ?>
																																		                            </td>
																																		                            <td class="right-x">
																																									<?php echo get_sub_field('date') ?>
																																									<!-- 1/17/2020 -->
																																									</td>
																																									<td >

																																									<?php $link_m = get_sub_field('download_link');if ($link_m): $link_m_url = $link_m['url'];
            $link_m_title = $link_m['title'];
            $link_m_target = $link_m['target'] ? $link_m['target'] : '_self';?>
													<?php if ($link_m_url) {?>
														<a class="download-link" href="<?php echo $link_m_url ?>"  target="_blank"><i class="far fa-download"></i></a>
													<?php }?>
													<?php endif;?>
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