# Swagger\Client\ShareApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shareConnectionsGet**](ShareApi.md#shareConnectionsGet) | **GET** /share/connections | Get the organisations and groups associated with the authenticated user


# **shareConnectionsGet**
> shareConnectionsGet()

Get the organisations and groups associated with the authenticated user

Retrieve a list of organisations and group IDs and their name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->shareConnectionsGet();
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->shareConnectionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

