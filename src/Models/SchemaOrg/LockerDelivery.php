<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LockerDelivery extends \OpenActive\Models\SchemaOrg\DeliveryMethod
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:LockerDelivery";
    }

}
