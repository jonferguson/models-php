<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ItemPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:ItemPage";
    }

}
