<?php
function prjenq_scripts() {
    wp_enqueue_style( 'prjapp-style', get_template_directory_uri() . '/dist/assets/css/app.css' );
    wp_enqueue_style( 'dynamic-styles', get_template_directory_uri() . '/inc/dynamic-style.css' );
    wp_enqueue_script( 'prjaos-js', get_template_directory_uri() . '/src/assets/js/lib/aos.js', array(), '1.0', true );
    wp_enqueue_script( 'prjapp-js', get_template_directory_uri() . '/dist/assets/js/app.js', array(), '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'prjenq_scripts' );

function themename_add_sidebar() {

	register_sidebar(
		array(
			'name' 		=> 'Footer 1',
			'id' 		=> 'foot-sidebar-1',
			'description'	=> 'Add one widget, as it will be the 1st widget in the footer.',
			'before_widget' => '<div id="%1$s" class="footer_column widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' 		=> 'Footer 2',
			'id' 		=> 'foot-sidebar-2',
			'description'	=> 'Add one widget, as it will be the 2nd widget in the footer.',
			'before_widget' => '<div id="%1$s" class="footer_column widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' 		=> 'Footer 3',
			'id' 		=> 'foot-sidebar-3',
			'description'	=> 'Add one widget, as it will be the 3rd widget in the footer',
			'before_widget' => '<div id="%1$s" class="footer_column widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' 		=> 'Footer 4',
			'id' 		=> 'foot-sidebar-4',
			'description'	=> 'Add one widget, as it will be the 4th widget in the footer',
			'before_widget' => '<div id="%1$s" class="footer_column widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' 		=> 'Footer 5',
			'id' 		=> 'foot-sidebar-5',
			'description'	=> 'Add one widget, as it will be the 5th widget in the footer',
			'before_widget' => '<div id="%1$s" class="footer_column widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);
}
add_action( 'widgets_init', 'themename_add_sidebar' );

function generate_options_css() {
    $ss_dir = get_stylesheet_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/inc/dynamic-style.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/inc/dynamic-style.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 );

//ACF Option Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
            'page_title'    => __('Theme Options'),
            'menu_title'    => __('Theme Options'),
            'menu_slug'     => 'theme-options',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
}

//For Upload SVG Image Support
function prjcommn_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'prjcommn_mime_types');

//Admin Logo
function prjcommn_admin_login_logo() { 
$img= get_field('main_logo_dark','option');
list($admlgwidth, $admlgheight, $admlgtype, $admlgattr) = getimagesize($img); 
?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo $img;?>);
		height:<?php echo $admlgheight."px";?>;
		width:<?php echo $admlgwidth."px";?>;
		background-size: <?php echo $admlgwidth."px ".$admlgheight."px"?>;
		background-repeat: no-repeat;
        	/*padding-bottom: 30px;*/
        }
    </style>
<?php }
if (get_field('main_logo_dark','option')) {
  add_action( 'login_enqueue_scripts', 'prjcommn_admin_login_logo' );
}

//Social Links - Shortcode 
function social_links_shortcode($atts) {
    extract(shortcode_atts(array(
        'label' => null,
    ), $atts));
    ob_start();
    if (have_rows('social_links', 'option')):
        ?>
        <ul class="social-links">
        <?php
        while (have_rows('social_links', 'option')): the_row();
            $social_media_title = get_sub_field('social_media_title');
            $social_media_link  = esc_url(get_sub_field('social_media_link'));
            $icon_class  = get_sub_field('icon_class');
        ?>
            <?php if(!empty($social_media_title)): ?>
                <li>
                    <a href="<?php echo $social_media_link; ?>" target="_blank" title="<?php echo ($social_media_title); ?>">
                        <i class="<?php echo $icon_class; ?>" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>
        <?php endwhile; ?>
        </ul>
        
        <?php
        endif;
        return ob_get_clean();
}
add_shortcode('sociallinks', 'social_links_shortcode');

/**
 * Changing WordPress URL to site url from logo, from WordPress login page
 */
add_filter( 'login_headerurl', 'prjcommn_login_headerurl' );
function prjcommn_login_headerurl($url) {
    return site_url();
}

/**
 * Change title from logo, from WordPress login page
 */
add_filter( 'login_headertext', 'prjcommn_login_headertext' );
function prjcommn_login_headertext() {
    $site_title = get_bloginfo( 'name' ) ;
    return $site_title;
} 

/**
 * Removing admin bar from non-admin users. After login, on front-end, only admin users can see admin bar on the top
 */
if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
}

//Remove CSS and JS Version from url
function remove_css_js_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 );

//Remove additional script/styles
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//[cyear] - Current Year Shortcode (Used in Copyright Text)
add_shortcode( 'cyear', 'cyear_func' );
function cyear_func( $atts ){
	return date('Y');
}

//[sitetitle] - Get Site title of website
add_shortcode( 'sitetitle', 'sitetitle_func' );
function sitetitle_func( $atts ){
	return get_bloginfo('name');
}

