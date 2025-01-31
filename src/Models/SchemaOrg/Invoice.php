<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Invoice extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Invoice";
    }

    public static function fieldList() {
        $fields = [
            "paymentDue" => "paymentDue",
            "paymentMethodId" => "paymentMethodId",
            "accountId" => "accountId",
            "billingPeriod" => "billingPeriod",
            "category" => "category",
            "paymentStatus" => "paymentStatus",
            "customer" => "customer",
            "totalPaymentDue" => "totalPaymentDue",
            "paymentDueDate" => "paymentDueDate",
            "scheduledPaymentDate" => "scheduledPaymentDate",
            "referencesOrder" => "referencesOrder",
            "confirmationNumber" => "confirmationNumber",
            "minimumPaymentDue" => "minimumPaymentDue",
            "provider" => "provider",
            "paymentMethod" => "paymentMethod",
            "broker" => "broker",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDue;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     *
     * @var string
     */
    protected $paymentMethodId;

    /**
     * The identifier for the account the payment will be applied to.
     *
     *
     * @var string
     */
    protected $accountId;

    /**
     * The time interval used to compute the invoice.
     *
     *
     * @var DateInterval|string|null
     */
    protected $billingPeriod;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PaymentStatusType
     */
    protected $paymentStatus;

    /**
     * Party placing the order or paying the invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $customer;

    /**
     * The total amount due.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    protected $totalPaymentDue;

    /**
     * The date that payment is due.
     *
     *
     * @var Date|DateTime|null
     */
    protected $paymentDueDate;

    /**
     * The date the invoice is scheduled to be paid.
     *
     *
     * @var Date|null
     */
    protected $scheduledPaymentDate;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Order|string
     */
    protected $referencesOrder;

    /**
     * A number that confirms the given order or payment has been received.
     *
     *
     * @var string
     */
    protected $confirmationNumber;

    /**
     * The minimum payment required at this time.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    protected $minimumPaymentDue;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $broker;

    /**
     * @return DateTime|null
     */
    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    /**
     * @param DateTime|null $paymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentDue($paymentDue)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $paymentDue = self::checkTypes($paymentDue, $types);

        $this->paymentDue = $paymentDue;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $types = [
            "string",
        ];

        $paymentMethodId = self::checkTypes($paymentMethodId, $types);

        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountId($accountId)
    {
        $types = [
            "string",
        ];

        $accountId = self::checkTypes($accountId, $types);

        $this->accountId = $accountId;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getBillingPeriod()
    {
        return $this->billingPeriod;
    }

    /**
     * @param DateInterval|string|null $billingPeriod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingPeriod($billingPeriod)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $billingPeriod = self::checkTypes($billingPeriod, $types);

        $this->billingPeriod = $billingPeriod;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PaymentStatusType
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PaymentStatusType $paymentStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentStatus($paymentStatus)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PaymentStatusType",
        ];

        $paymentStatus = self::checkTypes($paymentStatus, $types);

        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string $totalPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPaymentDue($totalPaymentDue)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
        ];

        $totalPaymentDue = self::checkTypes($totalPaymentDue, $types);

        $this->totalPaymentDue = $totalPaymentDue;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param Date|DateTime|null $paymentDueDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentDueDate($paymentDueDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $paymentDueDate = self::checkTypes($paymentDueDate, $types);

        $this->paymentDueDate = $paymentDueDate;
    }

    /**
     * @return Date|null
     */
    public function getScheduledPaymentDate()
    {
        return $this->scheduledPaymentDate;
    }

    /**
     * @param Date|null $scheduledPaymentDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScheduledPaymentDate($scheduledPaymentDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $scheduledPaymentDate = self::checkTypes($scheduledPaymentDate, $types);

        $this->scheduledPaymentDate = $scheduledPaymentDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Order|string
     */
    public function getReferencesOrder()
    {
        return $this->referencesOrder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Order|string $referencesOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReferencesOrder($referencesOrder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Order",
            "string",
        ];

        $referencesOrder = self::checkTypes($referencesOrder, $types);

        $this->referencesOrder = $referencesOrder;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * @param string $confirmationNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $types = [
            "string",
        ];

        $confirmationNumber = self::checkTypes($confirmationNumber, $types);

        $this->confirmationNumber = $confirmationNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    public function getMinimumPaymentDue()
    {
        return $this->minimumPaymentDue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string $minimumPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinimumPaymentDue($minimumPaymentDue)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
        ];

        $minimumPaymentDue = self::checkTypes($minimumPaymentDue, $types);

        $this->minimumPaymentDue = $minimumPaymentDue;
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
     * @return \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PaymentMethod|null $paymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethod($paymentMethod)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PaymentMethod",
            "null",
        ];

        $paymentMethod = self::checkTypes($paymentMethod, $types);

        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

}
