<?php
    $contentType = 'application/json';
    $method = 'GET';
    $auth = '';
    $header = 'Authentication-API-Key: 12345';
    $charset= 'ISO-8859-1';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/test/returnurl.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, Array('Content-type: ' . 
                $contentType . '; charset=' . $charset,
                $header1));
curl_exec($ch);

?>

