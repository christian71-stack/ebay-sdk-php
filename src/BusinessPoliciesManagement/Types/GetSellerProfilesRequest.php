<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property \cbdesk\eBaySDK\BusinessPoliciesManagement\Enums\ProfileType[] $profileType
 * @property integer[] $profileId
 * @property string[] $profileName
 * @property boolean $includeDetails
 */
class GetSellerProfilesRequest extends \cbdesk\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'profileType' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'profileType'
        ],
        'profileId' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'profileId'
        ],
        'profileName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'profileName'
        ],
        'includeDetails' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'includeDetails'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getSellerProfilesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
