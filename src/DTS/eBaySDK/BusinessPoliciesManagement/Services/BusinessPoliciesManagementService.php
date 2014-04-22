<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\BusinessPoliciesManagement\Services;

class BusinessPoliciesManagementService extends \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
{
    /**
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     * @param array $config Optional configuration option values. 
     */
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        parent::__construct($httpClient, $config);
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse
     */
    public function getVersion(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperation(
            'getVersion',
            $request->toXml('getVersionRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse
     */
    public function removeProfile(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->callOperation(
            'removeProfile',
            $request->toXml('removeProfileRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse
     */
    public function addSellerProfile(\DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->callOperation(
            'addSellerProfile',
            $request->toXml('addSellerProfileRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse
     */
    public function getSellerProfiles(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->callOperation(
            'getSellerProfiles',
            $request->toXml('getSellerProfilesRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse
     */
    public function setSellerProfile(\DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->callOperation(
            'setSellerProfile',
            $request->toXml('setSellerProfileRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse
     */
    public function removeSellerProfiles(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->callOperation(
            'removeSellerProfiles',
            $request->toXml('removeSellerProfilesRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse
     */
    public function consolidateShippingProfiles(\DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->callOperation(
            'consolidateShippingProfiles',
            $request->toXml('consolidateShippingProfilesRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse
     */
    public function getConsolidationJobStatus(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->callOperation(
            'getConsolidationJobStatus',
            $request->toXml('getConsolidationJobStatusRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse
     */
    public function removeOverrides(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->callOperation(
            'removeOverrides',
            $request->toXml('removeOverridesRequest', true),
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse'
        );
    }
}
