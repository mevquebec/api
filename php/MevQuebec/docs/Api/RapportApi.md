# Mev\Gateway\RapportApi

All URIs are relative to *https://api.mev.quebec/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analyseTransactionnelle**](RapportApi.md#analysetransactionnelle) | **GET** /rapport/AnalyseTransactionnelle | Analyse transactionnelle (par période)
[**analyseTransactionnelleTransaction**](RapportApi.md#analysetransactionnelletransaction) | **GET** /rapport/AnalyseTransactionnelleTransaction | Analyse transactionnelle (par numéro de transaction))
[**detailDesVentesNonPrescrit**](RapportApi.md#detaildesventesnonprescrit) | **GET** /rapport/DetailDesVentesNonPrescrit | Détail des ventes (non prescrit, par période)
[**detailDesVentesPrescritPartiel**](RapportApi.md#detaildesventesprescritpartiel) | **GET** /rapport/DetailDesVentesPrescritPartiel | Détail des ventes (prescrit partiel, par numéro de transaction)
[**detailJournalEvenements**](RapportApi.md#detailjournalevenements) | **GET** /rapport/DetailJournalEvenements | Détail du journal des évènements
[**infosGenerales**](RapportApi.md#infosgenerales) | **GET** /rapport/InfosGenerales | Informations générales
[**sommaireDesVentes**](RapportApi.md#sommairedesventes) | **GET** /rapport/SommaireDesVentes | Rapport Sommaire des ventes par période
[**sommaireDesVentesTransaction**](RapportApi.md#sommairedesventestransaction) | **GET** /rapport/SommaireDesVentesTransaction | Rapport Sommaire des ventes par numéro de transaction
[**sommaireJournalEvenements**](RapportApi.md#sommairejournalevenements) | **GET** /rapport/SommaireJournalEvenements | Sommaire du journal des évènements
[**sommairePeriodiqueDesVentes**](RapportApi.md#sommaireperiodiquedesventes) | **GET** /rapport/SommairePeriodiqueDesVentes | Rapport Sommaire périodique des ventes

# **analyseTransactionnelle**
> \Mev\Gateway\Model\InlineResponse202 analyseTransactionnelle($debut, $fin)

Analyse transactionnelle (par période)

Produire le rapport Analyse transactionelle pour les transactions effectuées

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMMJJhhmm)
$fin = "fin_example"; // string | Date fin (AAAMMJJhhmm)

try {
    $result = $apiInstance->analyseTransactionnelle($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->analyseTransactionnelle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMMJJhhmm) |
 **fin** | **string**| Date fin (AAAMMJJhhmm) | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyseTransactionnelleTransaction**
> \Mev\Gateway\Model\InlineResponse202 analyseTransactionnelleTransaction($debut, $fin)

Analyse transactionnelle (par numéro de transaction))

Produire le rapport Analyse transactionelle pour les transactions effectuées

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Transaction debut
$fin = "fin_example"; // string | Transaction fin

try {
    $result = $apiInstance->analyseTransactionnelleTransaction($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->analyseTransactionnelleTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Transaction debut |
 **fin** | **string**| Transaction fin |

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailDesVentesNonPrescrit**
> \Mev\Gateway\Model\InlineResponse202 detailDesVentesNonPrescrit($debut, $fin)

Détail des ventes (non prescrit, par période)

Produire le rapport Détail des ventes pour retracer les documents non prescrits (documents produits en mode formation et duplicatas) enregistrés

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMMJJhhmm)
$fin = "fin_example"; // string | Date fin (AAAMMJJhhmm)

try {
    $result = $apiInstance->detailDesVentesNonPrescrit($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->detailDesVentesNonPrescrit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMMJJhhmm) | [optional]
 **fin** | **string**| Date fin (AAAMMJJhhmm) | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailDesVentesPrescritPartiel**
> \Mev\Gateway\Model\InlineResponse202 detailDesVentesPrescritPartiel($debut, $fin)

Détail des ventes (prescrit partiel, par numéro de transaction)

Produire le rapport Détail des ventes portant sur les données essentielles de chacune des transactions (prescrit partiel) enregistrées dans le MEV

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Transaction debut
$fin = "fin_example"; // string | Transaction fin

try {
    $result = $apiInstance->detailDesVentesPrescritPartiel($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->detailDesVentesPrescritPartiel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Transaction debut |
 **fin** | **string**| Transaction fin |

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailJournalEvenements**
> \Mev\Gateway\Model\InlineResponse202 detailJournalEvenements($debut, $fin)

Détail du journal des évènements

Produire le rapport Détail du journal pour les transactions effectuées pendnat la période spécifiée

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMMJJhhmm)
$fin = "fin_example"; // string | Date fin (AAAMMJJhhmm)

try {
    $result = $apiInstance->detailJournalEvenements($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->detailJournalEvenements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMMJJhhmm) |
 **fin** | **string**| Date fin (AAAMMJJhhmm) | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infosGenerales**
> \Mev\Gateway\Model\InlineResponse202 infosGenerales()

Informations générales

Produire le rapport Informations générales

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->infosGenerales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->infosGenerales: ', $e->getMessage(), PHP_EOL;
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

# **sommaireDesVentes**
> \Mev\Gateway\Model\InlineResponse202 sommaireDesVentes($debut, $fin)

Rapport Sommaire des ventes par période

Produire le rapport Sommaire périodique des ventes (SPV)

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMMJJhhmm)
$fin = "fin_example"; // string | Date fin (AAAMMJJhhmm)

try {
    $result = $apiInstance->sommaireDesVentes($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->sommaireDesVentes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMMJJhhmm) |
 **fin** | **string**| Date fin (AAAMMJJhhmm) |

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sommaireDesVentesTransaction**
> \Mev\Gateway\Model\InlineResponse202 sommaireDesVentesTransaction($debut, $fin)

Rapport Sommaire des ventes par numéro de transaction

Produire le rapport Sommaire des ventes portant sur les données de transactions spécifié

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Transaction debut
$fin = "fin_example"; // string | Transaction fin

try {
    $result = $apiInstance->sommaireDesVentesTransaction($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->sommaireDesVentesTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Transaction debut |
 **fin** | **string**| Transaction fin |

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sommaireJournalEvenements**
> \Mev\Gateway\Model\InlineResponse202 sommaireJournalEvenements($debut, $fin)

Sommaire du journal des évènements

Produire le rapport Sommaire du journal des évànements pour les transactions effectuées pendnat la période spécifiée

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMMJJhhmm)
$fin = "fin_example"; // string | Date fin (AAAMMJJhhmm)

try {
    $result = $apiInstance->sommaireJournalEvenements($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->sommaireJournalEvenements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMMJJhhmm) |
 **fin** | **string**| Date fin (AAAMMJJhhmm) | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sommairePeriodiqueDesVentes**
> \Mev\Gateway\Model\InlineResponse202 sommairePeriodiqueDesVentes($debut, $fin)

Rapport Sommaire périodique des ventes

Produire le rapport Sommaire périodique des ventes (SPV)

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

$apiInstance = new Mev\Gateway\MevGateway\RapportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAMM)
$fin = "fin_example"; // string | Date fin (AAAMM)

try {
    $result = $apiInstance->sommairePeriodiqueDesVentes($debut, $fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RapportApi->sommairePeriodiqueDesVentes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAMM) | [optional]
 **fin** | **string**| Date fin (AAAMM) | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

