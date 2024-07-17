# Sberbank\AdditionalThreeDSServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**finish3dsMethod()**](AdditionalThreeDSServicesApi.md#finish3dsMethod) | **POST** /ecomm/gw/partner/api/v1/finish3dsMethod.do | Завершение 3DS Method [finish3dsMethod] |
| [**finish3dsPayment()**](AdditionalThreeDSServicesApi.md#finish3dsPayment) | **POST** /ecomm/gw/partner/api/v1/finish3dsPayment.do | Завершение аутентификации 3-D Secure [finish3dsPayment] |


## `finish3dsMethod()`

```php
finish3dsMethod($finish3ds_method_request, $x_idempotency_key): \Sberbank\Model\Finish3dsMethodResponse
```

Завершение 3DS Method [finish3dsMethod]

Запрос предназначен для завершения 3DS аутентификации Плательщика при проведении операции оплаты. Последовательность обработки запроса: * создать заказ через сервисы `register` или `registerPreAuth`, в зависимости от сценария платежа; * провести оплату через сервисы, указанные в `paymentOrder` или `paymentOrderBinding` с получением в ответе требований проведения 3DS Method (threeDSMethodURL). Значение threeDSMethodData возвращается, если в запросе был передан threeDSMethodNotificationUrl, в противном случае Клиент самостоятельно формирует объект threeDSMethodData= base64url({\"threeDSServerTransID\":\"value\",\"threeDSMethodNotificationURL\":\"value\"}); * визуализировать скрытый iframe в браузере Плательщика с отправкой HTML формы с threeDSMethodData через HTTP POST на threeDSMethodURL; * получить обратный вызов на threeDSMethodNotificationURL по результату обработки запроса 3DS Method с получением threeDSMethodData = base64url({\"threeDSServerTransID\":\"value\"} в течение таймаута 10 секунд; * вызвать сервис завершения 3DS аутентификации `finish3dsMethod`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\AdditionalThreeDSServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$finish3ds_method_request = new \Sberbank\Model\Finish3dsMethodRequest(); // \Sberbank\Model\Finish3dsMethodRequest | Запрос завершения 3DS Method
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->finish3dsMethod($finish3ds_method_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalThreeDSServicesApi->finish3dsMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **finish3ds_method_request** | [**\Sberbank\Model\Finish3dsMethodRequest**](../Model/Finish3dsMethodRequest.md)| Запрос завершения 3DS Method | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\Finish3dsMethodResponse**](../Model/Finish3dsMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finish3dsPayment()`

```php
finish3dsPayment($finish3ds_payment_request, $x_idempotency_key): \Sberbank\Model\Finish3dsPaymentResponse
```

Завершение аутентификации 3-D Secure [finish3dsPayment]

Запрос предназначен для передачи результата 3DS аутентификации Плательщиа при прямом взаимодействии с сервером ACS. Последовательность обрабтки запроса: * создать заказ через сервисы, указанные в `register` или `registerPreAuth`, в зависимости от сценария платежа; * провести оплату через сервисы, указанные в `paymentOrder`, `paymentOrderBinding` или `finish3dsMethod` с получением в ответе требований проведения 3-D Secure аутентификации (paReq или cReq); * перенаправить Плательщика на ACS по адресу, указанному в параметре acsUrl; * получить обратное перенаправление Плательщика в магазин от ACS с сообщением PARes или CRes на адрес termUrl; * вызвать сервис завершения 3DS аутентификации `finish3dsPayment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\AdditionalThreeDSServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$finish3ds_payment_request = {"userName":"testUserName","password":"testPassword","mdOrder":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","cRes":"eyJhY3NUcmFuc0lEIjogIjllNWUxMWViLTY1OTYtNDMyMi04NjU4LTJkNDY0MDUwMGYyZSIsICJ0cmFuc1N0YXR1cyI6ICJZIiwgIm1lc3NhZ2VWZXJzaW9uIjogIjIuMS4wIiwgIm1lc3NhZ2VUeXBlIjogIkNSZXMiLCAidGhyZWVEU1NlcnZlclRyYW5zSUQiOiAiOTMwNDVlNjEtZDc4My00MGYxLTg5MzQtMzNmZDU5Mzg3Y2E2In0="}; // \Sberbank\Model\Finish3dsPaymentRequest | Запрос завершения аутентификация 3-D Secure
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->finish3dsPayment($finish3ds_payment_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalThreeDSServicesApi->finish3dsPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **finish3ds_payment_request** | [**\Sberbank\Model\Finish3dsPaymentRequest**](../Model/Finish3dsPaymentRequest.md)| Запрос завершения аутентификация 3-D Secure | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\Finish3dsPaymentResponse**](../Model/Finish3dsPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
