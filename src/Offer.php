<?php

/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/10/17
 * Time: 5:05 PM
 */


namespace HasOffersApi;
use HasOffersApi\Interfaces\ControllerInterface;

/**
 * Class Offer
 * @package HasOffersApi
 */
class Offer implements ControllerInterface
{

    CONST PARAM_INDEX_TARGET = 'Target';
    CONST PARAM_INDEX_METHOD = 'Method';

    /**
     * @var string
     */
    protected $target = 'Offer';

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
    protected $fields_list_file_name = 'offer_fields_list.json';

    /**
     * @var string
     */
    protected $relations_list_file_name = 'offer_relations_list.json';

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
     * Returns one or more offers, optionally filtered and sorted by specified parameters.
     *
     * Note: if pagination is used, limit must be less than 1250. If limit is set to 1250
     * or greater, the call will return no results, including no error message.
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
     * Returns affiliate offer approvals, optionally filtered and sorted by specified parameters.
     *
     * @return mixed
     * @throws \Exception
     */
    public function findAllAffiliateApprovals()
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
     * Returns one or more offers by their IDs.
     *
     * @param array $ids List of Offer objects IDs.
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
     * Returns IDs of offers with an active status and a featured date set.
     *
     * @param array $ids List of Offer objects IDs. If provided, matching offers outside of this list are not returned.
     * @return mixed
     * @throws \Exception
     */
    public function findAllFeaturedOfferIds(array $ids)
    {
        $tmp['ids'] = $ids;
        $url_params = '';

        if(count($tmp['ids']) > 0) {
            $url_params = '&'.http_build_query($tmp);
        }

        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params).$url_params;

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Returns IDs of all offers, optionally filtered by specified parameters.
     *
     * @return mixed
     * @throws \Exception
     */
    public function findAllIds()
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
     * Returns IDs of all offers associated with a given advertiser.
     *
     * @param int $advertiser_id ID of Advertiser object
     * @see Advertiser
     * @return mixed
     * @throws \Exception
     */
    public function findAllIdsByAdvertiserId(int $advertiser_id)
    {
        if($advertiser_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $advertiser_id "'.$advertiser_id.'" seems not to be a valid value.');
        } else {
            $tmp['advertiser_id'] = $advertiser_id;
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
     * Returns IDs of all offers associated with a given affiliate.
     *
     * @param int $affiliate_id ID of ID of Affiliate object
     * @see Affiliate
     * @return mixed
     * @throws \Exception
     */
    public function findAllIdsByAffiliateId(int $affiliate_id)
    {
        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
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
     * Returns offer information by its ID.
     *
     * @param int $id ID of Offer object
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

    /**
     * Returns the affiliate offer approval notes for a given offer and affiliate. This method refers
     * to the approval_notes property in the AffiliateOffer model.
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @see Affiliate
     * @return mixed
     * @throws \Exception
     */
    public function getAffiliateApplicationNote(int $id, int $affiliate_id)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
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
     * Returns an affiliate's approval status for a given offer.
     * String: approval status; defaults the "approved" if offer does not require approval and isn't set to private
     * Returns null if approval status is not set
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @see Affiliate
     * @return mixed
     * @throws \Exception
     */
    public function getAffiliateApprovalStatus(int $id, int $affiliate_id)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
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
     * Returns affiliate-specific custom tracking information for a given offer.
     * Response: Array collection of AffiliateOffer and Hostname objects indexed by AffiliateOffer.id
     *
     * @param int $id ID of Offer object
     * @param string $status Filter results by Hostname objects with matching status active|deleted
     * @see Affiliate
     * @return mixed
     * @throws \Exception
     */
    public function getAffiliateHostnames(int $id, string $status = '')
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($status !== '') {
            $tmp['status'] = $status;
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
     * Returns a summary of payout- and revenue-related information for a given affiliate and offer. Filter further by supplying a goal.
     *
     * Note: this method does not return payout or revenue group information that may be defined for the affiliate/offer/goal.
     * Response: Associative array: payout and revenue details
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @param int $goal_id
     * @see Goal
     * @return mixed
     * @throws \Exception
     */
    public function getAffiliatePayment(int $id, int $affiliate_id, int $goal_id = 0)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
        }

        if($goal_id > 0) {
            $tmp['goal_id'] = $goal_id;
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
     * Returns payout information for a given offer, affiliate, and (optionally) goal.
     *
     * Note: this method does not return payout or revenue group information that may be defined for the affiliate/offer/goal.
     * Response: Array: list of OfferPayout objects
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @param int $goal_id
     * @see Goal
     * @return mixed
     * @throws \Exception
     */
    public function getAffiliatePayout(int $id, int $affiliate_id, int $goal_id = 0)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
        }

        if($goal_id > 0) {
            $tmp['goal_id'] = $goal_id;
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
     * Returns payout information for a given offer, affiliate, and (optionally) goal.
     *
     * Note: this method does not return payout or revenue group information that may be defined for the affiliate/offer/goal.
     * Response: Array: list of OfferRevenue objects
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @param int $goal_id
     * @see Goal
     * @return mixed
     * @throws \Exception
     */
    public function getAffiliateRevenue(int $id, int $affiliate_id, int $goal_id = 0)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
        }

        if($goal_id > 0) {
            $tmp['goal_id'] = $goal_id;
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
     * Returns all answers an affiliate provided for a given offer's approval questions.
     * Response: Array: list of SignupAnswer objects associated with the affiliate and offer
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @see Affiliate
     * @return mixed
     * @throws \Exception
     */
    public function getApprovalAnswers(int $id, int $affiliate_id)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
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
     * Returns signup approval questions, optionally filtered by offer ID and question status.
     *
     * Note: If offer ID is supplied and the offer has signup questions disabled, no data is returned.
     * Response: Array list of SignupQuestion object
     *
     * @param int $id ID of Offer object to filter by
     * @param string $status SignupQuestion status to filter by active|paused|deleted
     * @return mixed
     * @throws \Exception
     */
    public function getApprovalQuestions(int $id = 0, string $status = '')
    {
        $tmp = [];

        if($id > 0) {
            $tmp['id'] = $id;
        }

        if($status !== '') {
            $tmp['status'] = $status;
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
     * Returns IDs of all affiliates approved for a given offer.
     *
     * If the offer is private or requires approval, this method returns affiliates who are approved for this offer.
     * If the offer is public, this method returns all affiliates except those who have been blocked from this offer.
     *
     * Response: Array list of Affiliate object IDs corresponding to affiliates approved for the offer
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getApprovedAffiliateIds(int $id)
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

    /**
     * Returns IDs of all affiliates blocked from a given offer.
     *
     * Response: Array list of Affiliate object IDs corresponding to affiliates blocked from the offer
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getBlockedAffiliateIds(int $id)
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

    /**
     * Returns all offer categories associated to a given offer.
     *
     * Response: Array list of OfferCategory objects
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getCategories(int $id)
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

    /**
     * Returns conversion caps for a given offer.
     *
     * Response: Array list of OfferConversionCap objects
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getConversionCaps(int $id)
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

    /**
     * Returns Returns customer list data for a given offer.
     *
     * Response: Associative array: CustomerList object properties
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getCustomerList(int $id)
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

    /**
     * Retrieves an offer's geotargeting definition. See our support article on geo-targeting for more on this topic.
     * City Targeting Note: This method works for offers with cities in their geotargeting definition.
     *
     * Response: Arrays of country, region, and city objects corresponding to geotargeting values. Region objects contain
     * info on their enveloping country. City objects contain info on their enveloping region and country.
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getGeoTargeting(int $id)
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

    /**
     * Returns all offer groups associated to a given offer.
     *
     * Response: Array OfferGroup objects
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getGroups(int $id)
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

    /**
     * Returns offer files for a given offer.
     * Response: Array list of OfferFile objects
     *
     * @param int $id ID of Offer object to filter by
     * @param string $status SignupQuestion status to filter by active|pending|deleted
     * @return mixed
     * @throws \Exception
     */
    public function getOfferFiles(int $id, string $status = '')
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($status !== '') {
            $tmp['status'] = $status;
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
     * Returns all offer files for a given offer, and includes creative code for a given affiliate.
     * Response: Array list of OfferFile objects, each with an associated CreativeCode for that affiliate
     *
     * @param int $id ID of Offer object
     * @param int $affiliate_id ID of Affiliate object
     * @return mixed
     * @throws \Exception
     */
    public function getOfferFilesWithCreativeCode (int $id, int $affiliate_id)
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($affiliate_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $affiliate_id "'.$affiliate_id.'" seems not to be a valid value.');
        } else {
            $tmp['affiliate_id'] = $affiliate_id;
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
     * Returns all offers associated to a given offer group.
     * Response: Array list of Offer objects
     *
     * @param int $group_id ID of OfferGroup object
     * @see OfferGroup
     * @return mixed
     * @throws \Exception
     */
    public function getOfferListByGroupId(int $group_id)
    {
        if($group_id < 1) {
            throw new \Exception(__METHOD__.': Parameter $group_id "'.$group_id.'" seems not to be a valid value.');
        } else {
            $tmp['group_id'] = $group_id;
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
     * Returns offer URLs/landing pages for a given offer.
     * Response: Array list of OfferFile objects
     *
     * @param int $id ID of Offer object
     * @param string $status Filter results by OfferUrl objects with matching status. If not provided, defaults to "active". active|deleted
     * @return mixed
     * @throws \Exception
     */
    public function getOfferUrls(int $id, string $status = 'active')
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($status !== '') {
            $tmp['status'] = $status;
        }

        try {
            $this->url_params[self::PARAM_INDEX_METHOD] = __FUNCTION__;
            $http_query_string = http_build_query($this->url_params).'&'.http_build_query($tmp);

            return $this->HasOffersApi->callApi($http_query_string);
        } catch(\Exception $e) {
            throw $e;
        }
    }

    public function getOverview()
    {
        // TODO: Implement getOverview() method.
    }

    /**
     * Returns all affiliate-specific payout information for a given offer.
     * Response: Array list of OfferPayout objects
     * 
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getPayouts(int $id)
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

    /**
     * Returns offer pixels for a given offer.
     * Response: Array list of OfferPixel objects
     *
     * @param int $id ID of Offer object
     * @param string $status Filter results by matching status. active|pending|deleted|rejected
     * @return mixed
     * @throws \Exception
     */
    public function getPixels(int $id, string $status = '')
    {
        if($id < 1) {
            throw new \Exception(__METHOD__.': Parameter $id "'.$id.'" seems not to be a valid value.');
        } else {
            $tmp['id'] = $id;
        }

        if($status !== '') {
            $tmp['status'] = $status;
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
     * Returns all affiliate-specific revenue information for a given offer.
     * Response: Array list of OfferRevenue objects
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getRevenues(int $id)
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

    /**
     * Returns list of all countries and regions associated to a given offer.
     * Response: Array list of Country objects
     *
     * City Targeting Note: This method does not work with city locations,
     * and will fail if used on an offer that has cities in its targeting definition.
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getTargetCountries(int $id)
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

    /**
     * Returns the thumbnail associated to a given offer.
     * Response: Associative array OfferFile object properties of first result found. Returns null if no thumbnail found
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getThumbnail(int $id)
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

    /**
     * Returns the thumbnail associated to a given offer.
     * Response: Associative array OfferFile object properties of first result found. Returns null if no thumbnail found
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getTierPayouts(int $id)
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

    /**
     * Returns affiliate-specific revenue tier information for a given offer.
     * Response: Array collection of AffiliateTier and AffiliateTierRevenue objects indexed by AffiliateTier.id.
     * Returns null if offer does not have tiered revenue enabled.
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getTierRevenues(int $id)
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

    /**
     * Returns list of affiliates eligible for an offer but not yet approved (nor blocked).
     * Response: Array list of corresponding Affiliate object IDs
     *
     * @param int $id ID of Offer object
     * @return mixed
     * @throws \Exception
     */
    public function getUnapprovedAffiliateIds (int $id)
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
}