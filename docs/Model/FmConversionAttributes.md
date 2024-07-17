# # FmConversionAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**has_valuable_items** | **string** | Маркер наличия высоколиквидной электроники в заказе:  * &#x60;00&#x60; &#x3D; Не содержит высоколиквидной электроники;  * &#x60;01&#x60; &#x3D; Содержит высоколиквидную электронику; | [optional]
**acct_id** | **string** | Идентификатор аккаунта Плательщика в ТСП | [optional]
**ch_acc_date** | **string** | Дата создания аккаунта Плательщика в ТСП в формате YYYYMMDD | [optional]
**ch_acc_age_ind** | **string** | Возраст аккаунта Плательщика в ТСП:   * &#x60;01&#x60; &#x3D; No account (guest check-out);   * &#x60;02&#x60; &#x3D; Created during this transaction;   * &#x60;03&#x60; &#x3D; Less than 30 days;   * &#x60;04&#x60; &#x3D; 30-60 days;   * &#x60;05&#x60; &#x3D; More than 60 days. | [optional]
**ch_acc_change_ind** | **string** | Период времени с последнего редактирования аккаунта Плательщика в ТСП:   * &#x60;01&#x60; &#x3D; Changed during this transaction;   * &#x60;02&#x60; &#x3D; Less than 30 days;   * &#x60;03&#x60; &#x3D; 30-60 days;   * &#x60;04&#x60; &#x3D; More than 60 days. | [optional]
**ship_addr_city** | **string** | Город доставки товара | [optional]
**ship_delivery_point_id** | **string** | Идентификатор ПВЗ доставки товара | [optional]
**mri_reorder_items_ind** | **string** | Индикатор повторной покупки в ТСП:   * &#x60;01&#x60; &#x3D; First time ordered;   * &#x60;02&#x60; &#x3D; Reordered. | [optional]
**mobile_phone** | **string** | Мобильный телефон в формате \&quot;код страны\&quot;-\&quot;номер телефона\&quot; (например, 7-4951234567) согласно ITU-E.164 | [optional]
**ship_name_indicator** | **string** | Признак соответствия имени в аккаунте Плательщика и имени получателя заказа:   * &#x60;01&#x60; &#x3D; Account Name identical to shipping Name;   * &#x60;02&#x60; &#x3D; Account Name different than shipping Name. | [optional]
**suspicious_acc_activity** | **string** | Признак наличия случаев подозрительной активности (включая предыдущие случаи мошенничества) для аккаунта Плательщика:   * &#x60;01&#x60; &#x3D; No suspicious activity has been observed;   * &#x60;02&#x60; &#x3D; Suspicious activity has been observed. | [optional]
**provision_attempts_day** | **string** | Количество попыток добавления карты за последние 24 часа | [optional]
**ship_addr_line1** | **string** | Адрес доставки товара | [optional]
**ship_addr_line2** | **string** | Адрес доставки товара | [optional]
**ship_addr_line3** | **string** | Адрес доставки товара | [optional]
**ship_address_usage** | **string** | Дата первого использования адреса доставки для аккаунта Плательщика в формате YYYYMMDD | [optional]
**ship_address_usage_ind** | **string** | Период времени с момента первого использования адреса доставки для аккаунта Плательщика:   * &#x60;01&#x60; &#x3D; This transaction;   * &#x60;02&#x60; &#x3D; Less than 30 days;   * &#x60;03&#x60; &#x3D; 30-60 days;   * &#x60;04&#x60; &#x3D; More than 60 days. | [optional]
**mri_delivery_timeframe** | **string** | Срок доставки товара: * &#x60;01&#x60; &#x3D; Electronic Delivery; * &#x60;02&#x60; &#x3D; Same day shipping; * &#x60;03&#x60; &#x3D; Overnight shipping; * &#x60;04&#x60; &#x3D; Two-day or more shipping. | [optional]
**mri_ship_indicator** | **string** | Способ доставки, выбранный для операции:   * &#x60;01&#x60; &#x3D; Ship to cardholder&#39;s billing address;   * &#x60;02&#x60; &#x3D; Ship to another verified address on file with merchant;   * &#x60;03&#x60; &#x3D; Ship to address that is different than the cardholder&#39;s billing address;   * &#x60;04&#x60; &#x3D; “Ship to Store” / Pick-up at local store (Store address shall be populated in shipping address fields);   * &#x60;05&#x60; &#x3D; Digital goods (includes online services, electronic gift cards and redemption codes);   * &#x60;06&#x60; &#x3D; Travel and Event tickets, not shipped;   * &#x60;07&#x60; &#x3D; Other (for example, Gaming, digital services not shipped, emedia subscriptions, etc.). | [optional]
**ch_acc_pw_change** | **string** | Дата последнего изменения пароля или сброса аккаунта Плательщика в ТСП в формате YYYYMMDD | [optional]
**ch_acc_pw_change_ind** | **string** | Период времени с последнего изменения пароля или сброса аккаунта Плательщика в ТСП:   * &#x60;01&#x60; &#x3D; No change;   * &#x60;02&#x60; &#x3D; Changed during this transaction;   * &#x60;03&#x60; &#x3D; Less than 30 days;   * &#x60;04&#x60; &#x3D; 30-60 days;   * &#x60;05&#x60; &#x3D; More than 60 days. | [optional]
**nb_purchase_account** | **string** | Количество покупок, совершенных с аккаунта Плательщика за последние 6 месяцев | [optional]
**txn_activity_day** | **string** | Количество операций (успешных и незавершенных), совершенных с аккаунта Плательщика за последние 24 часа всеми платёжными средствами | [optional]
**txn_activity_year** | **string** | Количество операций (успешных и незавершенных), совершенных с аккаунта Плательщика за последний год всеми платёжными средствами | [optional]
**payment_acc_age** | **string** | Дата добавления платёжного метода в аккаунте Плательщика в формате YYYYMMDD | [optional]
**payment_acc_ind** | **string** | Период времени с момента добавления платёжного метода в аккаунт Плательщика:   * &#x60;01&#x60; &#x3D; No account (guest check-out);   * &#x60;02&#x60; &#x3D; During this transaction;   * &#x60;03&#x60; &#x3D; Less than 30 days;   * &#x60;04&#x60; &#x3D; 30-60 days;   * &#x60;05&#x60; &#x3D; More than 60 days. | [optional]
**ch_acc_change** | **string** | Дата последнего редактирования аккаунта Плательщика в ТСП в формате YYYYMMDD | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
