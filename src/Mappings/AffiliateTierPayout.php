<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/26/17
 * Time: 10:47 AM
 */

namespace HasOffersApi\Mappings;

/**
 * AffiliateTierPayout Model
 * Defines a payout specific to an Offer or Goal, for an Affiliate Tier.
 *
 * Class AffiliateTierPayout
 * @package HasOffersApi\Mappings
 */
class AffiliateTierPayout
{

    /**
     * Integer	The ID of the AffiliateTier that this Payout is for. Affiliates in the referenced Tier will receive this
     * payout.
     * @var integer
     */
    protected  $affiliate_tier_id;

    /**
     * Nullable Integer	The Goal this payout is for, if it should apply to a Goal instead of the Offer
     * @var integer
     */
    protected  $goal_id;

    /**
     * Integer	ID of unique, auto-generated object for this Affiliate Tier Payout. This parameter is non-writable
     * @var integer
     */
    protected  $id;

    /**
     * Datetime	The last time this Affiliate Tier Payout was modified
     * @var \DateTime
     */
    protected  $modified;

    /**
     * Integer	The Offer this payout amount is defined for. If a "goal_id" is provided, the "offer_id" is not required as
     * it will be looked up and stored automatically.
     * @var integer
     */
    protected  $offer_id;

    /**
     * Decimal	The flat rate/amount paid out. This is applicable depending on the "payout_type" of the Offer (or Goal).
     * @var float
     */
    protected  $payout;

    /**
     * Decimal	The percent paid out. This is applicable depending on the "payout_type" of the Offer (or Goal).
     * @var float
     */
    protected  $percent_payout;

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
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * @param float $payout
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;
    }

    /**
     * @return mixed
     */
    public function getPercentPayout()
    {
        return $this->percent_payout;
    }

    /**
     * @param float $percent_payout
     */
    public function setPercentPayout($percent_payout)
    {
        $this->percent_payout = $percent_payout;
    }


}