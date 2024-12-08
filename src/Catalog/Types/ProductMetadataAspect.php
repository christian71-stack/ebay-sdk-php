<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Catalog\Types;

/**
 *
 * @property string $aspectHelpText
 * @property \cbdesk\eBaySDK\Catalog\Types\ProductAspectConstraint $constraint
 * @property boolean $droppable
 * @property string $name
 * @property \cbdesk\eBaySDK\Catalog\Types\ProductAspectValue[] $values
 * @property string[] $valuesAssociatedWithProduct
 */
class ProductMetadataAspect extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectHelpText' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspectHelpText'
        ],
        'constraint' => [
            'type' => 'cbdesk\eBaySDK\Catalog\Types\ProductAspectConstraint',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'constraint'
        ],
        'droppable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'droppable'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'values' => [
            'type' => 'cbdesk\eBaySDK\Catalog\Types\ProductAspectValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'values'
        ],
        'valuesAssociatedWithProduct' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'valuesAssociatedWithProduct'
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
