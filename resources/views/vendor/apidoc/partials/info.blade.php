# Info

Here's tsshe complete documentaiton of the avialable API Endpoints.
@if($showPostmanCollectionButton)
[Get Postman Collection]({{url($outputPath.'/collection.json')}})
@endif

# Authentication

BooConnect uses API keys to allow access to the API.
A new api key will be granted when loed in and thereafter, the server will expect a stateless call with the api key set as an authorization bearer.

The BooConnect server expects for the API key to be included in all API requests to the server in a header that looks like the following:

Authorization: meowmeowmeow
