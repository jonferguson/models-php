<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Reservoir extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Reservoir";
    }

}
