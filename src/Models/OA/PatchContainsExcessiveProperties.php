<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class PatchContainsExcessiveProperties extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "PatchContainsExcessiveProperties";
    }

}
