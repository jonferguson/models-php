<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class City extends \OpenActive\Models\SchemaOrg\AdministrativeArea
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:City";
    }

}
