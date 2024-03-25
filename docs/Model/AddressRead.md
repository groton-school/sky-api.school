# # AddressRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the address | [optional]
**address_type** | **string** | The &#39;Type&#39; of the address | [optional]
**city** | **string** | The city for the address | [optional]
**country** | **string** | The country for the address | [optional]
**line_one** | **string** | The first line of the address | [optional]
**line_three** | **string** | The third line of the address | [optional]
**line_two** | **string** | The second line of the address | [optional]
**links** | [**\SKY\School\Model\AddressTypeLink[]**](AddressTypeLink.md) | Returns each instance of an address type for each relationship to the user | [optional]
**mailing_address** | **bool** | Returns True if user accepts mail from the address | [optional]
**postal_code** | **string** | The postal code for the address | [optional]
**primary** | **bool** | Returns true if the address is primary | [optional]
**province** | **string** | The province for the address | [optional]
**region** | **string** | The region for the address | [optional]
**state** | **string** | The state for the address | [optional]
**type_id** | **int** | The type ID associated with an address that is based upon a user&#39;s primary relationship to the address | [optional]
**user_id** | **int** | The ID of the user of the address | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)