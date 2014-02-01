<?php
namespace DTS\eBaySDK\BusinessPoliciesManagement\Services;

class BusinessPoliciesManagementBaseService extends \DTS\eBaySDK\Services\BaseService
{
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';
    const HDR_CONTENT_TYPE = 'CONTENT-TYPE';
    const HDR_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';
    const HDR_MESSAGE_ENCODING = 'X-EBAY-SOA-MESSAGE-ENCODING';
    const HDR_MESSAGE_PROTOCOL = 'X-EBAY-SOA-MESSAGE-PROTOCOL';
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HDR_REQUEST_FORMAT = 'X-EBAY-SOA-REQUEST-DATA-FORMAT';
    const HDR_RESPONSE_FORMAT = 'X-EBAY-SOA-RESPONSE-DATA-FORMAT';
    const HDR_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';

    public function __construct($config = [])
    {
        parent::__construct($config);
    }
}
