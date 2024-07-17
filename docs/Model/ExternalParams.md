# # ExternalParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sbol_deep_link** | **string** | Ссылка на переход в мобильное приложение \&quot;Сбербанк-Онлайн\&quot; для завершения оплаты | [optional]
**sbol_bank_invoice_id** | **string** | Уникальный идентификатор заказа, сгенерированный ПШ | [optional]
**sbp_payload** | **string** | Зарегистрированная Платежная или Информационная ссылка СБП актуальной версии формата двухмерного QR-кода (ISO/IEC 18004-2015), представляемая в виде URLBased.  Не возвращается если: * Отсутствует соответствующее разрешение. * Заказ не зарегистрировался * Отсутствует информация от НСПК, получаемая любым путем | [optional]
**sbp_deeplink** | **string** | Зарезервировано | [optional]
**sber_payload** | **string** | Зарегистрированная ссылка Плати QR от Сбербанка формата двухмерного QR-кода (ISO/IEC 18004-2015), представляемая в виде URL-Based.  Не возвращается если: * Отсутствует соответствующее разрешение * Заказ не зарегистрировался * Отсутствует информация от смежного модуля, который обрабатывает Плати QR от Сбербанка | [optional]
**qrc_id** | **string** | Идентификатор Функциональной ссылки СБП | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)