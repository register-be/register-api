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

$orderCode = 'COM-XXXXXXXX-XXX';

// Get detail of a domain registration order
$response = $client->get(sprintf('/v1/domains/registrations/%s', $orderCode));

// Dump response
var_dump(
    json_decode($response->getBody()->getContents())
);