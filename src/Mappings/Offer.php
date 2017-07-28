<?php
/**
 * Created by PhpStorm.
 * User
 * Date: 7/20/17
 * Time: 12:04 PM
 */

namespace HasOffersApi\Mappings;

/**
 * Class Offer
 * @package HasOffersApi\Mappings
 */
class Offer
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var
     */
    protected $display_advertiser;

    /**
     * @var integer
     */
    protected $advertiser_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var boolean
     */
    protected $require_approval;

    /**
     * @var boolean
     */
    protected $require_terms_and_conditions;

    /**
     * @var string
     */
    protected $terms_and_conditions;

    /**
     * @var string
     */
    protected $preview_url;

    /**
     * @var string
     */
    protected $offer_url;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $default_payout;

    /**
     * @var float
     */
    protected $max_payout;

    /**
     * @var string
     */
    protected $protocol;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $expiration_date;

    /**
     * @var boolean
     */
    protected $is_private;

    /**
     * @var string
     */
    protected $payout_type;

    /**
     * @var boolean
     */
    protected $tiered_payout;

    /**
     * @var boolean
     */
    protected $tiered_revenue;

    /**
     * @var float
     */
    protected $percent_payout;

    /**
     * @var string
     */
    protected $revenue_type;

    /**
     * @var float
     */
    protected $max_percent_payout;

    /**
     * @var integer
     */
    protected $redirect_offer_id;

    /**
     * @var string
     */
    protected $converted_offer_type;

    /**
     * @var integer
     */
    protected $converted_offer_id;

    /**
     * @var integer
     */
    protected $conversion_ratio_threshold;

    /**
     * @var \DateTime
     */
    protected $featured;

    /**
     * @var boolean
     */
    protected $is_subscription;

    /**
     * @var integer
     */
    protected $subscription_duration;

    /**
     * @var string
     */
    protected $subscription_frequency;

    /**
     * @var integer
     */
    protected $customer_list_id;

    /**
     * @var int
     */
    protected $ref_id;

    /**
     * @var integer
     */
    protected $rating;

    /**
     * @var boolean
     */
    protected $disable_click_macro;

    /**
     * @var string
     */
    protected $click_macro_url;

    /**
     * @var string
     */
    protected $converted_offer_url;

    /**
     * @var int
     */
    protected $conversion_cap;

    /**
     * @var integer
     */
    protected $monthly_conversion_cap;

    /**
     * @var float
     */
    protected $payout_cap;

    /**
     * @var float
     */
    protected $monthly_payout_cap;

    /**
     * @var float
     */
    protected $revenue_cap;

    /**
     * @var float
     */
    protected $monthly_revenue_cap;

    /**
     * @var boolean
     */
    protected $approve_conversions;

    /**
     * @var boolean
     */
    protected $allow_multiple_conversions;

    /**
     * @var boolean
     */
    protected $allow_website_links;

    /**
     * @var boolean
     */
    protected $allow_direct_links;

    /**
     * @var boolean
     */
    protected $show_custom_variables;

    /**
     * @var integer
     */
    protected $session_hours;

    /**
     * @var integer
     */
    protected $session_impression_hours;

    /**
     * @var boolean
     */
    protected $set_session_on_impression;

    /**
     * @var boolean
     */
    protected $is_seo_friendly_301;

    /**
     * @var boolean
     */
    protected $show_mail_list;

    /**
     * @var integer
     */
    protected $dne_list_id;

    /**
     * @var boolean
     */
    protected $email_instructions;

    /**
     * @var string
     */
    protected $email_instructions_from;

    /**
     * @var string
     */
    protected $email_instructions_subject;

    /**
     * @var boolean
     */
    protected $enforce_geo_targeting;

    /**
     * @var boolean
     */
    protected $enforce_secure_tracking_link;

    /**
     * @var integer
     */
    protected $hostname_id;

    /**
     * @var boolean
     */
    protected $has_goals_enabled;

    /**
     * @var string
     */
    protected $default_goal_name;

    /**
     * @var
     */
    protected $enforce_encrypt_tracking_pixels;

    /**
     * @var boolean
     */
    protected $modified;

    /**
     * @var boolean
     */
    protected $enable_offer_whitelist;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var boolean
     */
    protected $use_target_rules;

    /**
     * @var boolean
     */
    protected $use_payout_groups;

    /**
     * @var boolean
     */
    protected $use_revenue_groups;

    /**
     * @var boolean
     */
    protected $website_links_copy_static_params;

    /**
     * @var \DateTime
     */
    protected $create_date_utc;

    /**
     * @var mixed
     */
    protected $lifetime_revenue_cap;

    /**
     * @var mixed
     */
    protected $lifetime_conversion_cap;

    /**
     * @var mixed
     */
    protected $lifetime_payout_cap;

    /**
     * @var boolean
     */
    protected $is_expired;

    /**
     * @var string
     */
    protected $dne_download_url;

    /**
     * @var string
     */
    protected $dne_unsubscribe_url;

    /**
     * @var boolean
     */
    protected $dne_third_party_list;

    /**
     * Advertiser associated with the offer (Advertiser)
     * @var mixed
     */
    protected $Advertiser;

    /**
     * Affiliate tier payouts defined for the offer (AffiliateTierPayout)
     * @var mixed
     */
    protected $AffiliateTierPayout;

    /**
     * Affiliate tier revenues defined for the offer (AffiliateTierRevenue)
     * @var mixed
     */
    protected $AffiliateTierRevenue;

    /**
     * Countries geo-targeted by the offer (Country)
     * @var mixed
     */
    protected $Country;

    /**
     * Goals belonging to the offer (Goal)
     * @var mixed
     */
    protected $Goal;

    /**
     * Hostname associated with the offer (Hostname)
     * @var mixed
     */
    protected $Hostname;

    /**
     * Offer categories associated with the offer (OfferCategory)
     * @var mixed
     */
    protected $OfferCategory;

    /**
     * Offer groups associated with the offer (OfferGroup)
     * @var mixed
     */
    protected $OfferGroup;

    /**
     * Landing pages associated with the offer (OfferUrl)
     * @var mixed
     */
    protected $OfferUrl;

    /**
     * Payout groups defined for the offer (PayoutGroupOffer)
     * @var mixed
     */
    protected $PayoutGroup;

    /**
     * Revenue groups defined for the offer (RevenueGroupOffer)
     * @var mixed
     */
    protected $RevenueGroup;

    /**
     * Stats associated with the offer (StatReport)
     * @var mixed
     */
    protected $Stat;

    /**
     * Subscriptions for the offer (Subscription)
     * @var mixed
     */
    protected $Subscription;

    /**
     * Thumbnail image (OfferFile)
     * @var mixed
     */
    protected $Thumbnail;

    /**
     * @return int
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
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->advertiser_id = $advertiser_id;
    }

    /**
     * @return string
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isRequireApproval()
    {
        return $this->require_approval;
    }

    /**
     * @param bool $require_approval
     */
    public function setRequireApproval($require_approval)
    {
        $this->require_approval = $require_approval;
    }

    /**
     * @return bool
     */
    public function isRequireTermsAndConditions()
    {
        return $this->require_terms_and_conditions;
    }

    /**
     * @param bool $require_terms_and_conditions
     */
    public function setRequireTermsAndConditions($require_terms_and_conditions)
    {
        $this->require_terms_and_conditions = $require_terms_and_conditions;
    }

    /**
     * @return string
     */
    public function getTermsAndConditions()
    {
        return $this->terms_and_conditions;
    }

    /**
     * @param string $terms_and_conditions
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->terms_and_conditions = $terms_and_conditions;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

    /**
     * @param string $preview_url
     */
    public function setPreviewUrl($preview_url)
    {
        $this->preview_url = $preview_url;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getDefaultPayout()
    {
        return $this->default_payout;
    }

    /**
     * @param float $default_payout
     */
    public function setDefaultPayout($default_payout)
    {
        $this->default_payout = $default_payout;
    }

    /**
     * @return float
     */
    public function getMaxPayout()
    {
        return $this->max_payout;
    }

    /**
     * @param float $max_payout
     */
    public function setMaxPayout($max_payout)
    {
        $this->max_payout = $max_payout;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return string
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
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * @param \DateTime $expiration_date
     */
    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        return $this->is_private;
    }

    /**
     * @param bool $is_private
     */
    public function setIsPrivate($is_private)
    {
        $this->is_private = $is_private;
    }

    /**
     * @return string
     */
    public function getPayoutType()
    {
        return $this->payout_type;
    }

    /**
     * @param string $payout_type
     */
    public function setPayoutType($payout_type)
    {
        $this->payout_type = $payout_type;
    }

    /**
     * @return bool
     */
    public function isTieredPayout()
    {
        return $this->tiered_payout;
    }

    /**
     * @param bool $tiered_payout
     */
    public function setTieredPayout($tiered_payout)
    {
        $this->tiered_payout = $tiered_payout;
    }

    /**
     * @return bool
     */
    public function isTieredRevenue()
    {
        return $this->tiered_revenue;
    }

    /**
     * @param bool $tiered_revenue
     */
    public function setTieredRevenue($tiered_revenue)
    {
        $this->tiered_revenue = $tiered_revenue;
    }

    /**
     * @return float
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

    /**
     * @return string
     */
    public function getRevenueType()
    {
        return $this->revenue_type;
    }

    /**
     * @param string $revenue_type
     */
    public function setRevenueType($revenue_type)
    {
        $this->revenue_type = $revenue_type;
    }

    /**
     * @return float
     */
    public function getMaxPercentPayout()
    {
        return $this->max_percent_payout;
    }

    /**
     * @param float $max_percent_payout
     */
    public function setMaxPercentPayout($max_percent_payout)
    {
        $this->max_percent_payout = $max_percent_payout;
    }

    /**
     * @return int
     */
    public function getRedirectOfferId()
    {
        return $this->redirect_offer_id;
    }

    /**
     * @param int $redirect_offer_id
     */
    public function setRedirectOfferId($redirect_offer_id)
    {
        $this->redirect_offer_id = $redirect_offer_id;
    }

    /**
     * @return string
     */
    public function getConvertedOfferType()
    {
        return $this->converted_offer_type;
    }

    /**
     * @param string $converted_offer_type
     */
    public function setConvertedOfferType($converted_offer_type)
    {
        $this->converted_offer_type = $converted_offer_type;
    }

    /**
     * @return int
     */
    public function getConvertedOfferId()
    {
        return $this->converted_offer_id;
    }

    /**
     * @param int $converted_offer_id
     */
    public function setConvertedOfferId($converted_offer_id)
    {
        $this->converted_offer_id = $converted_offer_id;
    }

    /**
     * @return string
     */
    public function getConvertedOfferUrl()
    {
        return $this->converted_offer_url;
    }

    /**
     * @param string $converted_offer_url
     */
    public function setConvertedOfferUrl($converted_offer_url)
    {
        $this->converted_offer_url = $converted_offer_url;
    }

    /**
     * @return int
     */
    public function getConversionRatioThreshold()
    {
        return $this->conversion_ratio_threshold;
    }

    /**
     * @param int $conversion_ratio_threshold
     */
    public function setConversionRatioThreshold($conversion_ratio_threshold)
    {
        $this->conversion_ratio_threshold = $conversion_ratio_threshold;
    }

    /**
     * @return \DateTime
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * @param \DateTime $featured
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    }

    /**
     * @return bool
     */
    public function isSubscription()
    {
        return $this->is_subscription;
    }

    /**
     * @param bool $is_subscription
     */
    public function setIsSubscription($is_subscription)
    {
        $this->is_subscription = $is_subscription;
    }

    /**
     * @return int
     */
    public function getSubscriptionDuration()
    {
        return $this->subscription_duration;
    }

    /**
     * @param int $subscription_duration
     */
    public function setSubscriptionDuration($subscription_duration)
    {
        $this->subscription_duration = $subscription_duration;
    }

    /**
     * @return string
     */
    public function getSubscriptionFrequency()
    {
        return $this->subscription_frequency;
    }

    /**
     * @param string $subscription_frequency
     */
    public function setSubscriptionFrequency($subscription_frequency)
    {
        $this->subscription_frequency = $subscription_frequency;
    }

    /**
     * @return int
     */
    public function getCustomerListId()
    {
        return $this->customer_list_id;
    }

    /**
     * @param int $customer_list_id
     */
    public function setCustomerListId($customer_list_id)
    {
        $this->customer_list_id = $customer_list_id;
    }

    /**
     * @return int
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * @param int $ref_id
     */
    public function setRefId($ref_id)
    {
        $this->ref_id = $ref_id;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return bool
     */
    public function isDisableClickMacro()
    {
        return $this->disable_click_macro;
    }

    /**
     * @param bool $disable_click_macro
     */
    public function setDisableClickMacro($disable_click_macro)
    {
        $this->disable_click_macro = $disable_click_macro;
    }

    /**
     * @return string
     */
    public function getClickMacroUrl()
    {
        return $this->click_macro_url;
    }

    /**
     * @param string $click_macro_url
     */
    public function setClickMacroUrl($click_macro_url)
    {
        $this->click_macro_url = $click_macro_url;
    }

    /**
     * @return int
     */
    public function getConversionCap()
    {
        return $this->conversion_cap;
    }

    /**
     * @param int $conversion_cap
     */
    public function setConversionCap($conversion_cap)
    {
        $this->conversion_cap = $conversion_cap;
    }

    /**
     * @return int
     */
    public function getMonthlyConversionCap()
    {
        return $this->monthly_conversion_cap;
    }

    /**
     * @param int $monthly_conversion_cap
     */
    public function setMonthlyConversionCap($monthly_conversion_cap)
    {
        $this->monthly_conversion_cap = $monthly_conversion_cap;
    }

    /**
     * @return float
     */
    public function getPayoutCap()
    {
        return $this->payout_cap;
    }

    /**
     * @param float $payout_cap
     */
    public function setPayoutCap($payout_cap)
    {
        $this->payout_cap = $payout_cap;
    }

    /**
     * @return float
     */
    public function getMonthlyPayoutCap()
    {
        return $this->monthly_payout_cap;
    }

    /**
     * @param float $monthly_payout_cap
     */
    public function setMonthlyPayoutCap($monthly_payout_cap)
    {
        $this->monthly_payout_cap = $monthly_payout_cap;
    }

    /**
     * @return float
     */
    public function getRevenueCap()
    {
        return $this->revenue_cap;
    }

    /**
     * @param float $revenue_cap
     */
    public function setRevenueCap($revenue_cap)
    {
        $this->revenue_cap = $revenue_cap;
    }

    /**
     * @return float
     */
    public function getMonthlyRevenueCap()
    {
        return $this->monthly_revenue_cap;
    }

    /**
     * @param float $monthly_revenue_cap
     */
    public function setMonthlyRevenueCap($monthly_revenue_cap)
    {
        $this->monthly_revenue_cap = $monthly_revenue_cap;
    }

    /**
     * @return bool
     */
    public function isApproveConversions()
    {
        return $this->approve_conversions;
    }

    /**
     * @param bool $approve_conversions
     */
    public function setApproveConversions($approve_conversions)
    {
        $this->approve_conversions = $approve_conversions;
    }

    /**
     * @return bool
     */
    public function isAllowMultipleConversions()
    {
        return $this->allow_multiple_conversions;
    }

    /**
     * @param bool $allow_multiple_conversions
     */
    public function setAllowMultipleConversions($allow_multiple_conversions)
    {
        $this->allow_multiple_conversions = $allow_multiple_conversions;
    }

    /**
     * @return bool
     */
    public function isAllowWebsiteLinks()
    {
        return $this->allow_website_links;
    }

    /**
     * @param bool $allow_website_links
     */
    public function setAllowWebsiteLinks($allow_website_links)
    {
        $this->allow_website_links = $allow_website_links;
    }

    /**
     * @return bool
     */
    public function isAllowDirectLinks()
    {
        return $this->allow_direct_links;
    }

    /**
     * @param bool $allow_direct_links
     */
    public function setAllowDirectLinks($allow_direct_links)
    {
        $this->allow_direct_links = $allow_direct_links;
    }

    /**
     * @return bool
     */
    public function isShowCustomVariables()
    {
        return $this->show_custom_variables;
    }

    /**
     * @param bool $show_custom_variables
     */
    public function setShowCustomVariables($show_custom_variables)
    {
        $this->show_custom_variables = $show_custom_variables;
    }

    /**
     * @return int
     */
    public function getSessionHours()
    {
        return $this->session_hours;
    }

    /**
     * @param int $session_hours
     */
    public function setSessionHours($session_hours)
    {
        $this->session_hours = $session_hours;
    }

    /**
     * @return int
     */
    public function getSessionImpressionHours()
    {
        return $this->session_impression_hours;
    }

    /**
     * @param int $session_impression_hours
     */
    public function setSessionImpressionHours($session_impression_hours)
    {
        $this->session_impression_hours = $session_impression_hours;
    }

    /**
     * @return bool
     */
    public function isSetSessionOnImpression()
    {
        return $this->set_session_on_impression;
    }

    /**
     * @param bool $set_session_on_impression
     */
    public function setSetSessionOnImpression($set_session_on_impression)
    {
        $this->set_session_on_impression = $set_session_on_impression;
    }

    /**
     * @return bool
     */
    public function isSeoFriendly301()
    {
        return $this->is_seo_friendly_301;
    }

    /**
     * @param bool $is_seo_friendly_301
     */
    public function setIsSeoFriendly301($is_seo_friendly_301)
    {
        $this->is_seo_friendly_301 = $is_seo_friendly_301;
    }

    /**
     * @return bool
     */
    public function isShowMailList()
    {
        return $this->show_mail_list;
    }

    /**
     * @param bool $show_mail_list
     */
    public function setShowMailList($show_mail_list)
    {
        $this->show_mail_list = $show_mail_list;
    }

    /**
     * @return int
     */
    public function getDneListId()
    {
        return $this->dne_list_id;
    }

    /**
     * @param int $dne_list_id
     */
    public function setDneListId($dne_list_id)
    {
        $this->dne_list_id = $dne_list_id;
    }

    /**
     * @return bool
     */
    public function isEmailInstructions()
    {
        return $this->email_instructions;
    }

    /**
     * @param bool $email_instructions
     */
    public function setEmailInstructions($email_instructions)
    {
        $this->email_instructions = $email_instructions;
    }

    /**
     * @return string
     */
    public function getEmailInstructionsFrom()
    {
        return $this->email_instructions_from;
    }

    /**
     * @param string $email_instructions_from
     */
    public function setEmailInstructionsFrom($email_instructions_from)
    {
        $this->email_instructions_from = $email_instructions_from;
    }

    /**
     * @return string
     */
    public function getEmailInstructionsSubject()
    {
        return $this->email_instructions_subject;
    }

    /**
     * @param string $email_instructions_subject
     */
    public function setEmailInstructionsSubject($email_instructions_subject)
    {
        $this->email_instructions_subject = $email_instructions_subject;
    }

    /**
     * @return bool
     */
    public function isEnforceGeoTargeting()
    {
        return $this->enforce_geo_targeting;
    }

    /**
     * @param bool $enforce_geo_targeting
     */
    public function setEnforceGeoTargeting($enforce_geo_targeting)
    {
        $this->enforce_geo_targeting = $enforce_geo_targeting;
    }

    /**
     * @return bool
     */
    public function isEnforceSecureTrackingLink()
    {
        return $this->enforce_secure_tracking_link;
    }

    /**
     * @param bool $enforce_secure_tracking_link
     */
    public function setEnforceSecureTrackingLink($enforce_secure_tracking_link)
    {
        $this->enforce_secure_tracking_link = $enforce_secure_tracking_link;
    }

    /**
     * @return int
     */
    public function getHostnameId()
    {
        return $this->hostname_id;
    }

    /**
     * @param int $hostname_id
     */
    public function setHostnameId($hostname_id)
    {
        $this->hostname_id = $hostname_id;
    }

    /**
     * @return bool
     */
    public function isHasGoalsEnabled()
    {
        return $this->has_goals_enabled;
    }

    /**
     * @param bool $has_goals_enabled
     */
    public function setHasGoalsEnabled($has_goals_enabled)
    {
        $this->has_goals_enabled = $has_goals_enabled;
    }

    /**
     * @return string
     */
    public function getDefaultGoalName()
    {
        return $this->default_goal_name;
    }

    /**
     * @param string $default_goal_name
     */
    public function setDefaultGoalName($default_goal_name)
    {
        $this->default_goal_name = $default_goal_name;
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
     * @return bool
     */
    public function isModified()
    {
        return $this->modified;
    }

    /**
     * @param bool $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return bool
     */
    public function isEnableOfferWhitelist()
    {
        return $this->enable_offer_whitelist;
    }

    /**
     * @param bool $enable_offer_whitelist
     */
    public function setEnableOfferWhitelist($enable_offer_whitelist)
    {
        $this->enable_offer_whitelist = $enable_offer_whitelist;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return bool
     */
    public function isUseTargetRules()
    {
        return $this->use_target_rules;
    }

    /**
     * @param bool $use_target_rules
     */
    public function setUseTargetRules($use_target_rules)
    {
        $this->use_target_rules = $use_target_rules;
    }

    /**
     * @return bool
     */
    public function isUsePayoutGroups()
    {
        return $this->use_payout_groups;
    }

    /**
     * @param bool $use_payout_groups
     */
    public function setUsePayoutGroups($use_payout_groups)
    {
        $this->use_payout_groups = $use_payout_groups;
    }

    /**
     * @return bool
     */
    public function isUseRevenueGroups()
    {
        return $this->use_revenue_groups;
    }

    /**
     * @param bool $use_revenue_groups
     */
    public function setUseRevenueGroups($use_revenue_groups)
    {
        $this->use_revenue_groups = $use_revenue_groups;
    }

    /**
     * @return bool
     */
    public function isWebsiteLinksCopyStaticParams()
    {
        return $this->website_links_copy_static_params;
    }

    /**
     * @param bool $website_links_copy_static_params
     */
    public function setWebsiteLinksCopyStaticParams($website_links_copy_static_params)
    {
        $this->website_links_copy_static_params = $website_links_copy_static_params;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDateUtc()
    {
        return $this->create_date_utc;
    }

    /**
     * @param \DateTime $create_date_utc
     */
    public function setCreateDateUtc($create_date_utc)
    {
        $this->create_date_utc = $create_date_utc;
    }

    /**
     * @return mixed
     */
    public function getLifetimeRevenueCap()
    {
        return $this->lifetime_revenue_cap;
    }

    /**
     * @param mixed $lifetime_revenue_cap
     */
    public function setLifetimeRevenueCap($lifetime_revenue_cap)
    {
        $this->lifetime_revenue_cap = $lifetime_revenue_cap;
    }

    /**
     * @return mixed
     */
    public function getLifetimeConversionCap()
    {
        return $this->lifetime_conversion_cap;
    }

    /**
     * @param mixed $lifetime_conversion_cap
     */
    public function setLifetimeConversionCap($lifetime_conversion_cap)
    {
        $this->lifetime_conversion_cap = $lifetime_conversion_cap;
    }

    /**
     * @return mixed
     */
    public function getLifetimePayoutCap()
    {
        return $this->lifetime_payout_cap;
    }

    /**
     * @param mixed $lifetime_payout_cap
     */
    public function setLifetimePayoutCap($lifetime_payout_cap)
    {
        $this->lifetime_payout_cap = $lifetime_payout_cap;
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return $this->is_expired;
    }

    /**
     * @param bool $is_expired
     */
    public function setIsExpired($is_expired)
    {
        $this->is_expired = $is_expired;
    }

    /**
     * @return string
     */
    public function getDneDownloadUrl()
    {
        return $this->dne_download_url;
    }

    /**
     * @param string $dne_download_url
     */
    public function setDneDownloadUrl($dne_download_url)
    {
        $this->dne_download_url = $dne_download_url;
    }

    /**
     * @return string
     */
    public function getDneUnsubscribeUrl()
    {
        return $this->dne_unsubscribe_url;
    }

    /**
     * @param string $dne_unsubscribe_url
     */
    public function setDneUnsubscribeUrl($dne_unsubscribe_url)
    {
        $this->dne_unsubscribe_url = $dne_unsubscribe_url;
    }

    /**
     * @return bool
     */
    public function isDneThirdPartyList()
    {
        return $this->dne_third_party_list;
    }

    /**
     * @param bool $dne_third_party_list
     */
    public function setDneThirdPartyList($dne_third_party_list)
    {
        $this->dne_third_party_list = $dne_third_party_list;
    }

    /**
     * @return Advertiser
     */
    public function getAdvertiser()
    {
        return $this->Advertiser;
    }

    /**
     * @param mixed
     */
    public function setAdvertiser($Advertiser)
    {
        $this->Advertiser = $Advertiser;
    }

    /**
     * @return AffiliateTierPayout
     */
    public function getAffiliateTierPayout()
    {
        return $this->AffiliateTierPayout;
    }

    /**
     * @param mixed
     */
    public function setAffiliateTierPayout($AffiliateTierPayout)
    {
        $this->AffiliateTierPayout = $AffiliateTierPayout;
    }

    /**
     * @return AffiliateTierRevenue
     */
    public function getAffiliateTierRevenue()
    {
        return $this->AffiliateTierRevenue;
    }

    /**
     * @param mixed
     */
    public function setAffiliateTierRevenue($AffiliateTierRevenue)
    {
        $this->AffiliateTierRevenue = $AffiliateTierRevenue;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return Goal
     */
    public function getGoal()
    {
        return $this->Goal;
    }

    /**
     * @param mixed
     */
    public function setGoal($Goal)
    {
        $this->Goal = $Goal;
    }

    /**
     * @return Hostname
     */
    public function getHostname()
    {
        return $this->Hostname;
    }

    /**
     * @param mixed
     */
    public function setHostname($Hostname)
    {
        $this->Hostname = $Hostname;
    }

    /**
     * @return OfferCategory
     */
    public function getOfferCategory()
    {
        return $this->OfferCategory;
    }

    /**
     * @param mixed
     */
    public function setOfferCategory($OfferCategory)
    {
        $this->OfferCategory = $OfferCategory;
    }

    /**
     * @return OfferGroup
     */
    public function getOfferGroup()
    {
        return $this->OfferGroup;
    }

    /**
     * @param mixed
     */
    public function setOfferGroup($OfferGroup)
    {
        $this->OfferGroup = $OfferGroup;
    }

    /**
     * @return OfferUrl
     */
    public function getOfferUrl()
    {
        return $this->OfferUrl;
    }

    /**
     * @param mixed
     */
    public function setOfferUrl($OfferUrl)
    {
        $this->OfferUrl = $OfferUrl;
    }

    /**
     * @return PayoutGroup
     */
    public function getPayoutGroup()
    {
        return $this->PayoutGroup;
    }

    /**
     * @param mixed
     */
    public function setPayoutGroup($PayoutGroup)
    {
        $this->PayoutGroup = $PayoutGroup;
    }

    /**
     * @return RevenueGroup
     */
    public function getRevenueGroup()
    {
        return $this->RevenueGroup;
    }

    /**
     * @param mixed
     */
    public function setRevenueGroup($RevenueGroup)
    {
        $this->RevenueGroup = $RevenueGroup;
    }

    /**
     * @return Stats
     */
    public function getStat()
    {
        return $this->Stat;
    }

    /**
     * @param mixed
     */
    public function setStat($Stat)
    {
        $this->Stat = $Stat;
    }

    /**
     * @return Subscription
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param mixed
     */
    public function setSubscription($Subscription)
    {
        $this->Subscription = $Subscription;
    }

    /**
     * @return Thumbnail
     */
    public function getThumbnail()
    {
        return $this->Thumbnail;
    }

    /**
     * @param mixed
     */
    public function setThumbnail($Thumbnail)
    {
        $this->Thumbnail = $Thumbnail;
    }


}