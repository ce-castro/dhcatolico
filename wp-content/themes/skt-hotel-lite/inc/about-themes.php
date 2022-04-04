<?php
//about theme info
add_action( 'admin_menu', 'hotel_abouttheme' );
function hotel_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-hotel-lite'), esc_html__('About Theme', 'skt-hotel-lite'), 'edit_theme_options', 'hotel_guide', 'hotel_mostrar_guide');   
} 

//guidline for about theme
function hotel_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<style type="text/css">
@media screen and (min-width: 800px) {
.col-left {float:left; width: 65%; padding: 1%;}
.col-right {float:right; width: 30%; padding:1%; border-left:1px solid #DDDDDD; }
}
</style>
<div class="wrapper-info">
	<div class="col-left">
   		   <div style="font-size:16px; font-weight:bold; padding-bottom:5px; border-bottom:1px solid #ccc;">
			  <?php esc_attr_e('About Theme Info', 'skt-hotel-lite'); ?>
		   </div>
          <p><?php esc_html_e('SKT Hotel is a hotel WordPress theme which is responsive. It caters to hotel, motel, hospitality business, restaurant, eatery, cuisine, recipe, cafe, lodge, food joint, resort, chef, booking, room rent and others. It is mobile friendly and has a very nice animated homepage. It is multipurpose template and comes with a ready to import Elementor template plugin as add on which allows to import 150+ design templates for making use in home and other inner pages. Use it to create any type of business, personal, blog and eCommerce website. It is fast, flexible, simple and fully customizable. WooCommerce ready designs.','skt-hotel-lite'); ?></p>
		  <a href="<?php echo esc_url(SKT_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div style="text-align:center; font-weight:bold;">
				<hr />
				<a href="<?php echo esc_url(SKT_LIVE_DEMO_URL); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-hotel-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-hotel-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-hotel-lite'); ?></a>
                <div style="height:5px"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_URL); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>