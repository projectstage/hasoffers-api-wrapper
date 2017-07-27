<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/26/17
 * Time: 10:47 AM
 */

namespace HasOffersApi\Mappings;

/**
 * AffiliateTierRevenue Model
 * Defines a revenue specific to an Offer or Goal, for an Affiliate Tier.
 *
 * Class AffiliateTierRevenue
 * @package HasOffersApi\Mappings
 */
class AffiliateTierRevenue
{

    /**
     * Integer	The ID of the AffiliateTier that this Revenue is for. Affiliates in the referenced Tier are set to have
     * this amount of revenue.
     * @var integer
     */
    protected  $affiliate_tier_id;

    /**
     * Nullable Integer	The Goal this revenue is for, if it should apply to a Goal instead of the Offer
     * @var integer
     */
    protected  $goal_id;

    /**
     * Integer	ID of unique, auto-generated object for this Affiliate Tier Revenue This parameter is non-writable
     * @var integer
     */
    protected  $id;

    /**
     * Datetime	The last time this Affiliate Tier Revenue was modified
     * @var \DateTime
     */
    protected  $modified;

    /**
     * Integer	The Offer this revenue amount is defined for. If a "goal_id" is provided, the "offer_id" is not required
     * as it will be looked up and stored automatically.
     * @var integer
     */
    protected  $offer_id;

    /**
     * Decimal	The flat rate/amount revenue. This is applicable depending on the "revenue_type" of the Offer (or Goal).
     * @var float
     */
    protected  $revenue;

    /**
     * Decimal	The percent revenue. This is applicable depending on the "revenue_type" of the Offer (or Goal).
     * @var float
     */
    protected  $percent_revenue;

    /**
     * @return mixed
     */
    public function getAffiliateTierId()
    {
        return $this->affiliate_tier_id;
    }

    /**
     * @param int $affiliate_tier_id
     */
    public function setAffiliateTierId($affiliate_tier_id)
    {
        $this->affiliate_tier_id = $affiliate_tier_id;
    }

    /**
     * @return mixed
     */
    public function getGoalId()
    {
        return $this->goal_id;
    }

    /**
     * @param int $goal_id
     */
    public function setGoalId($goal_id)
    {
        $this->goal_id = $goal_id;
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
    public function getOfferId()
    {
        return $this->offer_id;
    }

    /**
     * @param int $offer_id
     */
    public function setOfferId($offer_id)
    {
        $this->offer_id = $offer_id;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param float $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * @return mixed
     */
    public function getPercentRevenue()
    {
        return $this->percent_revenue;
    }

    /**
     * @param float $percent_revenue
     */
    public function setPercentRevenue($percent_revenue)
    {
        $this->percent_revenue = $percent_revenue;
    }

}