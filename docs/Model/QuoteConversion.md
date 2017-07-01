# QuoteConversion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partnerQuoteId** | **string** | Quote ID used by the distributor. Required if we are also collecting quote info with java script from the distributor&#39;s website. Optional if we are not getting info from javasript | [optional] 
**pricingRequestId** | **string** | If it&#39;s impossible to use any type of quote IDs, we need to report conversions based on prcing request ID privdied in pricing request endpoint | [optional] 
**purchaser** | [**\BrightWrite\Model\Purchaser**](Purchaser.md) | Partners can provide more information in pricing request after the booking confirmation | 
**rentalCarBooking** | [**\BrightWrite\Model\BookingRentalCar**](BookingRentalCar.md) | Partners can provide more information in pricing request after the booking confirmation | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


