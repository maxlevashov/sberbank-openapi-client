# # Finish3dsMethodResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **string** | Код ошибки |
**error_message** | **string** | Описание ошибки на языке, переданном в параметре language в запросе | [optional]
**info** | **string** | Сообщение для отображения Плательщику | [optional]
**redirect** | **string** | Адрес возврата после совершения оплаты - returnUrl или failUrl (в зависиомсти от результата) | [optional]
**term_url** | **string** | URL адрес Клиента для возврата после проведения 3-D Secure аутентификации Плательщика. Обязателен, если используется платёжная страница на стороне Клиента и 3DS Server Банка | [optional]
**acs_url** | **string** | Адрес ACS Банка-эмитента для проведения 3-D Secure аутентификации Карты Плательщика. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента. | [optional]
**c_req** | **string** | Сообщение Challenge Request для проведения 3-D Secure аутентификации Карты Плательщика по протоколу 3-D Secure 2.x.x. Не используется при платежах, не требующих дополнительной аутентификации на ACS Банка-эмитента. | [optional]
**acs_decouple_indicator** | [**\Sberbank\Model\AcsDecoupleIndicator**](AcsDecoupleIndicator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
