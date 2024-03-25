<?php
/**
 * UserDefinedTableValue
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
 * UserDefinedTableValue Class Doc Comment
 *
 * @category Class
 * @description User Defined Table Values
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserDefinedTableValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserDefinedTableValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'table_id' => 'int',
        'table_value_id' => 'int',
        'value_name' => 'string',
        'value_abbreviation' => 'string',
        'in_use' => 'bool',
        'active' => 'bool',
        'sort' => 'int',
        'base_table_value_id' => 'int',
        'base_value' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'table_id' => 'int32',
        'table_value_id' => 'int32',
        'value_name' => null,
        'value_abbreviation' => null,
        'in_use' => null,
        'active' => null,
        'sort' => 'int32',
        'base_table_value_id' => 'int32',
        'base_value' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'table_id' => true,
        'table_value_id' => true,
        'value_name' => true,
        'value_abbreviation' => true,
        'in_use' => true,
        'active' => true,
        'sort' => true,
        'base_table_value_id' => true,
        'base_value' => true,
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
        'table_id' => 'table_id',
        'table_value_id' => 'table_value_id',
        'value_name' => 'value_name',
        'value_abbreviation' => 'value_abbreviation',
        'in_use' => 'in_use',
        'active' => 'active',
        'sort' => 'sort',
        'base_table_value_id' => 'base_table_value_id',
        'base_value' => 'base_value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'table_id' => 'setTableId',
        'table_value_id' => 'setTableValueId',
        'value_name' => 'setValueName',
        'value_abbreviation' => 'setValueAbbreviation',
        'in_use' => 'setInUse',
        'active' => 'setActive',
        'sort' => 'setSort',
        'base_table_value_id' => 'setBaseTableValueId',
        'base_value' => 'setBaseValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'table_id' => 'getTableId',
        'table_value_id' => 'getTableValueId',
        'value_name' => 'getValueName',
        'value_abbreviation' => 'getValueAbbreviation',
        'in_use' => 'getInUse',
        'active' => 'getActive',
        'sort' => 'getSort',
        'base_table_value_id' => 'getBaseTableValueId',
        'base_value' => 'getBaseValue',
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
        $this->setIfExists('table_id', $data ?? [], null);
        $this->setIfExists('table_value_id', $data ?? [], null);
        $this->setIfExists('value_name', $data ?? [], null);
        $this->setIfExists('value_abbreviation', $data ?? [], null);
        $this->setIfExists('in_use', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('base_table_value_id', $data ?? [], null);
        $this->setIfExists('base_value', $data ?? [], null);
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
     * Gets table_id
     *
     * @return int|null
     */
    public function getTableId()
    {
        return $this->container['table_id'];
    }

    /**
     * Sets table_id
     *
     * @param int|null $table_id
     *
     * @return self
     */
    public function setTableId($table_id)
    {
        if (is_null($table_id)) {
            array_push($this->openAPINullablesSetToNull, 'table_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('table_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['table_id'] = $table_id;

        return $this;
    }

    /**
     * Gets table_value_id
     *
     * @return int|null
     */
    public function getTableValueId()
    {
        return $this->container['table_value_id'];
    }

    /**
     * Sets table_value_id
     *
     * @param int|null $table_value_id
     *
     * @return self
     */
    public function setTableValueId($table_value_id)
    {
        if (is_null($table_value_id)) {
            array_push($this->openAPINullablesSetToNull, 'table_value_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('table_value_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['table_value_id'] = $table_value_id;

        return $this;
    }

    /**
     * Gets value_name
     *
     * @return string|null
     */
    public function getValueName()
    {
        return $this->container['value_name'];
    }

    /**
     * Sets value_name
     *
     * @param string|null $value_name
     *
     * @return self
     */
    public function setValueName($value_name)
    {
        if (is_null($value_name)) {
            array_push($this->openAPINullablesSetToNull, 'value_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value_name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['value_name'] = $value_name;

        return $this;
    }

    /**
     * Gets value_abbreviation
     *
     * @return string|null
     */
    public function getValueAbbreviation()
    {
        return $this->container['value_abbreviation'];
    }

    /**
     * Sets value_abbreviation
     *
     * @param string|null $value_abbreviation
     *
     * @return self
     */
    public function setValueAbbreviation($value_abbreviation)
    {
        if (is_null($value_abbreviation)) {
            array_push($this->openAPINullablesSetToNull, 'value_abbreviation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value_abbreviation', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['value_abbreviation'] = $value_abbreviation;

        return $this;
    }

    /**
     * Gets in_use
     *
     * @return bool|null
     */
    public function getInUse()
    {
        return $this->container['in_use'];
    }

    /**
     * Sets in_use
     *
     * @param bool|null $in_use
     *
     * @return self
     */
    public function setInUse($in_use)
    {
        if (is_null($in_use)) {
            array_push($this->openAPINullablesSetToNull, 'in_use');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_use', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['in_use'] = $in_use;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return int|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param int|null $sort
     *
     * @return self
     */
    public function setSort($sort)
    {
        if (is_null($sort)) {
            array_push($this->openAPINullablesSetToNull, 'sort');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sort', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets base_table_value_id
     *
     * @return int|null
     */
    public function getBaseTableValueId()
    {
        return $this->container['base_table_value_id'];
    }

    /**
     * Sets base_table_value_id
     *
     * @param int|null $base_table_value_id
     *
     * @return self
     */
    public function setBaseTableValueId($base_table_value_id)
    {
        if (is_null($base_table_value_id)) {
            array_push($this->openAPINullablesSetToNull, 'base_table_value_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('base_table_value_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['base_table_value_id'] = $base_table_value_id;

        return $this;
    }

    /**
     * Gets base_value
     *
     * @return bool|null
     */
    public function getBaseValue()
    {
        return $this->container['base_value'];
    }

    /**
     * Sets base_value
     *
     * @param bool|null $base_value
     *
     * @return self
     */
    public function setBaseValue($base_value)
    {
        if (is_null($base_value)) {
            array_push($this->openAPINullablesSetToNull, 'base_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('base_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['base_value'] = $base_value;

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
