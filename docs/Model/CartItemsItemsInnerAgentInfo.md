# # CartItemsItemsInnerAgentInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | __Тег ФФД 1222.__ Тип агента. Может принимать следующие значения:   * &#x60;bank_paying_agent&#x60; - Банковский платежный агент;   * &#x60;bank_paying_subagent&#x60; - Банковский платежный субагент;   * &#x60;paying_agent&#x60; - Платежный агент;   * &#x60;paying_subagent&#x60; - Платежный субагент;   * &#x60;attorney&#x60; - Поверенный;   * &#x60;commission_agent&#x60; - Комиссионер;   * &#x60;another&#x60; - Прочие типы агентов. |
**paying_agent** | [**\Sberbank\Model\CartItemsItemsInnerAgentInfoPayingAgent**](CartItemsItemsInnerAgentInfoPayingAgent.md) |  | [optional]
**receive_payments_operator** | [**\Sberbank\Model\CartItemsItemsInnerAgentInfoReceivePaymentsOperator**](CartItemsItemsInnerAgentInfoReceivePaymentsOperator.md) |  | [optional]
**money_transfer_operator** | [**\Sberbank\Model\CartItemsItemsInnerAgentInfoMoneyTransferOperator**](CartItemsItemsInnerAgentInfoMoneyTransferOperator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
