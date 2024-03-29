<?php
/**
 * UserEnrollment
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
 * UserEnrollment Class Doc Comment
 *
 * @category Class
 * @description User Enrollment
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserEnrollment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserEnrollment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userId' => 'int',
        'firstname' => 'string',
        'lastname' => 'string',
        'preferredName' => 'string',
        'name' => 'string',
        'schoolYear' => 'string',
        'schoolLevel' => '\SKY\School\Model\Level',
        'gradeLevel' => '\SKY\School\Model\GradeLevel',
        'repeated' => 'bool',
        'graduated' => 'bool',
        'enrollDate' => '\DateTime',
        'departDate' => '\DateTime',
        'departReason' => 'string',
        'session' => 'string',
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
        'firstname' => null,
        'lastname' => null,
        'preferredName' => null,
        'name' => null,
        'schoolYear' => null,
        'schoolLevel' => null,
        'gradeLevel' => null,
        'repeated' => null,
        'graduated' => null,
        'enrollDate' => 'date-time',
        'departDate' => 'date-time',
        'departReason' => null,
        'session' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'userId' => true,
        'firstname' => true,
        'lastname' => true,
        'preferredName' => true,
        'name' => true,
        'schoolYear' => true,
        'schoolLevel' => false,
        'gradeLevel' => false,
        'repeated' => true,
        'graduated' => true,
        'enrollDate' => true,
        'departDate' => true,
        'departReason' => true,
        'session' => true,
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'preferredName' => 'preferred_name',
        'name' => 'name',
        'schoolYear' => 'school_year',
        'schoolLevel' => 'school_level',
        'gradeLevel' => 'grade_level',
        'repeated' => 'repeated',
        'graduated' => 'graduated',
        'enrollDate' => 'enroll_date',
        'departDate' => 'depart_date',
        'departReason' => 'depart_reason',
        'session' => 'session',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userId' => 'setUserId',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'preferredName' => 'setPreferredName',
        'name' => 'setName',
        'schoolYear' => 'setSchoolYear',
        'schoolLevel' => 'setSchoolLevel',
        'gradeLevel' => 'setGradeLevel',
        'repeated' => 'setRepeated',
        'graduated' => 'setGraduated',
        'enrollDate' => 'setEnrollDate',
        'departDate' => 'setDepartDate',
        'departReason' => 'setDepartReason',
        'session' => 'setSession',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userId' => 'getUserId',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'preferredName' => 'getPreferredName',
        'name' => 'getName',
        'schoolYear' => 'getSchoolYear',
        'schoolLevel' => 'getSchoolLevel',
        'gradeLevel' => 'getGradeLevel',
        'repeated' => 'getRepeated',
        'graduated' => 'getGraduated',
        'enrollDate' => 'getEnrollDate',
        'departDate' => 'getDepartDate',
        'departReason' => 'getDepartReason',
        'session' => 'getSession',
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
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('preferredName', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('schoolYear', $data ?? [], null);
        $this->setIfExists('schoolLevel', $data ?? [], null);
        $this->setIfExists('gradeLevel', $data ?? [], null);
        $this->setIfExists('repeated', $data ?? [], null);
        $this->setIfExists('graduated', $data ?? [], null);
        $this->setIfExists('enrollDate', $data ?? [], null);
        $this->setIfExists('departDate', $data ?? [], null);
        $this->setIfExists('departReason', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
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
     * Gets userId
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int|null $userId The id of the user
     *
     * @return self
     */
    public function setUserId($userId)
    {
        if (is_null($userId)) {
            array_push($this->openAPINullablesSetToNull, 'userId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('userId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname The first name of the user
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            array_push($this->openAPINullablesSetToNull, 'firstname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstname', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname The last name of the user
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            array_push($this->openAPINullablesSetToNull, 'lastname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastname', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets preferredName
     *
     * @return string|null
     */
    public function getPreferredName()
    {
        return $this->container['preferredName'];
    }

    /**
     * Sets preferredName
     *
     * @param string|null $preferredName The preferred name of the user
     *
     * @return self
     */
    public function setPreferredName($preferredName)
    {
        if (is_null($preferredName)) {
            array_push($this->openAPINullablesSetToNull, 'preferredName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preferredName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preferredName'] = $preferredName;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The formatted name of the user
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets schoolYear
     *
     * @return string|null
     */
    public function getSchoolYear()
    {
        return $this->container['schoolYear'];
    }

    /**
     * Sets schoolYear
     *
     * @param string|null $schoolYear The school year the user is enrolled in
     *
     * @return self
     */
    public function setSchoolYear($schoolYear)
    {
        if (is_null($schoolYear)) {
            array_push($this->openAPINullablesSetToNull, 'schoolYear');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('schoolYear', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['schoolYear'] = $schoolYear;

        return $this;
    }

    /**
     * Gets schoolLevel
     *
     * @return \SKY\School\Model\Level|null
     */
    public function getSchoolLevel()
    {
        return $this->container['schoolLevel'];
    }

    /**
     * Sets schoolLevel
     *
     * @param \SKY\School\Model\Level|null $schoolLevel schoolLevel
     *
     * @return self
     */
    public function setSchoolLevel($schoolLevel)
    {
        if (is_null($schoolLevel)) {
            throw new \InvalidArgumentException('non-nullable schoolLevel cannot be null');
        }
        $this->container['schoolLevel'] = $schoolLevel;

        return $this;
    }

    /**
     * Gets gradeLevel
     *
     * @return \SKY\School\Model\GradeLevel|null
     */
    public function getGradeLevel()
    {
        return $this->container['gradeLevel'];
    }

    /**
     * Sets gradeLevel
     *
     * @param \SKY\School\Model\GradeLevel|null $gradeLevel gradeLevel
     *
     * @return self
     */
    public function setGradeLevel($gradeLevel)
    {
        if (is_null($gradeLevel)) {
            throw new \InvalidArgumentException('non-nullable gradeLevel cannot be null');
        }
        $this->container['gradeLevel'] = $gradeLevel;

        return $this;
    }

    /**
     * Gets repeated
     *
     * @return bool|null
     */
    public function getRepeated()
    {
        return $this->container['repeated'];
    }

    /**
     * Sets repeated
     *
     * @param bool|null $repeated Returns true if the user repeated this enrollment
     *
     * @return self
     */
    public function setRepeated($repeated)
    {
        if (is_null($repeated)) {
            array_push($this->openAPINullablesSetToNull, 'repeated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('repeated', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['repeated'] = $repeated;

        return $this;
    }

    /**
     * Gets graduated
     *
     * @return bool|null
     */
    public function getGraduated()
    {
        return $this->container['graduated'];
    }

    /**
     * Sets graduated
     *
     * @param bool|null $graduated Returns true if the user graduated after completing this enrollment year
     *
     * @return self
     */
    public function setGraduated($graduated)
    {
        if (is_null($graduated)) {
            array_push($this->openAPINullablesSetToNull, 'graduated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('graduated', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['graduated'] = $graduated;

        return $this;
    }

    /**
     * Gets enrollDate
     *
     * @return \DateTime|null
     */
    public function getEnrollDate()
    {
        return $this->container['enrollDate'];
    }

    /**
     * Sets enrollDate
     *
     * @param \DateTime|null $enrollDate The date the enrollment begins
     *
     * @return self
     */
    public function setEnrollDate($enrollDate)
    {
        if (is_null($enrollDate)) {
            array_push($this->openAPINullablesSetToNull, 'enrollDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enrollDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enrollDate'] = $enrollDate;

        return $this;
    }

    /**
     * Gets departDate
     *
     * @return \DateTime|null
     */
    public function getDepartDate()
    {
        return $this->container['departDate'];
    }

    /**
     * Sets departDate
     *
     * @param \DateTime|null $departDate The date the user departed the school year, ending the enrollment
     *
     * @return self
     */
    public function setDepartDate($departDate)
    {
        if (is_null($departDate)) {
            array_push($this->openAPINullablesSetToNull, 'departDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('departDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['departDate'] = $departDate;

        return $this;
    }

    /**
     * Gets departReason
     *
     * @return string|null
     */
    public function getDepartReason()
    {
        return $this->container['departReason'];
    }

    /**
     * Sets departReason
     *
     * @param string|null $departReason The reason the user departed the school
     *
     * @return self
     */
    public function setDepartReason($departReason)
    {
        if (is_null($departReason)) {
            array_push($this->openAPINullablesSetToNull, 'departReason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('departReason', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['departReason'] = $departReason;

        return $this;
    }

    /**
     * Gets session
     *
     * @return string|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param string|null $session The name of the session, if a session is attached to the enrollment
     *
     * @return self
     */
    public function setSession($session)
    {
        if (is_null($session)) {
            array_push($this->openAPINullablesSetToNull, 'session');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('session', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['session'] = $session;

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
