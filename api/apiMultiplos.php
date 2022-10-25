<?php

/****************** Api Multiplos Destinos!! ***************/


$request = new HttpRequest();
$request->setUrl('https://skyscanner50.p.rapidapi.com/api/v1/searchFlightsMultiStops');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'legs' => '[{"origin":"LOND","destination":"NYCA","date":"2023-02-07"},{"origin":"NYCA","destination":"LAXA","date":"2023-02-13"},{"origin":"LAXA","destination":"LOND","date":"2023-02-18"}]',
	'waitTime' => '5000',
	'adults' => '1',
	'currency' => 'USD',
	'countryCode' => 'US',
	'market' => 'en-US'
]);

$request->setHeaders([
	'X-RapidAPI-Key' => 'd69a94cf87msh28b73dbcfdaf15ep13199ejsn527944ba838c',
	'X-RapidAPI-Host' => 'skyscanner50.p.rapidapi.com'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}
