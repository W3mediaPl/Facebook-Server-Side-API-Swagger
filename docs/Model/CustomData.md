# CustomData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **float** | A numeric value associated with this event. This could be a monetary value or a value in some other metric. | [optional] 
**currency** | **string** | The currency for the value specified, if applicable. Currency must be a valid ISO 4217 (https://en.wikipedia.org/wiki/ISO_4217) three digit currency code. | [optional] 
**content_name** | **string** | The name of the page or product associated with the event. | [optional] 
**content_category** | **string** | The category of the content associated with the event. | [optional] 
**content_ids** | **string[]** | The content IDs associated with the event, such as product SKUs for items in an AddToCart event: [&#x27;ABC123&#x27;, &#x27;XYZ789&#x27;]. If content_type is a product, then your content IDs must be an array with a single string value. Otherwise, this array can contain any number of string values. | [optional] 
**contents** | [**\Swagger\Client\Model\Content[]**](Content.md) | A list of Content objects that contain the product IDs associated with the event plus information about the products. id, quantity, and item_price are available fields. | [optional] 
**content_type** | **string** | It should be set to &#x27;product&#x27; or &#x27;product_group&#x27;. Use &#x27;product&#x27;, if the keys you send represent products. Sent keys could be content_ids or contents. Use product_group, if the keys you send in content_ids represent product groups. Product groups are used to distinguish products that are identical but have variations such as color, material, size or pattern. | [optional] 
**order_id** | **string** | The order ID for this transaction as a String. | [optional] 
**predicted_ltv** | **float** | The predicted lifetime value of a conversion event, as a String. | [optional] 
**num_items** | **int** | Use only with InitiateCheckout events. The number of items that a user tries to buy during checkout. | [optional] 
**search_string** | **string** | Use only with Search events. A search query made by a user. | [optional] 
**status** | **string** | Use only with CompleteRegistration events. The status of the registration event | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

