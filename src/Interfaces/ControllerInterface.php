<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/13/17
 * Time: 10:22 AM
 */


namespace HasOffersApi\Interfaces;
use HasOffersApi\HasOffersApi;


/**
 * Class Offer
 * @package HasOffersApi
 */
interface ControllerInterface
{
    /**
     * Offer constructor.
     * @param HasOffersApi $HasOffersApi
     */
    public function __construct(HasOffersApi $HasOffersApi);

    /**
     * @return HasOffersApi
     */
    public function useHasOffersApi();

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getFieldsList();

    /**
     * @return string
     */
    public function getFieldsListResource();

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getRelationsList();

    /**
     * @return string
     */
    public function getRelationsListResource();
}