//[flexlayout] - Flexible layout/module Shortcode
function flex_modules($attr)
{
	$fields = get_field_objects();
	$flex_field=$attr['name'];
    $fid=$fields[$flex_field]['ID'];
	if ( isset($fid) )
	{
		$sections = array();
		//$mydata = get_post_field('post_content',$fid);
		//$mydata = unserialize($mydata);
		$newdata=$fields[$flex_field]['layouts'];
		foreach($newdata as $l){
			array_push($sections,$l['name']);
		}
	    
		if ( have_rows( $flex_field ) ) : 
			while ( have_rows( $flex_field ) ) : the_row(); 
				if ( in_array(get_row_layout(),$sections) ) : 
					$filename = get_stylesheet_directory()."/modules/".get_row_layout().".php";
					if(!file_exists($filename)):
					    $myfile = fopen( get_template_directory()."/modules/".get_row_layout().".php", "w") or die("Unable to open file!");
				        $txt = '<section class="'.get_row_layout().'">Add HTML code Here</section>';
				        fwrite($myfile, $txt);
				        fclose($myfile);
					endif;								
					get_template_part("/modules/".get_row_layout());
				endif;
			endwhile;
		else: 
			get_template_part( 'content', 'page' );
		endif;
	}else{
	    //echo "in else";
		get_template_part( 'content', 'page' );
	}	
}
add_shortcode( 'flexmodules','flex_modules' );


function hexColorToRgba($hex, float $a){
        if($a < 0.0 || $a > 1.0){
            $a = 1.0;
        }
        for ($i = 1; $i <= 5; $i = $i+2){
            $rgb[] = hexdec(substr($hex,$i,2));
        }
        return"rgba({$rgb[0]},{$rgb[1]},{$rgb[2]},$a)";
}

function ctabtntype($cttype){
    $btncls="btn";
    $ctpos = strpos($cttype, $btncls);
    if ($ctpos === false) 
    {
    $btncls="link";    
    }
    $retclass=$btncls." ".$cttype;
    return $retclass;
}
function ctabtntypearrow($cttype){
    $btntypearrow="";
    if ( $cttype == "primary_link" ) 
    {   $pbtn=get_field('elem_primary_link','option');
        if( !empty($pbtn['elem_primary_link_arrow']) && $pbtn['elem_primary_link_enable_right_arrow'] == true ) {$btntypearrow=' <i class="'.$pbtn['elem_primary_link_arrow'].'"></i>';}
    }
    elseif( $cttype == "secondary_link" ){
        $pbtn=get_field('elem_secondary_link','option');
        if( !empty($pbtn['elem_secondary_link_arrow']) && $pbtn['elem_secondary_link_enable_right_arrow'] == true ) {$btntypearrow=' <i class="'.$pbtn['elem_secondary_link_arrow'].'"></i>';}
    }
    elseif( $cttype == "primary_btn" ){
        $pbtn=get_field('elem_primary_button','option');
        if( !empty($pbtn['elem_primary_button__arrow']) && $pbtn['elem_primary_button_enable_right_arrow'] == true ) {$btntypearrow=' <i class="'.$pbtn['elem_primary_button__arrow'].'"></i>';}
    }
    else if( $cttype == "secondary_btn" ){
        $pbtn=get_field('elem_secondary_button','option');
        if( !empty($pbtn['elem_secondary_button__arrow']) && $pbtn['elem_secondary_button_enable_right_arrow'] == true ) {$btntypearrow=' <i class="'.$pbtn['elem_secondary_button__arrow'].'"></i>';}
    }
    else
    {
        $pbtn=get_field('elem_tertiary_button','option');
        if( !empty($pbtn['elem_tertiary_button__arrow']) && $pbtn['elem_tertiary_button_enable_right_arrow'] == true ) {$btntypearrow=' <i class="'.$pbtn['elem_tertiary_button__arrow'].'"></i>';}
    }
    return $btntypearrow;
}

function html5_search_form( $form ) { 
     $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'nsc') . '</label>
     <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Looking For ..." />
     <input class="btn primary_btn" type="submit" id="searchsubmit" value="'. esc_attr__('SEARCH NOW', 'nsc') .'" />
     </form></section>';
     return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );

/*Blog comment form*/
//Comment Field Order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
   // $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;

    // done ordering, now return the fields:
    $commenter = wp_get_current_commenter();
    
    $args = wp_parse_args( $fields );
    if ( ! isset( $args['format'] ) )
        $fields['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
            
    $req = get_option( 'require_name_email' );
    $html_req = ( $req ? " required='required'" : '' );
	$html5    = 'html5' === $fields['format'];
    $aria_req = ($req) ? " aria-required='true'" : '' ;
    
        $replace_author = __('Your Name:', 'nsc');
        $replace_email = __('Your Email:', 'nsc');
        $replace_comment = __('Enter your Comment:', 'nsc');
    
    	$fields = [
    		'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" placeholder="'.$replace_author.'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
    		'email'  => '<p class="comment-form-email"><input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' placeholder="'.$replace_email.'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
    		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="'.$replace_comment.'" aria-required="true" required="required"></textarea></p>',
	    ];
    

    return $fields;
}

add_filter('comment_form_defaults', 'nsc_custom_comment_title', 20);
function nsc_custom_comment_title( $defaults ){
    $defaults['title_reply'] = __('<span>Add a Comment</span>', 'nsc');
  return $defaults;
}


//videoem - Shortcode 
function videoem_shortcode($atts) {
    extract(shortcode_atts(array(
        'id' => null,
    ), $atts));
    ob_start();?>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe id="player" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $atts['id'];?>?rel=0" allowfullscreen="allowfullscreen"></iframe>
        <div class="embed_overlay"></div>
        <a href="http://www.youtube.com/watch?v=<?php echo $atts['id'];?>" class="embed_play_icon popup_video_link"><i class="fas fa-play"></i></a>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('videoem', 'videoem_shortcode');

add_action( 'template_redirect', 'redirect_cpt_singular_news' );
function redirect_cpt_singular_news() {
  if ( is_singular('cptnews') ) {
    wp_redirect( home_url(), 302 );
    exit;
  }
}