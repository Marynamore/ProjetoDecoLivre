<?php

/****************** Api dos Aeroportos!! ***************/


$request = new HttpRequest();
$request->setUrl('https://skyscanner50.p.rapidapi.com/api/v1/searchAirport');
$request->setMethod(HTTP_METH_GET); // define('API_BASE_URL', 'https://skyscanner50.p.rapidapi.com/api/v1/searchAirport'); Ela foi definida no config

$request->setQueryData([
	'query' => 'london'
]); //	$variables que está definida no app

$request->setHeaders([
	'X-RapidAPI-Key' => 'd69a94cf87msh28b73dbcfdaf15ep13199ejsn527944ba838c',
	'X-RapidAPI-Host' => 'skyscanner50.p.rapidapi.com',
    'Content-Type' => 'application/json'
]);

try {
$response = $request->send();

echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;//PDOException
}




