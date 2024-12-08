<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Marketing\Types;

/**
 *
 * @property \cbdesk\eBaySDK\Marketing\Types\Amount $currentPrice
 * @property boolean $freeShipping
 * @property string $inventoryReferenceId
 * @property string $inventoryReferenceType
 * @property string $listingCategoryId
 * @property string $listingCondition
 * @property string $listingConditionId
 * @property string $listingId
 * @property integer $quantity
 * @property string $storeCategoryId
 * @property string $title
 */
class ListingDetail extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'currentPrice' => [
            'type' => 'cbdesk\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentPrice'
        ],
        'freeShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'freeShipping'
        ],
        'inventoryReferenceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryReferenceId'
        ],
        'inventoryReferenceType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryReferenceType'
        ],
        'listingCategoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingCategoryId'
        ],
        'listingCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingCondition'
        ],
        'listingConditionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingConditionId'
        ],
        'listingId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingId'
        ],
        'quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ],
        'storeCategoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'storeCategoryId'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
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
