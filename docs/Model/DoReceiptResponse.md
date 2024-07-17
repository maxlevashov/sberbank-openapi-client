# # DoReceiptResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Расшифровка кода ответа при обращении к сервису | [optional]
**receipt_id** | **string** | Идентификатор чека, присвоенный кассовым сервисом (uuid) | [optional]
**order_id** | **string** | Уникальный номер заказа в Платёжном шлюзе. |
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
