# # Project

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The project unique id | [optional]
**code** | **string** | The project code | [optional]
**intRef** | **string** | Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional]
**description** | **string** | The project description | [optional]
**dateFrom** | **\DateTime** | The project date from | [optional]
**dateTo** | **\DateTime** | The project date to | [optional]
**projectGroupId** | **string** | The project project group id | [optional]
**legalEntityId** | **string** | The project legal entity id | [optional]
**contactAccountId** | **string** | The project contact account id | [optional]
**responsibleResourceId** | **string** | The project responsible resource id | [optional]
**lastModified** | **\DateTime** |  | [optional]
**lastModifiedBy** | **string** | The user that last modified this item. See &#x60;UserAccount&#x60; catalog. | [optional]
**allowTimesheets** | **bool** | The project allow timesheets flag | [optional]
**allowTasks** | **bool** | The project allow tasks flag | [optional]
**isActive** | **bool** | Active or locked (soft delete) | [optional]
**isParent** | **bool** | The project is parent flag | [optional]
**ext** | **array<string,mixed>** | The project additional fields | [optional]
**address** | [**\SynergiTech\Iplicit\Model\ProjectAddress**](ProjectAddress.md) |  | [optional]
**milestones** | [**\SynergiTech\Iplicit\Model\ProjectMilestone[]**](ProjectMilestone.md) | The project milestones | [optional]
**subProjects** | [**\SynergiTech\Iplicit\Model\ProjectChild[]**](ProjectChild.md) | The project sub projects | [optional]
**availability** | [**\SynergiTech\Iplicit\Model\ProjectAvailability[]**](ProjectAvailability.md) | The project availabilities | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
