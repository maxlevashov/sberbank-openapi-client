# # ReceiptsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receipt_id** | **string** | Идентификатор чека, присвоенный кассовым сервисом (uuid) | [optional]
**operation_id** | **string** | Идентификатор операции | [optional]
**operation_type** | **string** | Тип платёжной операции. Возможные значения:   * &#x60;AUTHORIZATION&#x60;   * &#x60;PREAUTHORIZATION&#x60;   * &#x60;COMPLETION&#x60;   * &#x60;REVERSAL&#x60;   * &#x60;REFUND&#x60; | [optional]
**receipt_type** | **string** | Тип чека: * &#x60;SELL&#x60; - Приход * &#x60;SELL_REFUND&#x60; - Возврат прихода | [optional]
**receipt_status** | **int** | Статус чека * &#x60;0&#x60; - не определен; * &#x60;1&#x60; - ожидается отправка или переотправка чека * &#x60;2&#x60; - чек отправлен, ожидание результата обработки * &#x60;3&#x60; - чек обработан успешно * &#x60;4&#x60; - ошибка обработки чека * &#x60;5&#x60; - ошибка отправки чека (исчерпаны попытки отправки) * &#x60;6&#x60; - некорректные данные для отправки чека | [optional]
**orig_receipt_id** | **string** | receiptId оригинального чека. Заполняется, если регистрация чека потребовала несколько попыток переотправки или были использованы сервисы &#x60;retryReceipt&#x60; или &#x60;doReceipt&#x60; (с указанием receiptId) | [optional]
**error** | [**\Sberbank\Model\ReceiptsInnerError**](ReceiptsInnerError.md) |  | [optional]
**payload** | [**\Sberbank\Model\ReceiptsInnerPayload**](ReceiptsInnerPayload.md) |  | [optional]
**timestamp** | **string** | Дата и время получения ответа от кассового сервиса в формате «dd.mm.yyyy HH:MM:SS» | [optional]
**group_code** | **string** | Идентификатор группы ККТ | [optional]
**daemon_code** | **string** | Наименование сервера кассового сервиса | [optional]
**device_code** | **string** | Код ККТ в кассовом сервисе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
