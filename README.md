# SwaggerClient-php
Merchant Gateway API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/revenuewire/merchant-gateway-api-sdk-php.git"
    }
  ],
  "require": {
    "revenuewire/merchant-gateway-api-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
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

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');
// Configure API key authorization: JWTHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\MerchantGatewayApi();
$clientId = "clientId_example"; // string | 

try {
    $result = $api_instance->createMerchantGateway($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGatewayApi->createMerchantGateway: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://merchant-gateway-api.revenuewire.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MerchantGatewayApi* | [**createMerchantGateway**](docs/Api/MerchantGatewayApi.md#createmerchantgateway) | **POST** /merchants | create merchant gateway configuration
*MerchantGatewayApi* | [**getMerchantGateway**](docs/Api/MerchantGatewayApi.md#getmerchantgateway) | **GET** /merchants/{clientId} | get merchant gateway configuration
*MerchantGatewayConfigurationApi* | [**activateMerchantGatewayVersion**](docs/Api/MerchantGatewayConfigurationApi.md#activatemerchantgatewayversion) | **POST** /merchants/{clientId}/versions/{version}/activate | activate gateway version
*MerchantGatewayConfigurationApi* | [**createMerchantGatewayVersion**](docs/Api/MerchantGatewayConfigurationApi.md#createmerchantgatewayversion) | **POST** /merchants/{clientId}/versions | create a new gateway configuration version.
*MerchantGatewayConfigurationApi* | [**getMerchantGatewayVersion**](docs/Api/MerchantGatewayConfigurationApi.md#getmerchantgatewayversion) | **GET** /merchants/{clientId}/versions/{version} | get gateway version detail
*MerchantGatewayConfigurationApi* | [**updateMerchantGatewayVersion**](docs/Api/MerchantGatewayConfigurationApi.md#updatemerchantgatewayversion) | **PUT** /merchants/{clientId}/versions/{version} | update gateway version detail
*MigrationRulesApi* | [**createMigrationRule**](docs/Api/MigrationRulesApi.md#createmigrationrule) | **POST** /merchants/{clientId}/migration-rules | Create migration rule
*MigrationRulesApi* | [**deleteMigrationRule**](docs/Api/MigrationRulesApi.md#deletemigrationrule) | **DELETE** /merchants/{clientId}/migration-rules/{ruleId} | Delete migration rule
*MigrationRulesApi* | [**getMigrationRule**](docs/Api/MigrationRulesApi.md#getmigrationrule) | **GET** /merchants/{clientId}/migration-rules/{ruleId} | Get migration rule
*PayApi* | [**chooseGateway**](docs/Api/PayApi.md#choosegateway) | **GET** /merchants/{clientId}/choose-gateway | Choose a gateway
*PublicApi* | [**getCurrencies**](docs/Api/PublicApi.md#getcurrencies) | **GET** /merchants/{clientId}/currencies | get list of currencies
*PublicApi* | [**getPaymentMethods**](docs/Api/PublicApi.md#getpaymentmethods) | **GET** /merchants/{clientId}/payment-methods | get list of payment methods


## Documentation For Models

 - [Country](docs/Model/Country.md)
 - [Currencies](docs/Model/Currencies.md)
 - [Currency](docs/Model/Currency.md)
 - [Error](docs/Model/Error.md)
 - [Gateway](docs/Model/Gateway.md)
 - [GatewayConfiguration](docs/Model/GatewayConfiguration.md)
 - [GatewayPolicy](docs/Model/GatewayPolicy.md)
 - [Gateways](docs/Model/Gateways.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [MerchantGateway](docs/Model/MerchantGateway.md)
 - [MerchantGatewayVersion](docs/Model/MerchantGatewayVersion.md)
 - [Method](docs/Model/Method.md)
 - [Methods](docs/Model/Methods.md)
 - [MigrationRule](docs/Model/MigrationRule.md)
 - [MigrationRules](docs/Model/MigrationRules.md)
 - [NewMerchantGatewayVersion](docs/Model/NewMerchantGatewayVersion.md)
 - [NewMigrationRule](docs/Model/NewMigrationRule.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [Response](docs/Model/Response.md)


## Documentation For Authorization


## APIKeyHeader

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header

## JWTHeader

- **Type**: API key
- **API key parameter name**: X-Authorization-JWT
- **Location**: HTTP header


## Author




