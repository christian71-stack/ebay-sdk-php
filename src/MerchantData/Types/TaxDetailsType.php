<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\MerchantData\Types;

/**
 *
 * @property \cbdesk\eBaySDK\MerchantData\Enums\TaxTypeCodeType $Imposition
 * @property \cbdesk\eBaySDK\MerchantData\Enums\TaxDescriptionCodeType $TaxDescription
 * @property \cbdesk\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property \cbdesk\eBaySDK\MerchantData\Types\AmountType $TaxOnSubtotalAmount
 * @property \cbdesk\eBaySDK\MerchantData\Types\AmountType $TaxOnShippingAmount
 * @property \cbdesk\eBaySDK\MerchantData\Types\AmountType $TaxOnHandlingAmount
 * @property string $TaxCode
 */
class TaxDetailsType extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Imposition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Imposition'
        ],
        'TaxDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxDescription'
        ],
        'TaxAmount' => [
            'type' => 'cbdesk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
        ],
        'TaxOnSubtotalAmount' => [
            'type' => 'cbdesk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxOnSubtotalAmount'
        ],
        'TaxOnShippingAmount' => [
            'type' => 'cbdesk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxOnShippingAmount'
        ],
        'TaxOnHandlingAmount' => [
            'type' => 'cbdesk\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxOnHandlingAmount'
        ],
        'TaxCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxCode'
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
