<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/13/17
 * Time: 12:15 PM
 */

namespace HasOffersApi;


use HasOffersApi\Interfaces\ControllerInterface;


/**
 * Class Advertiser
 * @package HasOffersApi
 */
class Advertiser implements ControllerInterface
{

    CONST PARAM_INDEX_TARGET = 'Target';
    CONST PARAM_INDEX_METHOD = 'Method';

    /**
     * @var string
     */
    protected $target = 'Advertiser';

    /**
     * @var array
     */
    protected $url_params;

    /**
     * @var HasOffersApi
     */
    protected $HasOffersApi;

    /**
     * @var array
     */
    protected $fields_list = [];

    /**
     * @var string
     */
    protected $fields_list_file_name = 'affiliate_fields_list.json';

    /**
     * @var string
     */
    protected $relations_list_file_name = 'affiliate_relations_list.json';
    /**
     * Offer constructor.
     * @param HasOffersApi $HasOffersApi
     */
    public function __construct(HasOffersApi $HasOffersApi)
    {
        $this->HasOffersApi = $HasOffersApi;
        $this->url_params = $this->HasOffersApi->getUrlParams();
        $this->url_params[self::PARAM_INDEX_TARGET] = $this->target;
    }

    /**
     * @return HasOffersApi
     */
    public function useHasOffersApi()
    {
        // TODO: Implement useHasOffersApi() method.
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getFieldsList()
    {
        // TODO: Implement getFieldsList() method.
    }

    /**
     * @return string
     */
    public function getFieldsListResource()
    {
        // TODO: Implement getFieldsListResource() method.
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getRelationsList()
    {
        // TODO: Implement getRelationsList() method.
    }

    /**
     * @return string
     */
    public function getRelationsListResource()
    {
        // TODO: Implement getRelationsListResource() method.
    }
}