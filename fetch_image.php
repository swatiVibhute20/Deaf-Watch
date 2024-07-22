<?php
    $search = $_GET['search'];
    $apiKey = '6aae475056a821c84993c3337296833f8d0b0d6712790b9a6d88f0df13dce62a'; // Your SerpApi API key
    $url = "https://serpapi.com/search.json?q=$search&engine=google_images&ijn=0&api_key=$apiKey";
    $response = file_get_contents($url);
    header('Content-Type: application/json');
    echo $response;
?>

