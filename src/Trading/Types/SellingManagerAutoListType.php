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
 * @property integer $SourceSaleTemplateID
 * @property \cbdesk\eBaySDK\Trading\Types\SellingManagerAutoListMinActiveItemsType $KeepMinActive
 * @property \cbdesk\eBaySDK\Trading\Types\SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule
 */
class SellingManagerAutoListType extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SourceSaleTemplateID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SourceSaleTemplateID'
        ],
        'KeepMinActive' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\SellingManagerAutoListMinActiveItemsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'KeepMinActive'
        ],
        'ListAccordingToSchedule' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\SellingManagerAutoListAccordingToScheduleType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListAccordingToSchedule'
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
