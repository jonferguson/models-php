<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class IndividualProduct extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     *
     * @var string
     */
    protected $serialNumber;

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSerialNumber($serialNumber)
    {
        $types = array(
            "string",
        );

        $serialNumber = self::checkTypes($serialNumber, $types);

        $this->serialNumber = $serialNumber;
    }

}