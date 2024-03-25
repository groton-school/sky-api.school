<?php
/**
 * Term
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * School
 *
 * This API is used to provide access to school information such as users, academics, admissions, athletics, content, lists, and general school info.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SKY\School\Model;

use ArrayAccess;
use SKY\School\ObjectSerializer;

/**
 * Term Class Doc Comment
 *
 * @category Class
 * @description Term Model
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Term implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Term';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'beginDate' => '\DateTime',
        'description' => 'string',
        'endDate' => '\DateTime',
        'levelDescription' => 'string',
        'levelId' => 'int',
        'offeringType' => 'int',
        'schoolYearLabel' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'beginDate' => 'date-time',
        'description' => null,
        'endDate' => 'date-time',
        'levelDescription' => null,
        'levelId' => 'int32',
        'offeringType' => 'int32',
        'schoolYearLabel' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'beginDate' => true,
        'description' => true,
        'endDate' => true,
        'levelDescription' => true,
        'levelId' => true,
        'offeringType' => true,
        'schoolYearLabel' => true,
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'beginDate' => 'begin_date',
        'description' => 'description',
        'endDate' => 'end_date',
        'levelDescription' => 'level_description',
        'levelId' => 'level_id',
        'offeringType' => 'offering_type',
        'schoolYearLabel' => 'school_year_label',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'beginDate' => 'setBeginDate',
        'description' => 'setDescription',
        'endDate' => 'setEndDate',
        'levelDescription' => 'setLevelDescription',
        'levelId' => 'setLevelId',
        'offeringType' => 'setOfferingType',
        'schoolYearLabel' => 'setSchoolYearLabel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'beginDate' => 'getBeginDate',
        'description' => 'getDescription',
        'endDate' => 'getEndDate',
        'levelDescription' => 'getLevelDescription',
        'levelId' => 'getLevelId',
        'offeringType' => 'getOfferingType',
        'schoolYearLabel' => 'getSchoolYearLabel',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('beginDate', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('levelDescription', $data ?? [], null);
        $this->setIfExists('levelId', $data ?? [], null);
        $this->setIfExists('offeringType', $data ?? [], null);
        $this->setIfExists('schoolYearLabel', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The duration ID for the term
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return \DateTime|null
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param \DateTime|null $beginDate The begin date of the term. Uses <a href=\"https://tools.ietf.org/html/rfc3339\" target=\"_blank\">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
     *
     * @return self
     */
    public function setBeginDate($beginDate)
    {
        if (is_null($beginDate)) {
            array_push($this->openAPINullablesSetToNull, 'beginDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('beginDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description for the term
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate The end date of the term. Uses <a href=\"https://tools.ietf.org/html/rfc3339\" target=\"_blank\">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            array_push($this->openAPINullablesSetToNull, 'endDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets levelDescription
     *
     * @return string|null
     */
    public function getLevelDescription()
    {
        return $this->container['levelDescription'];
    }

    /**
     * Sets levelDescription
     *
     * @param string|null $levelDescription The description of the level for the term
     *
     * @return self
     */
    public function setLevelDescription($levelDescription)
    {
        if (is_null($levelDescription)) {
            array_push($this->openAPINullablesSetToNull, 'levelDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('levelDescription', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['levelDescription'] = $levelDescription;

        return $this;
    }

    /**
     * Gets levelId
     *
     * @return int|null
     */
    public function getLevelId()
    {
        return $this->container['levelId'];
    }

    /**
     * Sets levelId
     *
     * @param int|null $levelId The school level for the term
     *
     * @return self
     */
    public function setLevelId($levelId)
    {
        if (is_null($levelId)) {
            array_push($this->openAPINullablesSetToNull, 'levelId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('levelId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['levelId'] = $levelId;

        return $this;
    }

    /**
     * Gets offeringType
     *
     * @return int|null
     */
    public function getOfferingType()
    {
        return $this->container['offeringType'];
    }

    /**
     * Sets offeringType
     *
     * @param int|null $offeringType The offering type for the term
     *
     * @return self
     */
    public function setOfferingType($offeringType)
    {
        if (is_null($offeringType)) {
            array_push($this->openAPINullablesSetToNull, 'offeringType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offeringType', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offeringType'] = $offeringType;

        return $this;
    }

    /**
     * Gets schoolYearLabel
     *
     * @return string|null
     */
    public function getSchoolYearLabel()
    {
        return $this->container['schoolYearLabel'];
    }

    /**
     * Sets schoolYearLabel
     *
     * @param string|null $schoolYearLabel The label used to identify the range of dates in a school year
     *
     * @return self
     */
    public function setSchoolYearLabel($schoolYearLabel)
    {
        if (is_null($schoolYearLabel)) {
            array_push($this->openAPINullablesSetToNull, 'schoolYearLabel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('schoolYearLabel', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['schoolYearLabel'] = $schoolYearLabel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
