# # PaymentOrderBindingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**md_order** | **string** | Уникальный номер заказа в Платёжном шлюзе. |
**binding_id** | **string** | Идентификатор Связки, созданной ранее. Может использоваться, только если у магазина есть разрешение на работу со связками |
**cvc** | **string** | Проверочный код Карты Плательщика (обычно с обратной стороны Карты) | [optional]
**language** | **string** | Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента | [optional]
**ip** | **string** | IP-адрес Плательщика |
**email** | **string** | Адрес электронной почты Плательщика. В случае использования фискализации обязателен, при отсутствии phone. | [optional]
**json_params** | [**\Sberbank\Model\PaymentOrderBindingRequestJsonParams**](PaymentOrderBindingRequestJsonParams.md) |  | [optional]
**three_ds_method_notification_url** | **string** | URL адрес Клиента для получения уведомления о завершении вызова 3DS Method (3DS Method Notification URL) | [optional]
**term_url** | **string** | URL адрес Клиента для возврата после проведения 3-D Secure аутентификации Плательщика. Обязателен, если используется платёжная страница на стороне Клиента и 3DS Server Банка | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
