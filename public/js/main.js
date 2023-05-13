(function($) {

	'use strict';

	// bootstrap dropdown hover

  // loader
  var loader = function() {
    setTimeout(function() {
      if($('#loader').length > 0) {
        $('#loader').removeClass('show');
      }
    }, 1);
  };
  loader();

  // Stellar
  $(window).stellar();


	$('nav .dropdown').hover(function(){
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});



	// home slider
	$('.home-slider').owlCarousel({
    loop:true,
    autoplay: true,
    margin:10,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    autoplayHoverPause: true,
    items: 1,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true
      }
    }
	});

	// owl carousel
	var majorCarousel = $('.js-carousel-1');
	majorCarousel.owlCarousel({
    loop:true,
    autoplay: false,
    stagePadding: 0,
    margin: 10,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: false,
    dots: false,
    autoplayHoverPause: false,
    items: 3,
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
  	}
	});

  // cusotm owl navigation events
  $('.custom-next').click(function(event){
    event.preventDefault();
    // majorCarousel.trigger('owl.next');
    majorCarousel.trigger('next.owl.carousel');

  })
  $('.custom-prev').click(function(event){
    event.preventDefault();
    // majorCarousel.trigger('owl.prev');
    majorCarousel.trigger('prev.owl.carousel');
  })

	// owl carousel
	var major2Carousel = $('.js-carousel-2');
	major2Carousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: false,
    autoplayHoverPause: true,
    items: 4,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
  	}
	});




	var contentWayPoint = function() {
		var i = 0;
		$('.element-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('element-animated') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .element-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn element-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft element-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight element-animated');
							} else {
								el.addClass('fadeInUp element-animated');
							}
							el.removeClass('item-animate');
						},  k * 100);
					});

				}, 100);

			}

		} , { offset: '95%' } );
	};
	contentWayPoint();



})(jQuery);



// google maps
function initMap(){
  var options = {
    center : {lat: 41.156566, lng: 16.766063},
    zoom : 16
  }

  map = new google.maps.Map(document.getElementById("map"), options);

  const marker = new google.maps.Marker({
    position:{lat: 41.156566, lng: 16.766063},
    map:map,
    label: '8',
    title: "La Dimora di Ottavio",
  });

  const detailWindow = new google.maps.InfoWindow({
    content: '<div class="p-3"><p class=" text-uppercase m-0 pb-1 fw-bolder">La Dimora di Ottavio</p><p class="text-center m-0 p-0">Via vittorio veneto 25/c</p></div>'
  });

  marker.addListener("mouseover", () => {
    detailWindow.open(map, marker);
  })

// function haversine_distance(mk1, mk2) {
//   var R = 3958.8; // Radius of the Earth in miles
//   var rlat1 = mk1.position.lat() * (Math.PI/180); // Convert degrees to radians
//   var rlat2 = mk2.position.lat() * (Math.PI/180); // Convert degrees to radians
//   var difflat = rlat2-rlat1; // Radian difference (latitudes)
//   var difflon = (mk2.position.lng()-mk1.position.lng()) * (Math.PI/180); // Radian difference (longitudes)

//   var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
//   return d;
// }

// var map;
// function initMap() {
//   // The map, centered on Central Park
//   const center = {lat: 41.156566, lng: 16.766063};
//   const options = {zoom: 15, scaleControl: true, center: center};
//   map = new google.maps.Map(
//       document.getElementById('map'), options);
//   // Locations of landmarks
//   const dakota = {lat: 41.156566, lng: 16.766063};
//   const frick = {lat: 41.126852, lng: 16.871915};
//   // The markers for The Dakota and The Frick Collection
//   var mk1 = new google.maps.Marker({position: dakota, map: map});
//   var mk2 = new google.maps.Marker({position: frick, map: map});

//   // Draw a line showing the straight distance between the markers
//   var line = new google.maps.Polyline({path: [dakota, frick], map: map});

// // Calculate and display the distance between markers
// var distance = haversine_distance(mk1, mk2);
// document.getElementById('msg').innerHTML = "Distance between markers: " + distance.toFixed(2) + " mi.";
}



pannellum.viewer('panorama-360-view', {
  "type": "equirectangular",
  "panorama": "https://i.ibb.co/6PGHKkT/360-image.jpg",
  "autoLoad": true,

})


function mouseOver() {
  document.getElementById("view").style.display = "none";
}

function mouseOut() {
  document.getElementById("view").style.display = "block";
}