# # CostCentreRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Id for the cost centre | [optional]
**code** | **string** | Unique code for the cost centre | [optional]
**description** | **string** | Description of the cost centre | [optional]
**parentCostCentreId** | **string** | The cost centre parent (where specified) can be useful for analytics | [optional]
**legalEntityId** | **string** | When supplied, the use of the cost centre can be restricted to the specified Legal Entity. | [optional]
**legacyRef** | **string** |  | [optional]
**lastModified** | **\DateTime** |  | [optional]
**lastModifiedBy** | **string** |  | [optional]
**isActive** | **bool** |  | [optional]
**resources** | [**\SynergiTech\Iplicit\Model\CostCentreResource[]**](CostCentreResource.md) | The cost centre resources | [optional]
**subCostCentres** | [**\SynergiTech\Iplicit\Model\CostCentreSummary[]**](CostCentreSummary.md) | The cost centre sub cost centres | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
