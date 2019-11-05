<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationalAudience extends \OpenActive\Models\SchemaOrg\Audience
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:EducationalAudience";
    }

    /**
     * An educationalRole of an EducationalAudience.
     *
     *
     * @var string
     */
    protected $educationalRole;

    /**
     * @return string
     */
    public function getEducationalRole()
    {
        return $this->educationalRole;
    }

    /**
     * @param string $educationalRole
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalRole($educationalRole)
    {
        $types = array(
            "string",
        );

        $educationalRole = self::checkTypes($educationalRole, $types);

        $this->educationalRole = $educationalRole;
    }

}
