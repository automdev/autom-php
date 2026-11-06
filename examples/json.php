<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Autom\Client;

$client = new Client(); // reads AUTOM_API_KEY
$response = $client->googleSearch(['query' => 'web scraping api']);
echo json_encode($response->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), "\n";
