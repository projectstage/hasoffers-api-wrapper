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
    protected $api_doamin;

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
     * @param string $target
     * @param string $method
     * @param array $params
     * @throws ApiKeyEmptyException
     * @throws MethodEmptyException
     * @throws NetworkIdEmptyException
     * @throws TargetEmptyException
     */
    public function prepareConnect(string $network_id, string $api_key, string $target, string $method, array $params = [])
    {
        if($network_id == '') {
            throw new NetworkIdEmptyException('Network ID seems to be empty');
        }

        if($api_key == '') {
            throw new ApiKeyEmptyException('Api key seems to be empty');
        }

        if($target == '') {
            throw new TargetEmptyException('Target seems to be empty');
        }

        if($method == '') {
            throw new MethodEmptyException('Method seems to be empty');
        }

        /*
         * https://NETWORKID.api.hasoffers.com/Apiv3/json?NetworkToken=APIKEY&Target=Offer&Method=findAll

Breaking the URL down:

Base URL: https://NETWORKID.api.hasoffers.com/Apiv3/json?
API Key: NetworkToken=APIKEY
Controller: Target=Offer
Method: Method=findAll
         */
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
     * @return $this
     */
    public function setNetworkId(string $network_id)
    {
        $this->network_id = $network_id;

        $this->api_doamin = $this->$this->protocoll.'://'.$this->network_id.'.'.$this->api_url_part;
        return $this;
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