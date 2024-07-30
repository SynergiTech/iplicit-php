<?php
/**
 * DepartmentRead
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
 * DepartmentRead Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DepartmentRead implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DepartmentRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'description' => 'string',
        'legacyRef' => 'string',
        'legalEntityId' => 'string',
        'managerResourceId' => 'string',
        'parentDepartmentId' => 'string',
        'lastModified' => '\DateTime',
        'lastModifiedBy' => 'string',
        'isActive' => 'bool',
        'resources' => '\SynergiTech\Iplicit\Model\ResourceSummary[]',
        'subDepartments' => '\SynergiTech\Iplicit\Model\DepartmentSummary[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'code' => null,
        'description' => null,
        'legacyRef' => null,
        'legalEntityId' => 'uuid',
        'managerResourceId' => 'uuid',
        'parentDepartmentId' => 'uuid',
        'lastModified' => 'date-time',
        'lastModifiedBy' => null,
        'isActive' => null,
        'resources' => null,
        'subDepartments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'code' => true,
        'description' => true,
        'legacyRef' => true,
        'legalEntityId' => true,
        'managerResourceId' => true,
        'parentDepartmentId' => true,
        'lastModified' => true,
        'lastModifiedBy' => true,
        'isActive' => false,
        'resources' => true,
        'subDepartments' => true
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
        'code' => 'code',
        'description' => 'description',
        'legacyRef' => 'legacyRef',
        'legalEntityId' => 'legalEntityId',
        'managerResourceId' => 'managerResourceId',
        'parentDepartmentId' => 'parentDepartmentId',
        'lastModified' => 'lastModified',
        'lastModifiedBy' => 'lastModifiedBy',
        'isActive' => 'isActive',
        'resources' => 'resources',
        'subDepartments' => 'subDepartments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'description' => 'setDescription',
        'legacyRef' => 'setLegacyRef',
        'legalEntityId' => 'setLegalEntityId',
        'managerResourceId' => 'setManagerResourceId',
        'parentDepartmentId' => 'setParentDepartmentId',
        'lastModified' => 'setLastModified',
        'lastModifiedBy' => 'setLastModifiedBy',
        'isActive' => 'setIsActive',
        'resources' => 'setResources',
        'subDepartments' => 'setSubDepartments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'description' => 'getDescription',
        'legacyRef' => 'getLegacyRef',
        'legalEntityId' => 'getLegalEntityId',
        'managerResourceId' => 'getManagerResourceId',
        'parentDepartmentId' => 'getParentDepartmentId',
        'lastModified' => 'getLastModified',
        'lastModifiedBy' => 'getLastModifiedBy',
        'isActive' => 'getIsActive',
        'resources' => 'getResources',
        'subDepartments' => 'getSubDepartments'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('legacyRef', $data ?? [], null);
        $this->setIfExists('legalEntityId', $data ?? [], null);
        $this->setIfExists('managerResourceId', $data ?? [], null);
        $this->setIfExists('parentDepartmentId', $data ?? [], null);
        $this->setIfExists('lastModified', $data ?? [], null);
        $this->setIfExists('lastModifiedBy', $data ?? [], null);
        $this->setIfExists('isActive', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('subDepartments', $data ?? [], null);
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
     * @param string|null $id Unique id for the department
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Unique code for the department
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code'] = $code;

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
     * @param string|null $description Description of the department
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
        $this->container['legacyRef'] = $legacyRef;

        return $this;
    }

    /**
     * Gets legalEntityId
     *
     * @return string|null
     */
    public function getLegalEntityId(): ?string
    {
        return $this->container['legalEntityId'];
    }

    /**
     * Sets legalEntityId
     *
     * @param string|null $legalEntityId When specified, the use of the department is restricted to the specified Legal Entity.
     *
     * @return $this
     */
    public function setLegalEntityId(?string $legalEntityId): static
    {
        if (is_null($legalEntityId)) {
            array_push($this->openAPINullablesSetToNull, 'legalEntityId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('legalEntityId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['legalEntityId'] = $legalEntityId;

        return $this;
    }

    /**
     * Gets managerResourceId
     *
     * @return string|null
     */
    public function getManagerResourceId(): ?string
    {
        return $this->container['managerResourceId'];
    }

    /**
     * Sets managerResourceId
     *
     * @param string|null $managerResourceId The resource who is identified as the department manager.
     *
     * @return $this
     */
    public function setManagerResourceId(?string $managerResourceId): static
    {
        if (is_null($managerResourceId)) {
            array_push($this->openAPINullablesSetToNull, 'managerResourceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('managerResourceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['managerResourceId'] = $managerResourceId;

        return $this;
    }

    /**
     * Gets parentDepartmentId
     *
     * @return string|null
     */
    public function getParentDepartmentId(): ?string
    {
        return $this->container['parentDepartmentId'];
    }

    /**
     * Sets parentDepartmentId
     *
     * @param string|null $parentDepartmentId The Department parent (where specified) can be useful for analytics.
     *
     * @return $this
     */
    public function setParentDepartmentId(?string $parentDepartmentId): static
    {
        if (is_null($parentDepartmentId)) {
            array_push($this->openAPINullablesSetToNull, 'parentDepartmentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parentDepartmentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parentDepartmentId'] = $parentDepartmentId;

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
     * @param \DateTime|null $lastModified lastModified
     *
     * @return $this
     */
    public function setLastModified(?\DateTime $lastModified): static
    {
        if (is_null($lastModified)) {
            array_push($this->openAPINullablesSetToNull, 'lastModified');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastModified', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $lastModifiedBy lastModifiedBy
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
     * @param bool|null $isActive isActive
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
     * Gets resources
     *
     * @return \SynergiTech\Iplicit\Model\ResourceSummary[]|null
     */
    public function getResources(): ?array
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \SynergiTech\Iplicit\Model\ResourceSummary[]|null $resources Department resources
     *
     * @return $this
     */
    public function setResources(?array $resources): static
    {
        if (is_null($resources)) {
            array_push($this->openAPINullablesSetToNull, 'resources');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resources', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets subDepartments
     *
     * @return \SynergiTech\Iplicit\Model\DepartmentSummary[]|null
     */
    public function getSubDepartments(): ?array
    {
        return $this->container['subDepartments'];
    }

    /**
     * Sets subDepartments
     *
     * @param \SynergiTech\Iplicit\Model\DepartmentSummary[]|null $subDepartments Department sub departments
     *
     * @return $this
     */
    public function setSubDepartments(?array $subDepartments): static
    {
        if (is_null($subDepartments)) {
            array_push($this->openAPINullablesSetToNull, 'subDepartments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subDepartments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subDepartments'] = $subDepartments;

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

