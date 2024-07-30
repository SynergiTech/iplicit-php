# Iplicit-PHP

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/synergitech/iplicit-php.git"
    }
  ],
}
```

Then run `composer require synergitech/iplicit-php`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()
    ->setAccessToken($yourAccessToken)
    ->setDomainHeader($yourDomainHeader);

$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    config: $config
);
$attributeRef = 'attributeRef_example'; // string | Id or name of the attribute
$sourceId = 'sourceId_example'; // string | id of the source item to attach to
$attachmentGroupId = 'attachmentGroupId_example'; // string | Id of the attachment group. Use special value 'other' to get attachments without a group.
$file = "/path/to/file.txt"; // \SplFileObject | Attachment file information
$description = 'description_example'; // string | Attachment description
$documentDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Attachment document date

try {
    $result = $apiInstance->createAttachment($attributeRef, $sourceId, $attachmentGroupId, $file, $description, $documentDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->createAttachment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttachmentApi* | [**createAttachment**](docs/Api/AttachmentApi.md#createattachment) | **POST** /api/Attachment/create/{attributeRef}/{sourceId}/AttachmentGroup/{attachmentGroupId} | Create a new attachment on a specified source item
*AttachmentApi* | [**deleteAttachment**](docs/Api/AttachmentApi.md#deleteattachment) | **DELETE** /api/Attachment/{attachmentId} | Delete an attachment
*AttachmentApi* | [**getAttachmentDetails**](docs/Api/AttachmentApi.md#getattachmentdetails) | **GET** /api/Attachment/{attachmentId}/Details | Get attachment details
*AttachmentApi* | [**getAttachmentFile**](docs/Api/AttachmentApi.md#getattachmentfile) | **GET** /api/Attachment/{attachmentId}/File | Get attachment file
*AttachmentApi* | [**getAttachmentGroups**](docs/Api/AttachmentApi.md#getattachmentgroups) | **GET** /api/Attribute/{attributeRef}/AttachmentGroup | Get a list of attachment groups defined on a specified attribute.
*AttachmentApi* | [**getAttachmentsInGroup**](docs/Api/AttachmentApi.md#getattachmentsingroup) | **GET** /api/Attachment/search/{attributeRef}/{sourceId}/AttachmentGroup/{attachmentGroupId} | Get a list of attachments in an attachment group on a specified source item with a search filter.
*AttachmentApi* | [**updateAttachmentDetails**](docs/Api/AttachmentApi.md#updateattachmentdetails) | **PATCH** /api/Attachment/{attachmentId} | Update attachment details
*BankTransactionApi* | [**createBankTransaction**](docs/Api/BankTransactionApi.md#createbanktransaction) | **POST** /api/BankTransaction | Create a bank transaction
*BankTransactionApi* | [**deleteBankTransaction**](docs/Api/BankTransactionApi.md#deletebanktransaction) | **DELETE** /api/BankTransaction/{bankTransactionId} | Delete a bank transaction
*BankTransactionApi* | [**getBankTransaction**](docs/Api/BankTransactionApi.md#getbanktransaction) | **GET** /api/BankTransaction/{bankTransactionId} | Get a bank transaction
*BankTransactionApi* | [**lockBankTransaction**](docs/Api/BankTransactionApi.md#lockbanktransaction) | **POST** /api/BankTransaction/{bankTransactionId}/lock | Lock a bank transaction
*BankTransactionApi* | [**unlockBankTransaction**](docs/Api/BankTransactionApi.md#unlockbanktransaction) | **POST** /api/BankTransaction/{bankTransactionId}/unlock | Unlock a bank transaction
*BankTransactionApi* | [**updateBankTransaction**](docs/Api/BankTransactionApi.md#updatebanktransaction) | **PATCH** /api/BankTransaction/{bankTransactionId} | Update a bank transaction
*BatchPaymentApi* | [**abandonBatchPayment**](docs/Api/BatchPaymentApi.md#abandonbatchpayment) | **POST** /api/BatchPayment/{idOrBatchNo}/abandon | Abandon a batch payment
*BatchPaymentApi* | [**addBatchPaymentAllocations**](docs/Api/BatchPaymentApi.md#addbatchpaymentallocations) | **POST** /api/BatchPayment/{idOrBatchNo}/allocations | Add allocations to the batch payment
*BatchPaymentApi* | [**amendBatchPayment**](docs/Api/BatchPaymentApi.md#amendbatchpayment) | **POST** /api/BatchPayment/{idOrBatchNo}/amend | Set an approved batch payment back to draft for amending
*BatchPaymentApi* | [**createBatchPayment**](docs/Api/BatchPaymentApi.md#createbatchpayment) | **POST** /api/BatchPayment | Create a batch payment
*BatchPaymentApi* | [**deleteBatchPaymentAllocation**](docs/Api/BatchPaymentApi.md#deletebatchpaymentallocation) | **DELETE** /api/BatchPayment/{idOrBatchNo}/allocations/{allocationId} | Delete an allocation in the batch payment
*BatchPaymentApi* | [**getBatchPayment**](docs/Api/BatchPaymentApi.md#getbatchpayment) | **GET** /api/BatchPayment/{idOrBatchNo} | Get a batch payment by id or by batch number.
*BatchPaymentApi* | [**getBatchPayments**](docs/Api/BatchPaymentApi.md#getbatchpayments) | **GET** /api/BatchPayment | Get batch payments with a search filter
*BatchPaymentApi* | [**postBatchPayment**](docs/Api/BatchPaymentApi.md#postbatchpayment) | **POST** /api/BatchPayment/{idOrBatchNo}/post | Post a batch payment
*BatchPaymentApi* | [**processBatchPayment**](docs/Api/BatchPaymentApi.md#processbatchpayment) | **POST** /api/BatchPayment/{idOrBatchNo}/process | Process a batch payment
*BatchPaymentApi* | [**replaceBatchPaymentAllocations**](docs/Api/BatchPaymentApi.md#replacebatchpaymentallocations) | **PUT** /api/BatchPayment/{idOrBatchNo}/allocations | Replaces all allocations in the batch payment
*BatchPaymentApi* | [**submitBatchPayment**](docs/Api/BatchPaymentApi.md#submitbatchpayment) | **POST** /api/BatchPayment/{idOrBatchNo}/submit | Submit a batch payment
*BatchPaymentApi* | [**unpostBatchPayment**](docs/Api/BatchPaymentApi.md#unpostbatchpayment) | **POST** /api/BatchPayment/{idOrBatchNo}/unpost | Unpost a batch payment
*BatchPaymentApi* | [**updateBatchPayment**](docs/Api/BatchPaymentApi.md#updatebatchpayment) | **PATCH** /api/BatchPayment/{batchPaymentId} | Update a batch payment
*CatalogApi* | [**addCatalogItem**](docs/Api/CatalogApi.md#addcatalogitem) | **PUT** /api/Catalog/{catalogName} | Add an item to a catalog
*CatalogApi* | [**deleteCatalogItem**](docs/Api/CatalogApi.md#deletecatalogitem) | **DELETE** /api/Catalog/{catalogName}/{idOrCode} | Delete an item in a catalog
*CatalogApi* | [**getAllCatalogs**](docs/Api/CatalogApi.md#getallcatalogs) | **GET** /api/Catalog | Get a list of all catalogs
*CatalogApi* | [**getCatalog**](docs/Api/CatalogApi.md#getcatalog) | **GET** /api/Catalog/{catalogName} | Get all items in a catalog
*CatalogApi* | [**lockCatalogItem**](docs/Api/CatalogApi.md#lockcatalogitem) | **POST** /api/Catalog/{catalogName}/{idOrCode}/lock | Lock a catalog item
*CatalogApi* | [**replaceCatalogItems**](docs/Api/CatalogApi.md#replacecatalogitems) | **POST** /api/Catalog/{catalogName} | Replace all items in a catalog
*CatalogApi* | [**unlockCatalogItem**](docs/Api/CatalogApi.md#unlockcatalogitem) | **POST** /api/Catalog/{catalogName}/{idOrCode}/unlock | Unlock a catalog item
*CatalogApi* | [**updateCatalogItem**](docs/Api/CatalogApi.md#updatecatalogitem) | **PATCH** /api/Catalog/{catalogName}/{idOrCode} | Update an item in a catalog
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /api/Contact | Create a contact
*ContactApi* | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | **DELETE** /api/Contact/{idOrIntRef} | Delete a contact
*ContactApi* | [**getContact**](docs/Api/ContactApi.md#getcontact) | **GET** /api/Contact/{idOrIntRef} | Get a contact
*ContactApi* | [**lockContact**](docs/Api/ContactApi.md#lockcontact) | **POST** /api/Contact/{idOrIntRef}/lock | Lock the contact
*ContactApi* | [**unlockContact**](docs/Api/ContactApi.md#unlockcontact) | **POST** /api/Contact/{idOrIntRef}/unlock | Unlock the contact
*ContactApi* | [**updateContact**](docs/Api/ContactApi.md#updatecontact) | **PATCH** /api/Contact/{idOrIntRef} | Update a contact
*ContactAccountApi* | [**addContactAccountContact**](docs/Api/ContactAccountApi.md#addcontactaccountcontact) | **POST** /api/ContactAccount/{contactAccountRef}/contacts | Add related contacts
*ContactAccountApi* | [**addContactToContactAccount**](docs/Api/ContactAccountApi.md#addcontacttocontactaccount) | **POST** /api/ContactAccount/{ca}/contactLinks/{cb} | Add an existing contact to a contact account.
*ContactAccountApi* | [**createContactAccount**](docs/Api/ContactAccountApi.md#createcontactaccount) | **POST** /api/ContactAccount | Create a contact account
*ContactAccountApi* | [**deleteContactAccount**](docs/Api/ContactAccountApi.md#deletecontactaccount) | **DELETE** /api/ContactAccount/{contactAccountRef}/contacts/{contactRef} | Delete a related contact
*ContactAccountApi* | [**deleteContactFromContactAccount**](docs/Api/ContactAccountApi.md#deletecontactfromcontactaccount) | **DELETE** /api/ContactAccount/{ca}/contactLinks/{cb} | Remove an existing contact from a contact account.
*ContactAccountApi* | [**getContactAccount**](docs/Api/ContactAccountApi.md#getcontactaccount) | **GET** /api/ContactAccount/{contactAccountRef} | Get a contact account
*ContactAccountApi* | [**getContactAccountBankAccounts**](docs/Api/ContactAccountApi.md#getcontactaccountbankaccounts) | **GET** /api/ContactAccount/{contactAccountRef}/bankDetails | Get all the bank details
*ContactAccountApi* | [**getContactAccountCustomerDetails**](docs/Api/ContactAccountApi.md#getcontactaccountcustomerdetails) | **GET** /api/ContactAccount/{contactAccountRef}/customer | Get the customer details of the contact account
*ContactAccountApi* | [**getContactAccountDefaultBankAccount**](docs/Api/ContactAccountApi.md#getcontactaccountdefaultbankaccount) | **GET** /api/ContactAccount/{contactAccountRef}/defaultBankDetails | Get the default bank details
*ContactAccountApi* | [**getContactAccountMainContact**](docs/Api/ContactAccountApi.md#getcontactaccountmaincontact) | **GET** /api/ContactAccount/{contactAccountRef}/contact | Get the main contact details of the contact account
*ContactAccountApi* | [**getContactAccountRelatedContact**](docs/Api/ContactAccountApi.md#getcontactaccountrelatedcontact) | **GET** /api/ContactAccount/{contactAccountRef}/contacts/{contactRef} | Get an existing related contact
*ContactAccountApi* | [**getContactAccountRelatedContacts**](docs/Api/ContactAccountApi.md#getcontactaccountrelatedcontacts) | **GET** /api/ContactAccount/{contactAccountRef}/contacts | Get the related contacts
*ContactAccountApi* | [**getContactAccountResource**](docs/Api/ContactAccountApi.md#getcontactaccountresource) | **GET** /api/ContactAccount/{contactAccountRef}/resource | Get the resource details of the contact account
*ContactAccountApi* | [**getContactAccountSupplierDefaults**](docs/Api/ContactAccountApi.md#getcontactaccountsupplierdefaults) | **GET** /api/ContactAccount/{contactAccountRef}/supplier | Get the supplier details of the contact account
*ContactAccountApi* | [**getContactAccounts**](docs/Api/ContactAccountApi.md#getcontactaccounts) | **GET** /api/ContactAccount | Gets a list of contact accounts with a search filter
*ContactAccountApi* | [**lockContactAccount**](docs/Api/ContactAccountApi.md#lockcontactaccount) | **POST** /api/ContactAccount/{contactAccountRef}/lock |
*ContactAccountApi* | [**lockContactAccountResource**](docs/Api/ContactAccountApi.md#lockcontactaccountresource) | **POST** /api/ContactAccount/{contactAccountRef}/resource/lock | Lock the contact account resource
*ContactAccountApi* | [**lockCustomer**](docs/Api/ContactAccountApi.md#lockcustomer) | **POST** /api/ContactAccount/{contactAccountRef}/customer/lock | Lock the customer
*ContactAccountApi* | [**lockSupplier**](docs/Api/ContactAccountApi.md#locksupplier) | **POST** /api/ContactAccount/{contactAccountRef}/supplier/lock | Lock the supplier
*ContactAccountApi* | [**unlockContactAccount**](docs/Api/ContactAccountApi.md#unlockcontactaccount) | **POST** /api/ContactAccount/{contactAccountRef}/unlock | Unlock the contact account
*ContactAccountApi* | [**unlockContactAccountResource**](docs/Api/ContactAccountApi.md#unlockcontactaccountresource) | **POST** /api/ContactAccount/{contactAccountRef}/resource/unlock | Unlock the contact account resource
*ContactAccountApi* | [**unlockCustomer**](docs/Api/ContactAccountApi.md#unlockcustomer) | **POST** /api/ContactAccount/{contactAccountRef}/customer/unlock | Unlock the customer
*ContactAccountApi* | [**unlockSupplier**](docs/Api/ContactAccountApi.md#unlocksupplier) | **POST** /api/ContactAccount/{contactAccountRef}/supplier/unlock | Unlock the supplier
*ContactAccountApi* | [**updateContactAccount**](docs/Api/ContactAccountApi.md#updatecontactaccount) | **PATCH** /api/ContactAccount/{contactAccountRef} | Update a contact account
*ContactAccountApi* | [**updateContactAccountBankDetails**](docs/Api/ContactAccountApi.md#updatecontactaccountbankdetails) | **PATCH** /api/ContactAccount/{contactAccountRef}/bankDetails/default | Replace bank details
*ContactAccountApi* | [**updateContactAccountContact**](docs/Api/ContactAccountApi.md#updatecontactaccountcontact) | **PATCH** /api/ContactAccount/{contactAccountRef}/contacts/{contactRef} | Update an existing related contact
*ContactAccountApi* | [**updateContactAccountMainContact**](docs/Api/ContactAccountApi.md#updatecontactaccountmaincontact) | **PATCH** /api/ContactAccount/{contactAccountRef}/contact | Update the main contact details
*ContactAccountApi* | [**updateContactAccountRelatedContacts**](docs/Api/ContactAccountApi.md#updatecontactaccountrelatedcontacts) | **PATCH** /api/ContactAccount/{contactAccountRef}/contacts | Update existing contacts.                Existing contacts are matched to request contacts by ID, IntRef or Description and updated.              Existing contacts that do not match any request contact are left unchanged.              Request contacts that do not match any existing contact are added.
*ContactGroupApi* | [**getContactGroup**](docs/Api/ContactGroupApi.md#getcontactgroup) | **GET** /api/ContactGroup/{contactGroupRef} | Get a contact group
*CostCentreApi* | [**createCostCentre**](docs/Api/CostCentreApi.md#createcostcentre) | **POST** /api/CostCentre | Create a cost centre
*CostCentreApi* | [**getCostCentre**](docs/Api/CostCentreApi.md#getcostcentre) | **GET** /api/CostCentre/{costCentreRef} | Get a cost centre
*CostCentreApi* | [**getCostCentres**](docs/Api/CostCentreApi.md#getcostcentres) | **GET** /api/CostCentre | Get a list of cost centres with a search filter
*CostCentreApi* | [**lockCostCentre**](docs/Api/CostCentreApi.md#lockcostcentre) | **POST** /api/CostCentre/{costCentreRef}/lock | Lock the cost centre
*CostCentreApi* | [**unlockCostCentre**](docs/Api/CostCentreApi.md#unlockcostcentre) | **POST** /api/CostCentre/{costCentreRef}/unlock | Unlock the cost centre
*CostCentreApi* | [**updateCostCentre**](docs/Api/CostCentreApi.md#updatecostcentre) | **PATCH** /api/CostCentre/{costCentreRef} | Update a cost centre
*DepartmentApi* | [**createDepartment**](docs/Api/DepartmentApi.md#createdepartment) | **POST** /api/Department | Create a department
*DepartmentApi* | [**getDepartment**](docs/Api/DepartmentApi.md#getdepartment) | **GET** /api/Department/{departmentRef} | Get a department
*DepartmentApi* | [**getDepartments**](docs/Api/DepartmentApi.md#getdepartments) | **GET** /api/Department | Get a list of departments with a search filter
*DepartmentApi* | [**lockDepartment**](docs/Api/DepartmentApi.md#lockdepartment) | **POST** /api/Department/{departmentRef}/lock | Lock a department
*DepartmentApi* | [**unlockDepartment**](docs/Api/DepartmentApi.md#unlockdepartment) | **POST** /api/Department/{departmentRef}/unlock | Unlock a department
*DepartmentApi* | [**upateDepartment**](docs/Api/DepartmentApi.md#upatedepartment) | **PATCH** /api/Department/{departmentRef} | Update a department
*DocumentApi* | [**abandonDocument**](docs/Api/DocumentApi.md#abandondocument) | **POST** /api/Document/{idOrDocNo}/abandon | Abandon a draft document.
*DocumentApi* | [**addAllocationToDocument**](docs/Api/DocumentApi.md#addallocationtodocument) | **POST** /api/Document/{docIdOrCode}/allocation | Add an allocation to the document
*DocumentApi* | [**addDocumentDetailLine**](docs/Api/DocumentApi.md#adddocumentdetailline) | **POST** /api/Document/{docRef}/detail | Add a document detail line
*DocumentApi* | [**amendDocument**](docs/Api/DocumentApi.md#amenddocument) | **PATCH** /api/Document/{idOrDocNo}/amend | Amend a document
*DocumentApi* | [**convertDocumentType**](docs/Api/DocumentApi.md#convertdocumenttype) | **POST** /api/Document/{fromDocId}/convert/{toDocType} | Convert a document to another type
*DocumentApi* | [**createDocument**](docs/Api/DocumentApi.md#createdocument) | **POST** /api/Document | Create a document
*DocumentApi* | [**deleteDocumentDetailLine**](docs/Api/DocumentApi.md#deletedocumentdetailline) | **DELETE** /api/Document/{docRef}/detail/{docDetailRef} | Delete a document detail line
*DocumentApi* | [**disputeDocument**](docs/Api/DocumentApi.md#disputedocument) | **POST** /api/Document/{idOrDocNo}/dispute | Dispute a document
*DocumentApi* | [**getDocument**](docs/Api/DocumentApi.md#getdocument) | **GET** /api/Document/{idOrDocNo} | Get a document by id or document number
*DocumentApi* | [**getDocumentByIntRef**](docs/Api/DocumentApi.md#getdocumentbyintref) | **GET** /api/Document/intref/{intRef} | Get a document by the &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt;
*DocumentApi* | [**getDocumentMatchDetails**](docs/Api/DocumentApi.md#getdocumentmatchdetails) | **GET** /api/Document/{idOrDocNo}/match/details | Get document match details.
*DocumentApi* | [**getDocumentMatchReverse**](docs/Api/DocumentApi.md#getdocumentmatchreverse) | **GET** /api/Document/{idOrDocNo}/match/reverse | Get document match reverse details.
*DocumentApi* | [**getDocumentMatchSummary**](docs/Api/DocumentApi.md#getdocumentmatchsummary) | **GET** /api/Document/{idOrDocNo}/match/outstanding/amount | Get document match summary (amount only).
*DocumentApi* | [**getDocuments**](docs/Api/DocumentApi.md#getdocuments) | **GET** /api/Document | Get a list of documents with a search filter
*DocumentApi* | [**submitDocument**](docs/Api/DocumentApi.md#submitdocument) | **POST** /api/Document/{docId}/submit | Submit the document for authorisation and posting.
*DocumentApi* | [**unauthoriseDocument**](docs/Api/DocumentApi.md#unauthorisedocument) | **POST** /api/Document/{idOrDocNo}/unauthorise | Unauthorise an approved document (non GL documents only).
*DocumentApi* | [**unpostDocument**](docs/Api/DocumentApi.md#unpostdocument) | **POST** /api/Document/{idOrDocNo}/unpost | Unpost a document
*DocumentApi* | [**updateDocument**](docs/Api/DocumentApi.md#updatedocument) | **PATCH** /api/Document/{idOrDocNo} | Update a document
*DocumentApi* | [**updateDocumentDetailLine**](docs/Api/DocumentApi.md#updatedocumentdetailline) | **PATCH** /api/Document/{docRef}/detail/{docDetailRef} | Update a document detail line
*DocumentApi* | [**updateDocumentDetailLineObsolete**](docs/Api/DocumentApi.md#updatedocumentdetaillineobsolete) | **PATCH** /api/Document/detail/{docDetailId} | Update a document detail line
*DocumentAttachmentApi* | [**createDocumentAttachment**](docs/Api/DocumentAttachmentApi.md#createdocumentattachment) | **POST** /api/Document/{docRef}/AttachmentGroup/{attachmentGroupId}/Attachment | Create a new attachment on a sepcified document.
*DocumentAttachmentApi* | [**getDocumentAttachmentGroups**](docs/Api/DocumentAttachmentApi.md#getdocumentattachmentgroups) | **GET** /api/DocumentType/{docTypeRef}/AttachmentGroup | Get a list of attachment groups defined on a specified document type.
*DocumentAttachmentApi* | [**getDocumentAttachmentsInGroup**](docs/Api/DocumentAttachmentApi.md#getdocumentattachmentsingroup) | **GET** /api/Document/{docRef}/AttachmentGroup/{attachmentGroupId}/Attachment | Get a list of attachments in an attachment group on a specified document with a search filter.
*DocumentBatchApi* | [**unpostDocumentBatch**](docs/Api/DocumentBatchApi.md#unpostdocumentbatch) | **POST** /api/DocumentBatch/{idOrBatchNo}/unpost | Unpost a document
*DocumentTypeApi* | [**getDocumentType**](docs/Api/DocumentTypeApi.md#getdocumenttype) | **GET** /api/DocumentType/{documentTypeRef} | Get a document type
*EnquiryApi* | [**runEnquiry**](docs/Api/EnquiryApi.md#runenquiry) | **POST** /api/Enquiry/run/{id} | Run an enquiry that returns a list
*EnquiryApi* | [**runEnquiryToList**](docs/Api/EnquiryApi.md#runenquirytolist) | **POST** /api/Enquiry/run/{id}/list | Run an enquiry that returns a list
*EnquiryApi* | [**runEnquiryToTable**](docs/Api/EnquiryApi.md#runenquirytotable) | **POST** /api/Enquiry/run/{id}/table | Run an enquiry that returns a table
*LegalEntityApi* | [**getAllLegalEntities**](docs/Api/LegalEntityApi.md#getalllegalentities) | **GET** /api/LegalEntity | Get all legal entities
*PaymentApi* | [**addPaymentAllocation**](docs/Api/PaymentApi.md#addpaymentallocation) | **POST** /api/Payment/{docIdOrCode}/allocation | Add a payment allocation.
*PaymentApi* | [**createPayment**](docs/Api/PaymentApi.md#createpayment) | **POST** /api/Payment | Create a payment.
*PaymentApi* | [**getPayment**](docs/Api/PaymentApi.md#getpayment) | **GET** /api/Payment/{id} | Get a payment
*PaymentApi* | [**getPayments**](docs/Api/PaymentApi.md#getpayments) | **GET** /api/Payment | Get a list of payments with a search filter
*PaymentApi* | [**submitPayment**](docs/Api/PaymentApi.md#submitpayment) | **POST** /api/Payment/{id}/submit | Submit the payment for authorisation and posting.
*ProductApi* | [**createProduct**](docs/Api/ProductApi.md#createproduct) | **POST** /api/Product | Create a product
*ProductApi* | [**deleteProduct**](docs/Api/ProductApi.md#deleteproduct) | **DELETE** /api/Product/{id} | Permanently delete a product
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /api/Product/{idOrCode} | Get a product
*ProductApi* | [**getProducts**](docs/Api/ProductApi.md#getproducts) | **GET** /api/Product | Get a list of products with a search filter
*ProductApi* | [**lockProduct**](docs/Api/ProductApi.md#lockproduct) | **POST** /api/Product/{id}/lock | Lock a product
*ProductApi* | [**updateProduct**](docs/Api/ProductApi.md#updateproduct) | **PATCH** /api/Product/{idOrCode} | Update a product
*ProfileApi* | [**getProfile**](docs/Api/ProfileApi.md#getprofile) | **GET** /api/Profile | Get profile of current session
*ProjectApi* | [**addProjectMilstones**](docs/Api/ProjectApi.md#addprojectmilstones) | **PUT** /api/Project/{projectRef}/milestone | Add a project milestone
*ProjectApi* | [**addProjectResourceAvailability**](docs/Api/ProjectApi.md#addprojectresourceavailability) | **POST** /api/Project/{projectRef}/availability | Add a project resource availability
*ProjectApi* | [**createProject**](docs/Api/ProjectApi.md#createproject) | **POST** /api/Project | Create a project
*ProjectApi* | [**deleteProjectMilstones**](docs/Api/ProjectApi.md#deleteprojectmilstones) | **DELETE** /api/Project/{projectRef}/milestone/{milestoneIdOrCode} | Delete a project milestone
*ProjectApi* | [**deleteProjectResourceAvailability**](docs/Api/ProjectApi.md#deleteprojectresourceavailability) | **DELETE** /api/Project/{projectRef}/availability | Delete a project resource availability
*ProjectApi* | [**getProject**](docs/Api/ProjectApi.md#getproject) | **GET** /api/Project/{projectRef} | Get a project
*ProjectApi* | [**getProjectResourceAvailability**](docs/Api/ProjectApi.md#getprojectresourceavailability) | **GET** /api/Project/{projectRef}/availability | Get a project resource availability
*ProjectApi* | [**getProjects**](docs/Api/ProjectApi.md#getprojects) | **GET** /api/Project | Get a list of projects with a search filter
*ProjectApi* | [**lockProject**](docs/Api/ProjectApi.md#lockproject) | **POST** /api/Project/{projectRef}/lock | Lock a project
*ProjectApi* | [**projectMilstones**](docs/Api/ProjectApi.md#projectmilstones) | **GET** /api/Project/{projectRef}/milestone | Get a project milestones
*ProjectApi* | [**replaceProjectMilstones**](docs/Api/ProjectApi.md#replaceprojectmilstones) | **POST** /api/Project/{projectRef}/milestone | Replace all project milestones
*ProjectApi* | [**replaceProjectResourceAvailability**](docs/Api/ProjectApi.md#replaceprojectresourceavailability) | **PUT** /api/Project/{projectRef}/availability | Replace a project resource availability
*ProjectApi* | [**unlockProject**](docs/Api/ProjectApi.md#unlockproject) | **POST** /api/Project/{projectRef}/unlock | Unlock a project
*ProjectApi* | [**updateProject**](docs/Api/ProjectApi.md#updateproject) | **PATCH** /api/Project/{projectRef} | Update a project
*PurchaseInvoiceApi* | [**createPurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#createpurchaseinvoice) | **POST** /api/PurchaseInvoice | Create a purchase invoice.
*PurchaseInvoiceApi* | [**getPurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#getpurchaseinvoice) | **GET** /api/PurchaseInvoice/{id} | Get a purchase invoice
*PurchaseInvoiceApi* | [**getPurchaseInvoices**](docs/Api/PurchaseInvoiceApi.md#getpurchaseinvoices) | **GET** /api/PurchaseInvoice | Get a list of purchase invoices with a search filter
*PurchaseInvoiceApi* | [**submitPurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#submitpurchaseinvoice) | **POST** /api/PurchaseInvoice/{id}/submit | Submit a purchase invoice for authorisation and posting.
*PurchaseInvoiceApi* | [**updatePurchaseInvoice**](docs/Api/PurchaseInvoiceApi.md#updatepurchaseinvoice) | **PATCH** /api/PurchaseInvoice/{idOrDocNo} | Update a purchase invoice.
*PurchaseOrderApi* | [**createPurchaseOrder**](docs/Api/PurchaseOrderApi.md#createpurchaseorder) | **POST** /api/PurchaseOrder | Create a purchase order.
*PurchaseOrderApi* | [**getPurchaseOrder**](docs/Api/PurchaseOrderApi.md#getpurchaseorder) | **GET** /api/PurchaseOrder/{id} | Get a purchase order.
*PurchaseOrderApi* | [**getPurchaseOrders**](docs/Api/PurchaseOrderApi.md#getpurchaseorders) | **GET** /api/PurchaseOrder | Get a list of purchase orders with a search filter
*PurchaseOrderApi* | [**submitPurchaseOrder**](docs/Api/PurchaseOrderApi.md#submitpurchaseorder) | **POST** /api/PurchaseOrder/{id}/submit | Submit a purchase order for authorisation.
*PurchaseOrderApi* | [**updatePurchaseOrder**](docs/Api/PurchaseOrderApi.md#updatepurchaseorder) | **PATCH** /api/PurchaseOrder/{idOrDocNo} | Update a purchase order.
*ReceiptApi* | [**addReceiptAllocation**](docs/Api/ReceiptApi.md#addreceiptallocation) | **POST** /api/Receipt/{docIdOrCode}/allocation | Add a receipt allocation.
*ReceiptApi* | [**createReceipt**](docs/Api/ReceiptApi.md#createreceipt) | **POST** /api/Receipt | Create a receipt.
*ReceiptApi* | [**getReceipt**](docs/Api/ReceiptApi.md#getreceipt) | **GET** /api/Receipt/{id} | Get a receipt
*ReceiptApi* | [**getReceipts**](docs/Api/ReceiptApi.md#getreceipts) | **GET** /api/Receipt | Get a list of receipts with a search filter
*ReceiptApi* | [**submitReceipt**](docs/Api/ReceiptApi.md#submitreceipt) | **POST** /api/Receipt/{id}/submit | Submit a receipt for authorisation and posting.
*ResourceApi* | [**getResource**](docs/Api/ResourceApi.md#getresource) | **GET** /api/Resource/{id} | Get a resource
*SaleInvoiceApi* | [**createSaleInvoice**](docs/Api/SaleInvoiceApi.md#createsaleinvoice) | **POST** /api/SaleInvoice | Create a sale invoice.
*SaleInvoiceApi* | [**getSaleInvoice**](docs/Api/SaleInvoiceApi.md#getsaleinvoice) | **GET** /api/SaleInvoice/{id} | Get a sale invoice
*SaleInvoiceApi* | [**getSaleInvoices**](docs/Api/SaleInvoiceApi.md#getsaleinvoices) | **GET** /api/SaleInvoice | Get a list of sale invoices with a search filter
*SaleInvoiceApi* | [**submitSaleInvoice**](docs/Api/SaleInvoiceApi.md#submitsaleinvoice) | **POST** /api/SaleInvoice/{id}/submit | Submit a sale invoice for authorisation and posting.
*SaleInvoiceApi* | [**updateSaleInvoice**](docs/Api/SaleInvoiceApi.md#updatesaleinvoice) | **PATCH** /api/SaleInvoice/{idOrDocNo} | Update a sale invoice
*SaleOrderApi* | [**createSaleOrder**](docs/Api/SaleOrderApi.md#createsaleorder) | **POST** /api/SaleOrder | Create a sale order.
*SaleOrderApi* | [**getSaleOrder**](docs/Api/SaleOrderApi.md#getsaleorder) | **GET** /api/SaleOrder/{id} | Get a sale order
*SaleOrderApi* | [**getSaleOrders**](docs/Api/SaleOrderApi.md#getsaleorders) | **GET** /api/SaleOrder | Get sale orders with a search filter
*SaleOrderApi* | [**submitSaleOrder**](docs/Api/SaleOrderApi.md#submitsaleorder) | **POST** /api/SaleOrder/{id}/submit | Submit a sale order for authorisation.
*SaleOrderApi* | [**updateSaleOrder**](docs/Api/SaleOrderApi.md#updatesaleorder) | **PATCH** /api/SaleOrder/{idOrDocNo} | Update a sale order
*SaleQuoteApi* | [**createSaleQuote**](docs/Api/SaleQuoteApi.md#createsalequote) | **POST** /api/SaleQuote | Create a sale quote
*SaleQuoteApi* | [**getSaleQuote**](docs/Api/SaleQuoteApi.md#getsalequote) | **GET** /api/SaleQuote/{id} | Get a sale quote
*SaleQuoteApi* | [**getSaleQuotes**](docs/Api/SaleQuoteApi.md#getsalequotes) | **GET** /api/SaleQuote | Get a list of sale quotes with a search filter
*SaleQuoteApi* | [**submitSaleQuote**](docs/Api/SaleQuoteApi.md#submitsalequote) | **POST** /api/SaleQuote/{id}/submit | Submit a sale quote for authorisation.
*SaleQuoteApi* | [**updateSaleQuote**](docs/Api/SaleQuoteApi.md#updatesalequote) | **PATCH** /api/SaleQuote/{idOrDocNo} | Update a sale quote
*SessionApi* | [**closeSession**](docs/Api/SessionApi.md#closesession) | **POST** /api/Session/close | Close the session
*SessionApi* | [**createSessionAPIKey**](docs/Api/SessionApi.md#createsessionapikey) | **POST** /api/Session/create/api | Create a session with an API Key.

## Models

- [AttachmentGroupRead](docs/Model/AttachmentGroupRead.md)
- [AttachmentRead](docs/Model/AttachmentRead.md)
- [AttachmentUpdate](docs/Model/AttachmentUpdate.md)
- [BankTransactionCreate](docs/Model/BankTransactionCreate.md)
- [BankTransactionRead](docs/Model/BankTransactionRead.md)
- [BankTransactionUpdate](docs/Model/BankTransactionUpdate.md)
- [BatchPaymentAbandon](docs/Model/BatchPaymentAbandon.md)
- [BatchPaymentCreate](docs/Model/BatchPaymentCreate.md)
- [BatchPaymentDetail](docs/Model/BatchPaymentDetail.md)
- [BatchPaymentSummary](docs/Model/BatchPaymentSummary.md)
- [BatchPaymentUpdate](docs/Model/BatchPaymentUpdate.md)
- [CatalogItem](docs/Model/CatalogItem.md)
- [CatalogItemCreate](docs/Model/CatalogItemCreate.md)
- [CatalogItemUpdate](docs/Model/CatalogItemUpdate.md)
- [Column](docs/Model/Column.md)
- [ContactAccountCreate](docs/Model/ContactAccountCreate.md)
- [ContactAccountRead](docs/Model/ContactAccountRead.md)
- [ContactAccountUpdate](docs/Model/ContactAccountUpdate.md)
- [ContactAddressCreate](docs/Model/ContactAddressCreate.md)
- [ContactAddressInline](docs/Model/ContactAddressInline.md)
- [ContactAddressRead](docs/Model/ContactAddressRead.md)
- [ContactBankDetailsRead](docs/Model/ContactBankDetailsRead.md)
- [ContactBankDetailsUpdateable](docs/Model/ContactBankDetailsUpdateable.md)
- [ContactCreate](docs/Model/ContactCreate.md)
- [ContactCustomerCreate](docs/Model/ContactCustomerCreate.md)
- [ContactCustomerRead](docs/Model/ContactCustomerRead.md)
- [ContactCustomerUpdate](docs/Model/ContactCustomerUpdate.md)
- [ContactEmailCreate](docs/Model/ContactEmailCreate.md)
- [ContactEmailRead](docs/Model/ContactEmailRead.md)
- [ContactGroupCustomerRead](docs/Model/ContactGroupCustomerRead.md)
- [ContactGroupRead](docs/Model/ContactGroupRead.md)
- [ContactGroupSupplierRead](docs/Model/ContactGroupSupplierRead.md)
- [ContactPhoneCreate](docs/Model/ContactPhoneCreate.md)
- [ContactPhoneRead](docs/Model/ContactPhoneRead.md)
- [ContactRead](docs/Model/ContactRead.md)
- [ContactResourceCreate](docs/Model/ContactResourceCreate.md)
- [ContactResourceRead](docs/Model/ContactResourceRead.md)
- [ContactResourceUpdate](docs/Model/ContactResourceUpdate.md)
- [ContactSupplierCreate](docs/Model/ContactSupplierCreate.md)
- [ContactSupplierRead](docs/Model/ContactSupplierRead.md)
- [ContactSupplierUpdate](docs/Model/ContactSupplierUpdate.md)
- [ContactUpdate](docs/Model/ContactUpdate.md)
- [CostCentreCreate](docs/Model/CostCentreCreate.md)
- [CostCentreRead](docs/Model/CostCentreRead.md)
- [CostCentreResource](docs/Model/CostCentreResource.md)
- [CostCentreSearch](docs/Model/CostCentreSearch.md)
- [CostCentreSummary](docs/Model/CostCentreSummary.md)
- [CostCentreUpdate](docs/Model/CostCentreUpdate.md)
- [CustomField](docs/Model/CustomField.md)
- [DepartmentCreate](docs/Model/DepartmentCreate.md)
- [DepartmentRead](docs/Model/DepartmentRead.md)
- [DepartmentSearch](docs/Model/DepartmentSearch.md)
- [DepartmentSummary](docs/Model/DepartmentSummary.md)
- [DepartmentUpdate](docs/Model/DepartmentUpdate.md)
- [Doc](docs/Model/Doc.md)
- [DocAllocation](docs/Model/DocAllocation.md)
- [DocAllocationCreate](docs/Model/DocAllocationCreate.md)
- [DocClass](docs/Model/DocClass.md)
- [DocCreate](docs/Model/DocCreate.md)
- [DocDetail](docs/Model/DocDetail.md)
- [DocDetailCreate](docs/Model/DocDetailCreate.md)
- [DocDetailDeferred](docs/Model/DocDetailDeferred.md)
- [DocDetailDeferredCreateUpdate](docs/Model/DocDetailDeferredCreateUpdate.md)
- [DocDetailUpdate](docs/Model/DocDetailUpdate.md)
- [DocSummary](docs/Model/DocSummary.md)
- [DocUpdate](docs/Model/DocUpdate.md)
- [DocumentAmend](docs/Model/DocumentAmend.md)
- [DocumentDispute](docs/Model/DocumentDispute.md)
- [DocumentTypeRead](docs/Model/DocumentTypeRead.md)
- [DocumentTypeSetupRead](docs/Model/DocumentTypeSetupRead.md)
- [ExpenseProductRead](docs/Model/ExpenseProductRead.md)
- [LegalEntity](docs/Model/LegalEntity.md)
- [LoginApiCredentials](docs/Model/LoginApiCredentials.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProductCreate](docs/Model/ProductCreate.md)
- [ProductPostSetup](docs/Model/ProductPostSetup.md)
- [ProductPurchaseCreate](docs/Model/ProductPurchaseCreate.md)
- [ProductPurchaseRead](docs/Model/ProductPurchaseRead.md)
- [ProductPurchaseUpdate](docs/Model/ProductPurchaseUpdate.md)
- [ProductRead](docs/Model/ProductRead.md)
- [ProductSaleCreate](docs/Model/ProductSaleCreate.md)
- [ProductSaleRead](docs/Model/ProductSaleRead.md)
- [ProductSaleUpdate](docs/Model/ProductSaleUpdate.md)
- [ProductSummary](docs/Model/ProductSummary.md)
- [ProductUpdate](docs/Model/ProductUpdate.md)
- [ProfileRead](docs/Model/ProfileRead.md)
- [Project](docs/Model/Project.md)
- [ProjectAddress](docs/Model/ProjectAddress.md)
- [ProjectAddressCreate](docs/Model/ProjectAddressCreate.md)
- [ProjectAvailability](docs/Model/ProjectAvailability.md)
- [ProjectAvailabilityCreate](docs/Model/ProjectAvailabilityCreate.md)
- [ProjectChild](docs/Model/ProjectChild.md)
- [ProjectCreate](docs/Model/ProjectCreate.md)
- [ProjectMilestone](docs/Model/ProjectMilestone.md)
- [ProjectMilestoneCreate](docs/Model/ProjectMilestoneCreate.md)
- [ProjectUpdate](docs/Model/ProjectUpdate.md)
- [ResourceEmploymentCreate](docs/Model/ResourceEmploymentCreate.md)
- [ResourceEmploymentRead](docs/Model/ResourceEmploymentRead.md)
- [ResourceRead](docs/Model/ResourceRead.md)
- [ResourceSummary](docs/Model/ResourceSummary.md)
- [ResourceUmbrellaCreate](docs/Model/ResourceUmbrellaCreate.md)
- [ResourceUmbrellaRead](docs/Model/ResourceUmbrellaRead.md)
- [SessionResultData](docs/Model/SessionResultData.md)
- [Table](docs/Model/Table.md)
- [TimesheetProductRead](docs/Model/TimesheetProductRead.md)

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.8.0`
    - Package version: `1.8.0`
    - Generator version: `7.8.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`