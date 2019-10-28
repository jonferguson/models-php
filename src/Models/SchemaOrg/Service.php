<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Service extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The geographic area where the service is provided.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $serviceArea;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $produces;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var Organization|Person
     */
    protected $provider;

    /**
     * The audience eligible for this service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $serviceAudience;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $audience;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferCatalog
     */
    protected $hasOfferCatalog;

    /**
     * The hours during which this service or contact is available.
     *
     *
     * @var OpeningHoursSpecification
     */
    protected $hoursAvailable;

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     *
     * @var string
     */
    protected $providerMobility;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     *
     * @var Offer
     */
    protected $offers;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $category;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var Person|Organization
     */
    protected $broker;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $serviceOutput;

    /**
     * An associated logo.
     *
     *
     * @var ImageObject|string
     */
    protected $logo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    protected $isSimilarTo;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    protected $isRelatedTo;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ServiceChannel
     */
    protected $availableChannel;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     *
     *
     * @var string
     */
    protected $serviceType;

    /**
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var Organization|Brand
     */
    protected $brand;

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea $serviceArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getProduces()
    {
        return $this->produces;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $produces
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProduces($produces)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $produces = self::checkTypes($produces, $types);

        $this->produces = $produces;
    }

    /**
     * @return Organization|Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param Organization|Person $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience
     */
    public function getServiceAudience()
    {
        return $this->serviceAudience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience $serviceAudience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceAudience($serviceAudience)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $serviceAudience = self::checkTypes($serviceAudience, $types);

        $this->serviceAudience = $serviceAudience;
    }

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience $audience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OfferCatalog
     */
    public function getHasOfferCatalog()
    {
        return $this->hasOfferCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OfferCatalog $hasOfferCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\OfferCatalog",
        );

        $hasOfferCatalog = self::checkTypes($hasOfferCatalog, $types);

        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    /**
     * @return OpeningHoursSpecification
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param OpeningHoursSpecification $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = array(
            "OpeningHoursSpecification",
        );

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return string
     */
    public function getProviderMobility()
    {
        return $this->providerMobility;
    }

    /**
     * @param string $providerMobility
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProviderMobility($providerMobility)
    {
        $types = array(
            "string",
        );

        $providerMobility = self::checkTypes($providerMobility, $types);

        $this->providerMobility = $providerMobility;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        );

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param string $award
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = array(
            "string",
        );

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return Person|Organization
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param Person|Organization $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getServiceOutput()
    {
        return $this->serviceOutput;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $serviceOutput
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceOutput($serviceOutput)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $serviceOutput = self::checkTypes($serviceOutput, $types);

        $this->serviceOutput = $serviceOutput;
    }

    /**
     * @return ImageObject|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param ImageObject|string $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "ImageObject",
            "string",
        );

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service $isSimilarTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $isSimilarTo = self::checkTypes($isSimilarTo, $types);

        $this->isSimilarTo = $isSimilarTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service $isRelatedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $isRelatedTo = self::checkTypes($isRelatedTo, $types);

        $this->isRelatedTo = $isRelatedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ServiceChannel
     */
    public function getAvailableChannel()
    {
        return $this->availableChannel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ServiceChannel $availableChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableChannel($availableChannel)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ServiceChannel",
        );

        $availableChannel = self::checkTypes($availableChannel, $types);

        $this->availableChannel = $availableChannel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceType($serviceType)
    {
        $types = array(
            "string",
        );

        $serviceType = self::checkTypes($serviceType, $types);

        $this->serviceType = $serviceType;
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSlogan($slogan)
    {
        $types = array(
            "string",
        );

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
    }

    /**
     * @return Organization|Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Organization|Brand $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = array(
            "Organization",
            "Brand",
        );

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

}
