<?php
/**
 * FactureApi
 * PHP version 5
 *
 * @category Class
 * @package  Mev\Gateway
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Module d'enregistrement des ventes (MEV) API
 *
 * Permet la communication bidirectionnelle avec le module d'enregistrement des ventes (MEV) de Revenu Québec et votre système d'enregistrement des ventes (SEV) ou toutes autres logiciel de caisse.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@mev.quebec
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Mev\Gateway\MevGateway;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Mev\Gateway\ApiException;
use Mev\Gateway\Configuration;
use Mev\Gateway\HeaderSelector;
use Mev\Gateway\ObjectSerializer;

/**
 * FactureApi Class Doc Comment
 *
 * @category Class
 * @package  Mev\Gateway
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FactureApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation ajouterFacture
     *
     * Ajouter une nouvelle facture
     *
     * @param  string $id Numéro de transaction unique (required)
     * @param  \Mev\Gateway\Model\Items $items Items à facturer (required)
     * @param  bool $formation Mode formation (optional)
     * @param  string $serveur Nom du serveur (optional)
     * @param  int $table Numéro de la table (optional)
     *
     * @throws \Mev\Gateway\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Mev\Gateway\Model\InlineResponse202
     */
    public function ajouterFacture($id, $items, $formation = null, $serveur = null, $table = null)
    {
        list($response) = $this->ajouterFactureWithHttpInfo($id, $items, $formation, $serveur, $table);
        return $response;
    }

    /**
     * Operation ajouterFactureWithHttpInfo
     *
     * Ajouter une nouvelle facture
     *
     * @param  string $id Numéro de transaction unique (required)
     * @param  \Mev\Gateway\Model\Items $items Items à facturer (required)
     * @param  bool $formation Mode formation (optional)
     * @param  string $serveur Nom du serveur (optional)
     * @param  int $table Numéro de la table (optional)
     *
     * @throws \Mev\Gateway\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Mev\Gateway\Model\InlineResponse202, HTTP status code, HTTP response headers (array of strings)
     */
    public function ajouterFactureWithHttpInfo($id, $items, $formation = null, $serveur = null, $table = null)
    {
        $returnType = '\Mev\Gateway\Model\InlineResponse202';
        $request = $this->ajouterFactureRequest($id, $items, $formation, $serveur, $table);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mev\Gateway\Model\InlineResponse202',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mev\Gateway\Model\InlineResponse400[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ajouterFactureAsync
     *
     * Ajouter une nouvelle facture
     *
     * @param  string $id Numéro de transaction unique (required)
     * @param  \Mev\Gateway\Model\Items $items Items à facturer (required)
     * @param  bool $formation Mode formation (optional)
     * @param  string $serveur Nom du serveur (optional)
     * @param  int $table Numéro de la table (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ajouterFactureAsync($id, $items, $formation = null, $serveur = null, $table = null)
    {
        return $this->ajouterFactureAsyncWithHttpInfo($id, $items, $formation, $serveur, $table)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ajouterFactureAsyncWithHttpInfo
     *
     * Ajouter une nouvelle facture
     *
     * @param  string $id Numéro de transaction unique (required)
     * @param  \Mev\Gateway\Model\Items $items Items à facturer (required)
     * @param  bool $formation Mode formation (optional)
     * @param  string $serveur Nom du serveur (optional)
     * @param  int $table Numéro de la table (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ajouterFactureAsyncWithHttpInfo($id, $items, $formation = null, $serveur = null, $table = null)
    {
        $returnType = '\Mev\Gateway\Model\InlineResponse202';
        $request = $this->ajouterFactureRequest($id, $items, $formation, $serveur, $table);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'ajouterFacture'
     *
     * @param  string $id Numéro de transaction unique (required)
     * @param  \Mev\Gateway\Model\Items $items Items à facturer (required)
     * @param  bool $formation Mode formation (optional)
     * @param  string $serveur Nom du serveur (optional)
     * @param  int $table Numéro de la table (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ajouterFactureRequest($id, $items, $formation = null, $serveur = null, $table = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling ajouterFacture'
            );
        }
        // verify the required parameter 'items' is set
        if ($items === null || (is_array($items) && count($items) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $items when calling ajouterFacture'
            );
        }

        $resourcePath = '/facture/Ajouter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id, null);
        }
        // query params
        if ($formation !== null) {
            $queryParams['formation'] = ObjectSerializer::toQueryValue($formation, null);
        }
        // query params
        if ($serveur !== null) {
            $queryParams['serveur'] = ObjectSerializer::toQueryValue($serveur, null);
        }
        // query params
        if ($table !== null) {
            $queryParams['table'] = ObjectSerializer::toQueryValue($table, 'int64');
        }
        // query params
        if ($items !== null) {
            $queryParams['items'] = ObjectSerializer::toQueryValue($items, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-MEV-ID');
        if ($apiKey !== null) {
            $headers['X-MEV-ID'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
