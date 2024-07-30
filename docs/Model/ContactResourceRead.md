# # ContactResourceRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isActive** | **bool** | Active or locked (soft delete) | [optional]
**resourceGroupId** | **string** | Resource group id | [optional]
**departmentId** | **string** | Resource department id | [optional]
**locationId** | **string** | Resource location id | [optional]
**nationalInsuranceNo** | **string** | Resource national insurance number | [optional]
**currency** | **string** | Currency code. See &#x60;Currency&#x60; catalog. (ISO 4217) | [optional]
**absenceGroupId** | **string** | Resource absence group id | [optional]
**costCentreId** | **string** | Resource cost centre id | [optional]
**managerResourceId** | **string** | Resource manager id | [optional]
**uniqueTaxpayerReference** | **string** | Resource tax reference | [optional]
**isSalesperson** | **bool** | Resource is a sales person | [optional]
**isBuyer** | **bool** | Resource is responsible for purchase orders | [optional]
**isRequestor** | **bool** | Resource is responsible for requisitions | [optional]
**allowExpense** | **bool** | Resource is allowed expenses | [optional]
**allowTask** | **bool** | Resource can be allocated tasks | [optional]
**allowTimesheet** | **bool** | Resource can record timesheets | [optional]
**hasEmployment** | **bool** | Resource can record employment | [optional]
**hasUmbrella** | **bool** | Resource can record umbrella supplier | [optional]
**paymentMethodId** | **string** | Expense payment method id | [optional]
**paymentTermsId** | **string** | Expense payment terms id | [optional]
**sendRemittance** | **bool** | Expense remittance advice produced | [optional]
**timesheetProducts** | [**\SynergiTech\Iplicit\Model\TimesheetProductRead[]**](TimesheetProductRead.md) | List of resource timesheet products | [optional]
**expenseProducts** | [**\SynergiTech\Iplicit\Model\ExpenseProductRead[]**](ExpenseProductRead.md) | List of resource expense products | [optional]
**resourceEmployments** | [**\SynergiTech\Iplicit\Model\ResourceEmploymentRead[]**](ResourceEmploymentRead.md) | List of resource employment records | [optional]
**resourceUmbrellas** | [**\SynergiTech\Iplicit\Model\ResourceUmbrellaRead[]**](ResourceUmbrellaRead.md) | List of resource umbrella supplier records | [optional]
**ext** | **array<string,mixed>** | Custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
