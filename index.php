<?php 
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

 $header = array(
    'Accept: application/json',
    'Content-Type: application/x-www-form-urlencoded',
    'Authentication-API-Key: 7d64ca3869544c469c3e7a586921ba37'
    );

 //1.Initialize
 $ch = curl_init();

 //2.Set options

 //url to sen request to
 //curl_setopt($ch, CURLOPT_URL, 'https://mazzo-angular-app.herokuapp.com/api/all');
 curl_setopt($ch, CURLOPT_URL, 'https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100');
//return, instead of outputting directly
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 //whether to include the heaer in the output.  set to false
 curl_setopt($ch, CURLOPT_HEADER, 0);

 //Execute the request, and fetch the response. check for errors
 $output = curl_exec($ch);

 if($output === FALSE){
     echo "cURL Error: " . curl_error($ch);
 }

 //Close and free up cURL handle
 curl_close($ch);

 //Display raw output
 print_r($output);

// $result = json_decode($output);
// foreach ($result as $obj){
//     echo '<h1>' . $obj->title . '</h1>';
//     echo '<p>' . $obj->content . '</p>';
// }
?>