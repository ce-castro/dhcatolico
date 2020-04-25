<?php
/**
 * SKT Hotel functions and definitions
 *
 * @package SKT Hotel
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'skt_hotel_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_hotel_setup() {
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'skt-hotel', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_image_size('homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'skt-hotel' ),
		'footer' => __( 'Footer Menu', 'skt-hotel' ),
	) );
	
	add_theme_support( 'custom-background', array(
			  'default-color' => 'ffffff',
			  'default-image' => '',
 ) );

	add_editor_style( 'editor-style.css' );
}
endif; // skt_hotel_setup
add_action( 'after_setup_theme', 'skt_hotel_setup' );

function skt_hotel_widgets_init() {    
	register_sidebar( array(
		'name'          => __( 'Sidebar Main', 'skt-hotel' ),
		'description'   => __( 'Appears on all site', 'skt-hotel' ),
		'id'            => 'sidebar-main',
		'before_widget' => '<aside id="%1$s" class="sidebar-area %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget_title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'skt-hotel' ),
		'description'   => __( 'Appears on blog page sidebar', 'skt-hotel' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<aside id="%1$s" class="sidebar-area %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget_title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget First', 'skt-hotel' ),
		'description'   => __( 'Appears on footer of the site', 'skt-hotel' ),
		'id'            => 'footer-widget-1',
		'before_widget' => '<div id="%1$s" class="cols-4 first">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Second', 'skt-hotel' ),
		'description'   => __( 'Appears on footer of the site', 'skt-hotel' ),
		'id'            => 'footer-widget-2',
		'before_widget' => '<div id="%1$s" class="cols-4 second">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Third', 'skt-hotel' ),
		'description'   => __( 'Appears on footer of the site', 'skt-hotel' ),
		'id'            => 'footer-widget-3',
		'before_widget' => '<div id="%1$s" class="cols-4 third">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Fourth', 'skt-hotel' ),
		'description'   => __( 'Appears on footer of the site', 'skt-hotel' ),
		'id'            => 'footer-widget-4',
		'before_widget' => '<div id="%1$s" class="cols-4 fourth">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Widget', 'skt-hotel' ),
		'description'   => __( 'Appears on header of the site', 'skt-hotel' ),
		'id'            => 'header-widget',
		'before_widget' => '<div class="header_info">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 style="display:none;">',
		'after_title'   => '</h5>',
	) );		
	
	
}
add_action( 'widgets_init', 'skt_hotel_widgets_init' );
add_filter('widget_text', 'do_shortcode');
add_filter('login_errors',create_function('$a', "return null;")); //Hace que WP no informe de que falla en el login

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once get_template_directory() . '/inc/options-framework.php';


function skt_hotel_scripts() {

	wp_enqueue_style( 'skt_hotel-gfonts-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' );
	wp_enqueue_style( 'skt_hotel-gfonts-roboto-condence', '//fonts.googleapis.com/css?family=Roboto Condensed:400,100,300,500,700' );
	wp_enqueue_style( 'skt_hotel-gfonts-oswald', '//fonts.googleapis.com/css?family=Oswald:400,300,700' );		
	
	if( of_get_option('bodyfontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-body', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('bodyfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin');
	}
	if( of_get_option('logofontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-logo', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('logofontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('navfontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-nav', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('navfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('headfontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-head', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('headfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('h1fontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-h1', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('h1fontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('h2fontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-h2', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('h2fontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('h3fontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-h3', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('h3fontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('h4fontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-h4', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('h4fontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('h5fontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-h5', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('h5fontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('h6fontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-h6', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('h6fontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('slidefontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-slider', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('slidefontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}	
	if( of_get_option('bookbtnfontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-button', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('bookbtnfontface',true)).':300,400,600,900' );
	}		
	if( of_get_option('threebxfontface',true) != '' ){
		wp_enqueue_style( 'skt_hotel-gfonts-button2', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('threebxfontface',true)).':300,400,600,900' );
	}

	wp_enqueue_style( 'skt_hotel-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'skt_hotel-editor-style', get_template_directory_uri()."/editor-style.css" );
	wp_enqueue_style( 'skt_hotel-nivoslider-style', get_template_directory_uri()."/css/nivo-slider.css" );	
	wp_enqueue_script( 'skt_hotel-nivo-script', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_style( 'skt_hotel-base-style', get_template_directory_uri()."/css/style_base.css" );		
	wp_enqueue_script( 'skt_hotel-custom_js', get_template_directory_uri() . '/js/custom.js' );	
	wp_enqueue_script( 'skt_hotel_js2', get_template_directory_uri() . '/js/jquery.quote_rotator.js', array('jquery') );
	wp_enqueue_style( 'skt_hotel-font-awesome-style', get_template_directory_uri().'/css/font-awesome.css' );
	wp_enqueue_style( 'skt_hotel-animation-style', get_template_directory_uri().'/css/animation.css' );
	wp_enqueue_style( 'skt_hotel-responsive-style', get_template_directory_uri().'/css/theme-responsive.css' );		
	wp_enqueue_style( 'skt_hotel-prettyphoto-style', get_template_directory_uri().'/css/prettyPhoto.css' );
	wp_enqueue_style( 'skt_hotel-3-slider-style', get_template_directory_uri().'/css/3-slider.css' );
	wp_enqueue_script( 'skt_hotel-lightbox-script', get_template_directory_uri() . '/js/lightbox.js', array('jquery') );	
	wp_enqueue_script( 'skt_hotel-bxslidermin-script', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery') );
	wp_enqueue_script( 'skt_hotel-fotorama-script', get_template_directory_uri() . '/js/fotorama.js', array('jquery') );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skt_hotel_scripts' );

function skt_hotel_custom_head_codes() { 
	echo "<style>". esc_html( of_get_option('style2', true) ) ."</style>";
	echo "<style>";		
	if ( of_get_option('bodyfontface', true) != '' || of_get_option('bodyfontsize', true) != '' || of_get_option('bodyfontcolor', true) != '' ) {
		echo "body, .logo span.tagline{font-family:".of_get_option('bodyfontface', true)."; font-size:".of_get_option('bodyfontsize', true)."; color:".of_get_option('bodyfontcolor', true).";}";
	}
			
	if ( of_get_option('navbgcolor', true) != '' || of_get_option('mobileborder', true) != '') {
		echo ".mobile_nav a{background-color:".of_get_option('navbgcolor', true)."; border:1px solid ".of_get_option('mobileborder', true).";}";
	}
		
	if ( of_get_option('navfontface', true) != '' ) {
		echo "#nav{font-family:".of_get_option('navfontface', true).";}";
	}	
	if ( of_get_option('navfontsize', true) != '' || of_get_option('navfontcolor', true) != '' ) {
		echo "#nav ul li a{font-size:".of_get_option('navfontsize', true)."; color:".of_get_option('navfontcolor', true).";}";
	}
	
	if ( of_get_option('navhovercolor', true) != '' ) {
		echo "#nav ul li a:hover,#nav ul li.parent ul li a:hover, #nav ul li.parent a{color:".of_get_option('navhovercolor', true).";}";		
	}
	
	if ( of_get_option('navfontcolor', true) != '' ) {
		echo "#nav ul li.parent ul li a{color:".of_get_option('navfontcolor', true)." ;}";		
	}
	
	if ( of_get_option('dropdownbg', true) != '' ) {
		echo "#nav ul li:hover > ul{background-color:".of_get_option('dropdownbg', true).";}";
	}
	if ( of_get_option('dropdownborder', true) != '' ) {
		echo "#nav ul li ul li a{border-top:1px solid".of_get_option('dropdownborder', true).";}";
	}	
	if( of_get_option('dropdownbg',true) != ''){
			echo "@media screen and (max-width: 767px){#nav{background:".of_get_option('dropdownbg',true)."}}";
	}
	
	if ( of_get_option('headfontface', true) != '' ) {
		echo "h1, h2, h3, h4, h5, h6{font-family:".of_get_option('headfontface', true).";}";
	}	
	if ( of_get_option('h1fontface', true) != '' || of_get_option('h1fontsize', true) != '' ||  of_get_option('h1fontcolor', true) != '' ) {
		echo "h1{font-family:".of_get_option('h1fontface', true)."; font-size:".of_get_option('h1fontsize', true)."; color:".of_get_option('h1fontcolor', true)."; }";
	}		
	
	if ( of_get_option('h2fontface', true) != '' || of_get_option('h2fontsize', true) != '' || of_get_option('h2fontcolor', true) != '' ) {
		echo "h2, .title-404, .text-404{font-family:".of_get_option('h2fontface', true)."; font-size:".of_get_option('h2fontsize', true)."; color:".of_get_option('h2fontcolor', true).";}";
	}	
	if ( of_get_option('h3fontface', true) != '' || of_get_option('h3fontsize', true) != '' || of_get_option('h3fontcolor', true) != '' ) {
		echo "h3{font-family:".of_get_option('h3fontface', true)."; font-size:".of_get_option('h3fontsize', true)."; color:".of_get_option('h3fontcolor', true).";}";
	}	
	if ( of_get_option('h4fontface', true) != '' || of_get_option('h4fontsize', true) != '' || of_get_option('h4fontcolor', true) != '' ) {
		echo "h4{font-family:".of_get_option('h4fontface', true)."; font-size:".of_get_option('h4fontsize', true)."; color:".of_get_option('h4fontcolor', true).";}";
	}	
	if ( of_get_option('h5fontface', true) != '' || of_get_option('h5fontsize', true) != '' || of_get_option('h5fontcolor', true) != '' ) {
		echo "h5{font-family:".of_get_option('h5fontface', true)."; font-size:".of_get_option('h5fontsize', true)."; color:".of_get_option('h5fontcolor', true).";}";
	}	
	if ( of_get_option('h6fontface', true) != '' || of_get_option('h6fontsize', true) != '' || of_get_option('h6fontcolor', true) != '' ) {
		echo "h6{font-family:".of_get_option('h6fontface', true)."; font-size:".of_get_option('h6fontsize', true)."; color:".of_get_option('h6fontcolor', true).";}";
	}	
		
	if ( of_get_option('logofontface', true) != '' || of_get_option('logofontsize', true) != '' || of_get_option('logofontcolor', true) != '' ) {
		echo ".logo h1{font-family:".of_get_option('logofontface', true)."; font-size:".of_get_option('logofontsize', true)."; color:".of_get_option('logofontcolor', true).";}";
	}	
	if ( of_get_option('logotagfontsize', true) != '' || of_get_option('logotagfontcolor', true) != '' ) {
		echo ".logo span.tagline{font-size:".of_get_option('logotagfontsize', true)."; color:".of_get_option('logotagfontcolor', true).";}";
	}	
	if( of_get_option('logoheight',true) != '' ){
			echo ".header .logo img{height:".of_get_option('logoheight',true)."px;}";
	}
	
	if ( of_get_option('logofontcolor', true) != '' ) {
		echo ".logo, .logo a{color:".of_get_option('logofontcolor', true)."}";
	}
	
	if ( of_get_option('logofontcolor', true) != '' ) {
		echo ".logo:hover, .logo a:hover{color:".of_get_option('logofontcolor', true)."}";
	}	
		
	if ( of_get_option('footerh3fontsize', true) != '' || of_get_option('footerheadfontcolor', true) != '' || of_get_option('footerheadborder', true) != '') {
		echo "#footer h5{font-size:".of_get_option('footerh3fontsize', true)."; color:".of_get_option('footerheadfontcolor', true)."; border-bottom:1px solid ".of_get_option('footerheadborder', true).";}";
	}		
			
	if ( of_get_option('headerbgcolor', true) != '' ) {
		echo ".header{background-color:".of_get_option('headerbgcolor', true)."}";
	}
		
	if ( of_get_option('footerbgimg', true) != '' ) {
		echo "#footer{background: url(".of_get_option('footerbgimg', true).")}";
	}		
	if ( of_get_option('footerbgcolor', true) != '' && of_get_option('footerbgimg', true) == '' ) {
		echo "#footer{background-color:".of_get_option('footerbgcolor', true)."}";
	}
	
	if ( of_get_option('footerfontsize', true) != '' || of_get_option('footerfontcolor', true) != '' ) {
		echo "#footer{font-size:".of_get_option('footerfontsize', true)."; color:".of_get_option('footerfontcolor', true).";}";
	}
	if ( of_get_option('copybgcolor', true) != '' || of_get_option('copyfontsize', true) != '' ||of_get_option('copyfontcolor', true) != '' ) {
		echo "#copyright{background-color:".of_get_option('copybgcolor', true)."; font-size:".of_get_option('copyfontsize', true)."; color:".of_get_option('copyfontcolor', true).";}";
	}
		
	if ( of_get_option('defaultbutton', true) != '' ) {
		echo ".content-area .controls li:hover, .content-area .controls li.active, .pagination ul li span.current, .pagination ul li:hover a, #commentform input#submit, .contact-form .cf_button, .wpcf7-form input[type=submit], .latest_posts a.comment-count, a.added_to_cart, .pricing_table .tf a{background-color:".of_get_option('defaultbutton', true).";}";
	}	
		
	if ( of_get_option('linkcolor', true) != '' ) {
		echo "a{color:".of_get_option('linkcolor', true).";}";
	}
	if ( of_get_option('linkcolor', true) != '' ) {
		echo ".search-form .search-submit{background-color:".of_get_option('linkcolor', true).";}";
	}
	if ( of_get_option('linkhovercolor', true) != '' ) {
		echo "a:hover{color:".of_get_option('linkhovercolor', true).";}";
	}
	
	if ( of_get_option('footerlinkcolor', true) != '' ) {
		echo "#footer a, #copyright a{color:".of_get_option('footerlinkcolor', true).";}";
	}
	if ( of_get_option('chfontcolor', true) != '' ) {
		echo ".contact_info h5{color:".of_get_option('chfontcolor', true).";}";
	}
	
	if ( of_get_option('footerlinkhovercolor', true) != '' ) {
		echo "#footer a:hover, #copyright a:hover{color:".of_get_option('footerlinkhovercolor', true).";}";
	}	
	if ( of_get_option('footercurrentmenu', true) != '' ) {
		echo "#footer ul li a:hover, #footer ul li.current_page_item a{color:".of_get_option('footercurrentmenu', true).";}";
	}		
	if ( of_get_option('latestnewstitle', true) != '' ) {
		echo "#footer .post-grid h6{color:".of_get_option('latestnewstitle', true).";}";
	}	
	if ( of_get_option('socialiconcolor', true) != '' ) {
		echo ".social-icons a{background-color:".of_get_option('socialiconcolor', true)."; }";
	}
	if ( of_get_option('socialiconhovercolor', true) != '' || of_get_option('footerlinkcolor', true) != '' ) {
		echo "#footer .social-icons a:hover{background-color:".of_get_option('socialiconhovercolor', true)."; color:".of_get_option('footerlinkcolor', true)."; }";
	}
	if ( of_get_option('tmnborder', true) != '' ) {
		echo "#testimonials li img{border:3px solid ".of_get_option('tmnborder', true)."; }";
	}	
	if ( of_get_option('slidernav', true) != '' ) {
		echo ".theme-default .nivo-controlNav a{background-color:".of_get_option('slidernav', true).";}";
	}	
	if ( of_get_option('slidernavhover', true) != '' ) {
		echo ".theme-default .nivo-controlNav a.active, #commentform input#submit:hover{background-color:".of_get_option('slidernavhover', true).";}";
	}
	
	$sldhex = of_get_option('slidercaption',true); 
	list($r,$g,$b) = sscanf($sldhex,'#%02x%02x%02x');
	if ( of_get_option('slidercaption', true) != '' ) {
		echo ".nivo-caption{background-color:rgba(".$r.",".$g.",".$b.",".of_get_option('slideropacity',true).");}";
	}	
	if ( of_get_option('slidefontface', true) != '' || of_get_option('slidefontsize', true) != '' || of_get_option('slidefontcolor', true) != '' ) {
		echo ".nivo-caption h2{font-family:".of_get_option('slidefontface', true)."; font-size:".of_get_option('slidefontsize', true)."; color:".of_get_option('slidefontcolor', true)." }";
	}	
	
	if ( of_get_option('slideborder', true) != '' ) {
		echo ".theme-default .nivo-controlNav a{ border:1px solid".of_get_option('slideborder', true)."; }";
	}
	
	if ( of_get_option('bookbtnbgcolor', true) != '' || of_get_option('bookbtnfontface', true) != '' || of_get_option('bookbtnfontsize', true) != '' || of_get_option('bookbtnfontcolor', true) != '' || of_get_option('bookbtnborder', true) != '' ) {
		echo ".bookbtn{background-color:".of_get_option('bookbtnbgcolor', true)."; font-family:".of_get_option('bookbtnfontface', true)."; font-size:".of_get_option('bookbtnfontsize', true).";color:".of_get_option('bookbtnfontcolor', true).";  border:1px solid".of_get_option('bookbtnborder', true)."; }";
	}
	if ( of_get_option('bookbtnfonthover', true) != '' ) {
		echo ".bookbtn:hover{color:".of_get_option('bookbtnfonthover', true)."; }";
	}
	
	if ( of_get_option('readmorebtn', true) != '' || of_get_option('readmorebordercolor', true) != '' || of_get_option('readmorefontcolor', true) != '' ) {
		echo ".read-more{background-color:".of_get_option('readmorebtn', true)."; border:1px solid".of_get_option('readmorebordercolor', true)."; color:".of_get_option('readmorefontcolor', true).";}";
	}
	if ( of_get_option('readmorehover', true) != '' ) {
		echo ".read-more:hover{ color:".of_get_option('readmorehover', true).";}";
	}	
		
	if ( of_get_option('sidebarlinkcolor', true) != '' ) {
		echo ".sidebar-area ul li a{color:".of_get_option('sidebarlinkcolor', true)."; }";
	}	
	if ( of_get_option('sidebarlinkhover', true) != '' ) {
		echo ".sidebar-area ul li a:hover{color:".of_get_option('sidebarlinkhover', true)."; }";
	}
	
	if ( of_get_option('libg', true) != '' || of_get_option('lifontsize', true) != '' || of_get_option('liborder', true) != '' ) {
		echo ".servicespart ul li{background-color:".of_get_option('libg', true)."; font-size:".of_get_option('lifontsize', true)."; border:1px solid".of_get_option('liborder', true).";}";
	}	
	if ( of_get_option('libghover', true) != '' ) {
		echo ".servicespart ul li:hover{background-color:".of_get_option('libghover', true)."; }";
	}	
	if ( of_get_option('lifontcolor', true) != '' ) {
		echo ".servicespart ul li a{ color:".of_get_option('lifontcolor', true).";}";
	}
	if ( of_get_option('threebxbg', true) != '' ) {
		echo ".news-events-wrap .hold-3box{background-color:".of_get_option('threebxbg', true)."; }";
	}
	if ( of_get_option('threebxfontface', true) != '' || of_get_option('threebxfontsize', true) != '' || of_get_option('threebxfontcolor', true) != '' ) {
		echo ".news-events-wrap h6{font-family:".of_get_option('threebxfontface', true)."; font-size:".of_get_option('threebxfontsize', true)."; color:".of_get_option('threebxfontcolor', true)."; }";
	}
	
	if ( of_get_option('threebxfontcolorhv', true) != '' ) {
		echo ".news-events-wrap h6:hover, .our-rooms h4:hover, .list-cuisines li a:hover{ color:".of_get_option('threebxfontcolorhv', true).";}";
	}
	
	echo "</style>";
}
add_action('wp_head', 'skt_hotel_custom_head_codes');


function skt_hotel_slide_set(){
		?>
        <script>
			jQuery.noConflict();
			jQuery(window).load(function() {			
				jQuery('#slider').nivoSlider({ 
						effect:'<?php echo of_get_option('slideefect',true); ?>', //sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse
		  	animSpeed: <?php echo of_get_option('slideanim',true); ?>,
			pauseTime: <?php echo of_get_option('slidepause',true); ?>,
			directionNav: <?php echo of_get_option('slidenav',true); ?>,
			controlNav: <?php echo of_get_option('slidepage',true); ?>,
			pauseOnHover: <?php echo of_get_option('slidepausehover',true); ?>,
				 });				
});

 
jQuery(document).ready(function() {
jQuery.quote_rotator = {
    defaults: {
      rotation_speed: <?php echo of_get_option('rotationtestimonials'); ?>,
      pause_on_hover: true,
      randomize_first_quote: false,
      buttons: false
    }
  }
 
});
		
		
	

		</script>
<?php 
}
add_action('wp_head','skt_hotel_slide_set');


function skt_hotel_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load custom functions file.
 */
