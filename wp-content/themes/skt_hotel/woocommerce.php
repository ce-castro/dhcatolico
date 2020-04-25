<?php
/**
 * The Template for displaying all Woocommerce.
 *
 * @package SKT hotel
 */
get_header(); 

if( of_get_option('woocomercelayout',true) != ''){
	$woocomercelayout = of_get_option('woocomercelayout');
}
?>

<style>
<?php
	if( of_get_option('woocomercelayout', true) == 'woocomerceleft' ){
		echo '.sidebar-right{ float:left !important; }'; 
	}
?>
</style>

<div class="content-area">
    <div class="container"> 
      <div class="innerpage_wrapper">          
        <div class="breadcrumbs">
           <?php skt_hotel_breadcrumb(); ?>
         </div>
    
        <section class="site-main <?php echo $woocomercelayout; ?>" id="sitemain">
			<?php woocommerce_content(); ?>
        </section>
       
		<?php 
			if( $woocomercelayout != 'woocomercesitefull' )
		{
			get_sidebar();
        } 
		?>
        
        <div class="clear"></div>
        </div><!--end .innerpage_wrapper-->
    </div>
</div>
<?php get_footer(); ?>