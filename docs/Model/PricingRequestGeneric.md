# PricingRequestGeneric

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partnerPrimaryInsuredId** | **string** | Insured Person ID of the policy holder | [optional] 
**partnerQuoteId** | **string** | Quote identifier in partner&#39;s database | [optional] 
**effectiveDateTime** | [**\DateTime**](\DateTime.md) | Effective date and time for the policy (use 00:00:00 time if coverage starts beginning of day) | 
**requestDateTime** | [**\DateTime**](\DateTime.md) | Timestamp of the quote request when it was first received by the distributor | 
**expirationDateTime** | [**\DateTime**](\DateTime.md) | Expiration date and time of the policy (use 23:59:59 if date is inclusive OR 00:00:00 time of next day if date is exclusive. | 
**currency** | **string** | Currency used. Three character ISO 4217 | 
**insuredPersons** | [**\BrightWrite\Model\InsuredPerson[]**](InsuredPerson.md) | List of people who are insured/covered by this policy | 
**partnerId** | **string** | Partner identifier. Human and machine readable so we can use in tagging | 
**pricingRequestOrigin** | **string** | Identifier, which partner use to specify pricing request origin | [optional] 
**partnerPrice** | **double** | The price above which the insurance must be sold if the book is to be profitable | 
**appId** | **string** | Optinal field to identify source of traffic. For example website name or mobile app identifier. | [optional] 
**appEnv** | **string** | Optinal field which can be used to distinguish production and staging or any other test environments which partners can use as part of their processes. | [optional] 
**purchaser** | [**\BrightWrite\Model\Purchaser**](Purchaser.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


