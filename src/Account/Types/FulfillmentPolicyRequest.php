<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Account\Types;

/**
 *
 * @property \cbdesk\eBaySDK\Account\Types\CategoryType[] $categoryTypes
 * @property string $description
 * @property boolean $freightShipping
 * @property boolean $globalShipping
 * @property \cbdesk\eBaySDK\Account\Types\TimeDuration $handlingTime
 * @property boolean $localPickup
 * @property \cbdesk\eBaySDK\Account\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property boolean $pickupDropOff
 * @property \cbdesk\eBaySDK\Account\Types\ShippingOption[] $shippingOptions
 * @property \cbdesk\eBaySDK\Account\Types\RegionSet $shipToLocations
 */
class FulfillmentPolicyRequest extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryTypes' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\CategoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryTypes'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'freightShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'freightShipping'
        ],
        'globalShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'globalShipping'
        ],
        'handlingTime' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'handlingTime'
        ],
        'localPickup' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'localPickup'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'pickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pickupDropOff'
        ],
        'shippingOptions' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\ShippingOption',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'shipToLocations' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\RegionSet',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipToLocations'
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
