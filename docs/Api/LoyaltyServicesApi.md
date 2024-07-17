# Sberbank\LoyaltyServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**autoCompletion()**](LoyaltyServicesApi.md#autoCompletion) | **POST** /ecomm/gw/partner/api/v1/autoCompletion | Завершение двухстадийного сценария [autoCompletion] |
| [**autoRefund()**](LoyaltyServicesApi.md#autoRefund) | **POST** /ecomm/gw/partner/api/v1/autoRefund | Возврат средств Плательщика [autoRefund] |
| [**getBindingsByCardOrId()**](LoyaltyServicesApi.md#getBindingsByCardOrId) | **POST** /ecomm/gw/partner/api/v1/getLoyaltyBalance | Получение баланса бонусов Спасибо [getLoyaltyBalance] |


## `autoCompletion()`

```php
autoCompletion($auto_completion_request, $x_idempotency_key): \Sberbank\Model\AutoCompletionResponse
```

Завершение двухстадийного сценария [autoCompletion]

Запрос предназначен для выполнения дополнительного подтверждения оплаты двухстадийного платежа. При успешной обработке подтверждается списание средств со счета Плательщика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\LoyaltyServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auto_completion_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","compositeAmount":14900}; // \Sberbank\Model\AutoCompletionRequest | Запрос завершения двухстадийного сценария
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->autoCompletion($auto_completion_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyServicesApi->autoCompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_completion_request** | [**\Sberbank\Model\AutoCompletionRequest**](../Model/AutoCompletionRequest.md)| Запрос завершения двухстадийного сценария | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\AutoCompletionResponse**](../Model/AutoCompletionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `autoRefund()`

```php
autoRefund($auto_refund_request, $x_idempotency_key): \Sberbank\Model\AutoRefundResponse
```

Возврат средств Плательщика [autoRefund]

Запрос предназначен для выполнения частичного или полного возврата средств Плательщика, после выполнения взаиморасчетов банков-участников по операции оплаты.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\LoyaltyServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auto_refund_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","compositeAmount":14900}; // \Sberbank\Model\AutoRefundRequest | Запрос возврата средств Плательщика
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->autoRefund($auto_refund_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyServicesApi->autoRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_refund_request** | [**\Sberbank\Model\AutoRefundRequest**](../Model/AutoRefundRequest.md)| Запрос возврата средств Плательщика | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\AutoRefundResponse**](../Model/AutoRefundResponse.md)

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
getBindingsByCardOrId($get_loyalty_balance_request): \Sberbank\Model\GetLoyaltyBalanceResponse
```

Получение баланса бонусов Спасибо [getLoyaltyBalance]

Запрос для получения бонусного баланса Спасибо по связке Плательщика

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\LoyaltyServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_loyalty_balance_request = {"userName":"testUserName","password":"testPassword","bindingId":"fdbbc879-c171-4cff-b636-ceab16fd6fce"}; // \Sberbank\Model\GetLoyaltyBalanceRequest | Запрос для получения бонусного баланса Спасибо по идентификатору связки Плательщика. Для работы с данным сервисом необходимы дополнительные настройки учетной записи.

try {
    $result = $apiInstance->getBindingsByCardOrId($get_loyalty_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyServicesApi->getBindingsByCardOrId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_loyalty_balance_request** | [**\Sberbank\Model\GetLoyaltyBalanceRequest**](../Model/GetLoyaltyBalanceRequest.md)| Запрос для получения бонусного баланса Спасибо по идентификатору связки Плательщика. Для работы с данным сервисом необходимы дополнительные настройки учетной записи. | |

### Return type

[**\Sberbank\Model\GetLoyaltyBalanceResponse**](../Model/GetLoyaltyBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
