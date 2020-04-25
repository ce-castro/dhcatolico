<?php
/**
 * @package SKT Hotel
 * Setup the WordPress core custom functions feature.
 *
*/
error_reporting(0);

//[code type=php]
function highlight_code_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'php',
	), $atts ) );

	$hlCode = '<pre class="brush: php;">' . str_replace( array('<pre>','</pre>'), array('&lt;pre&gt;','&lt;/pre&gt;'), $content ) . '</pre>';;

	return $hlCode;
}
add_shortcode( 'code', 'highlight_code_func' );


// get_the_content format text
function get_the_content_format( $str ){
	$raw_content = apply_filters( 'the_content', $str );
	$content = str_replace( ']]>', ']]&gt;', $raw_content );
	//$content = str_replace('<p>', '',$raw_content);
	return $content;
}
// the_content format text
function the_content_format( $str ){
	echo get_the_content_format( $str );
}

// subhead section function
function sub_head_section( $more ) {
	$pgs = 0;
	do {
		$pgs++;
	} while ($more > $pgs);
	return $pgs;
}

function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );

function separator_shortcode_func($atts ) {
	extract( shortcode_atts( array(
		'height' => '50',
	), $atts ) );
	$sptr = '<div style="clear:both; min-height:20px; margin:25px 0; height:'.$height.'px; background:url('.get_template_directory_uri().'/images/hr_double.png) repeat-x center center transparent;"></div>';
	return $sptr;
}
add_shortcode( 'separator', 'separator_shortcode_func' );

function space_shortcode_func($atts ) {
	extract( shortcode_atts( array(
		'height' => '20',
	), $atts ) );
	$spcr = '<div style="clear:both; min-height:20px; height:'.$height.'px;"></div>';
	return $spcr;
}
add_shortcode( 'space', 'space_shortcode_func' );

function blankspace_shortcode_func($atts ) {
	extract( shortcode_atts( array(
		'height' => '20',
	), $atts ) );
	$bkspc = '<div style=" min-height:20px; height:'.$height.'px;"></div>';
	return $bkspc;
}
add_shortcode( 'blankspace', 'blankspace_shortcode_func' );

// shortcode for custom width
function skt_hotel_custom_width_func($atts, $content = null){
		extract(shortcode_atts(array(
			'width'		=> 'width',						
			'class'		=> null
		), $atts));
		return '<div class="'.$class.'" style="width:'.$width.';">'.do_shortcode($content).'</div>';		
}

add_shortcode('area','skt_hotel_custom_width_func');

function gradient_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'center',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"grad-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'gradient_button', 'gradient_button_func' );

function simple_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"simple-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'simple_button', 'simple_button_func' );

function round_button_func( $atts ) {
	extract( shortcode_atts( array(
		'style' => 'dark',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"round-btn-{$style} round-btn btn-align-{$position}\">";
	$btn .= "<span>{$text}</span></a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'round_button', 'round_button_func' );

function msg_box_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'info',
		'bg_color' => '#f6f6f6',
		'color' => '#333',
		'start_color' => "#fff",
		'end_color' => "#eee",
		'border' => "#ccc",
		'align' => '',
		'width' => '100%',
	), $atts ) );
	$msg = '';

	if($type == 'success'){
		$msg  = '<div class="msg-success"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'success' style message box shortcode. To use this style use the following shortcode" : $content;
		$msg .= '</div></div>';
	}elseif($type == 'error'){
		$msg  = '<div class="msg-error"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'error' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'warning'){
		$msg  = '<div class="msg-warning"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'warning' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'info'){
		$msg  = '<div class="msg-info"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'info' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'about'){
		$msg  = '<div class="msg-about"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'about' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'custom'){
		$msg  = "<div style=\"width:{$width};\" class=\"msg-align-{$align}\"><div class=\"msg-custom\" style=\"background-color:{$end_color}; background: -moz-linear-gradient(center top , {$start_color}, {$end_color}); background: -webkit-gradient(linear, 0% 0%, 0% 100%, from({$start_color}), to({$end_color})); background: -webkit-linear-gradient(top, {$start_color}, {$end_color}); background: -ms-linear-gradient(top, {$start_color}, {$end_color}); background: -o-linear-gradient(top, {$start_color}, {$end_color}); border:1px {$border} solid; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div></div><div class="clear"></div>';
	}elseif($type == 'simple'){
		$msg  = "<div class=\"msg-simple\" style=\"background-color:{$bg_color}; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div>';
	}
	return $msg;
}
add_shortcode( 'message', 'msg_box_func' );

