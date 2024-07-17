# # GetReceiptStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Расшифровка кода ответа при обращении к сервису | [optional]
**order_id** | **string** | Уникальный номер заказа в Платёжном шлюзе. | [optional]
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. | [optional]
**receipts** | [**\Sberbank\Model\ReceiptsInner[]**](ReceiptsInner.md) | Массив объектов, содержащий информацию по чекам в рамках заказа. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
