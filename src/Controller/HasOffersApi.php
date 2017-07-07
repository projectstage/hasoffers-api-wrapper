<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/6/17
 * Time: 12:55 PM
 */

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
     * @var string
     */
    protected $target;

    /**
     * @var string
     */
    protected $method;


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
        $this->api_connect_url = $this->$this->protocoll . '://' . $this->network_id . '.' . $this->api_url_part . '/' . $api_version . '/' . $response_type . '?' . self::NETWORK_TOKEN_PARAM_MAME . '=' . $api_key;
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
    public function getApiDoamin(): string
    {
        return $this->api_doamin;
    }

}