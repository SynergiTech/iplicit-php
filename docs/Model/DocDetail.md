# # DocDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The document detail unique id | [optional]
**lineDate** | **\DateTime** | The document detail line date | [optional]
**description** | **string** | The document detail description | [optional]
**docClass** | **string** | The document detail class | [optional]
**docId** | **string** | The document detail document id | [optional]
**productId** | **string** | The document detail product id | [optional]
**projectId** | **string** | The document detail project id | [optional]
**taxCodeId** | **string** | The document detail tax code id | [optional]
**taxDate** | **\DateTime** | The document detail tax date | [optional]
**taxRate** | **float** | The document detail tax rate | [optional]
**isNetEntry** | **bool** | The document detail is net entry | [optional]
**netCurrencyUnitPrice** | **float** | The document detail net currency unit price | [optional]
**grossCurrencyUnitPrice** | **float** | The document detail gross currency unit price | [optional]
**quantity** | **float** | The document detail quantity | [optional]
**uomId** | **string** | The document detail unit of measure id | [optional]
**skuQuantity** | **float** | The document detail Sku quantity | [optional]
**netAmount** | **float** | The document detail net amount | [optional]
**grossAmount** | **float** | The document detail gross amount | [optional]
**taxAmount** | **float** | The document detail tax amount | [optional]
**orderIndex** | **int** | The document detail order index | [optional]
**lastModified** | **\DateTime** | The date and time this item has been last modified | [optional]
**lastModifiedBy** | **string** | The user that last modified this item. See &#x60;UserAccount&#x60; catalog. | [optional]
**netCurrencyAmount** | **float** | The document detail net currency amount | [optional]
**taxCurrencyAmount** | **float** | The document detail tax currency amount | [optional]
**grossCurrencyAmount** | **float** | The document detail gross currency amount | [optional]
**fromStockLocationId** | **string** | The document detail from stock location id | [optional]
**toStockLocationId** | **string** | The document detail to stock location id | [optional]
**stockDate** | **\DateTime** | The document detail stock date | [optional]
**status** | **int** | The document detail status | [optional]
**accountId** | **string** | The document detail account id | [optional]
**currency** | **string** | The document detail currency | [optional]
**currencyRate** | **float** | The document detail currency rate | [optional]
**hasAttachments** | **bool** | Flag indicating whether there are any documents attached | [optional]
**hasNotes** | **bool** | Flag indicating whether there are any notes attached | [optional]
**isTaxAdjustment** | **bool** | The document detail is tax adjustment flaa | [optional]
**isReverseCharge** | **bool** | The document detail is reverse charge flag | [optional]
**taxBandId** | **string** | The document detail tax band id | [optional]
**isResale** | **bool** | The document detail is resale flag | [optional]
**textPre** | **string** | The document detail pre text | [optional]
**textPost** | **string** | The document detail post text | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**legacyRef** | **string** | Alternative / legacy reference code | [optional]
**productType** | **string** | The document detail product type | [optional]
**isDeferred** | **bool** | The document detail is deferred flag | [optional]
**deferredDistribution** | [**\SynergiTech\Iplicit\Model\DocDetailDeferred**](DocDetailDeferred.md) |  | [optional]
**post** | **array<string,string>** | The document posting fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
