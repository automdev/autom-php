<?php

declare(strict_types=1);

namespace Autom;

// Generated from the Autom OpenAPI document. Do not edit by hand.

/**
 * Path, methods, response kind and parameter names of every documented operation.
 */
final class Endpoints
{
    /**
     * @var array<string, array{path: string, methods: list<'GET'|'POST'>, response: 'json'|'any', required: list<string>, params: list<string>}>
     */
    public const ALL = [
        'bing_search' => [
            'path' => '/v1/bing/search',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'num', 'location', 'lat', 'lon', 'mkt', 'cc', 'fields', 'is_async', 'soft_fail'],
        ],
        'brave_images' => [
            'path' => '/v1/brave/images',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'gl', 'hl', 'safe', 'fields', 'is_async', 'soft_fail'],
        ],
        'brave_search' => [
            'path' => '/v1/brave/search',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'gl', 'hl', 'fields', 'is_async', 'soft_fail'],
        ],
        'brave_videos' => [
            'path' => '/v1/brave/videos',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'gl', 'hl', 'safe', 'fields', 'is_async', 'soft_fail'],
        ],
        'duckduckgo_search' => [
            'path' => '/v1/duckduckgo/search',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'gl', 'hl', 'fields', 'is_async', 'soft_fail'],
        ],
        'finder_google_countries' => [
            'path' => '/v1/finder/google-countries',
            'methods' => ['GET'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'fields', 'is_async', 'soft_fail'],
        ],
        'finder_google_languages' => [
            'path' => '/v1/finder/google-languages',
            'methods' => ['GET'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'fields', 'is_async', 'soft_fail'],
        ],
        'finder_google_locations' => [
            'path' => '/v1/finder/google-locations',
            'methods' => ['GET'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_images' => [
            'path' => '/v1/google/images',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'async', 'safe', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_jobs' => [
            'path' => '/v1/google/jobs',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'uds', 'lrad', 'ltype', 'location', 'uule', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'next_page_token', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_maps' => [
            'path' => '/v1/google/maps',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'll', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_news' => [
            'path' => '/v1/google/news',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'num', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_search' => [
            'path' => '/v1/google/search',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'tbs', 'safe', 'location', 'uule', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'page', 'num', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_search_ai' => [
            'path' => '/v1/google/search/ai',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'location', 'uule', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_search_autocomplete' => [
            'path' => '/v1/google/search/autocomplete',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'cp', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_search_light' => [
            'path' => '/v1/google/search/light',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_shopping' => [
            'path' => '/v1/google/shopping',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'location', 'uule', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'safe', 'fields', 'is_async', 'soft_fail'],
        ],
        'google_videos' => [
            'path' => '/v1/google/videos',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query', 'page'],
            'params' => ['query', 'location', 'uule', 'google_domain', 'gl', 'hl', 'cr', 'lr', 'page', 'num', 'safe', 'fields', 'is_async', 'soft_fail'],
        ],
        'jobs' => [
            'path' => '/v1/jobs/{id}',
            'methods' => ['GET'],
            'response' => 'json',
            'required' => ['id'],
            'params' => ['id'],
        ],
        'search' => [
            'path' => '/v1/search',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'engines', 'gl', 'hl', 'fields', 'is_async', 'soft_fail'],
        ],
        'stats' => [
            'path' => '/v1/stats',
            'methods' => ['GET'],
            'response' => 'json',
            'required' => [],
            'params' => ['engine', 'path'],
        ],
        'usage' => [
            'path' => '/v1/usage',
            'methods' => ['GET'],
            'response' => 'json',
            'required' => [],
            'params' => [],
        ],
        'yahoo_search' => [
            'path' => '/v1/yahoo/search',
            'methods' => ['GET', 'POST'],
            'response' => 'json',
            'required' => ['query'],
            'params' => ['query', 'page', 'gl', 'hl', 'fields', 'is_async', 'soft_fail'],
        ],
    ];

    /**
     * SDK method name to endpoint name, for batch().
     *
     * @var array<string, string>
     */
    public const METHODS = [
        'bingSearch' => 'bing_search',
        'braveImages' => 'brave_images',
        'braveSearch' => 'brave_search',
        'braveVideos' => 'brave_videos',
        'duckduckgoSearch' => 'duckduckgo_search',
        'finderGoogleCountries' => 'finder_google_countries',
        'finderGoogleLanguages' => 'finder_google_languages',
        'finderGoogleLocations' => 'finder_google_locations',
        'googleImages' => 'google_images',
        'googleJobs' => 'google_jobs',
        'googleMaps' => 'google_maps',
        'googleNews' => 'google_news',
        'googleSearch' => 'google_search',
        'googleSearchAi' => 'google_search_ai',
        'googleSearchAutocomplete' => 'google_search_autocomplete',
        'googleSearchLight' => 'google_search_light',
        'googleShopping' => 'google_shopping',
        'googleVideos' => 'google_videos',
        'jobs' => 'jobs',
        'search' => 'search',
        'stats' => 'stats',
        'usage' => 'usage',
        'yahooSearch' => 'yahoo_search',
    ];
}
