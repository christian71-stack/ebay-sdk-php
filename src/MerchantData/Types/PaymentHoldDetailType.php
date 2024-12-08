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
 * @property \DateTime $ExpectedReleaseDate
 * @property \cbdesk\eBaySDK\MerchantData\Types\RequiredSellerActionArrayType $RequiredSellerActionArray
 * @property integer $NumOfReqSellerActions
 * @property \cbdesk\eBaySDK\MerchantData\Enums\PaymentHoldReasonCodeType $PaymentHoldReason
 */
class PaymentHoldDetailType extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ExpectedReleaseDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExpectedReleaseDate'
        ],
        'RequiredSellerActionArray' => [
            'type' => 'cbdesk\eBaySDK\MerchantData\Types\RequiredSellerActionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequiredSellerActionArray'
        ],
        'NumOfReqSellerActions' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NumOfReqSellerActions'
        ],
        'PaymentHoldReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldReason'
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
