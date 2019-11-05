<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AskAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:AskAction";
    }

    /**
     * A sub property of object. A question.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Question
     */
    protected $question;

    /**
     * @return \OpenActive\Models\SchemaOrg\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Question $question
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuestion($question)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Question",
        );

        $question = self::checkTypes($question, $types);

        $this->question = $question;
    }

}
