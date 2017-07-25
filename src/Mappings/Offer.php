<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/20/17
 * Time: 12:04 PM
 */

namespace HasOffersApi\Mappings;

class Offer
{
    protected $id;
    protected $display_advertiser;
    protected $advertiser_id;
    protected $name;
    protected $description;
    protected $require_approval;
    protected $require_terms_and_conditions;
    protected $terms_and_conditions;
    protected $preview_url;
    protected $offer_url;
    protected $currency;
    protected $default_payout;
    protected $max_payout;
    protected $protocol;
    protected $status;
    protected $expiration_date;
    protected $is_private;
    protected $payout_type;
    protected $tiered_payout;
    protected $tiered_revenue;
    protected $percent_payout;
    protected $revenue_type;
    protected $max_percent_payout;
    protected $redirect_offer_id;
    protected $converted_offer_type;
    protected $converted_offer_id;
    protected $converted_offer_url;
    protected $conversion_ratio_threshold;
    protected $featured;
    protected $is_subscription;
    protected $subscription_duration;
    protected $subscription_frequency;
    protected $customer_list_id;
    protected $ref_id;
    protected $rating;
    protected $disable_click_macro;
    protected $click_macro_url;
    protected $conversion_cap;
    protected $monthly_conversion_cap;
    protected $payout_cap;
    protected $monthly_payout_cap;
    protected $revenue_cap;
    protected $monthly_revenue_cap;
    protected $target_browsers;
    protected $approve_conversions;
    protected $allow_multiple_conversions;
    protected $allow_website_links;
    protected $allow_direct_links;
    protected $show_custom_variables;
    protected $session_hours;
    protected $session_impression_hours;
    protected $set_session_on_impression;
    protected $is_seo_friendly_301;
    protected $show_mail_list;
    protected $dne_list_id;
    protected $email_instructions;
    protected $email_instructions_from;
    protected $email_instructions_subject;
    protected $enforce_geo_targeting;
    protected $enforce_secure_tracking_link;
    protected $hostname_id;
    protected $has_goals_enabled;
    protected $default_goal_name;
    protected $enforce_encrypt_tracking_pixels;
    protected $modified;
    protected $enable_offer_whitelist;
    protected $note;
    protected $use_target_rules;
    protected $use_payout_groups;
    protected $use_revenue_groups;
    protected $website_links_copy_static_params;
    protected $create_date_utc;
    protected $lifetime_revenue_cap;
    protected $lifetime_conversion_cap;
    protected $lifetime_payout_cap;
    protected $is_expired;
    protected $dne_download_url;
    protected $dne_unsubscribe_url;
    protected $dne_third_party_list;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $display_advertiser
     */
    public function setDisplayAdvertiser($display_advertiser)
    {
        $this->display_advertiser = $display_advertiser;
    }

    /**
     * @param mixed $advertiser_id
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->advertiser_id = $advertiser_id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $require_approval
     */
    public function setRequireApproval($require_approval)
    {
        $this->require_approval = $require_approval;
    }

    /**
     * @param mixed $require_terms_and_conditions
     */
    public function setRequireTermsAndConditions($require_terms_and_conditions)
    {
        $this->require_terms_and_conditions = $require_terms_and_conditions;
    }

    /**
     * @param mixed $terms_and_conditions
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->terms_and_conditions = $terms_and_conditions;
    }

    /**
     * @param mixed $preview_url
     */
    public function setPreviewUrl($preview_url)
    {
        $this->preview_url = $preview_url;
    }

