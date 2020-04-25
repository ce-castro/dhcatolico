<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package SKT Hotel
 */

get_header(); ?>

<div class="content-area">
    <div class="container">
      <div class="innerpage_wrapper">        
        <section id="site-main" class="site-main content-part" >
            <div class="blog-post">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'skt-hotel' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php skt_hotel_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results', 'search' ); ?>
                <?php endif; ?>
            </div><!-- blog-post -->
        </section>      
	     <?php get_sidebar('blog');?>       
        <div class="clear"></div>
        </div><!--end .innerpage_wrapper-->
    </div>
</div>

<?php get_footer(); ?>