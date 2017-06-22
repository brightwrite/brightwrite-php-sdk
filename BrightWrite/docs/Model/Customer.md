# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countryOfResidence** | **string** | Two character standard (ISO 3166). It&#39;s only required if the customer is not an Insured Person. | 
**billingPostalCode** | **string** | Collect this regardless of whether the customer is also an insured person. | 
**primaryLastName** | **string** | Family name. Only required if the customer is not an Insured Person. | [optional] 
**secondaryLastName** | **string** | An additional last name for a person e.g. Spanish names have two last names. Only required if the customer is not an Insured Person. | [optional] 
**firstName** | **string** | Given name, e.g. first name of a person in US. This can be used along with familyName instead of the name property. Only required if the customer is not an Insured Person | [optional] 
**customerId** | **string** | Identifier as it appears in underwriter/distributor platform. | 
**name** | **string** | Full name of a person. Can be send instead of combination of firstName, lastName. | [optional] 
**insuredPersonID** | **string** | If the customer is also an Insured person, i.e. buying policy for his/herself. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


