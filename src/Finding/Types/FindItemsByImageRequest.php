<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Finding\Types;

/**
 *
 * @property string $itemId
 * @property string[] $categoryId
 * @property \cbdesk\eBaySDK\Finding\Types\ItemFilter[] $itemFilter
 * @property \cbdesk\eBaySDK\Finding\Types\AspectFilter[] $aspectFilter
 * @property \cbdesk\eBaySDK\Finding\Enums\OutputSelectorType[] $outputSelector
 */
class FindItemsByImageRequest extends \cbdesk\eBaySDK\Finding\Types\BestMatchFindingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'itemFilter' => [
            'type' => 'cbdesk\eBaySDK\Finding\Types\ItemFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ],
        'aspectFilter' => [
            'type' => 'cbdesk\eBaySDK\Finding\Types\AspectFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectFilter'
        ],
        'outputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'outputSelector'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsByImageRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
