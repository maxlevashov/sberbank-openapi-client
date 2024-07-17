# # GetOrderStatusExtendedResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **string** | Код ошибки |
**error_message** | **string** | Описание ошибки на языке, переданном в параметре language в запросе | [optional]
**order_number** | **string** | Уникальный номер (идентификатор) заказа в системе Клиента. Обязателен, если в запросе отсутствует orderId. | [optional]
**order_status** | **int** | По значению этого параметра определяется состояние заказа в платёжном шлюзе. Отсутствует, если заказ не был найден. Возможны следующие значения:   * &#x60;0&#x60; &#x3D; заказ зарегистрирован, но не оплачен;   * &#x60;1&#x60; &#x3D; сумма захолдирована (для двухстадийного сценария);   * &#x60;2&#x60; &#x3D; проведена полная авторизация суммы заказа / создана подписка СБП;   * &#x60;3&#x60; &#x3D; авторизация отменена;   * &#x60;4&#x60; &#x3D; по заказу была проведена операция возврата;   * &#x60;5&#x60; &#x3D; инициирована аутентификация через ACS Банка-эмитента;   * &#x60;6&#x60; &#x3D; авторизация отклонена. | [optional]
**action_code** | **int** | Код ответа платёжного шлюза - цифровое обозначение результата, к которому привело обращение со стороны Клиента | [optional]
**action_code_description** | **string** | Расшифровка кода ответа на языке, переданном в параметре запроса language | [optional]
**amount** | **int** | Сумма операции в минимальных единицах валюты | [optional]
**currency** | **string** | Цифровой код валюты операции ISO-4217 | [optional]
**date** | **float** | Дата и время регистрации заказа в формате UNIX-времени (POSIX-времени) | [optional]
**deposited_date** | **float** | Дата и время оплаты/завершения оплаты заказа в формате UNIX-времени (POSIX-времени) | [optional]
**order_description** | **string** | Описание заказа в свободной форме на стороне Клиента. Рекомендуемая длина до 99 символов | [optional]
**ip** | **string** | IP-адрес Плательщика | [optional]
**auth_ref_num** | **string** | Ссылочный номер авторизации платежа, который присваивается при регистрации платежа на стороне платёжной системы | [optional]
**refunded_date** | **\DateTime** | Дата и время возврата средств. | [optional]
**transaction_attributes** | [**\Sberbank\Model\TransactionAttributesInner[]**](TransactionAttributesInner.md) | Дополнительные параметры деталей заказа. Элемент присутствует в ответе, если при формировании ответа на создание заказа содержатся дополнительные параметры блока jsonParams которые могут использоваться в различных сценариях, каждый возвращаемый параметр представлен в отдельном блоке transactionAttributes | [optional]
**attributes** | [**\Sberbank\Model\GetOrderStatusExtendedResponseAttributes**](GetOrderStatusExtendedResponseAttributes.md) |  | [optional]
**merchant_order_params** | [**\Sberbank\Model\MerchantOrderParamsInner[]**](MerchantOrderParamsInner.md) | Дополнительные параметры заказа со стороны Клиента. Элемент присутствует в ответе, если при создании заказа содержатся дополнительные параметры блока jsonParams, каждый возвращаемый параметр представлен в отдельном блоке merchantOrderParams | [optional]
**card_auth_info** | [**\Sberbank\Model\CardAuthInfo**](CardAuthInfo.md) |  | [optional]
**auth_date_time** | **float** | Дата и время авторизации в Банке-эквайрере в формате UNIX-времени (POSIX-времени) | [optional]
**terminal_id** | **string** | Идентификатор терминала в платёжном шлюзе Банка-эквайрера, через который осуществлялась оплата | [optional]
**payment_amount_info** | [**\Sberbank\Model\PaymentAmountInfo**](PaymentAmountInfo.md) |  | [optional]
**bank_info** | [**\Sberbank\Model\BankInfo**](BankInfo.md) |  | [optional]
**payer_data** | [**\Sberbank\Model\PayerData**](PayerData.md) |  | [optional]
**binding_info** | [**\Sberbank\Model\BindingInfo**](BindingInfo.md) |  | [optional]
**order_bundle** | [**\Sberbank\Model\OrderBundle**](OrderBundle.md) |  | [optional]
**operations** | [**\Sberbank\Model\OperationsInner[]**](OperationsInner.md) | Массив объектов, содержащий информацию по всем платёжным операциям в рамках заказа. Возвращается в ответе, если Клиенту разрешено использование данного функционала | [optional]
**loyalty_info** | [**\Sberbank\Model\LoyaltyInfo**](LoyaltyInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
