# # DeclineRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**merchant_login** | **string** | Логин дочернего Клиента (если используется) | [optional]
**order_id** | **string** | Уникальный номер заказа в Платёжном шлюзе. | [optional]
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. | [optional]
**language** | **string** | Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента | [optional]
**json_params** | [**\Sberbank\Model\KeyValue**](KeyValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
