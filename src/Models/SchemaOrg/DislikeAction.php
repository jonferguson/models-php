<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DislikeAction extends \OpenActive\Models\SchemaOrg\ReactAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:DislikeAction";
    }

}
