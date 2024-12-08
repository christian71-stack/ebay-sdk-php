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
 * @property \cbdesk\eBaySDK\Trading\Enums\MessageTypeCodeType $MessageType
 * @property \cbdesk\eBaySDK\Trading\Enums\QuestionTypeCodeType $QuestionType
 * @property boolean $EmailCopyToSender
 * @property boolean $DisplayToPublic
 * @property string $SenderID
 * @property string $SenderEmail
 * @property string[] $RecipientID
 * @property string $Subject
 * @property string $Body
 * @property string $MessageID
 * @property string $ParentMessageID
 * @property \cbdesk\eBaySDK\Trading\Types\MessageMediaType[] $MessageMedia
 */
class MemberMessageType extends \cbdesk\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'MessageType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageType'
        ],
        'QuestionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuestionType'
        ],
        'EmailCopyToSender' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailCopyToSender'
        ],
        'DisplayToPublic' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisplayToPublic'
        ],
        'SenderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SenderID'
        ],
        'SenderEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SenderEmail'
        ],
        'RecipientID' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RecipientID'
        ],
        'Subject' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subject'
        ],
        'Body' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Body'
        ],
        'MessageID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ],
        'ParentMessageID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ParentMessageID'
        ],
        'MessageMedia' => [
            'type' => 'cbdesk\eBaySDK\Trading\Types\MessageMediaType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'MessageMedia'
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
