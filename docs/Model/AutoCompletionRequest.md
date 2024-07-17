# # AutoCompletionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**order_id** | **string** | Уникальный номер заказа в Платёжном шлюзе. |
**composite_amount** | **int** | Сумма операции в минимальных единицах валюты, состоящая из суммы в деньгах и суммы бонусов. Может быть меньше или равна остатку в заказе | [optional]
**language** | **string** | Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента | [optional]
**order_bundle** | [**\Sberbank\Model\OrderBundle**](OrderBundle.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
