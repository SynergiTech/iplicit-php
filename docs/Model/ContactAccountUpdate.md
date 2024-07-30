# # ContactAccountUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**description** | **string** | Required, the internal contact account description. | [optional]
**companyNo** | **string** | Company number | [optional]
**taxNo** | **string** | Tax number | [optional]
**legacyRef** | **string** |  | [optional]
**theirRef** | **string** |  | [optional]
**countryCode** | **string** | Country code. See &#x60;Country&#x60; catalog. (ISO 3166, ALPHA-2) | [optional]
**contactClassificationId** | **string** | Optional, Contact classification id or code | [optional]
**customer** | [**\SynergiTech\Iplicit\Model\ContactCustomerUpdate**](ContactCustomerUpdate.md) |  | [optional]
**supplier** | [**\SynergiTech\Iplicit\Model\ContactSupplierUpdate**](ContactSupplierUpdate.md) |  | [optional]
**resource** | [**\SynergiTech\Iplicit\Model\ContactResourceUpdate**](ContactResourceUpdate.md) |  | [optional]
**contact** | [**\SynergiTech\Iplicit\Model\ContactCreate**](ContactCreate.md) |  | [optional]
**contacts** | [**\SynergiTech\Iplicit\Model\ContactCreate[]**](ContactCreate.md) | Optional additional related people and their contact details | [optional]
**bankDetails** | [**\SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable[]**](ContactBankDetailsUpdateable.md) | Bank details | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)