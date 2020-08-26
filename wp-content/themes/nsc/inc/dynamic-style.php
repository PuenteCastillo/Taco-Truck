<?php
	if ( get_field('global_site_container_width','option') ) {
	$cntwidth=get_field('global_site_container_width','option');?>
	@media (min-width: 1500px){
		.container, .container-sm, .container-md, .container-lg, .container-xl {
		max-width: <?php echo $cntwidth;?>px;
		}
	}
<?php } ?>

<?php
/* Theme Typography Default Value */

$poptions= get_field('tfont_p_tag','option'); 
$p_font_family = $poptions['tfont_p_font_family'];
$p_font_weight = $poptions['tfont_p_font_weight'];
$p_font_size = $poptions['tfont_p_font_size'];
$p_line_height = $poptions['tfont_p_line_height'];
$p_letter_spacing = $poptions['tfont_p_letter_spacing'];

$h1options= get_field('tfont_h1_tag','option'); 
$h1_font_family = $h1options['tfont_h1_font_family'];
$h1_font_weight = $h1options['tfont_h1_font_weight'];
$h1_font_size = $h1options['tfont_h1_font_size'];
$h1_line_height = $h1options['tfont_h1_line_height'];
$h1_letter_spacing = $h1options['tfont_h1_letter_spacing'];

$h2options= get_field('tfont_h2_tag','option'); 
$h2_font_family = $h2options['tfont_h2_font_family'];
$h2_font_weight = $h2options['tfont_h2_font_weight'];
$h2_font_size = $h2options['tfont_h2_font_size'];
$h2_line_height = $h2options['tfont_h2_line_height'];
$h2_letter_spacing = $h2options['tfont_h2_letter_spacing'];

$h3options= get_field('tfont_h3_tag','option'); 
$h3_font_family = $h3options['tfont_h3_font_family'];
$h3_font_weight = $h3options['tfont_h3_font_weight'];
$h3_font_size = $h3options['tfont_h3_font_size'];
$h3_line_height = $h3options['tfont_h3_line_height'];
$h3_letter_spacing = $h3options['tfont_h3_letter_spacing'];

$h4options= get_field('tfont_h4_tag','option'); 
$h4_font_family = $h4options['tfont_h4_font_family'];
$h4_font_weight = $h4options['tfont_h4_font_weight'];
$h4_font_size = $h4options['tfont_h4_font_size'];
$h4_line_height = $h4options['tfont_h4_line_height'];
$h4_letter_spacing = $h4options['tfont_h4_letter_spacing'];

$h5options= get_field('tfont_h5_tag','option'); 
$h5_font_family = $h5options['tfont_h5_font_family'];
$h5_font_weight = $h5options['tfont_h5_font_weight'];
$h5_font_size = $h5options['tfont_h5_font_size'];
$h5_line_height = $h5options['tfont_h5_line_height'];
$h5_letter_spacing = $h5options['tfont_h5_letter_spacing'];

$h6options= get_field('tfont_h6_tag','option'); 
$h6_font_family = $h6options['tfont_h6_font_family'];
$h6_font_weight = $h6options['tfont_h6_font_weight'];
$h6_font_size = $h6options['tfont_h6_font_size'];
$h6_line_height = $h6options['tfont_h6_line_height'];
$h6_letter_spacing = $h6options['tfont_h6_letter_spacing'];

$footer_widget_title_color=get_field('footer_widget_title_color','option');
$footer_border_top_color=get_field('footer_border_top_color','option');

/* Theme/Page Navbar */

if( get_field('pg_nav_navigation_style') == "custom" ){
    $nav_bg_color    = get_field('pg_nav_background_color');
    $nav_opacity     = get_field('pg_nav_opacity');
    $nav_links_color = get_field('pg_nav_link_color');
    $navrgb_background = hexColorToRgba($nav_bg_color,$nav_opacity);
} else {
    $nav_bg_color    = get_field('navbar_background_color','option');
    $nav_opacity     = get_field('navbar_opacity','option');
    $nav_links_color = get_field('navbar_link_color','option');
    $navrgb_background = hexColorToRgba($nav_bg_color,$nav_opacity);
}

