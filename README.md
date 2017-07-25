# BrightWrite
BrightWrite API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.6
- Package version: 1.0.7
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "brightwrite/brightwrite-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/BrightWrite/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
BrightWrite\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');

$api_instance = new BrightWrite\Api\PartnerApi();
$pricingRequest = new \BrightWrite\Model\PricingRequestCarRental(); // \BrightWrite\Model\PricingRequestCarRental | Pricing request should contain information about quoted policy and related booking information

try {
    $result = $api_instance->brightwriteControllerPricingRequestCarRentalAction($pricingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->brightwriteControllerPricingRequestCarRentalAction: ', $e->getMessage(), PHP_EOL;
}
```

## Documentation for API Endpoints

All URIs are relative to *https://api.brightwrite.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PartnerApi* | [**brightwriteControllerPricingRequestCarRentalAction**](docs/Api/PartnerApi.md#brightwritecontrollerpricingrequestcarrentalaction) | **POST** /pricingRequestCarRental | Pricing request for a car rental policy
*PartnerApi* | [**brightwriteControllerQuoteConversionAction**](docs/Api/PartnerApi.md#brightwritecontrollerquoteconversionaction) | **PUT** /quoteConversion | Pricing request for car rental business


## Documentation For Models

 - [BookingRentalCar](docs/Model/BookingRentalCar.md)
 - [InsuredPerson](docs/Model/InsuredPerson.md)
 - [PricingRequestCarRental](docs/Model/PricingRequestCarRental.md)
 - [PricingRequestGeneric](docs/Model/PricingRequestGeneric.md)
 - [PricingResponse](docs/Model/PricingResponse.md)
 - [Purchaser](docs/Model/Purchaser.md)
 - [QuoteConversion](docs/Model/QuoteConversion.md)
 - [RentalCarLocation](docs/Model/RentalCarLocation.md)
