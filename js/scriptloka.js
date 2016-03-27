
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

/*Niðurteljarinn í Hafa samband*/
$("#fyrirspurn").keyup(function(){
  $("#nidurteljari").text(1000 - $(this).val().length);
});


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


/*
* Villuvalidation
* .validate fallið er frá þriðja aðila
*/
$(document).ready(function () {
    $('#form').validate({
        errorContainer: "#errors",
        errorLabelContainer: "#errors",
        errorElement: "li",
        rules: {
            Nafn: {
                required: true,
                maxlength: 200
            },
            Netfang: {
                required: true,
                email: true,
                maxlength: 400
            },
            Simi: {
                required: true,
                minlength: 7,
                maxlength: 30
            },
            Fyrirspurn: {
                required: true,
                maxlength: 1001
            }
        },
        messages: {
            Nafn: {
                required: "Fylla verður út í reitinn Nafn",
                maxlength: "Nafn má ekki vera meira en 200 stafir"
            },
            Netfang: {
                required: "Fylla verður út í reitinn Netfang",
                email: "Skrá verður gilt netfang",
                maxlength: "Netfang má ekki vera lengra en 400 stafir"
            },
            Simi: {
                required: "Fylla verður út í reitinn Símanúmer",
                minlength: "Símanúmer verður að vera minnst 7 stafir",
                maxlength: "Símanúmer má ekki vera lengra en 30 stafir"
            },
            Fyrirspurn: {
                required: "Fylla verður út í reitinn fyrirspurn",
                maxlength: "Fyrirspurn má ekki vera lengri en 1000 stafir. Hringdu í síma 551-4646 ef þú hefur lengra erindi."
            }
        }

    });

});