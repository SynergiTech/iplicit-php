# # BatchPaymentCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batchPaymentTypeId** | **string** | If not specified, the default batch payment type will be used. | [optional]
**legalEntityId** | **string** | If not specified, the default legal entity will be used. When the bank account is specified, the legal entity can be omitted. | [optional]
**bankAccountId** | **string** | If not specified, the default batch payment bank account of the legal entity will be used. | [optional]
**paymentDate** | **\DateTime** | If not specified, it defaults to today. | [optional]
**description** | **string** | If not specified, it defaults to the batch payment number. | [optional]
**bankRef** | **string** | If not specified, it defaults to the batch payment number. | [optional]
**paymentMethodId** | **string** | If not specified, it defaults to the default batch payment method of the bank account. | [optional]
**periodId** | **string** | If not specified, it is evaluated based on the payment date. | [optional]
**allocations** | [**\SynergiTech\Iplicit\Model\DocAllocationCreate[]**](DocAllocationCreate.md) | Payment allocations. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
