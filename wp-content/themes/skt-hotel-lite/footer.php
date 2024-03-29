<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Hotel Lite
 */
if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' ) || is_active_sidebar( 'fc-4' ) ) : ?>
<div id="footer-wrapper">
<div class="container footer">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-4 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 

			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-4 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 

			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>    
            <div class="cols-4 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 

			<?php if ( is_active_sidebar( 'fc-4' ) ) : ?>    
            <div class="cols-4 widget-column-4">  
            <?php dynamic_sidebar( 'fc-4' ); ?>
            </div><!--end .widget-column-4-->
			<?php endif; ?>             
            <div class="clear"></div>
        </div>
    	 <!--end .container-->
    </div>  
<?php endif; ?>    
<div class="copyright-wrapper">
    <div class="container">
        <div class="copyright-txt"><?php esc_html_e('SKT Hotel Lite','skt-hotel-lite');?></div>
    </div>
    <div class="clear"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>