require get_template_directory() . '/inc/custom-functions.php';


function skt_hotel_custom_blogpost_pagination( $wp_query ){
	$big = 999999999; // need an unlikely integer
	if ( get_query_var('paged') ) { $pageVar = 'paged'; }
	elseif ( get_query_var('page') ) { $pageVar = 'page'; }
	else { $pageVar = 'paged'; }
	$pagin = paginate_links( array(
		'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' 		=> '?'.$pageVar.'=%#%',
		'current' 		=> max( 1, get_query_var($pageVar) ),
		'total' 		=> $wp_query->max_num_pages,
		'prev_text'		=> '« Prev',
		'next_text' 	=> 'Next »',
		'type'  => 'array'
	) ); 
	if( is_array($pagin) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $pagin as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	} 
}

// get slug by id
function skt_hotel_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

// Add custom script in admin footer
function custom_admin_footer_js() {
	echo '<script>
		var nums = jQuery("#numsection").val();
		jQuery(".toggle_title h3").addClass("toggleTitle");
		jQuery(".toggle_title").each( function( index ){
			jQuery( "#section-sectiontitle"+(index+1)+", #section-sectioncontent"+(index+1)+", #section-menutitle"+(index+1)+", #section-sectionbgcolor"+(index+1)+", #section-sectionbgimage"+(index+1)+", #section-hidesec"+(index+1)+", #section-sectionclass"+(index+1) ).wrapAll( "<div class=\'toggle_wrapper\' />");
		});
		jQuery(".toggle_title h3").click( function(){
			jQuery(this).parent().next().slideToggle();
		});
	</script>"';
}
add_action('admin_footer', 'custom_admin_footer_js');

function remove_header_menu(){
	remove_submenu_page( 'themes.php', 'custom-header' );
}
add_action( 'admin_menu', 'remove_header_menu', 999 );

function skt_hotel_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'skt_hotel_excerpt_length' );

function string_limit_words($string, $word_limit){
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}


//Redirect all successful subscription submissions to a 'thank-you' page
//-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
function jeherve_custom_sub_redirect_page( $result ) {
	if ( 'already' === $result ) {
        $thanks_page = '/base_trasnochers';
        wp_safe_redirect( $thanks_page );
        exit;
    }
    if ( 'success' === $result ) {
        $thanks_page = '/base_trasnochers';
        wp_safe_redirect( $thanks_page );
        exit;
    }
}
add_action( 'jetpack_subscriptions_form_submission', 'jeherve_custom_sub_redirect_page' );  

//
//
////Redireccionar TODOS los formularios 
function add_this_script_footer(){ ?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://dhcatolico.com/recibido/';
}, false );
</script>
 
<?php } 
 
add_action('wp_footer', 'add_this_script_footer'); 


/*<?php
	
//Redirect to Thank you Page if page name is "contact"
if ( is_page('contact')) {
?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://example.com/thank-you';
}, false );
</script>
<?php } ?>
*/