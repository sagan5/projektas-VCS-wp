console.log("Pavyko!");

// burger menu

$(document).ready(function(){
				$('.burger').click(function(){
					$('.nav').toggleClass('show');
				});
				$('.menu-item').click(function(){
					$('.nav').toggleClass('show');
				});
			});

// galery carousel

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
	items:1
})

function myMap() {
    var mapCanvas = document.getElementById("map");
    var rikis = {lat: 54.6746045, lng: 25.2804137};
    var mapOptions = {
        center: new google.maps.LatLng(rikis),
        zoom: 14
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position: rikis, map: map});
}
