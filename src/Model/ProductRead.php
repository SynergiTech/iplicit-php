<?php
/**
 * ProductRead
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
 * ProductRead Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ProductRead implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProductRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'description' => 'string',
        'productGroupId' => 'string',
        'productType' => 'string',
        'uomId' => 'string',
        'uomGroupId' => 'string',
        'legacyRef' => 'string',
        'purchase' => '\SynergiTech\Iplicit\Model\ProductPurchaseRead',
        'sale' => '\SynergiTech\Iplicit\Model\ProductSaleRead',
        'lastModified' => '\DateTime',
        'lastModifiedBy' => 'string',
        'ext' => 'array<string,mixed>'
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
        'productGroupId' => 'uuid',
        'productType' => null,
        'uomId' => 'uuid',
        'uomGroupId' => 'uuid',
        'legacyRef' => null,
        'purchase' => null,
        'sale' => null,
        'lastModified' => 'date-time',
        'lastModifiedBy' => null,
        'ext' => null
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
        'productGroupId' => false,
        'productType' => true,
        'uomId' => false,
        'uomGroupId' => false,
        'legacyRef' => true,
        'purchase' => false,
        'sale' => false,
        'lastModified' => false,
        'lastModifiedBy' => true,
        'ext' => true
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
        'productGroupId' => 'productGroupId',
        'productType' => 'productType',
        'uomId' => 'uomId',
        'uomGroupId' => 'uomGroupId',
        'legacyRef' => 'legacyRef',
        'purchase' => 'purchase',
        'sale' => 'sale',
        'lastModified' => 'lastModified',
        'lastModifiedBy' => 'lastModifiedBy',
        'ext' => 'ext'
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
        'productGroupId' => 'setProductGroupId',
        'productType' => 'setProductType',
        'uomId' => 'setUomId',
        'uomGroupId' => 'setUomGroupId',
        'legacyRef' => 'setLegacyRef',
        'purchase' => 'setPurchase',
        'sale' => 'setSale',
        'lastModified' => 'setLastModified',
        'lastModifiedBy' => 'setLastModifiedBy',
        'ext' => 'setExt'
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
        'productGroupId' => 'getProductGroupId',
        'productType' => 'getProductType',
        'uomId' => 'getUomId',
        'uomGroupId' => 'getUomGroupId',
        'legacyRef' => 'getLegacyRef',
        'purchase' => 'getPurchase',
        'sale' => 'getSale',
        'lastModified' => 'getLastModified',
        'lastModifiedBy' => 'getLastModifiedBy',
        'ext' => 'getExt'
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
        $this->setIfExists('productGroupId', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('uomId', $data ?? [], null);
        $this->setIfExists('uomGroupId', $data ?? [], null);
        $this->setIfExists('legacyRef', $data ?? [], null);
        $this->setIfExists('purchase', $data ?? [], null);
        $this->setIfExists('sale', $data ?? [], null);
        $this->setIfExists('lastModified', $data ?? [], null);
        $this->setIfExists('lastModifiedBy', $data ?? [], null);
        $this->setIfExists('ext', $data ?? [], null);
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
     * @param string|null $id The product id.
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
     * @param string|null $code The product code.
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
     * @param string|null $description The product description.
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
     * Gets productGroupId
     *
     * @return string|null
     */
    public function getProductGroupId(): ?string
    {
        return $this->container['productGroupId'];
    }

    /**
     * Sets productGroupId
     *
     * @param string|null $productGroupId The product group. See catalog `ProductGroup` for values.
     *
     * @return $this
     */
    public function setProductGroupId(?string $productGroupId): static
    {
        if (is_null($productGroupId)) {
            throw new InvalidArgumentException('non-nullable productGroupId cannot be null');
        }
        $this->container['productGroupId'] = $productGroupId;

        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType The product type for tax purposes: `G`: goods, `S`: services, `O`: other.
     *
     * @return $this
     */
    public function setProductType(?string $productType): static
    {
        if (is_null($productType)) {
            array_push($this->openAPINullablesSetToNull, 'productType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('productType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['productType'] = $productType;

        return $this;
    }

    /**
     * Gets uomId
     *
     * @return string|null
     */
    public function getUomId(): ?string
    {
        return $this->container['uomId'];
    }

    /**
     * Sets uomId
     *
     * @param string|null $uomId Unit of measure id. See catalog `Unit` for values
     *
     * @return $this
     */
    public function setUomId(?string $uomId): static
    {
        if (is_null($uomId)) {
            throw new InvalidArgumentException('non-nullable uomId cannot be null');
        }
        $this->container['uomId'] = $uomId;

        return $this;
    }

    /**
     * Gets uomGroupId
     *
     * @return string|null
     */
    public function getUomGroupId(): ?string
    {
        return $this->container['uomGroupId'];
    }

    /**
     * Sets uomGroupId
     *
     * @param string|null $uomGroupId Unit of measure group id. See catalog `UnitGroup` for values
     *
     * @return $this
     */
    public function setUomGroupId(?string $uomGroupId): static
    {
        if (is_null($uomGroupId)) {
            throw new InvalidArgumentException('non-nullable uomGroupId cannot be null');
        }
        $this->container['uomGroupId'] = $uomGroupId;

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
     * Gets purchase
     *
     * @return \SynergiTech\Iplicit\Model\ProductPurchaseRead|null
     */
    public function getPurchase(): ?\SynergiTech\Iplicit\Model\ProductPurchaseRead
    {
        return $this->container['purchase'];
    }

    /**
     * Sets purchase
     *
     * @param \SynergiTech\Iplicit\Model\ProductPurchaseRead|null $purchase purchase
     *
     * @return $this
     */
    public function setPurchase(?\SynergiTech\Iplicit\Model\ProductPurchaseRead $purchase): static
    {
        if (is_null($purchase)) {
            throw new InvalidArgumentException('non-nullable purchase cannot be null');
        }
        $this->container['purchase'] = $purchase;

        return $this;
    }

    /**
     * Gets sale
     *
     * @return \SynergiTech\Iplicit\Model\ProductSaleRead|null
     */
    public function getSale(): ?\SynergiTech\Iplicit\Model\ProductSaleRead
    {
        return $this->container['sale'];
    }

    /**
     * Sets sale
     *
     * @param \SynergiTech\Iplicit\Model\ProductSaleRead|null $sale sale
     *
     * @return $this
     */
    public function setSale(?\SynergiTech\Iplicit\Model\ProductSaleRead $sale): static
    {
        if (is_null($sale)) {
            throw new InvalidArgumentException('non-nullable sale cannot be null');
        }
        $this->container['sale'] = $sale;

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
     * Gets ext
     *
     * @return array<string,mixed>|null
     */
    public function getExt(): ?array
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param array<string,mixed>|null $ext The product additional fields
     *
     * @return $this
     */
    public function setExt(?array $ext): static
    {
        if (is_null($ext)) {
            array_push($this->openAPINullablesSetToNull, 'ext');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ext', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ext'] = $ext;

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