/*Footer Dynamic CSS*/
if ( get_field('footer_background_color','option') ) { $footer_background_color=get_field('footer_background_color','option'); } else { $footer_background_color = '#090909';}
if ( get_field('footer_nav_link_colors','option') ) { $footer_nav_link_colors=get_field('footer_nav_link_colors','option'); } else { $footer_nav_link_colors = '#636363';} 
if ( get_field('copyright_footer_background_color','option') ) { $copyright_footer_background_color=get_field('copyright_footer_background_color','option'); } else { $copyright_footer_background_color = '#000000';} 
if ( get_field('copyright_text_color','option') ) { $copyright_text_color=get_field('copyright_text_color','option'); } else { $copyright_text_color = '#636363';}
if ( get_field('part_of_family_text_link_color','option') ) { $part_of_family_text_link_color=get_field('part_of_family_text_link_color','option'); } else { $part_of_family_text_link_color = '#636363';} 
if ( get_field('copyfooter_nav_link_colors','option') ) { $copyfooter_nav_link_colors=get_field('copyfooter_nav_link_colors','option'); } else { $copyfooter_nav_link_colors = '#636363';} 

/* Theme Colors */
if ( get_field('theme_accent_color','option') ) { $accent_color=get_field('theme_accent_color','option'); } else { $accent_color = '#0278be';}
if ( get_field('theme_primary_color','option') ) { $primary_color=get_field('theme_primary_color','option'); } else { $primary_color = '#000000';} 
if ( get_field('theme_secondary_color','option') ) { $secondary_color=get_field('theme_secondary_color','option'); } else { $secondary_color = '#9b9b9b';} 
if ( get_field('theme_tertiary_color','option') ) { $tertiary_color=get_field('theme_tertiary_color','option'); } else { $tertiary_color = '#0278be';}
?>


a{
    color: <?php echo $accent_color;?>; 
}

/* Nav Bar Options */
header.site-header {
	background-color: <?php echo $navrgb_background;?>;
}
@media (max-width: 991px) {
	body.menuslide_push .enumenu_ul, body.menuOverlap .enumenu_ul {
		background: <?php echo $accent_color;?>;
	}
}
.enumenu_ul ul.menu li a{
	color: <?php echo $nav_links_color;?>;
}

.enumenu_ul ul > li:hover > a, 
.enumenu_ul ul.menu li.current_page_item > a, 
.enumenu_ul ul.menu li.current_page_ancestor > a, 
.enumenu_ul ul.menu li.current-menu-parent > a {
	color: <?php echo $accent_color;?>;
}

.enumenu_ul.desk ul.menu ul li:hover > a, .enumenu_ul.desk ul.menu ul li.current_page_item > a, .enumenu_ul.desk ul.menu ul li.active > a { 
	background-color: <?php echo $accent_color;?>; 
}

.enumenu_ul.desk ul.menu li > ul:before {
	border-top-color: <?php echo $accent_color;?>;
}
body.menu-open .menu-icon .menu-box { background-color: <?php echo $accent_color;?>; }

/* Footer Options */

footer.site-footer {
	background-color: <?php echo $footer_background_color;?>; 
}

footer.site-footer .copyright_block { 
	background-color: <?php echo $copyright_footer_background_color;?>; 
	color: <?php echo $copyright_text_color;?>; 
}

footer.site-footer .footer_top .footer_row .footer_col .footer_column div ul li a { 
	color: <?php echo $footer_nav_link_colors;?>;	
}

footer.site-footer .footer_top .footer_row .footer_col .footer_column h5:before{ 
	border-bottom-color: <?php echo $accent_color;?>; 
}

footer.site-footer .footer_top .footer_row .footer_col .footer_column ul li a:hover,
footer.site-footer .footer_top .footer_row .footer_col .footer_column ul li a:focus { 
	color: <?php echo $accent_color;?>;
}

footer.site-footer .copyright_block .social-icons li a:hover,
footer.site-footer .copyright_block .social-icons li a:focus { 
	color: <?php echo $accent_color;?>;
}

