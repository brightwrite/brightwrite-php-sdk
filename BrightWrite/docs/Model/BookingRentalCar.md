# BookingRentalCar

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalPrice** | **double** | Ticket price including taxes and extra fees. Should be equal to subtotalPrice + taxesAndFees. | 
**dropOffLocation** | [**\BrightWrite\Model\RentalCarLocation**](RentalCarLocation.md) |  | 
**priceCurrency** | **string** | Currency in which all pricing info is specified three letters code as described by ISO 4217. | 
**pickupLocation** | [**\BrightWrite\Model\RentalCarLocation**](RentalCarLocation.md) |  | 
**taxesAndFees** | **double** | Total of taxes, fees and other deductions required on top of the subtotalPrice. | 
**subtotalPrice** | **double** | Ticket price without taxes and extra fees. | 
**pickupDateTime** | [**\DateTime**](\DateTime.md) | When the custmer is going to pick up the car. | 
**provider** | **string** | Service provider, i.e. rental car agency. | 
**dropOffDateTime** | [**\DateTime**](\DateTime.md) | When the custmer is going to return the car. | 
**toddlerSeatCount** | **int** | How many toddler car seats are required. | [optional] 
**driverCount** | **int** | How many drivers are going to use the car. | [optional] 
**infantChildSeatCount** | **int** | How many infant car seats are required. | [optional] 
**sIPPCode** | **string** | SIPP codes are used to summarise the key features of a vehicle. | [optional] 
**rentalCarBookingID** | **string** | Internal ID used by distributors to identify the booking. This should match the booking ID BrightWrite collects from the tags on the distributor website. For a booking that has flights and rental cars, the booking IDs would match. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


