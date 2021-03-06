# SwaggerClient-php
The SafetyCulture API gives you direct access to your data in the SafetyCulture platform.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/georgicon/swagger-iauditor.git"
    }
  ],
  "require": {
    "georgicon/swagger-iauditor": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActionsApi* | [**actionsActionIdDelete**](docs/Api/ActionsApi.md#actionsactioniddelete) | **DELETE** /actions/{actionId} | Delete an Action
*ActionsApi* | [**actionsActionIdGet**](docs/Api/ActionsApi.md#actionsactionidget) | **GET** /actions/{actionId} | Retrieve the details of an existing Action
*ActionsApi* | [**actionsActionIdPut**](docs/Api/ActionsApi.md#actionsactionidput) | **PUT** /actions/{actionId} | Update an existing Action
*ActionsApi* | [**actionsPost**](docs/Api/ActionsApi.md#actionspost) | **POST** /actions | Create an Action
*ActionsApi* | [**actionsSearchPost**](docs/Api/ActionsApi.md#actionssearchpost) | **POST** /actions/search | Search for actions given a range of criteria
*AuditsApi* | [**auditsAuditIdDeepLinkPost**](docs/Api/AuditsApi.md#auditsauditiddeeplinkpost) | **POST** /audits/{auditId}/deep_link | Generate a link to the audit
*AuditsApi* | [**auditsAuditIdExportPost**](docs/Api/AuditsApi.md#auditsauditidexportpost) | **POST** /audits/{auditId}/export | Export an audit report
*AuditsApi* | [**auditsAuditIdExportsExportIdFilenameGet**](docs/Api/AuditsApi.md#auditsauditidexportsexportidfilenameget) | **GET** /audits/{auditId}/exports/{exportId}/{filename} | Download an audit report
*AuditsApi* | [**auditsAuditIdExportsExportIdGet**](docs/Api/AuditsApi.md#auditsauditidexportsexportidget) | **GET** /audits/{auditId}/exports/{exportId} | Check the status of the export request submitted earlier
*AuditsApi* | [**auditsAuditIdGet**](docs/Api/AuditsApi.md#auditsauditidget) | **GET** /audits/{auditId} | Get a particular audit
*AuditsApi* | [**auditsAuditIdMediaMediaIdGet**](docs/Api/AuditsApi.md#auditsauditidmediamediaidget) | **GET** /audits/{auditId}/media/{mediaId} | Get a media item associated with an audit
*AuditsApi* | [**auditsAuditIdPut**](docs/Api/AuditsApi.md#auditsauditidput) | **PUT** /audits/{auditId} | Updates a particular audit
*AuditsApi* | [**auditsAuditIdSharePost**](docs/Api/AuditsApi.md#auditsauditidsharepost) | **POST** /audits/{auditId}/share | Share an audit
*AuditsApi* | [**auditsAuditIdWebReportLinkDelete**](docs/Api/AuditsApi.md#auditsauditidwebreportlinkdelete) | **DELETE** /audits/{auditId}/web_report_link | Delete the link to the web report of the audit
*AuditsApi* | [**auditsAuditIdWebReportLinkGet**](docs/Api/AuditsApi.md#auditsauditidwebreportlinkget) | **GET** /audits/{auditId}/web_report_link | Retrieve a link to the web report of the audit
*AuditsApi* | [**auditsPost**](docs/Api/AuditsApi.md#auditspost) | **POST** /audits | Start an audit
*AuditsApi* | [**auditsSearchGet**](docs/Api/AuditsApi.md#auditssearchget) | **GET** /audits/search | Search modified audits
*AuthApi* | [**authPost**](docs/Api/AuthApi.md#authpost) | **POST** /auth | Create an API authorization token
*BatchApi* | [**batchPost**](docs/Api/BatchApi.md#batchpost) | **POST** /batch | A batch endpoint that sends multiple requests in a single call
*ExportProfilesApi* | [**exportProfilesIdGet**](docs/Api/ExportProfilesApi.md#exportprofilesidget) | **GET** /export_profiles/{id} | Get a particular export profile
*ExportProfilesApi* | [**exportProfilesSearchGet**](docs/Api/ExportProfilesApi.md#exportprofilessearchget) | **GET** /export_profiles/search | Get a list of available export profiles
*GroupsApi* | [**groupsGet**](docs/Api/GroupsApi.md#groupsget) | **GET** /groups | Lists all the groups in an org
*GroupsApi* | [**groupsGroupIdUsersGet**](docs/Api/GroupsApi.md#groupsgroupidusersget) | **GET** /groups/{group_id}/users | Lists all the users
*GroupsApi* | [**groupsGroupIdUsersPost**](docs/Api/GroupsApi.md#groupsgroupiduserspost) | **POST** /groups/{group_id}/users | Adds a user to a group
*GroupsApi* | [**groupsPost**](docs/Api/GroupsApi.md#groupspost) | **POST** /groups | Create a group
*GroupsApi* | [**groupsRoleIdUsersUserIdDelete**](docs/Api/GroupsApi.md#groupsroleidusersuseriddelete) | **DELETE** /groups/{role_id}/users/{user_id} | Removes a user from the group with the specified role ID
*ResponseSetsApi* | [**responseSetsGet**](docs/Api/ResponseSetsApi.md#responsesetsget) | **GET** /response_sets | Retrieves all response sets in the requesting user&#39;s organisation
*ResponseSetsApi* | [**responseSetsIdDelete**](docs/Api/ResponseSetsApi.md#responsesetsiddelete) | **DELETE** /response_sets/{id} | Deletes a response set with the specified response ID
*ResponseSetsApi* | [**responseSetsIdGet**](docs/Api/ResponseSetsApi.md#responsesetsidget) | **GET** /response_sets/{id} | Retrieves the response set with the given response set ID
*ResponseSetsApi* | [**responseSetsIdPut**](docs/Api/ResponseSetsApi.md#responsesetsidput) | **PUT** /response_sets/{id} | Updates a response set
*ResponseSetsApi* | [**responseSetsIdResponsesPost**](docs/Api/ResponseSetsApi.md#responsesetsidresponsespost) | **POST** /response_sets/{id}/responses | Creates a response
*ResponseSetsApi* | [**responseSetsIdResponsesResponseIdDelete**](docs/Api/ResponseSetsApi.md#responsesetsidresponsesresponseiddelete) | **DELETE** /response_sets/{id}/responses/{responseId} | Deletes a response
*ResponseSetsApi* | [**responseSetsIdResponsesResponseIdPut**](docs/Api/ResponseSetsApi.md#responsesetsidresponsesresponseidput) | **PUT** /response_sets/{id}/responses/{responseId} | Updates a response
*ResponseSetsApi* | [**responseSetsPost**](docs/Api/ResponseSetsApi.md#responsesetspost) | **POST** /response_sets | Creates a new response set
*ShareApi* | [**shareConnectionsGet**](docs/Api/ShareApi.md#shareconnectionsget) | **GET** /share/connections | Get the organisations and groups associated with the authenticated user
*TemplatesApi* | [**templatesSearchGet**](docs/Api/TemplatesApi.md#templatessearchget) | **GET** /templates/search | Search modified templates
*UsersApi* | [**usersPost**](docs/Api/UsersApi.md#userspost) | **POST** /users | Adds a new user to the organisation of the requesting user
*UsersApi* | [**usersSearchPost**](docs/Api/UsersApi.md#userssearchpost) | **POST** /users/search | Looks up user information
*UsersApi* | [**usersUserIdGet**](docs/Api/UsersApi.md#usersuseridget) | **GET** /users/{user_id} | Looks up user information by user ID
*UsersApi* | [**usersUserIdPut**](docs/Api/UsersApi.md#usersuseridput) | **PUT** /users/{user_id} | Updates user details such as username (email address), first name and last name
*WorkflowsApi* | [**workflowsGet**](docs/Api/WorkflowsApi.md#workflowsget) | **GET** /workflows | Retrieves all registered workflows
*WorkflowsApi* | [**workflowsPost**](docs/Api/WorkflowsApi.md#workflowspost) | **POST** /workflows | Registers a new workflow
*WorkflowsApi* | [**workflowsWorkflowIdDelete**](docs/Api/WorkflowsApi.md#workflowsworkflowiddelete) | **DELETE** /workflows/{workflow_id} | Deletes a specified workflow
*WorkflowsApi* | [**workflowsWorkflowIdGet**](docs/Api/WorkflowsApi.md#workflowsworkflowidget) | **GET** /workflows/{workflow_id} | Retrieves a specified workflow
*WorkflowsApi* | [**workflowsWorkflowIdPut**](docs/Api/WorkflowsApi.md#workflowsworkflowidput) | **PUT** /workflows/{workflow_id} | Updates a specified workflow


## Documentation For Models

 - [AuditIdItemIdCreatedByStatusPriorityAssigneesDueAtCreatedAtModifiedAtMatchTextOffsetLimitModel](docs/Model/AuditIdItemIdCreatedByStatusPriorityAssigneesDueAtCreatedAtModifiedAtMatchTextOffsetLimitModel.md)
 - [AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel](docs/Model/AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel.md)
 - [DescriptionStatusPriorityAssigneesDueAtCompletedAtModel](docs/Model/DescriptionStatusPriorityAssigneesDueAtCompletedAtModel.md)
 - [EmailModel](docs/Model/EmailModel.md)
 - [FirstnameLastnameEmailPasswordResetPasswordRequiredModel](docs/Model/FirstnameLastnameEmailPasswordResetPasswordRequiredModel.md)
 - [FromToModel](docs/Model/FromToModel.md)
 - [HeaderItemsItemsArchivedModel](docs/Model/HeaderItemsItemsArchivedModel.md)
 - [IdPermissionModel](docs/Model/IdPermissionModel.md)
 - [ItemIdLabelTypeResponsesModel](docs/Model/ItemIdLabelTypeResponsesModel.md)
 - [LabelShortLabelModel](docs/Model/LabelShortLabelModel.md)
 - [MethodPathQueryPayloadModel](docs/Model/MethodPathQueryPayloadModel.md)
 - [NameModel](docs/Model/NameModel.md)
 - [NameResponsesModel](docs/Model/NameResponsesModel.md)
 - [NameResponsesResponsesetIdModel](docs/Model/NameResponsesResponsesetIdModel.md)
 - [NewEmailFirstnameLastnameStatusModel](docs/Model/NewEmailFirstnameLastnameStatusModel.md)
 - [RequestsModel](docs/Model/RequestsModel.md)
 - [SharesModel](docs/Model/SharesModel.md)
 - [TextModel](docs/Model/TextModel.md)
 - [TriggerEventsStepsEnabledModel](docs/Model/TriggerEventsStepsEnabledModel.md)
 - [TriggerEventsStepsModel](docs/Model/TriggerEventsStepsModel.md)
 - [TypeIdModel](docs/Model/TypeIdModel.md)
 - [UrlTypeModel](docs/Model/UrlTypeModel.md)
 - [UserIdModel](docs/Model/UserIdModel.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