    /**
     * @param mixed $offer_url
     */
    public function setOfferUrl($offer_url)
    {
        $this->offer_url = $offer_url;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param mixed $default_payout
     */
    public function setDefaultPayout($default_payout)
    {
        $this->default_payout = $default_payout;
    }

    /**
     * @param mixed $max_payout
     */
    public function setMaxPayout($max_payout)
    {
        $this->max_payout = $max_payout;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $expiration_date
     */
    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    /**
     * @param mixed $is_private
     */
    public function setIsPrivate($is_private)
    {
        $this->is_private = $is_private;
    }

    /**
     * @param mixed $payout_type
     */
    public function setPayoutType($payout_type)
    {
        $this->payout_type = $payout_type;
    }

    /**
     * @param mixed $tiered_payout
     */
    public function setTieredPayout($tiered_payout)
    {
        $this->tiered_payout = $tiered_payout;
    }

    /**
     * @param mixed $tiered_revenue
     */
    public function setTieredRevenue($tiered_revenue)
    {
        $this->tiered_revenue = $tiered_revenue;
    }

    /**
     * @param mixed $percent_payout
     */
    public function setPercentPayout($percent_payout)
    {
        $this->percent_payout = $percent_payout;
    }

    /**
     * @param mixed $revenue_type
     */
    public function setRevenueType($revenue_type)
    {
        $this->revenue_type = $revenue_type;
    }

    /**
     * @param mixed $max_percent_payout
     */
    public function setMaxPercentPayout($max_percent_payout)
    {
        $this->max_percent_payout = $max_percent_payout;
    }

    /**
     * @param mixed $redirect_offer_id
     */
    public function setRedirectOfferId($redirect_offer_id)
    {
        $this->redirect_offer_id = $redirect_offer_id;
    }

    /**
     * @param mixed $converted_offer_type
     */
    public function setConvertedOfferType($converted_offer_type)
    {
        $this->converted_offer_type = $converted_offer_type;
    }

    /**
     * @param mixed $converted_offer_id
     */
    public function setConvertedOfferId($converted_offer_id)
    {
        $this->converted_offer_id = $converted_offer_id;
    }

    /**
     * @param mixed $converted_offer_url
     */
    public function setConvertedOfferUrl($converted_offer_url)
    {
        $this->converted_offer_url = $converted_offer_url;
    }

    /**
     * @param mixed $conversion_ratio_threshold
     */
    public function setConversionRatioThreshold($conversion_ratio_threshold)
    {
        $this->conversion_ratio_threshold = $conversion_ratio_threshold;
    }

    /**
     * @param mixed $featured
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    }

    /**
     * @param mixed $is_subscription
     */
    public function setIsSubscription($is_subscription)
    {
        $this->is_subscription = $is_subscription;
    }

    /**
     * @param mixed $subscription_duration
     */
    public function setSubscriptionDuration($subscription_duration)
    {
        $this->subscription_duration = $subscription_duration;
    }

    /**
     * @param mixed $subscription_frequency
     */
    public function setSubscriptionFrequency($subscription_frequency)
    {
        $this->subscription_frequency = $subscription_frequency;
    }

    /**
     * @param mixed $customer_list_id
     */
    public function setCustomerListId($customer_list_id)
    {
        $this->customer_list_id = $customer_list_id;
    }

    /**
     * @param mixed $ref_id
     */
    public function setRefId($ref_id)
    {
        $this->ref_id = $ref_id;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @param mixed $disable_click_macro
     */
    public function setDisableClickMacro($disable_click_macro)
    {
        $this->disable_click_macro = $disable_click_macro;
    }

    /**
     * @param mixed $click_macro_url
     */
    public function setClickMacroUrl($click_macro_url)
    {
        $this->click_macro_url = $click_macro_url;
    }

    /**
     * @param mixed $conversion_cap
     */
    public function setConversionCap($conversion_cap)
    {
        $this->conversion_cap = $conversion_cap;
    }

    /**
     * @param mixed $monthly_conversion_cap
     */
    public function setMonthlyConversionCap($monthly_conversion_cap)
    {
        $this->monthly_conversion_cap = $monthly_conversion_cap;
    }

    /**
     * @param mixed $payout_cap
     */
    public function setPayoutCap($payout_cap)
    {
        $this->payout_cap = $payout_cap;
    }

    /**
     * @param mixed $monthly_payout_cap
     */
    public function setMonthlyPayoutCap($monthly_payout_cap)
    {
        $this->monthly_payout_cap = $monthly_payout_cap;
    }

    /**
     * @param mixed $revenue_cap
     */
    public function setRevenueCap($revenue_cap)
    {
        $this->revenue_cap = $revenue_cap;
    }

    /**
     * @param mixed $monthly_revenue_cap
     */
    public function setMonthlyRevenueCap($monthly_revenue_cap)
    {
        $this->monthly_revenue_cap = $monthly_revenue_cap;
    }

    /**
     * @param mixed $target_browsers
     */
    public function setTargetBrowsers($target_browsers)
    {
        $this->target_browsers = $target_browsers;
    }

    /**
     * @param mixed $approve_conversions
     */
    public function setApproveConversions($approve_conversions)
    {
        $this->approve_conversions = $approve_conversions;
    }

    /**
     * @param mixed $allow_multiple_conversions
     */
    public function setAllowMultipleConversions($allow_multiple_conversions)
    {
        $this->allow_multiple_conversions = $allow_multiple_conversions;
    }

    /**
     * @param mixed $allow_website_links
     */
    public function setAllowWebsiteLinks($allow_website_links)
    {
        $this->allow_website_links = $allow_website_links;
    }

    /**
     * @param mixed $allow_direct_links
     */
    public function setAllowDirectLinks($allow_direct_links)
    {
        $this->allow_direct_links = $allow_direct_links;
    }

    /**
     * @param mixed $show_custom_variables
     */
    public function setShowCustomVariables($show_custom_variables)
    {
        $this->show_custom_variables = $show_custom_variables;
    }

    /**
     * @param mixed $session_hours
     */
    public function setSessionHours($session_hours)
    {
        $this->session_hours = $session_hours;
    }

    /**
     * @param mixed $session_impression_hours
     */
    public function setSessionImpressionHours($session_impression_hours)
    {
        $this->session_impression_hours = $session_impression_hours;
    }

    /**
     * @param mixed $set_session_on_impression
     */
    public function setSetSessionOnImpression($set_session_on_impression)
    {
        $this->set_session_on_impression = $set_session_on_impression;
    }

    /**
     * @param mixed $is_seo_friendly_301
     */
    public function setIsSeoFriendly301($is_seo_friendly_301)
    {
        $this->is_seo_friendly_301 = $is_seo_friendly_301;
    }

    /**
     * @param mixed $show_mail_list
     */
    public function setShowMailList($show_mail_list)
    {
        $this->show_mail_list = $show_mail_list;
    }

    /**
     * @param mixed $dne_list_id
     */
    public function setDneListId($dne_list_id)
    {
        $this->dne_list_id = $dne_list_id;
    }

    /**
     * @param mixed $email_instructions
     */
    public function setEmailInstructions($email_instructions)
    {
        $this->email_instructions = $email_instructions;
    }

    /**
     * @param mixed $email_instructions_from
     */
    public function setEmailInstructionsFrom($email_instructions_from)
    {
        $this->email_instructions_from = $email_instructions_from;
    }

    /**
     * @param mixed $email_instructions_subject
     */
    public function setEmailInstructionsSubject($email_instructions_subject)
    {
        $this->email_instructions_subject = $email_instructions_subject;
    }

    /**
     * @param mixed $enforce_geo_targeting
     */
    public function setEnforceGeoTargeting($enforce_geo_targeting)
    {
        $this->enforce_geo_targeting = $enforce_geo_targeting;
    }

    /**
     * @param mixed $enforce_secure_tracking_link
     */
    public function setEnforceSecureTrackingLink($enforce_secure_tracking_link)
    {
        $this->enforce_secure_tracking_link = $enforce_secure_tracking_link;
    }

    /**
     * @param mixed $hostname_id
     */
    public function setHostnameId($hostname_id)
    {
        $this->hostname_id = $hostname_id;
    }

    /**
     * @param mixed $has_goals_enabled
     */
    public function setHasGoalsEnabled($has_goals_enabled)
    {
        $this->has_goals_enabled = $has_goals_enabled;
    }

    /**
     * @param mixed $default_goal_name
     */
    public function setDefaultGoalName($default_goal_name)
    {
        $this->default_goal_name = $default_goal_name;
    }

    /**
     * @param mixed $enforce_encrypt_tracking_pixels
     */
    public function setEnforceEncryptTrackingPixels($enforce_encrypt_tracking_pixels)
    {
        $this->enforce_encrypt_tracking_pixels = $enforce_encrypt_tracking_pixels;
    }

    /**
     * @param mixed $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @param mixed $enable_offer_whitelist
     */
    public function setEnableOfferWhitelist($enable_offer_whitelist)
    {
        $this->enable_offer_whitelist = $enable_offer_whitelist;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @param mixed $use_target_rules
     */
    public function setUseTargetRules($use_target_rules)
    {
        $this->use_target_rules = $use_target_rules;
    }

    /**
     * @param mixed $use_payout_groups
     */
    public function setUsePayoutGroups($use_payout_groups)
    {
        $this->use_payout_groups = $use_payout_groups;
    }

    /**
     * @param mixed $use_revenue_groups
     */
    public function setUseRevenueGroups($use_revenue_groups)
    {
        $this->use_revenue_groups = $use_revenue_groups;
    }

    /**
     * @param mixed $website_links_copy_static_params
     */
    public function setWebsiteLinksCopyStaticParams($website_links_copy_static_params)
    {
        $this->website_links_copy_static_params = $website_links_copy_static_params;
    }

    /**
     * @param mixed $create_date_utc
     */
    public function setCreateDateUtc($create_date_utc)
    {
        $this->create_date_utc = $create_date_utc;
    }

    /**
     * @param mixed $lifetime_revenue_cap
     */
    public function setLifetimeRevenueCap($lifetime_revenue_cap)
    {
        $this->lifetime_revenue_cap = $lifetime_revenue_cap;
    }

    /**
     * @param mixed $lifetime_conversion_cap
     */
    public function setLifetimeConversionCap($lifetime_conversion_cap)
    {
        $this->lifetime_conversion_cap = $lifetime_conversion_cap;
    }

    /**
     * @param mixed $lifetime_payout_cap
     */
    public function setLifetimePayoutCap($lifetime_payout_cap)
    {
        $this->lifetime_payout_cap = $lifetime_payout_cap;
    }

    /**
     * @param mixed $is_expired
     */
    public function setIsExpired($is_expired)
    {
        $this->is_expired = $is_expired;
    }

    /**
     * @param mixed $dne_download_url
     */
    public function setDneDownloadUrl($dne_download_url)
    {
        $this->dne_download_url = $dne_download_url;
    }

    /**
     * @param mixed $dne_unsubscribe_url
     */
    public function setDneUnsubscribeUrl($dne_unsubscribe_url)
    {
        $this->dne_unsubscribe_url = $dne_unsubscribe_url;
    }

    /**
     * @param mixed $dne_third_party_list
     */
    public function setDneThirdPartyList($dne_third_party_list)
    {
        $this->dne_third_party_list = $dne_third_party_list;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDisplayAdvertiser()
    {
        return $this->display_advertiser;
    }

    /**
     * @return mixed
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getRequireApproval()
    {
        return $this->require_approval;
    }

    /**
     * @return mixed
     */
    public function getRequireTermsAndConditions()
    {
        return $this->require_terms_and_conditions;
    }

    /**
     * @return mixed
     */
    public function getTermsAndConditions()
    {
        return $this->terms_and_conditions;
    }

    /**
     * @return mixed
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

    /**
     * @return mixed
     */
    public function getOfferUrl()
    {
        return $this->offer_url;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getDefaultPayout()
    {
        return $this->default_payout;
    }

    /**
     * @return mixed
     */
    public function getMaxPayout()
    {
        return $this->max_payout;
    }

    /**
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * @return mixed
     */
    public function getisPrivate()
    {
        return $this->is_private;
    }

    /**
     * @return mixed
     */
    public function getPayoutType()
    {
        return $this->payout_type;
    }

    /**
     * @return mixed
     */
    public function getTieredPayout()
    {
        return $this->tiered_payout;
    }

    /**
     * @return mixed
     */
    public function getTieredRevenue()
    {
        return $this->tiered_revenue;
    }

    /**
     * @return mixed
     */
    public function getPercentPayout()
    {
        return $this->percent_payout;
    }

    /**
     * @return mixed
     */
    public function getRevenueType()
    {
        return $this->revenue_type;
    }

    /**
     * @return mixed
     */
    public function getMaxPercentPayout()
    {
        return $this->max_percent_payout;
    }

    /**
     * @return mixed
     */
    public function getRedirectOfferId()
    {
        return $this->redirect_offer_id;
    }

    /**
     * @return mixed
     */
    public function getConvertedOfferType()
    {
        return $this->converted_offer_type;
    }

    /**
     * @return mixed
     */
    public function getConvertedOfferId()
    {
        return $this->converted_offer_id;
    }

    /**
     * @return mixed
     */
    public function getConvertedOfferUrl()
    {
        return $this->converted_offer_url;
    }

    /**
     * @return mixed
     */
    public function getConversionRatioThreshold()
    {
        return $this->conversion_ratio_threshold;
    }

    /**
     * @return mixed
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * @return mixed
     */
    public function getisSubscription()
    {
        return $this->is_subscription;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionDuration()
    {
        return $this->subscription_duration;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionFrequency()
    {
        return $this->subscription_frequency;
    }

    /**
     * @return mixed
     */
    public function getCustomerListId()
    {
        return $this->customer_list_id;
    }

    /**
     * @return mixed
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getDisableClickMacro()
    {
        return $this->disable_click_macro;
    }

    /**
     * @return mixed
     */
    public function getClickMacroUrl()
    {
        return $this->click_macro_url;
    }

    /**
     * @return mixed
     */
    public function getConversionCap()
    {
        return $this->conversion_cap;
    }

    /**
     * @return mixed
     */
    public function getMonthlyConversionCap()
    {
        return $this->monthly_conversion_cap;
    }

    /**
     * @return mixed
     */
    public function getPayoutCap()
    {
        return $this->payout_cap;
    }

    /**
     * @return mixed
     */
    public function getMonthlyPayoutCap()
    {
        return $this->monthly_payout_cap;
    }

    /**
     * @return mixed
     */
    public function getRevenueCap()
    {
        return $this->revenue_cap;
    }

    /**
     * @return mixed
     */
    public function getMonthlyRevenueCap()
    {
        return $this->monthly_revenue_cap;
    }

    /**
     * @return mixed
     */
    public function getTargetBrowsers()
    {
        return $this->target_browsers;
    }

    /**
     * @return mixed
     */
    public function getApproveConversions()
    {
        return $this->approve_conversions;
    }

    /**
     * @return mixed
     */
    public function getAllowMultipleConversions()
    {
        return $this->allow_multiple_conversions;
    }

    /**
     * @return mixed
     */
    public function getAllowWebsiteLinks()
    {
        return $this->allow_website_links;
    }

    /**
     * @return mixed
     */
    public function getAllowDirectLinks()
    {
        return $this->allow_direct_links;
    }

    /**
     * @return mixed
     */
    public function getShowCustomVariables()
    {
        return $this->show_custom_variables;
    }

    /**
     * @return mixed
     */
    public function getSessionHours()
    {
        return $this->session_hours;
    }

    /**
     * @return mixed
     */
    public function getSessionImpressionHours()
    {
        return $this->session_impression_hours;
    }

    /**
     * @return mixed
     */
    public function getSetSessionOnImpression()
    {
        return $this->set_session_on_impression;
    }

    /**
     * @return mixed
     */
    public function getisSeoFriendly301()
    {
        return $this->is_seo_friendly_301;
    }

    /**
     * @return mixed
     */
    public function getShowMailList()
    {
        return $this->show_mail_list;
    }

    /**
     * @return mixed
     */
    public function getDneListId()
    {
        return $this->dne_list_id;
    }

    /**
     * @return mixed
     */
    public function getEmailInstructions()
    {
        return $this->email_instructions;
    }

    /**
     * @return mixed
     */
    public function getEmailInstructionsFrom()
    {
        return $this->email_instructions_from;
    }

    /**
     * @return mixed
     */
    public function getEmailInstructionsSubject()
    {
        return $this->email_instructions_subject;
    }

    /**
     * @return mixed
     */
    public function getEnforceGeoTargeting()
    {
        return $this->enforce_geo_targeting;
    }

    /**
     * @return mixed
     */
    public function getEnforceSecureTrackingLink()
    {
        return $this->enforce_secure_tracking_link;
    }

    /**
     * @return mixed
     */
    public function getHostnameId()
    {
        return $this->hostname_id;
    }

    /**
     * @return mixed
     */
    public function getHasGoalsEnabled()
    {
        return $this->has_goals_enabled;
    }

    /**
     * @return mixed
     */
    public function getDefaultGoalName()
    {
        return $this->default_goal_name;
    }

    /**
     * @return mixed
     */
    public function getEnforceEncryptTrackingPixels()
    {
        return $this->enforce_encrypt_tracking_pixels;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @return mixed
     */
    public function getEnableOfferWhitelist()
    {
        return $this->enable_offer_whitelist;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @return mixed
     */
    public function getUseTargetRules()
    {
        return $this->use_target_rules;
    }

    /**
     * @return mixed
     */
    public function getUsePayoutGroups()
    {
        return $this->use_payout_groups;
    }

    /**
     * @return mixed
     */
    public function getUseRevenueGroups()
    {
        return $this->use_revenue_groups;
    }

    /**
     * @return mixed
     */
    public function getWebsiteLinksCopyStaticParams()
    {
        return $this->website_links_copy_static_params;
    }

    /**
     * @return mixed
     */
    public function getCreateDateUtc()
    {
        return $this->create_date_utc;
    }

    /**
     * @return mixed
     */
    public function getLifetimeRevenueCap()
    {
        return $this->lifetime_revenue_cap;
    }

    /**
     * @return mixed
     */
    public function getLifetimeConversionCap()
    {
        return $this->lifetime_conversion_cap;
    }

    /**
     * @return mixed
     */
    public function getLifetimePayoutCap()
    {
        return $this->lifetime_payout_cap;
    }

    /**
     * @return mixed
     */
    public function getisExpired()
    {
        return $this->is_expired;
    }

    /**
     * @return mixed
     */
    public function getDneDownloadUrl()
    {
        return $this->dne_download_url;
    }

    /**
     * @return mixed
     */
    public function getDneUnsubscribeUrl()
    {
        return $this->dne_unsubscribe_url;
    }

    /**
     * @return mixed
     */
    public function getDneThirdPartyList()
    {
        return $this->dne_third_party_list;
    }


}