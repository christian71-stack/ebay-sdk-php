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
 * @property \cbdesk\eBaySDK\Account\Enums\ShippingCostTypeEnum $costType
 * @property \cbdesk\eBaySDK\Account\Types\Amount $insuranceFee
 * @property boolean $insuranceOffered
 * @property \cbdesk\eBaySDK\Account\Enums\ShippingOptionTypeEnum $optionType
 * @property \cbdesk\eBaySDK\Account\Types\Amount $packageHandlingCost
 * @property string $rateTableId
 * @property \cbdesk\eBaySDK\Account\Types\ShippingService[] $shippingServices
 */
class ShippingOption extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'costType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'costType'
        ],
        'insuranceFee' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insuranceFee'
        ],
        'insuranceOffered' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insuranceOffered'
        ],
        'optionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'optionType'
        ],
        'packageHandlingCost' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'packageHandlingCost'
        ],
        'rateTableId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'rateTableId'
        ],
        'shippingServices' => [
            'type' => 'cbdesk\eBaySDK\Account\Types\ShippingService',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingServices'
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
