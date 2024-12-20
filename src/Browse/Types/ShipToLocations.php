<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Browse\Types;

/**
 *
 * @property \cbdesk\eBaySDK\Browse\Types\Region[] $regionExcluded
 * @property \cbdesk\eBaySDK\Browse\Types\Region[] $regionIncluded
 */
class ShipToLocations extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'regionExcluded' => [
            'type' => 'cbdesk\eBaySDK\Browse\Types\Region',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'regionExcluded'
        ],
        'regionIncluded' => [
            'type' => 'cbdesk\eBaySDK\Browse\Types\Region',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'regionIncluded'
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
