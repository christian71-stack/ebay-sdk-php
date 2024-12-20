<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Product\Services;

class ProductService extends \cbdesk\eBaySDK\Product\Services\ProductBaseService
{
    const API_VERSION = '1.4.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\FindProductsRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\FindProductsResponse
     */
    public function findProducts(\cbdesk\eBaySDK\Product\Types\FindProductsRequest $request)
    {
        return $this->findProductsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\FindProductsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProductsAsync(\cbdesk\eBaySDK\Product\Types\FindProductsRequest $request)
    {
        return $this->callOperationAsync(
            'findProducts',
            $request,
            '\cbdesk\eBaySDK\Product\Types\FindProductsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\FindProductsResponse
     */
    public function findProductsByCompatibility(\cbdesk\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request)
    {
        return $this->findProductsByCompatibilityAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProductsByCompatibilityAsync(\cbdesk\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request)
    {
        return $this->callOperationAsync(
            'findProductsByCompatibility',
            $request,
            '\cbdesk\eBaySDK\Product\Types\FindProductsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\GetProductDetailsRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\GetProductDetailsResponse
     */
    public function getProductDetails(\cbdesk\eBaySDK\Product\Types\GetProductDetailsRequest $request)
    {
        return $this->getProductDetailsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\GetProductDetailsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductDetailsAsync(\cbdesk\eBaySDK\Product\Types\GetProductDetailsRequest $request)
    {
        return $this->callOperationAsync(
            'getProductDetails',
            $request,
            '\cbdesk\eBaySDK\Product\Types\GetProductDetailsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\GetProductCompatiblitiesResponse
     */
    public function getProductCompatibilities(\cbdesk\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request)
    {
        return $this->getProductCompatibilitiesAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCompatibilitiesAsync(\cbdesk\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request)
    {
        return $this->callOperationAsync(
            'getProductCompatibilities',
            $request,
            '\cbdesk\eBaySDK\Product\Types\GetProductCompatiblitiesResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse
     */
    public function findCompatibilitiesBySpecification(\cbdesk\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request)
    {
        return $this->findCompatibilitiesBySpecificationAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findCompatibilitiesBySpecificationAsync(\cbdesk\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request)
    {
        return $this->callOperationAsync(
            'findCompatibilitiesBySpecification',
            $request,
            '\cbdesk\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\AddProductsRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\AddProductsResponse
     */
    public function addProducts(\cbdesk\eBaySDK\Product\Types\AddProductsRequest $request)
    {
        return $this->addProductsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\AddProductsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addProductsAsync(\cbdesk\eBaySDK\Product\Types\AddProductsRequest $request)
    {
        return $this->callOperationAsync(
            'addProducts',
            $request,
            '\cbdesk\eBaySDK\Product\Types\AddProductsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\GetProductSubmissionsRequest $request
     * @return \cbdesk\eBaySDK\Product\Types\GetProductSubmissionsResponse
     */
    public function getProductSubmissions(\cbdesk\eBaySDK\Product\Types\GetProductSubmissionsRequest $request)
    {
        return $this->getProductSubmissionsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Product\Types\GetProductSubmissionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSubmissionsAsync(\cbdesk\eBaySDK\Product\Types\GetProductSubmissionsRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSubmissions',
            $request,
            '\cbdesk\eBaySDK\Product\Types\GetProductSubmissionsResponse'
        );
    }
}
