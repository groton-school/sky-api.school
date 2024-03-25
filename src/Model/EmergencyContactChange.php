<?php
/**
 * EmergencyContactChange
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
 * EmergencyContactChange Class Doc Comment
 *
 * @category Class
 * @description Emergency Contact Changes
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmergencyContactChange implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmergencyContactChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'int',
        'call_dialer' => 'string',
        'ec_user_id' => 'int',
        'firstname' => 'string',
        'lastname' => 'string',
        'phone_number' => 'string',
        'phone_type' => 'string',
        'phone_call_type' => 'int',
        'email' => 'string',
        'email_call_type' => 'int',
        'record_type' => 'int',
        'sort' => 'int',
        'inactive' => 'bool',
        'active' => 'bool',
        'delete_indicator' => 'bool',
        'roles' => 'string',
        'student_indicator' => 'bool',
        'faculty_indicator' => 'bool',
        'staff_indicator' => 'bool',
        'emergency_contact_change_emails' => '\SKY\School\Model\EmergencyContactChangeEmail[]',
        'emergency_contact_change_phones' => '\SKY\School\Model\EmergencyContactChangePhone[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_id' => 'int32',
        'call_dialer' => null,
        'ec_user_id' => 'int32',
        'firstname' => null,
        'lastname' => null,
        'phone_number' => null,
        'phone_type' => null,
        'phone_call_type' => 'int32',
        'email' => null,
        'email_call_type' => 'int32',
        'record_type' => 'int32',
        'sort' => 'int32',
        'inactive' => null,
        'active' => null,
        'delete_indicator' => null,
        'roles' => null,
        'student_indicator' => null,
        'faculty_indicator' => null,
        'staff_indicator' => null,
        'emergency_contact_change_emails' => null,
        'emergency_contact_change_phones' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_id' => true,
        'call_dialer' => true,
        'ec_user_id' => true,
        'firstname' => true,
        'lastname' => true,
        'phone_number' => true,
        'phone_type' => true,
        'phone_call_type' => true,
        'email' => true,
        'email_call_type' => true,
        'record_type' => true,
        'sort' => true,
        'inactive' => true,
        'active' => true,
        'delete_indicator' => true,
        'roles' => true,
        'student_indicator' => true,
        'faculty_indicator' => true,
        'staff_indicator' => true,
        'emergency_contact_change_emails' => true,
        'emergency_contact_change_phones' => true,
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
        'user_id' => 'user_id',
        'call_dialer' => 'call_dialer',
        'ec_user_id' => 'ec_user_id',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'phone_number' => 'phone_number',
        'phone_type' => 'phone_type',
        'phone_call_type' => 'phone_call_type',
        'email' => 'email',
        'email_call_type' => 'email_call_type',
        'record_type' => 'record_type',
        'sort' => 'sort',
        'inactive' => 'inactive',
        'active' => 'active',
        'delete_indicator' => 'delete_indicator',
        'roles' => 'roles',
        'student_indicator' => 'student_indicator',
        'faculty_indicator' => 'faculty_indicator',
        'staff_indicator' => 'staff_indicator',
        'emergency_contact_change_emails' => 'emergency_contact_change_emails',
        'emergency_contact_change_phones' => 'emergency_contact_change_phones',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'call_dialer' => 'setCallDialer',
        'ec_user_id' => 'setEcUserId',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'phone_number' => 'setPhoneNumber',
        'phone_type' => 'setPhoneType',
        'phone_call_type' => 'setPhoneCallType',
        'email' => 'setEmail',
        'email_call_type' => 'setEmailCallType',
        'record_type' => 'setRecordType',
        'sort' => 'setSort',
        'inactive' => 'setInactive',
        'active' => 'setActive',
        'delete_indicator' => 'setDeleteIndicator',
        'roles' => 'setRoles',
        'student_indicator' => 'setStudentIndicator',
        'faculty_indicator' => 'setFacultyIndicator',
        'staff_indicator' => 'setStaffIndicator',
        'emergency_contact_change_emails' => 'setEmergencyContactChangeEmails',
        'emergency_contact_change_phones' => 'setEmergencyContactChangePhones',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'call_dialer' => 'getCallDialer',
        'ec_user_id' => 'getEcUserId',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'phone_number' => 'getPhoneNumber',
        'phone_type' => 'getPhoneType',
        'phone_call_type' => 'getPhoneCallType',
        'email' => 'getEmail',
        'email_call_type' => 'getEmailCallType',
        'record_type' => 'getRecordType',
        'sort' => 'getSort',
        'inactive' => 'getInactive',
        'active' => 'getActive',
        'delete_indicator' => 'getDeleteIndicator',
        'roles' => 'getRoles',
        'student_indicator' => 'getStudentIndicator',
        'faculty_indicator' => 'getFacultyIndicator',
        'staff_indicator' => 'getStaffIndicator',
        'emergency_contact_change_emails' => 'getEmergencyContactChangeEmails',
        'emergency_contact_change_phones' => 'getEmergencyContactChangePhones',
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
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('call_dialer', $data ?? [], null);
        $this->setIfExists('ec_user_id', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('phone_type', $data ?? [], null);
        $this->setIfExists('phone_call_type', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('email_call_type', $data ?? [], null);
        $this->setIfExists('record_type', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('inactive', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('delete_indicator', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('student_indicator', $data ?? [], null);
        $this->setIfExists('faculty_indicator', $data ?? [], null);
        $this->setIfExists('staff_indicator', $data ?? [], null);
        $this->setIfExists('emergency_contact_change_emails', $data ?? [], null);
        $this->setIfExists('emergency_contact_change_phones', $data ?? [], null);
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
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id UserId
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets call_dialer
     *
     * @return string|null
     */
    public function getCallDialer()
    {
        return $this->container['call_dialer'];
    }

    /**
     * Sets call_dialer
     *
     * @param string|null $call_dialer The string representation of the call dialer settings in Education Management
     *
     * @return self
     */
    public function setCallDialer($call_dialer)
    {
        if (is_null($call_dialer)) {
            array_push($this->openAPINullablesSetToNull, 'call_dialer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('call_dialer', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['call_dialer'] = $call_dialer;

        return $this;
    }

    /**
     * Gets ec_user_id
     *
     * @return int|null
     */
    public function getEcUserId()
    {
        return $this->container['ec_user_id'];
    }

    /**
     * Sets ec_user_id
     *
     * @param int|null $ec_user_id EcUserId
     *
     * @return self
     */
    public function setEcUserId($ec_user_id)
    {
        if (is_null($ec_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'ec_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ec_user_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ec_user_id'] = $ec_user_id;

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
     * @param string|null $firstname First Name
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
     * @param string|null $lastname Last Name
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
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number Phone Number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            array_push($this->openAPINullablesSetToNull, 'phone_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_number', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_type
     *
     * @return string|null
     */
    public function getPhoneType()
    {
        return $this->container['phone_type'];
    }

    /**
     * Sets phone_type
     *
     * @param string|null $phone_type Phone  Type
     *
     * @return self
     */
    public function setPhoneType($phone_type)
    {
        if (is_null($phone_type)) {
            array_push($this->openAPINullablesSetToNull, 'phone_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_type'] = $phone_type;

        return $this;
    }

    /**
     * Gets phone_call_type
     *
     * @return int|null
     */
    public function getPhoneCallType()
    {
        return $this->container['phone_call_type'];
    }

    /**
     * Sets phone_call_type
     *
     * @param int|null $phone_call_type Phone Call Type
     *
     * @return self
     */
    public function setPhoneCallType($phone_call_type)
    {
        if (is_null($phone_call_type)) {
            array_push($this->openAPINullablesSetToNull, 'phone_call_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_call_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_call_type'] = $phone_call_type;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_call_type
     *
     * @return int|null
     */
    public function getEmailCallType()
    {
        return $this->container['email_call_type'];
    }

    /**
     * Sets email_call_type
     *
     * @param int|null $email_call_type Email Call Type
     *
     * @return self
     */
    public function setEmailCallType($email_call_type)
    {
        if (is_null($email_call_type)) {
            array_push($this->openAPINullablesSetToNull, 'email_call_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_call_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email_call_type'] = $email_call_type;

        return $this;
    }

    /**
     * Gets record_type
     *
     * @return int|null
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     *
     * @param int|null $record_type Record Type
     *
     * @return self
     */
    public function setRecordType($record_type)
    {
        if (is_null($record_type)) {
            array_push($this->openAPINullablesSetToNull, 'record_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('record_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['record_type'] = $record_type;

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
     * @param int|null $sort Sort
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
     * Gets inactive
     *
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     *
     * @param bool|null $inactive inactive
     *
     * @return self
     */
    public function setInactive($inactive)
    {
        if (is_null($inactive)) {
            array_push($this->openAPINullablesSetToNull, 'inactive');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inactive', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inactive'] = $inactive;

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
     * Gets delete_indicator
     *
     * @return bool|null
     */
    public function getDeleteIndicator()
    {
        return $this->container['delete_indicator'];
    }

    /**
     * Sets delete_indicator
     *
     * @param bool|null $delete_indicator Deleted Indicator
     *
     * @return self
     */
    public function setDeleteIndicator($delete_indicator)
    {
        if (is_null($delete_indicator)) {
            array_push($this->openAPINullablesSetToNull, 'delete_indicator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delete_indicator', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delete_indicator'] = $delete_indicator;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string|null $roles Roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            array_push($this->openAPINullablesSetToNull, 'roles');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('roles', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets student_indicator
     *
     * @return bool|null
     */
    public function getStudentIndicator()
    {
        return $this->container['student_indicator'];
    }

    /**
     * Sets student_indicator
     *
     * @param bool|null $student_indicator Student Indicator
     *
     * @return self
     */
    public function setStudentIndicator($student_indicator)
    {
        if (is_null($student_indicator)) {
            array_push($this->openAPINullablesSetToNull, 'student_indicator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('student_indicator', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['student_indicator'] = $student_indicator;

        return $this;
    }

    /**
     * Gets faculty_indicator
     *
     * @return bool|null
     */
    public function getFacultyIndicator()
    {
        return $this->container['faculty_indicator'];
    }

    /**
     * Sets faculty_indicator
     *
     * @param bool|null $faculty_indicator Faculty Indicator
     *
     * @return self
     */
    public function setFacultyIndicator($faculty_indicator)
    {
        if (is_null($faculty_indicator)) {
            array_push($this->openAPINullablesSetToNull, 'faculty_indicator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('faculty_indicator', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['faculty_indicator'] = $faculty_indicator;

        return $this;
    }

    /**
     * Gets staff_indicator
     *
     * @return bool|null
     */
    public function getStaffIndicator()
    {
        return $this->container['staff_indicator'];
    }

    /**
     * Sets staff_indicator
     *
     * @param bool|null $staff_indicator Staff Indicator
     *
     * @return self
     */
    public function setStaffIndicator($staff_indicator)
    {
        if (is_null($staff_indicator)) {
            array_push($this->openAPINullablesSetToNull, 'staff_indicator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staff_indicator', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['staff_indicator'] = $staff_indicator;

        return $this;
    }

    /**
     * Gets emergency_contact_change_emails
     *
     * @return \SKY\School\Model\EmergencyContactChangeEmail[]|null
     */
    public function getEmergencyContactChangeEmails()
    {
        return $this->container['emergency_contact_change_emails'];
    }

    /**
     * Sets emergency_contact_change_emails
     *
     * @param \SKY\School\Model\EmergencyContactChangeEmail[]|null $emergency_contact_change_emails
     *
     * @return self
     */
    public function setEmergencyContactChangeEmails($emergency_contact_change_emails)
    {
        if (is_null($emergency_contact_change_emails)) {
            array_push($this->openAPINullablesSetToNull, 'emergency_contact_change_emails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emergency_contact_change_emails', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emergency_contact_change_emails'] = $emergency_contact_change_emails;

        return $this;
    }

    /**
     * Gets emergency_contact_change_phones
     *
     * @return \SKY\School\Model\EmergencyContactChangePhone[]|null
     */
    public function getEmergencyContactChangePhones()
    {
        return $this->container['emergency_contact_change_phones'];
    }

    /**
     * Sets emergency_contact_change_phones
     *
     * @param \SKY\School\Model\EmergencyContactChangePhone[]|null $emergency_contact_change_phones
     *
     * @return self
     */
    public function setEmergencyContactChangePhones($emergency_contact_change_phones)
    {
        if (is_null($emergency_contact_change_phones)) {
            array_push($this->openAPINullablesSetToNull, 'emergency_contact_change_phones');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emergency_contact_change_phones', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emergency_contact_change_phones'] = $emergency_contact_change_phones;

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