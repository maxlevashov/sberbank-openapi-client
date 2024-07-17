# # PaymentDirectResponseOrderStatusCardAuthInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pan** | **string** | Маскированный номер Карты, Токена или Счёта Плательщика | [optional]
**expiration** | **string** | Год и месяц истечения срока действия Карты (YYYYMM) | [optional]
**card_holder_name** | **string** | Текст, изображенный на Карте Плательщика в ISO 8859-1. Допустимы Имя, Фамилия, инициалы или любые комбинации специальных символов ASCII, кроме кириллицы | [optional]
**payment_system** | **string** | Наименование платёжной системы. Возможны следующие варианты:   * &#x60;VISA&#x60;;   * &#x60;MASTERCARD&#x60;;   * &#x60;AMEX&#x60;;   * &#x60;JCB&#x60;;   * &#x60;CUP&#x60;;   * &#x60;MIR&#x60;;   * &#x60;Undefined&#x60;- передается в случае, если оплата выполнялась с использованием Счёта. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
