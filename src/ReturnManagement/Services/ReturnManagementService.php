<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace cbdesk\eBaySDK\ReturnManagement\Services;

class ReturnManagementService extends \cbdesk\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\GetVersionResponse
     */
    public function getVersion(\cbdesk\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\cbdesk\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse
     */
    public function getUserReturns(\cbdesk\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->getUserReturnsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserReturnsAsync(\cbdesk\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->callOperationAsync(
            'getUserReturns',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse
     */
    public function getReturnDetail(\cbdesk\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->getReturnDetailAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnDetailAsync(\cbdesk\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnDetail',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\cbdesk\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->getActivityOptionsAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActivityOptionsAsync(\cbdesk\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperationAsync(
            'getActivityOptions',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\IssueRefundResponse
     */
    public function issueRefund(\cbdesk\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->issueRefundAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issueRefundAsync(\cbdesk\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->callOperationAsync(
            'issueRefund',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\IssueRefundResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse
     */
    public function provideSellerInfo(\cbdesk\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->provideSellerInfoAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideSellerInfoAsync(\cbdesk\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideSellerInfo',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse
     */
    public function getReturnMetadata(\cbdesk\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->getReturnMetadataAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnMetadataAsync(\cbdesk\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnMetadata',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\cbdesk\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->provideTrackingInfoAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideTrackingInfoAsync(\cbdesk\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideTrackingInfo',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \cbdesk\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse
     */
    public function setItemAsReceived(\cbdesk\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->setItemAsReceivedAsync($request)->wait();
    }

    /**
     * @param \cbdesk\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setItemAsReceivedAsync(\cbdesk\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->callOperationAsync(
            'setItemAsReceived',
            $request,
            '\cbdesk\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse'
        );
    }
}
