# Mev\Gateway\SystemeApi

All URIs are relative to *https://api.mev.quebec/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**effacerModele**](SystemeApi.md#effacermodele) | **DELETE** /systeme/Modele/{modeleId} | Efface un modèle de facture en attente
[**listeModele**](SystemeApi.md#listemodele) | **GET** /systeme/Modele/{modeleId} | Obtenir les informations d&#x27;un modèle de facture spécifique
[**listeModeleFacture**](SystemeApi.md#listemodelefacture) | **GET** /systeme/Modeles | Liste des modèles de facture
[**systemeModelesPost**](SystemeApi.md#systememodelespost) | **POST** /systeme/Modeles | Ajouter un nouveau modèle de facture

# **effacerModele**
> effacerModele($modele_id)

Efface un modèle de facture en attente

Permet d'effacer un modèle de facture.

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

$apiInstance = new Mev\Gateway\MevGateway\SystemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modele_id = 56; // int | Numéro de modèle

try {
    $apiInstance->effacerModele($modele_id);
} catch (Exception $e) {
    echo 'Exception when calling SystemeApi->effacerModele: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modele_id** | **int**| Numéro de modèle |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listeModele**
> listeModele($modele_id)

Obtenir les informations d'un modèle de facture spécifique

Retourne les informations d'un modèle de facture spécifique.

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

$apiInstance = new Mev\Gateway\MevGateway\SystemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modele_id = 56; // int | Numéro de modèle

try {
    $apiInstance->listeModele($modele_id);
} catch (Exception $e) {
    echo 'Exception when calling SystemeApi->listeModele: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modele_id** | **int**| Numéro de modèle |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listeModeleFacture**
> listeModeleFacture()

Liste des modèles de facture

Retourne la liste de tous les modèles de facture

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

$apiInstance = new Mev\Gateway\MevGateway\SystemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listeModeleFacture();
} catch (Exception $e) {
    echo 'Exception when calling SystemeApi->listeModeleFacture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemeModelesPost**
> systemeModelesPost()

Ajouter un nouveau modèle de facture

Permet d'ajouter un nouveau modèle de facture

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

$apiInstance = new Mev\Gateway\MevGateway\SystemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemeModelesPost();
} catch (Exception $e) {
    echo 'Exception when calling SystemeApi->systemeModelesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

