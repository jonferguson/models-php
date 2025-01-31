<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExchangeRateSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ExchangeRateSpecification";
    }

    public static function fieldList() {
        $fields = [
            "exchangeRateSpread" => "exchangeRateSpread",
            "currentExchangeRate" => "currentExchangeRate",
            "currency" => "currency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $exchangeRateSpread;

    /**
     * The current price of a currency.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\UnitPriceSpecification|string
     */
    protected $currentExchangeRate;

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currency;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getExchangeRateSpread()
    {
        return $this->exchangeRateSpread;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $exchangeRateSpread
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExchangeRateSpread($exchangeRateSpread)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "Number",
            "null",
        ];

        $exchangeRateSpread = self::checkTypes($exchangeRateSpread, $types);

        $this->exchangeRateSpread = $exchangeRateSpread;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\UnitPriceSpecification|string
     */
    public function getCurrentExchangeRate()
    {
        return $this->currentExchangeRate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\UnitPriceSpecification|string $currentExchangeRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCurrentExchangeRate($currentExchangeRate)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\UnitPriceSpecification",
            "string",
        ];

        $currentExchangeRate = self::checkTypes($currentExchangeRate, $types);

        $this->currentExchangeRate = $currentExchangeRate;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCurrency($currency)
    {
        $types = [
            "string",
        ];

        $currency = self::checkTypes($currency, $types);

        $this->currency = $currency;
    }

}
