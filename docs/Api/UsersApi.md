# Swagger\Client\UsersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersPost**](UsersApi.md#usersPost) | **POST** /users | Adds a new user to the organisation of the requesting user
[**usersSearchPost**](UsersApi.md#usersSearchPost) | **POST** /users/search | Looks up user information
[**usersUserIdGet**](UsersApi.md#usersUserIdGet) | **GET** /users/{user_id} | Looks up user information by user ID
[**usersUserIdPut**](UsersApi.md#usersUserIdPut) | **PUT** /users/{user_id} | Updates user details such as username (email address), first name and last name


# **usersPost**
> usersPost($firstname_lastname_email_password_reset_password_required_model)

Adds a new user to the organisation of the requesting user

Adds a new user to the organization of the requesting user and confirms them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$firstname_lastname_email_password_reset_password_required_model = new \Swagger\Client\Model\FirstnameLastnameEmailPasswordResetPasswordRequiredModel(); // \Swagger\Client\Model\FirstnameLastnameEmailPasswordResetPasswordRequiredModel | 

try {
    $apiInstance->usersPost($firstname_lastname_email_password_reset_password_required_model);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firstname_lastname_email_password_reset_password_required_model** | [**\Swagger\Client\Model\FirstnameLastnameEmailPasswordResetPasswordRequiredModel**](../Model/FirstnameLastnameEmailPasswordResetPasswordRequiredModel.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersSearchPost**
> usersSearchPost($email_model)

Looks up user information

Retrieve a list of user info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_model = new \Swagger\Client\Model\EmailModel(); // \Swagger\Client\Model\EmailModel | 

try {
    $apiInstance->usersSearchPost($email_model);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_model** | [**\Swagger\Client\Model\EmailModel**](../Model/EmailModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdGet**
> usersUserIdGet($user_id)

Looks up user information by user ID

Retrieves a list of user info by user ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 

try {
    $apiInstance->usersUserIdGet($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdPut**
> usersUserIdPut($user_id, $new_email_firstname_lastname_status_model)

Updates user details such as username (email address), first name and last name

Updates username (email address), first name and last name with the values sent in the request payload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$new_email_firstname_lastname_status_model = new \Swagger\Client\Model\NewEmailFirstnameLastnameStatusModel(); // \Swagger\Client\Model\NewEmailFirstnameLastnameStatusModel | 

try {
    $apiInstance->usersUserIdPut($user_id, $new_email_firstname_lastname_status_model);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **new_email_firstname_lastname_status_model** | [**\Swagger\Client\Model\NewEmailFirstnameLastnameStatusModel**](../Model/NewEmailFirstnameLastnameStatusModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

