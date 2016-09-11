
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var map = null;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 13.6517569, lng: 100.49490370000001},
        zoom: 13
    });
    var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pac-input'));

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });


    autocomplete.addListener('place_changed', function () {
        infowindow.close();
        var place = autocomplete.getPlace();

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
        var address = [];
        var name = place.name;
        for (var i = 0; i < place.address_components.length; i++) {
            if (place.address_components) {

                address[place.address_components[i].types[0]] = place.address_components[i].long_name;
            }

        }
        $("#name").val(place.name);
        $("#route").val(address["route"]);
        $("#sub_local2").val(address["sublocality_level_2"]);
        $("#sub_local").val(address["sublocality_level_1"]);
        $("#locality").val(address["administrative_area_level_1"]);
        $("#lng").val(place.geometry.location.lng());
        $("#lat").val(place.geometry.location.lat());
        var x = 0;
        var markers = [];
        $.ajax({
            type: "POST",
            url: "Tod.php",
            cache: false,
            data: {long: place.geometry.location.lng(), lat: place.geometry.location.lat(),check:$("#check").val()},
            success: function (msg){
               
                rooms = JSON.parse(msg);
                alert(rooms[0].room_name);
                for (var i = 0; i < rooms.length; i++) {
                   var marker2 = new google.maps.Marker({
                        position: new google.maps.LatLng(Number(rooms[i].latitude),Number(rooms[i].longitude)),
                        map: map,
                        title: 'Hello World!'
                    });
                    
                    google.maps.event.addListener(marker2, 'click', (function (marker2, i) {
                        return function () {
                            infowindow.setContent(rooms[i].room_name);
                            infowindow.setOptions({maxWidth: 200});
                            infowindow.open(map, marker2);
                        }
                    })(marker2, i));
                }
            }
        });






    });

}