function pullquote_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'align' => '',
	), $atts ) );
	$quote = ($content == '' ) ? "<blockquote class=\"align-{$align}\">This is a pullquote. Lorem ipsum dolor sit amet, consectetur adipiscing elit sed pharetra aliquet metus.</blockquote>" : "<blockquote class=\"align-{$align}\">$content</blockquote>";

	return $quote;
}
add_shortcode( 'pullquote', 'pullquote_func' );

function toggle_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Click here to toggle content',
	), $atts ) );
	$tog_content = "<div class=\"toggle_holder\"><h3 class=\"slide_toggle\"><a href=\"#\">{$title}</a></h3>
					<div class=\"slide_toggle_content\">".get_the_content_format( $content )."</div></div>";

	return $tog_content;
}
add_shortcode( 'toggle_content', 'toggle_func' );

function tabs_func( $atts, $content = null ) {
	$tabs = '<div class="tabs-wrapper"><ul class="tabs">'.do_shortcode($content).'</ul></div>';
	return $tabs;
}
add_shortcode( 'tabs', 'tabs_func' );

function tab_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Tab Title',
	), $atts ) );
	$rand = rand(100,999);
	$tab = '<li><a rel="tab'.$rand.'" href="javascript:void(0)"><span>'.$title.'</span></a><div id="tab'.$rand.'" class="tab-content">'.get_the_content_format($content).'</div></li>';
	return $tab;
}
add_shortcode( 'tab', 'tab_func' );

function accordion_func( $atts, $content = null ) {
	$acc = '<div class="accordion-wrapper">'.get_the_content_format( do_shortcode($content) ).'<div class="clear"></div></div>';
	return $acc;
}
add_shortcode( 'accordion', 'accordion_func' );

function accordion_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Accordion Title',
	), $atts ) );
	$content = wpautop(trim($content));
	$acn = '<h3 class="accordion-toggle"><a href="#">'.$title.'</a></h3>
			<div class="accordion-container">
				<div class="content-block">'.$content.'</div>
			</div>';
	return $acn;
}
add_shortcode( 'accordion_content', 'accordion_content_func' );

//[column_content]Your content here...[/column_content]
function column_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => '',
		'animation' => '',
	), $atts ) );
	$colPos = strpos($type, '_last');
	if($colPos === false){
		$cnt = '<div class="'.$type.' '.$animation.'">'.do_shortcode($content).'</div>';
	}else{
		$type = substr($type,0,$colPos);
		$cnt = '<div class="'.$type.' '.$animation.' last_column">'.do_shortcode($content).'</div>';
	}
	return $cnt;
}
add_shortcode( 'column_content', 'column_content_func' );


function hrule_func() {
	$hrule = '<hr>';
	return $hrule;
}
add_shortcode( 'hr', 'hrule_func' );


function hr_top_func() {
	$hr_top = '<div class="clear linktotop"><a title="Top of Page" href="#top">Back to Top</a></div><hr>';
	return $hr_top;
}
add_shortcode( 'hr_top', 'hr_top_func' );

function dropcap_func( $atts, $content = null ) {
	$dcap = '<span class="dropcap">'.$content.'</span>';
	return $dcap;
}
add_shortcode( 'dropcap', 'dropcap_func' );


function unorderedlist_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => 'list-1',
	), $atts ) );
	$content = wpautop(trim($content));
	$ulist = '<ul class="'.$style.'">'.$content.'</ul>';
	return $ulist;
}
add_shortcode( 'unordered_list', 'unorderedlist_func' );


function searchform_shortcode_func( $atts ){
	return get_search_form( false );
}
add_shortcode( 'searchform', 'searchform_shortcode_func' );

