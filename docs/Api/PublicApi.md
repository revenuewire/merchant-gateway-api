# Swagger\Client\PublicApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentMethods**](PublicApi.md#getPaymentMethods) | **GET** /payment-methods | get list of payment methods


# **getPaymentMethods**
> \Swagger\Client\Model\Methods getPaymentMethods($country, $currency)

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
$country = "country_example"; // string | 
$currency = "currency_example"; // string | 

try {
    $result = $api_instance->getPaymentMethods($country, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  | [optional]
 **currency** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Methods**](../Model/Methods.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [JWTHeader](../../README.md#JWTHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

