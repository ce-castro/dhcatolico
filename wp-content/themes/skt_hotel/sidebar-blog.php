<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Hotel
 */
?>
<div class="sidebar-right">    
    <?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>     
       <aside id="categories" class="sidebar-area">
            <h3 class="widget_title"><?php _e( 'Categories', 'skt-hotel' ); ?></h3>
            <ul>
                <?php wp_list_categories('title_li='); ?>
            </ul>          
        </aside> 
            
        <aside id="archives" class="sidebar-area">
            <h3 class="widget_title"><?php _e( 'Archives', 'skt-hotel' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>          
        </aside>        
    <?php endif; // end sidebar widget area ?>	
</div><!-- sidebar -->