footer.site-footer .copyright_block a:hover, footer.site-footer .copyright_block a:focus{ 
	color: <?php echo $accent_color;?>;
}

footer.site-footer .copyright_block .social-links li a:hover, footer.site-footer .copyright_block .social-links li a:focus { 
	color: <?php echo $accent_color;?>;
}

footer.site-footer .copyright_block .copyright_left a{
	color: <?php echo $part_of_family_text_link_color;?> !important;
}

footer.site-footer .copyright_block a {
	color: <?php echo $copyfooter_nav_link_colors;?>;
}




body, .wysiwyg_content_editor, .wysiwyg_content_editor p {
	color:<?php echo $secondary_color;?>;
}
.wysiwyg_content_editor h1,
.wysiwyg_content_editor h2,
.wysiwyg_content_editor h3,
.wysiwyg_content_editor h4,
.wysiwyg_content_editor h5,
.wysiwyg_content_editor h6{
	color:<?php echo $primary_color;?>;  
} 


/* Theme Colors */
.accent_color { 
	color:<?php echo $accent_color;?>; 
}

.primary_color { 
	color:<?php echo $primary_color;?>; 
}

.secondary_color { 
	color:<?php echo $secondary_color;?>;
}

.tertiary_color {
    color:<?php echo $tertiary_color;?>;
}

/* Typography Options */

p{
   font-family: <?php echo $p_font_family;?>;
   font-weight: <?php echo $p_font_weight;?>;
   font-size: <?php echo $p_font_size;?>px;
   line-height: <?php echo $p_line_height;?>px;
   letter-spacing: <?php echo $p_letter_spacing;?>px;
}

h1{   
	font-family: <?php echo $h1_font_family;?>;
	font-weight: <?php echo $h1_font_weight;?>;
	font-size: <?php echo $h1_font_size;?>px;
	line-height: <?php echo $h1_line_height;?>px;
	letter-spacing: <?php echo $h1_letter_spacing;?>px;
}

h2{   
	font-family: <?php echo $h2_font_family;?>;
	font-weight: <?php echo $h2_font_weight;?>;
	font-size: <?php echo $h2_font_size;?>px;
	line-height: <?php echo $h2_line_height;?>px;
	letter-spacing: <?php echo $h2_letter_spacing;?>px;
}

h3{   
	font-family: <?php echo $h3_font_family;?>;
	font-weight: <?php echo $h3_font_weight;?>;
	font-size: <?php echo $h3_font_size;?>px;
	line-height: <?php echo $h3_line_height;?>px;
	letter-spacing: <?php echo $h3_letter_spacing;?>px;
}

h4{   
	font-family: <?php echo $h4_font_family;?>;
	font-weight: <?php echo $h4_font_weight;?>;
	font-size: <?php echo $h4_font_size;?>px;
	line-height: <?php echo $h4_line_height;?>px;
	letter-spacing: <?php echo $h4_letter_spacing;?>px;
}

h5{   
	font-family: <?php echo $h5_font_family;?>;
	font-weight: <?php echo $h5_font_weight;?>;
	font-size: <?php echo $h5_font_size;?>px;
	line-height: <?php echo $h5_line_height;?>px;
	letter-spacing: <?php echo $h5_letter_spacing;?>px;
}

h6{   
	font-family: <?php echo $h6_font_family;?>;
	font-weight: <?php echo $h6_font_weight;?>;
	font-size: <?php echo $h6_font_size;?>px;
	line-height: <?php echo $h6_line_height;?>px;
	letter-spacing: <?php echo $h6_letter_spacing;?>px;
}


/* Elements options*/



/*----- // Primary Link -----*/

<?php
$pri_link=get_field('elem_primary_link','option');
?>
.primary_link{
	font-family: <?php echo $pri_link['elem_primary_link_font_family']; ?>;
	font-size: <?php echo $pri_link['elem_primary_link_font_size']; ?>px;
	font-weight: <?php echo $pri_link['elem_primary_link_font_weight']; ?>;
}

