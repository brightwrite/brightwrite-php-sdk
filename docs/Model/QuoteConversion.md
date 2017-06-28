# QuoteConversion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partnerQuoteId** | **string** | Quote ID used by the distributor. Required if we are also collecting quote info with java script from the distributor&#39;s website. Optional if we are not getting info from javasript. | [optional] 
**pricingRequestId** | **string** | If it&#39;s impossible to use any type of quote IDs, we need to report conversions based on prcing request ID privdied in pricing request endpoint. | [optional] 
**pricingRequest** | [**\BrightWrite\Model\PricingRequestCarRental**](PricingRequestCarRental.md) | Partners can provide more information in pricing request when booking was confirmed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


