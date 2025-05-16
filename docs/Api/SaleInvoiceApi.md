# SynergiTech\Iplicit\SaleInvoiceApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSaleInvoice()**](SaleInvoiceApi.md#createSaleInvoice) | **POST** /api/SaleInvoice | Create a sale invoice. |
| [**getSaleInvoice()**](SaleInvoiceApi.md#getSaleInvoice) | **GET** /api/SaleInvoice/{id} | Get a sale invoice |
| [**getSaleInvoices()**](SaleInvoiceApi.md#getSaleInvoices) | **GET** /api/SaleInvoice | Get a list of sale invoices with a search filter |
| [**submitSaleInvoice()**](SaleInvoiceApi.md#submitSaleInvoice) | **POST** /api/SaleInvoice/{id}/submit | Submit a sale invoice for authorisation and posting. |
| [**updateSaleInvoice()**](SaleInvoiceApi.md#updateSaleInvoice) | **PATCH** /api/SaleInvoice/{idOrDocNo} | Update a sale invoice |


## `createSaleInvoice()`

```php
createSaleInvoice($domain, $docCreate): string
```

Create a sale invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\SaleInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$docCreate = new \SynergiTech\Iplicit\Model\DocCreate(); // \SynergiTech\Iplicit\Model\DocCreate

try {
    $result = $apiInstance->createSaleInvoice($domain, $docCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleInvoiceApi->createSaleInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **docCreate** | [**\SynergiTech\Iplicit\Model\DocCreate**](../Model/DocCreate.md)|  | [optional] |

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

## `getSaleInvoice()`

```php
getSaleInvoice($id, $domain, $include): \SynergiTech\Iplicit\Model\Doc
```

Get a sale invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\SaleInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id or documnt number of the sale invoice
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$include = 'include_example'; // string

try {
    $result = $apiInstance->getSaleInvoice($id, $domain, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleInvoiceApi->getSaleInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id or documnt number of the sale invoice | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **include** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\Doc**](../Model/Doc.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSaleInvoices()`

```php
getSaleInvoices($domain, $docNo, $docType, $docTypeId, $contactAccount, $contactAccountId, $legalEntity, $legalEntityId, $currency, $project, $projectId, $description, $descriptionContains, $theirRef, $intRef, $legacyRef, $theirDocNo, $docClass, $docDateFrom, $docDateTo, $dueDateFrom, $dueDateTo, $lastModifiedFrom, $lastModifiedTo, $outstanding, $unmatched, $draft, $abandoned, $posted, $approved, $reversed, $take, $skip): \SynergiTech\Iplicit\Model\DocSummary[]
```

Get a list of sale invoices with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\SaleInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$docNo = 'docNo_example'; // string | The document number
$docType = 'docType_example'; // string | The document type code
$docTypeId = 'docTypeId_example'; // string | The document type id
$contactAccount = 'contactAccount_example'; // string | The document contact account code
$contactAccountId = 'contactAccountId_example'; // string | The document contact account id
$legalEntity = 'legalEntity_example'; // string | The document legal entity code
$legalEntityId = 'legalEntityId_example'; // string | The document legal entity id
$currency = 'currency_example'; // string | The document currency
$project = 'project_example'; // string | The document project code
$projectId = 'projectId_example'; // string | The document project id
$description = 'description_example'; // string | The document description
$descriptionContains = 'descriptionContains_example'; // string | The document description contains
$theirRef = 'theirRef_example'; // string | An external reference code
$intRef = 'intRef_example'; // string | Optional interface reference. If provided, it must be unique. <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">Learn more</a>
$legacyRef = 'legacyRef_example'; // string | Alternative / legacy reference code
$theirDocNo = 'theirDocNo_example'; // string | An external document number
$docClass = new \SynergiTech\Iplicit\Model\\SynergiTech\Iplicit\Model\DocClass(); // \SynergiTech\Iplicit\Model\DocClass | The document class
$docDateFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The document from date
$docDateTo = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The document to date
$dueDateFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The document due from date
$dueDateTo = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The document due to date
$lastModifiedFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The document last modified from date
$lastModifiedTo = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The document last modified to date
$outstanding = True; // bool | The document outstanding flag
$unmatched = True; // bool | The document unmatched flag
$draft = True; // bool | The document draft flag
$abandoned = True; // bool | The document abandoned flag
$posted = True; // bool | The document posted
$approved = True; // bool | The document approved flag
$reversed = True; // bool | The document reversed flag
$take = 56; // int | The number of documents to take
$skip = 56; // int | The number of documents to skip

try {
    $result = $apiInstance->getSaleInvoices($domain, $docNo, $docType, $docTypeId, $contactAccount, $contactAccountId, $legalEntity, $legalEntityId, $currency, $project, $projectId, $description, $descriptionContains, $theirRef, $intRef, $legacyRef, $theirDocNo, $docClass, $docDateFrom, $docDateTo, $dueDateFrom, $dueDateTo, $lastModifiedFrom, $lastModifiedTo, $outstanding, $unmatched, $draft, $abandoned, $posted, $approved, $reversed, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleInvoiceApi->getSaleInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **docNo** | **string**| The document number | [optional] |
| **docType** | **string**| The document type code | [optional] |
| **docTypeId** | **string**| The document type id | [optional] |
| **contactAccount** | **string**| The document contact account code | [optional] |
| **contactAccountId** | **string**| The document contact account id | [optional] |
| **legalEntity** | **string**| The document legal entity code | [optional] |
| **legalEntityId** | **string**| The document legal entity id | [optional] |
| **currency** | **string**| The document currency | [optional] |
| **project** | **string**| The document project code | [optional] |
| **projectId** | **string**| The document project id | [optional] |
| **description** | **string**| The document description | [optional] |
| **descriptionContains** | **string**| The document description contains | [optional] |
| **theirRef** | **string**| An external reference code | [optional] |
| **intRef** | **string**| Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional] |
| **legacyRef** | **string**| Alternative / legacy reference code | [optional] |
| **theirDocNo** | **string**| An external document number | [optional] |
| **docClass** | [**\SynergiTech\Iplicit\Model\DocClass**](../Model/.md)| The document class | [optional] |
| **docDateFrom** | **\DateTime**| The document from date | [optional] |
| **docDateTo** | **\DateTime**| The document to date | [optional] |
| **dueDateFrom** | **\DateTime**| The document due from date | [optional] |
| **dueDateTo** | **\DateTime**| The document due to date | [optional] |
| **lastModifiedFrom** | **\DateTime**| The document last modified from date | [optional] |
| **lastModifiedTo** | **\DateTime**| The document last modified to date | [optional] |
| **outstanding** | **bool**| The document outstanding flag | [optional] |
| **unmatched** | **bool**| The document unmatched flag | [optional] |
| **draft** | **bool**| The document draft flag | [optional] |
| **abandoned** | **bool**| The document abandoned flag | [optional] |
| **posted** | **bool**| The document posted | [optional] |
| **approved** | **bool**| The document approved flag | [optional] |
| **reversed** | **bool**| The document reversed flag | [optional] |
| **take** | **int**| The number of documents to take | [optional] |
| **skip** | **int**| The number of documents to skip | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\DocSummary[]**](../Model/DocSummary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitSaleInvoice()`

```php
submitSaleInvoice($id, $domain)
```

Submit a sale invoice for authorisation and posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\SaleInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the sale invoice
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $apiInstance->submitSaleInvoice($id, $domain);
} catch (Exception $e) {
    echo 'Exception when calling SaleInvoiceApi->submitSaleInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the sale invoice | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSaleInvoice()`

```php
updateSaleInvoice($idOrDocNo, $domain, $docUpdate)
```

Update a sale invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\SaleInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or documnt number of the sale invoice
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$docUpdate = new \SynergiTech\Iplicit\Model\DocUpdate(); // \SynergiTech\Iplicit\Model\DocUpdate

try {
    $apiInstance->updateSaleInvoice($idOrDocNo, $domain, $docUpdate);
} catch (Exception $e) {
    echo 'Exception when calling SaleInvoiceApi->updateSaleInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or documnt number of the sale invoice | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **docUpdate** | [**\SynergiTech\Iplicit\Model\DocUpdate**](../Model/DocUpdate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
