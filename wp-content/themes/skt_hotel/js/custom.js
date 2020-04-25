jQuery(document).ready( function(){
	jQuery('blockquote').append('<span class="bubble"></span>');	// add bubble to blockquotes
	var wwd = jQuery(window).width();
	});


// navigation script for responsive
var ww = jQuery(window).width();
jQuery(document).ready(function() { 
	jQuery("#nav li.current-menu-item").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".mobile_nav a").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery("#nav").slideToggle('fast');
	});
	adjustMenu();
})
// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});
// navigation function for responsive
var adjustMenu = function() {
	if (ww < 981) {
		jQuery(".mobile_nav a").css("display", "block");
		if (!jQuery(".mobile_nav a").hasClass("active")) {
			jQuery("#nav").hide();
		} else {
			jQuery("#nav").show();
		}
		jQuery("#nav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".mobile_nav a").css("display", "none");
		jQuery("#nav").show();
		jQuery("#nav li").removeClass("hover");
		jQuery("#nav li a").unbind('click');
		jQuery("#nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}

// Tabs
jQuery(document).ready(function(){
	jQuery('ul.tabs > br').remove();
	jQuery('.tabs-wrapper').append(jQuery('.tabs li div'));
	jQuery('.tabs li:first a').addClass('defaulttab selected');
	jQuery('.tabs a').click(function(){
		switch_tabs(jQuery(this));
	});
	switch_tabs(jQuery('.defaulttab'));
	function switch_tabs(obj) {
		jQuery('.tab-content').hide();
		jQuery('.tabs a').removeClass("selected");
		var id = obj.attr("rel");
		jQuery('#'+id).show();
		obj.addClass("selected");
	}
});

// Content Toggle
jQuery(function(){
    // Initial state of toggle (hide)
    jQuery(".slide_toggle_content").hide();
    // Process Toggle click (http://api.jquery.com/toggle/)
	jQuery('h3.slide_toggle:first').addClass('clicked').next().show();
    jQuery("h3.slide_toggle").toggle(function(){
	    jQuery(this).addClass("clicked");
	}, function () {
	    jQuery(this).removeClass("clicked");
    });
    // Toggle animation (http://api.jquery.com/slideToggle/)
    jQuery("h3.slide_toggle").click(function(){
		jQuery(this).next(".slide_toggle_content").slideToggle();
    });
});


// Content Accordion
jQuery(document).ready(function(){
    jQuery('.accordion-container').hide();
    jQuery('.accordion-toggle:first').addClass('active').next().show();
    jQuery('.accordion-toggle').click(function(){
        if( jQuery(this).next().is(':hidden') ) {
            jQuery('.accordion-toggle').removeClass('active').next().slideUp();
            jQuery(this).toggleClass('active').next().slideDown();
        }
        return false; // Prevent the browser jump to the link anchor
    });
});


jQuery(document).ready(function() {
        jQuery('h2.section-title, #footer h5').each(function(index, element) {
            var heading = jQuery(element);
            var word_array, last_word, first_part;

            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together

            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
        });
});

//*Testimonials Rotator*//
jQuery(window).load(function() {	
	jQuery('ul#testimonials').quote_rotator();
});


// For portfolio example 3
jQuery(document).ready(function(){
   	jQuery('.slider6').bxSlider({
    slideWidth: 699,
    minSlides: 1,
    maxSlides: 2,
    startSlide: 2,
    slideMargin: 5,
	pager: false
  });
});


jQuery(window).scroll(function() {							   
		jQuery('.our-rooms .resp-wrap').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});			
		
		jQuery('.about-wrap .aboutpart').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});					
		
		jQuery('.about-wrap .servicespart').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});	
		
		jQuery('.news-events-wrap .one_third').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInDown");
			}
		});			
		
		jQuery('.offer-wrap .aboutpart').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});				
		
		jQuery('.offer-wrap .servicespart').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});			
		
		jQuery('.testimonials-wrap .resp-wrap').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("pulse");
			}
		});			
		
		jQuery('.gallery-wrap .resp-wrap').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});				
		
	});