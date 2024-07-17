# # PaymentOrderBindingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **string** | Код ошибки |
**error_message** | **string** | Описание ошибки на языке, переданном в параметре language в запросе | [optional]
**info** | **string** | Сообщение для отображения Плательщику | [optional]
**redirect** | **string** | Адрес возврата после совершения оплаты - returnUrl или failUrl (в зависиомсти от результата) | [optional]
**term_url** | **string** | URL адрес Клиента для возврата после проведения 3-D Secure аутентификации Плательщика. Обязателен, если используется платёжная страница на стороне Клиента и 3DS Server Банка | [optional]
**acs_url** | **string** | Адрес ACS Банка-эмитента для проведения 3-D Secure аутентификации Карты Плательщика. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента. | [optional]
**pa_req** | **string** | Сообщение Payer Authentication Request для проведения 3-D Secure аутентификации Карты Плательщика по протоколу 3-D Secure 1.0.2. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента. | [optional]
**c_req** | **string** | Сообщение Challenge Request для проведения 3-D Secure аутентификации Карты Плательщика по протоколу 3-D Secure 2.x.x. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента. | [optional]
**three_ds_method_url** | **string** | URL адрес для отправки запроса 3DS Method Data, если карта поддерживает вызов 3DS Method | [optional]
**three_ds_method_notification_url** | **string** | URL адрес Клиента для получения уведомления о завершении вызова 3DS Method (3DS Method Notification URL) | [optional]
**three_ds_server_trans_id** | **string** | Идентификатор 3DS Server Transaction ID | [optional]
**three_ds_method_data** | **string** | Значение объекта 3DS Method Data в кодировке base64url, если карта поддерживает 3DS Method и threeDSMNotificationUrl был передан в запросе | [optional]
**form_url** | **string** | URL-адрес страницы, на который должен быть перенаправлен браузер Плательщика для дальнейшего проведения операции | [optional]
**acs_rendering_type** | **string** | Шаблон UI, выбранный ACS из поддерживаемых SDK для проведения Challenge с Плательщиком в сценарии Application-based. Передается в кодировке base64 | [optional]
**acs_signed_content** | **string** | Параметры ACS для проведения Challenge с Плательщиком в сценарии Application-based | [optional]
**acs_decouple_indicator** | [**\Sberbank\Model\AcsDecoupleIndicator**](AcsDecoupleIndicator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
