<style>
    /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
    #map {
        height: 100%;
    }
</style>
<script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    var map;
    var infowindow;
    var service;

    function initMap() {
        var pyrmont = {lat: -37.8149, lng: 144.9617};

        map = new google.maps.Map(document.getElementById('map'), {
            center: pyrmont,
            zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
            location: pyrmont,
            radius: 50000,
            keyword: 'Nike',
        }, callback);

    }

    function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                createMarker(results[i]);

            }
        }
    }

    function createMarker(place) {

        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
        });

        var request = { reference: place.reference };
        service.getDetails(request, function(details, status) {
            google.maps.event.addListener(marker, 'click', function() {
                console.log(details);
                var content = '<div><strong>' + place.name + '</strong><br>' +
                    details.formatted_address + "<br />" +
                    details.website + "<br />" +
                    details.formatted_phone_number + '</div>';

                infowindow.setContent(content);
                infowindow.open(map, this);
            });
        });
    }
    </script>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALJ48kPpE41UcfsJFVtPBF4umjrvW0zeQ&libraries=places&callback=initMap" async defer></script>