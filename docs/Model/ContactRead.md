# # ContactRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Contact id | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**contactType** | **string** | Contact type: &#x60;C&#x60;: company, &#x60;P&#x60;: person | [optional]
**description** | **string** | Contact description | [optional]
**companyName** | **string** | Company name. (Applicable to both Company and Person contact types) | [optional]
**title** | **string** | Person title. (Applicable to Person contact types only). | [optional]
**firstName** | **string** | Person first name. (Applicable to Person contact types only). | [optional]
**middleName** | **string** | Person middle name. (Applicable to Person contact types only). | [optional]
**lastName** | **string** | Person last name. (Applicable to Person contact types only). | [optional]
**jobTitle** | **string** | Person job title. (Applicable to Person contact types only). | [optional]
**parentContactId** | **string** |  | [optional]
**legacyRef** | **string** | Alternative / legacy reference code | [optional]
**isActive** | **bool** | Active or locked (soft delete) | [optional]
**lastModified** | **\DateTime** | The date and time this item has been last modified | [optional]
**lastModifiedBy** | **string** | The user that last modified this item. See &#x60;UserAccount&#x60; catalog. | [optional]
**hasNotes** | **bool** | Flag indicating whether there are any notes attached | [optional]
**hasAttachments** | **bool** | Flag indicating whether there are any documents attached | [optional]
**emails** | [**\SynergiTech\Iplicit\Model\ContactEmailRead[]**](ContactEmailRead.md) |  | [optional]
**phones** | [**\SynergiTech\Iplicit\Model\ContactPhoneRead[]**](ContactPhoneRead.md) |  | [optional]
**addresses** | [**\SynergiTech\Iplicit\Model\ContactAddressRead[]**](ContactAddressRead.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
