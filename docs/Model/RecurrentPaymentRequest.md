# # RecurrentPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. |
**binding_id** | **string** | Идентификатор Связки, созданной ранее. Может использоваться, только если у магазина есть разрешение на работу со связками |
**language** | **string** | Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента | [optional]
**amount** | **int** | Сумма операции в минимальных единицах валюты |
**currency** | **string** | Цифровой код валюты операции ISO-4217 | [optional]
**description** | **string** | Описание заказа в свободной форме на стороне Клиента. Рекомендуемая длина до 99 символов | [optional]
**additional_parameters** | [**\Sberbank\Model\RecurrentPaymentRequestAdditionalParameters**](RecurrentPaymentRequestAdditionalParameters.md) |  | [optional]
**order_bundle** | [**\Sberbank\Model\OrderBundle**](OrderBundle.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
