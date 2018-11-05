# Swagger\Client\TemplatesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templatesSearchGet**](TemplatesApi.md#templatesSearchGet) | **GET** /templates/search | Search modified templates


# **templatesSearchGet**
> templatesSearchGet($field, $order, $modified_after, $modified_before, $archived, $owner, $limit)

Search modified templates

Retrieve the list of templates between certain dates and by other constraints

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field = array("field_example"); // string[] | Field(s) to retrieve
$order = "asc"; // string | The datetime order in which the templates will be given
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Templates should be last modified after this date and time
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Templates should be last modified before this date and time
$archived = "false"; // string | Flag indicating should templates be archived, non archived, or both
$owner = "all"; // string | Retrieve templates owned by me or shared with me by other users. Or all the templates I have access to.
$limit = 1000; // float | Maximum number of entries to return

try {
    $apiInstance->templatesSearchGet($field, $order, $modified_after, $modified_before, $archived, $owner, $limit);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field** | [**string[]**](../Model/string.md)| Field(s) to retrieve | [optional]
 **order** | **string**| The datetime order in which the templates will be given | [optional] [default to asc]
 **modified_after** | **\DateTime**| Templates should be last modified after this date and time | [optional]
 **modified_before** | **\DateTime**| Templates should be last modified before this date and time | [optional]
 **archived** | **string**| Flag indicating should templates be archived, non archived, or both | [optional] [default to false]
 **owner** | **string**| Retrieve templates owned by me or shared with me by other users. Or all the templates I have access to. | [optional] [default to all]
 **limit** | **float**| Maximum number of entries to return | [optional] [default to 1000]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

