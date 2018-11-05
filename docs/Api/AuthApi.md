# Swagger\Client\AuthApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authPost**](AuthApi.md#authPost) | **POST** /auth | Create an API authorization token


# **authPost**
> authPost($username, $password, $grant_type)

Create an API authorization token

Authenticates with the API using your username and password to generate a token that can be used for subsequent API requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | The SafetyCulture username to create an authorization token for
$password = "password_example"; // string | The password of the SafetyCulture user
$grant_type = "grant_type_example"; // string | The OAuth grant type

try {
    $apiInstance->authPost($username, $password, $grant_type);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The SafetyCulture username to create an authorization token for |
 **password** | **string**| The password of the SafetyCulture user |
 **grant_type** | **string**| The OAuth grant type |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

