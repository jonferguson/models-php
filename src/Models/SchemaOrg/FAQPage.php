<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FAQPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:FAQPage";
    }

}
