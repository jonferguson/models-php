<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CreativeWork extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CreativeWork";
    }

    public static function fieldList() {
        $fields = [
            "pattern" => "pattern",
            "creditText" => "creditText",
            "about" => "about",
            "text" => "text",
            "character" => "character",
            "offers" => "offers",
            "locationCreated" => "locationCreated",
            "isBasedOnUrl" => "isBasedOnUrl",
            "isPartOf" => "isPartOf",
            "materialExtent" => "materialExtent",
            "contentReferenceTime" => "contentReferenceTime",
            "maintainer" => "maintainer",
            "typicalAgeRange" => "typicalAgeRange",
            "author" => "author",
            "funder" => "funder",
            "expires" => "expires",
            "genre" => "genre",
            "workTranslation" => "workTranslation",
            "aggregateRating" => "aggregateRating",
            "award" => "award",
            "temporalCoverage" => "temporalCoverage",
            "hasPart" => "hasPart",
            "accessibilitySummary" => "accessibilitySummary",
            "accessModeSufficient" => "accessModeSufficient",
            "headline" => "headline",
            "educationalAlignment" => "educationalAlignment",
            "publishingPrinciples" => "publishingPrinciples",
            "comment" => "comment",
            "audio" => "audio",
            "video" => "video",
            "sourceOrganization" => "sourceOrganization",
            "translator" => "translator",
            "position" => "position",
            "translationOfWork" => "translationOfWork",
            "isBasedOn" => "isBasedOn",
            "schemaVersion" => "schemaVersion",
            "countryOfOrigin" => "countryOfOrigin",
            "editEIDR" => "editEIDR",
            "sdPublisher" => "sdPublisher",
            "license" => "license",
            "interactionStatistic" => "interactionStatistic",
            "accessibilityFeature" => "accessibilityFeature",
            "mentions" => "mentions",
            "temporal" => "temporal",
            "usageInfo" => "usageInfo",
            "creativeWorkStatus" => "creativeWorkStatus",
            "publisher" => "publisher",
            "releasedEvent" => "releasedEvent",
            "alternativeHeadline" => "alternativeHeadline",
            "sdLicense" => "sdLicense",
            "accountablePerson" => "accountablePerson",
            "copyrightNotice" => "copyrightNotice",
            "teaches" => "teaches",
            "exampleOfWork" => "exampleOfWork",
            "recordedAt" => "recordedAt",
            "conditionsOfAccess" => "conditionsOfAccess",
            "workExample" => "workExample",
            "size" => "size",
            "accessibilityHazard" => "accessibilityHazard",
            "copyrightYear" => "copyrightYear",
            "encodings" => "encodings",
            "creator" => "creator",
            "accessMode" => "accessMode",
            "abstract" => "abstract",
            "thumbnailUrl" => "thumbnailUrl",
            "acquireLicensePage" => "acquireLicensePage",
            "contentRating" => "contentRating",
            "awards" => "awards",
            "isFamilyFriendly" => "isFamilyFriendly",
            "editor" => "editor",
            "datePublished" => "datePublished",
            "educationalLevel" => "educationalLevel",
            "assesses" => "assesses",
            "mainEntity" => "mainEntity",
            "correction" => "correction",
            "timeRequired" => "timeRequired",
            "keywords" => "keywords",
            "audience" => "audience",
            "sponsor" => "sponsor",
            "educationalUse" => "educationalUse",
            "sdDatePublished" => "sdDatePublished",
            "spatialCoverage" => "spatialCoverage",
            "material" => "material",
            "publication" => "publication",
            "encodingFormat" => "encodingFormat",
            "inLanguage" => "inLanguage",
            "dateModified" => "dateModified",
            "reviews" => "reviews",
            "dateCreated" => "dateCreated",
            "associatedMedia" => "associatedMedia",
            "interpretedAsClaim" => "interpretedAsClaim",
            "review" => "review",
            "publisherImprint" => "publisherImprint",
            "accessibilityAPI" => "accessibilityAPI",
            "version" => "version",
            "learningResourceType" => "learningResourceType",
            "discussionUrl" => "discussionUrl",
            "provider" => "provider",
            "fileFormat" => "fileFormat",
            "producer" => "producer",
            "citation" => "citation",
            "archivedAt" => "archivedAt",
            "encoding" => "encoding",
            "interactivityType" => "interactivityType",
            "spatial" => "spatial",
            "contentLocation" => "contentLocation",
            "copyrightHolder" => "copyrightHolder",
            "contributor" => "contributor",
            "isAccessibleForFree" => "isAccessibleForFree",
            "accessibilityControl" => "accessibilityControl",
            "commentCount" => "commentCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $pattern;

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     *
     *
     * @var string
     */
    protected $creditText;

    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $about;

    /**
     * The textual content of this CreativeWork.
     *
     *
     * @var string
     */
    protected $text;

    /**
     * Fictional person connected with a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $character;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $offers;

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $locationCreated;

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $isBasedOnUrl;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $isPartOf;

    /**
     * [object Object]
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $materialExtent;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
     *
     *
     * @var DateTime|null
     */
    protected $contentReferenceTime;

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]], it is always  possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $maintainer;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     *
     * @var string
     */
    protected $typicalAgeRange;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $author;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $funder;

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
     *
     *
     * @var Date|null
     */
    protected $expires;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

    /**
     * A work that is a translation of the content of this work. e.g. 西遊記 has an English workTranslation “Journey to the West”,a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $workTranslation;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    protected $aggregateRating;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".
     * 
     * Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     *
     *
     * @var DateTime|string|null
     */
    protected $temporalCoverage;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $hasPart;

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
     *
     *
     * @var string
     */
    protected $accessibilitySummary;

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|string
     */
    protected $accessModeSufficient;

    /**
     * Headline of the article.
     *
     *
     * @var string
     */
    protected $headline;

    /**
     * An alignment to an established educational framework.
     * 
     * This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject|string
     */
    protected $educationalAlignment;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].
     * 
     * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.
     * 
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $publishingPrinciples;

    /**
     * Comments, typically from users.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment|string
     */
    protected $comment;

    /**
     * An embedded audio object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    protected $audio;

    /**
     * An embedded video object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject|\OpenActive\Models\SchemaOrg\Clip|string
     */
    protected $video;

    /**
     * The Organization on whose behalf the creator was working.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $sourceOrganization;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $translator;

    /**
     * The position of an item in a series or sequence of items.
     *
     *
     * @var string|int|null
     */
    protected $position;

    /**
     * The work that this work has been translated from. e.g. 物种起源 is a translationOf “On the Origin of Species”
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $translationOfWork;

    /**
     * A resource from which this work is derived or from which it is a modification or adaption.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $isBasedOn;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to
     *     indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully explored in the community.
     *
     *
     * @var string
     */
    protected $schemaVersion;

    /**
     * The country of origin of something, including products as well as creative  works such as movie and TV content.
     * 
     * In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.
     * 
     * In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $countryOfOrigin;

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television.
     * 
     * For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J", has several edits e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
     * 
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description.
     * 
     *
     *
     * @var string
     */
    protected $editEIDR;

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The
     * [[sdPublisher]] property helps make such practices more explicit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $sdPublisher;

    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $license;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InteractionCounter|string
     */
    protected $interactionStatistic;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityFeature;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $mentions;

    /**
     * The "temporal" property can be used in cases where more specific properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to be appropriate.
     *
     *
     * @var DateTime|string|null
     */
    protected $temporal;

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available and to those that require payment or other transactions. It can reference additional information e.g. community expectations on preferred linking and citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about licensing options.
     * 
     * This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available under non-commercial creative commons licenses.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $usageInfo;

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $creativeWorkStatus;

    /**
     * The publisher of the creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $publisher;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PublicationEvent|string
     */
    protected $releasedEvent;

    /**
     * A secondary title of the CreativeWork.
     *
     *
     * @var string
     */
    protected $alternativeHeadline;

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $sdLicense;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $accountablePerson;

    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright for the Work.
     *
     *
     * @var string
     */
    protected $copyrightNotice;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $teaches;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $exampleOfWork;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|string
     */
    protected $recordedAt;

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ". 
     *
     *
     * @var string
     */
    protected $conditionsOfAccess;

    /**
     * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $workExample;

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SizeSpecification|\OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $size;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityHazard;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     *
     * @var Number|null
     */
    protected $copyrightYear;

    /**
     * A media object that encodes this CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $encodings;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $creator;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
     *       
     *
     *
     * @var string
     */
    protected $accessMode;

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     *
     *
     * @var string
     */
    protected $abstract;

    /**
     * A thumbnail image relevant to the Thing.
     *
     *
     * @var string
     */
    protected $thumbnailUrl;

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $acquireLicensePage;

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $contentRating;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * Indicates whether this content is family friendly.
     *
     *
     * @var bool|null
     */
    protected $isFamilyFriendly;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $editor;

    /**
     * Date of first broadcast/publication.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePublished;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $educationalLevel;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $assesses;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $mainEntity;

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CorrectionComment|string
     */
    protected $correction;

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
     *
     *
     * @var DateInterval|string|null
     */
    protected $timeRequired;

    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $keywords;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $audience;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $sponsor;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $educationalUse;

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]]
     *
     *
     * @var Date|null
     */
    protected $sdDatePublished;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $spatialCoverage;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $material;

    /**
     * A publication event associated with the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PublicationEvent|string
     */
    protected $publication;

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).
     * 
     * In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]] alongside particular [[encodingFormat]] information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     *
     *
     * @var string
     */
    protected $encodingFormat;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateModified;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $reviews;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateCreated;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $associatedMedia;

    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The interpreting party can be indicated using [[claimInterpreter]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Claim|string
     */
    protected $interpretedAsClaim;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $review;

    /**
     * The publishing division which published the comic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $publisherImprint;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityAPI;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     *
     * @var string|Number|null
     */
    protected $version;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $learningResourceType;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     *
     * @var string
     */
    protected $discussionUrl;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * Media type, typically MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
     *
     *
     * @var string
     */
    protected $fileFormat;

    /**
     * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $producer;

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $citation;

    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced page may not directly publish the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebPage|string
     */
    protected $archivedAt;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $encoding;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     *
     * @var string
     */
    protected $interactivityType;

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $spatial;

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $contentLocation;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $copyrightHolder;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $contributor;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * Identifies input methods that are sufficient to fully control the described resource ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityControl;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
     *
     *
     * @var int|null
     */
    protected $commentCount;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $pattern
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPattern($pattern)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $pattern = self::checkTypes($pattern, $types);

        $this->pattern = $pattern;
    }

    /**
     * @return string
     */
    public function getCreditText()
    {
        return $this->creditText;
    }

    /**
     * @param string $creditText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreditText($creditText)
    {
        $types = [
            "string",
        ];

        $creditText = self::checkTypes($creditText, $types);

        $this->creditText = $creditText;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $about = self::checkTypes($about, $types);

        $this->about = $about;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setText($text)
    {
        $types = [
            "string",
        ];

        $text = self::checkTypes($text, $types);

        $this->text = $text;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $character
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCharacter($character)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $character = self::checkTypes($character, $types);

        $this->character = $character;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getLocationCreated()
    {
        return $this->locationCreated;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $locationCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocationCreated($locationCreated)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $locationCreated = self::checkTypes($locationCreated, $types);

        $this->locationCreated = $locationCreated;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\Product
     */
    public function getIsBasedOnUrl()
    {
        return $this->isBasedOnUrl;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\Product $isBasedOnUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsBasedOnUrl($isBasedOnUrl)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
        ];

        $isBasedOnUrl = self::checkTypes($isBasedOnUrl, $types);

        $this->isBasedOnUrl = $isBasedOnUrl;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getIsPartOf()
    {
        return $this->isPartOf;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $isPartOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsPartOf($isPartOf)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $isPartOf = self::checkTypes($isPartOf, $types);

        $this->isPartOf = $isPartOf;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getMaterialExtent()
    {
        return $this->materialExtent;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\QuantitativeValue $materialExtent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaterialExtent($materialExtent)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $materialExtent = self::checkTypes($materialExtent, $types);

        $this->materialExtent = $materialExtent;
    }

    /**
     * @return DateTime|null
     */
    public function getContentReferenceTime()
    {
        return $this->contentReferenceTime;
    }

    /**
     * @param DateTime|null $contentReferenceTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentReferenceTime($contentReferenceTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $contentReferenceTime = self::checkTypes($contentReferenceTime, $types);

        $this->contentReferenceTime = $contentReferenceTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getMaintainer()
    {
        return $this->maintainer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $maintainer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaintainer($maintainer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $maintainer = self::checkTypes($maintainer, $types);

        $this->maintainer = $maintainer;
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
        $types = [
            "string",
        ];

        $typicalAgeRange = self::checkTypes($typicalAgeRange, $types);

        $this->typicalAgeRange = $typicalAgeRange;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $author = self::checkTypes($author, $types);

        $this->author = $author;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return Date|null
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param Date|null $expires
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpires($expires)
    {
        $types = [
            "Date",
            "null",
        ];

        $expires = self::checkTypes($expires, $types);

        $this->expires = $expires;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGenre($genre)
    {
        $types = [
            "string",
        ];

        $genre = self::checkTypes($genre, $types);

        $this->genre = $genre;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getWorkTranslation()
    {
        return $this->workTranslation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $workTranslation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkTranslation($workTranslation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $workTranslation = self::checkTypes($workTranslation, $types);

        $this->workTranslation = $workTranslation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating|string $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
            "string",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
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
        $types = [
            "string",
        ];

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return DateTime|string|null
     */
    public function getTemporalCoverage()
    {
        return $this->temporalCoverage;
    }

    /**
     * @param DateTime|string|null $temporalCoverage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTemporalCoverage($temporalCoverage)
    {
        $types = [
            "DateTime",
            "string",
            "null",
        ];

        $temporalCoverage = self::checkTypes($temporalCoverage, $types);

        $this->temporalCoverage = $temporalCoverage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getHasPart()
    {
        return $this->hasPart;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $hasPart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasPart($hasPart)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $hasPart = self::checkTypes($hasPart, $types);

        $this->hasPart = $hasPart;
    }

    /**
     * @return string
     */
    public function getAccessibilitySummary()
    {
        return $this->accessibilitySummary;
    }

    /**
     * @param string $accessibilitySummary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilitySummary($accessibilitySummary)
    {
        $types = [
            "string",
        ];

        $accessibilitySummary = self::checkTypes($accessibilitySummary, $types);

        $this->accessibilitySummary = $accessibilitySummary;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList|string
     */
    public function getAccessModeSufficient()
    {
        return $this->accessModeSufficient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|string $accessModeSufficient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessModeSufficient($accessModeSufficient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "string",
        ];

        $accessModeSufficient = self::checkTypes($accessModeSufficient, $types);

        $this->accessModeSufficient = $accessModeSufficient;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param string $headline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeadline($headline)
    {
        $types = [
            "string",
        ];

        $headline = self::checkTypes($headline, $types);

        $this->headline = $headline;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AlignmentObject|string
     */
    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AlignmentObject|string $educationalAlignment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalAlignment($educationalAlignment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "string",
        ];

        $educationalAlignment = self::checkTypes($educationalAlignment, $types);

        $this->educationalAlignment = $educationalAlignment;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $publishingPrinciples
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $publishingPrinciples = self::checkTypes($publishingPrinciples, $types);

        $this->publishingPrinciples = $publishingPrinciples;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment|string $comment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComment($comment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Comment",
            "string",
        ];

        $comment = self::checkTypes($comment, $types);

        $this->comment = $comment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording|string $audio
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudio($audio)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Clip",
            "\OpenActive\Models\SchemaOrg\AudioObject",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
            "string",
        ];

        $audio = self::checkTypes($audio, $types);

        $this->audio = $audio;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject|\OpenActive\Models\SchemaOrg\Clip|string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject|\OpenActive\Models\SchemaOrg\Clip|string $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\VideoObject",
            "\OpenActive\Models\SchemaOrg\Clip",
            "string",
        ];

        $video = self::checkTypes($video, $types);

        $this->video = $video;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSourceOrganization()
    {
        return $this->sourceOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $sourceOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSourceOrganization($sourceOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $sourceOrganization = self::checkTypes($sourceOrganization, $types);

        $this->sourceOrganization = $sourceOrganization;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $translator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranslator($translator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $translator = self::checkTypes($translator, $types);

        $this->translator = $translator;
    }

    /**
     * @return string|int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string|int|null $position
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPosition($position)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $position = self::checkTypes($position, $types);

        $this->position = $position;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getTranslationOfWork()
    {
        return $this->translationOfWork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $translationOfWork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranslationOfWork($translationOfWork)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $translationOfWork = self::checkTypes($translationOfWork, $types);

        $this->translationOfWork = $translationOfWork;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getIsBasedOn()
    {
        return $this->isBasedOn;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\CreativeWork $isBasedOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsBasedOn($isBasedOn)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $isBasedOn = self::checkTypes($isBasedOn, $types);

        $this->isBasedOn = $isBasedOn;
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * @param string $schemaVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSchemaVersion($schemaVersion)
    {
        $types = [
            "string",
        ];

        $schemaVersion = self::checkTypes($schemaVersion, $types);

        $this->schemaVersion = $schemaVersion;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $countryOfOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $countryOfOrigin = self::checkTypes($countryOfOrigin, $types);

        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return string
     */
    public function getEditEIDR()
    {
        return $this->editEIDR;
    }

    /**
     * @param string $editEIDR
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEditEIDR($editEIDR)
    {
        $types = [
            "string",
        ];

        $editEIDR = self::checkTypes($editEIDR, $types);

        $this->editEIDR = $editEIDR;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSdPublisher()
    {
        return $this->sdPublisher;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $sdPublisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdPublisher($sdPublisher)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $sdPublisher = self::checkTypes($sdPublisher, $types);

        $this->sdPublisher = $sdPublisher;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $license
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLicense($license)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\InteractionCounter|string
     */
    public function getInteractionStatistic()
    {
        return $this->interactionStatistic;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\InteractionCounter|string $interactionStatistic
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionStatistic($interactionStatistic)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\InteractionCounter",
            "string",
        ];

        $interactionStatistic = self::checkTypes($interactionStatistic, $types);

        $this->interactionStatistic = $interactionStatistic;
    }

    /**
     * @return string
     */
    public function getAccessibilityFeature()
    {
        return $this->accessibilityFeature;
    }

    /**
     * @param string $accessibilityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityFeature($accessibilityFeature)
    {
        $types = [
            "string",
        ];

        $accessibilityFeature = self::checkTypes($accessibilityFeature, $types);

        $this->accessibilityFeature = $accessibilityFeature;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $mentions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMentions($mentions)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $mentions = self::checkTypes($mentions, $types);

        $this->mentions = $mentions;
    }

    /**
     * @return DateTime|string|null
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * @param DateTime|string|null $temporal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTemporal($temporal)
    {
        $types = [
            "DateTime",
            "string",
            "null",
        ];

        $temporal = self::checkTypes($temporal, $types);

        $this->temporal = $temporal;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getUsageInfo()
    {
        return $this->usageInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $usageInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsageInfo($usageInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $usageInfo = self::checkTypes($usageInfo, $types);

        $this->usageInfo = $usageInfo;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getCreativeWorkStatus()
    {
        return $this->creativeWorkStatus;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $creativeWorkStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreativeWorkStatus($creativeWorkStatus)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $creativeWorkStatus = self::checkTypes($creativeWorkStatus, $types);

        $this->creativeWorkStatus = $creativeWorkStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $publisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisher($publisher)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $publisher = self::checkTypes($publisher, $types);

        $this->publisher = $publisher;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PublicationEvent|string
     */
    public function getReleasedEvent()
    {
        return $this->releasedEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PublicationEvent|string $releasedEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReleasedEvent($releasedEvent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PublicationEvent",
            "string",
        ];

        $releasedEvent = self::checkTypes($releasedEvent, $types);

        $this->releasedEvent = $releasedEvent;
    }

    /**
     * @return string
     */
    public function getAlternativeHeadline()
    {
        return $this->alternativeHeadline;
    }

    /**
     * @param string $alternativeHeadline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlternativeHeadline($alternativeHeadline)
    {
        $types = [
            "string",
        ];

        $alternativeHeadline = self::checkTypes($alternativeHeadline, $types);

        $this->alternativeHeadline = $alternativeHeadline;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getSdLicense()
    {
        return $this->sdLicense;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $sdLicense
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdLicense($sdLicense)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $sdLicense = self::checkTypes($sdLicense, $types);

        $this->sdLicense = $sdLicense;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getAccountablePerson()
    {
        return $this->accountablePerson;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $accountablePerson
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountablePerson($accountablePerson)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $accountablePerson = self::checkTypes($accountablePerson, $types);

        $this->accountablePerson = $accountablePerson;
    }

    /**
     * @return string
     */
    public function getCopyrightNotice()
    {
        return $this->copyrightNotice;
    }

    /**
     * @param string $copyrightNotice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightNotice($copyrightNotice)
    {
        $types = [
            "string",
        ];

        $copyrightNotice = self::checkTypes($copyrightNotice, $types);

        $this->copyrightNotice = $copyrightNotice;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getTeaches()
    {
        return $this->teaches;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $teaches
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTeaches($teaches)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $teaches = self::checkTypes($teaches, $types);

        $this->teaches = $teaches;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getExampleOfWork()
    {
        return $this->exampleOfWork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $exampleOfWork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExampleOfWork($exampleOfWork)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $exampleOfWork = self::checkTypes($exampleOfWork, $types);

        $this->exampleOfWork = $exampleOfWork;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event|string
     */
    public function getRecordedAt()
    {
        return $this->recordedAt;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|string $recordedAt
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordedAt($recordedAt)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $recordedAt = self::checkTypes($recordedAt, $types);

        $this->recordedAt = $recordedAt;
    }

    /**
     * @return string
     */
    public function getConditionsOfAccess()
    {
        return $this->conditionsOfAccess;
    }

    /**
     * @param string $conditionsOfAccess
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConditionsOfAccess($conditionsOfAccess)
    {
        $types = [
            "string",
        ];

        $conditionsOfAccess = self::checkTypes($conditionsOfAccess, $types);

        $this->conditionsOfAccess = $conditionsOfAccess;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getWorkExample()
    {
        return $this->workExample;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $workExample
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkExample($workExample)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $workExample = self::checkTypes($workExample, $types);

        $this->workExample = $workExample;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SizeSpecification|\OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SizeSpecification|\OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Models\SchemaOrg\QuantitativeValue $size
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSize($size)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SizeSpecification",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $size = self::checkTypes($size, $types);

        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getAccessibilityHazard()
    {
        return $this->accessibilityHazard;
    }

    /**
     * @param string $accessibilityHazard
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityHazard($accessibilityHazard)
    {
        $types = [
            "string",
        ];

        $accessibilityHazard = self::checkTypes($accessibilityHazard, $types);

        $this->accessibilityHazard = $accessibilityHazard;
    }

    /**
     * @return Number|null
     */
    public function getCopyrightYear()
    {
        return $this->copyrightYear;
    }

    /**
     * @param Number|null $copyrightYear
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightYear($copyrightYear)
    {
        $types = [
            "Number",
            "null",
        ];

        $copyrightYear = self::checkTypes($copyrightYear, $types);

        $this->copyrightYear = $copyrightYear;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getEncodings()
    {
        return $this->encodings;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $encodings
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodings($encodings)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $encodings = self::checkTypes($encodings, $types);

        $this->encodings = $encodings;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $creator = self::checkTypes($creator, $types);

        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getAccessMode()
    {
        return $this->accessMode;
    }

    /**
     * @param string $accessMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessMode($accessMode)
    {
        $types = [
            "string",
        ];

        $accessMode = self::checkTypes($accessMode, $types);

        $this->accessMode = $accessMode;
    }

    /**
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbstract($abstract)
    {
        $types = [
            "string",
        ];

        $abstract = self::checkTypes($abstract, $types);

        $this->abstract = $abstract;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $thumbnailUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $types = [
            "string",
        ];

        $thumbnailUrl = self::checkTypes($thumbnailUrl, $types);

        $this->thumbnailUrl = $thumbnailUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getAcquireLicensePage()
    {
        return $this->acquireLicensePage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $acquireLicensePage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcquireLicensePage($acquireLicensePage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $acquireLicensePage = self::checkTypes($acquireLicensePage, $types);

        $this->acquireLicensePage = $acquireLicensePage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating|string
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating|string $contentRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentRating($contentRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
            "string",
        ];

        $contentRating = self::checkTypes($contentRating, $types);

        $this->contentRating = $contentRating;
    }

    /**
     * @return string
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * @param string $awards
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwards($awards)
    {
        $types = [
            "string",
        ];

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
    }

    /**
     * @return bool|null
     */
    public function getIsFamilyFriendly()
    {
        return $this->isFamilyFriendly;
    }

    /**
     * @param bool|null $isFamilyFriendly
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsFamilyFriendly($isFamilyFriendly)
    {
        $types = [
            "bool",
            "null",
        ];

        $isFamilyFriendly = self::checkTypes($isFamilyFriendly, $types);

        $this->isFamilyFriendly = $isFamilyFriendly;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $editor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEditor($editor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $editor = self::checkTypes($editor, $types);

        $this->editor = $editor;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param Date|DateTime|null $datePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePublished($datePublished)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePublished = self::checkTypes($datePublished, $types);

        $this->datePublished = $datePublished;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getEducationalLevel()
    {
        return $this->educationalLevel;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $educationalLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalLevel($educationalLevel)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $educationalLevel = self::checkTypes($educationalLevel, $types);

        $this->educationalLevel = $educationalLevel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getAssesses()
    {
        return $this->assesses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $assesses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssesses($assesses)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $assesses = self::checkTypes($assesses, $types);

        $this->assesses = $assesses;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getMainEntity()
    {
        return $this->mainEntity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $mainEntity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMainEntity($mainEntity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $mainEntity = self::checkTypes($mainEntity, $types);

        $this->mainEntity = $mainEntity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CorrectionComment|string
     */
    public function getCorrection()
    {
        return $this->correction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CorrectionComment|string $correction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCorrection($correction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CorrectionComment",
            "string",
        ];

        $correction = self::checkTypes($correction, $types);

        $this->correction = $correction;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    /**
     * @param DateInterval|string|null $timeRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeRequired($timeRequired)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $timeRequired = self::checkTypes($timeRequired, $types);

        $this->timeRequired = $timeRequired;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $keywords
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKeywords($keywords)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $keywords = self::checkTypes($keywords, $types);

        $this->keywords = $keywords;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $audience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $educationalUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalUse($educationalUse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $educationalUse = self::checkTypes($educationalUse, $types);

        $this->educationalUse = $educationalUse;
    }

    /**
     * @return Date|null
     */
    public function getSdDatePublished()
    {
        return $this->sdDatePublished;
    }

    /**
     * @param Date|null $sdDatePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdDatePublished($sdDatePublished)
    {
        $types = [
            "Date",
            "null",
        ];

        $sdDatePublished = self::checkTypes($sdDatePublished, $types);

        $this->sdDatePublished = $sdDatePublished;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getSpatialCoverage()
    {
        return $this->spatialCoverage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $spatialCoverage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpatialCoverage($spatialCoverage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $spatialCoverage = self::checkTypes($spatialCoverage, $types);

        $this->spatialCoverage = $spatialCoverage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $material
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaterial($material)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $material = self::checkTypes($material, $types);

        $this->material = $material;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PublicationEvent|string
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PublicationEvent|string $publication
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublication($publication)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PublicationEvent",
            "string",
        ];

        $publication = self::checkTypes($publication, $types);

        $this->publication = $publication;
    }

    /**
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    /**
     * @param string $encodingFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodingFormat($encodingFormat)
    {
        $types = [
            "string",
        ];

        $encodingFormat = self::checkTypes($encodingFormat, $types);

        $this->encodingFormat = $encodingFormat;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param Date|DateTime|null $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $reviews
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param Date|DateTime|null $dateCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateCreated($dateCreated)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateCreated = self::checkTypes($dateCreated, $types);

        $this->dateCreated = $dateCreated;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $associatedMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedMedia($associatedMedia)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $associatedMedia = self::checkTypes($associatedMedia, $types);

        $this->associatedMedia = $associatedMedia;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Claim|string
     */
    public function getInterpretedAsClaim()
    {
        return $this->interpretedAsClaim;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Claim|string $interpretedAsClaim
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInterpretedAsClaim($interpretedAsClaim)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Claim",
            "string",
        ];

        $interpretedAsClaim = self::checkTypes($interpretedAsClaim, $types);

        $this->interpretedAsClaim = $interpretedAsClaim;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getPublisherImprint()
    {
        return $this->publisherImprint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $publisherImprint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisherImprint($publisherImprint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $publisherImprint = self::checkTypes($publisherImprint, $types);

        $this->publisherImprint = $publisherImprint;
    }

    /**
     * @return string
     */
    public function getAccessibilityAPI()
    {
        return $this->accessibilityAPI;
    }

    /**
     * @param string $accessibilityAPI
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityAPI($accessibilityAPI)
    {
        $types = [
            "string",
        ];

        $accessibilityAPI = self::checkTypes($accessibilityAPI, $types);

        $this->accessibilityAPI = $accessibilityAPI;
    }

    /**
     * @return string|Number|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string|Number|null $version
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVersion($version)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $version = self::checkTypes($version, $types);

        $this->version = $version;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $learningResourceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLearningResourceType($learningResourceType)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $learningResourceType = self::checkTypes($learningResourceType, $types);

        $this->learningResourceType = $learningResourceType;
    }

    /**
     * @return string
     */
    public function getDiscussionUrl()
    {
        return $this->discussionUrl;
    }

    /**
     * @param string $discussionUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscussionUrl($discussionUrl)
    {
        $types = [
            "string",
        ];

        $discussionUrl = self::checkTypes($discussionUrl, $types);

        $this->discussionUrl = $discussionUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * @param string $fileFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFileFormat($fileFormat)
    {
        $types = [
            "string",
        ];

        $fileFormat = self::checkTypes($fileFormat, $types);

        $this->fileFormat = $fileFormat;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $producer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProducer($producer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $producer = self::checkTypes($producer, $types);

        $this->producer = $producer;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $citation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCitation($citation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $citation = self::checkTypes($citation, $types);

        $this->citation = $citation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebPage|string
     */
    public function getArchivedAt()
    {
        return $this->archivedAt;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebPage|string $archivedAt
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArchivedAt($archivedAt)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebPage",
            "string",
        ];

        $archivedAt = self::checkTypes($archivedAt, $types);

        $this->archivedAt = $archivedAt;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $encoding
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncoding($encoding)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $encoding = self::checkTypes($encoding, $types);

        $this->encoding = $encoding;
    }

    /**
     * @return string
     */
    public function getInteractivityType()
    {
        return $this->interactivityType;
    }

    /**
     * @param string $interactivityType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractivityType($interactivityType)
    {
        $types = [
            "string",
        ];

        $interactivityType = self::checkTypes($interactivityType, $types);

        $this->interactivityType = $interactivityType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getSpatial()
    {
        return $this->spatial;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $spatial
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpatial($spatial)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $spatial = self::checkTypes($spatial, $types);

        $this->spatial = $spatial;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $contentLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentLocation($contentLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $contentLocation = self::checkTypes($contentLocation, $types);

        $this->contentLocation = $contentLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $copyrightHolder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightHolder($copyrightHolder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $copyrightHolder = self::checkTypes($copyrightHolder, $types);

        $this->copyrightHolder = $copyrightHolder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $contributor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContributor($contributor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $contributor = self::checkTypes($contributor, $types);

        $this->contributor = $contributor;
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
        $types = [
            "bool",
            "null",
        ];

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
    }

    /**
     * @return string
     */
    public function getAccessibilityControl()
    {
        return $this->accessibilityControl;
    }

    /**
     * @param string $accessibilityControl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityControl($accessibilityControl)
    {
        $types = [
            "string",
        ];

        $accessibilityControl = self::checkTypes($accessibilityControl, $types);

        $this->accessibilityControl = $accessibilityControl;
    }

    /**
     * @return int|null
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param int|null $commentCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentCount($commentCount)
    {
        $types = [
            "int",
            "null",
        ];

        $commentCount = self::checkTypes($commentCount, $types);

        $this->commentCount = $commentCount;
    }

}
