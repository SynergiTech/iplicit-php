# # ContactCustomerUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactGroupCustomerId** | **string** | The *Customer group*. See &#x60;ContactGroupCustomer&#x60; catalog. | [optional]
**currency** | **string** |  | [optional]
**creditLimit** | **float** | Credit limit | [optional]
**discountRate** | **float** | Discount rate (0 - 100). | [optional]
**paymentMethodId** | **string** | Default payment method. See &#x60;PaymentMethod&#x60; catalog. | [optional]
**payTermId** | **string** | Default payment terms. See &#x60;PayTerm&#x60; catalog. | [optional]
**reminderGroupId** | **string** | Include in invoice distribution | [optional]
**receiveInvoices** | **bool** | Default reminder group. See &#x60;ReminderGroup&#x60; catalog. | [optional]
**receiveReminders** | **bool** | Include in reminder letter distribution | [optional]
**receiveStatements** | **bool** | Include in customer statement distribution | [optional]
**taxBandId** | **string** | Default tax band | [optional]
**taxBandFixed** | **bool** | The default tax band is fixed | [optional]
**taxAuthorityId** | **string** | Tax authority that the customer belongs to. See &#x60;TaxAuthority&#x60; catalog. | [optional]
**isActive** | **bool** | Active or locked | [optional]
**creditReportDate** | **\DateTime** | Credit report date | [optional]
**creditScore** | **float** | Credit score | [optional]
**isHold** | **bool** | Hold for posting | [optional]
**isStop** | **bool** | Stop all documents | [optional]
**projectId** | **string** | Default project. | [optional]
**applyDomesticReverseCharge** | **bool** | When applicable for the specified Tax Authority, Domestic Reverse Charge will be applied to documents produced for the customer | [optional]
**costCentreId** | **string** | Default cost centre id or code | [optional]
**costCentreFixed** | **bool** | The default cost centre is fixed | [optional]
**departmentId** | **string** | Default department id or code | [optional]
**departmentFixed** | **bool** | The default department is fixed | [optional]
**warningMessage** | **string** |  | [optional]
**ext** | **array<string,mixed>** | Custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)