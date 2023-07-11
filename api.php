<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://taxi-fare-calculator.p.rapidapi.com/search-geo?dep_lat=52.50&dep_lng=13.43&arr_lat=52.47&arr_lng=13.63",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: taxi-fare-calculator.p.rapidapi.com",
		"X-RapidAPI-Key: 033b0d67f2msh4758bafc20b2595p113508jsnffdba9ef1c75"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}