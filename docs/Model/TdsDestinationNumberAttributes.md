# # TdsDestinationNumberAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dest_wallet_num** | **string** | Номер (идентификатор) электронного кошелька получателя электронных денежных средств.  &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;Обязательно, если MCC&#x3D;6050 или 6051&lt;/span&gt; | [optional]
**dest_phone_num** | **string** | Номер телефона абонента получателя денежных средств.  &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;Обязательно, если MCC&#x3D;4814&lt;/span&gt; | [optional]
**dest_card_num** | **string** | Номер карты получателя перевода.  &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;Обязательно при проведении операции перевода денежных средств на карту, кредитование, для MCC&#x3D;6538&lt;/span&gt; | [optional]
**dest_acct_num** | **string** | Конкатенированное значение БИК Банка (bik) получателя (044583999) и номер счета (bankAccount) получателя 40817810570000123456 для перевода  &lt;span style&#x3D;\&quot;color:red;\&quot;&gt;Обязательно при проведении операции перевода денежных средств на счет, кредитование, для MCC&#x3D;6538&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
