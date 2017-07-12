<?php

namespace HasOffersApi;
use HasOffersApi\Interfaces\OfferInterface;

/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/10/17
 * Time: 5:05 PM
 */


class Offer extends HasOffersApi implements OfferInterface
{

    CONST PARAM_INDEX_TARGET = 'Target';
    CONST PARAM_INDEX_METHOD = 'Method';

    CONST PARAM_INDEX_FIELDS = 'fields';
    CONST PARAM_INDEX_FILTERS = 'filters';
    CONST PARAM_INDEX_SORT = 'sort';
    CONST PARAM_INDEX_LIMIT = 'limit';
    CONST PARAM_INDEX_PAGE = 'page';
    CONST PARAM_INDEX_CONTAIN = 'contain';

    /**
     * @var array
     */
    protected $url_params = [];

    /**
     * @var string
     */
    protected $target = 'Offer';

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $filters = [];

    /**
     * @var array
     */
    protected $contain = [];

    /**
     * @var array
     */
    protected $sort = [];

    /**
     * @var int
     */
    protected $limit = 10;


    /**
     * Offer constructor.
     * @param string $network_id
     * @param string $api_key
     * @param string $api_version
     * @param string $response_type
     */
    public function __construct(string $network_id, string $api_key, string $api_version = 'Apiv3', string $response_type = 'json')
    {
        parent::__construct();
        $this->prepareConnect($network_id,$api_key,$api_version,$response_type);

        $this->url_params[self::PARAM_INDEX_TARGET] = $this->target;
    }

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     * @return $this
     * @throws \Exception
     */
    public function setFields(array $fields)
    {
        try {
            $this->fields[self::PARAM_INDEX_FIELDS] = $fields[self::PARAM_INDEX_FIELDS];
            $this->url_params = array_merge($this->url_params, $this->fields);
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
        return $this->filters;
    }

    /**
     * @param array $filters
     * @return $this
     * @throws \Exception
     */
    public function setFilters(array $filters)
    {
        try {
            $this->filters[self::PARAM_INDEX_FILTERS] = $filters[self::PARAM_INDEX_FILTERS];
            $this->url_params = array_merge($this->url_params, $this->filters);
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
        return $this->contain;
    }

    /**
     * @param array $contain
     * @return $this
     * @throws \Exception
     */
    public function setContain(array $contain)
    {
        try {
            $this->contain[self::PARAM_INDEX_CONTAIN] = $contain[self::PARAM_INDEX_CONTAIN];
            $this->url_params = array_merge($this->url_params, $this->contain);
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
        return $this->sort;
    }

    /**
     * @param array $sort
     * @return $this
     * @throws \Exception
     */
    public function setSort(array $sort)
    {
        try {
            $this->sort[self::PARAM_INDEX_SORT] = $sort[self::PARAM_INDEX_SORT];
            $this->url_params = array_merge($this->url_params, $this->sort);
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
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
        $this->url_params = array_merge($this->url_params, [self::PARAM_INDEX_LIMIT => $this->limit]);
        return $this;
    }


    public function findAll()
    {

        $this->url_params[self::PARAM_INDEX_METHOD] = 'findAll';


        $http_query_string = http_build_query($this->url_params);
        var_dump($this->url_params);
        var_dump($http_query_string);
        var_dump($this->getApiConnectUrl().'&'.$http_query_string);

    }
}