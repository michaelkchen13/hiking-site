<?php
/**
 * Created by PhpStorm.
 * User: abhinavgirish
 * Date: 8/1/17
 * Time: 4:32 PM
 */

$arr = array("X-Mashape-Key" => "2DKorc206ImshrwHFboBUJeyCw2qp1qrVFIjsnsbLRcwF0pNb4",
        "Accept" => "text/plain");

$lat = $_POST['lat'];
$long = $_POST['lon'];
$url = 'https://trailapi-trailapi.p.mashape.com/?lat=' . $lat . '&lon=' . $long . '&q[activities_activity_type_name_eq]=hiking';

$response = Unirest\Request::get($url, $arr);
$data = json_decode($response->raw_body);
//var_dump($data->places);
foreach ($data->places as $place){
    echo '<div class="container">';
    if (isset($place->name)) {
        echo  'Site Name: ' . $place->name ;
    }
    if (isset($place->thumbnail)){
        echo '<img src='. $place->thumbnail . 'width="180" height="100">';
    }
    if (isset($place->description)){
        echo '<div class="lead"> description: ' . $place->description . '</div>';
    }
    echo '</div>';

} ?>