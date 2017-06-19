# PricingRequestGeneric

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**effectiveDateTime** | [**\DateTime**](\DateTime.md) | Effective date and time for the policy (use 00:00:00 time if coverage starts beginning of day) | 
**currency** | **string** | Currency used. Three character ISO 4217. | 
**insuredPersons** | [**\BrightWrite\Model\InsuredPerson[]**](InsuredPerson.md) | List of people who are insured/covered by this policy. | 
**requestTime** | [**\DateTime**](\DateTime.md) | Timestamp of the quote request when it was first received by the distributor (or insurer). | 
**partnerId** | **string** | Partner identifier. Human and machine readable so we can use in tagging. | 
**pricingRequestOrigin** | **string** | Identifier, which partner use to specify pricing request origin. | [optional] 
**floorPrice** | **double** | The price above which the insurance must be sold if the book is to be profitable. | 
**expirationDateTime** | [**\DateTime**](\DateTime.md) | Expiration date and time of the policy (use 23:59:59 if date is inclusive OR 00:00:00 time of next day if date is exclusive. | 
**customer** | [**\BrightWrite\Model\Customer**](Customer.md) |  | 
**policyHolderId** | **string** | Insured Person ID of the policy holder | [optional] 
**underwriterQuoteId** | **string** | Quote identifier in underwriters database. | [optional] 
**distributorQuoteId** | **string** | Quote ID used by the distributor. Required if we are also collecting quote info with java script from the distributor&#39;s website. Optional if we are not getting info from javasript. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


