# # Finish3dsPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**md_order** | **string** | Уникальный номер заказа в Платёжном шлюзе. |
**pa_res** | **string** | Сообщение Payer Authentication Response, полученное в ответе на запрос аутентификации Плательщика. Обязательно при использовании версии 3-D Secure 1.0.2 | [optional]
**c_res** | **string** | Сообщение Challenge Response, полученное в ответе на запрос проведения Challenge с Плательщиком. Обязательно при использовании версии 3-D Secure 2.х.х | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
