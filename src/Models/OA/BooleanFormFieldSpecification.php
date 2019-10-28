<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PropertyValueSpecification](https://schema.org/PropertyValueSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class BooleanFormFieldSpecification extends \OpenActive\Models\OA\PropertyValueSpecification
{
    /**
     * Specifies that a value for the field is required to proceed with the booking.
     *
     *
     * @var string
     */
    protected $valueRequired;

    /**
     * @return string
     */
    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    /**
     * @param string $valueRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueRequired($valueRequired)
    {
        $types = array(
            "string",
        );

        $valueRequired = self::checkTypes($valueRequired, $types);

        $this->valueRequired = $valueRequired;
    }

}
