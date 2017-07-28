<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/26/17
 * Time: 10:46 AM
 */

namespace HasOffersApi\Mappings;

/**
 * Country Model
 * Static data corresponding to a country, for geotargeting purposes.
 *
 * Class Country
 * @package HasOffersApi\Mappings
 */
class Country
{

    /**
     * String 	The 2-character country code This parameter is non-writable
     * @var string
     */
    protected  $code;

    /**
     * String 	The 3-character country code This parameter is non-writable
     * @var string
     */
    protected  $code3c;

    /**
     * Integer	A unique, auto-generated ID for the country This parameter is non-writable
     * @var integer
     */
    protected  $id;

    /**
     * Nullable Boolean 	DEPRECATED. This field should be ignored. This parameter is non-writable
     *
     * @deprecated
     * @var boolean
     */
    protected  $is_active;

    /**
     * String 	The country name.This parameter is non-writable
     * @var string
     */
    protected  $name;

    /**
     * Nullable String 	DEPRECATED. This field should be ignored. This parameter is non-writable
     * @var string
     */
    protected  $paypal_code;

    /**
     * Nullable Array 	A list of regions in the country. This field may not always be present for all API calls.
     * This parameter is non-writable
     * @var array
     */
    protected  $regions;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode3c()
    {
        return $this->code3c;
    }

    /**
     * @param string $code3c
     */
    public function setCode3c($code3c)
    {
        $this->code3c = $code3c;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function isActive()
    {
        return $this->is_active;
    }

    /**
     * @param bool $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPaypalCode()
    {
        return $this->paypal_code;
    }

    /**
     * @param string $paypal_code
     */
    public function setPaypalCode($paypal_code)
    {
        $this->paypal_code = $paypal_code;
    }

    /**
     * @return mixed
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param array $regions
     */
    public function setRegions($regions)
    {
        $this->regions = $regions;
    }


}