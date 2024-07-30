# SynergiTech\Iplicit\ContactAccountApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addContactAccountContact()**](ContactAccountApi.md#addContactAccountContact) | **POST** /api/ContactAccount/{contactAccountRef}/contacts | Add related contacts |
| [**addContactToContactAccount()**](ContactAccountApi.md#addContactToContactAccount) | **POST** /api/ContactAccount/{ca}/contactLinks/{cb} | Add an existing contact to a contact account. |
| [**createContactAccount()**](ContactAccountApi.md#createContactAccount) | **POST** /api/ContactAccount | Create a contact account |
| [**deleteContactAccount()**](ContactAccountApi.md#deleteContactAccount) | **DELETE** /api/ContactAccount/{contactAccountRef}/contacts/{contactRef} | Delete a related contact |
| [**deleteContactFromContactAccount()**](ContactAccountApi.md#deleteContactFromContactAccount) | **DELETE** /api/ContactAccount/{ca}/contactLinks/{cb} | Remove an existing contact from a contact account. |
| [**getContactAccount()**](ContactAccountApi.md#getContactAccount) | **GET** /api/ContactAccount/{contactAccountRef} | Get a contact account |
| [**getContactAccountBankAccounts()**](ContactAccountApi.md#getContactAccountBankAccounts) | **GET** /api/ContactAccount/{contactAccountRef}/bankDetails | Get all the bank details |
| [**getContactAccountCustomerDetails()**](ContactAccountApi.md#getContactAccountCustomerDetails) | **GET** /api/ContactAccount/{contactAccountRef}/customer | Get the customer details of the contact account |
| [**getContactAccountDefaultBankAccount()**](ContactAccountApi.md#getContactAccountDefaultBankAccount) | **GET** /api/ContactAccount/{contactAccountRef}/defaultBankDetails | Get the default bank details |
| [**getContactAccountMainContact()**](ContactAccountApi.md#getContactAccountMainContact) | **GET** /api/ContactAccount/{contactAccountRef}/contact | Get the main contact details of the contact account |
| [**getContactAccountRelatedContact()**](ContactAccountApi.md#getContactAccountRelatedContact) | **GET** /api/ContactAccount/{contactAccountRef}/contacts/{contactRef} | Get an existing related contact |
| [**getContactAccountRelatedContacts()**](ContactAccountApi.md#getContactAccountRelatedContacts) | **GET** /api/ContactAccount/{contactAccountRef}/contacts | Get the related contacts |
| [**getContactAccountResource()**](ContactAccountApi.md#getContactAccountResource) | **GET** /api/ContactAccount/{contactAccountRef}/resource | Get the resource details of the contact account |
| [**getContactAccountSupplierDefaults()**](ContactAccountApi.md#getContactAccountSupplierDefaults) | **GET** /api/ContactAccount/{contactAccountRef}/supplier | Get the supplier details of the contact account |
| [**getContactAccounts()**](ContactAccountApi.md#getContactAccounts) | **GET** /api/ContactAccount | Gets a list of contact accounts with a search filter |
| [**lockContactAccount()**](ContactAccountApi.md#lockContactAccount) | **POST** /api/ContactAccount/{contactAccountRef}/lock |  |
| [**lockContactAccountResource()**](ContactAccountApi.md#lockContactAccountResource) | **POST** /api/ContactAccount/{contactAccountRef}/resource/lock | Lock the contact account resource |
| [**lockCustomer()**](ContactAccountApi.md#lockCustomer) | **POST** /api/ContactAccount/{contactAccountRef}/customer/lock | Lock the customer |
| [**lockSupplier()**](ContactAccountApi.md#lockSupplier) | **POST** /api/ContactAccount/{contactAccountRef}/supplier/lock | Lock the supplier |
| [**unlockContactAccount()**](ContactAccountApi.md#unlockContactAccount) | **POST** /api/ContactAccount/{contactAccountRef}/unlock | Unlock the contact account |
| [**unlockContactAccountResource()**](ContactAccountApi.md#unlockContactAccountResource) | **POST** /api/ContactAccount/{contactAccountRef}/resource/unlock | Unlock the contact account resource |
| [**unlockCustomer()**](ContactAccountApi.md#unlockCustomer) | **POST** /api/ContactAccount/{contactAccountRef}/customer/unlock | Unlock the customer |
| [**unlockSupplier()**](ContactAccountApi.md#unlockSupplier) | **POST** /api/ContactAccount/{contactAccountRef}/supplier/unlock | Unlock the supplier |
| [**updateContactAccount()**](ContactAccountApi.md#updateContactAccount) | **PATCH** /api/ContactAccount/{contactAccountRef} | Update a contact account |
| [**updateContactAccountBankDetails()**](ContactAccountApi.md#updateContactAccountBankDetails) | **PATCH** /api/ContactAccount/{contactAccountRef}/bankDetails/default | Replace bank details |
| [**updateContactAccountContact()**](ContactAccountApi.md#updateContactAccountContact) | **PATCH** /api/ContactAccount/{contactAccountRef}/contacts/{contactRef} | Update an existing related contact |
| [**updateContactAccountMainContact()**](ContactAccountApi.md#updateContactAccountMainContact) | **PATCH** /api/ContactAccount/{contactAccountRef}/contact | Update the main contact details |
| [**updateContactAccountRelatedContacts()**](ContactAccountApi.md#updateContactAccountRelatedContacts) | **PATCH** /api/ContactAccount/{contactAccountRef}/contacts | Update existing contacts.                Existing contacts are matched to request contacts by ID, IntRef or Description and updated.              Existing contacts that do not match any request contact are left unchanged.              Request contacts that do not match any existing contact are added. |


## `addContactAccountContact()`

```php
addContactAccountContact($contactAccountRef, $contactUpdate): string
```

Add related contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactUpdate = new \SynergiTech\Iplicit\Model\ContactUpdate(); // \SynergiTech\Iplicit\Model\ContactUpdate |

try {
    $result = $apiInstance->addContactAccountContact($contactAccountRef, $contactUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->addContactAccountContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactUpdate** | [**\SynergiTech\Iplicit\Model\ContactUpdate**](../Model/ContactUpdate.md)|  | [optional] |

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

## `addContactToContactAccount()`

```php
addContactToContactAccount($ca, $cb)
```

Add an existing contact to a contact account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$ca = 'ca_example'; // string | contact account id or code
$cb = 'cb_example'; // string | contact id or intRef

try {
    $apiInstance->addContactToContactAccount($ca, $cb);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->addContactToContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ca** | **string**| contact account id or code | |
| **cb** | **string**| contact id or intRef | |

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

## `createContactAccount()`

```php
createContactAccount($contactAccountCreate): string
```

Create a contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountCreate = new \SynergiTech\Iplicit\Model\ContactAccountCreate(); // \SynergiTech\Iplicit\Model\ContactAccountCreate |

try {
    $result = $apiInstance->createContactAccount($contactAccountCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->createContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountCreate** | [**\SynergiTech\Iplicit\Model\ContactAccountCreate**](../Model/ContactAccountCreate.md)|  | [optional] |

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

## `deleteContactAccount()`

```php
deleteContactAccount($contactAccountRef, $contactRef)
```

Delete a related contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactRef = 'contactRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $apiInstance->deleteContactAccount($contactAccountRef, $contactRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->deleteContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

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

## `deleteContactFromContactAccount()`

```php
deleteContactFromContactAccount($ca, $cb)
```

Remove an existing contact from a contact account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$ca = 'ca_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$cb = 'cb_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $apiInstance->deleteContactFromContactAccount($ca, $cb);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->deleteContactFromContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ca** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **cb** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

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

## `getContactAccount()`

```php
getContactAccount($contactAccountRef, $include): \SynergiTech\Iplicit\Model\ContactAccountRead
```

Get a contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$include = 'customer,supplier'; // string | Comma separated list of detail notes to include. Permitted values are `customer`, `supplier`, `resource`, `contact`, `contacts`, `defaultBankDetails`, `allBankDetails`. Default is `customer,supplier`.

try {
    $result = $apiInstance->getContactAccount($contactAccountRef, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **include** | **string**| Comma separated list of detail notes to include. Permitted values are &#x60;customer&#x60;, &#x60;supplier&#x60;, &#x60;resource&#x60;, &#x60;contact&#x60;, &#x60;contacts&#x60;, &#x60;defaultBankDetails&#x60;, &#x60;allBankDetails&#x60;. Default is &#x60;customer,supplier&#x60;. | [optional] [default to &#39;customer,supplier&#39;] |

### Return type

[**\SynergiTech\Iplicit\Model\ContactAccountRead**](../Model/ContactAccountRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountBankAccounts()`

```php
getContactAccountBankAccounts($contactAccountRef): \SynergiTech\Iplicit\Model\ContactBankDetailsRead[]
```

Get all the bank details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountBankAccounts($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactBankDetailsRead[]**](../Model/ContactBankDetailsRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountCustomerDetails()`

```php
getContactAccountCustomerDetails($contactAccountRef): \SynergiTech\Iplicit\Model\ContactCustomerRead
```

Get the customer details of the contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountCustomerDetails($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountCustomerDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactCustomerRead**](../Model/ContactCustomerRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountDefaultBankAccount()`

```php
getContactAccountDefaultBankAccount($contactAccountRef): \SynergiTech\Iplicit\Model\ContactBankDetailsRead
```

Get the default bank details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountDefaultBankAccount($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountDefaultBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactBankDetailsRead**](../Model/ContactBankDetailsRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountMainContact()`

```php
getContactAccountMainContact($contactAccountRef): \SynergiTech\Iplicit\Model\ContactRead
```

Get the main contact details of the contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountMainContact($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountMainContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactRead**](../Model/ContactRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountRelatedContact()`

```php
getContactAccountRelatedContact($contactAccountRef, $contactRef): \SynergiTech\Iplicit\Model\ContactRead
```

Get an existing related contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactRef = 'contactRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $result = $apiInstance->getContactAccountRelatedContact($contactAccountRef, $contactRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountRelatedContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactRead**](../Model/ContactRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountRelatedContacts()`

```php
getContactAccountRelatedContacts($contactAccountRef): \SynergiTech\Iplicit\Model\ContactRead[]
```

Get the related contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountRelatedContacts($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountRelatedContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactRead[]**](../Model/ContactRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountResource()`

```php
getContactAccountResource($contactAccountRef): \SynergiTech\Iplicit\Model\ContactResourceRead
```

Get the resource details of the contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountResource($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactResourceRead**](../Model/ContactResourceRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccountSupplierDefaults()`

```php
getContactAccountSupplierDefaults($contactAccountRef): \SynergiTech\Iplicit\Model\ContactSupplierRead
```

Get the supplier details of the contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $result = $apiInstance->getContactAccountSupplierDefaults($contactAccountRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccountSupplierDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactSupplierRead**](../Model/ContactSupplierRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAccounts()`

```php
getContactAccounts($code, $intRef, $descriptionContains, $lastModifiedFrom, $lastModifiedTo, $isCustomer, $isSupplier, $isResource, $include, $take, $skip): \SynergiTech\Iplicit\Model\ContactAccountRead[]
```

Gets a list of contact accounts with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$code = 'code_example'; // string | Code. <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">Learn more</a>
$intRef = 'intRef_example'; // string | Optional interface reference. If provided, it must be unique. <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">Learn more</a>
$descriptionContains = 'descriptionContains_example'; // string | Description contains
$lastModifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last modified from (UTC)
$lastModifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last modified until (UTC)
$isCustomer = True; // bool | Include/exclude customers
$isSupplier = True; // bool | Include/exclude suppliers
$isResource = True; // bool | Include/exclude resources
$include = 'customer,supplier'; // string | Comma separated list of detail notes to include: `customer`, `supplier`, `resource`, `contact`, `contacts`, `defaultBankDetails`, `allBankDetails`. If omitted, will default to `customer,supplier`.
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getContactAccounts($code, $intRef, $descriptionContains, $lastModifiedFrom, $lastModifiedTo, $isCustomer, $isSupplier, $isResource, $include, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->getContactAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional] |
| **intRef** | **string**| Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional] |
| **descriptionContains** | **string**| Description contains | [optional] |
| **lastModifiedFrom** | **\DateTime**| Last modified from (UTC) | [optional] |
| **lastModifiedTo** | **\DateTime**| Last modified until (UTC) | [optional] |
| **isCustomer** | **bool**| Include/exclude customers | [optional] |
| **isSupplier** | **bool**| Include/exclude suppliers | [optional] |
| **isResource** | **bool**| Include/exclude resources | [optional] |
| **include** | **string**| Comma separated list of detail notes to include: &#x60;customer&#x60;, &#x60;supplier&#x60;, &#x60;resource&#x60;, &#x60;contact&#x60;, &#x60;contacts&#x60;, &#x60;defaultBankDetails&#x60;, &#x60;allBankDetails&#x60;. If omitted, will default to &#x60;customer,supplier&#x60;. | [optional] [default to &#39;customer,supplier&#39;] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\ContactAccountRead[]**](../Model/ContactAccountRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockContactAccount()`

```php
lockContactAccount($contactAccountRef)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string

try {
    $apiInstance->lockContactAccount($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->lockContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**|  | |

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

## `lockContactAccountResource()`

```php
lockContactAccountResource($contactAccountRef)
```

Lock the contact account resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->lockContactAccountResource($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->lockContactAccountResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `lockCustomer()`

```php
lockCustomer($contactAccountRef)
```

Lock the customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->lockCustomer($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->lockCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `lockSupplier()`

```php
lockSupplier($contactAccountRef)
```

Lock the supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->lockSupplier($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->lockSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `unlockContactAccount()`

```php
unlockContactAccount($contactAccountRef)
```

Unlock the contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->unlockContactAccount($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->unlockContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `unlockContactAccountResource()`

```php
unlockContactAccountResource($contactAccountRef)
```

Unlock the contact account resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->unlockContactAccountResource($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->unlockContactAccountResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `unlockCustomer()`

```php
unlockCustomer($contactAccountRef)
```

Unlock the customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->unlockCustomer($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->unlockCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `unlockSupplier()`

```php
unlockSupplier($contactAccountRef)
```

Unlock the supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account

try {
    $apiInstance->unlockSupplier($contactAccountRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->unlockSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |

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

## `updateContactAccount()`

```php
updateContactAccount($contactAccountRef, $contactAccountUpdate): string
```

Update a contact account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactAccountUpdate = new \SynergiTech\Iplicit\Model\ContactAccountUpdate(); // \SynergiTech\Iplicit\Model\ContactAccountUpdate |

try {
    $result = $apiInstance->updateContactAccount($contactAccountRef, $contactAccountUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->updateContactAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactAccountUpdate** | [**\SynergiTech\Iplicit\Model\ContactAccountUpdate**](../Model/ContactAccountUpdate.md)|  | [optional] |

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

## `updateContactAccountBankDetails()`

```php
updateContactAccountBankDetails($contactAccountRef, $contactBankDetailsUpdateable)
```

Replace bank details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactBankDetailsUpdateable = new \SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable(); // \SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable |

try {
    $apiInstance->updateContactAccountBankDetails($contactAccountRef, $contactBankDetailsUpdateable);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->updateContactAccountBankDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactBankDetailsUpdateable** | [**\SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable**](../Model/ContactBankDetailsUpdateable.md)|  | [optional] |

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

## `updateContactAccountContact()`

```php
updateContactAccountContact($contactAccountRef, $contactRef, $contactUpdate)
```

Update an existing related contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactRef = 'contactRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$contactUpdate = new \SynergiTech\Iplicit\Model\ContactUpdate(); // \SynergiTech\Iplicit\Model\ContactUpdate |

try {
    $apiInstance->updateContactAccountContact($contactAccountRef, $contactRef, $contactUpdate);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->updateContactAccountContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **contactUpdate** | [**\SynergiTech\Iplicit\Model\ContactUpdate**](../Model/ContactUpdate.md)|  | [optional] |

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

## `updateContactAccountMainContact()`

```php
updateContactAccountMainContact($contactAccountRef, $contactUpdate)
```

Update the main contact details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactUpdate = new \SynergiTech\Iplicit\Model\ContactUpdate(); // \SynergiTech\Iplicit\Model\ContactUpdate |

try {
    $apiInstance->updateContactAccountMainContact($contactAccountRef, $contactUpdate);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->updateContactAccountMainContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactUpdate** | [**\SynergiTech\Iplicit\Model\ContactUpdate**](../Model/ContactUpdate.md)|  | [optional] |

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

## `updateContactAccountRelatedContacts()`

```php
updateContactAccountRelatedContacts($contactAccountRef, $contactUpdate)
```

Update existing contacts.                Existing contacts are matched to request contacts by ID, IntRef or Description and updated.              Existing contacts that do not match any request contact are left unchanged.              Request contacts that do not match any existing contact are added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactAccountRef = 'contactAccountRef_example'; // string | Id, code or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact account
$contactUpdate = array(new \SynergiTech\Iplicit\Model\ContactUpdate()); // \SynergiTech\Iplicit\Model\ContactUpdate[] |

try {
    $apiInstance->updateContactAccountRelatedContacts($contactAccountRef, $contactUpdate);
} catch (Exception $e) {
    echo 'Exception when calling ContactAccountApi->updateContactAccountRelatedContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAccountRef** | **string**| Id, code or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact account | |
| **contactUpdate** | [**\SynergiTech\Iplicit\Model\ContactUpdate[]**](../Model/ContactUpdate.md)|  | [optional] |

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
