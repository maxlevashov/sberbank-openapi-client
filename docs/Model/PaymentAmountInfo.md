# # PaymentAmountInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approved_amount** | **int** | Сумма холдирования для двухстадийного платежа или подтвержденная сумма списания для одностадийного платежа | [optional]
**deposited_amount** | **int** | Сумма завершения оплаты для двухстадийного сценария платежа | [optional]
**refunded_amount** | **int** | Сумма возвращенных средств | [optional]
**fee_amount** | **int** | Сумма комиссии в минимальных единицах валюты | [optional]
**payment_state** | **string** | Состояние платежа. Возможны следующие варианты:   * &#x60;CREATED&#x60;   * &#x60;APPROVED&#x60;   * &#x60;DEPOSITED&#x60;   * &#x60;REVERSED&#x60;   * &#x60;REFUNDED&#x60;   * &#x60;DECLINED&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
