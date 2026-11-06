# Autom PHP SDK

The official PHP SDK for the [Autom](https://www.autom.dev) SERP API.

Google, Bing and Brave search results as structured JSON — web, maps, news, shopping, images, jobs and AI Mode.

The SDK exposes **23 methods**, one per documented endpoint (with array-shape PHPDoc for static analysis), plus a generic `request()`. It sends requests through any PSR-18 client and uses Guzzle by default.

## Requirements

- PHP 8.1 or newer

## Installation

```sh
composer require autom/sdk
```

## Get your API key

[Sign up for Autom](https://app.autom.dev/register) or sign in, then copy your API key from the [dashboard](https://app.autom.dev). The client reads the `AUTOM_API_KEY` environment variable when no key is passed.

## Quick start

```php
<?php

require 'vendor/autoload.php';

use Autom\Client;

$client = new Client(getenv('AUTOM_API_KEY') ?: null);
$response = $client->googleSearch(['query' => 'web scraping api']);
print_r($response->data);
```

Parameter arrays use the names of the [API reference](https://docs.autom.dev). Unknown names throw a `SerializationException`; use `request()` for undocumented parameters.

## Async jobs

Any call accepts `is_async: true` (useful past the 60-second server limit): the response is then a `job_id`. `waitForJob()` polls `GET /v1/jobs/{id}` until a terminal status (`CompletedJob`, `Error`, `NotFound`, `BadRequest`):

```php
$submitted = $client->googleSearch(['query' => 'web scraping api', 'is_async' => true]);
$job = $client->waitForJob($submitted->data['job_id'], onProgress: static function (array $job): void {
    echo $job['status'], ' ', $job['progress'] ?? 0, "%\n";
});
print_r($job->data);
```

## GET or POST

Methods use GET when the endpoint supports it (query string). POST sends the same parameters as JSON:

```php
use Autom\RequestOptions;

$client->bingSearch(['query' => 'test'], new RequestOptions(method: 'POST'));
```

`null` values are omitted, `false` and `0` are sent, and lists repeat the parameter name.

## Any endpoint

```php
$response = $client->request('GET', '/v1/usage');
```

## Errors

```php
use Autom\Exception\ApiException;

try {
    $client->googleSearch(['query' => 'web scraping api']);
} catch (ApiException $exception) {
    echo $exception->status, ': ', $exception->getMessage();
}
```

| Exception | When |
| --- | --- |
| `ConfigurationException` | Missing API key, invalid options or unsupported method. |
| `SerializationException` | A required parameter is missing, unknown or can't be sent. |
| `TransportException` | Network failure or timeout. |
| `ApiException` | Non-2xx status (`status`, `errorMessage`, `responseBody`, `rawResponse`). |
| `ResponseDecodingException` | A success response could not be decoded. |

All of them extend `Autom\Exception\AutomException`.

## Retries

Requests are retried up to 3 times after a network error, a `408`, `500`, `502`, `503` or `504`, or a rate limit — which the API returns as `401` (or `429`) with a `Rate limit exceeded` message. Per-key quota errors (`…: quota daily`) are not retried, nor are `400`, `402`, `404` or client-side timeouts. The delay starts at 1 second and grows 1.5× per retry (capped at 30 seconds); a `Retry-After` header wins.

```php
$client = new Client(null, ['max_retries' => 5, 'retry_delay' => 0.5]);
$client->googleSearch(['query' => 'web scraping api'], new RequestOptions(maxRetries: 0)); // one request without retries
```

## Batch requests

`batch()` sends several calls with at most 10 requests in flight (`$concurrency`), through Guzzle's connection pool, and returns one `BatchResult` per call in input order. A failing call never stops the others. With a custom PSR-18 client the calls run one after another.

```php
$inputs = ['web scraping api', 'serp api', 'rank tracker'];
$calls = array_map(static fn(string $value): array => ['googleSearch', ['query' => $value]], $inputs);

foreach ($client->batch($calls, concurrency: 5) as $result) {
    if ($result->ok()) {
        print_r($result->value->data);
    } else {
        echo $inputs[$result->index], ': ', $result->error->getMessage(), "\n";
    }
}
```

| Constant | Default | Description |
| --- | --- | --- |
| `Client::DEFAULT_CONCURRENCY` | `10` | Tasks run at the same time by batch |
| `Client::DEFAULT_TIMEOUT` | `120.0` | Request timeout (seconds) |
| `Client::MAX_RETRIES` | `3` | Retry attempts after a network error, a 408/5xx or a rate limit |
| `Client::RETRY_BACKOFF_FACTOR` | `1.5` | Exponential backoff multiplier |
| `Client::DEFAULT_RETRY_DELAY` | `1.0` | Delay before the first retry (seconds) |

## Options and custom HTTP clients

```php
$client = new Client(null, [
    'timeout' => 60.0,               // seconds, default 120 (default Guzzle client only)
    'headers' => ['X-Trace' => 'abc'],
    'http_client' => $psr18Client,   // optional: any PSR-18 client
]);
```

## Endpoints

23 methods, generated from the [OpenAPI document](https://app.autom.dev/openapi).

| Method | HTTP | Description |
| --- | --- | --- |
| `bingSearch()` | GET / POST `/v1/bing/search` | Query Bing Search via API and retrieve structured organic results (title, link, snippet, position). |
| `braveImages()` | GET / POST `/v1/brave/images` | Search Brave Images via API and retrieve structured image results with pagination and SafeSearch. |
| `braveSearch()` | GET / POST `/v1/brave/search` | Search Brave Search via API and retrieve structured organic results with pagination. |
| `braveVideos()` | GET / POST `/v1/brave/videos` | Search Brave Videos via API and retrieve structured video results with pagination and SafeSearch. |
| `duckduckgoSearch()` | GET / POST `/v1/duckduckgo/search` | Query DuckDuckGo via API and retrieve structured organic results with region and language. |
| `finderGoogleCountries()` | GET `/v1/finder/google-countries` | Search Google countries and retrieve country codes (free Finder endpoint). |
| `finderGoogleLanguages()` | GET `/v1/finder/google-languages` | Search Google languages and retrieve language codes (free Finder endpoint). |
| `finderGoogleLocations()` | GET `/v1/finder/google-locations` | Find supported Google locations and retrieve location IDs and country codes (free endpoint). |
| `googleImages()` | GET / POST `/v1/google/images` | Search Google Images via API and retrieve image results (URLs, titles, sources, dimensions). |
| `googleJobs()` | GET / POST `/v1/google/jobs` | Scrape Google Jobs results via API and retrieve structured job listings with title, company, location, and pagination. |
| `googleMaps()` | GET / POST `/v1/google/maps` | Search Google Maps via API and retrieve structured place results (address, website, phone). |
| `googleNews()` | GET / POST `/v1/google/news` | Search Google News via API and retrieve structured news results with pagination. |
| `googleSearch()` | GET / POST `/v1/google/search` | Scrape Google Search results via API and retrieve structured SERP data with pagination. |
| `googleSearchAi()` | GET / POST `/v1/google/search/ai` | Query Google AI Mode via API. JSON with text_blocks, references, and shopping_results. |
| `googleSearchAutocomplete()` | GET / POST `/v1/google/search/autocomplete` | Get Google Search autocomplete suggestions via API for a given query. |
| `googleSearchLight()` | GET / POST `/v1/google/search/light` | Scrape lightweight Google Search results via API: fast, cost-efficient, organic results only. |
| `googleShopping()` | GET / POST `/v1/google/shopping` | Scrape Google Shopping results via API and retrieve structured product listings with prices, ratings, and merchant data. |
| `googleVideos()` | GET / POST `/v1/google/videos` | Search Google Videos via API and retrieve structured video results with metadata. |
| `jobs()` | GET `/v1/jobs/{id}` | Poll the status, progress (0–100) and result of a job started with is_async=true. Polling is free. Poll until status is terminal: Completed… |
| `search()` | GET / POST `/v1/search` | One call walks engines in order and returns the first organic results. engines=auto tries Google, then Brave, Bing, DuckDuckGo, Yahoo, and… |
| `stats()` | GET `/v1/stats` | Infrastructure health for an engine or endpoint over the last hour. Not scoped to your account or tenant. Enabled per account: HTTP 403 mea… |
| `usage()` | GET `/v1/usage` | Retrieve real-time usage statistics and credit balance for your Autom account. |
| `yahooSearch()` | GET / POST `/v1/yahoo/search` | Query Yahoo via API and retrieve structured organic results with country and language. |

## All Autom SDKs

| SDK | Package | Install |
| --- | --- | --- |
| Node.js | [`@automdev/sdk`](https://www.npmjs.com/package/@automdev/sdk) | `npm install @automdev/sdk` |
| Python | [`automdev`](https://pypi.org/project/automdev/) | `pip install automdev` |
| Go | [`autom-go`](https://pkg.go.dev/github.com/automdev/autom-go) | `go get github.com/automdev/autom-go` |
| .NET | [`Autom`](https://www.nuget.org/packages/Autom) | `dotnet add package Autom` |
| Ruby | [`autom`](https://rubygems.org/gems/autom) | `gem install autom` |
| PHP | [`autom/sdk`](https://packagist.org/packages/autom/sdk) | `composer require autom/sdk` |
| Java | [`autom-java`](https://github.com/automdev/autom-java) | build from source, see its README |
| CLI | [`@automdev/cli`](https://www.npmjs.com/package/@automdev/cli) | `npm install -g @automdev/cli` |
| MCP server | [`@automdev/mcp`](https://www.npmjs.com/package/@automdev/mcp) | `npx -y @automdev/mcp` |

## License

MIT — see [LICENSE](LICENSE).
