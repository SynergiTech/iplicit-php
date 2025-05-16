# # ProjectCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The project code | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**description** | **string** | The project description |
**dateFrom** | **\DateTime** | The project from date | [optional]
**dateTo** | **\DateTime** | The project to date | [optional]
**projectGroupId** | **string** | The project group id | [optional]
**legalEntityId** | **string** | The project legal entity id | [optional]
**contactAccountId** | **string** | The project contact account id | [optional]
**responsibleResourceId** | **string** | The project responsible resource id | [optional]
**parentProjectId** | **string** | The project parent project id | [optional]
**allowTimesheets** | **bool** | The project allow timesheets flag | [optional]
**allowTasks** | **bool** | The project allow tasks flag | [optional]
**isParent** | **bool** | The project is parent flag | [optional]
**hasAddress** | **bool** | The project has address flag | [optional]
**hasResources** | **bool** | The project has resources flag | [optional]
**hasMilestones** | **bool** | The project has milestones flag | [optional]
**address** | [**\SynergiTech\Iplicit\Model\ProjectAddressCreate**](ProjectAddressCreate.md) |  | [optional]
**availability** | [**\SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[]**](ProjectAvailabilityCreate.md) | The project resource availability | [optional]
**milestones** | [**\SynergiTech\Iplicit\Model\ProjectMilestoneCreate[]**](ProjectMilestoneCreate.md) | The project milestones | [optional]
**ext** | **array<string,mixed>** | The project custom fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
