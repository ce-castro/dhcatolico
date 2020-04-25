<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Hotel
 */
?>
<div class="sidebar-right">         
    	<?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>  
         
        <h3 class="widget_title"><?php _e( 'Contact Form', 'skt-hotel' ); ?></h3>       
        <aside id="contactform" class="sidebar-area">           
            <?php echo do_shortcode('[contactform to_email="test@example.com" title="Contact Form"]'); ?>
        </aside>
        
        <h3 class="widget_title"><?php _e( 'Testimonials', 'skt-hotel' ); ?></h3>
        <aside id="meta" class="sidebar-area">           
             <?php echo do_shortcode('[testimonials]'); ?>
        </aside>
             
        <?php endif; // end sidebar widget area ?>
</div><!-- sidebar -->