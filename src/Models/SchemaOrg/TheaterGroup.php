<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TheaterGroup extends \OpenActive\Models\SchemaOrg\PerformingGroup
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:TheaterGroup";
    }

}
