<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Inventory\Types;

/**
 *
 * @property \cbdesk\eBaySDK\Inventory\Types\Address $address
 * @property \cbdesk\eBaySDK\Inventory\Types\GeoCoordinates $geoCoordinates
 */
class LocationDetails extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'address' => [
            'type' => 'cbdesk\eBaySDK\Inventory\Types\Address',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'address'
        ],
        'geoCoordinates' => [
            'type' => 'cbdesk\eBaySDK\Inventory\Types\GeoCoordinates',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'geoCoordinates'
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
