<?php

namespace HasOffersApi\Controller;

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


    public function __construct()
    {
    }

    /**
     * @param string $network_id
     * @param string $api_key
     * @param string $api_version
     * @param string $response_type
     * @throws ApiKeyEmptyException
     * @throws NetworkIdEmptyException
     */
    public function prepareConnect(string $network_id, string $api_key, string $api_version = 'Apiv3', string $response_type = 'json')
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
     * @param string $api_connect_url
     */
    public function setApiConnectUrl(string $api_connect_url)
    {
        $this->api_connect_url = $api_connect_url;
    }


    public function post() {

    }

    public function get(array $params) {
        return $this->curl($params);
    }

    private function curl(array $params) {
        // NetworkToken=APIKEY&Target=Offer&Method=findAll



        $params = http_build_query($params);

        $url = $this->api_connect_url.'&'.$params;

        echo $url."\n";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));

        $result = curl_exec($curl);
        curl_close($curl);

        var_dump(json_decode($result));
    }

}