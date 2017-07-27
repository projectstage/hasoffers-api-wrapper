<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/26/17
 * Time: 10:48 AM
 */

namespace HasOffersApi\Mappings;

/**
 * Advertiser Model
 * An Advertiser account.
 *
 * Class Advertiser
 * @package HasOffersApi\Mappings
 */
class Advertiser
{

    /**
     * Nullable Integer	ID of Employee object of Account Manager for this Advertiser
     * @var integer
     */
    protected  $account_manager_id;

    /**
     * String 	The first line of the Advertiser's physical address
     * @var string
     */
    protected  $address1;

    /**
     * Nullable String 	The second line of the Advertiser's physical address
     * @var string
     */
    protected  $address2;

    /**
     * Nullable String 	The city of the Advertiser's physical address
     * @var string
     */
    protected  $city;

    /**
     * Nullable String 	The company name of the Advertiser
     * @var string
     */
    protected  $company;

    /**
     * Nullable String 	The Advertiser Security Token that must be passed by the advertiser in order to register a conversion.
     * Applicable only if the "enable_advertiser_security_token" Preference is enabled. For more information.
     *
     * @see: http://support.hasoffers.com/hc/en-us/articles/202759308-Advertiser-Security-Token
     * @var string
     */
    protected  $conversion_security_token;

    /**
     * Nullable String 	The country of the Advertiser's physical address. ISO 3166-1 alpha-2 country code.
     * @var string
     */
    protected  $country;

    /**
     * Datetime	The date this Advertiser was created
     * @var \DateTime
     */
    protected  $date_added;

    /**
     * Nullable String 	The fax number of the Advertiser
     * @var string
     */
    protected  $fax;

    /**
     * Integer	ID of unique, auto-generated object for this Advertiser. This parameter is non-writable
     * @var
     */
    protected  $id;

    /**
     * Datetime	The last time this Advertiser was updated
     * @var \DateTime
     */
    protected  $modified;

    /**
     * Nullable String 	DEPRECATED. Ignore the contents of this field.
     * @var string
     */
    protected  $other;

    /**
     * Nullable String 	The phone number of the Advertiser
     * @var string
     */
    protected  $phone;

    /**
     * Nullable String 	An external reference ID for this account
     * @var string
     */
    protected  $ref_id;

    /**
     * Nullable String 	The state/province of the Advertiser's physical address
     * @var string
     */
    protected  $region;

    /**
     * Nullable String 	The IP address that the Advertiser used to sign up with
     * @var string
     */
    protected  $signup_ip;

    /**
     * String 	The status of the Advertiser accountShow Supported Values
     * @var string
     */
    protected  $status;

    /**
     * Nullable String 	Holds an Advertiser Security Token without enforcing it. This is where
     * the security token should be placed until it can be communicated to the Advertiser and
     * they update their application to pass it. After they update their code the token should
     * be copied to the "conversion_security_token" field to enforce it. Applicable only if the
     * "enable_advertiser_security_token" Preference is enabled. For more information.
     *
     * @see: http://support.hasoffers.com/hc/en-us/articles/202759308-Advertiser-Security-Token
     * @var string
     */
    protected  $tmp_token;

    /**
     * Boolean 	DEPRECATED. Ignore the contents of this field.
     *
     * @deprecated
     * @var boolean
     */
    protected  $wants_alerts;

    /**
     * Nullable String 	DEPRECATED. Ignore the contents of this field.
     *
     * @deprecated
     * @var string
     */
    protected  $website;

    /**
     * String 	The zipcode / postal code of the Advertiser's physical address
     * @var string
     */
    protected  $zipcode;

    /**
     * @return mixed
     */
    public function getAccountManagerId()
    {
        return $this->account_manager_id;
    }

    /**
     * @param int $account_manager_id
     */
    public function setAccountManagerId($account_manager_id)
    {
        $this->account_manager_id = $account_manager_id;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getConversionSecurityToken()
    {
        return $this->conversion_security_token;
    }

    /**
     * @param string $conversion_security_token
     */
    public function setConversionSecurityToken($conversion_security_token)
    {
        $this->conversion_security_token = $conversion_security_token;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->date_added;
    }

    /**
     * @param \DateTime $date_added
     */
    public function setDateAdded($date_added)
    {
        $this->date_added = $date_added;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return mixed
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param string $other
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * @param string $ref_id
     */
    public function setRefId($ref_id)
    {
        $this->ref_id = $ref_id;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getSignupIp()
    {
        return $this->signup_ip;
    }

    /**
     * @param string $signup_ip
     */
    public function setSignupIp($signup_ip)
    {
        $this->signup_ip = $signup_ip;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTmpToken()
    {
        return $this->tmp_token;
    }

    /**
     * @param string $tmp_token
     */
    public function setTmpToken($tmp_token)
    {
        $this->tmp_token = $tmp_token;
    }

    /**
     * @return mixed
     */
    public function isWantsAlerts()
    {
        return $this->wants_alerts;
    }

    /**
     * @param bool $wants_alerts
     */
    public function setWantsAlerts($wants_alerts)
    {
        $this->wants_alerts = $wants_alerts;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }


}