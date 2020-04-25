<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package SKT Hotel
 */

get_header(); ?>

<div class="content-area">
    <div class="container">
       <div class="innerpage_wrapper">        
        <section class="site-main sitefull">       
            <header class="page-header"><br /><br /> <br />
                <h1 class="title-404"><?php _e( '<strong>¡Página no encontrada!</strong>', 'skt-hotel' ); ?></h1>
            </header><!-- .page-header -->           
                <h3 class="text-404"><?php _e( '¡Pero lo que siempre puedes encontrar es el amor de Dios para tí!<br /><br />Confía siempre en ÉL.', 'skt-hotel' ); ?></h3>
                      
        </section>
        <div class="clear"></div>
        </div><!--end .innerpage_wrapper-->
    </div>
</div>

<?php get_footer(); 