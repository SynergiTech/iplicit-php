# # ProductRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The product id. | [optional]
**code** | **string** | The product code. | [optional]
**description** | **string** | The product description. | [optional]
**productGroupId** | **string** | The product group. See catalog &#x60;ProductGroup&#x60; for values. | [optional]
**productType** | **string** | The product type for tax purposes: &#x60;G&#x60;: goods, &#x60;S&#x60;: services, &#x60;O&#x60;: other. | [optional]
**uomId** | **string** | Unit of measure id. See catalog &#x60;Unit&#x60; for values | [optional]
**uomGroupId** | **string** | Unit of measure group id. See catalog &#x60;UnitGroup&#x60; for values | [optional]
**legacyRef** | **string** |  | [optional]
**purchase** | [**\SynergiTech\Iplicit\Model\ProductPurchaseRead**](ProductPurchaseRead.md) |  | [optional]
**sale** | [**\SynergiTech\Iplicit\Model\ProductSaleRead**](ProductSaleRead.md) |  | [optional]
**lastModified** | **\DateTime** | The date and time this item has been last modified | [optional]
**lastModifiedBy** | **string** | The user that last modified this item. See &#x60;UserAccount&#x60; catalog. | [optional]
**ext** | **array<string,mixed>** | The product additional fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
