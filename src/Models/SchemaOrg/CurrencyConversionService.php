<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CurrencyConversionService extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:CurrencyConversionService";
    }

}
