<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Mass extends \OpenActive\Models\SchemaOrg\Quantity
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Mass";
    }

}
