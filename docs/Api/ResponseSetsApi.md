# Swagger\Client\ResponseSetsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**responseSetsGet**](ResponseSetsApi.md#responseSetsGet) | **GET** /response_sets | Retrieves all response sets in the requesting user&#39;s organisation
[**responseSetsIdDelete**](ResponseSetsApi.md#responseSetsIdDelete) | **DELETE** /response_sets/{id} | Deletes a response set with the specified response ID
[**responseSetsIdGet**](ResponseSetsApi.md#responseSetsIdGet) | **GET** /response_sets/{id} | Retrieves the response set with the given response set ID
[**responseSetsIdPut**](ResponseSetsApi.md#responseSetsIdPut) | **PUT** /response_sets/{id} | Updates a response set
[**responseSetsIdResponsesPost**](ResponseSetsApi.md#responseSetsIdResponsesPost) | **POST** /response_sets/{id}/responses | Creates a response
[**responseSetsIdResponsesResponseIdDelete**](ResponseSetsApi.md#responseSetsIdResponsesResponseIdDelete) | **DELETE** /response_sets/{id}/responses/{responseId} | Deletes a response
[**responseSetsIdResponsesResponseIdPut**](ResponseSetsApi.md#responseSetsIdResponsesResponseIdPut) | **PUT** /response_sets/{id}/responses/{responseId} | Updates a response
[**responseSetsPost**](ResponseSetsApi.md#responseSetsPost) | **POST** /response_sets | Creates a new response set


# **responseSetsGet**
> responseSetsGet($limit)

Retrieves all response sets in the requesting user's organisation

Retrieves all response sets in the requesting user's organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 8.14; // float | the maximum number of results to return

try {
    $apiInstance->responseSetsGet($limit);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **float**| the maximum number of results to return | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsIdDelete**
> responseSetsIdDelete($id)

Deletes a response set with the specified response ID

Deletes a response set with the specified response ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the ID for a response set

try {
    $apiInstance->responseSetsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the ID for a response set |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsIdGet**
> responseSetsIdGet($id)

Retrieves the response set with the given response set ID

Retrieves the response set with the given response set ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the ID for a response set

try {
    $apiInstance->responseSetsIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the ID for a response set |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsIdPut**
> responseSetsIdPut($id, $name_responses_responseset_id_model)

Updates a response set

Updates metadata of a response set such as the response set name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the ID for a response set
$name_responses_responseset_id_model = new \Swagger\Client\Model\NameResponsesResponsesetIdModel(); // \Swagger\Client\Model\NameResponsesResponsesetIdModel | 

try {
    $apiInstance->responseSetsIdPut($id, $name_responses_responseset_id_model);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the ID for a response set |
 **name_responses_responseset_id_model** | [**\Swagger\Client\Model\NameResponsesResponsesetIdModel**](../Model/NameResponsesResponsesetIdModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsIdResponsesPost**
> responseSetsIdResponsesPost($id, $label_short_label_model)

Creates a response

Creates a response within a response set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the ID for a response set
$label_short_label_model = new \Swagger\Client\Model\LabelShortLabelModel(); // \Swagger\Client\Model\LabelShortLabelModel | 

try {
    $apiInstance->responseSetsIdResponsesPost($id, $label_short_label_model);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsIdResponsesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the ID for a response set |
 **label_short_label_model** | [**\Swagger\Client\Model\LabelShortLabelModel**](../Model/LabelShortLabelModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsIdResponsesResponseIdDelete**
> responseSetsIdResponsesResponseIdDelete($id, $response_id)

Deletes a response

Deletes the response with the specified response ID within a response set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the ID for a response set
$response_id = "response_id_example"; // string | the ID of a single response

try {
    $apiInstance->responseSetsIdResponsesResponseIdDelete($id, $response_id);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsIdResponsesResponseIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the ID for a response set |
 **response_id** | **string**| the ID of a single response |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsIdResponsesResponseIdPut**
> responseSetsIdResponsesResponseIdPut($id, $response_id, $label_short_label_model)

Updates a response

Updates the response with the specified response ID within a response set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the ID for a response set
$response_id = "response_id_example"; // string | the ID of a single response
$label_short_label_model = new \Swagger\Client\Model\LabelShortLabelModel(); // \Swagger\Client\Model\LabelShortLabelModel | 

try {
    $apiInstance->responseSetsIdResponsesResponseIdPut($id, $response_id, $label_short_label_model);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsIdResponsesResponseIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the ID for a response set |
 **response_id** | **string**| the ID of a single response |
 **label_short_label_model** | [**\Swagger\Client\Model\LabelShortLabelModel**](../Model/LabelShortLabelModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **responseSetsPost**
> responseSetsPost($name_responses_model)

Creates a new response set

Creates a new response set and initialises it with any responses given at creation time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResponseSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name_responses_model = new \Swagger\Client\Model\NameResponsesModel(); // \Swagger\Client\Model\NameResponsesModel | 

try {
    $apiInstance->responseSetsPost($name_responses_model);
} catch (Exception $e) {
    echo 'Exception when calling ResponseSetsApi->responseSetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_responses_model** | [**\Swagger\Client\Model\NameResponsesModel**](../Model/NameResponsesModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

