<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="{{asset('js/locationpicker.jquery.js')}}"></script>


</head>
<body>
        <div id="somecomponent" style="width: 500px; height: 400px;"></div> 

        <script>
                $('#somecomponent').locationpicker();
        </script>
</body>
</html>





<h5>Lcation picker</h5>
           
            Location:<input type="text" id="us2-address" style="width: 200px"/>

            <div id="us2" style="width: 50%; height: 400px;"></div>				
            Lat.: <input type="text" id="us2-lat"/>
            Long.: <input type="text" id="us2-lon"/>

            <script>
            
                $('#us2').locationpicker({
                enableAutocomplete: true,
                enableReverseGeocode: true,
                radius: 0,
                inputBinding: {
                latitudeInput: $('#us2-lat'),
                longitudeInput: $('#us2-lon'),
                radiusInput: $('#us2-radius'),
                locationNameInput: $('#us2-address')
                },
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    var addressComponents = $(this).locationpicker('map').location.addressComponents;
                console.log(currentLocation);  //latlon  
                updateControls(addressComponents); //Data
                }
                });

                function updateControls(addressComponents) {
                console.log(addressComponents);
                }

            </script>
            <div id="map"></div>
            <script>
            // Initialize and add the map

            let lat = 23.8103, lng = 90.4125;

                    navigator.geolocation.getCurrentPosition( success, fail );
                        
                        
                    

                    function success(position)
                    {

                        lat = position.coords.longitude;
                        lng = position.coords.latitude
                    }

                    function fail()
                    {
                        alert("Sorry.");
                        // Could not obtain location
                    }


            function initMap() {
            // The location of Uluru
            var uluru = {lat: lat, lng: lng};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 12, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
                }
            </script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcVQO3dxqUFjgjyWh51BKqD1Bj87-TgV8&callback=initMap">
</script>