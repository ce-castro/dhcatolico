<?php
/**
Template name: Contact Us

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
      
        <section id="site-main" class="site-main content-part contact_left" >
            <header class="entry-header">
           	  <h1 class="entry-title"><?php the_title(); ?></h1>
       	    </header><!-- .entry-header --> 
            <iframe src=<?php echo of_get_option('googlemap', true); ?> width=400 height=200 frameborder=0></iframe>             
			<?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>                                          
            <?php endwhile; // end of the loop. ?>        
        </section>
        <div class="contact_info">
         <h5><?php echo of_get_option('contactheading', true); ?></h5>
        <p> <?php echo of_get_option('address1', true); ?><br />
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
         
        </div>
        <div class="clear"></div>
       </div><!--end .innerpage_wrapper-->
    </div>
</div>	
<?php get_footer(); ?>