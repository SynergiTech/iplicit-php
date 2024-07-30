# # DepartmentRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for the department | [optional]
**code** | **string** | Unique code for the department | [optional]
**description** | **string** | Description of the department | [optional]
**legacyRef** | **string** |  | [optional]
**legalEntityId** | **string** | When specified, the use of the department is restricted to the specified Legal Entity. | [optional]
**managerResourceId** | **string** | The resource who is identified as the department manager. | [optional]
**parentDepartmentId** | **string** | The Department parent (where specified) can be useful for analytics. | [optional]
**lastModified** | **\DateTime** |  | [optional]
**lastModifiedBy** | **string** |  | [optional]
**isActive** | **bool** |  | [optional]
**resources** | [**\SynergiTech\Iplicit\Model\ResourceSummary[]**](ResourceSummary.md) | Department resources | [optional]
**subDepartments** | [**\SynergiTech\Iplicit\Model\DepartmentSummary[]**](DepartmentSummary.md) | Department sub departments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
