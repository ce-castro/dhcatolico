<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Hotel
 */
?>
<div class="clear"></div>
         
</div><!--end .main-wrapper-->

<footer id="footer">
	<div class="container">	
      <div class="resp-wrap">
    	
         <?php if ( ! dynamic_sidebar( 'footer-widget-1' ) ) : ?>  
        <div class="cols-4 first">
        	 <h5><?php echo of_get_option('foothead1', true); ?></h5> 
             <?php wp_nav_menu( array('theme_location'  => 'footer', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>           
        </div><!--footer-col-1-->
        <?php endif; // end footer-widget-1 ?>
            	
		<?php if ( ! dynamic_sidebar( 'footer-widget-2' ) ) : ?>  
        <div class="cols-4 second">
        	<h5><?php echo of_get_option('foothead2', true); ?></h5> 
            <?php echo do_shortcode( '[recentposts show="2"]') ;?>              		
        </div><!--footer-col-2-->
        <?php endif; // end footer-widget-2 ?>

		<?php if ( ! dynamic_sidebar( 'footer-widget-3' ) ) : ?>  
        <div class="cols-4 third">
         	<h5><?php echo of_get_option('foothead3', true); ?></h5>            
             <?php echo do_shortcode(of_get_option('socialicons', true)); ?>
      </div><!--footer-col-3-->
      <?php endif; // end footer-widget-3 ?>
       
	 <?php if ( ! dynamic_sidebar( 'footer-widget-4' ) ) : ?>  
      <div class="cols-4 fourth">
                <h5><?php echo of_get_option('foothead4', true); ?></h5>               
                <p><?php echo of_get_option('address1', true); ?><br />
                <?php echo of_get_option('address2', true); ?><br />
                <?php if ( of_get_option('phone', true) != "") { ?> 
                Phone: <?php echo of_get_option('phone', true); ?><br />
                <?php } ?>
                 <?php if ( of_get_option('fax', true) != "") { ?> 
                Fax: <?php echo of_get_option('fax', true); ?>
                <?php } ?></p>
                <p>
                <?php if ( of_get_option('email', true) != "") { ?> 
                Email: <a href="mailto:<?php echo of_get_option('email', true); ?>"><?php echo of_get_option('email', true); ?></a><br />
                <?php } ?>
                <?php if ( of_get_option('website', true) != "") { ?> 
                Website: <a href="http://<?php echo of_get_option('website', true); ?>"><?php echo of_get_option('website', true); ?></a>
                <?php } ?>
                </p>
	    </div><!--footer-col-4-->
        <?php endif; // end footer-widget-4 ?>
		
        <div class="clear"></div>
        </div><!--.end resp-wrap-->
    </div><!--.end container-->
    
</footer>
<div id="copyright">
	<div class="container">
      <div class="resp-wrap">
    	<div class="copy-right"><?php echo of_get_option('footertext', true); ?></div>
    	 <div class="design-by"><?php echo of_get_option('themebytext', true); ?></div>
        <div class="clear"></div>
      </div><!--.end resp-wrap-->
    </div><!--.end container-->
</div><!--#end copyright-->

<?php wp_footer(); ?>

</body>
</html>