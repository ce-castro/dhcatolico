<style>body, .logo span.tagline{font-family:Arimo; font-size:13px; color:#3c3c3c;}.mobile_nav a{background-color:1; border:1px solid #cccccc;}#nav{font-family:Roboto Condensed;}#nav ul li a{font-size:15px; color:#ffffff;}#nav ul li a:hover,#nav ul li.parent ul li a:hover, #nav ul li.parent a{color:#02aee7;}#nav ul li.parent ul li a{color:#ffffff ;}#nav ul li:hover > ul{background-color:#1f1f1f;}#nav ul li ul li a{border-top:1px solid#ffffff;}@media screen and (max-width: 767px){#nav{background:#1f1f1f}}h1, h2, h3, h4, h5, h6{font-family:Roboto;}h1{font-family:Roboto; font-size:38px; color:#2e2e2e; }h2, .title-404, .text-404{font-family:Roboto; font-size:36px; color:#454545;}h3{font-family:Roboto; font-size:28px; color:#454545;}h4{font-family:Roboto; font-size:22px; color:#313131;}h5{font-family:Roboto; font-size:18px; color:#373737;}h6{font-family:Roboto; font-size:16px; color:#373737;}.logo h1{font-family:Roboto Condensed; font-size:32px; color:#ffffff;}.logo span.tagline{font-size:12px; color:#ffffff;}.header .logo img{height:112px;}.logo, .logo a{color:#ffffff}.logo:hover, .logo a:hover{color:#ffffff}#footer h5{font-size:24px; color:#ffffff; border-bottom:1px solid #101010;}.header{background-color:#1f1f1f}#footer{background-color:#1f1f1f}#footer{font-size:12px; color:#ffffff;}#copyright{background-color:#000000; font-size:14px; color:#a8a8a8;}.content-area .controls li:hover, .content-area .controls li.active, .pagination ul li span.current, .pagination ul li:hover a, #commentform input#submit, .contact-form .cf_button, .wpcf7-form input[type=submit], .latest_posts a.comment-count, a.added_to_cart, .pricing_table .tf a{background-color:#02abe5;}a{color:#02abe5;}.search-form .search-submit{background-color:#02abe5;}a:hover{color:#000000;}#footer a, #copyright a{color:#ffffff;}.contact_info h5{color:#02abe5;}#footer a:hover, #copyright a:hover{color:#02aae1;}#footer ul li a:hover, #footer ul li.current_page_item a{color:#02abe5;}#footer .post-grid h6{color:#02aae1;}.social-icons a{background-color:#8a8a8a; }#footer .social-icons a:hover{background-color:#02afe7; color:#ffffff; }#testimonials li img{border:3px solid #ffffff; }.theme-default .nivo-controlNav a{background-color:#ffffff;}.theme-default .nivo-controlNav a.active, #commentform input#submit:hover{background-color:#1a1a1a;}.nivo-caption{background-color:rgba(51,51,51,0.5);}.nivo-caption h2{font-family:Roboto; font-size:34px; color:#ffffff }.theme-default .nivo-controlNav a{ border:1px solid#070707; }.bookbtn{background-color:#02aee7; font-family:Roboto; font-size:28px;color:#ffffff;  border:1px solid#03cbe9; }.bookbtn:hover{color:#ffffff; }.read-more{background-color:#3c3c3c; border:1px solid#e9e8e8; color:#ffffff;}.read-more:hover{ color:#02abe5;}.sidebar-area ul li a{color:#3f3f3f; }.sidebar-area ul li a:hover{color:#02abe5; }.servicespart ul li{background-color:#faf9f9; font-size:16px; border:1px solid#e9e8e8;}.servicespart ul li:hover{background-color:#ffffff; }.servicespart ul li a{ color:#3c3c3c;}.news-events-wrap .hold-3box{background-color:#ffffff; }.news-events-wrap h6{font-family:Oswald; font-size:14px; color:#373737; }.news-events-wrap h6:hover, .our-rooms h4:hover, .list-cuisines li a:hover{ color:#02aee7;}</style>	
 <script>
			jQuery.noConflict();
			jQuery(window).load(function() {			
				jQuery('#slider').nivoSlider({ 
						effect:'fade', //sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse
		  	animSpeed: 500,
			pauseTime: 3000,
			directionNav: true,
			controlNav: false,
			pauseOnHover: false,
				 });				
});

 
jQuery(document).ready(function() {
jQuery.quote_rotator = {
    defaults: {
      rotation_speed: 5000,
      pause_on_hover: true,
      randomize_first_quote: false,
      buttons: false
    }
  }
 
});
		
		
	

		</script>	
<body class="home blog logged-in custom-background">

    <div class="wrapper_main layout_wide">   
        <header class="header">
        	<div class="container">              
                 <div class="logo">
                 <a href="<?php echo home_url('/'); ?>">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
                 </a>
                </div>
                <div class="header_right">                       
                                   
                 <div class="mobile_nav"><a href="#">Menu...</a></div>
                  <nav id="nav">
                     <ul>
                       <li class="current-menu-item current_page_item menu-item-home">
                       <a href="<?php echo home_url('/'); ?>">Home</a>
                       </li>
  					   <li><a href="#">Sample page</a></li>
					</ul>
                  </nav>                     
                </div>
	            <div class="clear"></div>                                   
            </div>             
        </header>
        
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider"> 
    <img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide_01.jpg" alt="" title="#slidecaption1"/>
    </div>
    <div id="slidecaption1" class="nivo-html-caption">
      <div class="slide_info"> <a href="">
        <h2>Best Templates for <strong>Hotel Business</strong></h2>
        </a> </div>
    </div>   
  <div class="clear"></div>
  <div class="container"> <a href="#" target="_blank" class="bookbtn">Book <b>Now</b><span class="fa fa-chevron-right fa-1x"></span></a> </div>
</section><!--home_slider-->
          		
    

	            <section class="our-rooms" style="background-color:#f9f9f9; ">
                <div class="container"><div class="resp-wrap">
                                            <h2 class="section-title">Check Our Comfortable Rooms</h2>
                                        <p>Praesent vitae odio eget felis vehicula vulputate sit amet ut tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus muscular. <div style="clear:both; min-height:20px; height:10px;"></div><div class="one_third "><br />
	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb_01.jpg" alt=""></p>
<h4>Room with One Bedroom</h4>
<p></a><br />
</div></p>
<div class="one_third "><br />
	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb_04.jpg" alt=""></p>
<h4>Family Spacious Room</h4>
<p></a><br />
</div>
<div class="one_third  last_column"><br />
	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb_05.jpg" alt=""></p>
<h4>2 Rooms Appartment</h4>
<p></a><br />
</div>
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section>            <section class="about-wrap" style="background-color:#ffffff; ">
                <div class="container"><div class="resp-wrap">
                                        <div class="aboutpart ">	</p>
<h3>About <span>Hotel</span></h3>
<p>	<div class="ofr" style="width:30%;"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb_02.jpg" alt=""></div>Suspendisse rutrum tincidunt augue sit amet adipiscing. Aliquam ut nullrs. Curabitur interdum, erat quis sodales facilisis, massa arcu varius scelerisque nibh mauris vitae augue. Cras at egestas sem. Nullam faucibus, nisi  vehicula blandit, odio orci tincidunt urna.	</p>
<ul>
<li>Check-in: 02:00 P.M.; Check-out: 12:00 A.M.</li>
<li>Free High Speed Wi-Fi Internet in Every Room</li>
<li>In Room Dining Available from 06:00 P.M. to 10:30 P.M.</li>
<li>Free Local Self Parking Available</li>
</ul>
<p><a class="read-more" href="">Online Reservations <i class="fa fa-angle-right mideum"></i></a><br />
</div>
<div class="servicespart "></p>
<h3>Our <span>Services</span></h3>
<ul>
<li><a href="#">Bed and Breakfast</a></li>
<li><a href="#">Sight Seeing</a></li>
<li><a href="#">Cab Facility</a></li>
<li><a href="#">Morning Tea</a></li>
<li><a href="#">Free Internet</a></li>
<li><a href="#">Business Center</a></li>
</ul>
<p></div>
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section>            <section class="news-events-wrap" style="background-color:#f2efeb; background-image:url(<?php echo get_template_directory_uri(); ?>/images/newsbg.jpg); background-repeat:no-repeat; background-position: center center; background-size: cover; ">
                <div class="container"><div class="resp-wrap">
                                        <div class="one_third "></p>
<h3>Latest <span>News</span></h3>
<p>			<div class="hold-3box" style="width:width;"><div class="post-grid ">
			 <div class="left-postthumb"><a href="#" title="Maecenas quis nisl quis"><img width="65" height="65" src="<?php echo get_template_directory_uri(); ?>/images/thumb_03.jpg" class="attachment-65x65 wp-post-image" alt="slide_02" /></a></div>				
				<a href="#" title="Maecenas quis nisl quis"><h6>Maecenas quis nisl quis</h6></a>				 
				<p>Lorem ipsum dolor sit ame turndn adipising elit Integer rutrum.</p>
			</div><div class="post-grid last-cols">
			 <div class="left-postthumb"><a href="#" title="Maecenas quis nisl quis"><img width="65" height="65" src="<?php echo get_template_directory_uri(); ?>/images/thumb_04.jpg" class="attachment-65x65 wp-post-image" alt="test" /></a></div>				
				<a href="#" title="Maecenas quis nisl quis"><h6>Maecenas quis nisl quis</h6></a>				 
				<p>Lorem ipsum dolor sit ame turndn adipising elit Integer rutrum.</p>
			</div><div class="post-grid ">
			 <div class="left-postthumb"><a href="#" title="Hello world!"><img src="<?php echo get_template_directory_uri(); ?>/images/img_404.png" /></a></div>				
				<a href="#" title="Hello world!"><h6>Hello world!</h6></a>				 
				<p>Welcome to WordPress. This is your first post. Edit or</p>
			</div></div></div>
<div class="one_third "></p>
<h3>Upcoming <span>Events</span></h3>
<p><div class="hold-3box" style="width:width;"><div class="events-list">
				<div class="eventdate"><span>15</span>June</div>				
				<a href="#"><h6>Maecenas quis nisl quis</h6></a>
				<p>Lorem ipsum dolor sit ame turndn adipising elit. Integer ame&#8230;</p>
			   </div><div class="events-list">
				<div class="eventdate"><span>15</span> June</div>				
				<a href="#"><h6>Maecenas quis nisl quis</h6></a>
				<p>Lorem ipsum dolor sit ame turndn adipising elit. teger dolor&#8230;</p>
			   </div><div class="events-list">
				<div class="eventdate"><span>15</span> June</div>				
				<a href="#"><h6>Maecenas quis nisl quis</h6></a>
				<p>Lorem ipsum dolor sit ame turndn adipising elit. Integer imperd&#8230;</p>
			   </div></div></div>
<div class="one_third  last_column"></p>
<h3>Latest <span>Cuisines</span></h3>
<p><div class="hold-3box" style="width:width;"></p>
<ul class="list-cuisines">
<li><a href="#">molestie augue</a></li>
<li><a href="#">sagittis commodo mauris</a></li>
<li><a href="#">Pellentesque sollicitudin</a></li>
<li><a href="#">Maecenas vestibulum</a></li>
<li><a href="#">Phasellus semper commodo</a></li>
<li><a href="#">Quisque fringilla massa</a></li>
<li><a href="#">porttitor lacus</a></li>
</ul>
<p></div></div>
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section>            <section class="offer-wrap" style="background-color:#ffffff; ">
                <div class="container"><div class="resp-wrap">
                                        <div class="aboutpart ">
<h3>special <span>Offers</span></h3>
<p>	<div class="ofr" style="width:30%;"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb_03.jpg" alt=""></div>Suspendisse rutrum tincidunt augue sit amet adipiscing. Aliquam ut nulla risus. Curabitur interdum, erat quis sodales facilisis, massa arcu varius arcu, eu scelerisque nibh mauris vitae augue. Cras at egestas sem. Nullam faucibus, nisi quis vehicula blandit.<br />
	<div style=" min-height:20px; height:5px;"></div><br />
<a class="read-more" href="">Read More</a><br />
</div><br />
<div class="servicespart "><div class="toggle_holder"><h3 class="slide_toggle"><a href="#">Check In</a></h3>
					<div class="slide_toggle_content"><p>
	From 13:00 hours</p>
</div></div><div class="toggle_holder"><h3 class="slide_toggle"><a href="#">Check out</a></h3>
					<div class="slide_toggle_content"><p>
	From 18:00 hours</p>
</div></div><div class="toggle_holder"><h3 class="slide_toggle"><a href="#">Cancellation / Prepayment</a></h3>
					<div class="slide_toggle_content"><p>
	Suspendisse rutrum tincidunt augue sit amet adipiscing. Aliquam ut nulla risus. Curabitur interdum, erat quis sodales facilisis.</p>
</div></div><br />
</div></p>
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section> 
            
<section class="testimonials-wrap" style="background-color:#f6f5f4; background-image:url(<?php echo get_template_directory_uri(); ?>/images/newsbg.jpg); background-repeat:no-repeat; background-position: center center; background-size: cover; ">
                <div class="container"><div class="resp-wrap">
                                            <h2 class="section-title">Client Testimonials</h2>
                                        <ul id="testimonials">
	  			<li class="list_testimonials">                   
                    <p>Aliquam pulvinar vehicula ante vehicula egestas. Vivamus convallis hendrerit gravida. Donec dui erat, mollis sed eros sed, molestie malesuada lectus. Pellentesque eu sem diam. Morbi consequat, ante eget tincidunt pellentesque, justo libero commodo leo, ac feugiat libero enim hendrerit mauris.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/client-thumb.jpg" alt="" /> 
					<cite>Jennifer Brown</cite>
				</li>
				
				<li class="list_testimonials">                   
                    <p>Lorem Aliquam pulvinar vehicula ante vehicula egestas. Vivamus convallis hendrerit gravida. Donec dui erat, mollis sed eros sed, molestie malesuada lectus. Pellentesque eu sem diam. Morbi consequat, ante eget tincidunt pellentesque, justo libero commodo leo, ac feugiat libero enim hendrerit mauris.</p> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/client-thumb.jpg" alt="" />  
					 <cite>John Doe</cite>
				</li>				
			</ul>			
		  
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section>
            
            <section class="gallery-wrap" style="background-color:#ffffff; ">
                <div class="container"><div class="resp-wrap">
                                            <h2 class="section-title">Our Gallery</h2>
                                        <p>			<div style="clear:both; min-height:20px; margin:25px 0; height:20px; background:url(<?php echo get_template_directory_uri(); ?>/images/hr_double.png) repeat-x center center transparent;"></div><br />
			<div class="image-row"><div class="image-set">
            <a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb1.jpg" data-lightbox="example-set" data-title="Fourth">
            <img class="example-image" src="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb1.jpg" /><span class="zoomin"></span></a>
            <a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb2.jpg" data-lightbox="example-set" data-title="Three"><img class="example-image" src="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb2.jpg" /><span class="zoomin"></span></a><a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb2.jpg" data-lightbox="example-set" data-title="Two"><img class="example-image" src="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb3.jpg" /><span class="zoomin"></span></a><a class="example-image-link" href="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb4.jpg" data-lightbox="example-set" data-title="One"><img class="example-image" src="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb4.jpg" /><span class="zoomin"></span></a></div></div><br />
			<center><br />
				<a class="read-more" href="#">View Gallery <i class="fa fa-angle-right mideum"></i></a><br />
			</center></p>
                    <div class="clear"></div>                 
                 </div>
                </div><!--.end resp-wrap-->
            </section>


<div class="clear"></div>
         
</div><!--end .main-wrapper-->

<footer id="footer">
	<div class="container">	
      <div class="resp-wrap">
    	
           
        <div class="cols-4 first">
        	 <h5>Main Menu</h5> 
             <ul><li class="current_page_item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li><a href="#">Samplae Page</a></li>
                </ul>          
        </div><!--footer-col-1-->
                    	
		  
        <div class="cols-4 second">
        	<h5>Latest News</h5> 
            <div class="post-grid ">
			 <div class="left-postthumb"><a href="#" title="Maecenas quis nisl quis"><img width="65" height="65" src="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb4.jpg" class="attachment-65x65 wp-post-image" alt="slide_02" /></a></div>				
				<a href="#" title="Maecenas quis nisl quis"><h6>Maecenas quis nisl quis</h6></a>				 
				<p>Lorem ipsum dolor sit ame turndn adipising elit Integer rutrum.</p>
			</div><div class="post-grid last-cols">
			 <div class="left-postthumb"><a href="#" title="Maecenas quis nisl quis"><img width="65" height="65" src="<?php echo get_template_directory_uri(); ?>/images/gallery-thumb3.jpg" class="attachment-65x65 wp-post-image" alt="test" /></a></div>				
				<a href="#" title="Maecenas quis nisl quis"><h6>Maecenas quis nisl quis</h6></a>				 
				<p>Lorem ipsum dolor sit ame turndn adipising elit Integer rutrum.</p>
			</div>              		
        </div><!--footer-col-2-->
        
		  
        <div class="cols-4 third">
         	<h5>Follow Us</h5>            
             <div class="social-icons">
    <a href="#" target="_blank" class="fa fa-facebook fa-2x" title="facebook"></a>
    <a href="#" target="_blank" class="fa fa-twitter fa-2x" title="twitter"></a>
    <a href="#" target="_blank" class="fa fa-linkedin fa-2x" title="linkedin"></a>
    <a href="#" target="_blank" class="fa fa-pinterest fa-2x" title="pinterest"></a>
    <a href="#" target="_blank" class="fa fa-rss fa-2x" title="rss"></a>
    <a href="#" target="_blank" class="fa fa-youtube fa-2x" title="youtube"></a>
    <a href="#" target="_blank" class="fa fa-google-plus fa-2x" title="google-plus"></a>
    <a href="#" target="_blank" class="fa fa-instagram fa-2x" title="instagram"></a>
    <a href="#" target="_blank" class="fa fa-wordpress fa-2x" title="wordpress"></a>	
	<a href="#" target="_blank" class="fa fa-skype fa-2x" title="skype"></a>
	<a href="#" target="_blank" class="fa fa-yahoo fa-2x" title="yahoo"></a>
	<a href="#" target="_blank" class="fa fa-flickr fa-2x" title="flickr"></a>
</div>      </div><!--footer-col-3-->
             
	   
      <div class="cols-4 fourth">
                <h5>Get in Touch</h5>               
                <p>Office Blvd No. 000-000,<br />
                Farmville Town, LA 12345<br />
                 
                Phone: +62 500 800 123<br />
                                  
                Fax: +62 500 800 112                </p>
                <p>
                 
                Email: <a href="mailto:site@example.com">site@example.com</a><br />
                                 
                Website: <a href="http://www.yourdomain.com">www.yourdomain.com</a>
                                </p>
	    </div><!--footer-col-4-->
        		
        <div class="clear"></div>
        </div><!--.end resp-wrap-->
    </div><!--.end container-->
    
</footer>
<div id="copyright">
	<div class="container">
      <div class="resp-wrap">
    	<div class="copy-right">Copyright &copy; 2015 SKT Hotel - All Rights Reserved.</div>
    	 <div class="design-by">Design by <a href="http://www.sktthemes.net/themes" target="_blank">SKT Wordpress Themes</a></div>
        <div class="clear"></div>
      </div><!--.end resp-wrap-->
    </div><!--.end container-->
</div><!--#end copyright-->
</body>
</html>