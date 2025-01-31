<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugCost extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugCost";
    }

    public static function fieldList() {
        $fields = [
            "costCategory" => "costCategory",
            "drugUnit" => "drugUnit",
            "applicableLocation" => "applicableLocation",
            "costCurrency" => "costCurrency",
            "costPerUnit" => "costPerUnit",
            "costOrigin" => "costOrigin",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DrugCostCategory|string
     */
    protected $costCategory;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     *
     * @var string
     */
    protected $drugUnit;

    /**
     * The location in which the status applies.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $applicableLocation;

    /**
     * The currency (in 3-letter of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217. 
     *
     *
     * @var string
     */
    protected $costCurrency;

    /**
     * The cost per unit of the drug.
     *
     *
     * @var Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $costPerUnit;

    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     *
     *
     * @var string
     */
    protected $costOrigin;

    /**
     * @return \OpenActive\Models\SchemaOrg\DrugCostCategory|string
     */
    public function getCostCategory()
    {
        return $this->costCategory;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DrugCostCategory|string $costCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCostCategory($costCategory)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DrugCostCategory",
            "string",
        ];

        $costCategory = self::checkTypes($costCategory, $types);

        $this->costCategory = $costCategory;
    }

    /**
     * @return string
     */
    public function getDrugUnit()
    {
        return $this->drugUnit;
    }

    /**
     * @param string $drugUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrugUnit($drugUnit)
    {
        $types = [
            "string",
        ];

        $drugUnit = self::checkTypes($drugUnit, $types);

        $this->drugUnit = $drugUnit;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $applicableLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicableLocation($applicableLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $applicableLocation = self::checkTypes($applicableLocation, $types);

        $this->applicableLocation = $applicableLocation;
    }

    /**
     * @return string
     */
    public function getCostCurrency()
    {
        return $this->costCurrency;
    }

    /**
     * @param string $costCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCostCurrency($costCurrency)
    {
        $types = [
            "string",
        ];

        $costCurrency = self::checkTypes($costCurrency, $types);

        $this->costCurrency = $costCurrency;
    }

    /**
     * @return Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getCostPerUnit()
    {
        return $this->costPerUnit;
    }

    /**
     * @param Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $costPerUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCostPerUnit($costPerUnit)
    {
        $types = [
            "Number",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $costPerUnit = self::checkTypes($costPerUnit, $types);

        $this->costPerUnit = $costPerUnit;
    }

    /**
     * @return string
     */
    public function getCostOrigin()
    {
        return $this->costOrigin;
    }

    /**
     * @param string $costOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCostOrigin($costOrigin)
    {
        $types = [
            "string",
        ];

        $costOrigin = self::checkTypes($costOrigin, $types);

        $this->costOrigin = $costOrigin;
    }

}
