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
 * @property string $href
 * @property integer $limit
 * @property string $next
 * @property \cbdesk\eBaySDK\Inventory\Types\EbayOfferDetailsWithAll[] $offers
 * @property string $prev
 * @property integer $size
 * @property integer $total
 */
class Offers extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'href' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'href'
        ],
        'limit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'next' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'next'
        ],
        'offers' => [
            'type' => 'cbdesk\eBaySDK\Inventory\Types\EbayOfferDetailsWithAll',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'offers'
        ],
        'prev' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'prev'
        ],
        'size' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'size'
        ],
        'total' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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
