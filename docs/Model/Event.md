# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | A Facebook pixel Standard Event or Custom Event name. This field is used to deduplicate events sent by both Facebook Pixel and Conversions API. event_id is also used in deduplication. For the same customer action, event from the browser event match event_name from the server event. If we find a match between events sent within 48 hours of each other, we only consider the first one. If a server and browser event arrive at approximately the same time (within 5 minutes of each other), we favor the browser event. | 
**event_time** | **int** | A Unix timestamp in seconds indicating when the actual event occurred. The specified time may be earlier than the time you send the event to Facebook. This is to enable batch processing and server performance optimization. event_time can be up to 7 days before you send an event to Facebook. If any event_time in data is greater than 7 days in the past, we return an error for the entire request and process no events. | 
**event_source_url** | **string** | The browser URL where the event happened. | [optional] 
**opt_out** | **bool** | A flag that indicates we should not use this event for ads delivery optimization. If set to true, we only use the event for attribution. | [optional] 
**event_id** | **string** | This ID can be any unique string chosen by the advertiser. event_id is used to deduplicate events sent by both Facebook Pixel and Conversions API. event_name is also used in deduplication. For deduplication, the eventID from a browser event must match the event_id in the corresponding server event. | [optional] 
**action_source** | **string** | This field allows you to specify where your conversions occurred. Knowing where your events took place helps ensure your ads go to the right people. See docs for the allowable values. https://developers.facebook.com/docs/marketing-api/conversions-api/parameters/server-event#action-source | 
**user_data** | [**\Swagger\Client\Model\UserData**](UserData.md) |  | 
**custom_data** | [**\Swagger\Client\Model\CustomData**](CustomData.md) |  | [optional] 
**data_processing_options** | **string[]** | Processing options you would like to enable for a specific event. For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options. | [optional] 
**data_processing_options_country** | **int** | The country that you want to associate to this data processing option. If you set a country, you must also set a state. For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options | [optional] 
**data_processing_options_state** | **int** | The state that you want to associate with this data processing option. For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

