# InsuredPerson

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**insuredPersonId** | **string** | Internal ID used by the insurer. | [optional] 
**countryOfResidence** | **string** | Two characters (ISO 3166 standard) | 
**age** | **int** | Either age or year of birth should be collected, depending on what is collected from customer. Only do this if permitted by partner agreement to collect this. This should be age at time trip starts. It could also be age at time of booking but partners should advise which one it is. | [optional] 
**yearOfBirth** | **int** | Either age or year of birth should be collected, depending on what is collected from customer. Only do this if permitted by partner agreement to collect this. | [optional] 
**dateOfBirth** | [**\DateTime**](\DateTime.md) | Date of birth. Provide if permitted by partner. | [optional] 
**firstName** | **string** | Given name, e.g. first name of a person in US. This can be used along with familyName instead of the name property. | [optional] 
**lastName** | **string** | Family name | [optional] 
**secondaryLastName** | **string** | An additional last name for a person e.g. Spanish names have two last names | [optional] 
**name** | **string** | Full name of a person. Can be send instead of combination of first name and last name. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


