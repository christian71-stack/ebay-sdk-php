<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Finding\Services;

class FindingService extends \cbdesk\eBaySDK\Finding\Services\FindingBaseService
{
    const API_VERSION = '1.13.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse
     */
    public function getSearchKeywordsRecommendation(\cbdesk\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest $request)
    {
        return $this->getSearchKeywordsRecommendationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchKeywordsRecommendationAsync(\cbdesk\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest $request)
    {
        return $this->callOperationAsync(
            'getSearchKeywordsRecommendation',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByKeywordsRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsByKeywordsResponse
     */
    public function findItemsByKeywords(\cbdesk\eBaySDK\Finding\Types\FindItemsByKeywordsRequest $request)
    {
        return $this->findItemsByKeywordsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByKeywordsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsByKeywordsAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsByKeywordsRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsByKeywords',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsByKeywordsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByCategoryRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsByCategoryResponse
     */
    public function findItemsByCategory(\cbdesk\eBaySDK\Finding\Types\FindItemsByCategoryRequest $request)
    {
        return $this->findItemsByCategoryAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByCategoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsByCategoryAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsByCategoryRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsByCategory',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsByCategoryResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsAdvancedRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsAdvancedResponse
     */
    public function findItemsAdvanced(\cbdesk\eBaySDK\Finding\Types\FindItemsAdvancedRequest $request)
    {
        return $this->findItemsAdvancedAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsAdvancedRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsAdvancedAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsAdvancedRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsAdvanced',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsAdvancedResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByProductRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsByProductResponse
     */
    public function findItemsByProduct(\cbdesk\eBaySDK\Finding\Types\FindItemsByProductRequest $request)
    {
        return $this->findItemsByProductAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByProductRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsByProductAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsByProductRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsByProduct',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsByProductResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsIneBayStoresResponse
     */
    public function findItemsIneBayStores(\cbdesk\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest $request)
    {
        return $this->findItemsIneBayStoresAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsIneBayStoresAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsIneBayStores',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsIneBayStoresResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByImageRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsByImageResponse
     */
    public function findItemsByImage(\cbdesk\eBaySDK\Finding\Types\FindItemsByImageRequest $request)
    {
        return $this->findItemsByImageAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsByImageRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsByImageAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsByImageRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsByImage',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsByImageResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\GetHistogramsRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\GetHistogramsResponse
     */
    public function getHistograms(\cbdesk\eBaySDK\Finding\Types\GetHistogramsRequest $request)
    {
        return $this->getHistogramsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\GetHistogramsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistogramsAsync(\cbdesk\eBaySDK\Finding\Types\GetHistogramsRequest $request)
    {
        return $this->callOperationAsync(
            'getHistograms',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\GetHistogramsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\GetVersionRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\GetVersionResponse
     */
    public function getVersion(\cbdesk\eBaySDK\Finding\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\cbdesk\eBaySDK\Finding\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\GetVersionResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindItemsForFavoriteSearchResponse
     */
    public function findItemsForFavoriteSearch(\cbdesk\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest $request)
    {
        return $this->findItemsForFavoriteSearchAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findItemsForFavoriteSearchAsync(\cbdesk\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest $request)
    {
        return $this->callOperationAsync(
            'findItemsForFavoriteSearch',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindItemsForFavoriteSearchResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindCompletedItemsRequest $request
     * @return \cbdesk\eBaySDK\Finding\Types\FindCompletedItemsResponse
     */
    public function findCompletedItems(\cbdesk\eBaySDK\Finding\Types\FindCompletedItemsRequest $request)
    {
        return $this->findCompletedItemsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Finding\Types\FindCompletedItemsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findCompletedItemsAsync(\cbdesk\eBaySDK\Finding\Types\FindCompletedItemsRequest $request)
    {
        return $this->callOperationAsync(
            'findCompletedItems',
            $request,
            '\cbdesk\eBaySDK\Finding\Types\FindCompletedItemsResponse'
        );
    }
}
