# BookingRentalCar

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rentalCarBookingId** | **string** | Internal ID used by distributors to identify the booking. This should match the booking ID BrightWrite collects from the tags on the distributor website. For a booking that has flights and rental cars, the booking IDs would match | [optional] 
**dropOffLocation** | [**\BrightWrite\Model\RentalCarLocation**](RentalCarLocation.md) |  | 
**pickUpLocation** | [**\BrightWrite\Model\RentalCarLocation**](RentalCarLocation.md) |  | 
**subtotalPrice** | **double** | Ticket price without taxes and extra fees | [optional] 
**taxesAndFees** | **double** | Total of taxes, fees and other deductions required on top of the subtotalPrice | [optional] 
**totalPrice** | **double** | Ticket price including taxes and extra fees. Should be equal to subtotalPrice + taxesAndFees | [optional] 
**priceCurrency** | **string** | Currency in which all pricing info is specified three letters code as described by ISO 4217 | [optional] 
**pickupDateTime** | [**\DateTime**](\DateTime.md) | When the custmer is going to pick up the car | [optional] 
**dropOffDateTime** | [**\DateTime**](\DateTime.md) | When the custmer is going to return the car | [optional] 
**provider** | **string** | Service provider, i.e. rental car agency | [optional] 
**driverCount** | **int** | How many drivers are going to use the car | [optional] 
**toddlerSeatCount** | **int** | How many toddler car seats are required | [optional] 
**infantChildSeatCount** | **int** | How many infant car seats are required | [optional] 
**sIPPCode** | **string** | SIPP codes are used to summarise the key features of a vehicle | [optional] 
**vehicleType** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


