<?php

// $geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
// $result = $geocoder->geocode('thane');
// print ($result['results'][0]['geometry']['lng']);
// print ($result['results'][0]['geometry']['lat']);
// echo gettype($result['results'][0]['geometry']['lng']);

function distance($lat1, $lon1, $lat2, $lon2) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
      //  $unit = strtoupper($unit);

        // if ($unit == "K") {
        // return ($miles * 1.609344);
        // } else if ($unit == "N") {
        // return ($miles * 0.8684);
        // } else {
        return $miles * 1.609344;
        // }
  }
}    
echo distance(19.1943294,72.9701779,28.6517178,77.2219388);

//set optional parameters
//see the full list: https://opencagedata.com/api#forward-opt

// $result = $geocoder->geocode('6 Rue Massillon, 30020 Nîmes', ['language' => 'fr', 'countrycode' => 'de']);
// if ($result && $result['total_results'] > 0) {
//   $first = $result['results'][0];
//   echo( $first['geometry']['lng'] . ';' . $first['geometry']['lat'] . ';' . $first['formatted'] . "\n");
//   //  4.360081;43.8316276;6 Rue Massillon, 30020 Nîmes, Frankreich
// }

// $geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
// $result = $geocoder->geocode('43.831,4.360'); # latitude,longitude (y,x)
// print $result['results'][0]['formatted'];


?>


  <!-- <script>
        var source=document.getelementbyId("source").value;
    </script> -->
    {{-- 
            $geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
            $result = $geocoder->geocode(source);
            print_r($result['results'][0]['geometry']['lng']);

            //set optional parameters
            //see the full list: https://opencagedata.com/api#forward-opt

            // $result = $geocoder->geocode('6 Rue Massillon, 30020 Nîmes', ['language' => 'fr', 'countrycode' => 'de']);
            // if ($result && $result['total_results'] > 0) {
            // $first = $result['results'][0];
            // echo( $first['geometry']['lng'] . ';' . $first['geometry']['lat'] . ';' . $first['formatted'] . "\n");
            // //  4.360081;43.8316276;6 Rue Massillon, 30020 Nîmes, Frankreich
            // }

            // $geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
            // $result = $geocoder->geocode('43.831,4.360'); # latitude,longitude (y,x)
            // print $result['results'][0]['formatted'];
            ?>

        <div id="mapid" style="width: 600px; height: 400px; position: relative;" class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-814px, 39px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(4px, 1px, 0px) scale(0.5);"></div><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(163px, 145px, 0px) scale(1);"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2046/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-110px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2047/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(146px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2046/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-110px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2047/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(146px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2048/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(402px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2048/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(402px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2049/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(658px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2049/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(658px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2050/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(914px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2050/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(914px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2049/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(658px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2048/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(402px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2050/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(914px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2051/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1170px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2051/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1170px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2051/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1170px, 81px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.5.1/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(303px, 267px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"><svg pointer-events="none" class="leaflet-zoom-animated" width="720" height="480" viewBox="754 -79 720 480" style="transform: translate3d(754px, -79px, 0px);"><g><path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#f03" fill-opacity="0.5" fill-rule="evenodd" d="M0 0"></path><path class="leaflet-interactive" stroke="#3388ff" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0.2" fill-rule="evenodd" d="M0 0"></path></g></svg></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.5.1/dist/images/marker-icon-2x.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(303px, 267px, 0px); z-index: 267;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(524837px, 348607px, 0px) scale(2048);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a></div></div></div></div>
     
            <script>

                var mymap = L.map('mapid').setView([18.16, 72.72], 6);

                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox.streets'
                }).addTo(mymap);

                // L.marker([51.5, -0.09]).addTo(mymap)
                //     .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

                // L.circle([51.508, -0.11], 500, {
                //     color: 'red',
                //     fillColor: '#f03',
                //     fillOpacity: 0.5
                // }).addTo(mymap).bindPopup("I am a circle.");

                L.polygon([
                    [19.076,72.8777],
                    [19.40, 72.12],
                    [19.20, 73]
                ]).addTo(mymap).bindPopup("Service Area");


                var popup = L.popup();

                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent("You clicked the map at " + e.latlng.toString())
                        .openOn(mymap);
                }

                mymap.on('click', onMapClick);

                </script> --}}