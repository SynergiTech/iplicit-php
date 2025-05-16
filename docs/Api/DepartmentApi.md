# SynergiTech\Iplicit\DepartmentApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDepartment()**](DepartmentApi.md#createDepartment) | **POST** /api/Department | Create a department |
| [**getDepartment()**](DepartmentApi.md#getDepartment) | **GET** /api/Department/{departmentRef} | Get a department |
| [**getDepartments()**](DepartmentApi.md#getDepartments) | **GET** /api/Department | Get a list of departments with a search filter |
| [**lockDepartment()**](DepartmentApi.md#lockDepartment) | **POST** /api/Department/{departmentRef}/lock | Lock a department |
| [**unlockDepartment()**](DepartmentApi.md#unlockDepartment) | **POST** /api/Department/{departmentRef}/unlock | Unlock a department |
| [**upateDepartment()**](DepartmentApi.md#upateDepartment) | **PATCH** /api/Department/{departmentRef} | Update a department |


## `createDepartment()`

```php
createDepartment($domain, $departmentCreate): string
```

Create a department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$departmentCreate = new \SynergiTech\Iplicit\Model\DepartmentCreate(); // \SynergiTech\Iplicit\Model\DepartmentCreate |

try {
    $result = $apiInstance->createDepartment($domain, $departmentCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->createDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **departmentCreate** | [**\SynergiTech\Iplicit\Model\DepartmentCreate**](../Model/DepartmentCreate.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartment()`

```php
getDepartment($departmentRef, $domain, $include): \SynergiTech\Iplicit\Model\DepartmentRead
```

Get a department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$departmentRef = 'departmentRef_example'; // string | `Id` or `Code` of the department
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$include = 'include_example'; // string | Comma separated list of detail to include: `resources`, `subDepartments`. If omitted, no additional detail will be included.

try {
    $result = $apiInstance->getDepartment($departmentRef, $domain, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->getDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **departmentRef** | **string**| &#x60;Id&#x60; or &#x60;Code&#x60; of the department | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **include** | **string**| Comma separated list of detail to include: &#x60;resources&#x60;, &#x60;subDepartments&#x60;. If omitted, no additional detail will be included. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\DepartmentRead**](../Model/DepartmentRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartments()`

```php
getDepartments($domain, $descriptionContains, $codeContains, $parentDepartment, $legalEntity, $managerResource, $isActive, $includeClosed, $take, $skip): \SynergiTech\Iplicit\Model\DepartmentSearch[]
```

Get a list of departments with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$descriptionContains = 'descriptionContains_example'; // string | Use to only search department where the description contains the text
$codeContains = 'codeContains_example'; // string | Use to only search department where the code contains the text
$parentDepartment = 'parentDepartment_example'; // string | Use to only search department with the parent department. Accepts id or code.
$legalEntity = 'legalEntity_example'; // string | Use to only search department with the legal entity. Accepts id or code.
$managerResource = 'managerResource_example'; // string | Use to only search department with the manager resource.  Accepts id or code.
$isActive = True; // bool | Use to only search department with the active state
$includeClosed = True; // bool | Use to only search department with the open state
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getDepartments($domain, $descriptionContains, $codeContains, $parentDepartment, $legalEntity, $managerResource, $isActive, $includeClosed, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->getDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **descriptionContains** | **string**| Use to only search department where the description contains the text | [optional] |
| **codeContains** | **string**| Use to only search department where the code contains the text | [optional] |
| **parentDepartment** | **string**| Use to only search department with the parent department. Accepts id or code. | [optional] |
| **legalEntity** | **string**| Use to only search department with the legal entity. Accepts id or code. | [optional] |
| **managerResource** | **string**| Use to only search department with the manager resource.  Accepts id or code. | [optional] |
| **isActive** | **bool**| Use to only search department with the active state | [optional] |
| **includeClosed** | **bool**| Use to only search department with the open state | [optional] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\DepartmentSearch[]**](../Model/DepartmentSearch.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockDepartment()`

```php
lockDepartment($departmentRef, $domain): string
```

Lock a department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$departmentRef = 'departmentRef_example'; // string | Id or code of the department
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->lockDepartment($departmentRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->lockDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **departmentRef** | **string**| Id or code of the department | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockDepartment()`

```php
unlockDepartment($departmentRef, $domain): string
```

Unlock a department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$departmentRef = 'departmentRef_example'; // string | Id or code of the department
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->unlockDepartment($departmentRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->unlockDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **departmentRef** | **string**| Id or code of the department | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upateDepartment()`

```php
upateDepartment($departmentRef, $domain, $departmentUpdate): string
```

Update a department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$departmentRef = 'departmentRef_example'; // string | Id or code of the department
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$departmentUpdate = new \SynergiTech\Iplicit\Model\DepartmentUpdate(); // \SynergiTech\Iplicit\Model\DepartmentUpdate |

try {
    $result = $apiInstance->upateDepartment($departmentRef, $domain, $departmentUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->upateDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **departmentRef** | **string**| Id or code of the department | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **departmentUpdate** | [**\SynergiTech\Iplicit\Model\DepartmentUpdate**](../Model/DepartmentUpdate.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
