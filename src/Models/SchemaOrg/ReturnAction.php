<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReturnAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    protected $recipient;

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization $recipient
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "Organization",
        );

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

}