# Swagger\Client\MerchantGatewayConfigurationApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateMerchantGatewayVersion**](MerchantGatewayConfigurationApi.md#activateMerchantGatewayVersion) | **POST** /merchants/{clientId}/versions/{version}/activate | activate gateway version
[**createMerchantGatewayVersion**](MerchantGatewayConfigurationApi.md#createMerchantGatewayVersion) | **POST** /merchants/{clientId}/versions | create a new gateway configuration version.
[**getMerchantGatewayVersion**](MerchantGatewayConfigurationApi.md#getMerchantGatewayVersion) | **GET** /merchants/{clientId}/versions/{version} | get gateway version detail
[**updateMerchantGatewayVersion**](MerchantGatewayConfigurationApi.md#updateMerchantGatewayVersion) | **PUT** /merchants/{clientId}/versions/{version} | update gateway version detail


# **activateMerchantGatewayVersion**
> \Swagger\Client\Model\MerchantGatewayVersion activateMerchantGatewayVersion($clientId, $version)

activate gateway version

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

$api_instance = new Swagger\Client\Api\MerchantGatewayConfigurationApi();
$clientId = "clientId_example"; // string | 
$version = "version_example"; // string | 

try {
    $result = $api_instance->activateMerchantGatewayVersion($clientId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGatewayConfigurationApi->activateMerchantGatewayVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\MerchantGatewayVersion**](../Model/MerchantGatewayVersion.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMerchantGatewayVersion**
> \Swagger\Client\Model\MerchantGatewayVersion createMerchantGatewayVersion($clientId, $version)

create a new gateway configuration version.

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

$api_instance = new Swagger\Client\Api\MerchantGatewayConfigurationApi();
$clientId = "clientId_example"; // string | 
$version = new \Swagger\Client\Model\GatewayConfigurations(); // \Swagger\Client\Model\GatewayConfigurations | 

try {
    $result = $api_instance->createMerchantGatewayVersion($clientId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGatewayConfigurationApi->createMerchantGatewayVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **version** | [**\Swagger\Client\Model\GatewayConfigurations**](../Model/\Swagger\Client\Model\GatewayConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\MerchantGatewayVersion**](../Model/MerchantGatewayVersion.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantGatewayVersion**
> \Swagger\Client\Model\MerchantGatewayVersion getMerchantGatewayVersion($clientId, $version)

get gateway version detail

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

$api_instance = new Swagger\Client\Api\MerchantGatewayConfigurationApi();
$clientId = "clientId_example"; // string | 
$version = "version_example"; // string | 

try {
    $result = $api_instance->getMerchantGatewayVersion($clientId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGatewayConfigurationApi->getMerchantGatewayVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\MerchantGatewayVersion**](../Model/MerchantGatewayVersion.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchantGatewayVersion**
> \Swagger\Client\Model\MerchantGatewayVersion updateMerchantGatewayVersion($clientId, $version, $version2)

update gateway version detail

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

$api_instance = new Swagger\Client\Api\MerchantGatewayConfigurationApi();
$clientId = "clientId_example"; // string | 
$version = "version_example"; // string | 
$version2 = new \Swagger\Client\Model\GatewayConfigurations(); // \Swagger\Client\Model\GatewayConfigurations | 

try {
    $result = $api_instance->updateMerchantGatewayVersion($clientId, $version, $version2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGatewayConfigurationApi->updateMerchantGatewayVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **version** | **string**|  |
 **version2** | [**\Swagger\Client\Model\GatewayConfigurations**](../Model/\Swagger\Client\Model\GatewayConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\MerchantGatewayVersion**](../Model/MerchantGatewayVersion.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

