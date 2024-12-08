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
 * @property \cbdesk\eBaySDK\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property integer $FolderID
 * @property \cbdesk\eBaySDK\Trading\Types\SellingManagerProductSpecificsType $SellingManagerProductSpecifics
 */
class AddSellingManagerProductRequestType extends \cbdesk\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingManagerProductDetails' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'FolderID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ],
        'SellingManagerProductSpecifics' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\SellingManagerProductSpecificsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductSpecifics'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'AddSellingManagerProductRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
