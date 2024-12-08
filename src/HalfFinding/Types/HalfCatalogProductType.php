<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\HalfFinding\Types;

/**
 *
 * @property string $title
 * @property string $detailsURL
 * @property string $stockPhotoURL
 * @property \cbdesk\eBaySDK\HalfFinding\Types\ProductIDType[] $productID
 * @property string[] $categoryName
 * @property \cbdesk\eBaySDK\HalfFinding\Types\NameValueListArrayType $itemSpecifics
 * @property \cbdesk\eBaySDK\HalfFinding\Types\ItemType[] $item
 * @property \cbdesk\eBaySDK\HalfFinding\Types\Amount $listPrice
 * @property integer $reviewCount
 * @property \cbdesk\eBaySDK\HalfFinding\Types\Amount $BestFixedPrice
 * @property \cbdesk\eBaySDK\HalfFinding\Types\Amount $BestRentalPrice
 */
class HalfCatalogProductType extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'detailsURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailsURL'
        ],
        'stockPhotoURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stockPhotoURL'
        ],
        'productID' => [
            'type' => 'cbdesk\eBaySDK\HalfFinding\Types\ProductIDType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'productID'
        ],
        'categoryName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryName'
        ],
        'itemSpecifics' => [
            'type' => 'cbdesk\eBaySDK\HalfFinding\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemSpecifics'
        ],
        'item' => [
            'type' => 'cbdesk\eBaySDK\HalfFinding\Types\ItemType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'listPrice' => [
            'type' => 'cbdesk\eBaySDK\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listPrice'
        ],
        'reviewCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reviewCount'
        ],
        'BestFixedPrice' => [
            'type' => 'cbdesk\eBaySDK\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestFixedPrice'
        ],
        'BestRentalPrice' => [
            'type' => 'cbdesk\eBaySDK\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestRentalPrice'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
