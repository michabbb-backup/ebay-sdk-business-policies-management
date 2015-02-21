<?php
require __DIR__ . '/artifacts/dts-business-policies-management.phar';

$service = new \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService(array(
    'apiVersion' => '123'
));

echo 'Version=' . \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService::VERSION;
