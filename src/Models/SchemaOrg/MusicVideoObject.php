<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicVideoObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:MusicVideoObject";
    }

}