<?php if( $pri_link['elem_primary_link_default_style'] == 'dark' ){ ?>
.primary_link{
	color: <?php echo $accent_color;?>;
}
.primary_link:hover, .primary_link:focus{
	color: <?php echo $primary_color;?>;
}
<?php } else { ?>
.primary_link{
	color: <?php echo $primary_color;?>;
}
.primary_link:hover, .primary_link:focus{
	color: <?php echo $accent_color;?>;
}
<?php } ?>

/*----- // Secondary Link -----*/

<?php
$sec_link=get_field('elem_secondary_link','option');
?>
.secondary_link{
	font-family: <?php echo $sec_link['elem_secondary_link_font_family']; ?>;
	font-size: <?php echo $sec_link['elem_secondary_link_font_size']; ?>px;
	font-weight: <?php echo $sec_link['elem_secondary_link_font_weight']; ?>;
}

<?php if( $sec_link['elem_secondary_link_default_style'] == 'dark' ){ ?>
.secondary_link{
	color: <?php echo $accent_color;?>;
}
.secondary_link:hover, .primary_link:focus{
	color: <?php echo $primary_color;?>;
}
<?php } else { ?>
.secondary_link{
	color: <?php echo $primary_color;?>;
}
.secondary_link:hover, .secondary_link:focus{
	color: <?php echo $accent_color;?>;
}
<?php } ?>


/*----- // Primary Button -----*/

<?php
$pribtn=get_field('elem_primary_button','option');
$pribtn_left_top_rad=$pribtn['elem_primary_button_left_top_border_radius'];
$pribtn_left_bottom_rad=$pribtn['elem_primary_button_left_bottom_border_radius'];
$pribtn_right_top_rad=$pribtn['elem_primary_button_right_top_border_radius'];
$pribtn_right_bottom_rad=$pribtn['elem_primary_button_right_bottom_border_radius'];
$pribtnrdstrig=$pribtn_left_top_rad."px ".$pribtn_right_top_rad."px ".$pribtn_right_bottom_rad."px ".$pribtn_left_bottom_rad."px";
?>

.primary_btn{
	font-family: <?php echo $pribtn['elem_primary_button_font_family']; ?>;
	font-size: <?php echo $pribtn['elem_primary_button_font_size']; ?>px;
	font-weight: <?php echo $pribtn['elem_primary_button_font_weight']; ?>;
	border-radius: <?php echo $pribtnrdstrig;?>;
}

<?php if( $pribtn['elem_primary_button_default_style'] == 'light' ){ ?>
            /*Btn Light version*/
            .primary_btn{
            	/*background-color:#FFFFFF;*/
            	color:<?php echo $accent_color;?>;
            	border-color:<?php echo $accent_color;?>;
            }
            .primary_btn:hover, .primary_btn:focus{
            	background-color:<?php echo $accent_color;?>;
            	color:#FFFFFF;
            }
<?php } else { ?>
            /*Btn Dark version*/
            .primary_btn{
            	background-color:<?php echo $accent_color;?>;
            	color:#FFFFFF;
            	border-color:<?php echo $accent_color;?>;
            }
            .primary_btn:hover, .primary_btn:focus{
            	background-color:transparent;
            	color:<?php echo $accent_color;?>;
            }
<?php } ?>



/*----- // Secondary Button -----*/
<?php
$secbtn=get_field('elem_secondary_button','option');
$secbtn_left_top_rad=$secbtn['elem_secondary_button_left_top_border_radius'];
$secbtn_left_bottom_rad=$secbtn['elem_secondary_button_left_bottom_border_radius'];
$secbtn_right_top_rad=$secbtn['elem_secondary_button_right_top_border_radius'];
$secbtn_right_bottom_rad=$secbtn['elem_secondary_button_right_bottom_border_radius'];
$secbtnrdstrig=$secbtn_left_top_rad."px ".$secbtn_right_top_rad."px ".$secbtn_right_bottom_rad."px ".$secbtn_left_bottom_rad."px";
?>

