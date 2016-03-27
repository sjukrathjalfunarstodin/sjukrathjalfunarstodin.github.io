
/*Google kortið*/
function initialize() {
    if(!document.getElementById("map_canvas")){
        return;
    }
    else{
	var map_canvas = document.getElementById('map_canvas');
    var latlng = new google.maps.LatLng(64.141503,-21.91305);
    var marker = new google.maps.LatLng(64.14109,-21.913587);
	var map_options = {
        center: latlng,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(map_canvas, map_options);
    /*Setja inn punkt á réttan stað á kotið*/
    var myMarker = new google.maps.Marker({
            position: marker,
            map: map, 
            title: 'Sjúkraþjálfunarstöðin' 
        });
    }
}
google.maps.event.addDomListener(window, 'load', initialize);

/*Slider á fremstu síðu*/
$(window).load(function() { 
    $('#slider').nivoSlider({
        effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
        pauseOnHover: true,             // Stop animation while hovering 
        randomStart: true             // Start on a random slide
    });
});

/*Toggle á nánari upplýsingum um sjúkraþjálfara*/
$(".nanar").click(function() {
    var id = $(this).attr('id');
  $( "#nanar"+id ).slideToggle( "slow" );
});
