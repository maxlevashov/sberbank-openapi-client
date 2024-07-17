# # PaymentDirectResponseOrderStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_status** | **int** | По значению этого параметра определяется состояние заказа в платёжном шлюзе. Отсутствует, если заказ не был найден. Возможны следующие значения:   * &#x60;0&#x60; &#x3D; заказ зарегистрирован, но не оплачен;   * &#x60;1&#x60; &#x3D; сумма захолдирована (для двухстадийного сценария);   * &#x60;2&#x60; &#x3D; проведена полная авторизация суммы заказа / создана подписка СБП;   * &#x60;3&#x60; &#x3D; авторизация отменена;   * &#x60;4&#x60; &#x3D; по заказу была проведена операция возврата;   * &#x60;5&#x60; &#x3D; инициирована аутентификация через ACS Банка-эмитента;   * &#x60;6&#x60; &#x3D; авторизация отклонена. | [optional]
**action_code** | **int** | Код ответа платёжного шлюза - цифровое обозначение результата, к которому привело обращение со стороны Клиента | [optional]
**action_code_description** | **string** | Расшифровка кода ответа на языке, переданном в параметре запроса language | [optional]
**amount** | **int** | Сумма операции в минимальных единицах валюты | [optional]
**currency** | **string** | Цифровой код валюты операции ISO-4217 | [optional]
**date** | **float** | Дата и время регистрации заказа в формате UNIX-времени (POSIX-времени) | [optional]
**attributes** | [**\Sberbank\Model\AttributesInner[]**](AttributesInner.md) | Дополнительные параметры заказа со стороны ПШ. Элемент присутствует в ответе, если заказ успешно создался | [optional]
**merchant_order_params** | [**\Sberbank\Model\MerchantOrderParamsInner[]**](MerchantOrderParamsInner.md) | Дополнительные параметры заказа со стороны Клиента. Элемент присутствует в ответе, если при создании заказа содержатся дополнительные параметры блока jsonParams, каждый возвращаемый параметр представлен в отдельном блоке merchantOrderParams | [optional]
**card_auth_info** | [**\Sberbank\Model\PaymentDirectResponseOrderStatusCardAuthInfo**](PaymentDirectResponseOrderStatusCardAuthInfo.md) |  | [optional]
**approval_code** | **string** | Код авторизации платежа | [optional]
**auth_date_time** | **float** | Дата и время авторизации в Банке-эквайрере в формате UNIX-времени (POSIX-времени) | [optional]
**terminal_id** | **string** | Идентификатор терминала в платёжном шлюзе Банка-эквайрера, через который осуществлялась оплата | [optional]
**auth_ref_num** | **string** | Ссылочный номер авторизации платежа, который присваивается при регистрации платежа на стороне платёжной системы | [optional]
**payment_amount_info** | [**\Sberbank\Model\PaymentAmountInfo**](PaymentAmountInfo.md) |  | [optional]
**bank_info** | [**\Sberbank\Model\BankInfo**](BankInfo.md) |  | [optional]
**binding_info** | [**\Sberbank\Model\BindingInfo**](BindingInfo.md) |  | [optional]
**order_bundle** | [**\Sberbank\Model\OrderBundle**](OrderBundle.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
