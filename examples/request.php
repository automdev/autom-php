<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Autom\Client;

$client = new Client(); // reads AUTOM_API_KEY
try {
    $response = $client->request('GET', '/v1/usage');
    if ($response instanceof Autom\JsonResponse) {
        print_r($response->data);
    }
} catch (Autom\Exception\ApiException $exception) {
    fwrite(STDERR, sprintf("HTTP %d: %s\n", $exception->status, $exception->getMessage()));
}
