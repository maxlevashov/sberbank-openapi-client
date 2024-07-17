# Sberbank\FiscalizationServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**doReceipt()**](FiscalizationServicesApi.md#doReceipt) | **POST** /ecomm/gw/partner/api/ofd/v1/doReceipt | Создание чека [doReceipt] |
| [**getReceiptStatus()**](FiscalizationServicesApi.md#getReceiptStatus) | **POST** /ecomm/gw/partner/api/ofd/v1/getReceiptStatus | Получение информации о результате обработки чека [getReceiptStatus] |
| [**retryReceipt()**](FiscalizationServicesApi.md#retryReceipt) | **POST** /ecomm/gw/partner/api/ofd/v1/retryReceipt | Переотправка чека без изменения Корзины [retryReceipt] |


## `doReceipt()`

```php
doReceipt($do_receipt_request): \Sberbank\Model\DoReceiptResponse
```

Создание чека [doReceipt]

Сервис позволяет сформировать новый чек или изменить корзину в неуспешном чеке с использованием новой Корзины для повторной переотправки.  __Создание нового чека__  Сервис `doReceipt` используется для создания чека полного расчета, чека возврата предоплаты или аванса на холдирование отдельно от финансовой операции. Для создания чека необходимо передать контакт Покупателя __email/phone__ и Корзину __orderBundle__. Если ранее был создан чек на Предоплату или Аванс, рекомендуется перед формированием чека полного расчета убедиться в успешном создании чека Предоплаты через `getReceiptStatus` или получив `callback`.  __Переотправка неуспешного чека с новой Корзиной__  В некоторых случаях кассовый сервис не может зарегистрировать чек из-за некорректных данных в Корзине, ошибок в работе ККТ или по иным причинам. Сервис запроса статуса `getReceiptStatus` сообщит об этом в блоке error, предоставив код и описание ошибки. Поле __recommendation__ позволяет определить, есть ли необходимость в корректировке корзины и повторной отправке чека. Для попытки переотправки чека с новой корзиной необходимо: * Дождаться результата обработки чека в `callback` или запросить статус через `getReceiptStatus`; * Получить статус Ошибка обработки чека (receiptStatus=4) или Попытки отправки чека исчерпаны (receiptStatus=5) со значением recommendation 2 или 3; * Изучить текст ошибки, внести изменения в запрос; * Отправить запрос `doReceipt` с указанием __receiptid__ исправляемого чека и контактами Покупателя __email/phone__.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\FiscalizationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$do_receipt_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1","email":"customer@testmail.ru","orderBundle":{"ffdVersion":"1.2","receiptType":"sell","company":{"email":"email@testshop.ru","sno":"osn","inn":"5027119066","paymentAddress":"http://testshop.ru"},"payments":[{"type":1,"sum":24600}],"total":24600,"cartItems":{"items":[{"positionId":"1","itemCode":"51","name":"Сырок творожный со сгущенкой","quantity":{"value":1,"measure":"0"},"markCode":{"gs1m":"MDEwNDYwNTg2NTQ4NzE2MjIxbj1ZR3lJbUhVOmlNWh05MUVFMDYdOTJYNE1sVzk2R1o2ZmV2RGhnUjJhaHNKNUltTmtVZUsyMkdGeEpVMmxjREpRPQ=="},"itemPrice":4700,"itemAmount":4700,"paymentMethod":"full_payment","paymentObject":"33","tax":{"taxType":2}},{"positionId":"2","itemCode":"124","name":"Виноград без косточек","quantity":{"value":0.4,"measure":"11"},"itemPrice":25000,"itemAmount":10000,"paymentMethod":"full_payment","paymentObject":"1","tax":{"taxType":4}},{"positionId":"3","itemCode":"341","name":"Услуга доставки","quantity":{"value":1,"measure":"0"},"itemPrice":9900,"itemAmount":9900,"paymentMethod":"full_payment","paymentObject":"4","tax":{"taxType":4}}]}}}; // \Sberbank\Model\DoReceiptRequest | Запрос создания чека

try {
    $result = $apiInstance->doReceipt($do_receipt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalizationServicesApi->doReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **do_receipt_request** | [**\Sberbank\Model\DoReceiptRequest**](../Model/DoReceiptRequest.md)| Запрос создания чека | |

### Return type

[**\Sberbank\Model\DoReceiptResponse**](../Model/DoReceiptResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceiptStatus()`

```php
getReceiptStatus($get_receipt_status_request): \Sberbank\Model\GetReceiptStatusResponse
```

Получение информации о результате обработки чека [getReceiptStatus]

Сервис для получения информации о результате обработки чека или чеков.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\FiscalizationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_receipt_status_request = {"userName":"testUserName","password":"testPassword","orderId":"a67b0ced-c9a4-4cfb-bce3-b9595afaafc1"}; // \Sberbank\Model\GetReceiptStatusRequest | Запрос статуса обработки чека. При передаче `orderId` или `orderNumber` отражаются все сформированные чеки по Заказу, при передаче `receiptId` - конкретный чек. Дополнительно доступен поиск по статусу чека. Рекомендуем запрашивать статус чека не ранее чем через 6 минут после проведения операции.

try {
    $result = $apiInstance->getReceiptStatus($get_receipt_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalizationServicesApi->getReceiptStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_receipt_status_request** | [**\Sberbank\Model\GetReceiptStatusRequest**](../Model/GetReceiptStatusRequest.md)| Запрос статуса обработки чека. При передаче &#x60;orderId&#x60; или &#x60;orderNumber&#x60; отражаются все сформированные чеки по Заказу, при передаче &#x60;receiptId&#x60; - конкретный чек. Дополнительно доступен поиск по статусу чека. Рекомендуем запрашивать статус чека не ранее чем через 6 минут после проведения операции. | |

### Return type

[**\Sberbank\Model\GetReceiptStatusResponse**](../Model/GetReceiptStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryReceipt()`

```php
retryReceipt($retry_receipt_request): \Sberbank\Model\RetryReceiptResponse
```

Переотправка чека без изменения Корзины [retryReceipt]

Сервис позволяет сформировать повторный запрос на создание чека с Корзиной, идентичной первому чеку. Сервис используется только для переотправки неуспешных чеков. Последовательность обработки запроса: * Дождаться результата обработки чека в `callback` или запросить статус через `getReceiptStatus`. * Получить один из двух статусов, при котором возможна переотправка: Ошибка обработки чека (receiptStatus=4) или Ошибка отправки чека (исчерпаны попытки отправки) (receiptStatus=5). * Использовать `retryReceipt` с включением receiptId чека, который нужно переотправить. Возможна отправка массива receiptId, если необходимо переотправить несколько чеков. * На этапе получения статуса регистрации, при получении кода ошибки 1 с типом ошибки “timeout” происходит несколько автоматических попыток повторной регистрации чека. В связи с этим рекомендуется использовать сервис `retryReceipt` после исчерпания всех попыток регистрации, не ранее 15 часов после создания начального чека. * При использовании сервиса обратите внимание на сроки предоставления чека согласно 54-ФЗ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\FiscalizationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$retry_receipt_request = new \Sberbank\Model\RetryReceiptRequest(); // \Sberbank\Model\RetryReceiptRequest | Запрос переотправки чека.

try {
    $result = $apiInstance->retryReceipt($retry_receipt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalizationServicesApi->retryReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retry_receipt_request** | [**\Sberbank\Model\RetryReceiptRequest**](../Model/RetryReceiptRequest.md)| Запрос переотправки чека. | |

### Return type

[**\Sberbank\Model\RetryReceiptResponse**](../Model/RetryReceiptResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
