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
 * @property \cbdesk\eBaySDK\Trading\Enums\SellingManagerProductSortCodeType $Sort
 * @property integer $FolderID
 * @property \cbdesk\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property \cbdesk\eBaySDK\Trading\Enums\SortOrderCodeType $SortOrder
 * @property \cbdesk\eBaySDK\Trading\Types\SellingManagerSearchType $Search
 * @property integer $StoreCategoryID
 * @property \cbdesk\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType[] $Filter
 */
class GetSellingManagerInventoryRequestType extends \cbdesk\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'FolderID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ],
        'Pagination' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'Search' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\SellingManagerSearchType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Search'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'Filter' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Filter'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellingManagerInventoryRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
