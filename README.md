# Register.be public API

[![Build Status](https://travis-ci.org/register-be/register-api.svg?branch=master)](https://travis-ci.org/register-be/register-api)
[![Coverage Status](https://coveralls.io/repos/github/register-be/register-api/badge.svg?branch=master)](https://coveralls.io/github/register-be/register-api?branch=master)

The *Register.be public API project* wraps around [Guzzle](http://docs.guzzlephp.org/en/latest/) and offers *HMAC authentication*. You can use the client to easily connect to the Register.be public API endpoint.

To learn more about the **Register.be public API**, go to [https://api.register.be/](https://api.register.be/).

## Install

```
composer require register-be/register-api
```


## Example

The code example below registers a new domain name on your account.

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
$body->domain_name = 'domain-name-to-register.eu';

// Register domain name
$response = $client->post('/v2/domains/registrations', ['json' => $body]);

// Dump location header with link to provisioning job
var_dump(
    $response->getHeader('Location')
);
```

Go to the [examples](examples) folder to see more examples.