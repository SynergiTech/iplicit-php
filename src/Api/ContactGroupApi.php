<?php
/**
 * ContactGroupApi
 * PHP version 8.1
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Iplicit API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.8.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Iplicit\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use SynergiTech\Iplicit\ApiException;
use SynergiTech\Iplicit\Configuration;
use SynergiTech\Iplicit\HeaderSelector;
use SynergiTech\Iplicit\ObjectSerializer;

/**
 * ContactGroupApi Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactGroupApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getContactGroup' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
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
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation getContactGroup
     *
     * Get a contact group
     *
     * @param  string $contactGroupRef Id or code of the contact group (required)
     * @param  string|null $include Comma separated list of details to include: Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60; or &#x60;customer,supplier&#x60; (the default) (optional, default to 'customer,supplier')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getContactGroup'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SynergiTech\Iplicit\Model\ContactGroupRead
     */
    public function getContactGroup(
        string $contactGroupRef,
        ?string $include = 'customer,supplier',
        string $contentType = self::contentTypes['getContactGroup'][0]
    ): \SynergiTech\Iplicit\Model\ContactGroupRead
    {
        list($response) = $this->getContactGroupWithHttpInfo($contactGroupRef, $include, $contentType);
        return $response;
    }

    /**
     * Operation getContactGroupWithHttpInfo
     *
     * Get a contact group
     *
     * @param  string $contactGroupRef Id or code of the contact group (required)
     * @param  string|null $include Comma separated list of details to include: Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60; or &#x60;customer,supplier&#x60; (the default) (optional, default to 'customer,supplier')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getContactGroup'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SynergiTech\Iplicit\Model\ContactGroupRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactGroupWithHttpInfo(
        string $contactGroupRef,
        ?string $include = 'customer,supplier',
        string $contentType = self::contentTypes['getContactGroup'][0]
    ): array
    {
        $request = $this->getContactGroupRequest($contactGroupRef, $include, $contentType);

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
                    if (in_array('\SynergiTech\Iplicit\Model\ContactGroupRead', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SynergiTech\Iplicit\Model\ContactGroupRead' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SynergiTech\Iplicit\Model\ContactGroupRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SynergiTech\Iplicit\Model\ContactGroupRead';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
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
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SynergiTech\Iplicit\Model\ContactGroupRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getContactGroupAsync
     *
     * Get a contact group
     *
     * @param  string $contactGroupRef Id or code of the contact group (required)
     * @param  string|null $include Comma separated list of details to include: Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60; or &#x60;customer,supplier&#x60; (the default) (optional, default to 'customer,supplier')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getContactGroup'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getContactGroupAsync(
        string $contactGroupRef,
        ?string $include = 'customer,supplier',
        string $contentType = self::contentTypes['getContactGroup'][0]
    ): PromiseInterface
    {
        return $this->getContactGroupAsyncWithHttpInfo($contactGroupRef, $include, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getContactGroupAsyncWithHttpInfo
     *
     * Get a contact group
     *
     * @param  string $contactGroupRef Id or code of the contact group (required)
     * @param  string|null $include Comma separated list of details to include: Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60; or &#x60;customer,supplier&#x60; (the default) (optional, default to 'customer,supplier')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getContactGroup'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getContactGroupAsyncWithHttpInfo(
        $contactGroupRef,
        $include = 'customer,supplier',
        string $contentType = self::contentTypes['getContactGroup'][0]
    ): PromiseInterface
    {
        $returnType = '\SynergiTech\Iplicit\Model\ContactGroupRead';
        $request = $this->getContactGroupRequest($contactGroupRef, $include, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
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
                        $response->getHeaders()
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
     * Create request for operation 'getContactGroup'
     *
     * @param  string $contactGroupRef Id or code of the contact group (required)
     * @param  string|null $include Comma separated list of details to include: Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60; or &#x60;customer,supplier&#x60; (the default) (optional, default to 'customer,supplier')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getContactGroup'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getContactGroupRequest(
        $contactGroupRef,
        $include = 'customer,supplier',
        string $contentType = self::contentTypes['getContactGroup'][0]
    ): Request
    {

        // verify the required parameter 'contactGroupRef' is set
        if ($contactGroupRef === null || (is_array($contactGroupRef) && count($contactGroupRef) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $contactGroupRef when calling getContactGroup'
            );
        }



        $resourcePath = '/api/ContactGroup/{contactGroupRef}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include,
            'include', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($contactGroupRef !== null) {
            $resourcePath = str_replace(
                '{' . 'contactGroupRef' . '}',
                ObjectSerializer::toPathValue($contactGroupRef),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
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
                            'contents' => $formParamValueItem
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

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        if (!empty($this->config->getDomainHeader())) {
            $headers['Domain'] = $this->config->getDomainHeader();
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
    protected function createHttpClientOption(): array
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
