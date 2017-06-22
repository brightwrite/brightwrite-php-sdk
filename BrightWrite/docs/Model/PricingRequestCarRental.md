# PricingRequestCarRental

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policyDestinationCountryCode** | **string** | ISO 3166 Two Character standard. | 
**policyType** | **string** | Requested policy type [ExcessReduction, CDW, Comprehensive, RoadsideAssistance, FullProtection]. This is the policy type code agreed with Partner in advance. | 
**requestedLiability** | **int** | This is the max payout for the policy requested by the partner (the Cover Amount in RC.com API). | [optional] 
**requestedExcessRangeLow** | **int** | Low range that the distributor has requested for the excess for the vehicle (in the RC.com API this is called the std liability). | [optional] 
**requestedExcessRangeHigh** | **int** | High range that the distributor has requested for the excess for the vehicle (in the RC.com API this is called the std liability high). | [optional] 
**policyExcess** | **int** | Excess that the underwriter has quoted. | 
**policyLiability** | **int** | Liability that the underwriter has quoted. | 
**currencyForExcessAndLiability** | **string** | Three character ISO 4217. | 
**rentalCarBooking** | [**\BrightWrite\Model\BookingRentalCar**](BookingRentalCar.md) |  | 
**partnerId** | **string** | Identifies partner. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


