# # RegisterResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **string** | Код ошибки |
**error_message** | **string** | Описание ошибки на языке, переданном в параметре language в запросе | [optional]
**order_id** | **string** | Уникальный номер заказа в Платёжном шлюзе. | [optional]
**form_url** | **string** | URL-адрес страницы, на который должен быть перенаправлен браузер Плательщика для дальнейшего проведения операции | [optional]
**external_params** | [**\Sberbank\Model\ExternalParams**](ExternalParams.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
