<?php
namespace App\Authentication;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

require_once __DIR__ . '/../vendor/autoload.php';


use App\Client;
use CedricZiel\LeonardoAI\Generated\Client as GeneratedClient;

class BearerAuthentication {
    // Your code here
}

$authenticationRegistry = new AuthenticationRegistry(
    [
        new BearerAuthentication()
    ],
    [
        'Bearer' => new BearerAuthentication()
    ]
);

$client = new GeneratedClient(
    new Client(),
    $authenticationRegistry,
    null,
    null

);
