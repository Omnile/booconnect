# Info

Here's the complete documentaiton of the avialable API Endpoints.
@if($showPostmanCollectionButton)
[Get Postman Collection]({{url($outputPath.'/collection.json')}})
@endif

# User Authentication

## Api Token

BooConnect’s authentication is via the “Authorization” header, which allows the caller to specify an access token.

Access tokens are used to maintain a session and are created via the password login or Oauth login paths. Typical access tokens are valid for 24 hours. After expiry the user must re-authenticate.

The BooConnect server expects for the API key to be included in all API requests to the server in a header that looks like the following:

-H "Accept: application/json" \
-H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a..."

> Example request:

```bash
curl -X POST "http://business.booconnect.run/api/b/v1/**" \
-H "Accept: application/json" \
-H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a..."
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://business.booconnect.run/api/b/v1/**",
    "method": "GET|POST|PUT|DELETE",
    "data": {

	},
    "headers": {
        "accept": "application/json",
        "Authentication": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a..."
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request

`POST api/b/v1/**`


## Login

Get a token for to the BooConnect API. This is only intended for users accessing their own accounts.

> Example request:

```bash
curl -X POST "http://business.booconnect.run/api/b/v1/**" \
-H "Accept: application/json" \
-H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a..." \
    -d "username"="colt.ratke" \
    -d "password"="google" \
    -d "client_id"="mobile_app" \
    -d "client_secret"="PjHwDguIpGkEy15b1JBaBToMp2bb3DJfeaUrH8Q3" \
    -d "grant_type"="password" \
    -d "scope"="*" \
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://business.booconnect.run/api/b/v1/**",
    "method": "POST",
    "data": {
		"username":"colt.ratke",
	    "password":"google",
	    "client_id":"mobile_app",
	    "client_secret":"PjHwDguIpGkEy15b1JBaBToMp2bb3DJfeaUrH8Q3",
	    "grant_type":"password",
	    "scope":"*"
	},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
	"token_type":"Bearer",
	"expires_in":31536000,
	"access_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a...",
	"refresh_token":"def50200b140f70041e75ac7666c580b08fde49d..."
}
```

### HTTP Request

`POST api/oauth/token`


#### Parameters

Parameter | Type | Status | Description
---------|-------|-------|-------|-----------
	username | string | required |	The username of the user
	password | string | required |	The password of the user
	client_id | string | required | The OAuth Client ID
	client_secret | string | required | The OAuth Client Secret
	grant_type | string | required | `password`
	scope | string | required | `*`
