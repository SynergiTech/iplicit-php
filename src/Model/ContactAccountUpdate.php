<?php
/**
 * ContactAccountUpdate
 *
 * PHP version 8.1
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Iplicit API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.8.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Iplicit\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Iplicit\ObjectSerializer;

/**
 * ContactAccountUpdate Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContactAccountUpdate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContactAccountUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'intRef' => 'string',
        'description' => 'string',
        'companyNo' => 'string',
        'taxNo' => 'string',
        'legacyRef' => 'string',
        'theirRef' => 'string',
        'countryCode' => 'string',
        'contactClassificationId' => 'string',
        'customer' => '\SynergiTech\Iplicit\Model\ContactCustomerUpdate',
        'supplier' => '\SynergiTech\Iplicit\Model\ContactSupplierUpdate',
        'resource' => '\SynergiTech\Iplicit\Model\ContactResourceUpdate',
        'contact' => '\SynergiTech\Iplicit\Model\ContactCreate',
        'contacts' => '\SynergiTech\Iplicit\Model\ContactCreate[]',
        'bankDetails' => '\SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'intRef' => null,
        'description' => null,
        'companyNo' => null,
        'taxNo' => null,
        'legacyRef' => null,
        'theirRef' => null,
        'countryCode' => null,
        'contactClassificationId' => null,
        'customer' => null,
        'supplier' => null,
        'resource' => null,
        'contact' => null,
        'contacts' => null,
        'bankDetails' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'intRef' => true,
        'description' => true,
        'companyNo' => true,
        'taxNo' => true,
        'legacyRef' => true,
        'theirRef' => true,
        'countryCode' => true,
        'contactClassificationId' => true,
        'customer' => false,
        'supplier' => false,
        'resource' => false,
        'contact' => false,
        'contacts' => true,
        'bankDetails' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'intRef' => 'intRef',
        'description' => 'description',
        'companyNo' => 'companyNo',
        'taxNo' => 'taxNo',
        'legacyRef' => 'legacyRef',
        'theirRef' => 'theirRef',
        'countryCode' => 'countryCode',
        'contactClassificationId' => 'contactClassificationId',
        'customer' => 'customer',
        'supplier' => 'supplier',
        'resource' => 'resource',
        'contact' => 'contact',
        'contacts' => 'contacts',
        'bankDetails' => 'bankDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'intRef' => 'setIntRef',
        'description' => 'setDescription',
        'companyNo' => 'setCompanyNo',
        'taxNo' => 'setTaxNo',
        'legacyRef' => 'setLegacyRef',
        'theirRef' => 'setTheirRef',
        'countryCode' => 'setCountryCode',
        'contactClassificationId' => 'setContactClassificationId',
        'customer' => 'setCustomer',
        'supplier' => 'setSupplier',
        'resource' => 'setResource',
        'contact' => 'setContact',
        'contacts' => 'setContacts',
        'bankDetails' => 'setBankDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'intRef' => 'getIntRef',
        'description' => 'getDescription',
        'companyNo' => 'getCompanyNo',
        'taxNo' => 'getTaxNo',
        'legacyRef' => 'getLegacyRef',
        'theirRef' => 'getTheirRef',
        'countryCode' => 'getCountryCode',
        'contactClassificationId' => 'getContactClassificationId',
        'customer' => 'getCustomer',
        'supplier' => 'getSupplier',
        'resource' => 'getResource',
        'contact' => 'getContact',
        'contacts' => 'getContacts',
        'bankDetails' => 'getBankDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('intRef', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('companyNo', $data ?? [], null);
        $this->setIfExists('taxNo', $data ?? [], null);
        $this->setIfExists('legacyRef', $data ?? [], null);
        $this->setIfExists('theirRef', $data ?? [], null);
        $this->setIfExists('countryCode', $data ?? [], null);
        $this->setIfExists('contactClassificationId', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('resource', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('bankDetails', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (!is_null($this->container['intRef']) && (mb_strlen($this->container['intRef']) > 50)) {
            $invalidProperties[] = "invalid value for 'intRef', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 250)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['companyNo']) && (mb_strlen($this->container['companyNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'companyNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['taxNo']) && (mb_strlen($this->container['taxNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'taxNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['legacyRef']) && (mb_strlen($this->container['legacyRef']) > 50)) {
            $invalidProperties[] = "invalid value for 'legacyRef', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['theirRef']) && (mb_strlen($this->container['theirRef']) > 50)) {
            $invalidProperties[] = "invalid value for 'theirRef', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 2.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets intRef
     *
     * @return string|null
     */
    public function getIntRef(): ?string
    {
        return $this->container['intRef'];
    }

    /**
     * Sets intRef
     *
     * @param string|null $intRef Optional interface reference. If provided, it must be unique. <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">Learn more</a>
     *
     * @return $this
     */
    public function setIntRef(?string $intRef): static
    {
        if (is_null($intRef)) {
            array_push($this->openAPINullablesSetToNull, 'intRef');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intRef', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($intRef) && (mb_strlen($intRef) > 50)) {
            throw new InvalidArgumentException('invalid length for $intRef when calling ContactAccountUpdate., must be smaller than or equal to 50.');
        }

        $this->container['intRef'] = $intRef;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Required, the internal contact account description.
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 250)) {
            throw new InvalidArgumentException('invalid length for $description when calling ContactAccountUpdate., must be smaller than or equal to 250.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets companyNo
     *
     * @return string|null
     */
    public function getCompanyNo(): ?string
    {
        return $this->container['companyNo'];
    }

    /**
     * Sets companyNo
     *
     * @param string|null $companyNo Company number
     *
     * @return $this
     */
    public function setCompanyNo(?string $companyNo): static
    {
        if (is_null($companyNo)) {
            array_push($this->openAPINullablesSetToNull, 'companyNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('companyNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($companyNo) && (mb_strlen($companyNo) > 50)) {
            throw new InvalidArgumentException('invalid length for $companyNo when calling ContactAccountUpdate., must be smaller than or equal to 50.');
        }

        $this->container['companyNo'] = $companyNo;

        return $this;
    }

    /**
     * Gets taxNo
     *
     * @return string|null
     */
    public function getTaxNo(): ?string
    {
        return $this->container['taxNo'];
    }

    /**
     * Sets taxNo
     *
     * @param string|null $taxNo Tax number
     *
     * @return $this
     */
    public function setTaxNo(?string $taxNo): static
    {
        if (is_null($taxNo)) {
            array_push($this->openAPINullablesSetToNull, 'taxNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($taxNo) && (mb_strlen($taxNo) > 50)) {
            throw new InvalidArgumentException('invalid length for $taxNo when calling ContactAccountUpdate., must be smaller than or equal to 50.');
        }

        $this->container['taxNo'] = $taxNo;

        return $this;
    }

    /**
     * Gets legacyRef
     *
     * @return string|null
     */
    public function getLegacyRef(): ?string
    {
        return $this->container['legacyRef'];
    }

    /**
     * Sets legacyRef
     *
     * @param string|null $legacyRef legacyRef
     *
     * @return $this
     */
    public function setLegacyRef(?string $legacyRef): static
    {
        if (is_null($legacyRef)) {
            array_push($this->openAPINullablesSetToNull, 'legacyRef');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('legacyRef', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($legacyRef) && (mb_strlen($legacyRef) > 50)) {
            throw new InvalidArgumentException('invalid length for $legacyRef when calling ContactAccountUpdate., must be smaller than or equal to 50.');
        }

        $this->container['legacyRef'] = $legacyRef;

        return $this;
    }

    /**
     * Gets theirRef
     *
     * @return string|null
     */
    public function getTheirRef(): ?string
    {
        return $this->container['theirRef'];
    }

    /**
     * Sets theirRef
     *
     * @param string|null $theirRef theirRef
     *
     * @return $this
     */
    public function setTheirRef(?string $theirRef): static
    {
        if (is_null($theirRef)) {
            array_push($this->openAPINullablesSetToNull, 'theirRef');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('theirRef', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($theirRef) && (mb_strlen($theirRef) > 50)) {
            throw new InvalidArgumentException('invalid length for $theirRef when calling ContactAccountUpdate., must be smaller than or equal to 50.');
        }

        $this->container['theirRef'] = $theirRef;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode Country code. See `Country` catalog. (ISO 3166, ALPHA-2)
     *
     * @return $this
     */
    public function setCountryCode(?string $countryCode): static
    {
        if (is_null($countryCode)) {
            array_push($this->openAPINullablesSetToNull, 'countryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('countryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($countryCode) && (mb_strlen($countryCode) > 2)) {
            throw new InvalidArgumentException('invalid length for $countryCode when calling ContactAccountUpdate., must be smaller than or equal to 2.');
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets contactClassificationId
     *
     * @return string|null
     */
    public function getContactClassificationId(): ?string
    {
        return $this->container['contactClassificationId'];
    }

    /**
     * Sets contactClassificationId
     *
     * @param string|null $contactClassificationId Optional, Contact classification id or code
     *
     * @return $this
     */
    public function setContactClassificationId(?string $contactClassificationId): static
    {
        if (is_null($contactClassificationId)) {
            array_push($this->openAPINullablesSetToNull, 'contactClassificationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contactClassificationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contactClassificationId'] = $contactClassificationId;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \SynergiTech\Iplicit\Model\ContactCustomerUpdate|null
     */
    public function getCustomer(): ?\SynergiTech\Iplicit\Model\ContactCustomerUpdate
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \SynergiTech\Iplicit\Model\ContactCustomerUpdate|null $customer customer
     *
     * @return $this
     */
    public function setCustomer(?\SynergiTech\Iplicit\Model\ContactCustomerUpdate $customer): static
    {
        if (is_null($customer)) {
            throw new InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \SynergiTech\Iplicit\Model\ContactSupplierUpdate|null
     */
    public function getSupplier(): ?\SynergiTech\Iplicit\Model\ContactSupplierUpdate
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \SynergiTech\Iplicit\Model\ContactSupplierUpdate|null $supplier supplier
     *
     * @return $this
     */
    public function setSupplier(?\SynergiTech\Iplicit\Model\ContactSupplierUpdate $supplier): static
    {
        if (is_null($supplier)) {
            throw new InvalidArgumentException('non-nullable supplier cannot be null');
        }
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return \SynergiTech\Iplicit\Model\ContactResourceUpdate|null
     */
    public function getResource(): ?\SynergiTech\Iplicit\Model\ContactResourceUpdate
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param \SynergiTech\Iplicit\Model\ContactResourceUpdate|null $resource resource
     *
     * @return $this
     */
    public function setResource(?\SynergiTech\Iplicit\Model\ContactResourceUpdate $resource): static
    {
        if (is_null($resource)) {
            throw new InvalidArgumentException('non-nullable resource cannot be null');
        }
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \SynergiTech\Iplicit\Model\ContactCreate|null
     */
    public function getContact(): ?\SynergiTech\Iplicit\Model\ContactCreate
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SynergiTech\Iplicit\Model\ContactCreate|null $contact contact
     *
     * @return $this
     */
    public function setContact(?\SynergiTech\Iplicit\Model\ContactCreate $contact): static
    {
        if (is_null($contact)) {
            throw new InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \SynergiTech\Iplicit\Model\ContactCreate[]|null
     */
    public function getContacts(): ?array
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \SynergiTech\Iplicit\Model\ContactCreate[]|null $contacts Optional additional related people and their contact details
     *
     * @return $this
     */
    public function setContacts(?array $contacts): static
    {
        if (is_null($contacts)) {
            array_push($this->openAPINullablesSetToNull, 'contacts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contacts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets bankDetails
     *
     * @return \SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable[]|null
     */
    public function getBankDetails(): ?array
    {
        return $this->container['bankDetails'];
    }

    /**
     * Sets bankDetails
     *
     * @param \SynergiTech\Iplicit\Model\ContactBankDetailsUpdateable[]|null $bankDetails Bank details
     *
     * @return $this
     */
    public function setBankDetails(?array $bankDetails): static
    {
        if (is_null($bankDetails)) {
            array_push($this->openAPINullablesSetToNull, 'bankDetails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankDetails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bankDetails'] = $bankDetails;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


