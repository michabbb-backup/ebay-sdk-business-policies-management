<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService;
use DTS\eBaySDK\HttpClient\HttpClient;

class BusinessPoliciesManagementServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BusinessPoliciesManagementService(new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService', $this->obj);
    }
}
