<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Series extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:Series";
    }

}
