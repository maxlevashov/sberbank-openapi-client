# Sberbank\CallbackServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bindingCallback()**](CallbackServicesApi.md#bindingCallback) | **POST** /bindingCallbackUrl | Уведомление о событии со связкой [bindingCallback] |
| [**callback()**](CallbackServicesApi.md#callback) | **POST** /callbackUrl | Уведомление о проведении платежа [callback] |
| [**receiptStatusCallback()**](CallbackServicesApi.md#receiptStatusCallback) | **POST** /receiptStatusCallbackUrl | Уведомление о результате обработки чека [receiptStatusCallback] |


## `bindingCallback()`

```php
bindingCallback($binding_callback_request)
```

Уведомление о событии со связкой [bindingCallback]

Функционал предназначен для отправки callback уведомления при изменении статуса связки. Callback уведомление представляет собой POST запрос, направляемый со стороны платежного шлюза на URL, указанный в настройках учетной записи. На текущий момент сервис отправки уведомлений доступен только для связок, созданных при проведении платежей через мобильное приложение \"Сбербанк-Онлайн\". Осуществляется 3 попытки доставки уведомления с интервалом 60 секунд между попытками

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\CallbackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$binding_callback_request = new \Sberbank\Model\BindingCallbackRequest(); // \Sberbank\Model\BindingCallbackRequest | Запрос уведомления о событии со связкой

try {
    $apiInstance->bindingCallback($binding_callback_request);
} catch (Exception $e) {
    echo 'Exception when calling CallbackServicesApi->bindingCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **binding_callback_request** | [**\Sberbank\Model\BindingCallbackRequest**](../Model/BindingCallbackRequest.md)| Запрос уведомления о событии со связкой | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `callback()`

```php
callback($callback_request)
```

Уведомление о проведении платежа [callback]

Функционал предназначен для отправки callback уведомления при изменении статуса заказа. Callback уведомление представляет собой POST запрос, направляемый со стороны платежного шлюза на URL, указанный в настройках учетной записи. Осуществляется 3 попытки доставки уведомления с интервалом 60 секунд между попытками

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\CallbackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$callback_request = new \Sberbank\Model\CallbackRequest(); // \Sberbank\Model\CallbackRequest | Запрос уведомления о проведении платежа

try {
    $apiInstance->callback($callback_request);
} catch (Exception $e) {
    echo 'Exception when calling CallbackServicesApi->callback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callback_request** | [**\Sberbank\Model\CallbackRequest**](../Model/CallbackRequest.md)| Запрос уведомления о проведении платежа | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiptStatusCallback()`

```php
receiptStatusCallback($get_receipt_status_response)
```

Уведомление о результате обработки чека [receiptStatusCallback]

<span style=\"color:red;\">__Функционал уведомления о результате обработки чека находится в разработке__</span>  Функционал предназначен для отправки callback уведомления при изменении статуса обработки чека. Callback уведомление представляет собой POST запрос, направляемый со стороны платежного шлюза на URL, указанный в корзине при регистрации заказа. Осуществляется 3 попытки доставки уведомления с интервалом 60 секунд между попытками

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\CallbackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_receipt_status_response = {"orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","orderNumber":"e2574f1785324f1592d9029cb05adbbd","receipts":[{"receiptId":"822c6862-634c-11ee-8c99-0242ac120002","operationId":"0ad563f9-c7ec-49ba-9062-a04de55b6f3f","operationType":"AUTHORIZATION","receiptType":"sell","receiptStatus":3,"origReceiptId":"23d72f20-a770-4548-9bcc-1d1a8567e071","timestamp":"11.10.2023 13:24:59","groupCode":"group_code_4612","daemonCode":"quasar","deviceCode":"KKT068508","payload":{"fiscalReceiptNumber":10,"shiftNumber":188,"receiptDatetime":"09.10.2023 15:08:00","total":24600,"fnNumber":"9999078902013948","ecrRegistrationNumber":"0000000005035122","fiscalDocumentNumber":783,"fiscalDocumentAttribute":1837776948,"fnsSite":"www.nalog.ru","ofdInn":"7709364346","ofdReceiptUrl":"https://consumer.1-ofd-test.ru/v1","fn=9999078902013948&fp=1837776948&i=783&t=20231009T150800&s=88990&n=1":null}}]}; // \Sberbank\Model\GetReceiptStatusResponse | Запрос уведомления о результате обарботки чека

try {
    $apiInstance->receiptStatusCallback($get_receipt_status_response);
} catch (Exception $e) {
    echo 'Exception when calling CallbackServicesApi->receiptStatusCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_receipt_status_response** | [**\Sberbank\Model\GetReceiptStatusResponse**](../Model/GetReceiptStatusResponse.md)| Запрос уведомления о результате обарботки чека | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
