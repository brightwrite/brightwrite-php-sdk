# BrightWrite\PartnerApi

All URIs are relative to *https://api.brightwrite.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**brightwriteControllerPricingRequestCarRentalAction**](PartnerApi.md#brightwriteControllerPricingRequestCarRentalAction) | **POST** /pricingRequestCarRental | Pricing request for a car rental policy
[**brightwriteControllerQuoteConversionAction**](PartnerApi.md#brightwriteControllerQuoteConversionAction) | **POST** /quoteConversion | Pricing request for car rental business.


# **brightwriteControllerPricingRequestCarRentalAction**
> \BrightWrite\Model\PricingResponse brightwriteControllerPricingRequestCarRentalAction($pricingRequest)

Pricing request for a car rental policy

Accepts information about quoted policy and related booking information and returns price recommendation for a given policy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
BrightWrite\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BrightWrite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new BrightWrite\Api\PartnerApi();
$pricingRequest = new \BrightWrite\Model\PricingRequestCarRental(); // \BrightWrite\Model\PricingRequestCarRental | Pricing request should contain information about quoted policy and related booking information

try {
    $result = $api_instance->brightwriteControllerPricingRequestCarRentalAction($pricingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->brightwriteControllerPricingRequestCarRentalAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pricingRequest** | [**\BrightWrite\Model\PricingRequestCarRental**](../Model/\BrightWrite\Model\PricingRequestCarRental.md)| Pricing request should contain information about quoted policy and related booking information |

### Return type

[**\BrightWrite\Model\PricingResponse**](../Model/PricingResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **brightwriteControllerQuoteConversionAction**
> brightwriteControllerQuoteConversionAction($conversion)

Pricing request for car rental business.

Takes in information about quote conversions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
BrightWrite\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BrightWrite\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new BrightWrite\Api\PartnerApi();
$conversion = new \BrightWrite\Model\QuoteConversion(); // \BrightWrite\Model\QuoteConversion | QuoteConversion

try {
    $api_instance->brightwriteControllerQuoteConversionAction($conversion);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->brightwriteControllerQuoteConversionAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion** | [**\BrightWrite\Model\QuoteConversion**](../Model/\BrightWrite\Model\QuoteConversion.md)| QuoteConversion |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

