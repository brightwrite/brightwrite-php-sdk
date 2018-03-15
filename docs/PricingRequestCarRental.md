# PricingRequestCarRental

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**experimentGroup** | **string** | The experimentGroup (only turned on for RentalCars) | [optional] 
**policyDestinationCountryCode** | **string** | ISO 3166 Two Character standard | 
**policyType** | **string** | Requested policy type [ ExcessReduction, CDW, Comprehensive, RoadsideAssistance, FullProtection ]. This is the policy type code agreed with Partner in advance. | 
**requestedLiability** | **double** | This is the max payout for the policy requested by the partner (the Cover Amount in RC.com API) | [optional] 
**policyExcess** | **double** | Excess that the underwriter has quoted | 
**policyLiability** | **double** | Liability that the underwriter has quoted | 
**currencyForExcessAndLiability** | **string** | Three character ISO 4217 | 
**rentalCarBooking** | [**\BrightWrite\Model\BookingRentalCar**](BookingRentalCar.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


