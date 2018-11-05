# Swagger\Client\WorkflowsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workflowsGet**](WorkflowsApi.md#workflowsGet) | **GET** /workflows | Retrieves all registered workflows
[**workflowsPost**](WorkflowsApi.md#workflowsPost) | **POST** /workflows | Registers a new workflow
[**workflowsWorkflowIdDelete**](WorkflowsApi.md#workflowsWorkflowIdDelete) | **DELETE** /workflows/{workflow_id} | Deletes a specified workflow
[**workflowsWorkflowIdGet**](WorkflowsApi.md#workflowsWorkflowIdGet) | **GET** /workflows/{workflow_id} | Retrieves a specified workflow
[**workflowsWorkflowIdPut**](WorkflowsApi.md#workflowsWorkflowIdPut) | **PUT** /workflows/{workflow_id} | Updates a specified workflow


# **workflowsGet**
> workflowsGet()

Retrieves all registered workflows

Retrieves all the workflows registered in the organisation the user belongs to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->workflowsGet();
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->workflowsGet: ', $e->getMessage(), PHP_EOL;
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

# **workflowsPost**
> workflowsPost($trigger_events_steps_model)

Registers a new workflow

Registers a new workflow in the organisation of this user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trigger_events_steps_model = new \Swagger\Client\Model\TriggerEventsStepsModel(); // \Swagger\Client\Model\TriggerEventsStepsModel | 

try {
    $apiInstance->workflowsPost($trigger_events_steps_model);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->workflowsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trigger_events_steps_model** | [**\Swagger\Client\Model\TriggerEventsStepsModel**](../Model/TriggerEventsStepsModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowsWorkflowIdDelete**
> workflowsWorkflowIdDelete($workflow_id)

Deletes a specified workflow

Deletes the workflow with the given workflow id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workflow_id = "workflow_id_example"; // string | 

try {
    $apiInstance->workflowsWorkflowIdDelete($workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->workflowsWorkflowIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowsWorkflowIdGet**
> workflowsWorkflowIdGet($workflow_id)

Retrieves a specified workflow

Retrieves the workflow registered with the given workflow id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workflow_id = "workflow_id_example"; // string | 

try {
    $apiInstance->workflowsWorkflowIdGet($workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->workflowsWorkflowIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowsWorkflowIdPut**
> workflowsWorkflowIdPut($workflow_id, $trigger_events_steps_enabled_model)

Updates a specified workflow

Updates the workflow with the given workflow id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workflow_id = "workflow_id_example"; // string | 
$trigger_events_steps_enabled_model = new \Swagger\Client\Model\TriggerEventsStepsEnabledModel(); // \Swagger\Client\Model\TriggerEventsStepsEnabledModel | 

try {
    $apiInstance->workflowsWorkflowIdPut($workflow_id, $trigger_events_steps_enabled_model);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->workflowsWorkflowIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow_id** | **string**|  |
 **trigger_events_steps_enabled_model** | [**\Swagger\Client\Model\TriggerEventsStepsEnabledModel**](../Model/TriggerEventsStepsEnabledModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

