# # ExternalRefundId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_refund_id** | **string** | Ключ идемпотентности возврата, присвоенный Клиентом. Учитывается в рамках одного заказа (orderId) и не имеет временных ограничений. При отправке повторного запроса с теми же данными и тем же ключом идемпотентности, ПШ обрабатывает запрос как повторный (с дублированием ответа на первоначальный запрос). Если в повторном запросе ключ идемпотентности тот же, а данные (хэш) запроса отличаются, то ПШ возвращает ошибку. При отправке запроса с уникальным ключом идемпотентности (либо при его отсутствии), ПШ обрабатывает запрос как новый. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
