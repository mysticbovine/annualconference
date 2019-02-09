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
  // Last updated
  var x = document.lastModified;
  document.getElementById("updated").innerHTML = x;
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

function initMap() {

  // Create an array of styles.
  var styles = [
    {
      featureType: "all",
      stylers: [
       { saturation: -80 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { hue: "#00ffee" },
        { saturation: 50 }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }

  ];
  var bounds = new google.maps.LatLngBounds();

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {  
    zoom: 17,
	scrollwheel: false,
    center: new google.maps.LatLng(49.256647, -123.002324),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  


  
  var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);
	
	// Multiple Markers
    var markers = [
        ['Delta Mariott Burnaby Conference Centre, Burnaby', 49.256741, -123.006913]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Delta Mariott Burnaby Conference Centre</h3>' +
        '<p>4331 Dominion Street, Burnaby, BC (<a href="https://goo.gl/maps/rRDq3Psvsor" target=_blank">directions</a>)</p>'+        
        '<p>Our special rate is fixed at $145/night for a two-queen or one-king room<br />'+
         'Call <a href="tel:+18882362427">1-888-236-2427</a> and quote code: <strong>TM1</strong></p>'+        
		'</div>']
		
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}
}