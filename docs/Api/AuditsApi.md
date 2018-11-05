# Swagger\Client\AuditsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditsAuditIdDeepLinkPost**](AuditsApi.md#auditsAuditIdDeepLinkPost) | **POST** /audits/{auditId}/deep_link | Generate a link to the audit
[**auditsAuditIdExportPost**](AuditsApi.md#auditsAuditIdExportPost) | **POST** /audits/{auditId}/export | Export an audit report
[**auditsAuditIdExportsExportIdFilenameGet**](AuditsApi.md#auditsAuditIdExportsExportIdFilenameGet) | **GET** /audits/{auditId}/exports/{exportId}/{filename} | Download an audit report
[**auditsAuditIdExportsExportIdGet**](AuditsApi.md#auditsAuditIdExportsExportIdGet) | **GET** /audits/{auditId}/exports/{exportId} | Check the status of the export request submitted earlier
[**auditsAuditIdGet**](AuditsApi.md#auditsAuditIdGet) | **GET** /audits/{auditId} | Get a particular audit
[**auditsAuditIdMediaMediaIdGet**](AuditsApi.md#auditsAuditIdMediaMediaIdGet) | **GET** /audits/{auditId}/media/{mediaId} | Get a media item associated with an audit
[**auditsAuditIdPut**](AuditsApi.md#auditsAuditIdPut) | **PUT** /audits/{auditId} | Updates a particular audit
[**auditsAuditIdSharePost**](AuditsApi.md#auditsAuditIdSharePost) | **POST** /audits/{auditId}/share | Share an audit
[**auditsAuditIdWebReportLinkDelete**](AuditsApi.md#auditsAuditIdWebReportLinkDelete) | **DELETE** /audits/{auditId}/web_report_link | Delete the link to the web report of the audit
[**auditsAuditIdWebReportLinkGet**](AuditsApi.md#auditsAuditIdWebReportLinkGet) | **GET** /audits/{auditId}/web_report_link | Retrieve a link to the web report of the audit
[**auditsPost**](AuditsApi.md#auditsPost) | **POST** /audits | Start an audit
[**auditsSearchGet**](AuditsApi.md#auditsSearchGet) | **GET** /audits/search | Search modified audits


# **auditsAuditIdDeepLinkPost**
> auditsAuditIdDeepLinkPost($audit_id)

Generate a link to the audit

Generated deep link data expected in the JSON response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | 

try {
    $apiInstance->auditsAuditIdDeepLinkPost($audit_id);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdDeepLinkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdExportPost**
> auditsAuditIdExportPost($audit_id, $format, $timezone, $export_profile)

Export an audit report

Submit an export request for an audit into the format passed as a query parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | The audit ID that references the audit to be exported
$format = "format_example"; // string | The format for the export
$timezone = "timezone_example"; // string | The timezone for the export
$export_profile = "export_profile_example"; // string | The id of the export profile to be applied

try {
    $apiInstance->auditsAuditIdExportPost($audit_id, $format, $timezone, $export_profile);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdExportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**| The audit ID that references the audit to be exported |
 **format** | **string**| The format for the export |
 **timezone** | **string**| The timezone for the export | [optional]
 **export_profile** | **string**| The id of the export profile to be applied | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdExportsExportIdFilenameGet**
> auditsAuditIdExportsExportIdFilenameGet($audit_id, $export_id, $filename)

Download an audit report

Download the audit report submitted earlier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | The audit ID that references the audit to be exported
$export_id = "export_id_example"; // string | The ID that references the export request
$filename = "filename_example"; // string | The filename generated by the export request

try {
    $apiInstance->auditsAuditIdExportsExportIdFilenameGet($audit_id, $export_id, $filename);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdExportsExportIdFilenameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**| The audit ID that references the audit to be exported |
 **export_id** | **string**| The ID that references the export request |
 **filename** | **string**| The filename generated by the export request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdExportsExportIdGet**
> auditsAuditIdExportsExportIdGet($audit_id, $export_id)

Check the status of the export request submitted earlier

Check whether the download report submitted earlier is ready for download

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | The audit ID that references the audit to be exported
$export_id = "export_id_example"; // string | The ID that references the export request

try {
    $apiInstance->auditsAuditIdExportsExportIdGet($audit_id, $export_id);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdExportsExportIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**| The audit ID that references the audit to be exported |
 **export_id** | **string**| The ID that references the export request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdGet**
> auditsAuditIdGet($audit_id)

Get a particular audit

Retrieve the full data contained in a single audit as JSON.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | The audit identifier

try {
    $apiInstance->auditsAuditIdGet($audit_id);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**| The audit identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdMediaMediaIdGet**
> auditsAuditIdMediaMediaIdGet($audit_id, $media_id)

Get a media item associated with an audit

Retrieve a particular media item for the given item, with the response being the actual image or piece of media

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | The audit ID that references the media
$media_id = "media_id_example"; // string | The media ID within the audit

try {
    $apiInstance->auditsAuditIdMediaMediaIdGet($audit_id, $media_id);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdMediaMediaIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**| The audit ID that references the media |
 **media_id** | **string**| The media ID within the audit |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdPut**
> auditsAuditIdPut($audit_id, $header_items_items_archived_model)

Updates a particular audit

Updates supported properties of the audit with the given audit ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | The audit identifier
$header_items_items_archived_model = new \Swagger\Client\Model\HeaderItemsItemsArchivedModel(); // \Swagger\Client\Model\HeaderItemsItemsArchivedModel | 

try {
    $apiInstance->auditsAuditIdPut($audit_id, $header_items_items_archived_model);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**| The audit identifier |
 **header_items_items_archived_model** | [**\Swagger\Client\Model\HeaderItemsItemsArchivedModel**](../Model/HeaderItemsItemsArchivedModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdSharePost**
> auditsAuditIdSharePost($audit_id, $shares_model)

Share an audit

Share data expected in the JSON payload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | 
$shares_model = new \Swagger\Client\Model\SharesModel(); // \Swagger\Client\Model\SharesModel | 

try {
    $apiInstance->auditsAuditIdSharePost($audit_id, $shares_model);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdSharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**|  |
 **shares_model** | [**\Swagger\Client\Model\SharesModel**](../Model/SharesModel.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdWebReportLinkDelete**
> auditsAuditIdWebReportLinkDelete($audit_id)

Delete the link to the web report of the audit

Delete the link to the web report of the audit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | 

try {
    $apiInstance->auditsAuditIdWebReportLinkDelete($audit_id);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdWebReportLinkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsAuditIdWebReportLinkGet**
> auditsAuditIdWebReportLinkGet($audit_id)

Retrieve a link to the web report of the audit

If a link has previously been generated for this audit it is returned in the JSON response otherwise a new link is generated and returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audit_id = "audit_id_example"; // string | 

try {
    $apiInstance->auditsAuditIdWebReportLinkGet($audit_id);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsAuditIdWebReportLinkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditsPost**
> auditsPost()

Start an audit

Audit data expected in the JSON payload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->auditsPost();
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsPost: ', $e->getMessage(), PHP_EOL;
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

# **auditsSearchGet**
> auditsSearchGet($field, $order, $modified_after, $modified_before, $template, $archived, $completed, $owner, $limit)

Search modified audits

Retrieve the list of audits between certain dates, and search by other constraints including the source template and whether it is archived

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field = array("field_example"); // string[] | Field(s) to retrieve
$order = "asc"; // string | The datetime order in which the audits will be given
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Audits should be last modified after this date and time
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Audits should be last modified before this date and time
$template = array("template_example"); // string[] | Audits should be made from this template
$archived = "false"; // string | Flag indicating should audits be archived, non archived, or both
$completed = "both"; // string | Flag indicating should audits be completed, non completed, or both
$owner = "all"; // string | Retrieve audits owned by me or shared with me by other users. Or all the audits I have access to.
$limit = 1000; // float | Maximum number of entries to return

try {
    $apiInstance->auditsSearchGet($field, $order, $modified_after, $modified_before, $template, $archived, $completed, $owner, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->auditsSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field** | [**string[]**](../Model/string.md)| Field(s) to retrieve | [optional]
 **order** | **string**| The datetime order in which the audits will be given | [optional] [default to asc]
 **modified_after** | **\DateTime**| Audits should be last modified after this date and time | [optional]
 **modified_before** | **\DateTime**| Audits should be last modified before this date and time | [optional]
 **template** | [**string[]**](../Model/string.md)| Audits should be made from this template | [optional]
 **archived** | **string**| Flag indicating should audits be archived, non archived, or both | [optional] [default to false]
 **completed** | **string**| Flag indicating should audits be completed, non completed, or both | [optional] [default to both]
 **owner** | **string**| Retrieve audits owned by me or shared with me by other users. Or all the audits I have access to. | [optional] [default to all]
 **limit** | **float**| Maximum number of entries to return | [optional] [default to 1000]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

