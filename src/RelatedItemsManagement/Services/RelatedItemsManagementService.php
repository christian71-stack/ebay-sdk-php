<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\RelatedItemsManagement\Services;

class RelatedItemsManagementService extends \cbdesk\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
{
    const API_VERSION = '1.0.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse
     */
    public function createBundles(\cbdesk\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->createBundlesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBundlesAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'createBundles',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\FindBundlesResponse
     */
    public function findBundles(\cbdesk\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->findBundlesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findBundlesAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'findBundles',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\FindBundlesResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse
     */
    public function getBundles(\cbdesk\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->getBundlesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBundlesAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'getBundles',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse
     */
    public function updateBundles(\cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->updateBundlesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundlesAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundles',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse
     */
    public function updateBundleStatus(\cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->updateBundleStatusAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundleStatusAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundleStatus',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse
     */
    public function deleteBundles(\cbdesk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->deleteBundlesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBundlesAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'deleteBundles',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \cbdesk\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse
     */
    public function getVersion(\cbdesk\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\cbdesk\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\cbdesk\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse'
        );
    }
}
