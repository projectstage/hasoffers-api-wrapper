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
 * Class OfferFile
 * @package HasOffersApi
 */
class OfferFile implements ControllerInterface
{

    CONST PARAM_INDEX_TARGET = 'Target';
    CONST PARAM_INDEX_METHOD = 'Method';

    /**
     * @var string
     */
    protected $target = 'OfferFile';

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
    protected $fields_list_file_name = 'offer_file_fields_list.json';

    /**
     * @var string
     */
    protected $relations_list_file_name = 'offer_file_relations_list.json';
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
        return $this->HasOffersApi;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getFieldsList()
    {
        try {
            return json_decode(file_get_contents($this->getFieldsListResource()));
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return string
     */
    public function getFieldsListResource()
    {
        return $this->HasOffersApi->getResourcesPath().$this->fields_list_file_name;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getRelationsList()
    {
        try {
            return json_decode(file_get_contents($this->getRelationsListResource()));
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return string
     */
    public function getRelationsListResource()
    {
        return $this->HasOffersApi->getResourcesPath().$this->relations_list_file_name;
    }

    /**
     * Find Offer Files.
     *
     * @return mixed
     * @throws \Exception
     */
    public function findAll()
    {
        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params);

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Find Offer Files which are available to the requesting user. Relies upon Request Interface to determine
     * which Offer Files the requester is allowed to access.
     * Response: List of Offer File model objects.
     *
     * @return mixed
     * @throws \Exception
     */
    public function findAllAvailable()
    {
        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params);

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Find one or more Offer Files.
     * REsponse: List of Offer File model objects.
     *
     * @param array $ids
     * @return mixed
     * @throws \Exception
     */
    public function findAllByIds(array $ids)
    {
        if(count($ids) < 1) {
            throw new \Exception(__METHOD__.': Parameter IDs is empty. You need at least one ID.');
        } else {
            $tmp['ids'] = $ids;
        }

        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params).'&'.http_build_query($tmp);

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Find an Offer File by its filename.
     * Response will be in the following format: array.
     *
     * @param string $filename
     * @return mixed
     * @throws \Exception
     */
    public function findAllByName(string $filename)
    {
        if(empty($filename) == true) {
            throw new \Exception(__METHOD__.': Parameter $filename is empty.');
        } else {
            $tmp['filename'] = $filename;
        }

        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params).'&'.http_build_query($tmp);

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Retrieve an Offer File.
     *
     * Offer File model object, or NULL if no Offer
     * File found with the provided ID.
     *
     * Response will be in one of the following formats: array, null.
     *
     * @param int $id ID of OfferFile object
     * @return mixed
     * @throws \Exception
     */
    public function findById(int $id)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params).'&'.http_build_query($tmp);

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    public function getCreativeCode()
    {
        // TODO: Implement getCreativeCode() method.
    }
}