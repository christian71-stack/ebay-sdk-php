<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Browse\Services;

class BrowseService extends \cbdesk\eBaySDK\Browse\Services\BrowseBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetItem' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\cbdesk\eBaySDK\Browse\Types\GetItemRestResponse',
            'params' => [
                'item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemByLegacyId' => [
            'method' => 'GET',
            'resource' => 'item/get_item_by_legacy_id',
            'responseClass' => '\cbdesk\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse',
            'params' => [
                'legacy_item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'legacy_variation_id' => [
                    'valid' => ['string']
                ],
                'legacy_variation_sku' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetItemsByItemGroup' => [
            'method' => 'GET',
            'resource' => 'item/get_items_by_item_group',
            'responseClass' => '\cbdesk\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse',
            'params' => [
                'item_group_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'SearchForItems' => [
            'method' => 'GET',
            'resource' => 'item_summary/search',
            'responseClass' => '\cbdesk\eBaySDK\Browse\Types\SearchForItemsRestResponse',
            'params' => [
                'aspect_filter' => [
                    'valid' => ['string']
                ],
                'category_ids' => [
                    'valid' => ['string']
                ],
                'epid' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'filter' => [
                    'valid' => ['string']
                ],
                'gtin' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\GetItemRestRequest $request
     * @return \cbdesk\eBaySDK\Browse\Types\GetItemRestResponse
     */
    public function getItem(\cbdesk\eBaySDK\Browse\Types\GetItemRestRequest $request)
    {
        return $this->getItemAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\GetItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemAsync(\cbdesk\eBaySDK\Browse\Types\GetItemRestRequest $request)
    {
        return $this->callOperationAsync('GetItem', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request
     * @return \cbdesk\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse
     */
    public function getItemByLegacyId(\cbdesk\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request)
    {
        return $this->getItemByLegacyIdAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemByLegacyIdAsync(\cbdesk\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request)
    {
        return $this->callOperationAsync('GetItemByLegacyId', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request
     * @return \cbdesk\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse
     */
    public function getItemsByItemGroup(\cbdesk\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request)
    {
        return $this->getItemsByItemGroupAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemsByItemGroupAsync(\cbdesk\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('GetItemsByItemGroup', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\SearchForItemsRestRequest $request
     * @return \cbdesk\eBaySDK\Browse\Types\SearchForItemsRestResponse
     */
    public function searchForItems(\cbdesk\eBaySDK\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->searchForItemsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Browse\Types\SearchForItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchForItemsAsync(\cbdesk\eBaySDK\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->callOperationAsync('SearchForItems', $request);
    }
}
