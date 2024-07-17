# # BindingInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Номер (идентификатор) Плательщика в системе Клиента. Используется для реализации функционала Связок | [optional]
**binding_id** | **string** | Идентификатор Связки, созданной ранее. Может использоваться, только если у магазина есть разрешение на работу со связками | [optional]
**spasibo_allowed** | **bool** | Признак наличия Спасибо на связке. Возвращается при создании связки SberPay, при условии подтверждения списание боунсов Спасибо Плательщиком | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
