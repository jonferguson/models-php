<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DefinedTerm extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DefinedTerm";
    }

    public static function fieldList() {
        $fields = [
            "inDefinedTermSet" => "inDefinedTermSet",
            "termCode" => "termCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A <a class="localLink" href="https://schema.org/DefinedTermSet">DefinedTermSet</a> that contains this term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTermSet
     */
    protected $inDefinedTermSet;

    /**
     * A code that identifies this <a class="localLink" href="https://schema.org/DefinedTerm">DefinedTerm</a> within a <a class="localLink" href="https://schema.org/DefinedTermSet">DefinedTermSet</a>
     *
     *
     * @var string
     */
    protected $termCode;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTermSet
     */
    public function getInDefinedTermSet()
    {
        return $this->inDefinedTermSet;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTermSet $inDefinedTermSet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInDefinedTermSet($inDefinedTermSet)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTermSet",
        );

        $inDefinedTermSet = self::checkTypes($inDefinedTermSet, $types);

        $this->inDefinedTermSet = $inDefinedTermSet;
    }

    /**
     * @return string
     */
    public function getTermCode()
    {
        return $this->termCode;
    }

    /**
     * @param string $termCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermCode($termCode)
    {
        $types = array(
            "string",
        );

        $termCode = self::checkTypes($termCode, $types);

        $this->termCode = $termCode;
    }

}
