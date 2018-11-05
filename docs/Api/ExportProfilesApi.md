# Swagger\Client\ExportProfilesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportProfilesIdGet**](ExportProfilesApi.md#exportProfilesIdGet) | **GET** /export_profiles/{id} | Get a particular export profile
[**exportProfilesSearchGet**](ExportProfilesApi.md#exportProfilesSearchGet) | **GET** /export_profiles/search | Get a list of available export profiles


# **exportProfilesIdGet**
> exportProfilesIdGet($id)

Get a particular export profile

Retrieve the full data contained in a single export profile as JSON.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExportProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The export profile identifier

try {
    $apiInstance->exportProfilesIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ExportProfilesApi->exportProfilesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The export profile identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportProfilesSearchGet**
> exportProfilesSearchGet()

Get a list of available export profiles

Profile ids can be used in export requests to ally the specified export profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExportProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->exportProfilesSearchGet();
} catch (Exception $e) {
    echo 'Exception when calling ExportProfilesApi->exportProfilesSearchGet: ', $e->getMessage(), PHP_EOL;
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

