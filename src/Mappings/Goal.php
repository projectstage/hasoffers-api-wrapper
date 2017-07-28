<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/26/17
 * Time: 10:45 AM
 */

namespace HasOffersApi\Mappings;

/**
 * Goal Model
 * A Goal for an Offer. Applicable only if the "enable_offer_goals" Preference is enabled. The related Offer must also
 * have the "has_goals_enabled" field enabled.
 *
 * Class Goal
 *
 * @see https://help.tune.com/hasoffers/offer-goals/
 * @package HasOffersApi\Mappings
 */
class Goal
{

    /**
     * @var integer
     */
    protected $advertiser_id;
    /**
     * @var boolean
     */
    protected $allow_multiple_conversions;
    /**
     * @var boolean
     */
    protected $approve_conversions;
    /**
     * @var float
     */
    protected $default_payout;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var boolean
     */
    protected $display_advertiser;
    /**
     * @var boolean
     */
    protected $enforce_encrypt_tracking_pixels;
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var boolean
     */
    protected $is_end_point;
    /**
     * @var boolean
     */
    protected $is_private;
    /**
     * @var float
     */
    protected $max_payout;
    /**
     * @var float
     */
    protected $max_percent_payout;
    /**
     * @var \DateTime
     */
    protected $modified;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var integer
     */
    protected $offer_id;
    /**
     * @var string
     */
    protected $payout_type;
    /**
     * @var float
     */
    protected $percent_payout;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * @var string
     */
    protected $ref_id;
    /**
     * @var string
     */
    protected $revenue_type;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var boolean
     */
    protected $tiered_payout;
    /**
     * @var boolean
     */
    protected $tiered_revenue;
    /**
     * @var boolean
     */
    protected $use_payout_groups;
    /**
     * @var boolean
     */
    protected $use_revenue_groups;

    /**
     * @return mixed
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param mixed $advertiser_id
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->advertiser_id = $advertiser_id;
    }

    /**
     * @return mixed
     */
    public function getAllowMultipleConversions()
    {
        return $this->allow_multiple_conversions;
    }

    /**
     * @param mixed $allow_multiple_conversions
     */
    public function setAllowMultipleConversions($allow_multiple_conversions)
    {
        $this->allow_multiple_conversions = $allow_multiple_conversions;
    }

    /**
     * @return mixed
     */
    public function getApproveConversions()
    {
        return $this->approve_conversions;
    }

    /**
     * @param mixed $approve_conversions
     */
    public function setApproveConversions($approve_conversions)
    {
        $this->approve_conversions = $approve_conversions;
    }

    /**
     * @return mixed
     */
    public function getDefaultPayout()
    {
        return $this->default_payout;
    }

    /**
     * @param mixed $default_payout
     */
    public function setDefaultPayout($default_payout)
    {
        $this->default_payout = $default_payout;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDisplayAdvertiser()
    {
        return $this->display_advertiser;
    }

    /**
     * @param mixed $display_advertiser
     */
    public function setDisplayAdvertiser($display_advertiser)
    {
        $this->display_advertiser = $display_advertiser;
    }

    /**
     * @return mixed
     */
    public function getEnforceEncryptTrackingPixels()
    {
        return $this->enforce_encrypt_tracking_pixels;
    }

    /**
     * @param mixed $enforce_encrypt_tracking_pixels
     */
    public function setEnforceEncryptTrackingPixels($enforce_encrypt_tracking_pixels)
    {
        $this->enforce_encrypt_tracking_pixels = $enforce_encrypt_tracking_pixels;
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
    public function getisEndPoint()
    {
        return $this->is_end_point;
    }

    /**
     * @param mixed $is_end_point
     */
    public function setIsEndPoint($is_end_point)
    {
        $this->is_end_point = $is_end_point;
    }

    /**
     * @return mixed
     */
    public function getisPrivate()
    {
        return $this->is_private;
    }

    /**
     * @param mixed $is_private
     */
    public function setIsPrivate($is_private)
    {
        $this->is_private = $is_private;
    }

    /**
     * @return mixed
     */
    public function getMaxPayout()
    {
        return $this->max_payout;
    }

    /**
     * @param mixed $max_payout
     */
    public function setMaxPayout($max_payout)
    {
        $this->max_payout = $max_payout;
    }

    /**
     * @return mixed
     */
    public function getMaxPercentPayout()
    {
        return $this->max_percent_payout;
    }

    /**
     * @param mixed $max_percent_payout
     */
    public function setMaxPercentPayout($max_percent_payout)
    {
        $this->max_percent_payout = $max_percent_payout;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param mixed $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOfferId()
    {
        return $this->offer_id;
    }

    /**
     * @param mixed $offer_id
     */
    public function setOfferId($offer_id)
    {
        $this->offer_id = $offer_id;
    }

    /**
     * @return mixed
     */
    public function getPayoutType()
    {
        return $this->payout_type;
    }

    /**
     * @param mixed $payout_type
     */
    public function setPayoutType($payout_type)
    {
        $this->payout_type = $payout_type;
    }

    /**
     * @return mixed
     */
    public function getPercentPayout()
    {
        return $this->percent_payout;
    }

    /**
     * @param mixed $percent_payout
     */
    public function setPercentPayout($percent_payout)
    {
        $this->percent_payout = $percent_payout;
    }

    /**
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return mixed
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * @param mixed $ref_id
     */
    public function setRefId($ref_id)
    {
        $this->ref_id = $ref_id;
    }

    /**
     * @return mixed
     */
    public function getRevenueType()
    {
        return $this->revenue_type;
    }

    /**
     * @param mixed $revenue_type
     */
    public function setRevenueType($revenue_type)
    {
        $this->revenue_type = $revenue_type;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTieredPayout()
    {
        return $this->tiered_payout;
    }

    /**
     * @param mixed $tiered_payout
     */
    public function setTieredPayout($tiered_payout)
    {
        $this->tiered_payout = $tiered_payout;
    }

    /**
     * @return mixed
     */
    public function getTieredRevenue()
    {
        return $this->tiered_revenue;
    }

    /**
     * @param mixed $tiered_revenue
     */
    public function setTieredRevenue($tiered_revenue)
    {
        $this->tiered_revenue = $tiered_revenue;
    }

    /**
     * @return mixed
     */
    public function getUsePayoutGroups()
    {
        return $this->use_payout_groups;
    }

    /**
     * @param mixed $use_payout_groups
     */
    public function setUsePayoutGroups($use_payout_groups)
    {
        $this->use_payout_groups = $use_payout_groups;
    }

    /**
     * @return mixed
     */
    public function getUseRevenueGroups()
    {
        return $this->use_revenue_groups;
    }

    /**
     * @param mixed $use_revenue_groups
     */
    public function setUseRevenueGroups($use_revenue_groups)
    {
        $this->use_revenue_groups = $use_revenue_groups;
    }

}