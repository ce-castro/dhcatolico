<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Hotel
 */

get_header(); ?>
<div class="content-area page-layout">
    <div class="container">
       <div class="innerpage_wrapper">    
      	  <div class="breadcrumbs">
             <?php skt_hotel_breadcrumb(); ?>
         </div>  
         
            <section class="site-main" id="sitefull">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                    <?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>				
                <?php endwhile; // end of the loop. ?>
            </section> 
            
        </div> <!--end .innerpage_wrapper-->  
    </div>
</div>	
<?php get_footer(); ?>