# Swagger\Client\MigrationRulesApi

All URIs are relative to *https://merchant-gateway-api.revenuewire.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMigrationRule**](MigrationRulesApi.md#createMigrationRule) | **POST** /merchants/{clientId}/migration-rules | Create migration rule
[**deleteMigrationRule**](MigrationRulesApi.md#deleteMigrationRule) | **DELETE** /merchants/{clientId}/migration-rules/{ruleId} | Delete migration rule
[**getMigrationRule**](MigrationRulesApi.md#getMigrationRule) | **GET** /merchants/{clientId}/migration-rules/{ruleId} | Get migration rule


# **createMigrationRule**
> \Swagger\Client\Model\MigrationRules createMigrationRule($clientId, $rule)

Create migration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');
// Configure API key authorization: JWTHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\MigrationRulesApi();
$clientId = "clientId_example"; // string | 
$rule = new \Swagger\Client\Model\NewMigrationRule(); // \Swagger\Client\Model\NewMigrationRule | 

try {
    $result = $api_instance->createMigrationRule($clientId, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationRulesApi->createMigrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **rule** | [**\Swagger\Client\Model\NewMigrationRule**](../Model/\Swagger\Client\Model\NewMigrationRule.md)|  |

### Return type

[**\Swagger\Client\Model\MigrationRules**](../Model/MigrationRules.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMigrationRule**
> \Swagger\Client\Model\MigrationRules deleteMigrationRule($clientId, $ruleId)

Delete migration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');
// Configure API key authorization: JWTHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\MigrationRulesApi();
$clientId = "clientId_example"; // string | 
$ruleId = "ruleId_example"; // string | 

try {
    $result = $api_instance->deleteMigrationRule($clientId, $ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationRulesApi->deleteMigrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **ruleId** | **string**|  |

### Return type

[**\Swagger\Client\Model\MigrationRules**](../Model/MigrationRules.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMigrationRule**
> \Swagger\Client\Model\MigrationRule getMigrationRule($clientId, $ruleId)

Get migration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');
// Configure API key authorization: JWTHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\MigrationRulesApi();
$clientId = "clientId_example"; // string | 
$ruleId = "ruleId_example"; // string | 

try {
    $result = $api_instance->getMigrationRule($clientId, $ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationRulesApi->getMigrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **ruleId** | **string**|  |

### Return type

[**\Swagger\Client\Model\MigrationRule**](../Model/MigrationRule.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

