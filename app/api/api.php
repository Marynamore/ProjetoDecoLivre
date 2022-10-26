<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://skyscanner50.p.rapidapi.com/api/v1/searchFlightEverywhereDetails?origin=LOND&CountryId=US&anytime=true&oneWay=false&currency=USD&countryCode=US&market=en-US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: skyscanner50.p.rapidapi.com",
		"X-RapidAPI-Key: d69a94cf87msh28b73dbcfdaf15ep13199ejsn527944ba838c"
	],
]);

$response = json_decode(curl_exec($curl));
$err = curl_error($curl);

foreach($response->data as $ator){
	echo "Nome:" . $ator->title . "<br>";
	echo "Origem:" . $ator->originPlaceId . "<br>";
	echo "Destino:" . $ator->destinationPlaceId . "<br>";
	echo "Data:" . $ator->outboundDepartureDate . "<br>";
	echo "Moeda:" . $ator->currencyId . "<br>";
	echo "Valor:" . $ator->price . "<br>";
	echo "Origem Aeroporto:" . $ator->originPlaceType . "<br>";
	echo $ator->imageUrl . "<br>";

	echo "<hr>";
}

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}


