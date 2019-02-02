// District 96 Spring Conference 2016

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(document).ready(function(){
  

// vUnit  
	new vUnit({
      CSSMap: {
        // The selector (vUnit will create rules ranging from .selector1 to .selector100)
        '.vh_height': {
          // The CSS property (any CSS property that accepts px as units)
          property: 'height',
          // What to base the value on (vh, vw, vmin or vmax)
          reference: 'vh'
        },
        // Wanted to have a font-size based on the viewport width? You got it.
        '.vw_font-size': {
          property: 'font-size',
          reference: 'vw'
        },
        // vmin and vmax can be used as well.
        '.vmin_margin-top': {
          property: 'margin-top',
          reference: 'vmin'
        }
      },
      onResize: function() {
        console.log('A screen resize just happened, yo.');
      }
    }).init(); // call the public init() method
	
	
});
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 