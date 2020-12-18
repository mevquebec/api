# Mev\Gateway\TransactionApi

All URIs are relative to *https://api.mev.quebec/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**annuleTransaction**](TransactionApi.md#annuletransaction) | **DELETE** /transaction/{transactionId} | Annule la transmission d&#x27;une transaction en attente
[**getTransaction**](TransactionApi.md#gettransaction) | **GET** /transaction/{transactionId} | Obtenir les informations d&#x27;une transaction spécifique
[**getTransactionFile**](TransactionApi.md#gettransactionfile) | **GET** /transaction/{transactionId}/download | Téléchargement de fichier
[**getTransactionStatus**](TransactionApi.md#gettransactionstatus) | **GET** /transaction/{transactionId}/status | Obtenir les informations d&#x27;une transaction spécifique
[**listeTransaction**](TransactionApi.md#listetransaction) | **GET** /transactions | Liste des transactions

# **annuleTransaction**
> annuleTransaction($transaction_id)

Annule la transmission d'une transaction en attente

Annule la transmission vers le MEV d'une transaction en attente.

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

$apiInstance = new Mev\Gateway\MevGateway\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 56; // int | Numéro de transaction

try {
    $apiInstance->annuleTransaction($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->annuleTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| Numéro de transaction |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransaction**
> getTransaction($transaction_id)

Obtenir les informations d'une transaction spécifique

Retourne les informations d'une transaction spécifique.

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

$apiInstance = new Mev\Gateway\MevGateway\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 56; // int | Numéro de transaction

try {
    $apiInstance->getTransaction($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| Numéro de transaction |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionFile**
> getTransactionFile($transaction_id, $format)

Téléchargement de fichier

Retourne le contenu du fichier généré par le MEV.

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

$apiInstance = new Mev\Gateway\MevGateway\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 56; // int | Numéro de transaction
$format = "format_example"; // string | Format de sortie

try {
    $apiInstance->getTransactionFile($transaction_id, $format);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| Numéro de transaction |
 **format** | **string**| Format de sortie | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionStatus**
> getTransactionStatus($transaction_id)

Obtenir les informations d'une transaction spécifique

Retourne les informations d'une transaction spéficique.

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

$apiInstance = new Mev\Gateway\MevGateway\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 56; // int | Numéro de transaction

try {
    $apiInstance->getTransactionStatus($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| Numéro de transaction |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listeTransaction**
> listeTransaction($debut, $fin)

Liste des transactions

Retourne la liste de toutes les transactions correspondant aux critères de recherche.

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

$apiInstance = new Mev\Gateway\MevGateway\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$debut = "debut_example"; // string | Date debut (AAAAMMJJ)
$fin = "fin_example"; // string | Date fin (AAAAMMJJ)

try {
    $apiInstance->listeTransaction($debut, $fin);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->listeTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debut** | **string**| Date debut (AAAAMMJJ) | [optional]
 **fin** | **string**| Date fin (AAAAMMJJ) | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

