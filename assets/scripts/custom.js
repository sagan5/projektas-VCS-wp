// console.log("Pavyko!");

$(document).ready(function(){

    // burger
	$('.burger').click(function(){
		$('.nav').toggleClass('show');
	});
	$('.menu-item').click(function(){
		$('.nav').toggleClass('show');
	});

    // banner carousel
    $('.slick-carousel').slick({
        arrows:  false,
        autoplay: true,
        pauseOnHover: false,
        arrows: true,
        prevArrow: $('.prev-slide'),
        nextArrow: $('.next-slide'),
        dots: true
    });

    // galery carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items:1
    })
});

// google maps
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