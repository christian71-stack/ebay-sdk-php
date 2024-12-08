<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $action
 * @property \cbdesk\eBaySDK\PostOrder\Enums\UserPartyEnum $actor
 * @property \cbdesk\eBaySDK\PostOrder\Types\DateTime $date
 * @property string $description
 * @property \cbdesk\eBaySDK\PostOrder\Types\MoneyMovementEntries $moneyMovement
 */
class ClaimHistoryEventModel extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'action' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'action'
        ],
        'actor' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actor'
        ],
        'date' => [
            'type' => 'cbdesk\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'date'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'moneyMovement' => [
            'type' => 'cbdesk\eBaySDK\PostOrder\Types\MoneyMovementEntries',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'moneyMovement'
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
