<?php

    //the long url posted by the map webpage
    $url = urlencode(trim($_GET["url"]));
    //echo $url;
    //You have to create an account on bit.ly and modify the username and API key.
    $api_user = "diegovalle";
    $api_key = "R_6c1b438d724e403c80de5258c26809c5";

    //send it to the bitly shorten webservice
    $ch = curl_init ("http://api.j.mp/v3/shorten?login=$api_user&apiKey=$api_key&longUrl=$url&format=json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //the response is a JSON object, send it to the webpage with a callback
    echo $_GET['jsoncallback'] . '(' . curl_exec($ch) . ');';

    // close cURL resource, and free up system resources
    curl_close($ch);
?>