function new_excerpt_more( $more ) {
	return '... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


function getPostCategories(){
	$categories = get_the_category();
	$catOut = '';
	$separator = ', ';
	$catOutput = '';
	if($categories){
		foreach($categories as $category) {
			$catOutput .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'skt-hotel' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		$catOut = ''.trim($catOutput, $separator);
	}
	return $catOut;
}

function str_lreplace($search, $replace, $subject){
	$pos = strrpos($subject, $search);
	if($pos !== false){
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}

function recentposts_func( $atts ) {
   extract( shortcode_atts( array(
		'show' => 3,
	), $atts ) );

	$bposts = '';
	$args = array( 'posts_per_page' => $show, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {
		while ( have_posts() ) { 
			$n++;
			the_post();
			$bposts .= '<div class="post-grid '.( ( $n%2==0 ) ? "last-cols" : "" ) .'">
			 <div class="left-postthumb"><a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), array(65,65) ) != '') ? get_the_post_thumbnail( get_the_ID(), array(65,65)) : '<img src="'.get_template_directory_uri().'/images/img_404.png" />' ).'</a></div>				
				<a href="'.get_permalink().'" title="'.get_the_title().'"><h6>'.get_the_title().'</h6></a>				 
				<p>'.skt_hotel_string_limit_words(get_the_excerpt(),10).'</p>
			</div>';
		}
	}else{
		$bposts = '<p>Sorry! There are no recent posts.</p>';
	}
	wp_reset_query();	
    return $bposts;
}
add_shortcode( 'recentposts', 'recentposts_func' );

function contactform_func( $atts ) {
    $atts = shortcode_atts( array(
        'to_email' => get_bloginfo('admin_email'),
		'title' => 'Contact enquiry - '.get_bloginfo('url'),
    ), $atts );

	$cform = '';

	$cerr = array();
	if( isset($_POST['c_submit']) && $_POST['c_submit']=='Submit' ){
		$name 			= trim( $_POST['c_name'] );
		$email 			= trim( $_POST['c_email'] );
		$phone 			= trim( $_POST['c_phone'] );
		$comments 		= trim( $_POST['c_comments'] );
		$captcha 		= trim( $_POST['c_captcha'] );
		$captcha_cnf	= trim( $_POST['c_captcha_confirm'] );

		if( !$name )
			$cerr['name'] = 'Please enter your name.';
		if( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) 
			$cerr['email'] = 'Please enter a valid email.';
		if( !$phone )
			$cerr['phone'] = 'Please enter your phone number.';
		if( !$comments )
			$cerr['comments'] = 'Please enter your question / comments.';
		if( !$captcha || (md5($captcha) != $captcha_cnf) )
			$cerr['captcha'] = 'Please enter the correct answer';

		if( count($cerr) == 0 ){
			$subject = $atts['title'];
			$headers = "From: ".$name." <" . strip_tags($email) . ">\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			$message = '<html><body>
							<table>
								<tr><td>Name: </td><td>'.$name.'</td></tr>
								<tr><td>Email: </td><td>'.$email.'</td></tr>
								<tr><td>Phone: </td><td>'.$phone.'</td></tr>
								<tr><td>Comments: </td><td>'.$comments.'</td></tr>
							</table>
						</body>
					</html>';
			mail( $atts['to_email'], $subject, $message, $headers);
			$cform .= '<div class="success_msg">Thank you! A representative will get back to you very shortly.</div>';
		}
	}
	
	$capNum1 	= rand(1,4);
	$capNum2 	= rand(1,5);
	$capSum		= $capNum1 + $capNum2;
	$sumStr		= $capNum1." + ".$capNum2 ." = ";
	$cform .= "<div class=\"contact-form\">";
	$cform .= "<form method=\"post\" action=\"\">";
	$cform .= "<p><input type=\"text\" class=\"cf_text\" placeholder=\"Name\" value=\"". ( ( empty($name) == false ) ? $name : "" ) ."\" name=\"c_name\" /> 
	<span class=\"error_msg\">".( ( empty($cerr["name"]) == false ) ? $cerr["name"] : "" ) ."</span></p>";
	$cform .= "<p><input type=\"text\" class=\"cf_text\" placeholder=\"Email\" value=\"". ( ( empty($email) == false ) ? $email : "" ) ."\" name=\"c_email\" />
	<span class=\"error_msg\">".( ( empty($cerr["email"]) == false ) ? $cerr["email"] : "" ) ."</span></p>";
	$cform .= "<p><input type=\"tel\" class=\"cf_text\" placeholder=\"Phone\" value=\"". ( ( empty($phone) == false ) ? $phone : "" ) ."\" name=\"c_phone\" />
	<span class=\"error_msg\">".( ( empty($cerr["phone"]) == false ) ? $cerr["phone"] : "" ) ."</span></p>";
	$cform .= "<p><textarea class=\"cf_textarea\" placeholder=\"Question / Comments\" rows=\"10\" name=\"c_comments\">". ( ( empty($comments) == false ) ? $comments : "" ) ."</textarea>
	<span class=\"error_msg\">".( ( empty($cerr["comments"]) == false ) ? $cerr["comments"] : "" ) ."</span></p>";
	$cform .= "<p>$sumStr<input type=\"text\" class=\"cf_captcha\" placeholder=\"Captcha\" value=\"". ( ( empty($captcha) == false ) ? $captcha : "" ) ."\" name=\"c_captcha\" /> 
	<input type=\"hidden\" name=\"c_captcha_confirm\" value=\"". md5($capSum)."\">";
	$cform .= "<input class=\"cf_button\" type=\"submit\" value=\"Submit\" name=\"c_submit\" />";
	$cform .= "<span class=\"error_msg\">".( ( empty($cerr["captcha"]) == false ) ? $cerr["captcha"] : "" ) ."</span>";
	$cform .= "</p></form></div>";

    return $cform;
}
add_shortcode( 'contactform', 'contactform_func' );


