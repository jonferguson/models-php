<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Event extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Event";
    }

    public static function fieldList() {
        $fields = [
            "about" => "about",
            "funder" => "funder",
            "sponsor" => "sponsor",
            "subEvent" => "subEvent",
            "workFeatured" => "workFeatured",
            "audience" => "audience",
            "remainingAttendeeCapacity" => "remainingAttendeeCapacity",
            "actor" => "actor",
            "performers" => "performers",
            "endDate" => "endDate",
            "doorTime" => "doorTime",
            "contributor" => "contributor",
            "maximumAttendeeCapacity" => "maximumAttendeeCapacity",
            "typicalAgeRange" => "typicalAgeRange",
            "organizer" => "organizer",
            "attendees" => "attendees",
            "aggregateRating" => "aggregateRating",
            "subEvents" => "subEvents",
            "offers" => "offers",
            "inLanguage" => "inLanguage",
            "attendee" => "attendee",
            "workPerformed" => "workPerformed",
            "eventStatus" => "eventStatus",
            "startDate" => "startDate",
            "director" => "director",
            "superEvent" => "superEvent",
            "duration" => "duration",
            "translator" => "translator",
            "previousStartDate" => "previousStartDate",
            "review" => "review",
            "location" => "location",
            "recordedIn" => "recordedIn",
            "composer" => "composer",
            "isAccessibleForFree" => "isAccessibleForFree",
            "performer" => "performer",
            "eventSchedule" => "eventSchedule",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $about;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $funder;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $sponsor;

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $subEvent;

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     *        Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $workFeatured;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $audience;

    /**
     * The number of attendee places for an event that remain unallocated.
     *
     *
     * @var int|null
     */
    protected $remainingAttendeeCapacity;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actor;

    /**
     * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $performers;

    /**
     * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
     *
     *
     * @var Date|DateTime|null
     */
    protected $endDate;

    /**
     * The time admission will commence.
     *
     *
     * @var string|DateTime|null
     */
    protected $doorTime;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $contributor;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     *
     * @var int|null
     */
    protected $maximumAttendeeCapacity;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     *
     * @var string
     */
    protected $typicalAgeRange;

    /**
     * An organizer of an Event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $organizer;

    /**
     * A person attending the event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $attendees;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $subEvents;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="https://schema.org/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="https://schema.org/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/availableLanguage">availableLanguage</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * A person or organization attending the event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $attendee;

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $workPerformed;

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    protected $eventStatus;

    /**
     * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
     *
     *
     * @var DateTime|Date|null
     */
    protected $startDate;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $director;

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $superEvent;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $translator;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     *
     *
     * @var Date|null
     */
    protected $previousStartDate;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * The location of for example where the event is happening, an organization is located, or where an action takes place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $location;

    /**
     * The CreativeWork that captured all or part of this Event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $recordedIn;

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $composer;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $performer;

    /**
     * Associates an <a class="localLink" href="https://schema.org/Event">Event</a> with a <a class="localLink" href="https://schema.org/Schedule">Schedule</a>. There are circumstances where it is preferable to share a schedule for a series of
     *       repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly
     *       gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An <a class="localLink" href="https://schema.org/Event">Event</a> that
     *       is associated with a <a class="localLink" href="https://schema.org/Schedule">Schedule</a> using this property should not have <a class="localLink" href="https://schema.org/startDate">startDate</a> or <a class="localLink" href="https://schema.org/endDate">endDate</a> properties. These are instead defined within the associated
     *       <a class="localLink" href="https://schema.org/Schedule">Schedule</a>, this avoids any ambiguity for clients using the data. The property might have repeated values to specify different schedules, e.g. for different months
     *       or seasons.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Schedule
     */
    protected $eventSchedule;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $about = self::checkTypes($about, $types);

        $this->about = $about;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $subEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubEvent($subEvent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Event",
        );

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getWorkFeatured()
    {
        return $this->workFeatured;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $workFeatured
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkFeatured($workFeatured)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $workFeatured = self::checkTypes($workFeatured, $types);

        $this->workFeatured = $workFeatured;
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
     * @return int|null
     */
    public function getRemainingAttendeeCapacity()
    {
        return $this->remainingAttendeeCapacity;
    }

    /**
     * @param int|null $remainingAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        $types = array(
            "int",
            "null",
        );

        $remainingAttendeeCapacity = self::checkTypes($remainingAttendeeCapacity, $types);

        $this->remainingAttendeeCapacity = $remainingAttendeeCapacity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getPerformers()
    {
        return $this->performers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $performers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformers($performers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $performers = self::checkTypes($performers, $types);

        $this->performers = $performers;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = array(
            "Date",
            "DateTime",
            "null",
        );

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return string|DateTime|null
     */
    public function getDoorTime()
    {
        return $this->doorTime;
    }

    /**
     * @param string|DateTime|null $doorTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDoorTime($doorTime)
    {
        $types = array(
            "Time",
            "DateTime",
            "null",
        );

        $doorTime = self::checkTypes($doorTime, $types);

        $this->doorTime = $doorTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $contributor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContributor($contributor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $contributor = self::checkTypes($contributor, $types);

        $this->contributor = $contributor;
    }

    /**
     * @return int|null
     */
    public function getMaximumAttendeeCapacity()
    {
        return $this->maximumAttendeeCapacity;
    }

    /**
     * @param int|null $maximumAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        $types = array(
            "int",
            "null",
        );

        $maximumAttendeeCapacity = self::checkTypes($maximumAttendeeCapacity, $types);

        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }

    /**
     * @return string
     */
    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    /**
     * @param string $typicalAgeRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypicalAgeRange($typicalAgeRange)
    {
        $types = array(
            "string",
        );

        $typicalAgeRange = self::checkTypes($typicalAgeRange, $types);

        $this->typicalAgeRange = $typicalAgeRange;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $organizer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrganizer($organizer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $organizer = self::checkTypes($organizer, $types);

        $this->organizer = $organizer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $attendees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendees($attendees)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $attendees = self::checkTypes($attendees, $types);

        $this->attendees = $attendees;
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
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getSubEvents()
    {
        return $this->subEvents;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $subEvents
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubEvents($subEvents)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Event",
        );

        $subEvents = self::checkTypes($subEvents, $types);

        $this->subEvents = $subEvents;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        );

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getAttendee()
    {
        return $this->attendee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $attendee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendee($attendee)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $attendee = self::checkTypes($attendee, $types);

        $this->attendee = $attendee;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getWorkPerformed()
    {
        return $this->workPerformed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $workPerformed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkPerformed($workPerformed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $workPerformed = self::checkTypes($workPerformed, $types);

        $this->workPerformed = $workPerformed;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventStatusType|null $eventStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEventStatus($eventStatus)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "null",
        );

        $eventStatus = self::checkTypes($eventStatus, $types);

        $this->eventStatus = $eventStatus;
    }

    /**
     * @return DateTime|Date|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|Date|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = array(
            "DateTime",
            "Date",
            "null",
        );

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $superEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuperEvent($superEvent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Event",
        );

        $superEvent = self::checkTypes($superEvent, $types);

        $this->superEvent = $superEvent;
    }

    /**
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $translator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranslator($translator)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $translator = self::checkTypes($translator, $types);

        $this->translator = $translator;
    }

    /**
     * @return Date|null
     */
    public function getPreviousStartDate()
    {
        return $this->previousStartDate;
    }

    /**
     * @param Date|null $previousStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPreviousStartDate($previousStartDate)
    {
        $types = array(
            "Date",
            "null",
        );

        $previousStartDate = self::checkTypes($previousStartDate, $types);

        $this->previousStartDate = $previousStartDate;
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
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        );

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getRecordedIn()
    {
        return $this->recordedIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $recordedIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordedIn($recordedIn)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $recordedIn = self::checkTypes($recordedIn, $types);

        $this->recordedIn = $recordedIn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $composer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComposer($composer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $composer = self::checkTypes($composer, $types);

        $this->composer = $composer;
    }

    /**
     * @return bool|null
     */
    public function getIsAccessibleForFree()
    {
        return $this->isAccessibleForFree;
    }

    /**
     * @param bool|null $isAccessibleForFree
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAccessibleForFree($isAccessibleForFree)
    {
        $types = array(
            "bool",
            "null",
        );

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $performer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformer($performer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $performer = self::checkTypes($performer, $types);

        $this->performer = $performer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Schedule
     */
    public function getEventSchedule()
    {
        return $this->eventSchedule;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Schedule $eventSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEventSchedule($eventSchedule)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Schedule",
        );

        $eventSchedule = self::checkTypes($eventSchedule, $types);

        $this->eventSchedule = $eventSchedule;
    }

}
