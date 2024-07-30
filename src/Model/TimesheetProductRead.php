<?php
/**
 * TimesheetProductRead
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
 * TimesheetProductRead Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TimesheetProductRead implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TimesheetProductRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'productId' => 'string',
        'contactAccountId' => 'string',
        'dateFrom' => '\DateTime',
        'dateTo' => '\DateTime',
        'costRate' => 'float',
        'rechargeRate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productId' => 'uuid',
        'contactAccountId' => 'uuid',
        'dateFrom' => 'date-time',
        'dateTo' => 'date-time',
        'costRate' => 'double',
        'rechargeRate' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'productId' => true,
        'contactAccountId' => true,
        'dateFrom' => true,
        'dateTo' => true,
        'costRate' => true,
        'rechargeRate' => true
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
        'productId' => 'productId',
        'contactAccountId' => 'contactAccountId',
        'dateFrom' => 'dateFrom',
        'dateTo' => 'dateTo',
        'costRate' => 'costRate',
        'rechargeRate' => 'rechargeRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'productId' => 'setProductId',
        'contactAccountId' => 'setContactAccountId',
        'dateFrom' => 'setDateFrom',
        'dateTo' => 'setDateTo',
        'costRate' => 'setCostRate',
        'rechargeRate' => 'setRechargeRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'productId' => 'getProductId',
        'contactAccountId' => 'getContactAccountId',
        'dateFrom' => 'getDateFrom',
        'dateTo' => 'getDateTo',
        'costRate' => 'getCostRate',
        'rechargeRate' => 'getRechargeRate'
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
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('contactAccountId', $data ?? [], null);
        $this->setIfExists('dateFrom', $data ?? [], null);
        $this->setIfExists('dateTo', $data ?? [], null);
        $this->setIfExists('costRate', $data ?? [], null);
        $this->setIfExists('rechargeRate', $data ?? [], null);
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
     * Gets productId
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string|null $productId Timesheet product id
     *
     * @return $this
     */
    public function setProductId(?string $productId): static
    {
        if (is_null($productId)) {
            array_push($this->openAPINullablesSetToNull, 'productId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('productId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets contactAccountId
     *
     * @return string|null
     */
    public function getContactAccountId(): ?string
    {
        return $this->container['contactAccountId'];
    }

    /**
     * Sets contactAccountId
     *
     * @param string|null $contactAccountId Timesheet contact account id
     *
     * @return $this
     */
    public function setContactAccountId(?string $contactAccountId): static
    {
        if (is_null($contactAccountId)) {
            array_push($this->openAPINullablesSetToNull, 'contactAccountId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contactAccountId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contactAccountId'] = $contactAccountId;

        return $this;
    }

    /**
     * Gets dateFrom
     *
     * @return \DateTime|null
     */
    public function getDateFrom(): ?\DateTime
    {
        return $this->container['dateFrom'];
    }

    /**
     * Sets dateFrom
     *
     * @param \DateTime|null $dateFrom Timesheet from date
     *
     * @return $this
     */
    public function setDateFrom(?\DateTime $dateFrom): static
    {
        if (is_null($dateFrom)) {
            array_push($this->openAPINullablesSetToNull, 'dateFrom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateFrom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dateFrom'] = $dateFrom;

        return $this;
    }

    /**
     * Gets dateTo
     *
     * @return \DateTime|null
     */
    public function getDateTo(): ?\DateTime
    {
        return $this->container['dateTo'];
    }

    /**
     * Sets dateTo
     *
     * @param \DateTime|null $dateTo Timesheet to date
     *
     * @return $this
     */
    public function setDateTo(?\DateTime $dateTo): static
    {
        if (is_null($dateTo)) {
            array_push($this->openAPINullablesSetToNull, 'dateTo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateTo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dateTo'] = $dateTo;

        return $this;
    }

    /**
     * Gets costRate
     *
     * @return float|null
     */
    public function getCostRate(): ?float
    {
        return $this->container['costRate'];
    }

    /**
     * Sets costRate
     *
     * @param float|null $costRate Timesheet cost rate
     *
     * @return $this
     */
    public function setCostRate(?float $costRate): static
    {
        if (is_null($costRate)) {
            array_push($this->openAPINullablesSetToNull, 'costRate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('costRate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['costRate'] = $costRate;

        return $this;
    }

    /**
     * Gets rechargeRate
     *
     * @return float|null
     */
    public function getRechargeRate(): ?float
    {
        return $this->container['rechargeRate'];
    }

    /**
     * Sets rechargeRate
     *
     * @param float|null $rechargeRate Timesheet recharge rate
     *
     * @return $this
     */
    public function setRechargeRate(?float $rechargeRate): static
    {
        if (is_null($rechargeRate)) {
            array_push($this->openAPINullablesSetToNull, 'rechargeRate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rechargeRate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rechargeRate'] = $rechargeRate;

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

