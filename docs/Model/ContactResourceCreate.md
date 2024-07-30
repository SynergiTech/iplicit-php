# # ContactResourceCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isActive** | **bool** |  | [optional]
**resourceGroupId** | **string** | Required, the *Resource group* will determine defaults for all the other unspecified resource fields. See &#x60;ResourceGroup&#x60; catalog. |
**departmentId** | **string** | Resource department id or code | [optional]
**locationId** | **string** | Resource location id or code | [optional]
**nationalInsuranceNo** | **string** | Resource national insurance number | [optional]
**currency** | **string** |  | [optional]
**absenceGroupId** | **string** | Resource absence group id or code | [optional]
**costCentreId** | **string** | Resource cost centre id or code | [optional]
**managerResourceId** | **string** | Resource manager id or code | [optional]
**uniqueTaxpayerReference** | **string** | Resource tax reference | [optional]
**isSalesperson** | **bool** | Resource is a sales person | [optional]
**isBuyer** | **bool** | Resource is responsible for purchase orders | [optional]
**isRequestor** | **bool** | Resource is responsible for requisitions | [optional]
**allowExpense** | **bool** | Resource is allowed expenses | [optional]
**allowTask** | **bool** | Resource can be allocated tasks | [optional]
**allowTimesheet** | **bool** | Resource can record timesheets | [optional]
**hasEmployment** | **bool** | Resource can record employment | [optional]
**hasUmbrella** | **bool** | Resource can record umbrella supplier | [optional]
**paymentMethodId** | **string** | Expense payment method id or code | [optional]
**paymentTermsId** | **string** | Expense payment terms id or code | [optional]
**sendRemittance** | **bool** | Expense remittance advice produced | [optional]
**resourceEmployments** | [**\SynergiTech\Iplicit\Model\ResourceEmploymentCreate[]**](ResourceEmploymentCreate.md) | List of resource employment records | [optional]
**resourceUmbrellas** | [**\SynergiTech\Iplicit\Model\ResourceUmbrellaCreate[]**](ResourceUmbrellaCreate.md) | List of resource umbrella supplier records | [optional]
**ext** | **array<string,mixed>** | Custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
