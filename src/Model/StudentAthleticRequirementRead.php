<?php
/**
 * StudentAthleticRequirementRead
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
 * StudentAthleticRequirementRead Class Doc Comment
 *
 * @category Class
 * @description Student athletic clearance requirement model
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StudentAthleticRequirementRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StudentAthleticRequirementRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'athletic_requirement_type' => '\SKY\School\Model\AthleticRequirementType',
        'school_year' => '\SKY\School\Model\IdDescriptorField',
        'season' => '\SKY\School\Model\IdDescriptorField',
        'is_complete' => 'bool',
        'athletic_requirement_date' => '\DateTime',
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
        'athletic_requirement_type' => null,
        'school_year' => null,
        'season' => null,
        'is_complete' => null,
        'athletic_requirement_date' => 'date-time',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'athletic_requirement_type' => false,
        'school_year' => false,
        'season' => false,
        'is_complete' => true,
        'athletic_requirement_date' => true,
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
        'athletic_requirement_type' => 'athletic_requirement_type',
        'school_year' => 'school_year',
        'season' => 'season',
        'is_complete' => 'is_complete',
        'athletic_requirement_date' => 'athletic_requirement_date',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'athletic_requirement_type' => 'setAthleticRequirementType',
        'school_year' => 'setSchoolYear',
        'season' => 'setSeason',
        'is_complete' => 'setIsComplete',
        'athletic_requirement_date' => 'setAthleticRequirementDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'athletic_requirement_type' => 'getAthleticRequirementType',
        'school_year' => 'getSchoolYear',
        'season' => 'getSeason',
        'is_complete' => 'getIsComplete',
        'athletic_requirement_date' => 'getAthleticRequirementDate',
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
        $this->setIfExists('athletic_requirement_type', $data ?? [], null);
        $this->setIfExists('school_year', $data ?? [], null);
        $this->setIfExists('season', $data ?? [], null);
        $this->setIfExists('is_complete', $data ?? [], null);
        $this->setIfExists('athletic_requirement_date', $data ?? [], null);
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
     * @param int|null $id The ID of student athletic requirement
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets athletic_requirement_type
     *
     * @return \SKY\School\Model\AthleticRequirementType|null
     */
    public function getAthleticRequirementType()
    {
        return $this->container['athletic_requirement_type'];
    }

    /**
     * Sets athletic_requirement_type
     *
     * @param \SKY\School\Model\AthleticRequirementType|null $athletic_requirement_type athletic_requirement_type
     *
     * @return self
     */
    public function setAthleticRequirementType($athletic_requirement_type)
    {
        if (is_null($athletic_requirement_type)) {
            throw new \InvalidArgumentException('non-nullable athletic_requirement_type cannot be null');
        }
        $this->container['athletic_requirement_type'] = $athletic_requirement_type;

        return $this;
    }

    /**
     * Gets school_year
     *
     * @return \SKY\School\Model\IdDescriptorField|null
     */
    public function getSchoolYear()
    {
        return $this->container['school_year'];
    }

    /**
     * Sets school_year
     *
     * @param \SKY\School\Model\IdDescriptorField|null $school_year school_year
     *
     * @return self
     */
    public function setSchoolYear($school_year)
    {
        if (is_null($school_year)) {
            throw new \InvalidArgumentException('non-nullable school_year cannot be null');
        }
        $this->container['school_year'] = $school_year;

        return $this;
    }

    /**
     * Gets season
     *
     * @return \SKY\School\Model\IdDescriptorField|null
     */
    public function getSeason()
    {
        return $this->container['season'];
    }

    /**
     * Sets season
     *
     * @param \SKY\School\Model\IdDescriptorField|null $season season
     *
     * @return self
     */
    public function setSeason($season)
    {
        if (is_null($season)) {
            throw new \InvalidArgumentException('non-nullable season cannot be null');
        }
        $this->container['season'] = $season;

        return $this;
    }

    /**
     * Gets is_complete
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->container['is_complete'];
    }

    /**
     * Sets is_complete
     *
     * @param bool|null $is_complete Returns true if athletic requirement exists for the student
     *
     * @return self
     */
    public function setIsComplete($is_complete)
    {
        if (is_null($is_complete)) {
            array_push($this->openAPINullablesSetToNull, 'is_complete');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_complete', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_complete'] = $is_complete;

        return $this;
    }

    /**
     * Gets athletic_requirement_date
     *
     * @return \DateTime|null
     */
    public function getAthleticRequirementDate()
    {
        return $this->container['athletic_requirement_date'];
    }

    /**
     * Sets athletic_requirement_date
     *
     * @param \DateTime|null $athletic_requirement_date The date of athletic requirement. Use format ...  Uses <a href=\"https://tools.ietf.org/html/rfc3339\" target=\"_blank\">ISO-8601</a> format: ```2022-01-20T16:30:00-05:00```
     *
     * @return self
     */
    public function setAthleticRequirementDate($athletic_requirement_date)
    {
        if (is_null($athletic_requirement_date)) {
            array_push($this->openAPINullablesSetToNull, 'athletic_requirement_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('athletic_requirement_date', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['athletic_requirement_date'] = $athletic_requirement_date;

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