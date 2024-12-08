<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Inventory\Services;

class InventoryService extends \cbdesk\eBaySDK\Inventory\Services\InventoryBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'BulkUpdatePriceAndQuantity' => [
            'method' => 'POST',
            'resource' => 'bulk_update_price_quantity',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse',
            'params' => [
            ]
        ],
        'CreateOrReplaceInventoryItem' => [
            'method' => 'PUT',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteInventoryItem' => [
            'method' => 'DELETE',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryItem' => [
            'method' => 'GET',
            'resource' => 'inventory_item/{sku}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryItems' => [
            'method' => 'GET',
            'resource' => 'inventory_item',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateOrReplaceInventoryItemGroup' => [
            'method' => 'PUT',
            'resource' => 'inventory_item_group/{inventoryItemGroupKey}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse',
            'params' => [
                'inventoryItemGroupKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteInventoryItemGroup' => [
            'method' => 'DELETE',
            'resource' => 'inventory_item_group/{inventoryItemGroupKey}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestResponse',
            'params' => [
                'inventoryItemGroupKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryItemGroup' => [
            'method' => 'GET',
            'resource' => 'inventory_item_group/{inventoryItemGroupKey}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemGroupRestResponse',
            'params' => [
                'inventoryItemGroupKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'BulkMigrateListings' => [
            'method' => 'POST',
            'resource' => 'bulk_migrate_listing',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse',
            'params' => [
            ]
        ],
        'CreateInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteInventoryLocation' => [
            'method' => 'DELETE',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DisableInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}/disable',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\DisableInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'EnableInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}/enable',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\EnableInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryLocation' => [
            'method' => 'GET',
            'resource' => 'location/{merchantLocationKey}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetInventoryLocations' => [
            'method' => 'GET',
            'resource' => 'location',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'UpdateInventoryLocation' => [
            'method' => 'POST',
            'resource' => 'location/{merchantLocationKey}/update_location_details',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\UpdateInventoryLocationRestResponse',
            'params' => [
                'merchantLocationKey' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateOffer' => [
            'method' => 'POST',
            'resource' => 'offer',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\CreateOfferRestResponse',
            'params' => [
            ]
        ],
        'DeleteOffer' => [
            'method' => 'DELETE',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\DeleteOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetListingFees' => [
            'method' => 'POST',
            'resource' => 'offer/get_listing_fees',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetListingFeesRestResponse',
            'params' => [
            ]
        ],
        'GetOffer' => [
            'method' => 'GET',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetOffers' => [
            'method' => 'GET',
            'resource' => 'offer',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetOffersRestResponse',
            'params' => [
                'format' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'PublishOffer' => [
            'method' => 'POST',
            'resource' => 'offer/{offerId}/publish',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\PublishOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'WithdrawOffer' => [
            'method' => 'POST',
            'resource' => 'offer/{offerId}/withdraw',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\WithdrawOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateOffer' => [
            'method' => 'PUT',
            'resource' => 'offer/{offerId}',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\UpdateOfferRestResponse',
            'params' => [
                'offerId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateOrReplaceProductCompatibility' => [
            'method' => 'PUT',
            'resource' => 'inventory_item/{sku}/product_compatibility',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteProductCompatibility' => [
            'method' => 'DELETE',
            'resource' => 'inventory_item/{sku}/product_compatibility',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetProductCompatibility' => [
            'method' => 'GET',
            'resource' => 'inventory_item/{sku}/product_compatibility',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\GetProductCompatibilityRestResponse',
            'params' => [
                'sku' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'PublishOfferByInventoryItemGroup' => [
            'method' => 'POST',
            'resource' => 'offer/publish_by_inventory_item_group',
            'responseClass' => '\cbdesk\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse',
            'params' => [
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
     * @param \cbdesk\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestResponse
     */
    public function bulkUpdatePriceAndQuantity(\cbdesk\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request)
    {
        return $this->bulkUpdatePriceAndQuantityAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkUpdatePriceAndQuantityAsync(\cbdesk\eBaySDK\Inventory\Types\BulkUpdatePriceAndQuantityRestRequest $request)
    {
        return $this->callOperationAsync('BulkUpdatePriceAndQuantity', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestResponse
     */
    public function createOrReplaceInventoryItem(\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request)
    {
        return $this->createOrReplaceInventoryItemAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemAsync(\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceInventoryItem', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemRestResponse
     */
    public function deleteInventoryItem(\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request)
    {
        return $this->deleteInventoryItemAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemAsync(\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryItem', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemRestResponse
     */
    public function getInventoryItem(\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request)
    {
        return $this->getInventoryItemAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemAsync(\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItem', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse
     */
    public function getInventoryItems(\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request)
    {
        return $this->getInventoryItemsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemsAsync(\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemsRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItems', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestResponse
     */
    public function createOrReplaceInventoryItemGroup(\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request)
    {
        return $this->createOrReplaceInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemGroupAsync(\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceInventoryItemGroup', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestResponse
     */
    public function deleteInventoryItemGroup(\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request)
    {
        return $this->deleteInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemGroupAsync(\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryItemGroup', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemGroupRestResponse
     */
    public function getInventoryItemGroup(\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request)
    {
        return $this->getInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemGroupAsync(\cbdesk\eBaySDK\Inventory\Types\GetInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryItemGroup', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse
     */
    public function bulkMigrateListings(\cbdesk\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request)
    {
        return $this->bulkMigrateListingsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkMigrateListingsAsync(\cbdesk\eBaySDK\Inventory\Types\BulkMigrateListingsRestRequest $request)
    {
        return $this->callOperationAsync('BulkMigrateListings', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse
     */
    public function createInventoryLocation(\cbdesk\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request)
    {
        return $this->createInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInventoryLocationAsync(\cbdesk\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('CreateInventoryLocation', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryLocationRestResponse
     */
    public function deleteInventoryLocation(\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request)
    {
        return $this->deleteInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryLocationAsync(\cbdesk\eBaySDK\Inventory\Types\DeleteInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('DeleteInventoryLocation', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\DisableInventoryLocationRestResponse
     */
    public function disableInventoryLocation(\cbdesk\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request)
    {
        return $this->disableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disableInventoryLocationAsync(\cbdesk\eBaySDK\Inventory\Types\DisableInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('DisableInventoryLocation', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\EnableInventoryLocationRestResponse
     */
    public function enableInventoryLocation(\cbdesk\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request)
    {
        return $this->enableInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableInventoryLocationAsync(\cbdesk\eBaySDK\Inventory\Types\EnableInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('EnableInventoryLocation', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse
     */
    public function getInventoryLocation(\cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request)
    {
        return $this->getInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryLocationAsync(\cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryLocation', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse
     */
    public function getInventoryLocations(\cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request)
    {
        return $this->getInventoryLocationsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryLocationsAsync(\cbdesk\eBaySDK\Inventory\Types\GetInventoryLocationsRestRequest $request)
    {
        return $this->callOperationAsync('GetInventoryLocations', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\UpdateInventoryLocationRestResponse
     */
    public function updateInventoryLocation(\cbdesk\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request)
    {
        return $this->updateInventoryLocationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInventoryLocationAsync(\cbdesk\eBaySDK\Inventory\Types\UpdateInventoryLocationRestRequest $request)
    {
        return $this->callOperationAsync('UpdateInventoryLocation', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOfferRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\CreateOfferRestResponse
     */
    public function createOffer(\cbdesk\eBaySDK\Inventory\Types\CreateOfferRestRequest $request)
    {
        return $this->createOfferAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOfferAsync(\cbdesk\eBaySDK\Inventory\Types\CreateOfferRestRequest $request)
    {
        return $this->callOperationAsync('CreateOffer', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\DeleteOfferRestResponse
     */
    public function deleteOffer(\cbdesk\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request)
    {
        return $this->deleteOfferAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOfferAsync(\cbdesk\eBaySDK\Inventory\Types\DeleteOfferRestRequest $request)
    {
        return $this->callOperationAsync('DeleteOffer', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetListingFeesRestResponse
     */
    public function getListingFees(\cbdesk\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request)
    {
        return $this->getListingFeesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingFeesAsync(\cbdesk\eBaySDK\Inventory\Types\GetListingFeesRestRequest $request)
    {
        return $this->callOperationAsync('GetListingFees', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetOfferRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetOfferRestResponse
     */
    public function getOffer(\cbdesk\eBaySDK\Inventory\Types\GetOfferRestRequest $request)
    {
        return $this->getOfferAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOfferAsync(\cbdesk\eBaySDK\Inventory\Types\GetOfferRestRequest $request)
    {
        return $this->callOperationAsync('GetOffer', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetOffersRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetOffersRestResponse
     */
    public function getOffers(\cbdesk\eBaySDK\Inventory\Types\GetOffersRestRequest $request)
    {
        return $this->getOffersAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetOffersRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOffersAsync(\cbdesk\eBaySDK\Inventory\Types\GetOffersRestRequest $request)
    {
        return $this->callOperationAsync('GetOffers', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\PublishOfferRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\PublishOfferRestResponse
     */
    public function publishOffer(\cbdesk\eBaySDK\Inventory\Types\PublishOfferRestRequest $request)
    {
        return $this->publishOfferAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\PublishOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishOfferAsync(\cbdesk\eBaySDK\Inventory\Types\PublishOfferRestRequest $request)
    {
        return $this->callOperationAsync('PublishOffer', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\WithdrawOfferRestResponse
     */
    public function withdrawOffer(\cbdesk\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request)
    {
        return $this->withdrawOfferAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function withdrawOfferAsync(\cbdesk\eBaySDK\Inventory\Types\WithdrawOfferRestRequest $request)
    {
        return $this->callOperationAsync('WithdrawOffer', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\UpdateOfferRestResponse
     */
    public function updateOffer(\cbdesk\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request)
    {
        return $this->updateOfferAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOfferAsync(\cbdesk\eBaySDK\Inventory\Types\UpdateOfferRestRequest $request)
    {
        return $this->callOperationAsync('UpdateOffer', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestResponse
     */
    public function createOrReplaceProductCompatibility(\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request)
    {
        return $this->createOrReplaceProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceProductCompatibilityAsync(\cbdesk\eBaySDK\Inventory\Types\CreateOrReplaceProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('CreateOrReplaceProductCompatibility', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestResponse
     */
    public function deleteProductCompatibility(\cbdesk\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request)
    {
        return $this->deleteProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductCompatibilityAsync(\cbdesk\eBaySDK\Inventory\Types\DeleteProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('DeleteProductCompatibility', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\GetProductCompatibilityRestResponse
     */
    public function getProductCompatibility(\cbdesk\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request)
    {
        return $this->getProductCompatibilityAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCompatibilityAsync(\cbdesk\eBaySDK\Inventory\Types\GetProductCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('GetProductCompatibility', $request);
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request
     * @return \cbdesk\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse
     */
    public function publishOfferByInventoryItemGroup(\cbdesk\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request)
    {
        return $this->publishOfferByInventoryItemGroupAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publishOfferByInventoryItemGroupAsync(\cbdesk\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('PublishOfferByInventoryItemGroup', $request);
    }
}
