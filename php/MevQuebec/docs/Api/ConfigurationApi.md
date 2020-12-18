# Mev\Gateway\ConfigurationApi

All URIs are relative to *https://api.mev.quebec/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**arreterMev**](ConfigurationApi.md#arretermev) | **GET** /configuration/ArreterMev | Arrrêter le MEV
[**basculerMev**](ConfigurationApi.md#basculermev) | **GET** /configuration/BasculerMev | Passer en mode Installation
[**imprimerPageTest**](ConfigurationApi.md#imprimerpagetest) | **GET** /configuration/ImprimerPageTest | Imprimer une page de test
[**modifierChoixImprimante**](ConfigurationApi.md#modifierchoiximprimante) | **GET** /configuration/ModifierChoixImprimante | Modifier le choix de l&#x27;imprimante
[**modifierDateHeure**](ConfigurationApi.md#modifierdateheure) | **GET** /configuration/ModifierDateHeure | Ajuster l&#x27;heure du MEV
[**modifierFrequenceSPV**](ConfigurationApi.md#modifierfrequencespv) | **GET** /configuration/ModifierFrequenceSPV | Modifier la fréquence de productuon du SPV
[**voirConfigurationTcpIp**](ConfigurationApi.md#voirconfigurationtcpip) | **GET** /configuration/VoirConfigurationTcpIp | Voir la configuration TCP/IP du MEV

# **arreterMev**
> \Mev\Gateway\Model\InlineResponse202 arreterMev()

Arrrêter le MEV

Permet de redémarrer le MEV sans prendre le soin au préalable de vider le tampon des impressions.

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->arreterMev();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->arreterMev: ', $e->getMessage(), PHP_EOL;
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

# **basculerMev**
> \Mev\Gateway\Model\InlineResponse202 basculerMev()

Passer en mode Installation

Faire passer le MEV en mode Installation en prévision de la visite de l'installateur

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->basculerMev();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->basculerMev: ', $e->getMessage(), PHP_EOL;
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

# **imprimerPageTest**
> \Mev\Gateway\Model\InlineResponse202 imprimerPageTest()

Imprimer une page de test

Imprimer une page de test

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->imprimerPageTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->imprimerPageTest: ', $e->getMessage(), PHP_EOL;
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

# **modifierChoixImprimante**
> \Mev\Gateway\Model\InlineResponse202 modifierChoixImprimante($modele)

Modifier le choix de l'imprimante

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modele = 56; // int | Modele d'imprimante

try {
    $result = $apiInstance->modifierChoixImprimante($modele);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->modifierChoixImprimante: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modele** | **int**| Modele d&#x27;imprimante | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifierDateHeure**
> \Mev\Gateway\Model\InlineResponse202 modifierDateHeure($date)

Ajuster l'heure du MEV

Permet d'ajuster la date et heure du MEV

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = "date_example"; // string | Date et Heure (AAAAMMDDHHmmss)

try {
    $result = $apiInstance->modifierDateHeure($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->modifierDateHeure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Date et Heure (AAAAMMDDHHmmss) |

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifierFrequenceSPV**
> \Mev\Gateway\Model\InlineResponse202 modifierFrequenceSPV($frequence)

Modifier la fréquence de productuon du SPV

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$frequence = "frequence_example"; // string | Frequence

try {
    $result = $apiInstance->modifierFrequenceSPV($frequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->modifierFrequenceSPV: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **frequence** | **string**| Frequence | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voirConfigurationTcpIp**
> \Mev\Gateway\Model\InlineResponse202 voirConfigurationTcpIp()

Voir la configuration TCP/IP du MEV

Voir la configuration TCP/IP du MEV

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

$apiInstance = new Mev\Gateway\MevGateway\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->voirConfigurationTcpIp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->voirConfigurationTcpIp: ', $e->getMessage(), PHP_EOL;
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

