<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ConsumeAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ConsumeAction";
    }

    public static function fieldList() {
        $fields = [
            "actionAccessibilityRequirement" => "actionAccessibilityRequirement",
            "expectsAcceptanceOf" => "expectsAcceptanceOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A set of requirements that a must be fulfilled in order to perform an Action. If more than one value is specied, fulfilling one set of requirements will allow the Action to be performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ActionAccessSpecification
     */
    protected $actionAccessibilityRequirement;

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $expectsAcceptanceOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\ActionAccessSpecification
     */
    public function getActionAccessibilityRequirement()
    {
        return $this->actionAccessibilityRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ActionAccessSpecification $actionAccessibilityRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionAccessibilityRequirement($actionAccessibilityRequirement)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ActionAccessSpecification",
        );

        $actionAccessibilityRequirement = self::checkTypes($actionAccessibilityRequirement, $types);

        $this->actionAccessibilityRequirement = $actionAccessibilityRequirement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->expectsAcceptanceOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $expectsAcceptanceOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectsAcceptanceOf($expectsAcceptanceOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $expectsAcceptanceOf = self::checkTypes($expectsAcceptanceOf, $types);

        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }

}
