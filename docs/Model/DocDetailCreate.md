# # DocDetailCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productId** | **string** | The document detail product id or code | [optional]
**productSkuId** | **string** | The document detail product sku id or code | [optional]
**projectId** | **string** | The document detail project id | [optional]
**taxCodeId** | **string** | The document detail tax code id | [optional]
**uomId** | **string** | The document detail unit of measure id | [optional]
**accountId** | **string** | The document detail account id | [optional]
**post** | **array<string,string>** | The document detail posting attributes | [optional]
**taxBandId** | **string** | The document detail tax band id | [optional]
**lineDate** | **\DateTime** | The document detail line date | [optional]
**description** | **string** | The document detail description | [optional]
**isNetEntry** | **bool** | The document detail is net entry flag | [optional]
**currencyUnitPrice** | **float** | The document detail currency unit price | [optional]
**netCurrencyUnitPrice** | **float** | The document detail net currency unit price | [optional]
**grossCurrencyUnitPrice** | **float** | The document detail gorss currency unit price | [optional]
**quantity** | **float** | The document detail quantity | [optional]
**skuQuantity** | **float** | The document detail sku quantity | [optional]
**netCurrencyAmount** | **float** | The document detail net currency amount | [optional]
**taxCurrencyAmount** | **float** | The document detail tax currency amount | [optional]
**grossCurrencyAmount** | **float** | The document detail gross currency amount | [optional]
**netAmount** | **float** | The document detail net amount | [optional]
**taxAmount** | **float** | The document detail tax amount | [optional]
**grossAmount** | **float** | The document detail gross amount | [optional]
**fromStockLocationId** | **string** | The document detail from stock location id | [optional]
**toStockLocationId** | **string** | The document detail to stock location id | [optional]
**stockDate** | **\DateTime** | The document detail stock date | [optional]
**isResale** | **bool** | The document detail is resale flag | [optional]
**textPre** | **string** | The document detail pre text | [optional]
**textPost** | **string** | The document detail post text | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**legacyRef** | **string** | Alternative / legacy reference code | [optional]
**productType** | **string** | The document detail product type | [optional]
**isDeferred** | **bool** | The document detail is deferred flag | [optional]
**deferredDistribution** | [**\SynergiTech\Iplicit\Model\DocDetailDeferredCreateUpdate**](DocDetailDeferredCreateUpdate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
