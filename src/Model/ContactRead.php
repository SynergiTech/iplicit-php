<?php
/**
 * ContactRead
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
 * ContactRead Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContactRead implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContactRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'intRef' => 'string',
        'contactType' => 'string',
        'description' => 'string',
        'companyName' => 'string',
        'title' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'jobTitle' => 'string',
        'parentContactId' => 'string',
        'legacyRef' => 'string',
        'isActive' => 'bool',
        'lastModified' => '\DateTime',
        'lastModifiedBy' => 'string',
        'hasNotes' => 'bool',
        'hasAttachments' => 'bool',
        'emails' => '\SynergiTech\Iplicit\Model\ContactEmailRead[]',
        'phones' => '\SynergiTech\Iplicit\Model\ContactPhoneRead[]',
        'addresses' => '\SynergiTech\Iplicit\Model\ContactAddressRead[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'intRef' => null,
        'contactType' => null,
        'description' => null,
        'companyName' => null,
        'title' => null,
        'firstName' => null,
        'middleName' => null,
        'lastName' => null,
        'jobTitle' => null,
        'parentContactId' => 'uuid',
        'legacyRef' => null,
        'isActive' => null,
        'lastModified' => 'date-time',
        'lastModifiedBy' => null,
        'hasNotes' => null,
        'hasAttachments' => null,
        'emails' => null,
        'phones' => null,
        'addresses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'intRef' => true,
        'contactType' => true,
        'description' => true,
        'companyName' => true,
        'title' => true,
        'firstName' => true,
        'middleName' => true,
        'lastName' => true,
        'jobTitle' => true,
        'parentContactId' => true,
        'legacyRef' => true,
        'isActive' => false,
        'lastModified' => false,
        'lastModifiedBy' => true,
        'hasNotes' => false,
        'hasAttachments' => false,
        'emails' => true,
        'phones' => true,
        'addresses' => true
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
        'id' => 'id',
        'intRef' => 'intRef',
        'contactType' => 'contactType',
        'description' => 'description',
        'companyName' => 'companyName',
        'title' => 'title',
        'firstName' => 'firstName',
        'middleName' => 'middleName',
        'lastName' => 'lastName',
        'jobTitle' => 'jobTitle',
        'parentContactId' => 'parentContactId',
        'legacyRef' => 'legacyRef',
        'isActive' => 'isActive',
        'lastModified' => 'lastModified',
        'lastModifiedBy' => 'lastModifiedBy',
        'hasNotes' => 'hasNotes',
        'hasAttachments' => 'hasAttachments',
        'emails' => 'emails',
        'phones' => 'phones',
        'addresses' => 'addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'intRef' => 'setIntRef',
        'contactType' => 'setContactType',
        'description' => 'setDescription',
        'companyName' => 'setCompanyName',
        'title' => 'setTitle',
        'firstName' => 'setFirstName',
        'middleName' => 'setMiddleName',
        'lastName' => 'setLastName',
        'jobTitle' => 'setJobTitle',
        'parentContactId' => 'setParentContactId',
        'legacyRef' => 'setLegacyRef',
        'isActive' => 'setIsActive',
        'lastModified' => 'setLastModified',
        'lastModifiedBy' => 'setLastModifiedBy',
        'hasNotes' => 'setHasNotes',
        'hasAttachments' => 'setHasAttachments',
        'emails' => 'setEmails',
        'phones' => 'setPhones',
        'addresses' => 'setAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'intRef' => 'getIntRef',
        'contactType' => 'getContactType',
        'description' => 'getDescription',
        'companyName' => 'getCompanyName',
        'title' => 'getTitle',
        'firstName' => 'getFirstName',
        'middleName' => 'getMiddleName',
        'lastName' => 'getLastName',
        'jobTitle' => 'getJobTitle',
        'parentContactId' => 'getParentContactId',
        'legacyRef' => 'getLegacyRef',
        'isActive' => 'getIsActive',
        'lastModified' => 'getLastModified',
        'lastModifiedBy' => 'getLastModifiedBy',
        'hasNotes' => 'getHasNotes',
        'hasAttachments' => 'getHasAttachments',
        'emails' => 'getEmails',
        'phones' => 'getPhones',
        'addresses' => 'getAddresses'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('intRef', $data ?? [], null);
        $this->setIfExists('contactType', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('companyName', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('middleName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('parentContactId', $data ?? [], null);
        $this->setIfExists('legacyRef', $data ?? [], null);
        $this->setIfExists('isActive', $data ?? [], null);
        $this->setIfExists('lastModified', $data ?? [], null);
        $this->setIfExists('lastModifiedBy', $data ?? [], null);
        $this->setIfExists('hasNotes', $data ?? [], null);
        $this->setIfExists('hasAttachments', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Contact id
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
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
        $this->container['intRef'] = $intRef;

        return $this;
    }

    /**
     * Gets contactType
     *
     * @return string|null
     */
    public function getContactType(): ?string
    {
        return $this->container['contactType'];
    }

    /**
     * Sets contactType
     *
     * @param string|null $contactType Contact type: `C`: company, `P`: person
     *
     * @return $this
     */
    public function setContactType(?string $contactType): static
    {
        if (is_null($contactType)) {
            array_push($this->openAPINullablesSetToNull, 'contactType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contactType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contactType'] = $contactType;

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
     * @param string|null $description Contact description
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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName Company name. (Applicable to both Company and Person contact types)
     *
     * @return $this
     */
    public function setCompanyName(?string $companyName): static
    {
        if (is_null($companyName)) {
            array_push($this->openAPINullablesSetToNull, 'companyName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('companyName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Person title. (Applicable to Person contact types only).
     *
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName Person first name. (Applicable to Person contact types only).
     *
     * @return $this
     */
    public function setFirstName(?string $firstName): static
    {
        if (is_null($firstName)) {
            array_push($this->openAPINullablesSetToNull, 'firstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets middleName
     *
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     *
     * @param string|null $middleName Person middle name. (Applicable to Person contact types only).
     *
     * @return $this
     */
    public function setMiddleName(?string $middleName): static
    {
        if (is_null($middleName)) {
            array_push($this->openAPINullablesSetToNull, 'middleName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('middleName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName Person last name. (Applicable to Person contact types only).
     *
     * @return $this
     */
    public function setLastName(?string $lastName): static
    {
        if (is_null($lastName)) {
            array_push($this->openAPINullablesSetToNull, 'lastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string|null $jobTitle Person job title. (Applicable to Person contact types only).
     *
     * @return $this
     */
    public function setJobTitle(?string $jobTitle): static
    {
        if (is_null($jobTitle)) {
            array_push($this->openAPINullablesSetToNull, 'jobTitle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobTitle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets parentContactId
     *
     * @return string|null
     */
    public function getParentContactId(): ?string
    {
        return $this->container['parentContactId'];
    }

    /**
     * Sets parentContactId
     *
     * @param string|null $parentContactId parentContactId
     *
     * @return $this
     */
    public function setParentContactId(?string $parentContactId): static
    {
        if (is_null($parentContactId)) {
            array_push($this->openAPINullablesSetToNull, 'parentContactId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parentContactId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parentContactId'] = $parentContactId;

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
     * @param string|null $legacyRef Alternative / legacy reference code
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
        $this->container['legacyRef'] = $legacyRef;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool|null $isActive Active or locked (soft delete)
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive): static
    {
        if (is_null($isActive)) {
            throw new InvalidArgumentException('non-nullable isActive cannot be null');
        }
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets lastModified
     *
     * @return \DateTime|null
     */
    public function getLastModified(): ?\DateTime
    {
        return $this->container['lastModified'];
    }

    /**
     * Sets lastModified
     *
     * @param \DateTime|null $lastModified The date and time this item has been last modified
     *
     * @return $this
     */
    public function setLastModified(?\DateTime $lastModified): static
    {
        if (is_null($lastModified)) {
            throw new InvalidArgumentException('non-nullable lastModified cannot be null');
        }
        $this->container['lastModified'] = $lastModified;

        return $this;
    }

    /**
     * Gets lastModifiedBy
     *
     * @return string|null
     */
    public function getLastModifiedBy(): ?string
    {
        return $this->container['lastModifiedBy'];
    }

    /**
     * Sets lastModifiedBy
     *
     * @param string|null $lastModifiedBy The user that last modified this item. See `UserAccount` catalog.
     *
     * @return $this
     */
    public function setLastModifiedBy(?string $lastModifiedBy): static
    {
        if (is_null($lastModifiedBy)) {
            array_push($this->openAPINullablesSetToNull, 'lastModifiedBy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastModifiedBy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastModifiedBy'] = $lastModifiedBy;

        return $this;
    }

    /**
     * Gets hasNotes
     *
     * @return bool|null
     */
    public function getHasNotes(): ?bool
    {
        return $this->container['hasNotes'];
    }

    /**
     * Sets hasNotes
     *
     * @param bool|null $hasNotes Flag indicating whether there are any notes attached
     *
     * @return $this
     */
    public function setHasNotes(?bool $hasNotes): static
    {
        if (is_null($hasNotes)) {
            throw new InvalidArgumentException('non-nullable hasNotes cannot be null');
        }
        $this->container['hasNotes'] = $hasNotes;

        return $this;
    }

    /**
     * Gets hasAttachments
     *
     * @return bool|null
     */
    public function getHasAttachments(): ?bool
    {
        return $this->container['hasAttachments'];
    }

    /**
     * Sets hasAttachments
     *
     * @param bool|null $hasAttachments Flag indicating whether there are any documents attached
     *
     * @return $this
     */
    public function setHasAttachments(?bool $hasAttachments): static
    {
        if (is_null($hasAttachments)) {
            throw new InvalidArgumentException('non-nullable hasAttachments cannot be null');
        }
        $this->container['hasAttachments'] = $hasAttachments;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \SynergiTech\Iplicit\Model\ContactEmailRead[]|null
     */
    public function getEmails(): ?array
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \SynergiTech\Iplicit\Model\ContactEmailRead[]|null $emails emails
     *
     * @return $this
     */
    public function setEmails(?array $emails): static
    {
        if (is_null($emails)) {
            array_push($this->openAPINullablesSetToNull, 'emails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \SynergiTech\Iplicit\Model\ContactPhoneRead[]|null
     */
    public function getPhones(): ?array
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \SynergiTech\Iplicit\Model\ContactPhoneRead[]|null $phones phones
     *
     * @return $this
     */
    public function setPhones(?array $phones): static
    {
        if (is_null($phones)) {
            array_push($this->openAPINullablesSetToNull, 'phones');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phones', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \SynergiTech\Iplicit\Model\ContactAddressRead[]|null
     */
    public function getAddresses(): ?array
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \SynergiTech\Iplicit\Model\ContactAddressRead[]|null $addresses addresses
     *
     * @return $this
     */
    public function setAddresses(?array $addresses): static
    {
        if (is_null($addresses)) {
            array_push($this->openAPINullablesSetToNull, 'addresses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('addresses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['addresses'] = $addresses;

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


