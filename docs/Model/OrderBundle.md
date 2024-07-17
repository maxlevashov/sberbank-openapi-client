# # OrderBundle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_creation_date** | **string** | Дата создания заказа | [optional]
**installments** | [**\Sberbank\Model\OrderBundleInstallments**](OrderBundleInstallments.md) |  | [optional]
**ffd_version** | **string** | Версия ФФД кассы (уточняется у Вашего кассового сервиса). &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;Параметр обязателен при необходимости формирования фискального чека.&lt;/span&gt; Может принимать значения:    * &#x60;1.2&#x60; &#x3D; Версия ФФД 1.2;    * &#x60;1.05&#x60; &#x3D; Версия ФФД 1.05. | [optional]
**receipt_type** | **string** | Тип формируемого чека. &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;Параметр обязателен при необходимости формирования фискального чека.&lt;/span&gt; Может принимать следующие значения:   * &#x60;sell&#x60; &#x3D; Чек \&quot;Приход\&quot;. Данный чек формируется в том числе при проведении частичного полного расчета.   * &#x60;sell_refund&#x60; &#x3D; Чек \&quot;Возврат прихода\&quot;. | [optional]
**ism_optional** | **bool** | Параметр указывает необходимость регистрации чека, в случае недоступности системы маркировки (ИСМ). Используется только для ФФД 1.2 и касс АТОЛ Онлайн. Может принимать значения:   * &#x60;true&#x60; - Чек будет зарегистрирован даже в случае, если \&quot;Честный знак\&quot; не ответил за установленное время. В результате проверки сведений о товаре укажется значение \&quot;0\&quot;   * &#x60;false&#x60; (значение по умолчанию) - Чек не будет зарегистрирован при недоступности \&quot;Честный знак\&quot;. Вернется ошибка 421 (Истек таймаут проверки КМ) | [optional]
**company** | [**\Sberbank\Model\OrderBundleCompany**](OrderBundleCompany.md) |  | [optional]
**customer_details** | [**\Sberbank\Model\CustomerDetails**](CustomerDetails.md) |  | [optional]
**cart_items** | [**\Sberbank\Model\CartItems**](CartItems.md) |  |
**payments** | [**\Sberbank\Model\OrderBundlePaymentsInner[]**](OrderBundlePaymentsInner.md) | Виды оплаты. Обязателен при использовании фискализации. | [optional]
**total** | **float** | __Тег ФФД 1020.__ Итоговая сумма чека в минимальных единицах валюты. Должна соответствовать сумме всех значений поля itemAmount. Обязательно при использовании фискализации. | [optional]
**additional_user_props** | [**\Sberbank\Model\OrderBundleAdditionalUserProps**](OrderBundleAdditionalUserProps.md) |  | [optional]
**additional_check_props** | **string** | __Тег ФФД 1192.__ Дополнительный реквизит чека | [optional]
**operating_check_props** | [**\Sberbank\Model\OrderBundleOperatingCheckProps**](OrderBundleOperatingCheckProps.md) |  | [optional]
**sectoral_check_props** | [**\Sberbank\Model\OrderBundleSectoralCheckPropsInner[]**](OrderBundleSectoralCheckPropsInner.md) | __Тег ФФД 1261.__ Отраслевой реквизит чека. Передается, если в чеке есть маркированные товары и включение указанного реквизита предусмотрено нормативными актами для этой товарной группы. Только для ФФД 1.2. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
