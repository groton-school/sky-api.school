<?php
/**
 * StudentAssignment
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
 * StudentAssignment Class Doc Comment
 *
 * @category Class
 * @description
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StudentAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StudentAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sectionName' => 'string',
        'sectionId' => 'int',
        'assignmentId' => 'int',
        'shortDescription' => 'string',
        'dateAssigned' => '\DateTime',
        'dateDue' => '\DateTime',
        'longDescription' => 'string',
        'assignmentType' => 'string',
        'gradeBook' => 'bool',
        'onlineSubmission' => 'bool',
        'assignmentStatus' => 'int',
        'assessment' => 'bool',
        'assessmentId' => 'int',
        'assessmentLocked' => 'bool',
        'major' => 'int',
        'discussion' => 'bool',
        'formative' => 'bool',
        'exempt' => 'bool',
        'incomplete' => 'bool',
        'late' => 'bool',
        'missing' => 'bool',
        'rubric' => 'bool',
        'userTask' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sectionName' => null,
        'sectionId' => 'int32',
        'assignmentId' => 'int32',
        'shortDescription' => null,
        'dateAssigned' => 'date-time',
        'dateDue' => 'date-time',
        'longDescription' => null,
        'assignmentType' => null,
        'gradeBook' => null,
        'onlineSubmission' => null,
        'assignmentStatus' => 'int32',
        'assessment' => null,
        'assessmentId' => 'int32',
        'assessmentLocked' => null,
        'major' => 'int32',
        'discussion' => null,
        'formative' => null,
        'exempt' => null,
        'incomplete' => null,
        'late' => null,
        'missing' => null,
        'rubric' => null,
        'userTask' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sectionName' => true,
        'sectionId' => true,
        'assignmentId' => true,
        'shortDescription' => true,
        'dateAssigned' => true,
        'dateDue' => true,
        'longDescription' => true,
        'assignmentType' => true,
        'gradeBook' => false,
        'onlineSubmission' => false,
        'assignmentStatus' => true,
        'assessment' => false,
        'assessmentId' => true,
        'assessmentLocked' => false,
        'major' => true,
        'discussion' => false,
        'formative' => false,
        'exempt' => false,
        'incomplete' => false,
        'late' => false,
        'missing' => false,
        'rubric' => false,
        'userTask' => false,
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
        'sectionName' => 'section_name',
        'sectionId' => 'section_id',
        'assignmentId' => 'assignment_id',
        'shortDescription' => 'short_description',
        'dateAssigned' => 'date_assigned',
        'dateDue' => 'date_due',
        'longDescription' => 'long_description',
        'assignmentType' => 'assignment_type',
        'gradeBook' => 'grade_book',
        'onlineSubmission' => 'online_submission',
        'assignmentStatus' => 'assignment_status',
        'assessment' => 'assessment',
        'assessmentId' => 'assessment_id',
        'assessmentLocked' => 'assessment_locked',
        'major' => 'major',
        'discussion' => 'discussion',
        'formative' => 'formative',
        'exempt' => 'exempt',
        'incomplete' => 'incomplete',
        'late' => 'late',
        'missing' => 'missing',
        'rubric' => 'rubric',
        'userTask' => 'user_task',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sectionName' => 'setSectionName',
        'sectionId' => 'setSectionId',
        'assignmentId' => 'setAssignmentId',
        'shortDescription' => 'setShortDescription',
        'dateAssigned' => 'setDateAssigned',
        'dateDue' => 'setDateDue',
        'longDescription' => 'setLongDescription',
        'assignmentType' => 'setAssignmentType',
        'gradeBook' => 'setGradeBook',
        'onlineSubmission' => 'setOnlineSubmission',
        'assignmentStatus' => 'setAssignmentStatus',
        'assessment' => 'setAssessment',
        'assessmentId' => 'setAssessmentId',
        'assessmentLocked' => 'setAssessmentLocked',
        'major' => 'setMajor',
        'discussion' => 'setDiscussion',
        'formative' => 'setFormative',
        'exempt' => 'setExempt',
        'incomplete' => 'setIncomplete',
        'late' => 'setLate',
        'missing' => 'setMissing',
        'rubric' => 'setRubric',
        'userTask' => 'setUserTask',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sectionName' => 'getSectionName',
        'sectionId' => 'getSectionId',
        'assignmentId' => 'getAssignmentId',
        'shortDescription' => 'getShortDescription',
        'dateAssigned' => 'getDateAssigned',
        'dateDue' => 'getDateDue',
        'longDescription' => 'getLongDescription',
        'assignmentType' => 'getAssignmentType',
        'gradeBook' => 'getGradeBook',
        'onlineSubmission' => 'getOnlineSubmission',
        'assignmentStatus' => 'getAssignmentStatus',
        'assessment' => 'getAssessment',
        'assessmentId' => 'getAssessmentId',
        'assessmentLocked' => 'getAssessmentLocked',
        'major' => 'getMajor',
        'discussion' => 'getDiscussion',
        'formative' => 'getFormative',
        'exempt' => 'getExempt',
        'incomplete' => 'getIncomplete',
        'late' => 'getLate',
        'missing' => 'getMissing',
        'rubric' => 'getRubric',
        'userTask' => 'getUserTask',
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
        $this->setIfExists('sectionName', $data ?? [], null);
        $this->setIfExists('sectionId', $data ?? [], null);
        $this->setIfExists('assignmentId', $data ?? [], null);
        $this->setIfExists('shortDescription', $data ?? [], null);
        $this->setIfExists('dateAssigned', $data ?? [], null);
        $this->setIfExists('dateDue', $data ?? [], null);
        $this->setIfExists('longDescription', $data ?? [], null);
        $this->setIfExists('assignmentType', $data ?? [], null);
        $this->setIfExists('gradeBook', $data ?? [], null);
        $this->setIfExists('onlineSubmission', $data ?? [], null);
        $this->setIfExists('assignmentStatus', $data ?? [], null);
        $this->setIfExists('assessment', $data ?? [], null);
        $this->setIfExists('assessmentId', $data ?? [], null);
        $this->setIfExists('assessmentLocked', $data ?? [], null);
        $this->setIfExists('major', $data ?? [], null);
        $this->setIfExists('discussion', $data ?? [], null);
        $this->setIfExists('formative', $data ?? [], null);
        $this->setIfExists('exempt', $data ?? [], null);
        $this->setIfExists('incomplete', $data ?? [], null);
        $this->setIfExists('late', $data ?? [], null);
        $this->setIfExists('missing', $data ?? [], null);
        $this->setIfExists('rubric', $data ?? [], null);
        $this->setIfExists('userTask', $data ?? [], null);
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
     * Gets sectionName
     *
     * @return string|null
     */
    public function getSectionName()
    {
        return $this->container['sectionName'];
    }

    /**
     * Sets sectionName
     *
     * @param string|null $sectionName The name of the section the assignment was assigned in
     *
     * @return self
     */
    public function setSectionName($sectionName)
    {
        if (is_null($sectionName)) {
            array_push($this->openAPINullablesSetToNull, 'sectionName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sectionName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sectionName'] = $sectionName;

        return $this;
    }

    /**
     * Gets sectionId
     *
     * @return int|null
     */
    public function getSectionId()
    {
        return $this->container['sectionId'];
    }

    /**
     * Sets sectionId
     *
     * @param int|null $sectionId The id of the section the assignment was assigned in
     *
     * @return self
     */
    public function setSectionId($sectionId)
    {
        if (is_null($sectionId)) {
            array_push($this->openAPINullablesSetToNull, 'sectionId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sectionId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sectionId'] = $sectionId;

        return $this;
    }

    /**
     * Gets assignmentId
     *
     * @return int|null
     */
    public function getAssignmentId()
    {
        return $this->container['assignmentId'];
    }

    /**
     * Sets assignmentId
     *
     * @param int|null $assignmentId The id of the assignment
     *
     * @return self
     */
    public function setAssignmentId($assignmentId)
    {
        if (is_null($assignmentId)) {
            array_push($this->openAPINullablesSetToNull, 'assignmentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assignmentId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assignmentId'] = $assignmentId;

        return $this;
    }

    /**
     * Gets shortDescription
     *
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     *
     * @param string|null $shortDescription The short description for the assignment
     *
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        if (is_null($shortDescription)) {
            array_push($this->openAPINullablesSetToNull, 'shortDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shortDescription', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shortDescription'] = $shortDescription;

        return $this;
    }

    /**
     * Gets dateAssigned
     *
     * @return \DateTime|null
     */
    public function getDateAssigned()
    {
        return $this->container['dateAssigned'];
    }

    /**
     * Sets dateAssigned
     *
     * @param \DateTime|null $dateAssigned The date the assignment was assigned
     *
     * @return self
     */
    public function setDateAssigned($dateAssigned)
    {
        if (is_null($dateAssigned)) {
            array_push($this->openAPINullablesSetToNull, 'dateAssigned');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateAssigned', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dateAssigned'] = $dateAssigned;

        return $this;
    }

    /**
     * Gets dateDue
     *
     * @return \DateTime|null
     */
    public function getDateDue()
    {
        return $this->container['dateDue'];
    }

    /**
     * Sets dateDue
     *
     * @param \DateTime|null $dateDue The date the assignment is due
     *
     * @return self
     */
    public function setDateDue($dateDue)
    {
        if (is_null($dateDue)) {
            array_push($this->openAPINullablesSetToNull, 'dateDue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateDue', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dateDue'] = $dateDue;

        return $this;
    }

    /**
     * Gets longDescription
     *
     * @return string|null
     */
    public function getLongDescription()
    {
        return $this->container['longDescription'];
    }

    /**
     * Sets longDescription
     *
     * @param string|null $longDescription The long description of the assignment
     *
     * @return self
     */
    public function setLongDescription($longDescription)
    {
        if (is_null($longDescription)) {
            array_push($this->openAPINullablesSetToNull, 'longDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('longDescription', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['longDescription'] = $longDescription;

        return $this;
    }

    /**
     * Gets assignmentType
     *
     * @return string|null
     */
    public function getAssignmentType()
    {
        return $this->container['assignmentType'];
    }

    /**
     * Sets assignmentType
     *
     * @param string|null $assignmentType The type of the assignment
     *
     * @return self
     */
    public function setAssignmentType($assignmentType)
    {
        if (is_null($assignmentType)) {
            array_push($this->openAPINullablesSetToNull, 'assignmentType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assignmentType', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assignmentType'] = $assignmentType;

        return $this;
    }

    /**
     * Gets gradeBook
     *
     * @return bool|null
     */
    public function getGradeBook()
    {
        return $this->container['gradeBook'];
    }

    /**
     * Sets gradeBook
     *
     * @param bool|null $gradeBook Returns true if the assignment is included in the GradeBook
     *
     * @return self
     */
    public function setGradeBook($gradeBook)
    {
        if (is_null($gradeBook)) {
            throw new \InvalidArgumentException('non-nullable gradeBook cannot be null');
        }
        $this->container['gradeBook'] = $gradeBook;

        return $this;
    }

    /**
     * Gets onlineSubmission
     *
     * @return bool|null
     */
    public function getOnlineSubmission()
    {
        return $this->container['onlineSubmission'];
    }

    /**
     * Sets onlineSubmission
     *
     * @param bool|null $onlineSubmission Returns true if the assignment is an online submission assignment
     *
     * @return self
     */
    public function setOnlineSubmission($onlineSubmission)
    {
        if (is_null($onlineSubmission)) {
            throw new \InvalidArgumentException('non-nullable onlineSubmission cannot be null');
        }
        $this->container['onlineSubmission'] = $onlineSubmission;

        return $this;
    }

    /**
     * Gets assignmentStatus
     *
     * @return int|null
     */
    public function getAssignmentStatus()
    {
        return $this->container['assignmentStatus'];
    }

    /**
     * Sets assignmentStatus
     *
     * @param int|null $assignmentStatus The status of the assignment
     *
     * @return self
     */
    public function setAssignmentStatus($assignmentStatus)
    {
        if (is_null($assignmentStatus)) {
            array_push($this->openAPINullablesSetToNull, 'assignmentStatus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assignmentStatus', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assignmentStatus'] = $assignmentStatus;

        return $this;
    }

    /**
     * Gets assessment
     *
     * @return bool|null
     */
    public function getAssessment()
    {
        return $this->container['assessment'];
    }

    /**
     * Sets assessment
     *
     * @param bool|null $assessment Returns true if this assignment is an assessment
     *
     * @return self
     */
    public function setAssessment($assessment)
    {
        if (is_null($assessment)) {
            throw new \InvalidArgumentException('non-nullable assessment cannot be null');
        }
        $this->container['assessment'] = $assessment;

        return $this;
    }

    /**
     * Gets assessmentId
     *
     * @return int|null
     */
    public function getAssessmentId()
    {
        return $this->container['assessmentId'];
    }

    /**
     * Sets assessmentId
     *
     * @param int|null $assessmentId The id of the assessment
     *
     * @return self
     */
    public function setAssessmentId($assessmentId)
    {
        if (is_null($assessmentId)) {
            array_push($this->openAPINullablesSetToNull, 'assessmentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assessmentId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assessmentId'] = $assessmentId;

        return $this;
    }

    /**
     * Gets assessmentLocked
     *
     * @return bool|null
     */
    public function getAssessmentLocked()
    {
        return $this->container['assessmentLocked'];
    }

    /**
     * Sets assessmentLocked
     *
     * @param bool|null $assessmentLocked Returns true if the assessment is locked
     *
     * @return self
     */
    public function setAssessmentLocked($assessmentLocked)
    {
        if (is_null($assessmentLocked)) {
            throw new \InvalidArgumentException('non-nullable assessmentLocked cannot be null');
        }
        $this->container['assessmentLocked'] = $assessmentLocked;

        return $this;
    }

    /**
     * Gets major
     *
     * @return int|null
     */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
     * Sets major
     *
     * @param int|null $major
     *
     * @return self
     */
    public function setMajor($major)
    {
        if (is_null($major)) {
            array_push($this->openAPINullablesSetToNull, 'major');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('major', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['major'] = $major;

        return $this;
    }

    /**
     * Gets discussion
     *
     * @return bool|null
     */
    public function getDiscussion()
    {
        return $this->container['discussion'];
    }

    /**
     * Sets discussion
     *
     * @param bool|null $discussion Returns true if the assignment has a discussion
     *
     * @return self
     */
    public function setDiscussion($discussion)
    {
        if (is_null($discussion)) {
            throw new \InvalidArgumentException('non-nullable discussion cannot be null');
        }
        $this->container['discussion'] = $discussion;

        return $this;
    }

    /**
     * Gets formative
     *
     * @return bool|null
     */
    public function getFormative()
    {
        return $this->container['formative'];
    }

    /**
     * Sets formative
     *
     * @param bool|null $formative Returns true if the assignment is formative
     *
     * @return self
     */
    public function setFormative($formative)
    {
        if (is_null($formative)) {
            throw new \InvalidArgumentException('non-nullable formative cannot be null');
        }
        $this->container['formative'] = $formative;

        return $this;
    }

    /**
     * Gets exempt
     *
     * @return bool|null
     */
    public function getExempt()
    {
        return $this->container['exempt'];
    }

    /**
     * Sets exempt
     *
     * @param bool|null $exempt Returns true if ther student is exempt from this assignment
     *
     * @return self
     */
    public function setExempt($exempt)
    {
        if (is_null($exempt)) {
            throw new \InvalidArgumentException('non-nullable exempt cannot be null');
        }
        $this->container['exempt'] = $exempt;

        return $this;
    }

    /**
     * Gets incomplete
     *
     * @return bool|null
     */
    public function getIncomplete()
    {
        return $this->container['incomplete'];
    }

    /**
     * Sets incomplete
     *
     * @param bool|null $incomplete Returns true if the assignment is incomplete
     *
     * @return self
     */
    public function setIncomplete($incomplete)
    {
        if (is_null($incomplete)) {
            throw new \InvalidArgumentException('non-nullable incomplete cannot be null');
        }
        $this->container['incomplete'] = $incomplete;

        return $this;
    }

    /**
     * Gets late
     *
     * @return bool|null
     */
    public function getLate()
    {
        return $this->container['late'];
    }

    /**
     * Sets late
     *
     * @param bool|null $late Returns true if the assignment is late
     *
     * @return self
     */
    public function setLate($late)
    {
        if (is_null($late)) {
            throw new \InvalidArgumentException('non-nullable late cannot be null');
        }
        $this->container['late'] = $late;

        return $this;
    }

    /**
     * Gets missing
     *
     * @return bool|null
     */
    public function getMissing()
    {
        return $this->container['missing'];
    }

    /**
     * Sets missing
     *
     * @param bool|null $missing Returns true if the assignment is missing
     *
     * @return self
     */
    public function setMissing($missing)
    {
        if (is_null($missing)) {
            throw new \InvalidArgumentException('non-nullable missing cannot be null');
        }
        $this->container['missing'] = $missing;

        return $this;
    }

    /**
     * Gets rubric
     *
     * @return bool|null
     */
    public function getRubric()
    {
        return $this->container['rubric'];
    }

    /**
     * Sets rubric
     *
     * @param bool|null $rubric Returns true if the assignment is included in the rubric
     *
     * @return self
     */
    public function setRubric($rubric)
    {
        if (is_null($rubric)) {
            throw new \InvalidArgumentException('non-nullable rubric cannot be null');
        }
        $this->container['rubric'] = $rubric;

        return $this;
    }

    /**
     * Gets userTask
     *
     * @return bool|null
     */
    public function getUserTask()
    {
        return $this->container['userTask'];
    }

    /**
     * Sets userTask
     *
     * @param bool|null $userTask Returns true if the assignment is a user generated task
     *
     * @return self
     */
    public function setUserTask($userTask)
    {
        if (is_null($userTask)) {
            throw new \InvalidArgumentException('non-nullable userTask cannot be null');
        }
        $this->container['userTask'] = $userTask;

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
