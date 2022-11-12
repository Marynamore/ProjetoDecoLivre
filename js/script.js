const options = {
  method: 'GET',
  url: 'https://skyscanner50.p.rapidapi.com/api/v1/searchFlightEverywhereDetails',
  params: {
    origin: 'BR',
    CountryId: 'US',
    anytime: 'true',
    oneWay: 'false',
    currency: 'USD',
    countryCode: 'US',
    market: 'en-US'
  },
  headers: {
    'X-RapidAPI-Key': 'd69a94cf87msh28b73dbcfdaf15ep13199ejsn527944ba838c',
    'X-RapidAPI-Host': 'skyscanner50.p.rapidapi.com'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});