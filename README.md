# Register public API

[![Build Status](https://travis-ci.org/register-be/register-api.svg?branch=master)](https://travis-ci.org/register-be/register-api)


The *Register public API project* wraps around [Guzzle](http://docs.guzzlephp.org/en/latest/) and offers *HMAC authentication*. You can use the client to easily connect to the Register public API endpoint.

To learn more about the **Register public API**, go to [https://api.register.be/](https://api.register.be/).

## Install

```
composer require register-be/register-api
```


## Example

The code example below creates a new hosting account called **identifier.be** on our hosting environment.

```php
<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$client = new \RegisterBe\Client(
    [
        'debug' => true,
        'base_uri' => 'https://api.register.be',
        'registerbe_api_key' => 'XXXX',
        'registerbe_api_secret' => 'YYYY'
    ]
);

$body = new \stdClass();
$body->servicepack_id = '0';
$body->identifier = 'identifier.be';
$body->password = 'password';

// Create hosting account
$response = $client->post('/v1/hostingaccounts', array('json' => $body));

// Dump response
var_dump(
    json_decode($response->getBody()->getContents())
);
```

Go to the [examples](examples) folder to see more examples.