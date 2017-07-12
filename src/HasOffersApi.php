<?php

namespace HasOffersApi;

/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/6/17
 * Time: 12:55 PM
 */
use HasOffersApi\Exceptions\ApiKeyEmptyException;
use HasOffersApi\Exceptions\NetworkIdEmptyException;

/**
 * Class HasOffersApi
 * @package HasoffersApiWrapper
 */
class HasOffersApi
{

    CONST NETWORK_TOKEN_PARAM_MAME = 'NetworkToken';

    /**
     * @var string
     */
    protected $network_id;

    /**
     * @var string
     */
    protected $api_key;

    /**
     * @var string
     */
    protected $api_connect_url;

    /**
     * @var string
     */
    protected $api_url_part = 'api.hasoffers.com';

    /**
     * @var string
     */
    protected $protocoll = 'https';

    /**
     * @var
     */
    protected $last_curl_result;

    /**
     * @var
     */
    protected $last_curl_info;

    /**
     * HasOffersApi constructor.
     * @param string $network_id
     * @param string $api_key
     * @param string $api_version
     * @param string $response_type
     * @throws ApiKeyEmptyException
     * @throws NetworkIdEmptyException
     */
    public function __construct(string $network_id, string $api_key, string $api_version = 'Apiv3', string $response_type = 'json')
    {
        if ($network_id == '') {
            throw new NetworkIdEmptyException('Network ID seems to be empty');
        }

        if ($api_key == '') {
            throw new ApiKeyEmptyException('Api key seems to be empty');
        }

        // set the network id and create url API string
        $this->setNetworkId($network_id);
        $this->api_connect_url = $this->protocoll . '://' . $this->network_id . '.' . $this->api_url_part . '/' . $api_version . '/' . $response_type . '?' . self::NETWORK_TOKEN_PARAM_MAME . '=' . $api_key;
    }


    /**
     * @return string
     */
    public function getNetworkId(): string
    {
        return $this->network_id;
    }

    /**
     * @param string $network_id
     */
    private function setNetworkId(string $network_id)
    {
        $this->network_id = $network_id;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->api_key;
    }

    /**
     * @param string $api_key
     * @return $this
     */
    public function setApiKey(string $api_key)
    {
        $this->api_key = $api_key;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiConnectUrl(): string
    {
        return $this->api_connect_url;
    }

    /**
     * @return mixed
     */
    public function getLastCurlResult()
    {
        return $this->last_curl_result;
    }

    /**
     * @return mixed
     */
    public function getLastCurlInfo()
    {
        return $this->last_curl_info;
    }

    /**
     * @param string $api_connect_url
     */
    public function setApiConnectUrl(string $api_connect_url)
    {
        $this->api_connect_url = $api_connect_url;
    }

    /**
     * @param string $http_query_string
     * @return mixed
     */
    public function callApi(string $http_query_string) {
        return $this->curl($http_query_string);
    }

    /**
     * @param string $http_query_string
     * @return mixed
     */
    private function curl(string $http_query_string) {

        $error = new \stdClass();

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->getApiConnectUrl().'&'.$http_query_string
        ]);

        $this->last_curl_result = json_decode(curl_exec($curl));
        $this->last_curl_info = curl_getinfo($curl);

        curl_close($curl);

        if(isset($this->last_curl_result->response) === true ) {
            return $this->last_curl_result->response;
        } else {
            $error->status = -1;
            $error->data = '';
            $error->errorMessage = 'Seems there is no response field returned from end-point';

            return $error;
        }

    }

}