function pricing_table_shortcode_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'columns' => '4',
	), $atts ) );
	$ptbl = '<div class="pricing_table pcol'.$columns.'">'.do_shortcode( str_replace(array('<br />','\t','\n','\r','\0'.'\x0B'), array('','','','','',''), $content) ) .'<div class="clear"></div></div>';
	return $ptbl;
}
add_shortcode( 'pricing_table', 'pricing_table_shortcode_func' );

function price_column_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'highlight' => '',
		'bgcolor' => '',
	), $atts ) );
	$pcol = '<div class="price_col '.( (strtolower($highlight) == 'yes') ? 'highlight' : '' ).'" '.( ($bgcolor!='') ? 'style="background-color:'.$bgcolor.' !important;"' : '' ) .'>'.do_shortcode( $content ) .'</div>';
    return $pcol;
}
add_shortcode( 'price_column', 'price_column_func' );

function price_column_header_func( $atts, $content = null ) {
	$pheader = '<div class="th">'.strip_tags($content).'</div>';
    return $pheader;
}
add_shortcode( 'price_header', 'price_column_header_func' );

function price_column_footer_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'link' => '#',
	), $atts ) );
	$pfooter = '<div class="tf"><a href="'.$link.'">'.strip_tags($content).'</a></div>';
    return $pfooter;
}
add_shortcode( 'price_footer', 'price_column_footer_func' );

function price_row_footer_func( $atts, $content = null ) {
	$prow = '<div class="td">'.$content.'</div>';
    return $prow;
}
add_shortcode( 'price_row', 'price_row_footer_func' );

// function for word limit
function limit_words($str,$len){
	$strAr = explode(' ',$str);
	$strSl = array_slice($strAr,0,$len);
	return implode(' ', $strSl);
}

