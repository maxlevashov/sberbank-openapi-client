# OpenAPIClient-php

Настоящий документ описывает программные интерфейсы платёжного шлюза Сбербанка, который позволяет проводить платежи в интернет-эквайринге.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Sberbank\Api\AdditionalThreeDSServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$finish3ds_method_request = new \Sberbank\Model\Finish3dsMethodRequest(); // \Sberbank\Model\Finish3dsMethodRequest | Запрос завершения 3DS Method
$x_idempotency_key = 779165e0-1905-4edd-89fa-be46497b5044; // string | <span style=\"color:red;\">__Функционал обработки ключа идемпотентности находится в разработке__</span>  Ключ идемпотентности запроса. Повторный вызов с тем же ключом вернет результат выполнения предыдущего запроса и не приведет к выполнению нового. Срок хранения ключей - 24 часа.

try {
    $result = $apiInstance->finish3dsMethod($finish3ds_method_request, $x_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalThreeDSServicesApi->finish3dsMethod: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://ecomtest.sberbank.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdditionalThreeDSServicesApi* | [**finish3dsMethod**](docs/Api/AdditionalThreeDSServicesApi.md#finish3dsmethod) | **POST** /ecomm/gw/partner/api/v1/finish3dsMethod.do | Завершение 3DS Method [finish3dsMethod]
*AdditionalThreeDSServicesApi* | [**finish3dsPayment**](docs/Api/AdditionalThreeDSServicesApi.md#finish3dspayment) | **POST** /ecomm/gw/partner/api/v1/finish3dsPayment.do | Завершение аутентификации 3-D Secure [finish3dsPayment]
*BasicServicesApi* | [**decline**](docs/Api/BasicServicesApi.md#decline) | **POST** /ecomm/gw/partner/api/v1/decline.do | Отмена заказа до начала платежа [decline]
*BasicServicesApi* | [**deposit**](docs/Api/BasicServicesApi.md#deposit) | **POST** /ecomm/gw/partner/api/v1/deposit.do | Завершение двухстадийного сценария [deposit]
*BasicServicesApi* | [**getOrderStatusExtended**](docs/Api/BasicServicesApi.md#getorderstatusextended) | **POST** /ecomm/gw/partner/api/v1/getOrderStatusExtended.do | Получение информации о заказе [getOrderStatusExtended]
*BasicServicesApi* | [**refund**](docs/Api/BasicServicesApi.md#refund) | **POST** /ecomm/gw/partner/api/v1/refund.do | Возврат средств Плательщика [refund]
*BasicServicesApi* | [**register**](docs/Api/BasicServicesApi.md#register) | **POST** /ecomm/gw/partner/api/v1/register.do | Регистрация заказа [register]
*BasicServicesApi* | [**registerPreAuth**](docs/Api/BasicServicesApi.md#registerpreauth) | **POST** /ecomm/gw/partner/api/v1/registerPreAuth.do | Регистрация заказа для двухстадийного сценария [registerPreAuth]
*BasicServicesApi* | [**reverse**](docs/Api/BasicServicesApi.md#reverse) | **POST** /ecomm/gw/partner/api/v1/reverse.do | Отмена заказа [reverse]
*BindingServicesApi* | [**bindCard**](docs/Api/BindingServicesApi.md#bindcard) | **POST** /ecomm/gw/partner/api/v1/bindCard.do | Активация связки Плательщика [bindCard]
*BindingServicesApi* | [**getBindings**](docs/Api/BindingServicesApi.md#getbindings) | **POST** /ecomm/gw/partner/api/v1/getBindings.do | Получение связок по идентификатору Плательщика [getBindings]
*BindingServicesApi* | [**getBindingsByCardOrId**](docs/Api/BindingServicesApi.md#getbindingsbycardorid) | **POST** /ecomm/gw/partner/api/v1/getBindingsByCardOrId.do | Получение связок по номеру карты или идентификатору связки Плательщика [getBindingsByCardOrId]
*BindingServicesApi* | [**paymentOrderBinding**](docs/Api/BindingServicesApi.md#paymentorderbinding) | **POST** /ecomm/gw/partner/api/v1/paymentOrderBinding.do | Проведение оплаты по связке [paymentOrderBinding]
*BindingServicesApi* | [**recurrentPayment**](docs/Api/BindingServicesApi.md#recurrentpayment) | **POST** /ecomm/gw/partner/api/v1/recurrentPayment.do | Проведение периодического платежа [recurrentPayment]
*BindingServicesApi* | [**unBindCard**](docs/Api/BindingServicesApi.md#unbindcard) | **POST** /ecomm/gw/partner/api/v1/unbindCard.do | Деактивация связки Плательщика [unbindCard]
*CallbackServicesApi* | [**bindingCallback**](docs/Api/CallbackServicesApi.md#bindingcallback) | **POST** /bindingCallbackUrl | Уведомление о событии со связкой [bindingCallback]
*CallbackServicesApi* | [**callback**](docs/Api/CallbackServicesApi.md#callback) | **POST** /callbackUrl | Уведомление о проведении платежа [callback]
*CallbackServicesApi* | [**receiptStatusCallback**](docs/Api/CallbackServicesApi.md#receiptstatuscallback) | **POST** /receiptStatusCallbackUrl | Уведомление о результате обработки чека [receiptStatusCallback]
*ChangePasswordServicesApi* | [**generate**](docs/Api/ChangePasswordServicesApi.md#generate) | **POST** /ecomm/gw/partner/api/accounts/v1/apikey/generate | Генерация ключа Клиента для работы с сервисами платежного шлюза через SDK [generateApiKey]
*ChangePasswordServicesApi* | [**setPermanentPassword**](docs/Api/ChangePasswordServicesApi.md#setpermanentpassword) | **POST** /ecomm/gw/partner/api/accounts/v1/set-permanent-password | Установка постоянного пароля [setPermanentPassword]
*FiscalizationServicesApi* | [**doReceipt**](docs/Api/FiscalizationServicesApi.md#doreceipt) | **POST** /ecomm/gw/partner/api/ofd/v1/doReceipt | Создание чека [doReceipt]
*FiscalizationServicesApi* | [**getReceiptStatus**](docs/Api/FiscalizationServicesApi.md#getreceiptstatus) | **POST** /ecomm/gw/partner/api/ofd/v1/getReceiptStatus | Получение информации о результате обработки чека [getReceiptStatus]
*FiscalizationServicesApi* | [**retryReceipt**](docs/Api/FiscalizationServicesApi.md#retryreceipt) | **POST** /ecomm/gw/partner/api/ofd/v1/retryReceipt | Переотправка чека без изменения Корзины [retryReceipt]
*LoyaltyServicesApi* | [**autoCompletion**](docs/Api/LoyaltyServicesApi.md#autocompletion) | **POST** /ecomm/gw/partner/api/v1/autoCompletion | Завершение двухстадийного сценария [autoCompletion]
*LoyaltyServicesApi* | [**autoRefund**](docs/Api/LoyaltyServicesApi.md#autorefund) | **POST** /ecomm/gw/partner/api/v1/autoRefund | Возврат средств Плательщика [autoRefund]
*LoyaltyServicesApi* | [**getBindingsByCardOrId**](docs/Api/LoyaltyServicesApi.md#getbindingsbycardorid) | **POST** /ecomm/gw/partner/api/v1/getLoyaltyBalance | Получение баланса бонусов Спасибо [getLoyaltyBalance]
*MirPayServicesApi* | [**paymentDirect**](docs/Api/MirPayServicesApi.md#paymentdirect) | **POST** /ecomm/gw/partner/api/v1/mir/paymentDirect.do | Проведение платежа с использованием прямого взаимодействия Клиента с MirPay [paymentDirectMirPay]
*PaymentServicesApi* | [**paymentOrder**](docs/Api/PaymentServicesApi.md#paymentorder) | **POST** /ecomm/gw/partner/api/v1/paymentOrder.do | Проведение оплаты по карте [paymentOrder]
*PaymentServicesApi* | [**paymentOrderBySubscription**](docs/Api/PaymentServicesApi.md#paymentorderbysubscription) | **POST** /ecomm/gw/partner/api/v1/paymentOrderBySubscription | Проведение оплаты по подписке СБП [paymentOrderBySubscription]
*PaymentServicesApi* | [**paymentSberPay**](docs/Api/PaymentServicesApi.md#paymentsberpay) | **POST** /ecomm/gw/partner/api/v1/paymentSberPay.do | Проведение оплаты через мобильное приложение \&quot;Сбербанк-Онлайн\&quot; [paymentSberPay]

## Models

- [AcsDecoupleIndicator](docs/Model/AcsDecoupleIndicator.md)
- [AdditionalParams](docs/Model/AdditionalParams.md)
- [AttributesInner](docs/Model/AttributesInner.md)
- [AutoCompletionRequest](docs/Model/AutoCompletionRequest.md)
- [AutoCompletionResponse](docs/Model/AutoCompletionResponse.md)
- [AutoRefundRequest](docs/Model/AutoRefundRequest.md)
- [AutoRefundResponse](docs/Model/AutoRefundResponse.md)
- [BankInfo](docs/Model/BankInfo.md)
- [BindCardRequest](docs/Model/BindCardRequest.md)
- [BindCardResponse](docs/Model/BindCardResponse.md)
- [BindingCallbackRequest](docs/Model/BindingCallbackRequest.md)
- [BindingInfo](docs/Model/BindingInfo.md)
- [BindingsInner](docs/Model/BindingsInner.md)
- [CallbackRequest](docs/Model/CallbackRequest.md)
- [CardAuthInfo](docs/Model/CardAuthInfo.md)
- [CardAuthInfoSecureAuthInfo](docs/Model/CardAuthInfoSecureAuthInfo.md)
- [CardAuthInfoSecureAuthInfoThreeDSInfo](docs/Model/CardAuthInfoSecureAuthInfoThreeDSInfo.md)
- [CardAuthInfoSecureCardInfo](docs/Model/CardAuthInfoSecureCardInfo.md)
- [CartItems](docs/Model/CartItems.md)
- [CartItemsItemsInner](docs/Model/CartItemsItemsInner.md)
- [CartItemsItemsInnerAgentInfo](docs/Model/CartItemsItemsInnerAgentInfo.md)
- [CartItemsItemsInnerAgentInfoMoneyTransferOperator](docs/Model/CartItemsItemsInnerAgentInfoMoneyTransferOperator.md)
- [CartItemsItemsInnerAgentInfoPayingAgent](docs/Model/CartItemsItemsInnerAgentInfoPayingAgent.md)
- [CartItemsItemsInnerAgentInfoReceivePaymentsOperator](docs/Model/CartItemsItemsInnerAgentInfoReceivePaymentsOperator.md)
- [CartItemsItemsInnerAgentInterest](docs/Model/CartItemsItemsInnerAgentInterest.md)
- [CartItemsItemsInnerDiscount](docs/Model/CartItemsItemsInnerDiscount.md)
- [CartItemsItemsInnerItemDetails](docs/Model/CartItemsItemsInnerItemDetails.md)
- [CartItemsItemsInnerItemDetailsItemDetailsParamsInner](docs/Model/CartItemsItemsInnerItemDetailsItemDetailsParamsInner.md)
- [CartItemsItemsInnerMarkCode](docs/Model/CartItemsItemsInnerMarkCode.md)
- [CartItemsItemsInnerMarkQuantity](docs/Model/CartItemsItemsInnerMarkQuantity.md)
- [CartItemsItemsInnerQuantity](docs/Model/CartItemsItemsInnerQuantity.md)
- [CartItemsItemsInnerSectoralItemPropsInner](docs/Model/CartItemsItemsInnerSectoralItemPropsInner.md)
- [CartItemsItemsInnerSupplierInfo](docs/Model/CartItemsItemsInnerSupplierInfo.md)
- [CartItemsItemsInnerTax](docs/Model/CartItemsItemsInnerTax.md)
- [CustomerDetails](docs/Model/CustomerDetails.md)
- [CustomerDetailsDeliveryInfo](docs/Model/CustomerDetailsDeliveryInfo.md)
- [DataEntryModeAttributes](docs/Model/DataEntryModeAttributes.md)
- [DeclineRequest](docs/Model/DeclineRequest.md)
- [DeclineResponse](docs/Model/DeclineResponse.md)
- [DepositRequest](docs/Model/DepositRequest.md)
- [DepositResponse](docs/Model/DepositResponse.md)
- [DoReceiptRequest](docs/Model/DoReceiptRequest.md)
- [DoReceiptResponse](docs/Model/DoReceiptResponse.md)
- [ExternalParams](docs/Model/ExternalParams.md)
- [ExternalRefundId](docs/Model/ExternalRefundId.md)
- [Finish3dsMethodRequest](docs/Model/Finish3dsMethodRequest.md)
- [Finish3dsMethodResponse](docs/Model/Finish3dsMethodResponse.md)
- [Finish3dsPaymentRequest](docs/Model/Finish3dsPaymentRequest.md)
- [Finish3dsPaymentResponse](docs/Model/Finish3dsPaymentResponse.md)
- [FmConversionAttributes](docs/Model/FmConversionAttributes.md)
- [GenerateApikeyRequest](docs/Model/GenerateApikeyRequest.md)
- [GenerateApikeyResponse](docs/Model/GenerateApikeyResponse.md)
- [GetBindingsByCardOrIdRequest](docs/Model/GetBindingsByCardOrIdRequest.md)
- [GetBindingsByCardOrIdRequestOneOf](docs/Model/GetBindingsByCardOrIdRequestOneOf.md)
- [GetBindingsByCardOrIdRequestOneOf1](docs/Model/GetBindingsByCardOrIdRequestOneOf1.md)
- [GetBindingsByCardOrIdResponse](docs/Model/GetBindingsByCardOrIdResponse.md)
- [GetBindingsRequest](docs/Model/GetBindingsRequest.md)
- [GetBindingsResponse](docs/Model/GetBindingsResponse.md)
- [GetLoyaltyBalanceRequest](docs/Model/GetLoyaltyBalanceRequest.md)
- [GetLoyaltyBalanceResponse](docs/Model/GetLoyaltyBalanceResponse.md)
- [GetOrderStatusExtendedRequest](docs/Model/GetOrderStatusExtendedRequest.md)
- [GetOrderStatusExtendedRequestOneOf](docs/Model/GetOrderStatusExtendedRequestOneOf.md)
- [GetOrderStatusExtendedRequestOneOf1](docs/Model/GetOrderStatusExtendedRequestOneOf1.md)
- [GetOrderStatusExtendedResponse](docs/Model/GetOrderStatusExtendedResponse.md)
- [GetOrderStatusExtendedResponseAttributes](docs/Model/GetOrderStatusExtendedResponseAttributes.md)
- [GetReceiptStatusRequest](docs/Model/GetReceiptStatusRequest.md)
- [GetReceiptStatusRequestOneOf](docs/Model/GetReceiptStatusRequestOneOf.md)
- [GetReceiptStatusResponse](docs/Model/GetReceiptStatusResponse.md)
- [KeyValue](docs/Model/KeyValue.md)
- [LoyaltyAttributes](docs/Model/LoyaltyAttributes.md)
- [LoyaltyInfo](docs/Model/LoyaltyInfo.md)
- [LoyaltyInfoAwardBonus](docs/Model/LoyaltyInfoAwardBonus.md)
- [LoyaltyInfoPaymentBonus](docs/Model/LoyaltyInfoPaymentBonus.md)
- [LoyaltyOperationsInner](docs/Model/LoyaltyOperationsInner.md)
- [MerchantOrderParamsInner](docs/Model/MerchantOrderParamsInner.md)
- [OperationsInner](docs/Model/OperationsInner.md)
- [OrderBundle](docs/Model/OrderBundle.md)
- [OrderBundleAdditionalUserProps](docs/Model/OrderBundleAdditionalUserProps.md)
- [OrderBundleCompany](docs/Model/OrderBundleCompany.md)
- [OrderBundleInstallments](docs/Model/OrderBundleInstallments.md)
- [OrderBundleOperatingCheckProps](docs/Model/OrderBundleOperatingCheckProps.md)
- [OrderBundlePaymentsInner](docs/Model/OrderBundlePaymentsInner.md)
- [OrderBundleSectoralCheckPropsInner](docs/Model/OrderBundleSectoralCheckPropsInner.md)
- [PayerData](docs/Model/PayerData.md)
- [PaymentAmountInfo](docs/Model/PaymentAmountInfo.md)
- [PaymentDirectRequest](docs/Model/PaymentDirectRequest.md)
- [PaymentDirectRequestAdditionalParameters](docs/Model/PaymentDirectRequestAdditionalParameters.md)
- [PaymentDirectResponse](docs/Model/PaymentDirectResponse.md)
- [PaymentDirectResponseOrderStatus](docs/Model/PaymentDirectResponseOrderStatus.md)
- [PaymentDirectResponseOrderStatusCardAuthInfo](docs/Model/PaymentDirectResponseOrderStatusCardAuthInfo.md)
- [PaymentOrderBindingRequest](docs/Model/PaymentOrderBindingRequest.md)
- [PaymentOrderBindingRequestJsonParams](docs/Model/PaymentOrderBindingRequestJsonParams.md)
- [PaymentOrderBindingResponse](docs/Model/PaymentOrderBindingResponse.md)
- [PaymentOrderBySubscriptionRequest](docs/Model/PaymentOrderBySubscriptionRequest.md)
- [PaymentOrderBySubscriptionResponse](docs/Model/PaymentOrderBySubscriptionResponse.md)
- [PaymentOrderRequest](docs/Model/PaymentOrderRequest.md)
- [PaymentOrderRequestJsonParams](docs/Model/PaymentOrderRequestJsonParams.md)
- [PaymentOrderResponse](docs/Model/PaymentOrderResponse.md)
- [PaymentPageAttributes](docs/Model/PaymentPageAttributes.md)
- [PaymentSberPayRequest](docs/Model/PaymentSberPayRequest.md)
- [PaymentSberPayResponse](docs/Model/PaymentSberPayResponse.md)
- [QrAttributes](docs/Model/QrAttributes.md)
- [ReceiptsInner](docs/Model/ReceiptsInner.md)
- [ReceiptsInnerError](docs/Model/ReceiptsInnerError.md)
- [ReceiptsInnerPayload](docs/Model/ReceiptsInnerPayload.md)
- [RecurrentPaymentRequest](docs/Model/RecurrentPaymentRequest.md)
- [RecurrentPaymentRequestAdditionalParameters](docs/Model/RecurrentPaymentRequestAdditionalParameters.md)
- [RecurrentPaymentResponse](docs/Model/RecurrentPaymentResponse.md)
- [RecurrentPaymentResponseData](docs/Model/RecurrentPaymentResponseData.md)
- [RecurrentPaymentResponseError](docs/Model/RecurrentPaymentResponseError.md)
- [RecurrentPaymentResponseOrderStatus](docs/Model/RecurrentPaymentResponseOrderStatus.md)
- [RecurrentPaymentResponseOrderStatusCardAuthInfo](docs/Model/RecurrentPaymentResponseOrderStatusCardAuthInfo.md)
- [RefundRequest](docs/Model/RefundRequest.md)
- [RefundRequestJsonParams](docs/Model/RefundRequestJsonParams.md)
- [RefundResponse](docs/Model/RefundResponse.md)
- [RegisterPreAuthRequest](docs/Model/RegisterPreAuthRequest.md)
- [RegisterPreAuthRequestJsonParams](docs/Model/RegisterPreAuthRequestJsonParams.md)
- [RegisterRequest](docs/Model/RegisterRequest.md)
- [RegisterRequestJsonParams](docs/Model/RegisterRequestJsonParams.md)
- [RegisterResponse](docs/Model/RegisterResponse.md)
- [RetryReceiptRequest](docs/Model/RetryReceiptRequest.md)
- [RetryReceiptResponse](docs/Model/RetryReceiptResponse.md)
- [RetryReceiptResponseRetryResultInner](docs/Model/RetryReceiptResponseRetryResultInner.md)
- [ReverseRequest](docs/Model/ReverseRequest.md)
- [ReverseResponse](docs/Model/ReverseResponse.md)
- [SBPSubscriptionResponse](docs/Model/SBPSubscriptionResponse.md)
- [SberbankOnlineAttributes](docs/Model/SberbankOnlineAttributes.md)
- [SetPermanentPasswordRequest](docs/Model/SetPermanentPasswordRequest.md)
- [SetPermanentPasswordResponse](docs/Model/SetPermanentPasswordResponse.md)
- [TdsAdditionalAttributes](docs/Model/TdsAdditionalAttributes.md)
- [TdsApplicationAttributes](docs/Model/TdsApplicationAttributes.md)
- [TdsBrowserAttributes](docs/Model/TdsBrowserAttributes.md)
- [TdsDecoupledAttributes](docs/Model/TdsDecoupledAttributes.md)
- [TdsDestinationNumberAttributes](docs/Model/TdsDestinationNumberAttributes.md)
- [TdsExternalAttributes](docs/Model/TdsExternalAttributes.md)
- [ThreeDSCompInd](docs/Model/ThreeDSCompInd.md)
- [TransactionAttributesInner](docs/Model/TransactionAttributesInner.md)
- [UnBindCardRequest](docs/Model/UnBindCardRequest.md)
- [UnBindCardResponse](docs/Model/UnBindCardResponse.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.7`
    - Generator version: `7.6.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
