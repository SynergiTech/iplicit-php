# # ProductSalePriceCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | The product price currency code  Will be defaulted from the environment default. | [optional]
**unitPrice** | **float** | The product unit price |
**effectiveDate** | **\DateTime** | The product price effective date  Will be defaulted to todays date | [optional]
**quantityFrom** | **float** | The product quantity this price is applicable from  Will be defaulted to zero. | [optional]
**quantityTo** | **float** | The product quantity this price is applicable to | [optional]
**unitOfMeasureRef** | **string** | Unit of measure (id or code).  See catalog &#x60;Unit&#x60; for possible values.  Will defaulted from the parent product | [optional]
**customerRef** | **string** | Product price supplier id or code. | [optional]
**projectRef** | **string** | Default project id or code. | [optional]
**productPriceBandRef** | **string** | Product Price band id or code. | [optional]
**productSKURef** | **string** | Product SKU id or code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