function skt_hotel_string_limit_words($string, $word_limit){
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

//custom post type for Our photogallery
function my_custom_post_photogallery() {
	$labels = array(
		'name'               => __( 'Photo Gallery','skt-bakery' ),
		'singular_name'      => __( 'Photo Gallery','skt-bakery' ),
		'add_new'            => __( 'Add New','skt-bakery' ),
		'add_new_item'       => __( 'Add New Image ','skt-bakery' ),
		'edit_item'          => __( 'Edit Image','skt-bakery' ),
		'new_item'           => __( 'New Image','skt-bakery' ),
		'all_items'          => __( 'All Images','skt-bakery' ),
		'view_item'          => __( 'View Image','skt-bakery' ),
		'search_items'       => __( 'Search Images','skt-bakery' ),
		'not_found'          => __( 'No images found','skt-bakery' ),
		'not_found_in_trash' => __( 'No images found in the Trash','skt-bakery' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Photo Gallery'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Photo Gallery',
		'public'        => true,
		'menu_icon'		=> 'dashicons-format-image',
		'menu_position' => null,
		'supports'      => array( 'title', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'photogallery', $args );
}
add_action( 'init', 'my_custom_post_photogallery' );


//  register gallery taxonomy
register_taxonomy( "gallerycategory", 
	array("photogallery"), 
	array(
		"hierarchical" => true, 
		"label" => "Gallery Category", 
		"singular_label" => "Photo Gallery", 
		"rewrite" => true
	)
);

add_action("manage_posts_custom_column",  "photogallery_custom_columns");
add_filter("manage_edit-photogallery_columns", "photogallery_edit_columns");
function photogallery_edit_columns($columns){
	$columns = array(
		"cb" => '<input type="checkbox" />',
		"title" => "Gallery Title",
		"pcategory" => "Gallery Category",
		"view" => "Image",
		"date" => "Date",
	);
	return $columns;
}
function photogallery_custom_columns($column){
	global $post;
	switch ($column) {
		case "pcategory":
			echo get_the_term_list($post->ID, 'gallerycategory', '', ', ','');
		break;
		case "view":
			the_post_thumbnail('thumbnail');
		break;
		case "date":

		break;
	}
}


// portfolio shortcodes example 2
function portfolio2_shortcode($porttb){
	extract(shortcode_atts(array(
		'cat'	=> '',
	), $porttb));
	$skt_var_first = '<div class="fotorama" data-nav="thumbs">';
	query_posts('post_type=photogallery&posts_per_page=-1&gallery_category='.$cat.''); 
	if(have_posts() ) : while( have_posts() ) : the_post(); 
		if( has_post_thumbnail() ){
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
			$ImagesSrc = $large_image_url[0];
			$skt_var_first .= '<a href="'.$ImagesSrc.'"><img src="'.$ImagesSrc[0].'" alt="" /></a>';
		}
    endwhile; endif;
	wp_reset_query(); 
	$skt_var_first .= '</div>';
	return $skt_var_first;
}
add_shortcode('portfolio-thumbnail','portfolio2_shortcode');

// portfolio shortcode example 3
function portfolio3_shortcode($portsl){
	extract(shortcode_atts(array(
		'cat'	=> '',
	), $portsl));
	$skt_var = '<div class="slider6">';
             query_posts('post_type=photogallery&showposts=-1&gallery_category='.$cat.''); 
             while( have_posts() ) : the_post(); 
             $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			 $thumbnailSrc = $large_image_url[0];
              $skt_var .= '<div class="slide"><img src="'.$thumbnailSrc.'" alt="" /></div>';
			 endwhile;
             wp_reset_query() ;
             $skt_var .='</div>';
		return $skt_var;
}
add_shortcode('portfolio-slider','portfolio3_shortcode' );

//[portfolio show=3]
function portfolio_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => -1,
		'cat' => ''
	), $atts ) );
	$pfStr = '';
	
		
	 $pfStr .= '<div class="image-row">';
		$pfStr .= '<div class="image-set">';
	 query_posts('post_type=photogallery&showposts=-1&gallery_category='.$cat.'');
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		$imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$terms = wp_get_post_terms( get_the_ID(), 'portfoliocategory');
		$categoryId = $terms->term_id;
		$pfStr .= '<a class="example-image-link" href="'.$imgSrc[0].'" data-lightbox="example-set" data-title="'.get_the_title().'">';
		$pfStr .='<img class="example-image" src="'.$imgSrc[0].'" />';
		$pfStr .= '<span class="zoomin"></span></a>';
	endwhile; else: 
		$pfStr .= '<p>Sorry, portfolio is empty.</p>';
	endif; 
	wp_reset_query();
		$pfStr .= '</div>';
		$pfStr .= '</div>';
	return $pfStr;
}
add_shortcode( 'portfolio', 'portfolio_func' );


