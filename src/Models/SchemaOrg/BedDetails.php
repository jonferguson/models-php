<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BedDetails extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:BedDetails";
    }

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BedType|string
     */
    protected $typeOfBed;

    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
     *
     *
     * @var decimal|null
     */
    protected $numberOfBeds;

    /**
     * @return \OpenActive\Models\SchemaOrg\BedType|string
     */
    public function getTypeOfBed()
    {
        return $this->typeOfBed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BedType|string $typeOfBed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypeOfBed($typeOfBed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BedType",
            "string",
        );

        $typeOfBed = self::checkTypes($typeOfBed, $types);

        $this->typeOfBed = $typeOfBed;
    }

    /**
     * @return decimal|null
     */
    public function getNumberOfBeds()
    {
        return $this->numberOfBeds;
    }

    /**
     * @param decimal|null $numberOfBeds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfBeds($numberOfBeds)
    {
        $types = array(
            "decimal",
            "null",
        );

        $numberOfBeds = self::checkTypes($numberOfBeds, $types);

        $this->numberOfBeds = $numberOfBeds;
    }

}
