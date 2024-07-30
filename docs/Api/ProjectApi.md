# SynergiTech\Iplicit\ProjectApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProjectMilstones()**](ProjectApi.md#addProjectMilstones) | **PUT** /api/Project/{projectRef}/milestone | Add a project milestone |
| [**addProjectResourceAvailability()**](ProjectApi.md#addProjectResourceAvailability) | **POST** /api/Project/{projectRef}/availability | Add a project resource availability |
| [**createProject()**](ProjectApi.md#createProject) | **POST** /api/Project | Create a project |
| [**deleteProjectMilstones()**](ProjectApi.md#deleteProjectMilstones) | **DELETE** /api/Project/{projectRef}/milestone/{milestoneIdOrCode} | Delete a project milestone |
| [**deleteProjectResourceAvailability()**](ProjectApi.md#deleteProjectResourceAvailability) | **DELETE** /api/Project/{projectRef}/availability | Delete a project resource availability |
| [**getProject()**](ProjectApi.md#getProject) | **GET** /api/Project/{projectRef} | Get a project |
| [**getProjectResourceAvailability()**](ProjectApi.md#getProjectResourceAvailability) | **GET** /api/Project/{projectRef}/availability | Get a project resource availability |
| [**getProjects()**](ProjectApi.md#getProjects) | **GET** /api/Project | Get a list of projects with a search filter |
| [**lockProject()**](ProjectApi.md#lockProject) | **POST** /api/Project/{projectRef}/lock | Lock a project |
| [**projectMilstones()**](ProjectApi.md#projectMilstones) | **GET** /api/Project/{projectRef}/milestone | Get a project milestones |
| [**replaceProjectMilstones()**](ProjectApi.md#replaceProjectMilstones) | **POST** /api/Project/{projectRef}/milestone | Replace all project milestones |
| [**replaceProjectResourceAvailability()**](ProjectApi.md#replaceProjectResourceAvailability) | **PUT** /api/Project/{projectRef}/availability | Replace a project resource availability |
| [**unlockProject()**](ProjectApi.md#unlockProject) | **POST** /api/Project/{projectRef}/unlock | Unlock a project |
| [**updateProject()**](ProjectApi.md#updateProject) | **PATCH** /api/Project/{projectRef} | Update a project |


## `addProjectMilstones()`

```php
addProjectMilstones($projectRef, $projectMilestoneCreate)
```

Add a project milestone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$projectMilestoneCreate = new \SynergiTech\Iplicit\Model\ProjectMilestoneCreate(); // \SynergiTech\Iplicit\Model\ProjectMilestoneCreate

try {
    $apiInstance->addProjectMilstones($projectRef, $projectMilestoneCreate);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addProjectMilstones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **projectMilestoneCreate** | [**\SynergiTech\Iplicit\Model\ProjectMilestoneCreate**](../Model/ProjectMilestoneCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addProjectResourceAvailability()`

```php
addProjectResourceAvailability($projectRef, $projectAvailabilityCreate)
```

Add a project resource availability

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$projectAvailabilityCreate = array(new \SynergiTech\Iplicit\Model\ProjectAvailabilityCreate()); // \SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[] |

try {
    $apiInstance->addProjectResourceAvailability($projectRef, $projectAvailabilityCreate);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addProjectResourceAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **projectAvailabilityCreate** | [**\SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[]**](../Model/ProjectAvailabilityCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProject()`

```php
createProject($projectCreate): string
```

Create a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectCreate = new \SynergiTech\Iplicit\Model\ProjectCreate(); // \SynergiTech\Iplicit\Model\ProjectCreate

try {
    $result = $apiInstance->createProject($projectCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectCreate** | [**\SynergiTech\Iplicit\Model\ProjectCreate**](../Model/ProjectCreate.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectMilstones()`

```php
deleteProjectMilstones($projectRef, $milestoneIdOrCode)
```

Delete a project milestone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$milestoneIdOrCode = 'milestoneIdOrCode_example'; // string

try {
    $apiInstance->deleteProjectMilstones($projectRef, $milestoneIdOrCode);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProjectMilstones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **milestoneIdOrCode** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectResourceAvailability()`

```php
deleteProjectResourceAvailability($projectRef, $projectAvailabilityCreate)
```

Delete a project resource availability

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$projectAvailabilityCreate = array(new \SynergiTech\Iplicit\Model\ProjectAvailabilityCreate()); // \SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[] |

try {
    $apiInstance->deleteProjectResourceAvailability($projectRef, $projectAvailabilityCreate);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProjectResourceAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **projectAvailabilityCreate** | [**\SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[]**](../Model/ProjectAvailabilityCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($projectRef, $include): \SynergiTech\Iplicit\Model\Project
```

Get a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$include = 'include_example'; // string | Comma separated list of details to include: `address`, `ext`, `availability`, `milestones`, `subProjects`.

try {
    $result = $apiInstance->getProject($projectRef, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **include** | **string**| Comma separated list of details to include: &#x60;address&#x60;, &#x60;ext&#x60;, &#x60;availability&#x60;, &#x60;milestones&#x60;, &#x60;subProjects&#x60;. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectResourceAvailability()`

```php
getProjectResourceAvailability($projectRef): \SynergiTech\Iplicit\Model\ProjectAvailability[]
```

Get a project resource availability

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project

try {
    $result = $apiInstance->getProjectResourceAvailability($projectRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectResourceAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |

### Return type

[**\SynergiTech\Iplicit\Model\ProjectAvailability[]**](../Model/ProjectAvailability.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjects()`

```php
getProjects($projectGroupCode, $projectGroupId, $parentProjectCode, $parentProjectId, $legalEntityCode, $legalEntityId, $contactAccountCode, $contactAccountId, $lastModifiedFrom, $lastModifiedTo, $includeClosed, $isActive, $include, $take, $skip): \SynergiTech\Iplicit\Model\Project[]
```

Get a list of projects with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectGroupCode = 'projectGroupCode_example'; // string
$projectGroupId = 'projectGroupId_example'; // string
$parentProjectCode = 'parentProjectCode_example'; // string
$parentProjectId = 'parentProjectId_example'; // string
$legalEntityCode = 'legalEntityCode_example'; // string
$legalEntityId = 'legalEntityId_example'; // string
$contactAccountCode = 'contactAccountCode_example'; // string
$contactAccountId = 'contactAccountId_example'; // string
$lastModifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$lastModifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$includeClosed = True; // bool | By default, only active projects will be returned. Set this to true to include closed projects.
$isActive = True; // bool | Search by active status. True=only active projects, False= only closed projects
$include = 'include_example'; // string | Comma separated list of details to include: `address`, `ext`, `availability`, `milestones`, `subProjects`.
$take = 100; // int | Number of records to select. Default = 100. Max 500.
$skip = 0; // int | Number of records to skip. Used for pagination.

try {
    $result = $apiInstance->getProjects($projectGroupCode, $projectGroupId, $parentProjectCode, $parentProjectId, $legalEntityCode, $legalEntityId, $contactAccountCode, $contactAccountId, $lastModifiedFrom, $lastModifiedTo, $includeClosed, $isActive, $include, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectGroupCode** | **string**|  | [optional] |
| **projectGroupId** | **string**|  | [optional] |
| **parentProjectCode** | **string**|  | [optional] |
| **parentProjectId** | **string**|  | [optional] |
| **legalEntityCode** | **string**|  | [optional] |
| **legalEntityId** | **string**|  | [optional] |
| **contactAccountCode** | **string**|  | [optional] |
| **contactAccountId** | **string**|  | [optional] |
| **lastModifiedFrom** | **\DateTime**|  | [optional] |
| **lastModifiedTo** | **\DateTime**|  | [optional] |
| **includeClosed** | **bool**| By default, only active projects will be returned. Set this to true to include closed projects. | [optional] |
| **isActive** | **bool**| Search by active status. True&#x3D;only active projects, False&#x3D; only closed projects | [optional] |
| **include** | **string**| Comma separated list of details to include: &#x60;address&#x60;, &#x60;ext&#x60;, &#x60;availability&#x60;, &#x60;milestones&#x60;, &#x60;subProjects&#x60;. | [optional] |
| **take** | **int**| Number of records to select. Default &#x3D; 100. Max 500. | [optional] [default to 100] |
| **skip** | **int**| Number of records to skip. Used for pagination. | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockProject()`

```php
lockProject($projectRef)
```

Lock a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project

try {
    $apiInstance->lockProject($projectRef);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->lockProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectMilstones()`

```php
projectMilstones($projectRef): \SynergiTech\Iplicit\Model\ProjectMilestone[]
```

Get a project milestones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project

try {
    $result = $apiInstance->projectMilstones($projectRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectMilstones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |

### Return type

[**\SynergiTech\Iplicit\Model\ProjectMilestone[]**](../Model/ProjectMilestone.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceProjectMilstones()`

```php
replaceProjectMilstones($projectRef, $projectMilestoneCreate)
```

Replace all project milestones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$projectMilestoneCreate = array(new \SynergiTech\Iplicit\Model\ProjectMilestoneCreate()); // \SynergiTech\Iplicit\Model\ProjectMilestoneCreate[]

try {
    $apiInstance->replaceProjectMilstones($projectRef, $projectMilestoneCreate);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->replaceProjectMilstones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **projectMilestoneCreate** | [**\SynergiTech\Iplicit\Model\ProjectMilestoneCreate[]**](../Model/ProjectMilestoneCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceProjectResourceAvailability()`

```php
replaceProjectResourceAvailability($projectRef, $projectAvailabilityCreate)
```

Replace a project resource availability

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$projectAvailabilityCreate = array(new \SynergiTech\Iplicit\Model\ProjectAvailabilityCreate()); // \SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[] |

try {
    $apiInstance->replaceProjectResourceAvailability($projectRef, $projectAvailabilityCreate);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->replaceProjectResourceAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **projectAvailabilityCreate** | [**\SynergiTech\Iplicit\Model\ProjectAvailabilityCreate[]**](../Model/ProjectAvailabilityCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockProject()`

```php
unlockProject($projectRef)
```

Unlock a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project

try {
    $apiInstance->unlockProject($projectRef);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->unlockProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($projectRef, $projectUpdate): string
```

Update a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$projectRef = 'projectRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the project
$projectUpdate = new \SynergiTech\Iplicit\Model\ProjectUpdate(); // \SynergiTech\Iplicit\Model\ProjectUpdate |

try {
    $result = $apiInstance->updateProject($projectRef, $projectUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the project | |
| **projectUpdate** | [**\SynergiTech\Iplicit\Model\ProjectUpdate**](../Model/ProjectUpdate.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
