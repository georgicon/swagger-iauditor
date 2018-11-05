# Swagger\Client\BatchApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchPost**](BatchApi.md#batchPost) | **POST** /batch | A batch endpoint that sends multiple requests in a single call


# **batchPost**
> batchPost($requests_model)

A batch endpoint that sends multiple requests in a single call

A batch endpoint that makes it easy to combine multiple requests to other endpoints in a single call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requests_model = new \Swagger\Client\Model\RequestsModel(); // \Swagger\Client\Model\RequestsModel | 

try {
    $apiInstance->batchPost($requests_model);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requests_model** | [**\Swagger\Client\Model\RequestsModel**](../Model/RequestsModel.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

