<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT Hotel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php 
	wp_head(); 
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	if( !get_option( $themename ) ) {
	require get_template_directory() . '/index-default.php';
	exit;
	}
?>
</head>

<body <?php body_class(); ?>>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84296653-1', 'auto');
  ga('send', 'pageview');

</script>



    <div class="wrapper_main layout_wide">   
        <header class="header">
        	<div class="container">              
                 <div class="logo"><a href="<?php echo home_url('/');?>">
                        <?php if( of_get_option('logo', true) != '' ) { ?>
                            <img src="<?php echo esc_url( of_get_option('logo', true) ); ?>" />
                            <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                        <?php } else { ?>
                            <h1><?php bloginfo( 'name' ); ?></h1>
                            <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                            
                        <?php } ?>
                    </a>
                </div>
                <div class="header_right">
                 <?php if ( ! dynamic_sidebar( 'header-widget' ) ) : ?>      
                 <?php endif; // end footer-widget-1 ?>                  
                 <div class="mobile_nav"><a href="#"><?php echo of_get_option('mobilemenuname'); ?></a></div>
                  <nav id="nav">
                      <?php wp_nav_menu( array('theme_location'  => 'primary', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>
                  </nav>                     
                </div>
	            <div class="clear"></div>                                   
            </div>             
        </header>
		<?php if ( is_home() || is_front_page() ) {?>
        
        	<?php $slidershortcode = of_get_option('slidershortcode'); ?>
    <?php if( !empty($slidershortcode)){?>	
        <div class="home_slider">  
            <?php if( of_get_option('slidershortcode') != ''){ echo do_shortcode(of_get_option('slidershortcode', true));}; ?>
        </div>
    <?php } else { ?>
        
        
        <section id="home_slider">       
        	<?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<11; $i++) {
				if ( of_get_option('slide'.$i, true) != "" ) {
					$imgSrc 	= of_get_option('slide'.$i, true);
					$imgTitle	= of_get_option('slidetitle'.$i, true);
					$imgDesc	= of_get_option('slidedesc'.$i, true);
					$imgLink	= of_get_option('slideurl'.$i, true);
					if ( strlen($imgSrc) > 3 ) {
						$slAr[$m]['image_src'] = of_get_option('slide'.$i, true);
						$slAr[$m]['image_title'] = of_get_option('slidetitle'.$i, true);
						$slAr[$m]['image_desc'] = of_get_option('slidedesc'.$i, true);
						$slAr[$m]['image_link'] = of_get_option('slideurl'.$i, true);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo '#slidecaption'.$n ; ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div>
				    <?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="slide_info">
                        <?php if( of_get_option('slidetitle'.$sln, true) != '' ){ ?>
                            <a href="<?php echo of_get_option('slideurl'.$sln, true); ?>"><h2><?php echo of_get_option('slidetitle'.$sln, true); ?></h2></a>
                        <?php } ?>
                        
                        <?php if( of_get_option('slidedesc'.$sln, true) != '' ){ ?>                          
                          <p><?php echo of_get_option('slidedesc'.$sln, true); ?></p>
						<?php } ?>
                        
                        <?php if( of_get_option('slideurl'.$sln, true) != '' ){ ?>
                        <p class="slide_more"><a href="<?php echo of_get_option('slideurl'.$sln, true); ?>">
                        <?php echo of_get_option('slidebutton'.$sln, true); ?>
                        </a></p>
						<?php } ?>
                       
                       </div>
                    </div>
					<?php } ?> 
                                   
                </div>
                <div class="clear"></div><?php } ?>
                 <div class="container"> 
                    <?php echo of_get_option('booknowbutton', true ); ?>
                </div>
                
        </section><!--home_slider-->
        <?php } ?>
        <?php } else { ?>        
			<div class="innerbanner">  
           <?php
			$header_image = get_header_image();
			if( is_single() || is_archive() || is_category() || is_author()|| is_search()) { 
        		echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
			}
			elseif( has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$thumbnailSrc = $src[0];
				echo '<img src="'.$thumbnailSrc.'" alt="">';
			} 
			elseif ( ! empty( $header_image ) ) {
				echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
            }	
			else { 
            	echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
		    } ?>
       </div>  
    <?php }	?>  		
    
<?php if ( is_home() || is_front_page() ) { ?>
	<?php if ( (of_get_option('pagesboxshowhide', true) != 'hide') ) { ?>
    	
        	<?php
    if( of_get_option('numsection', true) > 0 ) { 
        $numSections = esc_attr( of_get_option('numsection', true) );
        for( $s=1; $s<=$numSections; $s++ ){ 
            $title 		= ( of_get_option('sectiontitle'.$s, true) != '' ) ? esc_html( of_get_option('sectiontitle'.$s, true) ) : '';
            $class		= ( of_get_option('sectionclass'.$s, true) != '' ) ? esc_html( of_get_option('sectionclass'.$s, true) ) : '';
            $content	= ( of_get_option('sectioncontent'.$s, true) != '' ) ? of_get_option('sectioncontent'.$s, true) : ''; 			
            $hide		= ( of_get_option('hidesec'.$s, true) != '' ) ? of_get_option('hidesec'.$s, true) : '';
			$bgcolor	= ( of_get_option('sectionbgcolor'.$s, true) != '' ) ? of_get_option('sectionbgcolor'.$s, true) : ''; 
			$bgimage	= ( of_get_option('sectionbgimage'.$s, true) != '' ) ? of_get_option('sectionbgimage'.$s, true) : '';
            ?>
            <section class="<?php echo $class; ?>" <?php if( $bgcolor || $bgimage ) { ?>style="<?php echo ($bgcolor != '') ? 'background-color:'.$bgcolor.'; ' : '' ; echo ($bgimage != '') ? 'background-image:url('.$bgimage.'); background-repeat:no-repeat; background-position: center center; background-size: cover; ' : '' ; echo ($hide) != false ? 'display:none;': ''; ?>"<?php } ?>>
                <div class="container"><div class="resp-wrap">
                    <?php if( $title != '' ) { ?>
                        <h2 class="section-title"><?php echo $title; ?></h2>
                    <?php } ?>
                    <?php the_content_format( $content ); ?>
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section><?php 
        }
    }
    ?>
    
    <?php } ?>
<?php } ?>