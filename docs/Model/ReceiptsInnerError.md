# # ReceiptsInnerError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_id** | **string** | Уникальный идентификатор ошибки | [optional]
**code** | **int** | Код ошибки. Отображается только при ошибке | [optional]
**text** | **string** | Текст ошибки (кодировка utf–8) | [optional]
**type** | **string** | Тип источника ошибки в кассовом сервисе | [optional]
**recommendation** | **float** | Рекомендация по исправлению: * &#x60;1&#x60; - Попытки отправки чека исчерпаны, возможна повторная отправка через сервис retryReceipt. * &#x60;2&#x60; - Повторная отправка возможна только после корректировки чека. Используйте сервис doReceipt. * &#x60;3&#x60; - Повторная отправка в существующем формате возможна только после устранения проблемы в работе ККТ. После устранения проблемы используйте сервисы retryReceipt или doReceipt. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
