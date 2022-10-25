<?php

$request = new HttpRequest();
$request->setUrl('https://skyscanner50.p.rapidapi.com/api/v1/searchFlightEverywhereDetails');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'origin' => 'LOND',
	'CountryId' => 'US',
	'anytime' => 'true',
	'oneWay' => 'false',
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

