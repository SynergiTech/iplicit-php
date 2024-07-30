<?php
/**
 * DocDetailDeferredCreateUpdate
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
 * DocDetailDeferredCreateUpdate Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DocDetailDeferredCreateUpdate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DocDetailDeferredCreateUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'profileId' => 'string',
        'dateFrom' => '\DateTime',
        'dateTo' => '\DateTime',
        'periods' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'profileId' => null,
        'dateFrom' => 'date',
        'dateTo' => 'date',
        'periods' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'profileId' => false,
        'dateFrom' => false,
        'dateTo' => false,
        'periods' => false
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
        'profileId' => 'profileId',
        'dateFrom' => 'dateFrom',
        'dateTo' => 'dateTo',
        'periods' => 'periods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'profileId' => 'setProfileId',
        'dateFrom' => 'setDateFrom',
        'dateTo' => 'setDateTo',
        'periods' => 'setPeriods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'profileId' => 'getProfileId',
        'dateFrom' => 'getDateFrom',
        'dateTo' => 'getDateTo',
        'periods' => 'getPeriods'
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
        $this->setIfExists('profileId', $data ?? [], null);
        $this->setIfExists('dateFrom', $data ?? [], null);
        $this->setIfExists('dateTo', $data ?? [], null);
        $this->setIfExists('periods', $data ?? [], null);
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

        if ($this->container['profileId'] === null) {
            $invalidProperties[] = "'profileId' can't be null";
        }
        if ((mb_strlen($this->container['profileId']) > 50)) {
            $invalidProperties[] = "invalid value for 'profileId', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['profileId']) < 1)) {
            $invalidProperties[] = "invalid value for 'profileId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dateFrom'] === null) {
            $invalidProperties[] = "'dateFrom' can't be null";
        }
        if ($this->container['dateTo'] === null) {
            $invalidProperties[] = "'dateTo' can't be null";
        }
        if ($this->container['periods'] === null) {
            $invalidProperties[] = "'periods' can't be null";
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
     * Gets profileId
     *
     * @return string
     */
    public function getProfileId(): string
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param string $profileId The document detail deferred profile id. Accepts Id or Code
     *
     * @return $this
     */
    public function setProfileId(string $profileId): static
    {
        if (is_null($profileId)) {
            throw new InvalidArgumentException('non-nullable profileId cannot be null');
        }
        if ((mb_strlen($profileId) > 50)) {
            throw new InvalidArgumentException('invalid length for $profileId when calling DocDetailDeferredCreateUpdate., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($profileId) < 1)) {
            throw new InvalidArgumentException('invalid length for $profileId when calling DocDetailDeferredCreateUpdate., must be bigger than or equal to 1.');
        }

        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime
    {
        return $this->container['dateFrom'];
    }

    /**
     * Sets dateFrom
     *
     * @param \DateTime $dateFrom The document detail deferred from date
     *
     * @return $this
     */
    public function setDateFrom(\DateTime $dateFrom): static
    {
        if (is_null($dateFrom)) {
            throw new InvalidArgumentException('non-nullable dateFrom cannot be null');
        }
        $this->container['dateFrom'] = $dateFrom;

        return $this;
    }

    /**
     * Gets dateTo
     *
     * @return \DateTime
     */
    public function getDateTo(): \DateTime
    {
        return $this->container['dateTo'];
    }

    /**
     * Sets dateTo
     *
     * @param \DateTime $dateTo The document detail deferred to date
     *
     * @return $this
     */
    public function setDateTo(\DateTime $dateTo): static
    {
        if (is_null($dateTo)) {
            throw new InvalidArgumentException('non-nullable dateTo cannot be null');
        }
        $this->container['dateTo'] = $dateTo;

        return $this;
    }

    /**
     * Gets periods
     *
     * @return int
     */
    public function getPeriods(): int
    {
        return $this->container['periods'];
    }

    /**
     * Sets periods
     *
     * @param int $periods The document detail deferred period
     *
     * @return $this
     */
    public function setPeriods(int $periods): static
    {
        if (is_null($periods)) {
            throw new InvalidArgumentException('non-nullable periods cannot be null');
        }
        $this->container['periods'] = $periods;

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

