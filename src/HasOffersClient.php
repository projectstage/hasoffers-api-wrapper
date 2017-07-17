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
     * @var
     */
    protected $last_curl_result;

    /**
     * @var
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
        $this->setApiConnectUrl($this->protocoll . '://' . $network_id . '.' . $this->api_url_part . '/' . $api_version . '/' . $response_type . '?' . self::NETWORK_TOKEN_PARAM_MAME . '=' . $api_key);
    }



    /**
     * @return string
     */
    private function getApiConnectUrl(): string
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
    private function setApiConnectUrl(string $api_connect_url)
    {
        $this->api_connect_url = $api_connect_url;
    }

    /**
     * @return array
     */
    public function getUrlParams(): array
    {
        return $this->url_params;
    }

    /**
     * @return mixed
     */
    public function callApi() {
        $this->http_query_string = http_build_query($this->url_params);
        return $this->curl($this->http_query_string);
    }

    /**
     * @param string $http_query_string
     * @return mixed
     */
    private function curl(string $http_query_string) {

        $error = new \stdClass();

        echo $this->getApiConnectUrl().'&'.$http_query_string."\n";

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

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->url_params[self::PARAM_INDEX_FIELDS];
    }

    /**
     * @param array $fields
     * @return $this
     * @throws \Exception
     */
    public function setFields(array $fields)
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
    public function getFilters(): array
    {
        return $this->url_params[self::PARAM_INDEX_FILTERS];
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
    public function getContain(): array
    {
        return $this->url_params[self::PARAM_INDEX_CONTAIN];
    }

    /**
     * @param array $contain
     * @return $this
     * @throws \Exception
     */
    public function setContain(array $contain)
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
    public function getSort(): array
    {
        return $this->url_params[self::PARAM_INDEX_SORT];
    }

    /**
     * @param array $sort
     * @return $this
     * @throws \Exception
     */
    public function setSort(array $sort)
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
    public function getLimit(): int
    {
        return $this->url_params[self::PARAM_INDEX_LIMIT];
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
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
    public function getPage(): int
    {
        return $this->url_params[self::PARAM_INDEX_PAGE];
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage(int $page)
    {
        if($page < 0) {
            $page = $this->standard_page;
        }

        $pager[self::PARAM_INDEX_PAGE] = $page;
        $this->url_params = array_merge($this->url_params, $pager);
        return $this;
    }

}