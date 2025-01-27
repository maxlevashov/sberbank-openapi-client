# # DoReceiptRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**order_id** | **string** | Уникальный номер заказа в Платёжном шлюзе. | [optional]
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. | [optional]
**receipt_id** | **string** | Идентификатор чека, присвоенный кассовым сервисом (uuid) | [optional]
**phone** | **string** | Номер телефона Плательщика. Если в телефон включён код страны, номер должен начинаться со знака плюс («+»). Если телефон передаётся без знака плюс («+»), то код страны указывать не следует. В случае использования фискализации обязателен для передачи в формате +79998887700, при отсутствии номера телефона обязателен email. | [optional]
**email** | **string** | Адрес электронной почты Плательщика. В случае использования фискализации обязателен, при отсутствии phone. | [optional]
**order_bundle** | [**\Sberbank\Model\OrderBundle**](OrderBundle.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
