<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BikeStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BikeStore";
    }

}
