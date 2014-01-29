<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService;

class BusinessPoliciesManagementBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BusinessPoliciesManagementBaseService();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->obj);
    }
}
