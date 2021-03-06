# CHANGELOG

## 0.1.5 - 2015-08-02

### END OF LIFE NOTICE

This repository is now deprecated and will reach its end of life on the 6th December 2015. It is only maintained for bug fixes. A new version of the SDK has been released and is available at [https://github.com/davidtsadler/ebay-sdk-php](https://github.com/davidtsadler/ebay-sdk-php). A guide can be found at [http://devbay.net/sdk/guides/migration/](http://devbay.net/sdk/guides/migration/) to help migrate existing projects to the new repository.

### Fix

* Update packager to correctly autoload Symfony Event Dispatcher.

## 0.1.4 - 2015-03-01

### Features

* Allow manual installation of SDK via PHP Phar or Zip archive.

### Documentation

State code is generated.

### Tests

* Add PHP 5.6 and HHVM to travis settings.

## 0.1.3 - 2014-08-25

### Documentation

* Update requirements to recommend 64 bit systems. ([076a97e](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/076a97e3b42cd445b3fd5663ff2dc8510da5ea5c)) [David T. Sadler]

## 0.1.2 - 2014-07-28

### Updates

* Bring up to date with changes in WSDL. ([5895b7e](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/5895b7e267b4415ba3d526a8bca5e6e3ccb1a24c)) [David T. Sadler]

## 0.1.1 - 2014-07-05

### Refactoring

* Pass request object to callOperation method. ([5b7bf83](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/5b7bf835c61173481a083fb4080019fb70d5946c)) [David T. Sadler]
* Change service class to call toRequestXml method. ([8022bcd](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/8022bcd97bf1a1336fbb6a8940ca81cd7304af0f)) [David T. Sadler]

### Documentation

* Correct stated minimum PHP version. ([d2152c0](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/d2152c02126a4843be7aa1bd3981b79170770fe2)) [David T. Sadler]

### Tests

* Update travis settings. ([b9675e1](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/b9675e18152cbe8bbbda8b930b17105b7468d641)) [David T. Sadler]
* Add phpunit configuration file. ([c706826](https://github.com/davidtsadler/ebay-sdk-business-policies-management/commit/c706826e7f21f7965ef204081af4270866f96488)) [David T. Sadler]
