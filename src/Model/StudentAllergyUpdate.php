<?php
/**
 * StudentAllergyUpdate
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
 * StudentAllergyUpdate Class Doc Comment
 *
 * @category Class
 * @description Student allergy update
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StudentAllergyUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StudentAllergyUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dateAsOf' => '\DateTime',
        'dateUntil' => '\DateTime',
        'notes' => 'string',
        'allergySigns' => 'string',
        'minorReactionResponse' => 'string',
        'majorReactionResponse' => 'string',
        'roleAccess' => '\SKY\School\Model\MedicalSecurityRole[]',
        'medications' => 'int[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dateAsOf' => 'date-time',
        'dateUntil' => 'date-time',
        'notes' => null,
        'allergySigns' => null,
        'minorReactionResponse' => null,
        'majorReactionResponse' => null,
        'roleAccess' => null,
        'medications' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dateAsOf' => true,
        'dateUntil' => true,
        'notes' => true,
        'allergySigns' => true,
        'minorReactionResponse' => true,
        'majorReactionResponse' => true,
        'roleAccess' => true,
        'medications' => true,
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
        'dateAsOf' => 'date_as_of',
        'dateUntil' => 'date_until',
        'notes' => 'notes',
        'allergySigns' => 'allergy_signs',
        'minorReactionResponse' => 'minor_reaction_response',
        'majorReactionResponse' => 'major_reaction_response',
        'roleAccess' => 'role_access',
        'medications' => 'medications',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dateAsOf' => 'setDateAsOf',
        'dateUntil' => 'setDateUntil',
        'notes' => 'setNotes',
        'allergySigns' => 'setAllergySigns',
        'minorReactionResponse' => 'setMinorReactionResponse',
        'majorReactionResponse' => 'setMajorReactionResponse',
        'roleAccess' => 'setRoleAccess',
        'medications' => 'setMedications',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dateAsOf' => 'getDateAsOf',
        'dateUntil' => 'getDateUntil',
        'notes' => 'getNotes',
        'allergySigns' => 'getAllergySigns',
        'minorReactionResponse' => 'getMinorReactionResponse',
        'majorReactionResponse' => 'getMajorReactionResponse',
        'roleAccess' => 'getRoleAccess',
        'medications' => 'getMedications',
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
        $this->setIfExists('dateAsOf', $data ?? [], null);
        $this->setIfExists('dateUntil', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('allergySigns', $data ?? [], null);
        $this->setIfExists('minorReactionResponse', $data ?? [], null);
        $this->setIfExists('majorReactionResponse', $data ?? [], null);
        $this->setIfExists('roleAccess', $data ?? [], null);
        $this->setIfExists('medications', $data ?? [], null);
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
     * Gets dateAsOf
     *
     * @return \DateTime|null
     */
    public function getDateAsOf()
    {
        return $this->container['dateAsOf'];
    }

    /**
     * Sets dateAsOf
     *
     * @param \DateTime|null $dateAsOf The date the allergy began. Use format ...  Uses <a href=\"https://tools.ietf.org/html/rfc3339\" target=\"_blank\">ISO-8601</a> format: ```2022-01-20T16:30:00-05:00```
     *
     * @return self
     */
    public function setDateAsOf($dateAsOf)
    {
        if (is_null($dateAsOf)) {
            array_push($this->openAPINullablesSetToNull, 'dateAsOf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateAsOf', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param \DateTime|null $dateUntil The date the allergy ended. Use format ...  Uses <a href=\"https://tools.ietf.org/html/rfc3339\" target=\"_blank\">ISO-8601</a> format: ```2022-01-20T16:30:00-05:00```
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
     * @param string|null $notes The notes for the allergy
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
     * Gets allergySigns
     *
     * @return string|null
     */
    public function getAllergySigns()
    {
        return $this->container['allergySigns'];
    }

    /**
     * Sets allergySigns
     *
     * @param string|null $allergySigns The signs of an allergic reaction
     *
     * @return self
     */
    public function setAllergySigns($allergySigns)
    {
        if (is_null($allergySigns)) {
            array_push($this->openAPINullablesSetToNull, 'allergySigns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allergySigns', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allergySigns'] = $allergySigns;

        return $this;
    }

    /**
     * Gets minorReactionResponse
     *
     * @return string|null
     */
    public function getMinorReactionResponse()
    {
        return $this->container['minorReactionResponse'];
    }

    /**
     * Sets minorReactionResponse
     *
     * @param string|null $minorReactionResponse The response for a minor allergic reaction
     *
     * @return self
     */
    public function setMinorReactionResponse($minorReactionResponse)
    {
        if (is_null($minorReactionResponse)) {
            array_push($this->openAPINullablesSetToNull, 'minorReactionResponse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minorReactionResponse', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minorReactionResponse'] = $minorReactionResponse;

        return $this;
    }

    /**
     * Gets majorReactionResponse
     *
     * @return string|null
     */
    public function getMajorReactionResponse()
    {
        return $this->container['majorReactionResponse'];
    }

    /**
     * Sets majorReactionResponse
     *
     * @param string|null $majorReactionResponse The response for a major allergic reaction
     *
     * @return self
     */
    public function setMajorReactionResponse($majorReactionResponse)
    {
        if (is_null($majorReactionResponse)) {
            array_push($this->openAPINullablesSetToNull, 'majorReactionResponse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('majorReactionResponse', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['majorReactionResponse'] = $majorReactionResponse;

        return $this;
    }

    /**
     * Gets roleAccess
     *
     * @return \SKY\School\Model\MedicalSecurityRole[]|null
     */
    public function getRoleAccess()
    {
        return $this->container['roleAccess'];
    }

    /**
     * Sets roleAccess
     *
     * @param \SKY\School\Model\MedicalSecurityRole[]|null $roleAccess Array of roles. If a role is not included, default access will be set to true
     *
     * @return self
     */
    public function setRoleAccess($roleAccess)
    {
        if (is_null($roleAccess)) {
            array_push($this->openAPINullablesSetToNull, 'roleAccess');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('roleAccess', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['roleAccess'] = $roleAccess;

        return $this;
    }

    /**
     * Gets medications
     *
     * @return int[]|null
     */
    public function getMedications()
    {
        return $this->container['medications'];
    }

    /**
     * Sets medications
     *
     * @param int[]|null $medications The list of student medication IDs for the allergy. If included, this list will replace the existing list of medications.
     *
     * @return self
     */
    public function setMedications($medications)
    {
        if (is_null($medications)) {
            array_push($this->openAPINullablesSetToNull, 'medications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('medications', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['medications'] = $medications;

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
