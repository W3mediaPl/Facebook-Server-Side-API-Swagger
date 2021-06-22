# Swagger\Client\DefaultApi

All URIs are relative to *https://graph.facebook.com/v8.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pixelIdEventsPost**](DefaultApi.md#pixelideventspost) | **POST** /{pixelId}/events | 

# **pixelIdEventsPost**
> \Swagger\Client\Model\ResponseSuccess pixelIdEventsPost($body, $pixel_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: facebook_api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EventRequest(); // \Swagger\Client\Model\EventRequest | Facebook Conversions API (for Web) post request
$pixel_id = "pixel_id_example"; // string | 

try {
    $result = $apiInstance->pixelIdEventsPost($body, $pixel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pixelIdEventsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventRequest**](../Model/EventRequest.md)| Facebook Conversions API (for Web) post request |
 **pixel_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[facebook_api_key](../../README.md#facebook_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

