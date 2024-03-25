<?php
/**
 * ScheduleSetRotationDayMeeting
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
 * ScheduleSetRotationDayMeeting Class Doc Comment
 *
 * @category Class
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScheduleSetRotationDayMeeting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleSetRotationDayMeeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'weekInCycle' => 'int',
        'dayInCycle' => 'int',
        'dailyOrdinal' => 'int',
        'blockId' => 'int',
        'blockName' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'weekInCycle' => 'int32',
        'dayInCycle' => 'int32',
        'dailyOrdinal' => 'int32',
        'blockId' => 'int32',
        'blockName' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'weekInCycle' => true,
        'dayInCycle' => true,
        'dailyOrdinal' => true,
        'blockId' => true,
        'blockName' => true,
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
        'weekInCycle' => 'WeekInCycle',
        'dayInCycle' => 'DayInCycle',
        'dailyOrdinal' => 'DailyOrdinal',
        'blockId' => 'BlockId',
        'blockName' => 'BlockName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weekInCycle' => 'setWeekInCycle',
        'dayInCycle' => 'setDayInCycle',
        'dailyOrdinal' => 'setDailyOrdinal',
        'blockId' => 'setBlockId',
        'blockName' => 'setBlockName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weekInCycle' => 'getWeekInCycle',
        'dayInCycle' => 'getDayInCycle',
        'dailyOrdinal' => 'getDailyOrdinal',
        'blockId' => 'getBlockId',
        'blockName' => 'getBlockName',
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
        $this->setIfExists('weekInCycle', $data ?? [], null);
        $this->setIfExists('dayInCycle', $data ?? [], null);
        $this->setIfExists('dailyOrdinal', $data ?? [], null);
        $this->setIfExists('blockId', $data ?? [], null);
        $this->setIfExists('blockName', $data ?? [], null);
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
     * Gets weekInCycle
     *
     * @return int|null
     */
    public function getWeekInCycle()
    {
        return $this->container['weekInCycle'];
    }

    /**
     * Sets weekInCycle
     *
     * @param int|null $weekInCycle weekInCycle
     *
     * @return self
     */
    public function setWeekInCycle($weekInCycle)
    {
        if (is_null($weekInCycle)) {
            array_push($this->openAPINullablesSetToNull, 'weekInCycle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weekInCycle', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['weekInCycle'] = $weekInCycle;

        return $this;
    }

    /**
     * Gets dayInCycle
     *
     * @return int|null
     */
    public function getDayInCycle()
    {
        return $this->container['dayInCycle'];
    }

    /**
     * Sets dayInCycle
     *
     * @param int|null $dayInCycle dayInCycle
     *
     * @return self
     */
    public function setDayInCycle($dayInCycle)
    {
        if (is_null($dayInCycle)) {
            array_push($this->openAPINullablesSetToNull, 'dayInCycle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dayInCycle', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dayInCycle'] = $dayInCycle;

        return $this;
    }

    /**
     * Gets dailyOrdinal
     *
     * @return int|null
     */
    public function getDailyOrdinal()
    {
        return $this->container['dailyOrdinal'];
    }

    /**
     * Sets dailyOrdinal
     *
     * @param int|null $dailyOrdinal dailyOrdinal
     *
     * @return self
     */
    public function setDailyOrdinal($dailyOrdinal)
    {
        if (is_null($dailyOrdinal)) {
            array_push($this->openAPINullablesSetToNull, 'dailyOrdinal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dailyOrdinal', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dailyOrdinal'] = $dailyOrdinal;

        return $this;
    }

    /**
     * Gets blockId
     *
     * @return int|null
     */
    public function getBlockId()
    {
        return $this->container['blockId'];
    }

    /**
     * Sets blockId
     *
     * @param int|null $blockId blockId
     *
     * @return self
     */
    public function setBlockId($blockId)
    {
        if (is_null($blockId)) {
            array_push($this->openAPINullablesSetToNull, 'blockId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('blockId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['blockId'] = $blockId;

        return $this;
    }

    /**
     * Gets blockName
     *
     * @return string|null
     */
    public function getBlockName()
    {
        return $this->container['blockName'];
    }

    /**
     * Sets blockName
     *
     * @param string|null $blockName blockName
     *
     * @return self
     */
    public function setBlockName($blockName)
    {
        if (is_null($blockName)) {
            array_push($this->openAPINullablesSetToNull, 'blockName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('blockName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['blockName'] = $blockName;

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
