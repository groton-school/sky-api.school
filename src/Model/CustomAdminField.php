<?php
/**
 * CustomAdminField
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
 * CustomAdminField Class Doc Comment
 *
 * @category Class
 * @description Custom Field
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomAdminField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomAdminField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'data_type_id' => 'int',
        'data_type' => 'string',
        'data_type_description' => 'string',
        'field_id' => 'int',
        'field_name' => 'string',
        'bit_value' => 'bool',
        'int_value' => 'int',
        'decimal_value' => 'float',
        'text_value' => 'string',
        'date_value' => '\DateTime',
        'last_modified_user_id' => 'int',
        'last_modified_date' => '\DateTime',
        'status' => 'bool',
        'unique' => 'bool',
        'required' => 'bool',
        'table_id' => 'int',
        'table_value_id' => 'int',
        'table_value' => 'string',
        'table_value_abbreviation' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'data_type_id' => 'int32',
        'data_type' => null,
        'data_type_description' => null,
        'field_id' => 'int32',
        'field_name' => null,
        'bit_value' => null,
        'int_value' => 'int32',
        'decimal_value' => 'float',
        'text_value' => null,
        'date_value' => 'date-time',
        'last_modified_user_id' => 'int32',
        'last_modified_date' => 'date-time',
        'status' => null,
        'unique' => null,
        'required' => null,
        'table_id' => 'int32',
        'table_value_id' => 'int32',
        'table_value' => null,
        'table_value_abbreviation' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'data_type_id' => false,
        'data_type' => true,
        'data_type_description' => true,
        'field_id' => false,
        'field_name' => true,
        'bit_value' => true,
        'int_value' => true,
        'decimal_value' => true,
        'text_value' => true,
        'date_value' => true,
        'last_modified_user_id' => false,
        'last_modified_date' => false,
        'status' => false,
        'unique' => false,
        'required' => false,
        'table_id' => true,
        'table_value_id' => true,
        'table_value' => true,
        'table_value_abbreviation' => true,
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
        'data_type_id' => 'data_type_id',
        'data_type' => 'data_type',
        'data_type_description' => 'data_type_description',
        'field_id' => 'field_id',
        'field_name' => 'field_name',
        'bit_value' => 'bit_value',
        'int_value' => 'int_value',
        'decimal_value' => 'decimal_value',
        'text_value' => 'text_value',
        'date_value' => 'date_value',
        'last_modified_user_id' => 'last_modified_user_id',
        'last_modified_date' => 'last_modified_date',
        'status' => 'status',
        'unique' => 'unique',
        'required' => 'required',
        'table_id' => 'table_id',
        'table_value_id' => 'table_value_id',
        'table_value' => 'table_value',
        'table_value_abbreviation' => 'table_value_abbreviation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'data_type_id' => 'setDataTypeId',
        'data_type' => 'setDataType',
        'data_type_description' => 'setDataTypeDescription',
        'field_id' => 'setFieldId',
        'field_name' => 'setFieldName',
        'bit_value' => 'setBitValue',
        'int_value' => 'setIntValue',
        'decimal_value' => 'setDecimalValue',
        'text_value' => 'setTextValue',
        'date_value' => 'setDateValue',
        'last_modified_user_id' => 'setLastModifiedUserId',
        'last_modified_date' => 'setLastModifiedDate',
        'status' => 'setStatus',
        'unique' => 'setUnique',
        'required' => 'setRequired',
        'table_id' => 'setTableId',
        'table_value_id' => 'setTableValueId',
        'table_value' => 'setTableValue',
        'table_value_abbreviation' => 'setTableValueAbbreviation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'data_type_id' => 'getDataTypeId',
        'data_type' => 'getDataType',
        'data_type_description' => 'getDataTypeDescription',
        'field_id' => 'getFieldId',
        'field_name' => 'getFieldName',
        'bit_value' => 'getBitValue',
        'int_value' => 'getIntValue',
        'decimal_value' => 'getDecimalValue',
        'text_value' => 'getTextValue',
        'date_value' => 'getDateValue',
        'last_modified_user_id' => 'getLastModifiedUserId',
        'last_modified_date' => 'getLastModifiedDate',
        'status' => 'getStatus',
        'unique' => 'getUnique',
        'required' => 'getRequired',
        'table_id' => 'getTableId',
        'table_value_id' => 'getTableValueId',
        'table_value' => 'getTableValue',
        'table_value_abbreviation' => 'getTableValueAbbreviation',
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
        $this->setIfExists('data_type_id', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('data_type_description', $data ?? [], null);
        $this->setIfExists('field_id', $data ?? [], null);
        $this->setIfExists('field_name', $data ?? [], null);
        $this->setIfExists('bit_value', $data ?? [], null);
        $this->setIfExists('int_value', $data ?? [], null);
        $this->setIfExists('decimal_value', $data ?? [], null);
        $this->setIfExists('text_value', $data ?? [], null);
        $this->setIfExists('date_value', $data ?? [], null);
        $this->setIfExists('last_modified_user_id', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('unique', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('table_id', $data ?? [], null);
        $this->setIfExists('table_value_id', $data ?? [], null);
        $this->setIfExists('table_value', $data ?? [], null);
        $this->setIfExists('table_value_abbreviation', $data ?? [], null);
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id
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
     * Gets data_type_id
     *
     * @return int|null
     */
    public function getDataTypeId()
    {
        return $this->container['data_type_id'];
    }

    /**
     * Sets data_type_id
     *
     * @param int|null $data_type_id Data Type Id
     *
     * @return self
     */
    public function setDataTypeId($data_type_id)
    {
        if (is_null($data_type_id)) {
            throw new \InvalidArgumentException('non-nullable data_type_id cannot be null');
        }
        $this->container['data_type_id'] = $data_type_id;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string|null $data_type Data Type
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        if (is_null($data_type)) {
            array_push($this->openAPINullablesSetToNull, 'data_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets data_type_description
     *
     * @return string|null
     */
    public function getDataTypeDescription()
    {
        return $this->container['data_type_description'];
    }

    /**
     * Sets data_type_description
     *
     * @param string|null $data_type_description Data Type Description
     *
     * @return self
     */
    public function setDataTypeDescription($data_type_description)
    {
        if (is_null($data_type_description)) {
            array_push($this->openAPINullablesSetToNull, 'data_type_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_type_description', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_type_description'] = $data_type_description;

        return $this;
    }

    /**
     * Gets field_id
     *
     * @return int|null
     */
    public function getFieldId()
    {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id
     *
     * @param int|null $field_id The custom field Id
     *
     * @return self
     */
    public function setFieldId($field_id)
    {
        if (is_null($field_id)) {
            throw new \InvalidArgumentException('non-nullable field_id cannot be null');
        }
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string|null $field_name Field Name
     *
     * @return self
     */
    public function setFieldName($field_name)
    {
        if (is_null($field_name)) {
            array_push($this->openAPINullablesSetToNull, 'field_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('field_name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets bit_value
     *
     * @return bool|null
     */
    public function getBitValue()
    {
        return $this->container['bit_value'];
    }

    /**
     * Sets bit_value
     *
     * @param bool|null $bit_value Bit Value
     *
     * @return self
     */
    public function setBitValue($bit_value)
    {
        if (is_null($bit_value)) {
            array_push($this->openAPINullablesSetToNull, 'bit_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bit_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bit_value'] = $bit_value;

        return $this;
    }

    /**
     * Gets int_value
     *
     * @return int|null
     */
    public function getIntValue()
    {
        return $this->container['int_value'];
    }

    /**
     * Sets int_value
     *
     * @param int|null $int_value Int Value
     *
     * @return self
     */
    public function setIntValue($int_value)
    {
        if (is_null($int_value)) {
            array_push($this->openAPINullablesSetToNull, 'int_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('int_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['int_value'] = $int_value;

        return $this;
    }

    /**
     * Gets decimal_value
     *
     * @return float|null
     */
    public function getDecimalValue()
    {
        return $this->container['decimal_value'];
    }

    /**
     * Sets decimal_value
     *
     * @param float|null $decimal_value Decimal Value
     *
     * @return self
     */
    public function setDecimalValue($decimal_value)
    {
        if (is_null($decimal_value)) {
            array_push($this->openAPINullablesSetToNull, 'decimal_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('decimal_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['decimal_value'] = $decimal_value;

        return $this;
    }

    /**
     * Gets text_value
     *
     * @return string|null
     */
    public function getTextValue()
    {
        return $this->container['text_value'];
    }

    /**
     * Sets text_value
     *
     * @param string|null $text_value Text Value
     *
     * @return self
     */
    public function setTextValue($text_value)
    {
        if (is_null($text_value)) {
            array_push($this->openAPINullablesSetToNull, 'text_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['text_value'] = $text_value;

        return $this;
    }

    /**
     * Gets date_value
     *
     * @return \DateTime|null
     */
    public function getDateValue()
    {
        return $this->container['date_value'];
    }

    /**
     * Sets date_value
     *
     * @param \DateTime|null $date_value Date Value
     *
     * @return self
     */
    public function setDateValue($date_value)
    {
        if (is_null($date_value)) {
            array_push($this->openAPINullablesSetToNull, 'date_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_value'] = $date_value;

        return $this;
    }

    /**
     * Gets last_modified_user_id
     *
     * @return int|null
     */
    public function getLastModifiedUserId()
    {
        return $this->container['last_modified_user_id'];
    }

    /**
     * Sets last_modified_user_id
     *
     * @param int|null $last_modified_user_id Last Modified User Id
     *
     * @return self
     */
    public function setLastModifiedUserId($last_modified_user_id)
    {
        if (is_null($last_modified_user_id)) {
            throw new \InvalidArgumentException('non-nullable last_modified_user_id cannot be null');
        }
        $this->container['last_modified_user_id'] = $last_modified_user_id;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime|null $last_modified_date Last Modified Date
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        if (is_null($last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param bool|null $status Status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets unique
     *
     * @return bool|null
     */
    public function getUnique()
    {
        return $this->container['unique'];
    }

    /**
     * Sets unique
     *
     * @param bool|null $unique Unique
     *
     * @return self
     */
    public function setUnique($unique)
    {
        if (is_null($unique)) {
            throw new \InvalidArgumentException('non-nullable unique cannot be null');
        }
        $this->container['unique'] = $unique;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required Required
     *
     * @return self
     */
    public function setRequired($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
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
     * @param int|null $table_id Table Id
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
     * @param int|null $table_value_id Table Value Id
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
     * Gets table_value
     *
     * @return string|null
     */
    public function getTableValue()
    {
        return $this->container['table_value'];
    }

    /**
     * Sets table_value
     *
     * @param string|null $table_value Table Value
     *
     * @return self
     */
    public function setTableValue($table_value)
    {
        if (is_null($table_value)) {
            array_push($this->openAPINullablesSetToNull, 'table_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('table_value', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['table_value'] = $table_value;

        return $this;
    }

    /**
     * Gets table_value_abbreviation
     *
     * @return string|null
     */
    public function getTableValueAbbreviation()
    {
        return $this->container['table_value_abbreviation'];
    }

    /**
     * Sets table_value_abbreviation
     *
     * @param string|null $table_value_abbreviation Table Value Abbreviation
     *
     * @return self
     */
    public function setTableValueAbbreviation($table_value_abbreviation)
    {
        if (is_null($table_value_abbreviation)) {
            array_push($this->openAPINullablesSetToNull, 'table_value_abbreviation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('table_value_abbreviation', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['table_value_abbreviation'] = $table_value_abbreviation;

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