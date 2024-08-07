# # DocUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**docTypeId** | **string** | The document type id | [optional]
**legalEntityId** | **string** | The document legal entity id | [optional]
**contactAccountId** | **string** | The document contact account id | [optional]
**periodId** | **string** | The document period id | [optional]
**accountId** | **string** | The document account id | [optional]
**post** | **array<string,string>** | The document posting attributes | [optional]
**taxAuthorityId** | **string** | The document tax authority id | [optional]
**paymentMethodId** | **string** | The document payment method id | [optional]
**responsibleResourceId** | **string** | The document responsible resource id | [optional]
**projectId** | **string** | The document project id | [optional]
**docDate** | **\DateTime** | The document document date | [optional]
**description** | **string** | The document description | [optional]
**taxDate** | **\DateTime** | The document tax date | [optional]
**dueDate** | **\DateTime** | The document due date | [optional]
**currency** | **string** | Currency code. See &#x60;Currency&#x60; catalog. (ISO 4217) | [optional]
**currencyRate** | **float** | The document curerncy rate | [optional]
**isNetEntry** | **bool** | The document is net entry flag | [optional]
**theirDocNo** | **string** | An external document number | [optional]
**theirRef** | **string** | An external reference code | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**legacyRef** | **string** | Alternative / legacy reference code | [optional]
**details** | [**\SynergiTech\Iplicit\Model\DocDetailUpdate[]**](DocDetailUpdate.md) | The document detail itemms | [optional]
**bankAccountId** | **string** | The document bank account id | [optional]
**bankCurrencyRate** | **float** | The document bank currency rate | [optional]
**bankCurrencyAmount** | **float** | The document bank currency amount | [optional]
**bankRef** | **string** | The document bank reference | [optional]
**deliveryAddress** | [**\SynergiTech\Iplicit\Model\ContactAddressInline**](ContactAddressInline.md) |  | [optional]
**billingAddress** | [**\SynergiTech\Iplicit\Model\ContactAddressInline**](ContactAddressInline.md) |  | [optional]
**fromStockLocationId** | **string** | The document from stock location id | [optional]
**toStockLocationId** | **string** | The document to stock location id | [optional]
**stockDate** | **\DateTime** | The document stock date | [optional]
**paymentTermsId** | **string** | The document default payment terms. See &#x60;PayTerm&#x60; catalog. | [optional]
**ext** | **array<string,mixed>** | Teh document custom fields | [optional]
**textHeader** | **string** | The document header text | [optional]
**textFooter** | **string** | The document footer text | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
