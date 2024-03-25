<?php
/**
 * StudentMedicalCondition
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
 * StudentMedicalCondition Class Doc Comment
 *
 * @category Class
 * @description Student medical condition
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StudentMedicalCondition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StudentMedicalCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userId' => 'int',
        'condition' => 'string',
        'dateAsOf' => '\DateTime',
        'dateUntil' => '\DateTime',
        'notes' => 'string',
        'accessRoles' => '\SKY\School\Model\StudentAccessRole[]',
        'studentMedications' => 'int[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'userId' => 'int32',
        'condition' => null,
        'dateAsOf' => 'date-time',
        'dateUntil' => 'date-time',
        'notes' => null,
        'accessRoles' => null,
        'studentMedications' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'userId' => false,
        'condition' => false,
        'dateAsOf' => false,
        'dateUntil' => true,
        'notes' => true,
        'accessRoles' => true,
        'studentMedications' => true,
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
        'userId' => 'user_id',
        'condition' => 'condition',
        'dateAsOf' => 'date_as_of',
        'dateUntil' => 'date_until',
        'notes' => 'notes',
        'accessRoles' => 'access_roles',
        'studentMedications' => 'student_medications',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userId' => 'setUserId',
        'condition' => 'setCondition',
        'dateAsOf' => 'setDateAsOf',
        'dateUntil' => 'setDateUntil',
        'notes' => 'setNotes',
        'accessRoles' => 'setAccessRoles',
        'studentMedications' => 'setStudentMedications',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userId' => 'getUserId',
        'condition' => 'getCondition',
        'dateAsOf' => 'getDateAsOf',
        'dateUntil' => 'getDateUntil',
        'notes' => 'getNotes',
        'accessRoles' => 'getAccessRoles',
        'studentMedications' => 'getStudentMedications',
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
        $this->setIfExists('userId', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('dateAsOf', $data ?? [], null);
        $this->setIfExists('dateUntil', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('accessRoles', $data ?? [], null);
        $this->setIfExists('studentMedications', $data ?? [], null);
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

        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['dateAsOf'] === null) {
            $invalidProperties[] = "'dateAsOf' can't be null";
        }
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
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId The user ID of the student.
     *
     * @return self
     */
    public function setUserId($userId)
    {
        if (is_null($userId)) {
            throw new \InvalidArgumentException('non-nullable userId cannot be null');
        }
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The ID or description of the condition.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets dateAsOf
     *
     * @return \DateTime
     */
    public function getDateAsOf()
    {
        return $this->container['dateAsOf'];
    }

    /**
     * Sets dateAsOf
     *
     * @param \DateTime $dateAsOf The start date for the condition. Use ISO-8601 date format: 2022-08-31.
     *
     * @return self
     */
    public function setDateAsOf($dateAsOf)
    {
        if (is_null($dateAsOf)) {
            throw new \InvalidArgumentException('non-nullable dateAsOf cannot be null');
        }
        $this->container['dateAsOf'] = $dateAsOf;

        return $this;
    }

    /**
     * Gets dateUntil
     *
     * @return \DateTime|null
     */
    public function getDateUntil()
    {
        return $this->container['dateUntil'];
    }

    /**
     * Sets dateUntil
     *
     * @param \DateTime|null $dateUntil The end date for the condition. Use ISO-8601 date format: 2022-08-31.
     *
     * @return self
     */
    public function setDateUntil($dateUntil)
    {
        if (is_null($dateUntil)) {
            array_push($this->openAPINullablesSetToNull, 'dateUntil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateUntil', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dateUntil'] = $dateUntil;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes The notes for the condition.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            array_push($this->openAPINullablesSetToNull, 'notes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notes', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets accessRoles
     *
     * @return \SKY\School\Model\StudentAccessRole[]|null
     */
    public function getAccessRoles()
    {
        return $this->container['accessRoles'];
    }

    /**
     * Sets accessRoles
     *
     * @param \SKY\School\Model\StudentAccessRole[]|null $accessRoles An array of access role objects.
     *
     * @return self
     */
    public function setAccessRoles($accessRoles)
    {
        if (is_null($accessRoles)) {
            array_push($this->openAPINullablesSetToNull, 'accessRoles');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accessRoles', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accessRoles'] = $accessRoles;

        return $this;
    }

    /**
     * Gets studentMedications
     *
     * @return int[]|null
     */
    public function getStudentMedications()
    {
        return $this->container['studentMedications'];
    }

    /**
     * Sets studentMedications
     *
     * @param int[]|null $studentMedications An array of student medication ID integers.
     *
     * @return self
     */
    public function setStudentMedications($studentMedications)
    {
        if (is_null($studentMedications)) {
            array_push($this->openAPINullablesSetToNull, 'studentMedications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('studentMedications', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['studentMedications'] = $studentMedications;

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
