# # ContactAccountRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Contact account id | [optional]
**code** | **string** | Contact account code. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**description** | **string** | Contact account internal description | [optional]
**companyNo** | **string** | Company number | [optional]
**taxNo** | **string** | Tax number | [optional]
**legacyRef** | **string** | Alternative / legacy reference code | [optional]
**theirRef** | **string** | An external reference code | [optional]
**countryCode** | **string** | Country code. See &#x60;Country&#x60; catalog. (ISO 3166, ALPHA-2) | [optional]
**contactClassificationId** | **string** | Contact classification id | [optional]
**isParent** | **bool** | Is parent flag | [optional]
**parentContactAccountId** | **string** | Parent contact account id | [optional]
**customer** | [**\SynergiTech\Iplicit\Model\ContactCustomerRead**](ContactCustomerRead.md) |  | [optional]
**supplier** | [**\SynergiTech\Iplicit\Model\ContactSupplierRead**](ContactSupplierRead.md) |  | [optional]
**resource** | [**\SynergiTech\Iplicit\Model\ContactResourceRead**](ContactResourceRead.md) |  | [optional]
**contact** | [**\SynergiTech\Iplicit\Model\ContactRead**](ContactRead.md) |  | [optional]
**contacts** | [**\SynergiTech\Iplicit\Model\ContactRead[]**](ContactRead.md) | Persons contact details (?include&#x3D;contacts) | [optional]
**defaultBankDetails** | [**\SynergiTech\Iplicit\Model\ContactBankDetailsRead**](ContactBankDetailsRead.md) |  | [optional]
**bankDetails** | [**\SynergiTech\Iplicit\Model\ContactBankDetailsRead[]**](ContactBankDetailsRead.md) | All bank details. (?include&#x3D;allBankDetails) | [optional]
**lastModified** | **\DateTime** | The date and time this item has been last modified | [optional]
**lastModifiedBy** | **string** | The user that last modified this item. See &#x60;UserAccount&#x60; catalog. | [optional]
**hasNotes** | **bool** | Flag indicating whether there are any notes attached | [optional]
**hasAttachments** | **bool** | Flag indicating whether there are any documents attached | [optional]
**createdDate** | **\DateTime** | The date and time this item has been created | [optional]
**createdBy** | **string** | The user that created this item. See &#x60;UserAccount&#x60; catalog. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
