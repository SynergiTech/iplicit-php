# # ContactCustomerCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactGroupCustomerId** | **string** | Required, the *Customer group* will determine defaults for all the other unspecified customer fields. See &#x60;ContactGroupCustomer&#x60; catalog. |
**currency** | **string** |  | [optional]
**creditLimit** | **float** |  | [optional]
**discountRate** | **float** |  | [optional]
**paymentMethodId** | **string** |  | [optional]
**payTermId** | **string** |  | [optional]
**productPriceBandId** | **string** |  | [optional]
**receiveInvoices** | **bool** |  | [optional]
**reminderGroupId** | **string** | Include in invoice distribution | [optional]
**receiveReminders** | **bool** |  | [optional]
**receiveStatements** | **bool** |  | [optional]
**taxBandId** | **string** |  | [optional]
**taxBandFixed** | **bool** |  | [optional]
**taxAuthorityId** | **string** |  | [optional]
**isMultiTaxAuthority** | **bool** |  | [optional]
**multiTaxAuthorityIds** | **string[]** |  | [optional]
**stockLocationId** | **string** |  | [optional]
**isActive** | **bool** |  | [optional]
**creditReportDate** | **\DateTime** |  | [optional]
**creditScore** | **float** |  | [optional]
**riskLevel** | **string** |  | [optional]
**ignoreDeferredIncome** | **bool** |  | [optional]
**ignoreDeposit** | **bool** |  | [optional]
**ignoreSchedule** | **bool** |  | [optional]
**isHold** | **bool** | Hold for posting | [optional]
**isStop** | **bool** | Stop all documents | [optional]
**projectId** | **string** |  | [optional]
**applyDomesticReverseCharge** | **bool** |  | [optional]
**orderRequired** | **bool** |  | [optional]
**costCentreId** | **string** | Default cost centre id or code | [optional]
**costCentreFixed** | **bool** |  | [optional]
**departmentId** | **string** | Default department id or code | [optional]
**departmentFixed** | **bool** |  | [optional]
**warningMessage** | **string** | Default warning message | [optional]
**ext** | **array<string,mixed>** | Custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
