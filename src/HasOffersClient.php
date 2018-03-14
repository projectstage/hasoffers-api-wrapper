<?php

/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/6/17
 * Time: 12:55 PM
 */

namespace HasOffersApi;

use HasOffersApi\Exceptions\ApiKeyEmptyException;
use HasOffersApi\Exceptions\NetworkIdEmptyException;
use HasOffersApi\Helper\Criteria;

/**
 * Class HasOffersClient
 * @package HasoffersApiWrapper
 */
class HasOffersClient
{

    CONST NETWORK_TOKEN_PARAM_MAME = 'NetworkToken';

    CONST PARAM_INDEX_FIELDS = 'fields';
    CONST PARAM_INDEX_SORT = 'sort';
    CONST PARAM_INDEX_LIMIT = 'limit';
    CONST PARAM_INDEX_PAGE = 'page';
    CONST PARAM_INDEX_CONTAIN = 'contain';

    CONST MAX_LIMIT = 1250;


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
     * @var mixed
     */
    protected $last_curl_result;

    /**
     * @var array
     */
    protected $last_curl_info;

    /**
     * @var array
     */
    protected $url_params = [];

    /**
     * @var int
     */
    protected $standard_limit = 10;

    /**
     * @var int
     */
    protected $standard_page = 1;

    /**
     * @var string
     */
    protected $http_query_string = '';

    /**
     * HasOffersApi constructor.
     *
     * @param string $network_id
     * @param string $api_key
     * @param string $api_version
     * @param string $response_type
     * @throws ApiKeyEmptyException
     * @throws NetworkIdEmptyException
     */
    public function __construct($network_id, $api_key, $api_version = 'Apiv3', $response_type = 'json')
    {
        if ($network_id == '') {
            throw new NetworkIdEmptyException('Network ID seems to be empty');
        }

        if ($api_key == '') {
            throw new ApiKeyEmptyException('Api key seems to be empty');
        }

        // set the network id and create url API string
        $this->setApiConnectUrl($this->protocoll . '://' . $network_id . '.' . $this->api_url_part . '/' . $api_version . '/' . $response_type . '?' . self::NETWORK_TOKEN_PARAM_MAME . '=' . $api_key);
    }



    /**
     * @return string
     */
    private function getApiConnectUrl()
    {
        return $this->api_connect_url;
    }

    /**
     * Get the last cUrl result in raw format from JSON encoded response string
     *
     * @return mixed
     */
    public function getLastCurlResult()
    {
        return $this->last_curl_result;
    }

    /**
     * Get the last cUrl info
     *
     * @see http://php.net/manual/en/function.curl-getinfo.php
     * @return mixed
     */
    public function getLastCurlInfo()
    {
        return $this->last_curl_info;
    }

    /**
     * @param string $api_connect_url
     */
    private function setApiConnectUrl($api_connect_url)
    {
        $this->api_connect_url = $api_connect_url;
    }

    /**
     * Will return an array containing URL params which are currently set
     *
     * @return array
     */
    public function getUrlParams()
    {
        return $this->url_params;
    }

    /**
     * Finally do your call against the HasOffers API
     *
     * @param bool $map - decide if you want to get the raw JSON encoded response or a class mapped response. Standard is false.
     * @return mixed|null|object|\stdClass
     */
    public function callApi($map = false) {

        // temporarily $map by default to false. All mapping classes needs to be finished before we can enable this function again
        // TODO: prepare/create all mapping classes!
        $map = false;

        $this->http_query_string = http_build_query($this->url_params);
        return $this->curl($this->http_query_string, $map);
    }

