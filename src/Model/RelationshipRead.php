<?php
/**
 * RelationshipRead
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
 * RelationshipRead Class Doc Comment
 *
 * @category Class
 * @description RelationshipRead Model
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RelationshipRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RelationshipRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'comment' => 'string',
        'contact' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'list_as_parent' => 'bool',
        'parental_access' => 'bool',
        'primary' => 'bool',
        'relationship' => 'int',
        'resides_with' => 'bool',
        'show_parent' => 'bool',
        'tuition_responsible_signer' => 'bool',
        'type_id' => 'int',
        'user_one_id' => 'int',
        'user_one_role' => 'string',
        'user_two_id' => 'int',
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
        'comment' => null,
        'contact' => null,
        'first_name' => null,
        'last_name' => null,
        'list_as_parent' => null,
        'parental_access' => null,
        'primary' => null,
        'relationship' => 'int32',
        'resides_with' => null,
        'show_parent' => null,
        'tuition_responsible_signer' => null,
        'type_id' => 'int32',
        'user_one_id' => 'int32',
        'user_one_role' => null,
        'user_two_id' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'comment' => true,
        'contact' => false,
        'first_name' => true,
        'last_name' => true,
        'list_as_parent' => false,
        'parental_access' => false,
        'primary' => false,
        'relationship' => true,
        'resides_with' => false,
        'show_parent' => false,
        'tuition_responsible_signer' => false,
        'type_id' => true,
        'user_one_id' => true,
        'user_one_role' => true,
        'user_two_id' => true,
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
        'comment' => 'comment',
        'contact' => 'contact',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'list_as_parent' => 'list_as_parent',
        'parental_access' => 'parental_access',
        'primary' => 'primary',
        'relationship' => 'relationship',
        'resides_with' => 'resides_with',
        'show_parent' => 'show_parent',
        'tuition_responsible_signer' => 'tuition_responsible_signer',
        'type_id' => 'type_id',
        'user_one_id' => 'user_one_id',
        'user_one_role' => 'user_one_role',
        'user_two_id' => 'user_two_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'comment' => 'setComment',
        'contact' => 'setContact',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'list_as_parent' => 'setListAsParent',
        'parental_access' => 'setParentalAccess',
        'primary' => 'setPrimary',
        'relationship' => 'setRelationship',
        'resides_with' => 'setResidesWith',
        'show_parent' => 'setShowParent',
        'tuition_responsible_signer' => 'setTuitionResponsibleSigner',
        'type_id' => 'setTypeId',
        'user_one_id' => 'setUserOneId',
        'user_one_role' => 'setUserOneRole',
        'user_two_id' => 'setUserTwoId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'comment' => 'getComment',
        'contact' => 'getContact',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'list_as_parent' => 'getListAsParent',
        'parental_access' => 'getParentalAccess',
        'primary' => 'getPrimary',
        'relationship' => 'getRelationship',
        'resides_with' => 'getResidesWith',
        'show_parent' => 'getShowParent',
        'tuition_responsible_signer' => 'getTuitionResponsibleSigner',
        'type_id' => 'getTypeId',
        'user_one_id' => 'getUserOneId',
        'user_one_role' => 'getUserOneRole',
        'user_two_id' => 'getUserTwoId',
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
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('list_as_parent', $data ?? [], null);
        $this->setIfExists('parental_access', $data ?? [], null);
        $this->setIfExists('primary', $data ?? [], null);
        $this->setIfExists('relationship', $data ?? [], null);
        $this->setIfExists('resides_with', $data ?? [], null);
        $this->setIfExists('show_parent', $data ?? [], null);
        $this->setIfExists('tuition_responsible_signer', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('user_one_id', $data ?? [], null);
        $this->setIfExists('user_one_role', $data ?? [], null);
        $this->setIfExists('user_two_id', $data ?? [], null);
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
     * @param string|null $id ID of the relationship
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A comment describing the relationship
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return bool|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param bool|null $contact Returns True if the user can be contacted. Returns False if the user is marked as 'No Contact' in the UI.
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name of the user(s) associated with the queried user
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            array_push($this->openAPINullablesSetToNull, 'first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The last name of the user(s) associated with the queried user
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            array_push($this->openAPINullablesSetToNull, 'last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets list_as_parent
     *
     * @return bool|null
     */
    public function getListAsParent()
    {
        return $this->container['list_as_parent'];
    }

    /**
     * Sets list_as_parent
     *
     * @param bool|null $list_as_parent Returns True if List as Parent is enabled in the UI for a user. If enabled, the user can be listed in directories as the student's parent
     *
     * @return self
     */
    public function setListAsParent($list_as_parent)
    {
        if (is_null($list_as_parent)) {
            throw new \InvalidArgumentException('non-nullable list_as_parent cannot be null');
        }
        $this->container['list_as_parent'] = $list_as_parent;

        return $this;
    }

    /**
     * Gets parental_access
     *
     * @return bool|null
     */
    public function getParentalAccess()
    {
        return $this->container['parental_access'];
    }

    /**
     * Sets parental_access
     *
     * @param bool|null $parental_access Returns True if Parental Access is enabled in the UI for a relationship type
     *
     * @return self
     */
    public function setParentalAccess($parental_access)
    {
        if (is_null($parental_access)) {
            throw new \InvalidArgumentException('non-nullable parental_access cannot be null');
        }
        $this->container['parental_access'] = $parental_access;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary Returns True if the user in a relationship is the primary user
     *
     * @return self
     */
    public function setPrimary($primary)
    {
        if (is_null($primary)) {
            throw new \InvalidArgumentException('non-nullable primary cannot be null');
        }
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets relationship
     *
     * @return int|null
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     *
     * @param int|null $relationship The enum value that describes the relationship (ex. Parent_Child = 6)
     *
     * @return self
     */
    public function setRelationship($relationship)
    {
        if (is_null($relationship)) {
            array_push($this->openAPINullablesSetToNull, 'relationship');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('relationship', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets resides_with
     *
     * @return bool|null
     */
    public function getResidesWith()
    {
        return $this->container['resides_with'];
    }

    /**
     * Sets resides_with
     *
     * @param bool|null $resides_with Returns True if Resides With is enabled in the UI. If enabled, then the user in a relationship resides with the queried user
     *
     * @return self
     */
    public function setResidesWith($resides_with)
    {
        if (is_null($resides_with)) {
            throw new \InvalidArgumentException('non-nullable resides_with cannot be null');
        }
        $this->container['resides_with'] = $resides_with;

        return $this;
    }

    /**
     * Gets show_parent
     *
     * @return bool|null
     */
    public function getShowParent()
    {
        return $this->container['show_parent'];
    }

    /**
     * Sets show_parent
     *
     * @param bool|null $show_parent Returns True if a parent's contact information is displayable in the directory
     *
     * @return self
     */
    public function setShowParent($show_parent)
    {
        if (is_null($show_parent)) {
            throw new \InvalidArgumentException('non-nullable show_parent cannot be null');
        }
        $this->container['show_parent'] = $show_parent;

        return $this;
    }

    /**
     * Gets tuition_responsible_signer
     *
     * @return bool|null
     */
    public function getTuitionResponsibleSigner()
    {
        return $this->container['tuition_responsible_signer'];
    }

    /**
     * Sets tuition_responsible_signer
     *
     * @param bool|null $tuition_responsible_signer Returns True if Responsible Signer is enabled in the UI for a user. If enabled, it indicates the user signs enrollment contracts in onBoard
     *
     * @return self
     */
    public function setTuitionResponsibleSigner($tuition_responsible_signer)
    {
        if (is_null($tuition_responsible_signer)) {
            throw new \InvalidArgumentException('non-nullable tuition_responsible_signer cannot be null');
        }
        $this->container['tuition_responsible_signer'] = $tuition_responsible_signer;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id The ID of the relationship type. The ID corresponds with static options in the UI
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            array_push($this->openAPINullablesSetToNull, 'type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets user_one_id
     *
     * @return int|null
     */
    public function getUserOneId()
    {
        return $this->container['user_one_id'];
    }

    /**
     * Sets user_one_id
     *
     * @param int|null $user_one_id The ID of the user associated with user_two_id
     *
     * @return self
     */
    public function setUserOneId($user_one_id)
    {
        if (is_null($user_one_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_one_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_one_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_one_id'] = $user_one_id;

        return $this;
    }

    /**
     * Gets user_one_role
     *
     * @return string|null
     */
    public function getUserOneRole()
    {
        return $this->container['user_one_role'];
    }

    /**
     * Sets user_one_role
     *
     * @param string|null $user_one_role The role of the user being queried
     *
     * @return self
     */
    public function setUserOneRole($user_one_role)
    {
        if (is_null($user_one_role)) {
            array_push($this->openAPINullablesSetToNull, 'user_one_role');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_one_role', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_one_role'] = $user_one_role;

        return $this;
    }

    /**
     * Gets user_two_id
     *
     * @return int|null
     */
    public function getUserTwoId()
    {
        return $this->container['user_two_id'];
    }

    /**
     * Sets user_two_id
     *
     * @param int|null $user_two_id The ID of the user associated with user_one_id
     *
     * @return self
     */
    public function setUserTwoId($user_two_id)
    {
        if (is_null($user_two_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_two_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_two_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_two_id'] = $user_two_id;

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
