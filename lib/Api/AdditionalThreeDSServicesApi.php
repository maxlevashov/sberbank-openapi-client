<?php
/**
 * AdditionalThreeDSServicesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API платёжного шлюза Сбербанка
 *
 * Настоящий документ описывает программные интерфейсы платёжного шлюза Сбербанка, который позволяет проводить платежи в интернет-эквайринге.
 *
 * The version of the OpenAPI document: 1.0.7
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Sberbank\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Sberbank\ApiException;
use Sberbank\Configuration;
use Sberbank\HeaderSelector;
use Sberbank\ObjectSerializer;

/**
 * AdditionalThreeDSServicesApi Class Doc Comment
 *
 * @category Class
 * @package  Sberbank
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalThreeDSServicesApi
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
        'finish3dsMethod' => [
            'application/json',
        ],
        'finish3dsPayment' => [
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
     * Operation finish3dsMethod
     *
     * Завершение 3DS Method [finish3dsMethod]
     *
     * @param  \Sberbank\Model\Finish3dsMethodRequest $finish3ds_method_request Запрос завершения 3DS Method (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsMethod'] to see the possible values for this operation
     *
     * @throws \Sberbank\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Sberbank\Model\Finish3dsMethodResponse
     */
    public function finish3dsMethod($finish3ds_method_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsMethod'][0])
    {
        list($response) = $this->finish3dsMethodWithHttpInfo($finish3ds_method_request, $x_idempotency_key, $contentType);
        return $response;
    }

    /**
     * Operation finish3dsMethodWithHttpInfo
     *
     * Завершение 3DS Method [finish3dsMethod]
     *
     * @param  \Sberbank\Model\Finish3dsMethodRequest $finish3ds_method_request Запрос завершения 3DS Method (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsMethod'] to see the possible values for this operation
     *
     * @throws \Sberbank\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Sberbank\Model\Finish3dsMethodResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function finish3dsMethodWithHttpInfo($finish3ds_method_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsMethod'][0])
    {
        $request = $this->finish3dsMethodRequest($finish3ds_method_request, $x_idempotency_key, $contentType);

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
                    if ('\Sberbank\Model\Finish3dsMethodResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Sberbank\Model\Finish3dsMethodResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Sberbank\Model\Finish3dsMethodResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Sberbank\Model\Finish3dsMethodResponse';
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
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Sberbank\Model\Finish3dsMethodResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation finish3dsMethodAsync
     *
     * Завершение 3DS Method [finish3dsMethod]
     *
     * @param  \Sberbank\Model\Finish3dsMethodRequest $finish3ds_method_request Запрос завершения 3DS Method (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function finish3dsMethodAsync($finish3ds_method_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsMethod'][0])
    {
        return $this->finish3dsMethodAsyncWithHttpInfo($finish3ds_method_request, $x_idempotency_key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation finish3dsMethodAsyncWithHttpInfo
     *
     * Завершение 3DS Method [finish3dsMethod]
     *
     * @param  \Sberbank\Model\Finish3dsMethodRequest $finish3ds_method_request Запрос завершения 3DS Method (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function finish3dsMethodAsyncWithHttpInfo($finish3ds_method_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsMethod'][0])
    {
        $returnType = '\Sberbank\Model\Finish3dsMethodResponse';
        $request = $this->finish3dsMethodRequest($finish3ds_method_request, $x_idempotency_key, $contentType);

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
     * Create request for operation 'finish3dsMethod'
     *
     * @param  \Sberbank\Model\Finish3dsMethodRequest $finish3ds_method_request Запрос завершения 3DS Method (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function finish3dsMethodRequest($finish3ds_method_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsMethod'][0])
    {

        // verify the required parameter 'finish3ds_method_request' is set
        if ($finish3ds_method_request === null || (is_array($finish3ds_method_request) && count($finish3ds_method_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $finish3ds_method_request when calling finish3dsMethod'
            );
        }

        if ($x_idempotency_key !== null && strlen($x_idempotency_key) > 255) {
            throw new \InvalidArgumentException('invalid length for "$x_idempotency_key" when calling AdditionalThreeDSServicesApi.finish3dsMethod, must be smaller than or equal to 255.');
        }
        if ($x_idempotency_key !== null && strlen($x_idempotency_key) < 1) {
            throw new \InvalidArgumentException('invalid length for "$x_idempotency_key" when calling AdditionalThreeDSServicesApi.finish3dsMethod, must be bigger than or equal to 1.');
        }
        if ($x_idempotency_key !== null && !preg_match("/^[0-9a-zA-Z-_#]*$/", $x_idempotency_key)) {
            throw new \InvalidArgumentException("invalid value for \"x_idempotency_key\" when calling AdditionalThreeDSServicesApi.finish3dsMethod, must conform to the pattern /^[0-9a-zA-Z-_#]*$/.");
        }
        

        $resourcePath = '/ecomm/gw/partner/api/v1/finish3dsMethod.do';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_idempotency_key !== null) {
            $headerParams['x-idempotencyKey'] = ObjectSerializer::toHeaderValue($x_idempotency_key);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/html', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($finish3ds_method_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($finish3ds_method_request));
            } else {
                $httpBody = $finish3ds_method_request;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation finish3dsPayment
     *
     * Завершение аутентификации 3-D Secure [finish3dsPayment]
     *
     * @param  \Sberbank\Model\Finish3dsPaymentRequest $finish3ds_payment_request Запрос завершения аутентификация 3-D Secure (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsPayment'] to see the possible values for this operation
     *
     * @throws \Sberbank\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Sberbank\Model\Finish3dsPaymentResponse
     */
    public function finish3dsPayment($finish3ds_payment_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsPayment'][0])
    {
        list($response) = $this->finish3dsPaymentWithHttpInfo($finish3ds_payment_request, $x_idempotency_key, $contentType);
        return $response;
    }

    /**
     * Operation finish3dsPaymentWithHttpInfo
     *
     * Завершение аутентификации 3-D Secure [finish3dsPayment]
     *
     * @param  \Sberbank\Model\Finish3dsPaymentRequest $finish3ds_payment_request Запрос завершения аутентификация 3-D Secure (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsPayment'] to see the possible values for this operation
     *
     * @throws \Sberbank\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Sberbank\Model\Finish3dsPaymentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function finish3dsPaymentWithHttpInfo($finish3ds_payment_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsPayment'][0])
    {
        $request = $this->finish3dsPaymentRequest($finish3ds_payment_request, $x_idempotency_key, $contentType);

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
                    if ('\Sberbank\Model\Finish3dsPaymentResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Sberbank\Model\Finish3dsPaymentResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Sberbank\Model\Finish3dsPaymentResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Sberbank\Model\Finish3dsPaymentResponse';
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
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Sberbank\Model\Finish3dsPaymentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation finish3dsPaymentAsync
     *
     * Завершение аутентификации 3-D Secure [finish3dsPayment]
     *
     * @param  \Sberbank\Model\Finish3dsPaymentRequest $finish3ds_payment_request Запрос завершения аутентификация 3-D Secure (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function finish3dsPaymentAsync($finish3ds_payment_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsPayment'][0])
    {
        return $this->finish3dsPaymentAsyncWithHttpInfo($finish3ds_payment_request, $x_idempotency_key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation finish3dsPaymentAsyncWithHttpInfo
     *
     * Завершение аутентификации 3-D Secure [finish3dsPayment]
     *
     * @param  \Sberbank\Model\Finish3dsPaymentRequest $finish3ds_payment_request Запрос завершения аутентификация 3-D Secure (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function finish3dsPaymentAsyncWithHttpInfo($finish3ds_payment_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsPayment'][0])
    {
        $returnType = '\Sberbank\Model\Finish3dsPaymentResponse';
        $request = $this->finish3dsPaymentRequest($finish3ds_payment_request, $x_idempotency_key, $contentType);

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
     * Create request for operation 'finish3dsPayment'
     *
     * @param  \Sberbank\Model\Finish3dsPaymentRequest $finish3ds_payment_request Запрос завершения аутентификация 3-D Secure (required)
     * @param  string $x_idempotency_key &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['finish3dsPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function finish3dsPaymentRequest($finish3ds_payment_request, $x_idempotency_key = null, string $contentType = self::contentTypes['finish3dsPayment'][0])
    {

        // verify the required parameter 'finish3ds_payment_request' is set
        if ($finish3ds_payment_request === null || (is_array($finish3ds_payment_request) && count($finish3ds_payment_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $finish3ds_payment_request when calling finish3dsPayment'
            );
        }

        if ($x_idempotency_key !== null && strlen($x_idempotency_key) > 255) {
            throw new \InvalidArgumentException('invalid length for "$x_idempotency_key" when calling AdditionalThreeDSServicesApi.finish3dsPayment, must be smaller than or equal to 255.');
        }
        if ($x_idempotency_key !== null && strlen($x_idempotency_key) < 1) {
            throw new \InvalidArgumentException('invalid length for "$x_idempotency_key" when calling AdditionalThreeDSServicesApi.finish3dsPayment, must be bigger than or equal to 1.');
        }
        if ($x_idempotency_key !== null && !preg_match("/^[0-9a-zA-Z-_#]*$/", $x_idempotency_key)) {
            throw new \InvalidArgumentException("invalid value for \"x_idempotency_key\" when calling AdditionalThreeDSServicesApi.finish3dsPayment, must conform to the pattern /^[0-9a-zA-Z-_#]*$/.");
        }
        

        $resourcePath = '/ecomm/gw/partner/api/v1/finish3dsPayment.do';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_idempotency_key !== null) {
            $headerParams['x-idempotencyKey'] = ObjectSerializer::toHeaderValue($x_idempotency_key);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/html', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($finish3ds_payment_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($finish3ds_payment_request));
            } else {
                $httpBody = $finish3ds_payment_request;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
