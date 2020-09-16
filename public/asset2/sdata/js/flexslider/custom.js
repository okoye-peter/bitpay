
(function($) {
 "use strict";
 
$(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider.style1').flexslider({
        animation: "slide",
		animationLoop: false,
        itemWidth: 1170,
        pausePlay: false,
	    controlNav: false,
	    directionNav: true,
        start: function(slider){
        $('body').removeClass('loading');
        }
      });
	  
	  $('.flexslider.style2').flexslider({
        animation: "slide",
		animationLoop: false,
        itemWidth: 1170,
        pausePlay: false,
	    controlNav: false,
	    directionNav: true,
        start: function(slider){
        $('body').removeClass('loading');
        }
      });
	  
		  $('.flexslider.style3').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 395.75,
		itemMargin:0,
		controlNav: false,
		directionNav: true,
		minItems: 1,
		maxItems: 4
		
	  });
  
  
	  $('.flexslider.style4').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth:175,
		itemMargin:5,
		controlNav: false,
		directionNav: true,
		minItems: 1,
		maxItems: 6
		
	  });
  
  
  $('.flexslider.style5').flexslider({
        animation: "slide",
		animationLoop: false,
        itemWidth: 1170,
        pausePlay: false,
	    controlNav: true,
	    directionNav: false,
        start: function(slider){
        $('body').removeClass('loading');
        }
      });
  
  
  $('.flexslider.style6').flexslider({
        animation: "slide",
		animationLoop: false,
        itemWidth: 1170,
        pausePlay: false,
	    controlNav: true,
	    directionNav: false,
        start: function(slider){
        $('body').removeClass('loading');
        }
      });

	  
    });

		
})(jQuery);