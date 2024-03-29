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
        'firstName' => 'string',
        'lastName' => 'string',
        'listAsParent' => 'bool',
        'parentalAccess' => 'bool',
        'primary' => 'bool',
        'relationship' => 'int',
        'residesWith' => 'bool',
        'showParent' => 'bool',
        'tuitionResponsibleSigner' => 'bool',
        'typeId' => 'int',
        'userOneId' => 'int',
        'userOneRole' => 'string',
        'userTwoId' => 'int',
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
        'firstName' => null,
        'lastName' => null,
        'listAsParent' => null,
        'parentalAccess' => null,
        'primary' => null,
        'relationship' => 'int32',
        'residesWith' => null,
        'showParent' => null,
        'tuitionResponsibleSigner' => null,
        'typeId' => 'int32',
        'userOneId' => 'int32',
        'userOneRole' => null,
        'userTwoId' => 'int32',
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
        'firstName' => true,
        'lastName' => true,
        'listAsParent' => false,
        'parentalAccess' => false,
        'primary' => false,
        'relationship' => true,
        'residesWith' => false,
        'showParent' => false,
        'tuitionResponsibleSigner' => false,
        'typeId' => true,
        'userOneId' => true,
        'userOneRole' => true,
        'userTwoId' => true,
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
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'listAsParent' => 'list_as_parent',
        'parentalAccess' => 'parental_access',
        'primary' => 'primary',
        'relationship' => 'relationship',
        'residesWith' => 'resides_with',
        'showParent' => 'show_parent',
        'tuitionResponsibleSigner' => 'tuition_responsible_signer',
        'typeId' => 'type_id',
        'userOneId' => 'user_one_id',
        'userOneRole' => 'user_one_role',
        'userTwoId' => 'user_two_id',
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
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'listAsParent' => 'setListAsParent',
        'parentalAccess' => 'setParentalAccess',
        'primary' => 'setPrimary',
        'relationship' => 'setRelationship',
        'residesWith' => 'setResidesWith',
        'showParent' => 'setShowParent',
        'tuitionResponsibleSigner' => 'setTuitionResponsibleSigner',
        'typeId' => 'setTypeId',
        'userOneId' => 'setUserOneId',
        'userOneRole' => 'setUserOneRole',
        'userTwoId' => 'setUserTwoId',
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
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'listAsParent' => 'getListAsParent',
        'parentalAccess' => 'getParentalAccess',
        'primary' => 'getPrimary',
        'relationship' => 'getRelationship',
        'residesWith' => 'getResidesWith',
        'showParent' => 'getShowParent',
        'tuitionResponsibleSigner' => 'getTuitionResponsibleSigner',
        'typeId' => 'getTypeId',
        'userOneId' => 'getUserOneId',
        'userOneRole' => 'getUserOneRole',
        'userTwoId' => 'getUserTwoId',
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
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('listAsParent', $data ?? [], null);
        $this->setIfExists('parentalAccess', $data ?? [], null);
        $this->setIfExists('primary', $data ?? [], null);
        $this->setIfExists('relationship', $data ?? [], null);
        $this->setIfExists('residesWith', $data ?? [], null);
        $this->setIfExists('showParent', $data ?? [], null);
        $this->setIfExists('tuitionResponsibleSigner', $data ?? [], null);
        $this->setIfExists('typeId', $data ?? [], null);
        $this->setIfExists('userOneId', $data ?? [], null);
        $this->setIfExists('userOneRole', $data ?? [], null);
        $this->setIfExists('userTwoId', $data ?? [], null);
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
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName The first name of the user(s) associated with the queried user
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            array_push($this->openAPINullablesSetToNull, 'firstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName The last name of the user(s) associated with the queried user
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            array_push($this->openAPINullablesSetToNull, 'lastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets listAsParent
     *
     * @return bool|null
     */
    public function getListAsParent()
    {
        return $this->container['listAsParent'];
    }

    /**
     * Sets listAsParent
     *
     * @param bool|null $listAsParent Returns True if List as Parent is enabled in the UI for a user. If enabled, the user can be listed in directories as the student's parent
     *
     * @return self
     */
    public function setListAsParent($listAsParent)
    {
        if (is_null($listAsParent)) {
            throw new \InvalidArgumentException('non-nullable listAsParent cannot be null');
        }
        $this->container['listAsParent'] = $listAsParent;

        return $this;
    }

    /**
     * Gets parentalAccess
     *
     * @return bool|null
     */
    public function getParentalAccess()
    {
        return $this->container['parentalAccess'];
    }

    /**
     * Sets parentalAccess
     *
     * @param bool|null $parentalAccess Returns True if Parental Access is enabled in the UI for a relationship type
     *
     * @return self
     */
    public function setParentalAccess($parentalAccess)
    {
        if (is_null($parentalAccess)) {
            throw new \InvalidArgumentException('non-nullable parentalAccess cannot be null');
        }
        $this->container['parentalAccess'] = $parentalAccess;

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
     * Gets residesWith
     *
     * @return bool|null
     */
    public function getResidesWith()
    {
        return $this->container['residesWith'];
    }

    /**
     * Sets residesWith
     *
     * @param bool|null $residesWith Returns True if Resides With is enabled in the UI. If enabled, then the user in a relationship resides with the queried user
     *
     * @return self
     */
    public function setResidesWith($residesWith)
    {
        if (is_null($residesWith)) {
            throw new \InvalidArgumentException('non-nullable residesWith cannot be null');
        }
        $this->container['residesWith'] = $residesWith;

        return $this;
    }

    /**
     * Gets showParent
     *
     * @return bool|null
     */
    public function getShowParent()
    {
        return $this->container['showParent'];
    }

    /**
     * Sets showParent
     *
     * @param bool|null $showParent Returns True if a parent's contact information is displayable in the directory
     *
     * @return self
     */
    public function setShowParent($showParent)
    {
        if (is_null($showParent)) {
            throw new \InvalidArgumentException('non-nullable showParent cannot be null');
        }
        $this->container['showParent'] = $showParent;

        return $this;
    }

    /**
     * Gets tuitionResponsibleSigner
     *
     * @return bool|null
     */
    public function getTuitionResponsibleSigner()
    {
        return $this->container['tuitionResponsibleSigner'];
    }

    /**
     * Sets tuitionResponsibleSigner
     *
     * @param bool|null $tuitionResponsibleSigner Returns True if Responsible Signer is enabled in the UI for a user. If enabled, it indicates the user signs enrollment contracts in onBoard
     *
     * @return self
     */
    public function setTuitionResponsibleSigner($tuitionResponsibleSigner)
    {
        if (is_null($tuitionResponsibleSigner)) {
            throw new \InvalidArgumentException('non-nullable tuitionResponsibleSigner cannot be null');
        }
        $this->container['tuitionResponsibleSigner'] = $tuitionResponsibleSigner;

        return $this;
    }

    /**
     * Gets typeId
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     *
     * @param int|null $typeId The ID of the relationship type. The ID corresponds with static options in the UI
     *
     * @return self
     */
    public function setTypeId($typeId)
    {
        if (is_null($typeId)) {
            array_push($this->openAPINullablesSetToNull, 'typeId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('typeId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets userOneId
     *
     * @return int|null
     */
    public function getUserOneId()
    {
        return $this->container['userOneId'];
    }

    /**
     * Sets userOneId
     *
     * @param int|null $userOneId The ID of the user associated with user_two_id
     *
     * @return self
     */
    public function setUserOneId($userOneId)
    {
        if (is_null($userOneId)) {
            array_push($this->openAPINullablesSetToNull, 'userOneId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('userOneId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['userOneId'] = $userOneId;

        return $this;
    }

    /**
     * Gets userOneRole
     *
     * @return string|null
     */
    public function getUserOneRole()
    {
        return $this->container['userOneRole'];
    }

    /**
     * Sets userOneRole
     *
     * @param string|null $userOneRole The role of the user being queried
     *
     * @return self
     */
    public function setUserOneRole($userOneRole)
    {
        if (is_null($userOneRole)) {
            array_push($this->openAPINullablesSetToNull, 'userOneRole');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('userOneRole', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['userOneRole'] = $userOneRole;

        return $this;
    }

    /**
     * Gets userTwoId
     *
     * @return int|null
     */
    public function getUserTwoId()
    {
        return $this->container['userTwoId'];
    }

    /**
     * Sets userTwoId
     *
     * @param int|null $userTwoId The ID of the user associated with user_one_id
     *
     * @return self
     */
    public function setUserTwoId($userTwoId)
    {
        if (is_null($userTwoId)) {
            array_push($this->openAPINullablesSetToNull, 'userTwoId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('userTwoId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['userTwoId'] = $userTwoId;

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