//Team Member post type
function teammemberbox_func( $atts ) {
   extract( shortcode_atts( array(
		'col' => 4,
	), $atts ) );

	$teamposts = '<div class="team-member">';
	$args = array( 'post_type' => 'team', 'posts_per_page' => $col );	
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {
		while ( have_posts() ) { 
			$n++;
			the_post();
			if( $col == 1 ){
				$teamposts .= '<div class="full_width team-col';
			}elseif( $col == 2 ){
				$teamposts .= '<div class="one_half team-col';
			}elseif( $col == 3 ){
				$teamposts .= '<div class="one_third team-col';
			}elseif( $col == 4 ){
				$teamposts .= '<div class="one_fourth team-col';
			}elseif( $col == 5 ){
				$teamposts .= '<div class="one_fifth team-col';
			}
			if( $n == $col ) {
				$teamposts .= ' last_column">';
			} else {
				$teamposts .= '">';
			}
			$teamposts .= ''.get_the_post_thumbnail().'
							<div class="team-desc"><h6>'.get_the_title().'</h6>
							<span>'.get_post_meta( get_the_ID(), 'team_position', true ).'</span>
							<p>'.get_the_content().'</p>
							<div class="social-links">
								 <a class="fa fa-facebook fa-1x" target="_blank" href="'.get_post_meta( get_the_ID(), 'fb_url',true ).'"></a>
								 <a class="fa fa-twitter fa-1x" target="_blank" href="'.get_post_meta( get_the_ID(), 'tw_url',true ).'"></a>
								 <a class="fa fa-linkedin fa-1x" target="_blank" href="'.get_post_meta( get_the_ID(), 'in_url',true ).'"></a>
								 <a class="fa fa-behance fa-1x bnone" target="_blank" href="'.get_post_meta( get_the_ID(), 'behance_url',true ).'"></a>							
							</div>
							</div>					
					</div>';
		}
	}else{
		$teamposts .= '<p>Sorry! There are no team member found add from left side admin panel below the photo gallery.</p>';
	}
	wp_reset_query();
	$teamposts .= '<div class="clear"></div></div>';
    return $teamposts;
}
add_shortcode( 'teammember', 'teammemberbox_func' );


//custom post type for Team
function my_custom_post_team() {
	$labels = array(
		'name'               => __( 'Team Members' ),
		'singular_name'      => __( 'Team Members' ),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New' ),
		'edit_item'          => __( 'Edit Team Member' ),
		'new_item'           => __( 'New Team Member' ),
		'all_items'          => __( 'All Team Members' ),
		'view_item'          => __( 'View Team Member' ),
		'search_items'       => __( 'Search Team Members' ),
		'not_found'          => __( 'No team members found' ),
		'not_found_in_trash' => __( 'No team members found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Our Teams'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage team members',
		'public'        => true,
		'menu_position' => null,
		'menu_icon'		=> 'dashicons-groups',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'team', $args );	
}
add_action( 'init', 'my_custom_post_team' );


// add meta box to team
add_action( 'admin_init', 'my_team_admin' );
function my_team_admin() {
    add_meta_box( 'team_meta_box',
        'Team Member Info',
        'display_team_meta_box',
        'team', 'normal', 'high'
    );
}

// add meta box form to teammember
function display_team_meta_box( $team ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $position = esc_html( get_post_meta( $team->ID, 'team_position', true ) );
	$fburl = esc_html( get_post_meta( $team->ID, 'fb_url', true ) );
	$twurl = esc_html( get_post_meta( $team->ID, 'tw_url', true ) );
	$inurl = esc_html( get_post_meta( $team->ID, 'in_url', true ) );
	$beurl = esc_html( get_post_meta( $team->ID, 'behance_url', true ) );
    ?>
    <table width="100%">
        <tr>
            <td width="20%">Team member position</td>
            <td width="80%"><input type="text" size="80" name="team_position" value="<?php echo $position; ?>" /></td>
        </tr>
         <tr>
            <td width="20%">Facebook url</td>
            <td width="80%"><input type="text" size="80" name="fb_url" value="<?php echo $fburl; ?>" /></td>
        </tr>
         <tr>
            <td width="20%">Twitter url</td>
            <td width="80%"><input type="text" size="80" name="tw_url" value="<?php echo $twurl; ?>" /></td>
        </tr>        
        <tr>
            <td width="20%">Linkedin url</td>
            <td width="80%"><input type="text" size="80" name="in_url" value="<?php echo $inurl; ?>" /></td>
        </tr>
         <tr>
            <td width="20%">Behance url</td>
            <td width="80%"><input type="text" size="80" name="behance_url" value="<?php echo $beurl; ?>" /></td>
        </tr>
    </table>
    <?php
}

// save team meta box form data
add_action( 'save_post', 'add_team_fields', 10, 2 );
function add_team_fields( $team_id, $team ) {
    // Check post type for team
    if ( $team->post_type == 'team' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['team_position'] ) && $_POST['team_position'] != '' ) {
            update_post_meta( $team_id, 'team_position', $_POST['team_position'] );
        }
		
	    if ( isset( $_POST['fb_url'] ) && $_POST['fb_url'] != '' ) {
            update_post_meta( $team_id, 'fb_url', $_POST['fb_url'] );
        }
		
	   if ( isset( $_POST['tw_url'] ) && $_POST['tw_url'] != '' ) {
            update_post_meta( $team_id, 'tw_url', $_POST['tw_url'] );
        }
		
		if ( isset( $_POST['in_url'] ) && $_POST['in_url'] != '' ) {
            update_post_meta( $team_id, 'in_url', $_POST['in_url'] );
        }
		
	   if ( isset( $_POST['behance_url'] ) && $_POST['behance_url'] != '' ) {
            update_post_meta( $team_id, 'behance_url', $_POST['behance_url'] );
        }
		
    }
}

