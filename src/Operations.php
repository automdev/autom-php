<?php

declare(strict_types=1);

namespace Autom;

// Generated from the Autom OpenAPI document. Do not edit by hand.

/**
 * One method per documented Autom endpoint. Used by {@see Client}.
 */
trait Operations
{
    /**
     * @param array<string, mixed> $params
     */
    abstract protected function callOperation(string $name, array $params, ?RequestOptions $options): JsonResponse|BinaryResponse;

    /**
     * Bing Search. Query Bing Search via API and retrieve structured organic results (title, link, snippet, position). Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/bing/search`
     *
     * @param array{query: string, page?: int|float, num?: int|float, location?: string, lat?: int|float, lon?: int|float, mkt?: string, cc?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Bing.
     *   - page: Page number for pagination (1 = first page).
     *   - num: Number of results per page (e.g. 10, 20, 50). This value is a suggestion.
     *   - location: Search origin location (e.g. city).
     *   - lat: GPS latitude for the search origin.
     *   - lon: GPS longitude for the search origin.
     *   - mkt: Market code where results come from (e.g. en-US). Cannot be used together with cc.
     *   - cc: Country code to search from (2-letter ISO 3166-1). Cannot be used together with mkt.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bingSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bing_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Brave Images. Search Brave Images via API and retrieve structured image results with pagination and SafeSearch. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/brave/images`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Brave Images.
     *   - page: Page number for pagination (50 results per page).
     *   - gl: Country code (e.g. fr, us). Mapped to Brave country.
     *   - hl: Language code (e.g. fr, en). Mapped to Brave lang.
     *   - safe: SafeSearch: active | off | moderate | strict. Google-style active maps to Brave strict.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function braveImages(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('brave_images', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Brave Search. Search Brave Search via API and retrieve structured organic results with pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/brave/search`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Brave Search.
     *   - page: Page number for pagination.
     *   - gl: Country code, for example us, fr, gb, de.
     *   - hl: Language code, for example en, fr, de.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function braveSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('brave_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Brave Videos. Search Brave Videos via API and retrieve structured video results with pagination and SafeSearch. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/brave/videos`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Brave Videos.
     *   - page: Page number for pagination.
     *   - gl: Country code (e.g. fr, us). Mapped to Brave country.
     *   - hl: Language code (e.g. fr, en). Mapped to Brave lang.
     *   - safe: SafeSearch: active | off | moderate | strict. Google-style active maps to Brave strict.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function braveVideos(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('brave_videos', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DuckDuckGo Search. Query DuckDuckGo via API and retrieve structured organic results with region and language. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/duckduckgo/search`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query sent to DuckDuckGo Search.
     *   - page: Page number. Page 1 is the first page of results.
     *   - gl: Country code, for example us, fr, gb, de, jp.
     *   - hl: Language code, for example en, fr, de, ja, zh.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function duckduckgoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('duckduckgo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Countries. Search Google countries and retrieve country codes (free Finder endpoint).
     *
     * `GET /v1/finder/google-countries`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filter countries by a search string (case-insensitive). Returns all countries whose code or name matches the specified query.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderGoogleCountries(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_google_countries', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Languages. Search Google languages and retrieve language codes (free Finder endpoint).
     *
     * `GET /v1/finder/google-languages`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filter languages by a search string (case-insensitive). Returns all languages whose names contain the specified string.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderGoogleLanguages(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_google_languages', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Locations. Find supported Google locations and retrieve location IDs and country codes (free endpoint).
     *
     * `GET /v1/finder/google-locations`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search locations supported by Piloterr (cities, countries, etc.) by providing a query string. Returns matching locations ordered by reach.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderGoogleLocations(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_google_locations', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Images. Search Google Images via API and retrieve image results (URLs, titles, sources, dimensions). Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/images`
     *
     * @param array{query: string, page?: int|float, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, async?: bool, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Query you want to search on Google Images (e.g. "lion", "nike logo", "modern house exterior").
     *   - page: Page number for pagination (1 = first page).
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - async: If true, returns a job and lets you fetch results asynchronously.
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleImages(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_images', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Jobs. Scrape Google Jobs results via API and retrieve structured job listings with title, company, location, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/jobs`
     *
     * @param array{query: string, uds?: string, lrad?: int|float, ltype?: int|float, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, next_page_token?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The job search query to run on Google Jobs (e.g. developer, barista new york).
     *   - uds: Advanced search filters string for Google Jobs (encoded filter chips).
     *   - lrad: Search radius in kilometers. Does not strictly limit the radius, but influences result proximity.
     *   - ltype: Filter results by work type. Set to 1 to filter for work from home / remote jobs.
     *   - location: Human-readable location to originate the search from (e.g. New York, NY, Paris, France). If several locations match, the most popular one is used. Note: locati…
     *   - uule: Google encoded location parameter. Use for precise geo targeting. Note: uule and location cannot be used together.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - next_page_token: Token to fetch the next page of results. Returned in the serpapi_pagination.next_page_token field of the previous response.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleJobs(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_jobs', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Maps. Search Google Maps via API and retrieve structured place results (address, website, phone). Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/maps`
     *
     * @param array{query: string, page?: int|float, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, ll?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query for Google Maps (e.g. business type, brand, or place name).
     *   - page: Page number for pagination (1 = first page).
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - ll: Map center / geo hint in Google format (e.g. @43.5131985,1.4600501,60m). Helps focus results around a coordinate and zoom radius.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleMaps(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_maps', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google News. Search Google News via API and retrieve structured news results with pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/news`
     *
     * @param array{query: string, page?: int|float, num?: int|float, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Query to search on Google News (keywords, company, topic).
     *   - page: Page number for pagination (1 = first page).
     *   - num: Maximum number of results per page (e.g. 10).
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleNews(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_news', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Search. Scrape Google Search results via API and retrieve structured SERP data with pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/search`
     *
     * @param array{query: string, tbs?: string, safe?: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, page?: int|float, num?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Google (supports advanced operators like site:, inurl:, intitle:).
     *   - tbs: Advanced search filters string (e.g. time ranges: qdr:h last hour, qdr:d last day, qdr:w last week, qdr:m last month, qdr:y last year).
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - location: Human-readable location to originate the search from (e.g. New York, NY, Paris, France). If several locations match, the most popular one is used. Note: locati…
     *   - uule: Google encoded location parameter. Use for precise geo targeting. Note: uule and location cannot be used together.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - page: Page number / offset used for pagination.
     *   - num: Maximum number of results to return per page (deprecated).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google AI Mode. Query Google AI Mode via API. JSON with text_blocks, references, and shopping_results. Credit cost: 3 credits per call.
     *
     * `GET / POST /v1/google/search/ai`
     *
     * @param array{query: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The question or search query you want Google AI Mode to answer (supports advanced operators like site:, inurl:, intitle:).
     *   - location: Human-readable location to originate the search from (e.g. New York, NY, Paris, France). If several locations match, the most popular one is used. Note: locati…
     *   - uule: Google encoded location parameter. Use for precise geo targeting. Note: uule and location cannot be used together.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearchAi(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search_ai', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Search Autocomplete. Get Google Search autocomplete suggestions via API for a given query. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/search/autocomplete`
     *
     * @param array{query: string, cp?: int|float, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query for which you want to get autocomplete suggestions.
     *   - cp: Cursor position in the search query where you want to get autocomplete suggestions.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearchAutocomplete(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search_autocomplete', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Search Light. Scrape lightweight Google Search results via API: fast, cost-efficient, organic results only. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/search/light`
     *
     * @param array{query: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Google (supports advanced operators like site:, inurl:, intitle:).
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearchLight(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search_light', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Shopping. Scrape Google Shopping results via API and retrieve structured product listings with prices, ratings, and merchant data. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/shopping`
     *
     * @param array{query: string, page?: int|float, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Query to search on Google Shopping (product name, brand, category).
     *   - page: Page number for pagination (1 = first page).
     *   - location: Location to localize results (e.g. New York, United States). Generates a UULE parameter automatically.
     *   - uule: Encoded location parameter (UULE). Use location instead if you don't have a pre-encoded value.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleShopping(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_shopping', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Videos. Search Google Videos via API and retrieve structured video results with metadata. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/google/videos`
     *
     * @param array{query: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, page: int|float, num?: int|float, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query you want to run on Google Videos.
     *   - location: Human-readable location to originate the search from. Note: location and uule cannot be used together.
     *   - uule: Google encoded location parameter. Note: uule and location cannot be used together.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - page (required): Page number for pagination (1 = first page).
     *   - num: Maximum number of results per page (e.g. 10).
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleVideos(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_videos', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Jobs. Poll the status, progress (0–100) and result of a job started with is_async=true. Polling is free. Poll until status is terminal: CompletedJob, Error, NotFound or BadRequest.
     *
     * `GET /v1/jobs/{id}`
     *
     * @param array{id: string} $params
     *   - id (required): The job_id returned by an endpoint called with is_async=true.
     */
    public function jobs(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('jobs', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Search. One call walks engines in order and returns the first organic results. engines=auto tries Google, then Brave, Bing, DuckDuckGo, Yahoo, and Baidu. Omitted gl is us and omitted hl is en. There is no page parameter: the response is always pag… Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/search`
     *
     * @param array{query: string, engines?: string, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query.
     *   - engines: Engine order. Default auto tries google, brave, bing, duckduckgo, yahoo, then baidu. A comma-separated list is followed as given. ddg and duck mean duckduckgo.…
     *   - gl: Country code. Defaults to us when omitted. For example us, fr, gb, de.
     *   - hl: Language code. Defaults to en when omitted. For example en, fr, de.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function search(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Stats. Infrastructure health for an engine or endpoint over the last hour. Not scoped to your account or tenant. Enabled per account: HTTP 403 means contact support to activate it.
     *
     * `GET /v1/stats`
     *
     * @param array{engine?: string, path?: string} $params
     *   - engine: API family to check, for example google. Provide at least engine or path.
     *   - path: Specific endpoint to check, for example /v1/google/search. If you also pass engine, use an endpoint from that API.
     */
    public function stats(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stats', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Usage. Retrieve real-time usage statistics and credit balance for your Autom account.
     *
     * `GET /v1/usage`
     *
     * @param array{} $params
     */
    public function usage(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('usage', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yahoo Search. Query Yahoo via API and retrieve structured organic results with country and language. Credit cost: 1 credit per call.
     *
     * `GET / POST /v1/yahoo/search`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query sent to Yahoo Search.
     *   - page: Page number. Page 1 is the first page of results.
     *   - gl: Country code, for example us, fr, gb, de, jp.
     *   - hl: Language code, for example en, fr, de, ja, zh.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yahooSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yahoo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }
}
