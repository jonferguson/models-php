<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DanceEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:DanceEvent";
    }

}
