<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/11/17
 * Time: 4:45 PM
 */

namespace HasOffersApi\Interfaces;

use HasOffersApi\HasOffersApi;


/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/10/17
 * Time: 5:05 PM
 */
interface OfferInterface
{

    /**
     * OfferInterface constructor.
     * @param HasOffersApi $HasOffersApi
     */
    public function __construct(HasOffersApi $HasOffersApi);

    /**
     * @return array
     */
    public function getFields(): array;

    /**
     * @param array $fields
     * @return $this
     * @throws \Exception
     */
    public function setFields(array $fields);

    /**
     * @return array
     */
    public function getFilters(): array;

    /**
     * @param array $filters
     * @return $this
     * @throws \Exception
     */
    public function setFilters(array $filters);

    /**
     * @return array
     */
    public function getContain(): array;

    /**
     * @param array $contain
     * @return $this
     * @throws \Exception
     */
    public function setContain(array $contain);

    /**
     * @return array
     */
    public function getSort(): array;

    /**
     * @param array $sort
     * @return $this
     * @throws \Exception
     */
    public function setSort(array $sort);

    /**
     * @return int
     */
    public function getLimit(): int;

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit);

    public function findAll();
}