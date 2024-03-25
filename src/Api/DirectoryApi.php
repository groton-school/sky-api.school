<?php
/**
 * DirectoryApi
 * PHP version 7.4
 *
 * @category Class
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * School
 *
 * This API is used to provide access to school information such as users, academics, admissions, athletics, content, lists, and general school info.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SKY\School\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SKY\School\ApiException;
use SKY\School\Configuration;
use SKY\School\HeaderSelector;
use SKY\School\ObjectSerializer;

/**
 * DirectoryApi Class Doc Comment
 *
 * @category Class
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DirectoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'v1DirectoriesByDirectoryIdGet' => [
            'application/json',
        ],
        'v1DirectoriesGet' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1DirectoriesByDirectoryIdGet
     *
     * Directories results
     *
     * @param  int $directory_id Format - int32. (required)
     * @param  string $search  (optional)
     * @param  bool $search_all  (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesByDirectoryIdGet'] to see the possible values for this operation
     *
     * @throws \SKY\School\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \SKY\School\Model\DirectoryResultCollection
     */
    public function v1DirectoriesByDirectoryIdGet($directory_id, $search = null, $search_all = true, string $contentType = self::contentTypes['v1DirectoriesByDirectoryIdGet'][0])
    {
        [$response] = $this->v1DirectoriesByDirectoryIdGetWithHttpInfo($directory_id, $search, $search_all, $contentType);
        return $response;
    }

    /**
     * Operation v1DirectoriesByDirectoryIdGetWithHttpInfo
     *
     * Directories results
     *
     * @param  int $directory_id Format - int32. (required)
     * @param  string $search  (optional)
     * @param  bool $search_all  (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesByDirectoryIdGet'] to see the possible values for this operation
     *
     * @throws \SKY\School\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \SKY\School\Model\DirectoryResultCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1DirectoriesByDirectoryIdGetWithHttpInfo($directory_id, $search = null, $search_all = true, string $contentType = self::contentTypes['v1DirectoriesByDirectoryIdGet'][0])
    {
        $request = $this->v1DirectoriesByDirectoryIdGetRequest($directory_id, $search, $search_all, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SKY\School\Model\DirectoryResultCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SKY\School\Model\DirectoryResultCollection' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SKY\School\Model\DirectoryResultCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\SKY\School\Model\DirectoryResultCollection';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SKY\School\Model\DirectoryResultCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1DirectoriesByDirectoryIdGetAsync
     *
     * Directories results
     *
     * @param  int $directory_id Format - int32. (required)
     * @param  string $search  (optional)
     * @param  bool $search_all  (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesByDirectoryIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1DirectoriesByDirectoryIdGetAsync($directory_id, $search = null, $search_all = true, string $contentType = self::contentTypes['v1DirectoriesByDirectoryIdGet'][0])
    {
        return $this->v1DirectoriesByDirectoryIdGetAsyncWithHttpInfo($directory_id, $search, $search_all, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1DirectoriesByDirectoryIdGetAsyncWithHttpInfo
     *
     * Directories results
     *
     * @param  int $directory_id Format - int32. (required)
     * @param  string $search  (optional)
     * @param  bool $search_all  (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesByDirectoryIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1DirectoriesByDirectoryIdGetAsyncWithHttpInfo($directory_id, $search = null, $search_all = true, string $contentType = self::contentTypes['v1DirectoriesByDirectoryIdGet'][0])
    {
        $returnType = '\SKY\School\Model\DirectoryResultCollection';
        $request = $this->v1DirectoriesByDirectoryIdGetRequest($directory_id, $search, $search_all, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1DirectoriesByDirectoryIdGet'
     *
     * @param  int $directory_id Format - int32. (required)
     * @param  string $search  (optional)
     * @param  bool $search_all  (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesByDirectoryIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1DirectoriesByDirectoryIdGetRequest($directory_id, $search = null, $search_all = true, string $contentType = self::contentTypes['v1DirectoriesByDirectoryIdGet'][0])
    {

        // verify the required parameter 'directory_id' is set
        if ($directory_id === null || (is_array($directory_id) && count($directory_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $directory_id when calling v1DirectoriesByDirectoryIdGet'
            );
        }




        $resourcePath = '/v1/directories/{directory_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search,
            'search', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search_all,
            'search_all', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($directory_id !== null) {
            $resourcePath = str_replace(
                '{' . 'directory_id' . '}',
                ObjectSerializer::toPathValue($directory_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Bb-Api-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Bb-Api-Subscription-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1DirectoriesGet
     *
     * Directories
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesGet'] to see the possible values for this operation
     *
     * @throws \SKY\School\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \SKY\School\Model\DirectoryModelCollection
     */
    public function v1DirectoriesGet(string $contentType = self::contentTypes['v1DirectoriesGet'][0])
    {
        [$response] = $this->v1DirectoriesGetWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation v1DirectoriesGetWithHttpInfo
     *
     * Directories
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesGet'] to see the possible values for this operation
     *
     * @throws \SKY\School\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \SKY\School\Model\DirectoryModelCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1DirectoriesGetWithHttpInfo(string $contentType = self::contentTypes['v1DirectoriesGet'][0])
    {
        $request = $this->v1DirectoriesGetRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SKY\School\Model\DirectoryModelCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SKY\School\Model\DirectoryModelCollection' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SKY\School\Model\DirectoryModelCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\SKY\School\Model\DirectoryModelCollection';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SKY\School\Model\DirectoryModelCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1DirectoriesGetAsync
     *
     * Directories
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1DirectoriesGetAsync(string $contentType = self::contentTypes['v1DirectoriesGet'][0])
    {
        return $this->v1DirectoriesGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1DirectoriesGetAsyncWithHttpInfo
     *
     * Directories
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1DirectoriesGetAsyncWithHttpInfo(string $contentType = self::contentTypes['v1DirectoriesGet'][0])
    {
        $returnType = '\SKY\School\Model\DirectoryModelCollection';
        $request = $this->v1DirectoriesGetRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1DirectoriesGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1DirectoriesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1DirectoriesGetRequest(string $contentType = self::contentTypes['v1DirectoriesGet'][0])
    {


        $resourcePath = '/v1/directories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Bb-Api-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Bb-Api-Subscription-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}