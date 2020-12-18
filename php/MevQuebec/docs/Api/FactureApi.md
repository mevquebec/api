# Mev\Gateway\FactureApi

All URIs are relative to *https://api.mev.quebec/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ajouterFacture**](FactureApi.md#ajouterfacture) | **POST** /facture/Ajouter | Ajouter une nouvelle facture

# **ajouterFacture**
> \Mev\Gateway\Model\InlineResponse202 ajouterFacture($id, $items, $formation, $serveur, $table)

Ajouter une nouvelle facture

Enregistrer une facture sur le MEV

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

$apiInstance = new Mev\Gateway\MevGateway\FactureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Numéro de transaction unique
$items = new \Mev\Gateway\Model\Items(); // \Mev\Gateway\Model\Items | Items à facturer
$formation = true; // bool | Mode formation
$serveur = "serveur_example"; // string | Nom du serveur
$table = 789; // int | Numéro de la table

try {
    $result = $apiInstance->ajouterFacture($id, $items, $formation, $serveur, $table);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactureApi->ajouterFacture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Numéro de transaction unique |
 **items** | [**\Mev\Gateway\Model\Items**](../Model/.md)| Items à facturer |
 **formation** | **bool**| Mode formation | [optional]
 **serveur** | **string**| Nom du serveur | [optional]
 **table** | **int**| Numéro de la table | [optional]

### Return type

[**\Mev\Gateway\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[apiKey](../../README.md#apiKey), [deviceId](../../README.md#deviceId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

