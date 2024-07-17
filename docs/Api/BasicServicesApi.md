# Sberbank\BasicServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decline()**](BasicServicesApi.md#decline) | **POST** /ecomm/gw/partner/api/v1/decline.do | Отмена заказа до начала платежа [decline] |
| [**deposit()**](BasicServicesApi.md#deposit) | **POST** /ecomm/gw/partner/api/v1/deposit.do | Завершение двухстадийного сценария [deposit] |
| [**getOrderStatusExtended()**](BasicServicesApi.md#getOrderStatusExtended) | **POST** /ecomm/gw/partner/api/v1/getOrderStatusExtended.do | Получение информации о заказе [getOrderStatusExtended] |
| [**refund()**](BasicServicesApi.md#refund) | **POST** /ecomm/gw/partner/api/v1/refund.do | Возврат средств Плательщика [refund] |
| [**register()**](BasicServicesApi.md#register) | **POST** /ecomm/gw/partner/api/v1/register.do | Регистрация заказа [register] |
| [**registerPreAuth()**](BasicServicesApi.md#registerPreAuth) | **POST** /ecomm/gw/partner/api/v1/registerPreAuth.do | Регистрация заказа для двухстадийного сценария [registerPreAuth] |
| [**reverse()**](BasicServicesApi.md#reverse) | **POST** /ecomm/gw/partner/api/v1/reverse.do | Отмена заказа [reverse] |


## `decline()`

```php
decline($decline_request, $x_idempotency_key): \Sberbank\Model\DeclineResponse
```

Отмена заказа до начала платежа [decline]

Запрос предназначен для отмены заказа до момента начала его оплаты Плательщиком (до ввода данных карты).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$decline_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1"}; // \Sberbank\Model\DeclineRequest | Запрос отмены заказа до начала платежа
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->decline($decline_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->decline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **decline_request** | [**\Sberbank\Model\DeclineRequest**](../Model/DeclineRequest.md)| Запрос отмены заказа до начала платежа | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\DeclineResponse**](../Model/DeclineResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deposit()`

```php
deposit($deposit_request, $x_idempotency_key): \Sberbank\Model\DepositResponse
```

Завершение двухстадийного сценария [deposit]

Запрос предназначен для выполнения дополнительного подтверждения оплаты двухстадийного платежа. При успешной обработке подтверждается списание средств со счета Плательщика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deposit_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","amount":14900}; // \Sberbank\Model\DepositRequest | Запрос завершения двухстадийного сценария
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->deposit($deposit_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->deposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deposit_request** | [**\Sberbank\Model\DepositRequest**](../Model/DepositRequest.md)| Запрос завершения двухстадийного сценария | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\DepositResponse**](../Model/DepositResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderStatusExtended()`

```php
getOrderStatusExtended($get_order_status_extended_request): \Sberbank\Model\GetOrderStatusExtendedResponse
```

Получение информации о заказе [getOrderStatusExtended]

Запрос предназначен для получения полных данных по ранее зарегистрированному заказу независимо от его статуса.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_order_status_extended_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1"}; // \Sberbank\Model\GetOrderStatusExtendedRequest | Запрос получения информации о заказе

try {
    $result = $apiInstance->getOrderStatusExtended($get_order_status_extended_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->getOrderStatusExtended: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_order_status_extended_request** | [**\Sberbank\Model\GetOrderStatusExtendedRequest**](../Model/GetOrderStatusExtendedRequest.md)| Запрос получения информации о заказе | |

### Return type

[**\Sberbank\Model\GetOrderStatusExtendedResponse**](../Model/GetOrderStatusExtendedResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($refund_request, $x_idempotency_key): \Sberbank\Model\RefundResponse
```

Возврат средств Плательщика [refund]

Запрос предназначен для выполнения частичного или полного возврата средств Плательщика, после выполнения взаиморасчетов банков-участников по операции оплаты.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","amount":14900}; // \Sberbank\Model\RefundRequest | Запрос возврата средств Плательщика
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->refund($refund_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_request** | [**\Sberbank\Model\RefundRequest**](../Model/RefundRequest.md)| Запрос возврата средств Плательщика | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($register_request, $x_idempotency_key): \Sberbank\Model\RegisterResponse
```

Регистрация заказа [register]

Запрос предназначен для регистрации (создания) заказа в Шлюзе. При успешной обработке запроса заказу присваивается номер (идентификатор), уникальный в рамках Шлюза. Метод используется для регистрации заказа с последующией оплатой любым способом:   - оплата картой   - оплата SberPay: подробное описание в разделе [Оплата с помощью SberPay](doc#section/Oplata-s-pomoshyu-SberPay)   - оплата СБП: [подробное описание в документации](promo/SBP_integration.pdf)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_request = {"userName":"testUserName","password":"testPassword","orderNumber":"e2574f1785324f1592d9029cb05adbbd","amount":19900,"returnUrl":"https://testmerchant.ru/return","features":"FORCE_SSL"}; // \Sberbank\Model\RegisterRequest | Запрос регистрации заказа по одностадийному сценарию
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->register($register_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_request** | [**\Sberbank\Model\RegisterRequest**](../Model/RegisterRequest.md)| Запрос регистрации заказа по одностадийному сценарию | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\RegisterResponse**](../Model/RegisterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerPreAuth()`

```php
registerPreAuth($register_pre_auth_request, $x_idempotency_key): \Sberbank\Model\RegisterResponse
```

Регистрация заказа для двухстадийного сценария [registerPreAuth]

Запрос предназначен для регистрации (создания) заказа в Шлюзе, дальнейшая обработка (оплата) которого требует дополнительного подтверждения. При успешной обработке запроса заказу присваивается номер (идентификатор), уникальный в рамках Шлюза.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_pre_auth_request = {"userName":"testUserName","password":"testPassword","orderNumber":"e2574f1785324f1592d9029cb05adbbd","amount":19900,"returnUrl":"https://testmerchant.ru/return","features":"FORCE_SSL"}; // \Sberbank\Model\RegisterPreAuthRequest | Запрос регистрации заказа по двухстадийному сценарию
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->registerPreAuth($register_pre_auth_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->registerPreAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_pre_auth_request** | [**\Sberbank\Model\RegisterPreAuthRequest**](../Model/RegisterPreAuthRequest.md)| Запрос регистрации заказа по двухстадийному сценарию | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\RegisterResponse**](../Model/RegisterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reverse()`

```php
reverse($reverse_request, $x_idempotency_key): \Sberbank\Model\ReverseResponse
```

Отмена заказа [reverse]

Запрос предназначен для снятия блокировки средств по операции оплаты. Может быть осуществлена до момента начала взаиморасчетов банков-участников. При оплате Одностадийного платежа может быть выполнена в течение банковского дня совершения операции (~ до 23:59 МСК). При оплате по Двухстадийному сценарию может быть выполнена только до операции завершения двухстадийного сценария.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BasicServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reverse_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1"}; // \Sberbank\Model\ReverseRequest | Запрос отмены заказа
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->reverse($reverse_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicServicesApi->reverse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reverse_request** | [**\Sberbank\Model\ReverseRequest**](../Model/ReverseRequest.md)| Запрос отмены заказа | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\ReverseResponse**](../Model/ReverseResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
