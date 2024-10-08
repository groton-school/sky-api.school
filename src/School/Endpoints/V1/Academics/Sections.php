<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionCollection;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students;

/**
 * Routing class for the subnamespace `Sections`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments
 *   $assignments
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students
 *   $students
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles
 *   $cycles
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields
 *   $customfields Routing class for the subnamespace `Customfields`
 *
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "assignments" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments",
        "students" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students",
        "cycles" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles",
        "customfields" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments
     *   $_assignments
     */
    protected ?Assignments $_assignments = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students
     *   $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles
     *   $_cycles
     */
    protected ?Cycles $_cycles = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields
     *   $_customfields Routing class for the subnamespace `Customfields`
     */
    protected ?Customfields $_customfields = null;

    /**
     * Returns a collection of academic sections for the specified school
     * level.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Academic Group Manager
     *
     * @param array{level_num: int, school_year: string} $params An
     *   associative array
     *     - level_num: Format - int32. Level number.
     *     - school_year: The school year to get sections for. Corresponds to
     *   ```school\_year\_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): AcademicsSectionCollection
    {
        assert(isset($params['level_num']), new ArgumentException("Parameter `level_num` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));

        return new AcademicsSectionCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['level_num','school_year']), ARRAY_FILTER_USE_KEY)));
    }
}
