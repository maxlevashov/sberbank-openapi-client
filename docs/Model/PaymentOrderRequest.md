# # PaymentOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | Логин Клиента, полученный при подключении к ПШ |
**password** | **string** | Пароль Клиента, полученный при подключении к ПШ |
**mdorder** | **string** | Уникальный номер заказа в Платёжном шлюзе. |
**pan** | **string** | Номер Карты Плательщика |
**cvc** | **string** | Проверочный код Карты Плательщика (обычно с обратной стороны Карты) | [optional]
**yyyy** | **string** | Год окончания срока действия Карты |
**mm** | **string** | Месяц окончания срока действия Карты |
**text** | **string** | Текст, изображенный на Карте Плательщика в ISO 8859-1. Допустимы Имя, Фамилия, инициалы или любые комбинации специальных символов ASCII, кроме кириллицы | [optional]
**language** | **string** | Язык в кодировке ISO 639-1 (ru, en). Если не указан, будет использовано значение по умолчанию, указанное в настройках Клиента | [optional]
**ip** | **string** | IP-адрес Плательщика | [optional]
**email** | **string** | Адрес электронной почты Плательщика. В случае использования фискализации обязателен, при отсутствии phone. | [optional]
**json_params** | [**\Sberbank\Model\PaymentOrderRequestJsonParams**](PaymentOrderRequestJsonParams.md) |  | [optional]
**three_ds_method_notification_url** | **string** | URL адрес Клиента для получения уведомления о завершении вызова 3DS Method (3DS Method Notification URL) | [optional]
**term_url** | **string** | URL адрес Клиента для возврата после проведения 3-D Secure аутентификации Плательщика. Обязателен, если используется платёжная страница на стороне Клиента и 3DS Server Банка | [optional]
**binding_not_needed** | **bool** | Признак отказа от создания Связки Плательщиком.   * &#x60;true&#x60; &#x3D; истина, создание Связки после платежа не происходит, а идентификатор Плательщика (clientId), переданный при регистрации заказа, после совершения платежа будет удалён или не будет сгенерирован автоматически;   * &#x60;false&#x60; &#x3D; ложь (по умолчанию), после успешного проведения платежа и выполнения ряда дополнительных условий - происходит создание Связки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
