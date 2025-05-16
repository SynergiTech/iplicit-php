# SynergiTech\Iplicit\ContactGroupApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactGroup()**](ContactGroupApi.md#getContactGroup) | **GET** /api/ContactGroup/{contactGroupRef} | Get a contact group |


## `getContactGroup()`

```php
getContactGroup($contactGroupRef, $domain, $include): \SynergiTech\Iplicit\Model\ContactGroupRead
```

Get a contact group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactGroupRef = 'contactGroupRef_example'; // string | Id or code of the contact group
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$include = 'customer,supplier'; // string | Comma separated list of details to include: Permitted values are `customer`, `supplier` or `customer,supplier` (the default)

try {
    $result = $apiInstance->getContactGroup($contactGroupRef, $domain, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactGroupApi->getContactGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactGroupRef** | **string**| Id or code of the contact group | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **include** | **string**| Comma separated list of details to include: Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60; or &#x60;customer,supplier&#x60; (the default) | [optional] [default to &#39;customer,supplier&#39;] |

### Return type

[**\SynergiTech\Iplicit\Model\ContactGroupRead**](../Model/ContactGroupRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
