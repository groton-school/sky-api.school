<?php
/**
 * SubTest
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
 * SubTest Class Doc Comment
 *
 * @category Class
 * @description SubTest Model
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubTest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubTest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'test_type_id' => 'int',
        'sub_test_type' => 'string',
        'score' => 'float',
        'test_subtype_id' => 'int',
        'percentile' => 'float',
        'scale' => 'float',
        'stanie' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'test_type_id' => 'int32',
        'sub_test_type' => null,
        'score' => 'double',
        'test_subtype_id' => 'int32',
        'percentile' => 'double',
        'scale' => 'double',
        'stanie' => 'double',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'test_type_id' => true,
        'sub_test_type' => true,
        'score' => true,
        'test_subtype_id' => true,
        'percentile' => true,
        'scale' => true,
        'stanie' => true,
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
        'test_type_id' => 'test_type_id',
        'sub_test_type' => 'sub_test_type',
        'score' => 'score',
        'test_subtype_id' => 'test_subtype_id',
        'percentile' => 'percentile',
        'scale' => 'scale',
        'stanie' => 'stanie',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'test_type_id' => 'setTestTypeId',
        'sub_test_type' => 'setSubTestType',
        'score' => 'setScore',
        'test_subtype_id' => 'setTestSubtypeId',
        'percentile' => 'setPercentile',
        'scale' => 'setScale',
        'stanie' => 'setStanie',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'test_type_id' => 'getTestTypeId',
        'sub_test_type' => 'getSubTestType',
        'score' => 'getScore',
        'test_subtype_id' => 'getTestSubtypeId',
        'percentile' => 'getPercentile',
        'scale' => 'getScale',
        'stanie' => 'getStanie',
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
        $this->setIfExists('test_type_id', $data ?? [], null);
        $this->setIfExists('sub_test_type', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('test_subtype_id', $data ?? [], null);
        $this->setIfExists('percentile', $data ?? [], null);
        $this->setIfExists('scale', $data ?? [], null);
        $this->setIfExists('stanie', $data ?? [], null);
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
     * Gets test_type_id
     *
     * @return int|null
     */
    public function getTestTypeId()
    {
        return $this->container['test_type_id'];
    }

    /**
     * Sets test_type_id
     *
     * @param int|null $test_type_id The Test Type ID
     *
     * @return self
     */
    public function setTestTypeId($test_type_id)
    {
        if (is_null($test_type_id)) {
            array_push($this->openAPINullablesSetToNull, 'test_type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('test_type_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['test_type_id'] = $test_type_id;

        return $this;
    }

    /**
     * Gets sub_test_type
     *
     * @return string|null
     */
    public function getSubTestType()
    {
        return $this->container['sub_test_type'];
    }

    /**
     * Sets sub_test_type
     *
     * @param string|null $sub_test_type The SubTest Type
     *
     * @return self
     */
    public function setSubTestType($sub_test_type)
    {
        if (is_null($sub_test_type)) {
            array_push($this->openAPINullablesSetToNull, 'sub_test_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sub_test_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sub_test_type'] = $sub_test_type;

        return $this;
    }

    /**
     * Gets score
     *
     * @return float|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float|null $score The SubTest Score
     *
     * @return self
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            array_push($this->openAPINullablesSetToNull, 'score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('score', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets test_subtype_id
     *
     * @return int|null
     */
    public function getTestSubtypeId()
    {
        return $this->container['test_subtype_id'];
    }

    /**
     * Sets test_subtype_id
     *
     * @param int|null $test_subtype_id The SubTest Type Id
     *
     * @return self
     */
    public function setTestSubtypeId($test_subtype_id)
    {
        if (is_null($test_subtype_id)) {
            array_push($this->openAPINullablesSetToNull, 'test_subtype_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('test_subtype_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['test_subtype_id'] = $test_subtype_id;

        return $this;
    }

    /**
     * Gets percentile
     *
     * @return float|null
     */
    public function getPercentile()
    {
        return $this->container['percentile'];
    }

    /**
     * Sets percentile
     *
     * @param float|null $percentile The SubTest Percentile
     *
     * @return self
     */
    public function setPercentile($percentile)
    {
        if (is_null($percentile)) {
            array_push($this->openAPINullablesSetToNull, 'percentile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percentile', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['percentile'] = $percentile;

        return $this;
    }

    /**
     * Gets scale
     *
     * @return float|null
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     *
     * @param float|null $scale The SubTest Scale
     *
     * @return self
     */
    public function setScale($scale)
    {
        if (is_null($scale)) {
            array_push($this->openAPINullablesSetToNull, 'scale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scale', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scale'] = $scale;

        return $this;
    }

    /**
     * Gets stanie
     *
     * @return float|null
     */
    public function getStanie()
    {
        return $this->container['stanie'];
    }

    /**
     * Sets stanie
     *
     * @param float|null $stanie The SubTest Stanie
     *
     * @return self
     */
    public function setStanie($stanie)
    {
        if (is_null($stanie)) {
            array_push($this->openAPINullablesSetToNull, 'stanie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stanie', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stanie'] = $stanie;

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