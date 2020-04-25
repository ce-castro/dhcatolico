<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
    <div class="container"> 
    <div class="innerpage_wrapper">        
    	<div class="breadcrumbs">
           <?php skt_hotel_breadcrumb(); ?>
         </div>
      
        <section id="site-main" class="site-main <?php echo $layout; ?> content-part" >        
            <header class="page-header">
				<h1 class="page-title"><?php single_cat_title('Categoría: '); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
                <?php skt_hotel_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
           
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