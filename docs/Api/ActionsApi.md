# Swagger\Client\ActionsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionsActionIdDelete**](ActionsApi.md#actionsActionIdDelete) | **DELETE** /actions/{actionId} | Delete an Action
[**actionsActionIdGet**](ActionsApi.md#actionsActionIdGet) | **GET** /actions/{actionId} | Retrieve the details of an existing Action
[**actionsActionIdPut**](ActionsApi.md#actionsActionIdPut) | **PUT** /actions/{actionId} | Update an existing Action
[**actionsPost**](ActionsApi.md#actionsPost) | **POST** /actions | Create an Action
[**actionsSearchPost**](ActionsApi.md#actionsSearchPost) | **POST** /actions/search | Search for actions given a range of criteria


# **actionsActionIdDelete**
> actionsActionIdDelete($action_id)

Delete an Action

Deletes the Action with the specified Action ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action_id = "action_id_example"; // string | The action identifier

try {
    $apiInstance->actionsActionIdDelete($action_id);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->actionsActionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_id** | **string**| The action identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **actionsActionIdGet**
> actionsActionIdGet($action_id)

Retrieve the details of an existing Action

The JSON response contains the Action details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action_id = "action_id_example"; // string | The action identifier

try {
    $apiInstance->actionsActionIdGet($action_id);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->actionsActionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_id** | **string**| The action identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **actionsActionIdPut**
> actionsActionIdPut($action_id, $description_status_priority_assignees_due_at_completed_at_model)

Update an existing Action

The JSON payload contains the updated Action details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action_id = "action_id_example"; // string | The action identifier
$description_status_priority_assignees_due_at_completed_at_model = new \Swagger\Client\Model\DescriptionStatusPriorityAssigneesDueAtCompletedAtModel(); // \Swagger\Client\Model\DescriptionStatusPriorityAssigneesDueAtCompletedAtModel | 

try {
    $apiInstance->actionsActionIdPut($action_id, $description_status_priority_assignees_due_at_completed_at_model);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->actionsActionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_id** | **string**| The action identifier |
 **description_status_priority_assignees_due_at_completed_at_model** | [**\Swagger\Client\Model\DescriptionStatusPriorityAssigneesDueAtCompletedAtModel**](../Model/DescriptionStatusPriorityAssigneesDueAtCompletedAtModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **actionsPost**
> actionsPost($audit_id_item_id_description_status_priority_assignees_due_at_model)

Create an Action

The JSON payload contains the Action details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id_item_id_description_status_priority_assignees_due_at_model = new \Swagger\Client\Model\AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel(); // \Swagger\Client\Model\AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel | 

try {
    $apiInstance->actionsPost($audit_id_item_id_description_status_priority_assignees_due_at_model);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->actionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id_item_id_description_status_priority_assignees_due_at_model** | [**\Swagger\Client\Model\AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel**](../Model/AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **actionsSearchPost**
> actionsSearchPost($audit_id_item_id_created_by_status_priority_assignees_due_at_created_at_modified_at_match_text_offset_limit_model)

Search for actions given a range of criteria

The JSON payload contains the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id_item_id_created_by_status_priority_assignees_due_at_created_at_modified_at_match_text_offset_limit_model = new \Swagger\Client\Model\AuditIdItemIdCreatedByStatusPriorityAssigneesDueAtCreatedAtModifiedAtMatchTextOffsetLimitModel(); // \Swagger\Client\Model\AuditIdItemIdCreatedByStatusPriorityAssigneesDueAtCreatedAtModifiedAtMatchTextOffsetLimitModel | 

try {
    $apiInstance->actionsSearchPost($audit_id_item_id_created_by_status_priority_assignees_due_at_created_at_modified_at_match_text_offset_limit_model);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->actionsSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id_item_id_created_by_status_priority_assignees_due_at_created_at_modified_at_match_text_offset_limit_model** | [**\Swagger\Client\Model\AuditIdItemIdCreatedByStatusPriorityAssigneesDueAtCreatedAtModifiedAtMatchTextOffsetLimitModel**](../Model/AuditIdItemIdCreatedByStatusPriorityAssigneesDueAtCreatedAtModifiedAtMatchTextOffsetLimitModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