    /**
     * Make the cUrl call and return either class mappings or error
     *
     * @param $http_query_string string - The parameter part of an url
     * @param $map boolean - map response to class
     * @return null|array|object|\stdClass
     */
    private function curl($http_query_string, $map)
    {

        // cUrl process
        $error = new \stdClass();

//        echo $this->getApiConnectUrl().'&'.$http_query_string."\n";
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->getApiConnectUrl().'&'.$http_query_string
        ]);

        $this->last_curl_result = json_decode(curl_exec($curl));
        $this->last_curl_info = curl_getinfo($curl);

        curl_close($curl);



        // mapping process
        if(isset($this->last_curl_result->response) === true ) {

            if(isset($this->last_curl_result->response->data) === true && empty($this->last_curl_result->response->data) === false) {
                if($map === true) {

                    $response_data = $this->last_curl_result->response->data;

                    if($this->isFirstIndexInt($response_data) === true) {
                        $return_data = [];
                        foreach($response_data as $data) {
                            $return_data[] = $this->mapResponse($data);
                        }
                        return $return_data;
                    } else {
                        return $this->mapResponse($this->last_curl_result->response->data);
                    }

                } else {
                    return $this->last_curl_result->response->data;
                }

            } else {
                $error->status = -1;
                $error->data = $this->last_curl_result->response;
                $error->errorMessage = 'Response contains no data.';

                return $error;
            }

        } else {
            $error->status = -1;
            $error->data = null;
            $error->errorMessage = 'Seems there is no response field returned from end-point.';

            return $error;
        }
    }

    /**
     * @param $mixed_data
     * @return bool
     */
    private function isFirstIndexInt($mixed_data)
    {
        $response_is_array = false;

        foreach($mixed_data as $key => $value) {
            if((int)$key > 0) {
                $response_is_array = true;
            }
            break;
        }

        return $response_is_array;
    }

    /**
     * Getting data from response and map them to the given class structure
     *
     * @see https://github.com/cweiske/jsonmapper
     * @param $data
     * @return null|object
     */
    private function mapResponse($data)
    {
        $Mapper = new \JsonMapper();
        $Mapper->bStrictNullTypes = false;

        $Target = new \stdClass();
        $Contain = new \stdClass();
        $contains = $this->getContain();
        $target_key = '';
        $mappings = null;

        foreach($data as $key => $value) {

            if (in_array($key, $contains) === true) {
                $Contain->{$key} = $value;
            } else {
                $target_key = $key;
                $Target->{$key} = $value;
            }
        }

        if($Contain !== null) {
            foreach($Contain as $key => $value) {
                $Target->{$target_key}->{$key} = $value;
            }
        }

        if($Target !== null) {
            foreach($Target as $key => $value) {
                $class = 'HasOffersApi\\Mappings\\'.$key;
                $mappings = $Mapper->map($value, new $class());
            }
        }

        return $mappings;
    }

    /**
     * Get the data fields (columns) you set to get data from HasOffers
     * @return array
     */
    public function getFields()
    {
        return $this->url_params[self::PARAM_INDEX_FIELDS];
    }

    /**
     * Set which data fields (columns) you want to get from HasOffers
     *
     * @param array $fields
     * @return $this
     * @throws \Exception
     */
    public function setFields($fields)
    {
        try {
            $field[self::PARAM_INDEX_FIELDS] = $fields;
            $this->url_params = array_merge($this->url_params, $field);
            return $this;
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->url_params[Criteria::PARAM_INDEX_FILTERS];
    }

    /**
     * @param Criteria $Criteria
     * @return $this
     * @throws \Exception
     */
    public function setFilters(Criteria $Criteria)
    {
        try {
            $criteria = $Criteria->getCriteria();
            $filter = $criteria;
            $this->url_params = array_merge($this->url_params, $filter);
            return $this;
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return array
     */
    public function getContain()
    {
        return $this->url_params[self::PARAM_INDEX_CONTAIN];
    }

    /**
     * @param array $contain
     * @return $this
     * @throws \Exception
     */
    public function setContain($contain)
    {
        try {
            $contains[self::PARAM_INDEX_CONTAIN] = $contain;
            $this->url_params = array_merge($this->url_params, $contains);
            return $this;
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return array
     */
    public function getSort()
    {
        return $this->url_params[self::PARAM_INDEX_SORT];
    }

    /**
     *
     * @see https://developers.tune.com/network-docs/filtering-sorting-paging/#sorting
     * @param array $sort
     * @return $this
     * @throws \Exception
     */
    public function setSort($sort)
    {
        try {
            $sorting[self::PARAM_INDEX_SORT] = $sort;
            $this->url_params = array_merge($this->url_params, $sorting);
            return $this;
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->url_params[self::PARAM_INDEX_LIMIT];
    }

    /**
     * @see https://developers.tune.com/network-docs/filtering-sorting-paging/#paging
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        if($limit < 1) {
            $limit = $this->standard_limit;
        }

        if($limit > self::MAX_LIMIT) {
            $limit = self::MAX_LIMIT;
        }

        $limiter[self::PARAM_INDEX_LIMIT] = $limit;
        $this->url_params = array_merge($this->url_params, $limiter);
        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->url_params[self::PARAM_INDEX_PAGE];
    }

    /**
     *
     * @see https://developers.tune.com/network-docs/filtering-sorting-paging/#paging
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        if($page < 0) {
            $page = $this->standard_page;
        }

        $pager[self::PARAM_INDEX_PAGE] = $page;
        $this->url_params = array_merge($this->url_params, $pager);
        return $this;
    }
    
    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function setParameter($key, $value)
    {
        $this->url_params[$key] = $value;
        return $this;
    }

}
