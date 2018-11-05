# Swagger\Client\GroupsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupsGet**](GroupsApi.md#groupsGet) | **GET** /groups | Lists all the groups in an org
[**groupsGroupIdUsersGet**](GroupsApi.md#groupsGroupIdUsersGet) | **GET** /groups/{group_id}/users | Lists all the users
[**groupsGroupIdUsersPost**](GroupsApi.md#groupsGroupIdUsersPost) | **POST** /groups/{group_id}/users | Adds a user to a group
[**groupsPost**](GroupsApi.md#groupsPost) | **POST** /groups | Create a group
[**groupsRoleIdUsersUserIdDelete**](GroupsApi.md#groupsRoleIdUsersUserIdDelete) | **DELETE** /groups/{role_id}/users/{user_id} | Removes a user from the group with the specified role ID


# **groupsGet**
> groupsGet($org_id)

Lists all the groups in an org

Lists all the groups of a given organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = "org_id_example"; // string | 

try {
    $apiInstance->groupsGet($org_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGroupIdUsersGet**
> groupsGroupIdUsersGet($group_id, $limit, $offset, $status)

Lists all the users

Lists all the users in group or org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = "group_id_example"; // string | 
$limit = 2000; // int | 
$offset = 0; // int | 
$status = array("status_example"); // string[] | 

try {
    $apiInstance->groupsGroupIdUsersGet($group_id, $limit, $offset, $status);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGroupIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **limit** | **int**|  | [optional] [default to 2000]
 **offset** | **int**|  | [optional] [default to 0]
 **status** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGroupIdUsersPost**
> groupsGroupIdUsersPost($group_id, $user_id_model)

Adds a user to a group

Adds the user to a group with the given group ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = "group_id_example"; // string | 
$user_id_model = new \Swagger\Client\Model\UserIdModel(); // \Swagger\Client\Model\UserIdModel | 

try {
    $apiInstance->groupsGroupIdUsersPost($group_id, $user_id_model);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGroupIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **user_id_model** | [**\Swagger\Client\Model\UserIdModel**](../Model/UserIdModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsPost**
> groupsPost($name_model)

Create a group

The JSON payload contains the group details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name_model = new \Swagger\Client\Model\NameModel(); // \Swagger\Client\Model\NameModel | 

try {
    $apiInstance->groupsPost($name_model);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_model** | [**\Swagger\Client\Model\NameModel**](../Model/NameModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsRoleIdUsersUserIdDelete**
> groupsRoleIdUsersUserIdDelete($role_id, $user_id, $replacement_user)

Removes a user from the group with the specified role ID

Removes a user from the group with the specified role ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = "role_id_example"; // string | 
$user_id = "user_id_example"; // string | 
$replacement_user = "replacement_user_example"; // string | 

try {
    $apiInstance->groupsRoleIdUsersUserIdDelete($role_id, $user_id, $replacement_user);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsRoleIdUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**|  |
 **user_id** | **string**|  |
 **replacement_user** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

