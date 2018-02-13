# Swagger\Client\PublicApi

All URIs are relative to *https://merchant-gateway-api.revenuewire.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentMethods**](PublicApi.md#getPaymentMethods) | **GET** /merchants/{clientId}/payment-methods | get list of payment methods


# **getPaymentMethods**
> \Swagger\Client\Model\Methods getPaymentMethods($clientId, $country, $currency, $version, $hasAffiliation)

get list of payment methods

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

$api_instance = new Swagger\Client\Api\PublicApi();
$clientId = "clientId_example"; // string | 
$country = "country_example"; // string | Two-letter ISO 3166-1 alpha-2 country codes, all CAPs. For example, [US, CA]
$currency = "currency_example"; // string | Three-letter ISO 4217 Currency Code, all CAPs. For example, [USD, CAD]
$version = "version_example"; // string | 
$hasAffiliation = "hasAffiliation_example"; // string | 

try {
    $result = $api_instance->getPaymentMethods($clientId, $country, $currency, $version, $hasAffiliation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**|  |
 **country** | **string**| Two-letter ISO 3166-1 alpha-2 country codes, all CAPs. For example, [US, CA] | [optional]
 **currency** | **string**| Three-letter ISO 4217 Currency Code, all CAPs. For example, [USD, CAD] | [optional]
 **version** | **string**|  | [optional]
 **hasAffiliation** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Methods**](../Model/Methods.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

