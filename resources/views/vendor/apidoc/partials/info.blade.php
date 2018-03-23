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
    username | string | required |  The username of the user
    password | string | required |  The password of the user
    client_id | string | required | The OAuth Client ID
    client_secret | string | required | The OAuth Client Secret
    grant_type | string | required | `password`
    scope | string | required | `*`



## Register User Restaurant Account

When registering a restaurant account, it creates both a user and the restaurant profile. This user account can ba used to login as a customer or on the business system as a business owner.

> Example request:

```bash
curl -X POST "http://business.booconnect.run/api/b/v1/**" \
-H "Accept: application/json" \
-H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a..." \
    -d "gender"="male" \
    -d "lastname"="Ariama" \
    -d "password"="google" \
    -d "username"="ovac4uss" \
    -d "restaurant_name"="ovac restaurant" \
    -d "firstname"="Victor" \
    -d "phone"="055357726112" \
    -d "registration_no"="123" \
    -d "password_confirmation"="google" \
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://business.booconnect.run/api/b/v1/**",
    "method": "POST",
    "data": {
        "gender": "male",
        "lastname": "Ariama",
        "password": "google",
        "username": "ovac4uss",
        "restaurant_name": "ovac restaurant",
        "firstname": "Victor",
        "phone": "055357726112",
        "registration_no": "123",
        "password_confirmation": "google"
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
    "firstname": "Victor",
    "lastname": "Ariama",
    "username": "ovac4uss",
    "gender": "male",
    "phone": "055357726112",
    "updated_at": "2018-03-23 02:57:58",
    "created_at": "2018-03-23 02:57:58",
    "id": 3,
    "restaurant_id": 3,
    "name": "Victor Ariama",
    "restaurant": {
        "id": 3,
        "name": "ovac restaurant",
        "phone": "055357726112",
        "registration_no": "123",
        "owner_id": "3",
        "image": "/images/restaurant_default_image.svg",
        "cover": "/images/restaurant_default_cover.svg",
        "place": null,
        "city": null,
        "state": null,
        "country": null,
        "address": null,
        "website": null,
        "description": null,
        "phone_verified": 0,
        "email_verified": 0,
        "deleted_at": null,
        "created_at": "2018-03-23 02:57:58",
        "updated_at": "2018-03-23 02:57:58"
    }
}
```

### HTTP Request

`POST api/oauth/token`


#### Parameters

Parameter | Type | Status | Description
---------|-------|-------|-------|-----------
    firstname | string | required | The first name of the user
    lastname | string | required | The last name of the user
    gender | string | retuired | The gender of the user `male` or `female`,
    username | string | required |  The username of the user
    password | string | required |  The password of the use
    password_confirmation | string | required | A confirmation of the password
    restaurant_name | string | required | The name of the restaurant to register
    phone | string | required | This will be the number for the user and restaurant.
    registration_no | integer | required | This is the business registration number


## Register User Customer Account

Register a customer account.

> Example request:

```bash
curl -X POST "http://booconnect.run/api/v1/**" \
-H "Accept: application/json" \
-H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0a..." \
    -d "gender"="male" \
    -d "lastname"="Ariama" \
    -d "password"="google" \
    -d "username"="ovac4uss" \
    -d "firstname"="Victor" \
    -d "phone"="055357726112" \
    -d "password_confirmation"="google" \
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://business.booconnect.run/api/b/v1/**",
    "method": "POST",
    "data": {
        "gender": "male",
        "lastname": "Ariama",
        "password": "google",
        "username": "ovac4uss",
        "firstname": "Victor",
        "phone": "055357726112",
        "password_confirmation": "google"
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
    "firstname": "Victor",
    "lastname": "Ariama",
    "username": "ovac4uss",
    "gender": "male",
    "phone": "055357726112",
    "updated_at": "2018-03-23 02:57:58",
    "created_at": "2018-03-23 02:57:58",
    "id": 3,
    "restaurant_id": 3,
    "name": "Victor Ariama"
}
```

### HTTP Request

`POST api/oauth/token`


#### Parameters

Parameter | Type | Status | Description
---------|-------|-------|-------|-----------
    firstname | string | required | The first name of the user
    lastname | string | required | The last name of the user
    gender | string | retuired | The gender of the user `male` or `female`,
    username | string | required |  The username of the user
    password | string | required |  The password of the use
    password_confirmation | string | required | A confirmation of the password
    phone | string | required | This will be the number for the user and restaurant.
