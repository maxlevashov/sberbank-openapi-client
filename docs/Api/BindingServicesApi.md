# Sberbank\BindingServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bindCard()**](BindingServicesApi.md#bindCard) | **POST** /ecomm/gw/partner/api/v1/bindCard.do | Активация связки Плательщика [bindCard] |
| [**getBindings()**](BindingServicesApi.md#getBindings) | **POST** /ecomm/gw/partner/api/v1/getBindings.do | Получение связок по идентификатору Плательщика [getBindings] |
| [**getBindingsByCardOrId()**](BindingServicesApi.md#getBindingsByCardOrId) | **POST** /ecomm/gw/partner/api/v1/getBindingsByCardOrId.do | Получение связок по номеру карты или идентификатору связки Плательщика [getBindingsByCardOrId] |
| [**paymentOrderBinding()**](BindingServicesApi.md#paymentOrderBinding) | **POST** /ecomm/gw/partner/api/v1/paymentOrderBinding.do | Проведение оплаты по связке [paymentOrderBinding] |
| [**recurrentPayment()**](BindingServicesApi.md#recurrentPayment) | **POST** /ecomm/gw/partner/api/v1/recurrentPayment.do | Проведение периодического платежа [recurrentPayment] |
| [**unBindCard()**](BindingServicesApi.md#unBindCard) | **POST** /ecomm/gw/partner/api/v1/unbindCard.do | Деактивация связки Плательщика [unbindCard] |


## `bindCard()`

```php
bindCard($bind_card_request): \Sberbank\Model\BindCardResponse
```

Активация связки Плательщика [bindCard]

Запрос предназначен для активации ранее дективированной связки (при условии актуальности ее срока действия).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BindingServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bind_card_request = new \Sberbank\Model\BindCardRequest(); // \Sberbank\Model\BindCardRequest | Запрос активации связки Плательщика

try {
    $result = $apiInstance->bindCard($bind_card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindingServicesApi->bindCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bind_card_request** | [**\Sberbank\Model\BindCardRequest**](../Model/BindCardRequest.md)| Запрос активации связки Плательщика | |

### Return type

[**\Sberbank\Model\BindCardResponse**](../Model/BindCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBindings()`

```php
getBindings($get_bindings_request): \Sberbank\Model\GetBindingsResponse
```

Получение связок по идентификатору Плательщика [getBindings]

Запрос предназначен для получения списка связок, привязанных к конкретному идентификатору Плательщика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BindingServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_bindings_request = new \Sberbank\Model\GetBindingsRequest(); // \Sberbank\Model\GetBindingsRequest | Запрос получения связок по идентификатору Плательщика

try {
    $result = $apiInstance->getBindings($get_bindings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindingServicesApi->getBindings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_bindings_request** | [**\Sberbank\Model\GetBindingsRequest**](../Model/GetBindingsRequest.md)| Запрос получения связок по идентификатору Плательщика | |

### Return type

[**\Sberbank\Model\GetBindingsResponse**](../Model/GetBindingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBindingsByCardOrId()`

```php
getBindingsByCardOrId($get_bindings_by_card_or_id_request): \Sberbank\Model\GetBindingsByCardOrIdResponse
```

Получение связок по номеру карты или идентификатору связки Плательщика [getBindingsByCardOrId]

Запрос предназначен для получения списка связок, привязанных к конкретному идентификатору Плательщика на основании переданной связки данного идентификатора Плательщика или полного номера карты. Для работы с полным номером карты необходимы дополнительные настройки учетной записи.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BindingServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_bindings_by_card_or_id_request = {"userName":"testUserName","password":"testPassword","bindingId":"fdbbc879-c171-4cff-b636-ceab16fd6fce","showExpired":true,"showInactive":true}; // \Sberbank\Model\GetBindingsByCardOrIdRequest | Запрос получения связок по номеру карты или идентификатору связки Плательщика

try {
    $result = $apiInstance->getBindingsByCardOrId($get_bindings_by_card_or_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindingServicesApi->getBindingsByCardOrId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_bindings_by_card_or_id_request** | [**\Sberbank\Model\GetBindingsByCardOrIdRequest**](../Model/GetBindingsByCardOrIdRequest.md)| Запрос получения связок по номеру карты или идентификатору связки Плательщика | |

### Return type

[**\Sberbank\Model\GetBindingsByCardOrIdResponse**](../Model/GetBindingsByCardOrIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentOrderBinding()`

```php
paymentOrderBinding($payment_order_binding_request, $x_idempotency_key): \Sberbank\Model\PaymentOrderBindingResponse
```

Проведение оплаты по связке [paymentOrderBinding]

Запрос предназначен для совершения оплаты (блокировки средств) по ранее сохраненной связке.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BindingServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_order_binding_request = {"userName":"testUserName","password":"testPassword","mdOrder":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","bindingId":"fdbbc879-c171-4cff-b636-ceab16fd6fce","ip":"127.0.0.1"}; // \Sberbank\Model\PaymentOrderBindingRequest | Запрос проведения оплаты по связке
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->paymentOrderBinding($payment_order_binding_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindingServicesApi->paymentOrderBinding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_order_binding_request** | [**\Sberbank\Model\PaymentOrderBindingRequest**](../Model/PaymentOrderBindingRequest.md)| Запрос проведения оплаты по связке | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\PaymentOrderBindingResponse**](../Model/PaymentOrderBindingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recurrentPayment()`

```php
recurrentPayment($recurrent_payment_request, $x_idempotency_key): \Sberbank\Model\RecurrentPaymentResponse
```

Проведение периодического платежа [recurrentPayment]

Запрос предназначен для одновременной регистрации заказа и его оплаты с использованием связки. Совмещает в себе два действия: register.do и paymentOrderBinding.do

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BindingServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recurrent_payment_request = {"userName":"testUserName","password":"testPassword","orderNumber":"e2574f1785324f1592d9029cb05adbbd","bindingId":"fdbbc879-c171-4cff-b636-ceab16fd6fce","amount":19900}; // \Sberbank\Model\RecurrentPaymentRequest | Запрос проведения периодического платежа
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->recurrentPayment($recurrent_payment_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindingServicesApi->recurrentPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recurrent_payment_request** | [**\Sberbank\Model\RecurrentPaymentRequest**](../Model/RecurrentPaymentRequest.md)| Запрос проведения периодического платежа | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\RecurrentPaymentResponse**](../Model/RecurrentPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unBindCard()`

```php
unBindCard($un_bind_card_request): \Sberbank\Model\UnBindCardResponse
```

Деактивация связки Плательщика [unbindCard]

Запрос предназначен для деактивации ранее сохраненной связки.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\BindingServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$un_bind_card_request = new \Sberbank\Model\UnBindCardRequest(); // \Sberbank\Model\UnBindCardRequest | Запрос деактивации связки Плательщика

try {
    $result = $apiInstance->unBindCard($un_bind_card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindingServicesApi->unBindCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **un_bind_card_request** | [**\Sberbank\Model\UnBindCardRequest**](../Model/UnBindCardRequest.md)| Запрос деактивации связки Плательщика | |

### Return type

[**\Sberbank\Model\UnBindCardResponse**](../Model/UnBindCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
