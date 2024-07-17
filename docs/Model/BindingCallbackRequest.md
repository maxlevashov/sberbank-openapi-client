# # BindingCallbackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_id** | **string** | Идентификатор Связки, созданной ранее. Может использоваться, только если у магазина есть разрешение на работу со связками |
**client_id** | **string** | Номер (идентификатор) Плательщика в системе Клиента. Используется для реализации функционала Связок |
**operation** | **string** | Тип операции, о которой формируется уведомление. Возможны следующие значения:   * &#x60;bindingCreated&#x60; &#x3D; данные связки были изменены Плательщиком.   * &#x60;bindingDeactivated&#x60; &#x3D; связка была деактивирована Плательщиком. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