/*Custom post type Testimonials*/
function skt_hotel_custom_testimonails() {
	$return_string = '';
   query_posts('post_type=testimonial&showposts=10'); 
   if ( have_posts() ) : 
      $return_string .= '<ul id="testimonials">';	  
       while ( have_posts() ) : the_post();
	     $return_string .= '<li class="list_testimonials">';		
		 $return_string .= '<p>'.get_the_content().'</p>';
		 $return_string .= ''.get_the_post_thumbnail( get_the_ID(), array(76,76) ).'';		
		 $return_string .= '<cite> '.get_the_title().'</cite>'; 	
		 $return_string .= '</li>'; 	
		 
      endwhile;		 
	  $return_string .= '</ul>';
	   
	  else:
	  $return_string = '<ul id="testimonials">
	  			<li class="list_testimonials">                   
                    <p>Aliquam pulvinar vehicula ante vehicula egestas. Vivamus convallis hendrerit gravida. Donec dui erat, mollis sed eros sed, molestie malesuada lectus. Pellentesque eu sem diam. Morbi consequat, ante eget tincidunt pellentesque, justo libero commodo leo, ac feugiat libero enim hendrerit mauris.</p>
					<img src="'.get_template_directory_uri().'/images/client-thumb.jpg" alt="" /> 
					<cite>Jennifer Brown</cite>
				</li>
				
				<li class="list_testimonials">                   
                    <p>Lorem Aliquam pulvinar vehicula ante vehicula egestas. Vivamus convallis hendrerit gravida. Donec dui erat, mollis sed eros sed, molestie malesuada lectus. Pellentesque eu sem diam. Morbi consequat, ante eget tincidunt pellentesque, justo libero commodo leo, ac feugiat libero enim hendrerit mauris.</p> 
					<img src="'.get_template_directory_uri().'/images/client-thumb.jpg" alt="" />  
					 <cite>John Doe</cite>
				</li>				
			</ul>			
		  ';			
	  endif;  
	 
   wp_reset_query();
   return $return_string;
  
}
add_shortcode( 'testimonials', 'skt_hotel_custom_testimonails' );


//custom post type for Testimonials
function skt_hotel_testimonials() {
	$labels = array(
		'name'               => __( 'Testimonials' ),
		'singular_name'      => __( 'Testimonials' ),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Testimonials' ),
		'edit_item'          => __( 'Edit Testimonials' ),
		'new_item'           => __( 'New Testimonials' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonials' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No Testimonials found' ),
		'not_found_in_trash' => __( 'No Testimonials found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_position' => null,
		'menu_icon'		=> 'dashicons-testimonial',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'testimonials'),
		'has_archive'   => true,
	);
	register_post_type( 'testimonial', $args );	
}
add_action( 'init', 'skt_hotel_testimonials' );


// Social Icon Shortcodes
function skt_hotel_social_area($atts,$content = null){
  return '<div class="social-icons">'.do_shortcode($content).'</div>';
 }
add_shortcode('social_area','skt_hotel_social_area');

function skt_hotel_social($atts){
 extract(shortcode_atts(array(
  'icon' => '',
  'link' => ''
 ),$atts));
  return '<a href="'.$link.'" target="_blank" class="fa fa-'.$icon.' fa-2x" title="'.$icon.'"></a>';
 }
add_shortcode('social','skt_hotel_social');

// add shortcode for upcoming Events
function skt_hotel_events($skt_var, $content = null){
		extract( shortcode_atts(array(
			'title' => 'title',	
			'date' => 'date',		
			'link'	=> '#',
		), $skt_var));
		
		return '<div class="events-list">
				<div class="eventdate">'.$date.'</div>				
				<a href="'.$link.'"><h6>'.$title.'</h6></a>
				<p>'.$content.'</p>
			   </div>';
}
add_shortcode('events','skt_hotel_events');

