<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DeliveryChargeSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     *
     * @var Schema.NET.DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>
     * 
     * See also <a class="localLink" href="https://schema.org/ineligibleRegion">ineligibleRegion</a>.
     *
     *
     * @var Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $eligibleRegion;

    /**
     * @return Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea $areaServed
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = array(
            "Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return Schema.NET.DeliveryMethod|null
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * @param Schema.NET.DeliveryMethod|null $appliesToDeliveryMethod
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $types = array(
            "Schema.NET.DeliveryMethod",
            "null",
        );

        $appliesToDeliveryMethod = self::checkTypes($appliesToDeliveryMethod, $types);

        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }

    /**
     * @return Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param Place|string|\OpenActive\Models\SchemaOrg\GeoShape $eligibleRegion
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = array(
            "Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

}