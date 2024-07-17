# Sberbank\MirPayServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentDirect()**](MirPayServicesApi.md#paymentDirect) | **POST** /ecomm/gw/partner/api/v1/mir/paymentDirect.do | Проведение платежа с использованием прямого взаимодействия Клиента с MirPay [paymentDirectMirPay] |


## `paymentDirect()`

```php
paymentDirect($payment_direct_request, $x_idempotency_key): \Sberbank\Model\PaymentDirectResponse
```

Проведение платежа с использованием прямого взаимодействия Клиента с MirPay [paymentDirectMirPay]

Сервис проведения оплаты с использованием приложения MirPay (In-application) с интеграцией Клиента по схеме агрегатора и расшифровкой платёжных данных на стороне Клиента. Может выполняться как с предварительной регистрацией заказа (логины, сумма, идентифкатор заказа и сценарий проведения платежа в запросах должны совпадать), так и без неё

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\MirPayServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_direct_request = {"userName":"testUserName","password":"testPassword","amount":10000,"orderNumber":"e2574f1785324f1592d9029cb05adbbd","paymentToken":"eyJ0YW4iOiIyMjAwMTIqKioqKioqKiozNDg2IiwiY2F2IjoiM0Q2RkM4MjZBMDhDODJCODk3ODAwMjlGNjk2NzBGRERDRjI5OUIiLCJ0ZXkiOjI5LCJ0ZW0iOjMsInRyYW5zSWQiOiI1YWI1MjQ4Ny0xNzdmLTQ2NGItYjY5NS0yOTU0ZmZjNDRhMTMiLCJtSWQiOiIwMDAwMDAwMDAwMDAwMDEiLCJteDVjIjoiTUlJRWpEQ0NBM1NnQXdJQkFnSURFaUVETUEwR0NTcUdTSWIzRFFFQkN3VUFNSUdGTVFzd0NRWURWUVFHRXdKU1ZURVpNQmNHQTFVRUNBd1FVMkZwYm5RdFVHVjBaWEp6WW5WeVp6RVhNQlVHQTFVRUNnd09WbTlrYTJFZ1FtRnVheUJLVTBNeER6QU5CZ05WQkFzTUJrSXdNREF3TVRFUE1BMEdBMVVFQXd3R1FqQXdNREF4TVNBd0hnWUpLb1pJaHZjTkFRa0JGaEY2YjNKeWIwQmxhMkZ6YzJseUxtTnZiVEFlRncweU1qRXhNRGt4TXpNMU5UTmFGdzB5TXpFeE1Ua3hNek0xTlROYU1JRzNNUXN3Q1FZRFZRUUdFd0pTVlRFWk1CY0dBMVVFQ0F3UVUyRnBiblF0VUdWMFpYSnpZblZ5WnpFWk1CY0dBMVVFQnd3UVUyRnBiblF0VUdWMFpYSnpZblZ5WnpFYU1CZ0dBMVVFQ2d3UlVHRnlZWE5sYm1ObElFeHBiV2wwWldReEdUQVhCZ05WQkFzTUVFMHdNREF3TURBd01EQXdNREF3TURFeEdUQVhCZ05WQkFNTUVFMHdNREF3TURBd01EQXdNREF3TURFeElEQWVCZ2txaGtpRzl3MEJDUUVXRVhwdmNuSnZRR1ZyWVhOemFYSXVZMjl0TUlJQklqQU5CZ2txaGtpRzl3MEJBUUVGQUFPQ0FROEFNSUlCQ2dLQ0FRRUF1TzFteGU2Mk5kVzdLTTUwRlZ3Y29qNDVRSjNYVms4QWg2UkN4Q1IzdHZydXM3bm9OV2FLajljM2VEeDQ3V3N3MFZROUpiUVRPdFRqaSsrRFkwOEJ2WGtWK1J1SXNlekdnVzR4S1RJK3lwSGN4OHZJSU5oS0JLMmZZdTVJRFZkejRaYml1R3IySW13eHVPL3VYRW5iNXhDTS9wK01tTDBwZmpjaE9LWkZMVW1Xdm44clMxUGc5NzRRSjJiODl0TDlKSmR3K3NhMDlXWkpoQWZGYVNaRk9LM0dwQkc5azVmZEhvTXNKY2RJRmxOMzFIMFF2OFMvOEZVbGdqVVFCdW9TbmdneXJ6aUR6RXFWM1BIcXcwZURjOTc5WE1hYTZvWFJLYk1UaXFrR01qN0h4N2dVanFzRStPZ29EcFdDSlpWVGMzNWkrajJGTEVpRDZ4NHpBR2FjZndJREFRQUJvNEhRTUlITk1Ba0dBMVVkRXdRQ01BQXdFUVlKWUlaSUFZYjRRZ0VCQkFRREFnV2dNRE1HQ1dDR1NBR0crRUlCRFFRbUZpUlBjR1Z1VTFOTUlFZGxibVZ5WVhSbFpDQkRiR2xsYm5RZ1EyVnlkR2xtYVdOaGRHVXdIUVlEVlIwT0JCWUVGQnRrWDUvemNnSlpSYitHZUpKYUVZZytWVE9UTUI4R0ExVWRJd1FZTUJhQUZMWE9JclFpZHNuZ0J4cXhBQ3FtbURmajJTM0tNQTRHQTFVZER3RUIvd1FFQXdJRThEQWRCZ05WSFNVRUZqQVVCZ2dyQmdFRkJRY0RBZ1lJS3dZQkJRVUhBd1F3Q1FZRFZSMFNCQUl3QURBTkJna3Foa2lHOXcwQkFRc0ZBQU9DQVFFQU1EN3FITEVKakdEcyt2ZEQwTklKWnhzVVpITjBXVTdPMm83TUxkVE96bkRqQ0RaV0thNzBHQlRsUm5vNTU2ejQ0a2VxajVWWnRIOVhWZ1A0U3pwOEMyZnppT0F1alNyS1Z3MGxoN2lEUmNiMU9ESEx5U0IzMDRHOXpnZE0rRFBLeW9za3pxcC9KNGl5VWFGLzZyNVlqLzVxVmZ0d0xSQlRJbld0OGgycFdxU29aaE5xaFY1SmRVK1dtQ0Nzd0RLZzQzSTJTSC9sUHZVaXFkRFFYK2xscDZYVHVJNm83aUdQRmRQZ2tOWFVOVUVIL3NNTUNOU2xOQmNQUFhGeSs1SHhFYkFmS242WmJZN2xYTDZSbzJuSzRERFJSbENYMGJmT1BKWFBMK290dncrVXZuSXIyOGNpc0VTdzB5OWxYbTlOWmhhQnhEVEZWREFSTWZUT1lxdFJDdz09Iiwib3JkZXJJZCI6IjEyMzQ1NiIsInN1bSI6MTAwMDAsImN1ciI6NjQzLCJtZWRpYSI6IklTREsifQ"}; // \Sberbank\Model\PaymentDirectRequest | Запрос роведения платежа с использованием прямого взаимодействия Клиента с MirPay
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->paymentDirect($payment_direct_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MirPayServicesApi->paymentDirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_direct_request** | [**\Sberbank\Model\PaymentDirectRequest**](../Model/PaymentDirectRequest.md)| Запрос роведения платежа с использованием прямого взаимодействия Клиента с MirPay | |
| **x_idempotency_key** | **string**| &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;__Функционал обработки ключа идемпотентности находится в разработке__&lt;/span&gt;  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа. | [optional] |

### Return type

[**\Sberbank\Model\PaymentDirectResponse**](../Model/PaymentDirectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
