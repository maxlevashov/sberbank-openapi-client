# # CallbackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**md_order** | **string** | Уникальный номер заказа в Платёжном шлюзе. |
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. |
**operation** | **string** | Тип операции, о которой формируется уведомление. Возможны следующие значения:   * &#x60;created&#x60; &#x3D; заказ создан;   * &#x60;approved&#x60; &#x3D; операция удержания (холдирования) суммы;   * &#x60;deposited&#x60; &#x3D; операция завершения;   * &#x60;reversed&#x60; &#x3D; операция отмены;   * &#x60;refunded&#x60; &#x3D; операция возврата;   * &#x60;declinedByTimeout&#x60; &#x3D; истекло время, отведенное на оплату заказа;   * &#x60;subscriptionCreated&#x60; &#x3D; подписка была создана Плательщиком. |
**status** | **int** | Индикатор успешности операции о которой формируется уведомление. Возможны следующие значения:   * &#x60;1&#x60; &#x3D; операция прошла успешно;   * &#x60;0&#x60; &#x3D; операция завершилась ошибкой; |
**additional_params** | [**\Sberbank\Model\AdditionalParams**](AdditionalParams.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
