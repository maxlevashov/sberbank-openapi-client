# Sberbank\ChangePasswordServicesApi

All URIs are relative to https://ecomtest.sberbank.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generate()**](ChangePasswordServicesApi.md#generate) | **POST** /ecomm/gw/partner/api/accounts/v1/apikey/generate | Генерация ключа Клиента для работы с сервисами платежного шлюза через SDK [generateApiKey] |
| [**setPermanentPassword()**](ChangePasswordServicesApi.md#setPermanentPassword) | **POST** /ecomm/gw/partner/api/accounts/v1/set-permanent-password | Установка постоянного пароля [setPermanentPassword] |


## `generate()`

```php
generate($generate_apikey_request): \Sberbank\Model\GenerateApikeyResponse
```

Генерация ключа Клиента для работы с сервисами платежного шлюза через SDK [generateApiKey]

Сервис для генерации ключа Клиента для работы с сервисами платежного шлюза через SDK. Может быть создано не более 5 активных ключей.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\ChangePasswordServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generate_apikey_request = {"userName":"testUserName","password":"testPassword","description":"testDescription","merchantLogin":"merchantLogin"}; // \Sberbank\Model\GenerateApikeyRequest

try {
    $result = $apiInstance->generate($generate_apikey_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangePasswordServicesApi->generate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_apikey_request** | [**\Sberbank\Model\GenerateApikeyRequest**](../Model/GenerateApikeyRequest.md)|  | |

### Return type

[**\Sberbank\Model\GenerateApikeyResponse**](../Model/GenerateApikeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`, `test/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPermanentPassword()`

```php
setPermanentPassword($set_permanent_password_request): \Sberbank\Model\SetPermanentPasswordResponse
```

Установка постоянного пароля [setPermanentPassword]

Сервис для смены временного пароля на постоянный

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sberbank\Api\ChangePasswordServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_permanent_password_request = {"login":"testUserName","tmpPassword":"testPassword","password":"NewPassword"}; // \Sberbank\Model\SetPermanentPasswordRequest | Запрос предназначен для изменение временного пароля, выданного при регистрации Клиента на ПШ на постоянный пароль на стороне Клиента.

try {
    $result = $apiInstance->setPermanentPassword($set_permanent_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangePasswordServicesApi->setPermanentPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_permanent_password_request** | [**\Sberbank\Model\SetPermanentPasswordRequest**](../Model/SetPermanentPasswordRequest.md)| Запрос предназначен для изменение временного пароля, выданного при регистрации Клиента на ПШ на постоянный пароль на стороне Клиента. | |

### Return type

[**\Sberbank\Model\SetPermanentPasswordResponse**](../Model/SetPermanentPasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `test/html`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
