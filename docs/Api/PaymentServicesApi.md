# Sberbank\PaymentServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentOrder()**](PaymentServicesApi.md#paymentOrder) | **POST** /ecomm/gw/partner/api/v1/paymentOrder.do | Проведение оплаты по карте [paymentOrder] |
| [**paymentOrderBySubscription()**](PaymentServicesApi.md#paymentOrderBySubscription) | **POST** /ecomm/gw/partner/api/v1/paymentOrderBySubscription | Проведение оплаты по подписке СБП [paymentOrderBySubscription] |
| [**paymentSberPay()**](PaymentServicesApi.md#paymentSberPay) | **POST** /ecomm/gw/partner/api/v1/paymentSberPay.do | Проведение оплаты через мобильное приложение \&quot;Сбербанк-Онлайн\&quot; [paymentSberPay] |


## `paymentOrder()`

```php
paymentOrder($payment_order_request, $x_idempotency_key): \Sberbank\Model\PaymentOrderResponse
```

Проведение оплаты по карте [paymentOrder]

Запрос предназначен для блокировки средств на карте Плательщика для проведения дальнейших расчетов между банками-участниками. Доступен при наличии соответствующих разрешений.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_order_request = {"userName":"testUserName","password":"testPassword","MDORDER":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","$PAN":"2201382000000047","$CVC":"123","YYYY":"2025","MM":"12"}; // \Sberbank\Model\PaymentOrderRequest | Запрос проведения оплаты по карте
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->paymentOrder($payment_order_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->paymentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_order_request** | [**\Sberbank\Model\PaymentOrderRequest**](../Model/PaymentOrderRequest.md)| Запрос проведения оплаты по карте | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\PaymentOrderResponse**](../Model/PaymentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentOrderBySubscription()`

```php
paymentOrderBySubscription($payment_order_by_subscription_request, $x_idempotency_key): \Sberbank\Model\PaymentOrderBySubscriptionResponse
```

Проведение оплаты по подписке СБП [paymentOrderBySubscription]

Запрос предназначен для выполнения оплаты по подписке СБП.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_order_by_subscription_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","subscriptionId":"c9403ef2f9254736a5af837238ce05b1","memberId":100000000111}; // \Sberbank\Model\PaymentOrderBySubscriptionRequest | Запрос проведения оплаты по подписке СБП
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->paymentOrderBySubscription($payment_order_by_subscription_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->paymentOrderBySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_order_by_subscription_request** | [**\Sberbank\Model\PaymentOrderBySubscriptionRequest**](../Model/PaymentOrderBySubscriptionRequest.md)| Запрос проведения оплаты по подписке СБП | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\PaymentOrderBySubscriptionResponse**](../Model/PaymentOrderBySubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentSberPay()`

```php
paymentSberPay($payment_sber_pay_request, $x_idempotency_key): \Sberbank\Model\PaymentSberPayResponse
```

Проведение оплаты через мобильное приложение \"Сбербанк-Онлайн\" [paymentSberPay]

Запрос предназначен для выполнения оплаты посредством функционала SberPay, доступного в мобильном приложении \"Сбербанк-Онлайн\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_sber_pay_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","phone":"79011234567"}; // \Sberbank\Model\PaymentSberPayRequest | Запрос проведения оплаты через мобильное приложение \"Сбербанк-Онлайн\"
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->paymentSberPay($payment_sber_pay_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->paymentSberPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_sber_pay_request** | [**\Sberbank\Model\PaymentSberPayRequest**](../Model/PaymentSberPayRequest.md)| Запрос проведения оплаты через мобильное приложение \&quot;Сбербанк-Онлайн\&quot; | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\PaymentSberPayResponse**](../Model/PaymentSberPayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
