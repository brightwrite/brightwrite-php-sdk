# Purchaser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerId** | **string** | Customer identifier as it appears in partner platform | [optional] 
**partnerInsuredPersonId** | **string** | If the purchaser is also an Insured person, i.e. buying policy for his/herself | [optional] 
**countryOfResidence** | **string** | Two character standard (ISO 3166). It&#39;s only required if the purchaser is not an Insured Person | 
**billingPostalCode** | **string** | Collect this regardless of whether the purchaser is also an insured person | [optional] 
**firstName** | **string** | Given name, e.g. first name of a person in US. This can be used along with familyName instead of the name property. Only required if the purchaser is not an Insured Person | [optional] 
**primaryLastName** | **string** | Family name. Only required if the purchaser is not an Insured Person | [optional] 
**secondaryLastName** | **string** | An additional last name for a person e.g. Spanish names have two last names. Only required if the purchaser is not an Insured Person | [optional] 
**name** | **string** | Full name of a person. Can be send instead of combination of firstName, lastName | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


