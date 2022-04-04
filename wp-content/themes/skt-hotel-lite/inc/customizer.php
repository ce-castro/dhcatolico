<?php
/**
 * SKT Hotel Theme Customizer
 *
 * @package SKT Hotel Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function skt_hotel_lite_customize_register( $wp_customize ) {
	
	//Add a class for titles
    class skt_hotel_lite_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3 style="text-decoration: underline; color: #DA4141; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }
	
	class WP_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
    }
}
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('display_header_text');
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#02aee7',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => esc_html__('Color Scheme','skt-hotel-lite'),
 			'description' => sprintf( esc_html__( 'More color options in PRO Version', 'skt-hotel-lite' )),			
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	$wp_customize->add_section('slider_below_desc', array(
		'title'	=> esc_html__('Home Second Section','skt-hotel-lite'),
		'description'	=> esc_html__('Select Pages from the dropdown for home second section','skt-hotel-lite'),
		'priority'	=> null
	));	
	$wp_customize->add_setting('sec-column1',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_hotel_lite_sanitize_integer',
		));
	$wp_customize->add_control(	'sec-column1',array('type' => 'dropdown-pages',
			'section' => 'slider_below_desc',
	));	
	
	//Hide Second Section Box 	
	$wp_customize->add_setting('hide_home_secwith_content',array(
			'sanitize_callback' => 'skt_hotel_lite_sanitize_checkbox',
			'default' => true,
	));	 
	$wp_customize->add_control( 'hide_home_secwith_content', array(
    	   'section'   => 'slider_below_desc',    	 
		   'label'	=> esc_html__('Uncheck To Show This Section','skt-hotel-lite'),
    	   'type'      => 'checkbox'
     )); // Hide Second Section Box 
		
	// Home Three Boxes Section 	
	$wp_customize->add_section('section_threeboxes', array(
		'title'	=> esc_html__('Home Three Boxes','skt-hotel-lite'),
		'description'	=> esc_html__('Select Pages from the dropdown for three boxes','skt-hotel-lite'),
		'priority'	=> null
	));	
	$wp_customize->add_setting('page-column1',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_hotel_lite_sanitize_integer',
		));
	$wp_customize->add_control(	'page-column1',array('type' => 'dropdown-pages',
			'section' => 'section_threeboxes',
	));	
	$wp_customize->add_setting('page-column2',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_hotel_lite_sanitize_integer',
		));
	$wp_customize->add_control(	'page-column2',array('type' => 'dropdown-pages',
			'section' => 'section_threeboxes',
	));
	$wp_customize->add_setting('page-column3',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_hotel_lite_sanitize_integer',
		));
	$wp_customize->add_control(	'page-column3',array('type' => 'dropdown-pages',
			'section' => 'section_threeboxes',
	));
	//Hide Page Boxes Column Section
	$wp_customize->add_setting('hide_pagethreeboxes',array(
			'sanitize_callback' => 'skt_hotel_lite_sanitize_checkbox',
			'default' => true,
	));	 
	$wp_customize->add_control( 'hide_pagethreeboxes', array(
    	   'section'   => 'section_threeboxes',    	 
		   'label'	=> esc_html__('Uncheck To Show This Section','skt-hotel-lite'),
    	   'type'      => 'checkbox'
     )); // Hide Page Boxes Column Section
	// Home Three Boxes Section

	$wp_customize->add_section('slider_section',array(
		'title'	=> esc_html__('Slider Settings','skt-hotel-lite'),
		'description' => sprintf( esc_html__( 'Slider Image Dimensions ( 1400 X 536 ) Add slider images here. More slider settings available in  PRO Version', 'skt-hotel-lite' )),			
		'priority'		=> null
	));	
	
	$wp_customize->add_setting('booknow_button',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('booknow_button',array(
			'label'	=> esc_html__('Book Now Button Custom Link','skt-hotel-lite'),			
			'setting'	=> 'booknow_button',
			'section'	=> 'slider_section'
	));		
	
	// Slide Image 1
	$wp_customize->add_setting('slide_image1',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(   new WP_Customize_Image_Control( $wp_customize, 'slide_image1', array(
            'label' => esc_html__('Slide Image 1','skt-hotel-lite'),
            'section' => 'slider_section',
            'settings' => 'slide_image1'
       		)
     	 )
	);	
	
	$wp_customize->add_setting('slide_title1',array(
			'default'	=> null,
			'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'slide_title1', array(	
			'label'	=> esc_html__('Slide title 1','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_title1'
	));
	$wp_customize->add_setting('slide_desc1',array(
		'sanitize_callback'	=> 'wptexturize'	
	));
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize,'slide_desc1', array(
				'label'	=> esc_attr__('Slider description  1','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_desc1'
			)
		)
	);
	$wp_customize->add_setting('slide_link1',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('slide_link1',array(
			'label'	=> esc_html__('Slide link 1','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_link1'
	));	
	// Slide Image 2
	$wp_customize->add_setting('slide_image2',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize, 'slide_image2', array(
				'label'	=> esc_html__('Slide image 2','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_image2'
			)
		)
	);	
	$wp_customize->add_setting('slide_title2',array(
			'default'	=> null,
			'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'slide_title2', array(	
			'label'	=> esc_html__('Slide title 2','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_title2'
	));	
	$wp_customize->add_setting('slide_desc2',array(
			'sanitize_callback'	=> 'wptexturize'
	));
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize,'slide_desc2', array(
				'label'	=> esc_html__('Slide description 2','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_desc2'
			)
		)
	);	
	$wp_customize->add_setting('slide_link2',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('slide_link2',array(
		'label'	=> esc_html__('Slide link 2','skt-hotel-lite'),
		'section'	=> 'slider_section',
		'setting'	=> 'slide_link2'
	));	
	// Slide Image 3
	$wp_customize->add_setting('slide_image3',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control(	$wp_customize,'slide_image3', array(
				'label'	=> esc_html__('Slide Image 3','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_image3'				
			)
		)
	);	
	$wp_customize->add_setting('slide_title3',array(
			'default'	=> null,
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('slide_title3', array(		
			'label'	=> esc_html__('Slide title 3','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_title3'			
	));	
	$wp_customize->add_setting('slide_desc3',array(
			'default'	=> null,
			'sanitize_callback'	=> 'wptexturize'
	));
	$wp_customize->add_control(	new WP_Customize_Textarea_Control($wp_customize,'slide_desc3', array(
				'label'	=> esc_html__('Slide Description 3','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_desc3'		
			)
		)
	);	
	$wp_customize->add_setting('slide_link3',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('slide_link3',array(
			'label'	=> esc_attr__('Slide link 3','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_link3'
	));	
// Slide Image 4
	$wp_customize->add_setting('slide_image4',array(
			'default'	=> null,
			'sanitize_callback'	=> 'wp_htmledit_pre'
	));
	$wp_customize->add_control(
	 	new WP_Customize_Image_Control(
			$wp_customize,
			'slide_image4',
			array(
				'label'	=> esc_html__('Slide Image 4','skt-hotel-lite'),
				'section'	=> 'slider_section',	
				'setting'	=> 'slide_image4'
			)
		)
	);	
	$wp_customize->add_setting('slide_title4',array(
			'default'	=> null,
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'slide_title4',	array(	
			'label'	=> esc_html__('Slide title 4','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_title4'		
	));
	$wp_customize->add_setting('slide_desc4',array(
			'sanitize_callback'	=> 'wptexturize'
	));
	$wp_customize->add_control(
		new WP_Customize_Textarea_Control(
			$wp_customize,
			'slide_desc4',
			array(
				'label'	=> esc_html__('Slide description 4','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_desc4'
			)
		)
	);		
	$wp_customize->add_setting('slide_link4',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('slide_link4',array(
			'label'	=> esc_html__('Slide link 4','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_link4'
	));
	// Slide Image 5
	$wp_customize->add_setting('slide_image5',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'slide_image5',
			array(
				'label'	=> esc_html__('Slide image 5','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_image5'
			)
		)
	);
	$wp_customize->add_setting('slide_title5',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('slide_title5',	array(	
			'label'	=> esc_html__('Slide title 5','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_title5'
	));
	$wp_customize->add_setting('slide_desc5',array(
			'sanitize_callback'	=> 'wptexturize'
	));
	$wp_customize->add_control(
		new WP_Customize_Textarea_Control(
			$wp_customize,
			'slide_desc5',
			array(
				'label'	=> esc_html__('Slide description 5','skt-hotel-lite'),
				'section'	=> 'slider_section',
				'setting'	=> 'slide_desc5'
			)
		)
	);
	$wp_customize->add_setting('slide_link5',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('slide_link5',array(
			'label'	=> esc_html__('Slide link 5','skt-hotel-lite'),
			'section'	=> 'slider_section',
			'setting'	=> 'slide_link5'
	));	
	
	//Hide Slider
	$wp_customize->add_setting('hide_slider',array(
			'sanitize_callback' => 'skt_hotel_lite_sanitize_checkbox',
			'default' => true,
	));	 
	$wp_customize->add_control( 'hide_slider', array(
    	   'section'   => 'slider_section',    	 
		   'label'	=> esc_html__('Uncheck To Show Slider','skt-hotel-lite'),
    	   'type'      => 'checkbox'
     ));
	 // Hide Slider	
	$wp_customize->add_section('footer_main',array(
			'title'	=> esc_html__('Footer Area','skt-hotel-lite'),
			'description'	=> esc_html__('Manager Footer From Widgets >> Footer Column 1, Footer Column 2, Footer Column 3, Footer Column 4','skt-hotel-lite'),			
			'priority'	=> null,
	));	
	
    $wp_customize->add_setting('skt_hotel_lite_options[footer-info]', array(
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new skt_hotel_lite_Info( $wp_customize, 'footer_main', array(
        'section' => 'footer_main',
        'settings' => 'skt_hotel_lite_options[footer-info]',
        'priority' => null
        ) )
    );
			
}
add_action( 'customize_register', 'skt_hotel_lite_customize_register' );
//Integer
function skt_hotel_lite_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
function skt_hotel_lite_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}




function skt_hotel_lite_custom_css(){
		?>
        	<style type="text/css">
					
					a, .header .header-inner .nav ul li a:hover, 
					.signin_wrap a:hover,
					.header .header-inner .nav ul li.current_page_item a,					
					.services-wrap .one_fourth:hover .ReadMore,
					.services-wrap .one_fourth:hover h3,
					.services-wrap .one_fourth:hover .fa,
					.blog_lists h2 a:hover,
					#sidebar ul li a:hover,
					.recent-post h6:hover,
					.MoreLink:hover,
					.cols-4 ul li a:hover, .cols-4 ul li.current_page_item a
					{ color:<?php echo esc_attr(get_theme_mod('color_scheme','#02aee7')); ?>;}
					
					.social-icons a:hover, 
					.pagination ul li .current, .pagination ul li a:hover, 
					#commentform input#submit:hover,
					.nivo-controlNav a.active,
					.header .header-inner .logo,
					.bookbtn,
					.wpcf7 input[type="submit"]
					{ background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#02aee7')); ?>;}
					
					.services-wrap .one_fourth:hover .ReadMore,
					.services-wrap .one_fourth:hover .fa,
					.MoreLink:hover
					{ border-color:<?php echo esc_attr(get_theme_mod('color_scheme','#02aee7')); ?>;}
					
			</style>
<?php        
}
         
add_action('wp_head','skt_hotel_lite_custom_css');	

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function skt_hotel_lite_customize_preview_js() {
	wp_enqueue_script( 'skt_hotel_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'skt_hotel_lite_customize_preview_js' );