<?php

$geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
$result = $geocoder->geocode('mulund');
print_r($result['results'][0]['geometry']['lng']);

//set optional parameters
//see the full list: https://opencagedata.com/api#forward-opt

$result = $geocoder->geocode('6 Rue Massillon, 30020 Nîmes', ['language' => 'fr', 'countrycode' => 'de']);
if ($result && $result['total_results'] > 0) {
  $first = $result['results'][0];
  echo( $first['geometry']['lng'] . ';' . $first['geometry']['lat'] . ';' . $first['formatted'] . "\n");
  //  4.360081;43.8316276;6 Rue Massillon, 30020 Nîmes, Frankreich
}

$geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
$result = $geocoder->geocode('43.831,4.360'); # latitude,longitude (y,x)
print $result['results'][0]['formatted'];
?>