<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Order\Types;

/**
 *
 * @property \cbdesk\eBaySDK\Order\Types\PaymentMethod[] $acceptedPaymentMethods
 * @property string $checkoutSessionId
 * @property string $expirationDate
 * @property \cbdesk\eBaySDK\Order\Types\LineItem[] $lineItems
 * @property \cbdesk\eBaySDK\Order\Types\PricingSummary $pricingSummary
 * @property \cbdesk\eBaySDK\Order\Types\ProvidedPaymentInstrument $providedPaymentInstrument
 * @property \cbdesk\eBaySDK\Order\Types\ShippingAddress $shippingAddress
 * @property \cbdesk\eBaySDK\Order\Types\ErrorDetailV3[] $warnings
 */
class CheckoutSessionResponse extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'acceptedPaymentMethods' => [
            'type' => 'cbdesk\eBaySDK\Order\Types\PaymentMethod',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'acceptedPaymentMethods'
        ],
        'checkoutSessionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'checkoutSessionId'
        ],
        'expirationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lineItems' => [
            'type' => 'cbdesk\eBaySDK\Order\Types\LineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'pricingSummary' => [
            'type' => 'cbdesk\eBaySDK\Order\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'providedPaymentInstrument' => [
            'type' => 'cbdesk\eBaySDK\Order\Types\ProvidedPaymentInstrument',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'providedPaymentInstrument'
        ],
        'shippingAddress' => [
            'type' => 'cbdesk\eBaySDK\Order\Types\ShippingAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingAddress'
        ],
        'warnings' => [
            'type' => 'cbdesk\eBaySDK\Order\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
