<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Action](https://schema.org/Action), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class TransferAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var Place
     */
    protected $toLocation;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     *
     * @var Place
     */
    protected $fromLocation;

    /**
     * @return Place
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param Place $toLocation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = array(
            "Place",
        );

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

    /**
     * @return Place
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param Place $fromLocation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFromLocation($fromLocation)
    {
        $types = array(
            "Place",
        );

        $fromLocation = self::checkTypes($fromLocation, $types);

        $this->fromLocation = $fromLocation;
    }

}