# # BindingsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_id** | **string** | Идентификатор Связки, созданной ранее. Может использоваться, только если у магазина есть разрешение на работу со связками |
**masked_pan** | **string** | Маскированный номер Карты, Токена или Счёта Плательщика |
**expiry_date** | **string** | Год и месяц истечения срока действия Карты (YYYYMM) | [optional]
**client_id** | **string** | Номер (идентификатор) Плательщика в системе Клиента. Используется для реализации функционала Связок | [optional]
**binding_status** | **string** | Статус Связки. Возможны следующие значения:   * &#x60;0&#x60; &#x3D; Неактивная;   * &#x60;1&#x60; &#x3D; Активная. | [optional]
**payment_way** | **string** | Способ совершения платежа | [optional]
**payment_system** | **string** | Наименование платёжной системы. Возможны следующие варианты:   * &#x60;VISA&#x60;;   * &#x60;MASTERCARD&#x60;;   * &#x60;AMEX&#x60;;   * &#x60;JCB&#x60;;   * &#x60;CUP&#x60;;   * &#x60;MIR&#x60;;   * &#x60;Undefined&#x60;- передается в случае, если оплата выполнялась с использованием Счёта. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
