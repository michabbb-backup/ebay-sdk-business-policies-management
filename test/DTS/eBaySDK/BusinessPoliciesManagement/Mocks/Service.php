<?php
namespace DTS\eBaySDK\BusinessPoliciesManagement\Mocks;

class Service extends \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
{
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
    }

    public function testOperation()
    {
        return $this->callOperation(
            'testOperation',
            '',
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }
}
