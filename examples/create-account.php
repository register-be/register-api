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