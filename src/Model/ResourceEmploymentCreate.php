<?php
/**
 * ResourceEmploymentCreate
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
 * ResourceEmploymentCreate Class Doc Comment
 *
 * @package  SynergiTech\Iplicit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ResourceEmploymentCreate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ResourceEmploymentCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'dateFrom' => '\DateTime',
        'dateTo' => '\DateTime',
        'legalEntityId' => 'string',
        'employmentTypeId' => 'string',
        'jobTitle' => 'string',
        'jobGrade' => 'string',
        'paymentFrequencyId' => 'string',
        'previousEmployer' => 'string',
        'terminationNoticeDays' => 'int',
        'excludeFromIntermediaryReport' => 'bool',
        'externalReference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'dateFrom' => 'date-time',
        'dateTo' => 'date-time',
        'legalEntityId' => null,
        'employmentTypeId' => null,
        'jobTitle' => null,
        'jobGrade' => null,
        'paymentFrequencyId' => null,
        'previousEmployer' => null,
        'terminationNoticeDays' => 'int32',
        'excludeFromIntermediaryReport' => null,
        'externalReference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'dateFrom' => true,
        'dateTo' => true,
        'legalEntityId' => true,
        'employmentTypeId' => true,
        'jobTitle' => true,
        'jobGrade' => true,
        'paymentFrequencyId' => true,
        'previousEmployer' => true,
        'terminationNoticeDays' => true,
        'excludeFromIntermediaryReport' => true,
        'externalReference' => true
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
        'dateFrom' => 'dateFrom',
        'dateTo' => 'dateTo',
        'legalEntityId' => 'legalEntityId',
        'employmentTypeId' => 'employmentTypeId',
        'jobTitle' => 'jobTitle',
        'jobGrade' => 'jobGrade',
        'paymentFrequencyId' => 'paymentFrequencyId',
        'previousEmployer' => 'previousEmployer',
        'terminationNoticeDays' => 'terminationNoticeDays',
        'excludeFromIntermediaryReport' => 'excludeFromIntermediaryReport',
        'externalReference' => 'externalReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'dateFrom' => 'setDateFrom',
        'dateTo' => 'setDateTo',
        'legalEntityId' => 'setLegalEntityId',
        'employmentTypeId' => 'setEmploymentTypeId',
        'jobTitle' => 'setJobTitle',
        'jobGrade' => 'setJobGrade',
        'paymentFrequencyId' => 'setPaymentFrequencyId',
        'previousEmployer' => 'setPreviousEmployer',
        'terminationNoticeDays' => 'setTerminationNoticeDays',
        'excludeFromIntermediaryReport' => 'setExcludeFromIntermediaryReport',
        'externalReference' => 'setExternalReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'dateFrom' => 'getDateFrom',
        'dateTo' => 'getDateTo',
        'legalEntityId' => 'getLegalEntityId',
        'employmentTypeId' => 'getEmploymentTypeId',
        'jobTitle' => 'getJobTitle',
        'jobGrade' => 'getJobGrade',
        'paymentFrequencyId' => 'getPaymentFrequencyId',
        'previousEmployer' => 'getPreviousEmployer',
        'terminationNoticeDays' => 'getTerminationNoticeDays',
        'excludeFromIntermediaryReport' => 'getExcludeFromIntermediaryReport',
        'externalReference' => 'getExternalReference'
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
        $this->setIfExists('dateFrom', $data ?? [], null);
        $this->setIfExists('dateTo', $data ?? [], null);
        $this->setIfExists('legalEntityId', $data ?? [], null);
        $this->setIfExists('employmentTypeId', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('jobGrade', $data ?? [], null);
        $this->setIfExists('paymentFrequencyId', $data ?? [], null);
        $this->setIfExists('previousEmployer', $data ?? [], null);
        $this->setIfExists('terminationNoticeDays', $data ?? [], null);
        $this->setIfExists('excludeFromIntermediaryReport', $data ?? [], null);
        $this->setIfExists('externalReference', $data ?? [], null);
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

        if (!is_null($this->container['jobTitle']) && (mb_strlen($this->container['jobTitle']) > 50)) {
            $invalidProperties[] = "invalid value for 'jobTitle', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['jobGrade']) && (mb_strlen($this->container['jobGrade']) > 50)) {
            $invalidProperties[] = "invalid value for 'jobGrade', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['externalReference']) && (mb_strlen($this->container['externalReference']) > 50)) {
            $invalidProperties[] = "invalid value for 'externalReference', the character length must be smaller than or equal to 50.";
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
     * @param \DateTime|null $dateFrom Resource employment from date
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
     * @param \DateTime|null $dateTo Resource employment to date
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
     * @param string|null $legalEntityId Resource employment legal entity id or code
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
     * Gets employmentTypeId
     *
     * @return string|null
     */
    public function getEmploymentTypeId(): ?string
    {
        return $this->container['employmentTypeId'];
    }

    /**
     * Sets employmentTypeId
     *
     * @param string|null $employmentTypeId Resource employment type id or code
     *
     * @return $this
     */
    public function setEmploymentTypeId(?string $employmentTypeId): static
    {
        if (is_null($employmentTypeId)) {
            array_push($this->openAPINullablesSetToNull, 'employmentTypeId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employmentTypeId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employmentTypeId'] = $employmentTypeId;

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
     * @param string|null $jobTitle Resource employment job title
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
        if (!is_null($jobTitle) && (mb_strlen($jobTitle) > 50)) {
            throw new InvalidArgumentException('invalid length for $jobTitle when calling ResourceEmploymentCreate., must be smaller than or equal to 50.');
        }

        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets jobGrade
     *
     * @return string|null
     */
    public function getJobGrade(): ?string
    {
        return $this->container['jobGrade'];
    }

    /**
     * Sets jobGrade
     *
     * @param string|null $jobGrade Resource employment job grade
     *
     * @return $this
     */
    public function setJobGrade(?string $jobGrade): static
    {
        if (is_null($jobGrade)) {
            array_push($this->openAPINullablesSetToNull, 'jobGrade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobGrade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($jobGrade) && (mb_strlen($jobGrade) > 50)) {
            throw new InvalidArgumentException('invalid length for $jobGrade when calling ResourceEmploymentCreate., must be smaller than or equal to 50.');
        }

        $this->container['jobGrade'] = $jobGrade;

        return $this;
    }

    /**
     * Gets paymentFrequencyId
     *
     * @return string|null
     */
    public function getPaymentFrequencyId(): ?string
    {
        return $this->container['paymentFrequencyId'];
    }

    /**
     * Sets paymentFrequencyId
     *
     * @param string|null $paymentFrequencyId Resource employment payment frequency id or code
     *
     * @return $this
     */
    public function setPaymentFrequencyId(?string $paymentFrequencyId): static
    {
        if (is_null($paymentFrequencyId)) {
            array_push($this->openAPINullablesSetToNull, 'paymentFrequencyId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentFrequencyId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paymentFrequencyId'] = $paymentFrequencyId;

        return $this;
    }

    /**
     * Gets previousEmployer
     *
     * @return string|null
     */
    public function getPreviousEmployer(): ?string
    {
        return $this->container['previousEmployer'];
    }

    /**
     * Sets previousEmployer
     *
     * @param string|null $previousEmployer Resource employment previous employer
     *
     * @return $this
     */
    public function setPreviousEmployer(?string $previousEmployer): static
    {
        if (is_null($previousEmployer)) {
            array_push($this->openAPINullablesSetToNull, 'previousEmployer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('previousEmployer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['previousEmployer'] = $previousEmployer;

        return $this;
    }

    /**
     * Gets terminationNoticeDays
     *
     * @return int|null
     */
    public function getTerminationNoticeDays(): ?int
    {
        return $this->container['terminationNoticeDays'];
    }

    /**
     * Sets terminationNoticeDays
     *
     * @param int|null $terminationNoticeDays Resource employment termination notice days
     *
     * @return $this
     */
    public function setTerminationNoticeDays(?int $terminationNoticeDays): static
    {
        if (is_null($terminationNoticeDays)) {
            array_push($this->openAPINullablesSetToNull, 'terminationNoticeDays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('terminationNoticeDays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['terminationNoticeDays'] = $terminationNoticeDays;

        return $this;
    }

    /**
     * Gets excludeFromIntermediaryReport
     *
     * @return bool|null
     */
    public function getExcludeFromIntermediaryReport(): ?bool
    {
        return $this->container['excludeFromIntermediaryReport'];
    }

    /**
     * Sets excludeFromIntermediaryReport
     *
     * @param bool|null $excludeFromIntermediaryReport Resource employment exclude from intermediary report, default *false*
     *
     * @return $this
     */
    public function setExcludeFromIntermediaryReport(?bool $excludeFromIntermediaryReport): static
    {
        if (is_null($excludeFromIntermediaryReport)) {
            array_push($this->openAPINullablesSetToNull, 'excludeFromIntermediaryReport');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('excludeFromIntermediaryReport', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['excludeFromIntermediaryReport'] = $excludeFromIntermediaryReport;

        return $this;
    }

    /**
     * Gets externalReference
     *
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->container['externalReference'];
    }

    /**
     * Sets externalReference
     *
     * @param string|null $externalReference Resource employment external reference
     *
     * @return $this
     */
    public function setExternalReference(?string $externalReference): static
    {
        if (is_null($externalReference)) {
            array_push($this->openAPINullablesSetToNull, 'externalReference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('externalReference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($externalReference) && (mb_strlen($externalReference) > 50)) {
            throw new InvalidArgumentException('invalid length for $externalReference when calling ResourceEmploymentCreate., must be smaller than or equal to 50.');
        }

        $this->container['externalReference'] = $externalReference;

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

