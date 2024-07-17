# # OrderBundleInstallments

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type** | **string** | Признак покупки в кредит. Возможны следующие значения:   * &#x60;CREDIT&#x60; &#x3D; кредит;   * &#x60;INSTALLMENT&#x60; &#x3D; рассрочка. | [optional]
**product_id** | **string** | Реквизит для старой совместимости | [optional]
**right_terms** | **int[]** | Желаемый срок кредитования в месяцах. Возможна передача нескольких значений через запятую. Атрибут передается, если выбран productType&#x3D;INSTALLMENT.   * Если параметр заполнен, то клиенту будут доступны только указанные в параметре сроки оплаты. Например, если \&quot;rightTerms\&quot;:[3,6,9], то клиенту будут доступны для выбора сроки 3, 6 или 9 месяцев.   * Если параметр не заполнен, то клиенту будут доступны все ранее утвержденные с банком сроки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
