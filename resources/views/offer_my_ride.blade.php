@extends('layouts/layout')

@section('title')
My Ride
@stop

@section('maps')
	
	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>

@stop

@section('content')
<div id="mapid" style="width: 600px; height: 400px; position: relative;" class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-814px, 39px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 17; transform: translate3d(4px, 1px, 0px) scale(0.5);"></div><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(163px, 145px, 0px) scale(1);"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2046/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-110px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2047/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(146px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2046/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-110px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2047/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(146px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2048/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(402px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2048/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(402px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2049/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(658px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2049/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(658px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2050/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(914px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2050/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(914px, 81px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2049/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(658px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2048/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(402px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2050/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(914px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2051/1361.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1170px, -175px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2051/1360.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1170px, -431px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.tiles.mapbox.com/v4/mapbox.streets/12/2051/1362.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1170px, 81px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.5.1/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(303px, 267px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"><svg pointer-events="none" class="leaflet-zoom-animated" width="720" height="480" viewBox="754 -79 720 480" style="transform: translate3d(754px, -79px, 0px);"><g><path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#f03" fill-opacity="0.5" fill-rule="evenodd" d="M0 0"></path><path class="leaflet-interactive" stroke="#3388ff" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0.2" fill-rule="evenodd" d="M0 0"></path></g></svg></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.5.1/dist/images/marker-icon-2x.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(303px, 267px, 0px); z-index: 267;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(524837px, 348607px, 0px) scale(2048);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a></div></div></div></div>
     
    <script>

            var mymap = L.map('mapid').setView([19.07,72.877], 5);

            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox.streets'
            }).addTo(mymap);

            L.marker([{{$ride->des_lat}},{{$ride->des_long}}]).addTo(mymap)
                .bindPopup("<b>Destination</b>").openPopup();

            L.marker([{{$ride->src_lat}},{{$ride->src_long}}]).addTo(mymap)
                .bindPopup("<b>Source</b>").openPopup();

            // L.circle([51.508, -0.11], 500, {
            //     color: 'red',
            //     fillColor: '#f03',
            //     fillOpacity: 0.5
            // }).addTo(mymap).bindPopup("I am a circle.");

            // L.polygon([
            //     [51.509, -0.08],
            //     [51.503, -0.06],
            //     [51.51, -0.047]
            // ]).addTo(mymap).bindPopup("I am a polygon.");


            // var popup = L.popup();

            // function onMapClick(e) {
            //     popup
            //         .setLatLng(e.latlng)
            //         .setContent("You clicked the map at " + e.latlng.toString())
            //         .openOn(mymap);
            // }

            // mymap.on('click', onMapClick);

    </script>
<body>
    <div class="container">
        <h2>My Ride</h2>
        <p>Source:{{$ride->source}}<br>
            Destination:{{$ride->des}}<br>
            Date:{{$ride->date}}<br>
            Time:{{$ride->time}}<br>
 </p>
    </div>
</body>

@stop