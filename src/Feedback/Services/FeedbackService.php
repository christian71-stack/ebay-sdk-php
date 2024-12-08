<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\Feedback\Services;

class FeedbackService extends \cbdesk\eBaySDK\Feedback\Services\FeedbackBaseService
{
    const API_VERSION = '1.2.2';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request
     * @return \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByTransaction(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->createDSRSummaryByTransactionAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByTransactionAsync(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByTransaction',
            $request,
            '\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request
     * @return \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByPeriod(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->createDSRSummaryByPeriodAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByPeriodAsync(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByPeriod',
            $request,
            '\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request
     * @return \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByCategory(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->createDSRSummaryByCategoryAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByCategoryAsync(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByCategory',
            $request,
            '\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request
     * @return \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByShippingDetail(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->createDSRSummaryByShippingDetailAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByShippingDetailAsync(\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByShippingDetail',
            $request,
            '\cbdesk\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request
     * @return \cbdesk\eBaySDK\Feedback\Types\GetDSRSummaryResponse
     */
    public function getDSRSummary(\cbdesk\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request)
    {
        return $this->getDSRSummaryAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDSRSummaryAsync(\cbdesk\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request)
    {
        return $this->callOperationAsync(
            'getDSRSummary',
            $request,
            '\cbdesk\eBaySDK\Feedback\Types\GetDSRSummaryResponse'
        );
    }
}