.secondary_btn{
	font-family: <?php echo $secbtn['elem_secondary_button_font_family']; ?>;
	font-size: <?php echo $secbtn['elem_secondary_button_font_size']; ?>px;
	font-weight: <?php echo $secbtn['elem_secondary_button_font_weight']; ?>;
	border-radius: <?php echo $secbtnrdstrig;?>;
}

<?php if( $secbtn['elem_secondary_button_default_style'] == 'light' ){ ?>
            /*Btn Light version*/
            .secondary_btn{
            	/*background-color:#FFFFFF;*/
            	color:<?php echo $accent_color;?>;
            	border-color:<?php echo $accent_color;?>;
            }
            .secondary_btn:hover, .secondary_btn:focus{
            	background-color:<?php echo $accent_color;?>;
            	color:#FFFFFF;
            }
<?php } else { ?>
            /*Btn Dark version*/
            .secondary_btn{
            	background-color:<?php echo $accent_color;?>;
            	color:#FFFFFF;
            	border-color:<?php echo $accent_color;?>;
            }
            .secondary_btn:hover, .secondary_btn:focus{
            	background-color:transparent;
            	color:<?php echo $accent_color;?>;
            }
<?php } ?>



/*----- // Tertiary Button -----*/

<?php
$trtbtn=get_field('elem_tertiary_button','option');
$trtbtn_left_top_rad=$trtbtn['elem_tertiary_button_left_top_border_radius'];
$trtbtn_left_bottom_rad=$trtbtn['elem_tertiary_button_left_bottom_border_radius'];
$trtbtn_right_top_rad=$trtbtn['elem_tertiary_button_right_top_border_radius'];
$trtbtn_right_bottom_rad=$trtbtn['elem_tertiary_button_right_bottom_border_radius'];
$trtbtnrdstrig=$trtbtn_left_top_rad."px ".$trtbtn_right_top_rad."px ".$trtbtn_right_bottom_rad."px ".$trtbtn_left_bottom_rad."px";
?>

.tertiary_btn{
	font-family: <?php echo $trtbtn['elem_tertiary_button_font_family']; ?>;
	font-size: <?php echo $trtbtn['elem_tertiary_button_font_size']; ?>px;
	font-weight: <?php echo $trtbtn['elem_tertiary_button_font_weight']; ?>;
	border-radius: <?php echo $trtbtnrdstrig;?>;
}
<?php if( $trtbtn['elem_tertiary_button_default_style'] == 'light' ){ ?>
            /*Btn Light version*/
            .tertiary_btn{
            	/*background-color:#FFFFFF;*/
            	color:<?php echo $accent_color;?>;
            	border-color:<?php echo $accent_color;?>;
            }
            .tertiary_btn:hover, .tertiary_btn:focus{
            	background-color:<?php echo $accent_color;?>;
            	color:#FFFFFF;
            }
<?php } else { ?>
            /*Btn Dark version*/
            .tertiary_btn{
            	background-color:<?php echo $accent_color;?>;
            	color:#FFFFFF;
            	border-color:<?php echo $accent_color;?>;
            }
            .tertiary_btn:hover, .tertiary_btn:focus{
            	background-color:transparent;
            	color:<?php echo $accent_color;?>;
            }
<?php } ?>


