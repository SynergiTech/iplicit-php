# # ProductCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The &#x60;Code&#x60; must be unique. |
**description** | **string** | The product description |
**productGroupId** | **string** | Optional *Product Group* id or code. It can default the other properties below. | [optional]
**productType** | **string** | Optional, specifies if the product is a Goods (&#x60;G&#x60;), Services (&#x60;S&#x60;) or Other (&#39;O&#39;) from a tax point of view.  Defaults from the *Product Group*, if defined. | [optional]
**uomId** | **string** | Unit of measure (id or code).  See catalog &#x60;Unit&#x60; for possible values.  Will be defaulted from *Product Group* or environment default. | [optional]
**uomGroupId** | **string** | Unit of measure group (id or code).  See catalog &#x60;UnitGroup&#x60; for possible values.  Will be defaulted from *Product Group* or environment default. | [optional]
**legacyRef** | **string** | An optional reference | [optional]
**ext** | **array<string,mixed>** | The product custom fields | [optional]
**purchase** | [**\SynergiTech\Iplicit\Model\ProductPurchaseCreate**](ProductPurchaseCreate.md) |  | [optional]
**sale** | [**\SynergiTech\Iplicit\Model\ProductSaleCreate**](ProductSaleCreate.md) |  | [optional]
**stock** | [**\SynergiTech\Iplicit\Model\ProductStockCreate**](ProductStockCreate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
