# EBAY-SDK-BUSINESS-POLICIES-MANAGEMENT

[![Build Status](https://travis-ci.org/davidtsadler/ebay-sdk-business-policies-management.png?branch=develop)](https://travis-ci.org/davidtsadler/ebay-sdk-business-policies-management)

An eBay SDK for PHP. Use the eBay Business Policies Management API in your PHP projects.

## Requirements

- PHP 5.3 or greater.
- cUrl extension enabled.
- [dts/ebay-sdk](https://github.com/davidtsadler/ebay-sdk).

## Installation

This package can be installed with [Composer](http://getcomposer.org/).

1. Add "dts/ebay-sdk-business-policies-management" as a dependency in your project's composer.json file.

   ```javascript
   {
       "require": {
           "dts/ebay-sdk-business-policies-management": "~0.0.0"
       }
   }
   ```

1. Install Composer.

   ```
   curl -sS https://getcomposer.org/installer | php
   ```

1. Install the dependencies.

   ```
   php composer.phar install
   ```

1. Require Composer's autoloader by adding the following line to your code.

   ```php
   require 'vendor/autoload.php';
   ```

## Example

#### List all business policies

```php
<?php

require 'vendor/autoload.php';

use \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService;
use \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest;
use \DTS\eBaySDK\Constants\GlobalIds;

// Instantiate an eBay service.
$service = new BusinessPoliciesManagementService(array(
    'authToken' => <a valid authorization token>,
    'globalId' => GlobalIds::US
));

// Create the API request object.
$request = new GetSellerProfilesRequest();

// Send the request.
$response = $service->getSellerProfiles($request);

// Output the response from the API.
if (isset($response->paymentProfileList)) {
    echo "================\nPayment Profiles\n================\n";
    foreach ($response->paymentProfileList->PaymentProfile as $profile) {
        printf("(%s) %s: %s\n",
            $profile->profileId,
            $profile->profileName,
            $profile->profileDesc
        );
    }
}

if (isset($response->returnPolicyProfileList)) {
    echo "\n======================\nReturn Policy Profiles\n======================\n";
    foreach ($response->returnPolicyProfileList->ReturnPolicyProfile as $profile) {
        printf("(%s) %s: %s\n",
            $profile->profileId,
            $profile->profileName,
            $profile->profileDesc
        );
    }
}

if (isset($response->shippingPolicyProfile)) {
    echo "\n========================\nShipping Policy Profiles\n========================\n";
    foreach ($response->shippingPolicyProfile->ShippingPolicyProfile as $profile) {
        printf("(%s) %s: %s\n",
            $profile->profileId,
            $profile->profileName,
            $profile->profileDesc
        );
    }
}
```

## SDK and eBay API versions.

As eBay release new versions of their API the corresponding SDK version will be shown [here](https://github.com/davidtsadler/ebay-sdk/wiki/SDK-and-eBay-API-Versions#wiki-business-policies-management).