/* Others Dynamic Styles */
.morelink:hover, .morelink:focus { color: <?php echo $accent_color;?>; }
blockquote h2:before { border-top-color: <?php echo $accent_color;?>; }
.top_search_field .search_close_btn { background-color: <?php echo $accent_color;?>; }
/*large_gallery_masonry*/
.large_gallery_masonry .grid .grid-item .grid-item-block .overlay, .large_gallery_masonry .grid .grid-sizer .grid-item-block .overlay { background-color: <?php echo $accent_color;?>; }
.large_gallery_masonry .masonry_filter_menu li a:hover { color: <?php echo $accent_color;?>; }
.large_gallery_masonry .masonry_filter_menu li a.active { color: <?php echo $accent_color;?>; border-bottom-color: <?php echo $accent_color;?>; } 
/*latest_news*/
.latest_news .viewlink { color: <?php echo $accent_color;?>; }
/*related_products*/
.related_products .related_products_slider .thumb_column:hover .morelink, 
.related_products .related_products_slider .thumb_column:focus .morelink { color: <?php echo $accent_color;?>; }
/*testimonial*/
.testimonial blockquote .quote { fill: <?php echo $accent_color;?>; }
/*stacked_2_col*/
.stacked_2_col .stacked_row .stacked_col .stacked_title.underline_show:before { border-bottom-color: <?php echo $accent_color;?>; }
.stacked_2_col .stacked_row .stacked_col .stacked_col_inner .links_data a { border-left-color: <?php echo $accent_color;?>; }
/*images_3_col*/
.images_3_col .image_col_row .image_col .image_col_content .image_col_title.underline_show:before { border-left-color: <?php echo $accent_color;?>; }
/*vertical divider list*/
.vertical_divider_list .vertical_content_row .vertical_content_col .vertical_content .vertical_content_title.underline_show:before { border-bottom-color: <?php echo $accent_color;?>; }
/*about_us*/
.about_us h5:before { border-bottom-color: <?php echo $accent_color;?>; }
/*video_gallery*/
.video_gallery .video_gallery_row .video_gallery_col .video_block .video_image_wrap .playicon:before { background-color: <?php echo $accent_color;?>; }
/*embed-responsive*/
.embed-responsive .embed_play_icon { background-color: <?php echo $accent_color;?>; }
/*Archive Blog*/
.blog_listing .narrow_column .widget.widget_categories ul li, .blog_listing .narrow_column .widget.widget_nav_menu ul li { color: <?php echo $accent_color;?>; }
.blog_listing .narrow_column .widget.widget_categories ul li a:hover, 
.blog_listing .narrow_column .widget.widget_categories ul li a:focus, 
.blog_listing .narrow_column .widget.widget_nav_menu ul li a:hover, 
.blog_listing .narrow_column .widget.widget_nav_menu ul li a:focus { color: <?php echo $accent_color;?>; }
.narrow_column .widget .widget-title:before { border-top-color: <?php echo $accent_color;?>; }
input[type="submit"].primary_btn { background: <?php echo $accent_color;?>; color: #ffffff; border-color: <?php echo $accent_color;?>; }
input[type="submit"].primary_btn:hover, input[type="submit"].primary_btn:focus { background: #ffffff; color: <?php echo $accent_color;?>; }
/* Blog Single */
.blog_single .post_cover .row .post_right_Data .btn { color: #ffffff; background-color: <?php echo $accent_color;?>;border-color: <?php echo $accent_color;?>; }
.blog_single .post_cover .row .post_right_Data .btn:hover, .blog_single .post_cover .row .post_right_Data .btn:focus{ color: <?php echo $accent_color;?>; background-color: #ffffff; }
.blog_single ul li:before { background-color: <?php echo $accent_color;?>; }
.comments-area .comments-title .comment-title-inner:before { border-bottom-color: <?php echo $accent_color;?>; }
.comments-area .comment-list ul .reply .comment-reply-link { color: #ffffff; background-color: <?php echo $accent_color;?>; }
.comments-area .comment-list ul .reply .comment-reply-link:hover, .comments-area .comment-list ul .reply .comment-reply-link:focus { color: <?php echo $accent_color;?>; background-color: #ffffff; }
.comments-area form input[type="submit"] { color: #ffffff; background-color: <?php echo $accent_color;?>; border-color: <?php echo $accent_color;?>; } 
.comments-area form input[type="submit"]:hover, .comments-area form input[type="submit"]:focus { color: <?php echo $accent_color;?>; background-color: #ffffff; border-color: <?php echo $accent_color;?>; }
.comments-area .comment-respond .comment-reply-title span:before { border-bottom-color: <?php echo $accent_color;?>; }
/*Contact page*/
form.wpcf7-form .wpcf7-form-control.wpcf7-submit.submit_btn { color: <?php echo $accent_color;?>; border-color: <?php echo $accent_color;?>; }
form.wpcf7-form .wpcf7-form-control.wpcf7-submit.submit_btn:hover, form.wpcf7-form .wpcf7-form-control.wpcf7-submit.submit_btn:focus { background: <?php echo $accent_color;?>; color: #ffffff; }
/*product page*/
.woocommerce div.product .woocommerce-tabs .panel ul li:before { background: <?php echo $accent_color;?>; } 
.woocommerce div.product .woocommerce-tabs ul.tabs li a:before { border-top-color: <?php echo $accent_color;?>; }
.woocommerce div.product .woocommerce-tabs .panel h5:before { border-bottom-color: <?php echo $accent_color;?>; }
.woocommerce .woocommerce-breadcrumb { color: <?php echo $accent_color;?>; }

/*wp page navigation*/
.pagination .nav-links a, .pagination .nav-links span { color: <?php echo $accent_color;?>; }
.pagination .nav-links a:hover, .pagination .nav-links a:focus, .pagination .nav-links span:hover, .pagination .nav-links span:focus { color: #ffffff; background: <?php echo $accent_color;?>; }
.pagination .nav-links .current { background: <?php echo $accent_color;?>; }

/* Slider Pagination */
.pagination_nav a:hover, .pagination_nav a:focus { color:<?php echo $accent_color;?>; } 
<?php 
$pgstyle=get_field('slider_pagination','option');
if( $pgstyle=="styleone" )
{
?>

/* Pagenation Style 1 */
.pagination_nav .slick-dots{position: inherit;margin-bottom: 2px;}
.pagination_nav .slick-dots li {margin: 0;}
.pagination_nav .slick-dots li:before, .pagination_nav .slick-dots li button:before { display: none; }
.pagination_nav .slick-dots li button{width: 9px;height: 9px;border: solid 1px #cdcdcd;border-radius: 50%;margin: 0;padding: 0;}
.pagination_nav .slick-dots li:hover button, .pagination_nav .slick-dots li.slick-active button{background: <?php echo $accent_color;?>;border-color: <?php echo $accent_color;?>;}

<?php } else { ?>

/* Pagenation Style 2 */
.pagination_nav .slick-dots{position: inherit; margin-bottom: 2px;}
.pagination_nav .slick-dots li {margin: 0;width: auto;height: auto;}
.pagination_nav .slick-dots li:before, .pagination_nav .slick-dots li button:before { display: none; }
.pagination_nav .slick-dots li button{background-color: #e6e6e6;width: 18px; height: 18px;border: solid 4.5px #fff;border-radius: 50%;margin: 0 5px;padding: 0;}
.pagination_nav .slick-dots li:hover button, .pagination_nav .slick-dots li.slick-active button{border: solid 6px #fff !important;	box-shadow: 0 0 0 2px <?php echo $accent_color;?> !important;}

<?php } ?>

/*grouped_links*/
.grouped_links .info_links ul li a:hover, .grouped_links .info_links ul li a:focus { color: <?php echo $accent_color;?>; }
/*quicklinks*/
.quicklinks .quicklinks_side_col .quicklinks_menu li a:hover, .quicklinks .quicklinks_side_col .quicklinks_menu li a:focus{ color: <?php echo $accent_color;?>; }
/* Highlights */
.highlights .highlights_col .bg_overlay { background-color: <?php echo $accent_color;?>; }
/*Feature Row (Style 3)*/
.feature_row.feature_row_style3 .feature_col_row .feature_content_col .feature_content_column .link:hover, 
.feature_row.feature_row_style3 .feature_col_row .feature_content_col .feature_content_column .link:focus { color: <?php echo $accent_color;?>; }

.subheading.underline_show:before { border-bottom-color: <?php echo $accent_color;?>; }


footer.site-footer .footer_top .footer_row .footer_col .footer_column h5.widget-title { color: <?php echo $footer_widget_title_color;?>; }
footer.site-footer.footer_style_two .footer_top .footer_row .footer_col .footer_column .social-links li a:hover,
footer.site-footer.footer_style_two .footer_top .footer_row .footer_col .footer_column .social-links li a:focus { color: <?php echo $accent_color;?>; }
footer.site-footer .copyright_block.border_top .copyright_inner { border-top-color: <?php echo $footer_border_top_color;?> !important; }

