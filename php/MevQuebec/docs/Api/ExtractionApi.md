# Mev\Gateway\ExtractionApi

All URIs are relative to *https://api.mev.quebec/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copierDonnees**](ExtractionApi.md#copierdonnees) | **GET** /extraction/CopierDonnees | Copier les données (Copie partielle)
[**copierSauvegarde**](ExtractionApi.md#copiersauvegarde) | **GET** /extraction/CopierSauvegarde | Sauvegarder les données (copie complête)

# **copierDonnees**
> \Mev\Gateway\Model\InlineResponse202 copierDonnees($debut, $fin)

Copier les données (Copie partielle)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');// Configure API key authorization: deviceId
$config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKey('X-MEV-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-MEV-ID', 'Bearer');

$apiInstance = new Mev\Gateway\MevGateway\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMM)
$fin = "fin_example"; // string | Date fin (AAAMM)

try {
    $result = $apiInstance->copierDonnees($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->copierDonnees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMM) |
 **fin** | **string**| Date fin (AAAMM) | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copierSauvegarde**
> \Mev\Gateway\Model\InlineResponse202 copierSauvegarde()

Sauvegarder les données (copie complête)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');// Configure API key authorization: deviceId
$config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKey('X-MEV-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mev\Gateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-MEV-ID', 'Bearer');

$apiInstance = new Mev\Gateway\MevGateway\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->copierSauvegarde();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->copierSauvegarde: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

