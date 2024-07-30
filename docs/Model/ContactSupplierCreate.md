# # ContactSupplierCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactGroupSupplierId** | **string** | Required, the *Supplier group* will determine defaults for all the other unspecified supplier fields. See &#x60;ContactGroupSupplier&#x60; catalog. |
**currency** | **string** |  | [optional]
**creditLimit** | **float** | Agreed credit limit | [optional]
**paymentMethodId** | **string** | Default payment method. See &#x60;PaymentMethod&#x60; catalog. | [optional]
**payTermId** | **string** | Default payment terms. See &#x60;PayTerm&#x60; catalog. | [optional]
**taxBandId** | **string** | Default tax band | [optional]
**taxBandFixed** | **bool** | The default tax band is fixed | [optional]
**taxAuthorityId** | **string** | Tax authority that the supplier belongs to. See &#x60;TaxAuthority&#x60; catalog. | [optional]
**allowInvoiceDuplication** | **bool** | Allow repeated invoice numbers for the same supplier | [optional]
**sendRemittance** | **bool** | Include in payment remittance distribution | [optional]
**isActive** | **bool** | Active or locked | [optional]
**projectId** | **string** | Default project. | [optional]
**applyDomesticReverseCharge** | **bool** | When applicable for the specified Tax Authority, Domestic Reverse Charge will be applied to documents produced for the supplier | [optional]
**costCentreId** | **string** | Default cost centre id or code | [optional]
**costCentreFixed** | **bool** | The default cost centre is fixed | [optional]
**departmentId** | **string** | Default department id or code | [optional]
**departmentFixed** | **bool** | The default department is fixed | [optional]
**productId** | **string** | Default product id or code | [optional]
**accountId** | **string** | Default account id or code | [optional]
**warningMessage** | **string** | Default warning message | [optional]
**ext** | **array<string,mixed>** | Custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
