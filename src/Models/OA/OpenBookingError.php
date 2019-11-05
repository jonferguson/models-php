<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class OpenBookingError extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "OpenBookingError";
    }

    /**
     * A short, human-readable summary of the problem type. It should not change from occurrence to occurrence of the problem, except for purposes of localization.
     *
     * ```json
     * "name": "No customer details supplied"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A slightly longer, human-readable summary of the problem type. It largely should not change from occurrence to occurrence of the problem, except for purposes of localization or to provide specific information about why the error occurred in that particular case.
     *
     * ```json
     * "description": "No customer details supplied. These must be supplied for calls to C2, P, and B."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * The requested URL.
     *
     *
     * @var string
     */
    protected $instance;

    /**
     * An array of invalid parameters, if appropriate.
     *
     *
     * @var string[]
     */
    protected $invalidParams;

    /**
     * The method of the request (e.g. GET).
     *
     *
     * @var string
     */
    protected $method;

    /**
     * Used by technical support for diagnostics purposes.
     *
     *
     * @var string
     */
    protected $requestId;

    /**
     * An integer representing the HTTP status code.
     *
     *
     * @var int|null
     */
    protected $statusCode;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param string $instance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstance($instance)
    {
        $types = array(
            "string",
        );

        $instance = self::checkTypes($instance, $types);

        $this->instance = $instance;
    }

    /**
     * @return string[]
     */
    public function getInvalidParams()
    {
        return $this->invalidParams;
    }

    /**
     * @param string[] $invalidParams
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInvalidParams($invalidParams)
    {
        $types = array(
            "string[]",
        );

        $invalidParams = self::checkTypes($invalidParams, $types);

        $this->invalidParams = $invalidParams;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMethod($method)
    {
        $types = array(
            "string",
        );

        $method = self::checkTypes($method, $types);

        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequestId($requestId)
    {
        $types = array(
            "string",
        );

        $requestId = self::checkTypes($requestId, $types);

        $this->requestId = $requestId;
    }

    /**
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int|null $statusCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatusCode($statusCode)
    {
        $types = array(
            "int",
            "null",
        );

        $statusCode = self::checkTypes($statusCode, $types);

        $this->statusCode = $statusCode;
    }

}