// add shortcode for Rooms and rates
function skt_hotel_rooms($skt_var, $content = null){
		extract( shortcode_atts(array(
			'img'	=> '',
			'title' => 'title',	
			'rate' => 'rate',		
			'link'	=> '#',			
		), $skt_var));
		
		return '<div class="rooms-list">
				<a href="'.$link.'"><img src='.$img.'></a>					
				<span class="title">'.$title.'</span>
				<span class="price">Starts @:'.$rate.'</span>
				<div class="clear"></div>			
				<p>'.$content.'</p>
			   </div>';
}
add_shortcode('rooms-rate','skt_hotel_rooms');


// breadcrumb function
function skt_hotel_breadcrumb() {
	/* === OPTIONS === */
	$text['home']     = ( get_option('the_breadcrumbs_home_text') != '' ) ? get_option('the_breadcrumbs_home_text') : 'Inicio'; // text for the 'Home' link
	$text['category'] = 'Entradas en Categoría "%s"'; // text for a category page
	$text['search']   = 'Resultados de búsqueda "%s" Query'; // text for a search results page
	$text['tag']      = 'Entradas con Etiqueta "%s"'; // text for a tag page
	$text['author']   = 'Entradas de %s'; // text for an author page
	$text['404']      = 'Error 404'; // text for the 404 page

	$show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
	$show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
	$show_title     = 1; // 1 - show the title for the links, 0 - don't show
	$delimiter      = ' / '; // delimiter between crumbs
	$before         = '<span class="current">'; // tag before the current crumb
	$after          = '</span>'; // tag after the current crumb
	/* === END OF OPTIONS === */
	global $post;
	$home_link    = home_url('/');
	$link_before  = '<span typeof="v:Breadcrumb">';
	$link_after   = '</span>';
	$link_attr    = ' rel="v:url" property="v:title"';
	$link         = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
	$parent_id    = $parent_id_2 = $post->post_parent;
	$frontpage_id = get_option('page_on_front');
	if (is_home() || is_front_page()) {
		if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';
	} else {
		echo '<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';
		if ($show_home_link == 1) {
			echo sprintf($link, $home_link, $text['home']);
			if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
		}
		if ( is_category() ) {
			$this_cat = get_category(get_query_var('cat'), false);
			if ($this_cat->parent != 0) {
				$cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
				if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
				$cats = str_replace('</a>', '</a>' . $link_after, $cats);
				if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
				echo $cats;
			}
			if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

		} elseif ( is_search() ) {
			echo $before . sprintf($text['search'], get_search_query()) . $after;

		} elseif ( is_day() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
			echo $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {
			echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $delimiter);
				if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
				$cats = str_replace('</a>', '</a>' . $link_after, $cats);
				if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
				echo $cats;
				if ($show_current == 1) echo $before . get_the_title() . $after;
			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif ( is_attachment() ) {
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, $delimiter);
			$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
			$cats = str_replace('</a>', '</a>' . $link_after, $cats);
			if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
			echo $cats;
			printf($link, get_permalink($parent), $parent->post_title);
			if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

		} elseif ( is_page() && !$parent_id ) {
			if ($show_current == 1) echo $before . get_the_title() . $after;

		} elseif ( is_page() && $parent_id ) {
			if ($parent_id != $frontpage_id) {
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					if ($parent_id != $frontpage_id) {
						$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
					}
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					echo $breadcrumbs[$i];
					if ($i != count($breadcrumbs)-1) echo $delimiter;
				}
			}
			if ($show_current == 1) {
				if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
				echo $before . get_the_title() . $after;
			}

		} elseif ( is_tag() ) {
			echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

		} elseif ( is_author() ) {
	 		global $author;
			$userdata = get_userdata($author);
			echo $before . sprintf($text['author'], $userdata->display_name) . $after;

		} elseif ( is_404() ) {
			echo $before . $text['404'] . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '<div style="clear:both;"></div>';
		echo '</div><!-- .breadcrumbs -->';

	}
} // end skt_hotel_breadcrumb()

define('SKT_THEME_DOC','http://sktthemesdemo.net/documentation/skt_hotel_doc/');

