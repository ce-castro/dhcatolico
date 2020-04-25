<?php
/**
 * The Template for displaying all single posts.
 *
 * @package SKT Hotel
 */

get_header(); 

if( of_get_option('singlelayout',true) != ''){
	$layout = of_get_option('singlelayout');
}
?>
<style>
<?php
if( of_get_option('singlelayout', true) == 'singleleft' ){
	echo '.sidebar-right { float:left !important; }'; 
}
?>
</style>

<div class="content-area">
    <div class="site-content container">
      <div class="innerpage_wrapper">
      <div class="breadcrumbs">
           <?php skt_hotel_breadcrumb(); ?>
       </div>
             
        <section id="site-main" class="site-main <?php echo $layout; ?> content-part" >        
            <div class="blog-post">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>
                    <?php skt_hotel_content_nav( 'nav-below' ); ?>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>
            </div>        
        </section>
         <?php 
		if( $layout != 'sitefull' && $layout != 'nosidebar' ){
		  get_sidebar('blog');
		} ?>
        <div class="clear"></div>
        </div><!--end .innerpage_wrapper-->
    </div>
</div>
	
<?php get_footer(); ?>