<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Trading\Types;

/**
 *
 * @property string $ItemID
 * @property string $SKU
 * @property \cbdesk\eBaySDK\Trading\Types\FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property \cbdesk\eBaySDK\Trading\Enums\DiscountReasonCodeType[] $DiscountReason
 * @property \cbdesk\eBaySDK\Trading\Types\ListingRecommendationsType $ListingRecommendations
 */
class VerifyAddFixedPriceItemResponseType extends \cbdesk\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'Fees' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees'
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'Category2ID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Category2ID'
        ],
        'DiscountReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DiscountReason'
        ],
        'ListingRecommendations' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\ListingRecommendationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingRecommendations'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
