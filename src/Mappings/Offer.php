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
    /**
     * 	ID of Advertiser object associated to offer (if any)
     * @var integer
     */
    protected $advertiser_id;

    /**
     * "Direct Links" setting in Offer Tracking Settings
     * @var boolean
     */
    protected $allow_direct_links;

    /**
     * Boolean	"Multiple Conversions" setting in Offer Tracking Settings.
     * @var boolean
     */
    protected $allow_multiple_conversions;

    /**
     * Boolean	"Deep Links" setting in Offer Tracking Settings
     * @var boolean
     */
    protected $allow_website_links;


    /**
     * Approve Conversions setting in Offer Tracking Settings. A null value is treated as false.
     * @var boolean
     */
    protected $approve_conversions;

    /**
     * "Click Macro URL" setting in Offer Tracking Settings. Applicable if disable_click_macro is set to false.
     * @var string
     */
    protected $click_macro_url;

    /**
     * "Daily Conversions" cap setting in Offer Settings. A value of 0 means there is no general daily conversion cap for offer.
     * @var integer
     */
    protected $conversion_cap;

    /**
     * @deprecated
     * @var integer
     */
    protected $conversion_ratio_threshold;

    /**
     * ID of Offer object for "Secondary Offer" setting in Offer Tracking Settings. Applicable only if converted_offer_type is set to "network".
     * @var integer
     */
    protected $converted_offer_id;

    /**
     * Core "Secondary Offer" setting in Offer Tracking Settings. Applicable if "Redirect Offers" network-wide offer setting
     * is enabled and "SEO Friendly Links" network-wide offer setting is disabled.
     * @var string
     */
    protected $converted_offer_type;

    /**
     * Custom URL value for "Secondary Offer" setting in Offer Tracking Settings. Applicable only if converted_offer_type is set to "url".
     * @var string
     */
    protected $converted_offer_url;

    /**
     * Date the offer was created This parameter is non-writable
     * @var \Datetime
     */
    protected $create_date_utc;

    /**
     * "Offer Currency" value in Offer Payout Settings, corresponding to three-character code as listed in Using Multiple Currencies. If set to null, offer uses "Currency" network-wide
     * application setting. Returns error if attempting to set field to any other code. Available only if "Multiple Currencies" network-wide application setting is enabled.
     * @var string
     */
    protected $currency;

    /**
     * ID of CustomerList object associated with offer (if any)
     * @var integer
     */
    protected $customer_list_id;

    /**
     * Name of default goal (Goal.name). Applicable only if has_goals_enabled is set to true.
     * @var string
     */
    protected $default_goal_name;

    /**
     * Flat payout amount for offer. Applicable only if payout_type is or includes a flat-amount type: "cpa_flat", "cpa_both", "cpc", or "cpm".
     * @var float
     */
    protected $default_payout;

    /**
     * Offer's description text/HTML
     * @var string
     */
    protected $description;

    /**
     * "Click Macro" setting in Offer Tracking Settings. Is true if setting is set to "Disabled", false if set to "Enabled". Applicable if "Global Click Macro" network-wide tracking setting is enabled.
     * @var boolean
     */
    protected $disable_click_macro;

    /**
     * "Display Advertiser" setting in Offer Settings Applicable if "Display Advertiser" network-wide offer setting is enabled.
     * @var boolean
     */
    protected $display_advertiser;

    /**
     * Contents of Download URL entry in suppression list associated to offer, as referred to in dne_list_id (if any).Cannot write to this field. Use DneList controller to manipulate related DneList object.
     * @var string
     */
    protected $dne_download_url;

    /**
     * ID of DneList object associated to offer (if any). Applicable only if show_mail_list is set to true.
     * @var integer
     */
    protected $dne_list_id;

    /**
     * Flag indicating if the offer uses a third-party DNE list.
     * @var boolean
     */
    protected $dne_third_party_list;

    /**
     * "Contents of Unsubscrube URL" entry in suppression list associated to offer, as referred to in dne_list_id (if any).
     * @var string
     */
    protected $dne_unsubscribe_ur;

    /**
     * "Email Instructions" setting in Offer Settings. Must be set to true for related fields to apply.
     * @var boolean
     */
    protected $email_instructions;

    /**
     * "Contents of Approved From Lines" entry in offer's Suppression Lists settings. Use line breaks to separate multiple entries. Applicable if the "email_instructions" field is set to true.
     * @var string
     */
    protected $email_instructions_from;

    /**
     * "Contents of Approved Subject Lines" entry in offer's Suppression Lists settings. Use line breaks to separate multiple entries. Applicable if the "email_instructions" field is set to true.
     * @var string
     */
    protected $email_instructions_subject;

    /**
     * "Offer Whitelist" setting in Offer Tracking Settings
     * @var boolean
     */
    protected $enable_offer_whitelist;

    /**
     * "Encrypted Conversion Tracking" setting in Offer Tracking Settings. Applicable if "Encrypt Conversion URLs" network-wide tracking setting is enabled.
     * @var boolean
     */
    protected $enforce_encrypt_tracking_pixels;

    /**
     * "Enforce Geo-Targeting" setting in Offer Targeting. Must be set to true for related fields to apply.
     * @var boolean
     */
    protected $enforce_geo_targeting;

    /**
     * Enforce SSL by generating all affiliate tracking links and impression pixels with https instead of http
     * @var boolean
     */
    protected $enforce_secure_tracking_link;

    /**
     * Offer's expiration date
     * @var \DateTime
     */
    protected $expiration_date;

    /**
     * Date offer was selected as a featured offer (available at the network Snapshot page). If this is set to null or "0000-00-00 00:00:00", offer is not selected as a featured offer.
     * @var |DateTime
     */
    protected $featured;

    /**
     * "Multiple Conversion Goals" setting in Offer Payout. Must be set to true for related fields to apply.
     * @var boolean
     */
    protected $has_goals_enabled;

    /**
     * ID of Hostname object associated to offer (if any), for use with custom tracking domains.
     * @var integer
     */
    protected $hostname_id;

    /**
     * This object's ID, automatically generated upon creation.
     * @var integer
     */
    protected $id;

    /**
     * Flag indicating if offer has expired—if the current date is past the value in expiration_date
     * @var boolean
     */
    protected $is_expired;

    /**
     * "Private" setting in Offer Settings
     * @var boolean
     */
    protected $is_private;

    /**
     * "SEO-Friendly Links" setting in Offer Settings Applicable if "SEO-Friendly Links" network-wide offer setting is enabled.
     * @var boolean
     */
    protected $is_seo_friendly_301;

    /**
     * "Subscription" setting in Offer Tracking Settings
     * @var boolean
     */
    protected $is_subscription;

    /**
     * "Lifetime Conversions" cap setting in Offer Settings. A value of 0 means there is no general lifetime conversion cap for offer.
     * @var mixed
     */
    protected $lifetime_conversion_cap;

    /**
     * "Lifetime Payout" cap setting in Offer Settings. A value of 0 means there is no general lifetime payout cap for offer.
     * @var mixed
     */
    protected $lifetime_payout_cap;

    /**
     * "Lifetime Reveune" cap setting in Offer Settings. A value of 0 means there is no general lifetime payout cap for offer.
     * @var mixed
     */
    protected $lifetime_revenue_cap;

    /**
     * Flat revenue amount for offer. Applicable only if revenue_type is or includes a flat-amount type: "cpa_flat", "cpa_both", "cpc", or "cpm".
     * @var float
     */
    protected $max_payout;

    /**
     * Percentage of sale revenue for offer. Applicable only if revenue_type is or includes a percentage type: "cpa_percentage" or "cpa_both".
     * @var float
     */
    protected $max_percent_payout;

    /**
     * Datetime of most recent change to object
     * @var \Datetime
     */
    protected $modified;

    /**
     * "Monthly Conversions" cap setting in Offer Settings. A value of 0 means there is no general monthly conversion cap for offer.
     * @var integer
     */
    protected $monthly_conversion_cap;

    /**
     * "Monthly Payout" cap setting in Offer Settings. A value of 0 means there is no general monthly payout cap for offer.
     * @var float
     */
    protected $monthly_payout_cap;

    /**
     * "Monthly Revenue" cap setting in Offer Settings. A value of 0 means there is no general monthly revenue cap for offer.
     * @var float
     */
    protected $monthly_revenue_cap;

    /**
     * Offer's display name
     * @var string
     */
    protected $name;

    /**
     * Default offer URL/landing page offer redirects traffic to.
     * @var string
     */
    protected $offer_url;

    /**
     * "Daily Payout" cap setting in Offer Settings. A value of 0 means there is no general daily payout cap for offer.
     * @var float
     */
    protected $payout_cap;

    /**
     * Offer's payout type, as described in Offer Payouts.
     * Values of "cpa_flat", "cpm", and "cpc" indicate a flat payout amount, which is specified in the default_payout field.
     * Value of "cpa_percentage" indicates payout is a percentage of sale, which is specified in the percent_payout field.
     * Value of "cpa_both" indicates both a flat payout amount and a percentage of sale payout.
     *
     * @var string
     */
    protected $payout_type;
    /**
     * Percentage of sale payout for offer. Applicable only if payout_type is or includes a percentage type: "cpa_percentage" or "cpa_both".
     * @var float
     */
    protected $percent_payout;

    /**
     * URL used to preview page offer redirects to.
     * @var string
     */
    protected $preview_url;

    /**
     * Conversion tracking protocol to use for offer.
     * @var string
     */
    protected $protocol;

    /**
     * Offer's rating as displayed to affiliate and network users, ranked from 1 to 5. This field is active if the network has the Offer Ratings setting enabled.
     * @var integer
     */
    protected $rating;

    /**
     * ID of Offer object for "Redirect Offer" setting in Offer Tracking Settings.
     * @var integer
     */
    protected $redirect_offer_id;

    /**
     * "Reference ID" setting in Offer Details
     * @var string
     */
    protected $ref_id;

    /**
     * "Require Approval" setting in Offer Settings
     * @var boolean
     */
    protected $require_approval;

    /**
     * "Terms and Conditions" setting in Offer Settings
     * @var string
     */
    protected $require_terms_and_conditions;

    /**
     * "Daily Revenue" cap setting in Offer Settings. A value of 0 means there is no general daily revenue cap for offer.
     * @var float
     */
    protected $revenue_cap;

    /**
     * Offer's revenue type, as described in Offer Payouts.
     * Values of "cpa_flat", "cpm", and "cpc" indicate a flat revenue amount, which is specified in the max_payout field.
     * Value of "cpa_percentage" indicates revenue is a percentage of sale, which is specified in the max_percent_payout field.
     * Value of "cpa_both" indicates both a flat revenue amount and a percentage of sale revenue.
     * Note: Values are same as in payout_type for unity, rather than using "rpa_flat" etc.
     * Show Supported Values
     * @var string
     */
    protected $revenue_type;

    /**
     * "Click Session Lifespan" setting in Offer Tracking Settings, in hours.
     * @var integer
     */
    protected $session_hours;

    /**
     * "Impression Session Lifespan" setting in Offer Tracking Settings, in hours. Applicable only if set_session_on_impression is set to true.
     * @var integer
     */
    protected $session_impression_hours;

    /**
     * "Start Session Tracking" setting in Offer Tracking Settings; true is selection is for impressions, false if for clicks.
     * Applicable only if protocol is set to a pixel-based value, otherwise defaults to false.
     * @var boolean
     */
    protected $set_session_on_impression;

    /**
     * "Custom Variables" setting in Offer Tracking Settings.
     * @var boolean
     */
    protected $show_custom_variables;

    /**
     * "Suppression List" setting in Offer Settings.
     * @var boolean
     */
    protected $show_mail_list;

    /**
     * Offer's status
     * @var string
     */
    protected $status;

    /**
     * "Subscription Duration" setting in Offer Tracking Settings, in seconds. A value of 0 means the duration is indefinite.
     * @var integer
     */
    protected $subscription_duration;

    /**
     * "Subscription Frequency" setting in Offer Tracking Settings.
     * @var string
     */
    protected $subscription_frequency;

    /**
     * "Require Approval" setting in Offer Settings
     * @deprecated
     * @var integer
     */
    protected $target_browsers;

    /**
     * Offer's terms and conditions text/HTML as shown in Offer Settings. Should contain non-empty value if require_terms_and_conditions is true.
     * @var string
     */
    protected $terms_and_conditions;

    /**
     * Relates to "Payout Method" setting in Offer Payout Settings. Is true if setting is set to "Tiered", false otherwise. Cannot be set to true if use_payout_groups is also true.
     * @var boolean
     */
    protected $tiered_payout;

    /**
     * Relates to "Revenue Method" setting in Offer Payout Settings. Is true if setting is set to "Tiered", false otherwise. Cannot be set to true if use_revenue_groups is also true.
     * @var boolean
     */
    protected $tiered_revenue;

    /**
     * Relates to "Payout Method" setting in Offer Payout Settings. Is true if setting is set to "Groups", false otherwise. Cannot be set to true if tiered_payout is also true.
     * @var boolean
     */
    protected $use_payout_groups;

    /**
     * Relates to "Revenue Method" setting in Offer Payout Settings. Is true if setting is set to "Groups", false otherwise. Cannot be set to true if tiered_revenue is also true.
     * @var boolean
     */
    protected $use_revenue_groups;

    /**
     * "Advanced Targeting" setting in Offer Targeting. Set to true if "Show the offer to targeted devices" is selected.
     * @var boolean
     */
    protected $use_target_rules;

    /**
     * "Copy Static Parameters to Deep Links" setting in Offer Tracking Settings. Applicable only if allow_website_links is true.
     * @var boolean
     */
    protected $website_links_copy_static_params;

    /**
     * @return int
     */
    public function getAdvertiserId(): int
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
     */
    public function setAdvertiserId(int $advertiser_id)
    {
        $this->advertiser_id = $advertiser_id;
    }

    /**
     * @return bool
     */
    public function isAllowDirectLinks(): bool
    {
        return $this->allow_direct_links;
    }

    /**
     * @param bool $allow_direct_links
     */
    public function setAllowDirectLinks(bool $allow_direct_links)
    {
        $this->allow_direct_links = $allow_direct_links;
    }

    /**
     * @return bool
     */
    public function isAllowMultipleConversions(): bool
    {
        return $this->allow_multiple_conversions;
    }

    /**
     * @param bool $allow_multiple_conversions
     */
    public function setAllowMultipleConversions(bool $allow_multiple_conversions)
    {
        $this->allow_multiple_conversions = $allow_multiple_conversions;
    }

    /**
     * @return bool
     */
    public function isAllowWebsiteLinks(): bool
    {
        return $this->allow_website_links;
    }

    /**
     * @param bool $allow_website_links
     */
    public function setAllowWebsiteLinks(bool $allow_website_links)
    {
        $this->allow_website_links = $allow_website_links;
    }

    /**
     * @return bool
     */
    public function isApproveConversions(): bool
    {
        return $this->approve_conversions;
    }

    /**
     * @param bool $approve_conversions
     */
    public function setApproveConversions(bool $approve_conversions)
    {
        $this->approve_conversions = $approve_conversions;
    }

    /**
     * @return string
     */
    public function getClickMacroUrl(): string
    {
        return $this->click_macro_url;
    }

    /**
     * @param string $click_macro_url
     */
    public function setClickMacroUrl(string $click_macro_url)
    {
        $this->click_macro_url = $click_macro_url;
    }

    /**
     * @return int
     */
    public function getConversionCap(): int
    {
        return $this->conversion_cap;
    }

    /**
     * @param int $conversion_cap
     */
    public function setConversionCap(int $conversion_cap)
    {
        $this->conversion_cap = $conversion_cap;
    }

    /**
     * @deprecated
     * @return int
     */
    public function getConversionRatioThreshold(): int
    {
        return $this->conversion_ratio_threshold;
    }

    /**
     * @deprecated
     * @param int $conversion_ratio_threshold
     */
    public function setConversionRatioThreshold(int $conversion_ratio_threshold)
    {
        $this->conversion_ratio_threshold = $conversion_ratio_threshold;
    }

    /**
     * @return int
     */
    public function getConvertedOfferId(): int
    {
        return $this->converted_offer_id;
    }

    /**
     * @param int $converted_offer_id
     */
    public function setConvertedOfferId(int $converted_offer_id)
    {
        $this->converted_offer_id = $converted_offer_id;
    }

    /**
     * @return string
     */
    public function getConvertedOfferType(): string
    {
        return $this->converted_offer_type;
    }

    /**
     * @param string $converted_offer_type
     */
    public function setConvertedOfferType(string $converted_offer_type)
    {
        $this->converted_offer_type = $converted_offer_type;
    }

    /**
     * @return string
     */
    public function getConvertedOfferUrl(): string
    {
        return $this->converted_offer_url;
    }

    /**
     * @param string $converted_offer_url
     */
    public function setConvertedOfferUrl(string $converted_offer_url)
    {
        $this->converted_offer_url = $converted_offer_url;
    }

    /**
     * @return \Datetime
     */
    public function getCreateDateUtc(): \Datetime
    {
        return $this->create_date_utc;
    }

    /**
     * @param \Datetime $create_date_utc
     */
    public function setCreateDateUtc(\Datetime $create_date_utc)
    {
        $this->create_date_utc = $create_date_utc;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getCustomerListId(): int
    {
        return $this->customer_list_id;
    }

    /**
     * @param int $customer_list_id
     */
    public function setCustomerListId(int $customer_list_id)
    {
        $this->customer_list_id = $customer_list_id;
    }

    /**
     * @return string
     */
    public function getDefaultGoalName(): string
    {
        return $this->default_goal_name;
    }

    /**
     * @param string $default_goal_name
     */
    public function setDefaultGoalName(string $default_goal_name)
    {
        $this->default_goal_name = $default_goal_name;
    }

    /**
     * @return float
     */
    public function getDefaultPayout(): float
    {
        return $this->default_payout;
    }

    /**
     * @param float $default_payout
     */
    public function setDefaultPayout(float $default_payout)
    {
        $this->default_payout = $default_payout;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isDisableClickMacro(): bool
    {
        return $this->disable_click_macro;
    }

    /**
     * @param bool $disable_click_macro
     */
    public function setDisableClickMacro(bool $disable_click_macro)
    {
        $this->disable_click_macro = $disable_click_macro;
    }

    /**
     * @return bool
     */
    public function isDisplayAdvertiser(): bool
    {
        return $this->display_advertiser;
    }

    /**
     * @param bool $display_advertiser
     */
    public function setDisplayAdvertiser(bool $display_advertiser)
    {
        $this->display_advertiser = $display_advertiser;
    }

    /**
     * @return string
     */
    public function getDneDownloadUrl(): string
    {
        return $this->dne_download_url;
    }

    /**
     * @param string $dne_download_url
     */
    public function setDneDownloadUrl(string $dne_download_url)
    {
        $this->dne_download_url = $dne_download_url;
    }

    /**
     * @return int
     */
    public function getDneListId(): int
    {
        return $this->dne_list_id;
    }

    /**
     * @param int $dne_list_id
     */
    public function setDneListId(int $dne_list_id)
    {
        $this->dne_list_id = $dne_list_id;
    }

    /**
     * @return bool
     */
    public function isDneThirdPartyList(): bool
    {
        return $this->dne_third_party_list;
    }

    /**
     * @param bool $dne_third_party_list
     */
    public function setDneThirdPartyList(bool $dne_third_party_list)
    {
        $this->dne_third_party_list = $dne_third_party_list;
    }

    /**
     * @return string
     */
    public function getDneUnsubscribeUr(): string
    {
        return $this->dne_unsubscribe_ur;
    }

    /**
     * @param string $dne_unsubscribe_ur
     */
    public function setDneUnsubscribeUr(string $dne_unsubscribe_ur)
    {
        $this->dne_unsubscribe_ur = $dne_unsubscribe_ur;
    }

    /**
     * @return bool
     */
    public function isEmailInstructions(): bool
    {
        return $this->email_instructions;
    }

    /**
     * @param bool $email_instructions
     */
    public function setEmailInstructions(bool $email_instructions)
    {
        $this->email_instructions = $email_instructions;
    }

    /**
     * @return string
     */
    public function getEmailInstructionsFrom(): string
    {
        return $this->email_instructions_from;
    }

    /**
     * @param string $email_instructions_from
     */
    public function setEmailInstructionsFrom(string $email_instructions_from)
    {
        $this->email_instructions_from = $email_instructions_from;
    }

    /**
     * @return string
     */
    public function getEmailInstructionsSubject(): string
    {
        return $this->email_instructions_subject;
    }

    /**
     * @param string $email_instructions_subject
     */
    public function setEmailInstructionsSubject(string $email_instructions_subject)
    {
        $this->email_instructions_subject = $email_instructions_subject;
    }

    /**
     * @return bool
     */
    public function isEnableOfferWhitelist(): bool
    {
        return $this->enable_offer_whitelist;
    }

    /**
     * @param bool $enable_offer_whitelist
     */
    public function setEnableOfferWhitelist(bool $enable_offer_whitelist)
    {
        $this->enable_offer_whitelist = $enable_offer_whitelist;
    }

    /**
     * @return bool
     */
    public function isEnforceEncryptTrackingPixels(): bool
    {
        return $this->enforce_encrypt_tracking_pixels;
    }

    /**
     * @param bool $enforce_encrypt_tracking_pixels
     */
    public function setEnforceEncryptTrackingPixels(bool $enforce_encrypt_tracking_pixels)
    {
        $this->enforce_encrypt_tracking_pixels = $enforce_encrypt_tracking_pixels;
    }

    /**
     * @return bool
     */
    public function isEnforceGeoTargeting(): bool
    {
        return $this->enforce_geo_targeting;
    }

    /**
     * @param bool $enforce_geo_targeting
     */
    public function setEnforceGeoTargeting(bool $enforce_geo_targeting)
    {
        $this->enforce_geo_targeting = $enforce_geo_targeting;
    }

    /**
     * @return bool
     */
    public function isEnforceSecureTrackingLink(): bool
    {
        return $this->enforce_secure_tracking_link;
    }

    /**
     * @param bool $enforce_secure_tracking_link
     */
    public function setEnforceSecureTrackingLink(bool $enforce_secure_tracking_link)
    {
        $this->enforce_secure_tracking_link = $enforce_secure_tracking_link;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate(): \DateTime
    {
        return $this->expiration_date;
    }

    /**
     * @param \DateTime $expiration_date
     */
    public function setExpirationDate(\DateTime $expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    /**
     * @return mixed
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * @param mixed $featured
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    }

    /**
     * @return bool
     */
    public function isHasGoalsEnabled(): bool
    {
        return $this->has_goals_enabled;
    }

    /**
     * @param bool $has_goals_enabled
     */
    public function setHasGoalsEnabled(bool $has_goals_enabled)
    {
        $this->has_goals_enabled = $has_goals_enabled;
    }

    /**
     * @return int
     */
    public function getHostnameId(): int
    {
        return $this->hostname_id;
    }

    /**
     * @param int $hostname_id
     */
    public function setHostnameId(int $hostname_id)
    {
        $this->hostname_id = $hostname_id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return $this->is_expired;
    }

    /**
     * @param bool $is_expired
     */
    public function setIsExpired(bool $is_expired)
    {
        $this->is_expired = $is_expired;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->is_private;
    }

    /**
     * @param bool $is_private
     */
    public function setIsPrivate(bool $is_private)
    {
        $this->is_private = $is_private;
    }

    /**
     * @return bool
     */
    public function isSeoFriendly301(): bool
    {
        return $this->is_seo_friendly_301;
    }

    /**
     * @param bool $is_seo_friendly_301
     */
    public function setIsSeoFriendly301(bool $is_seo_friendly_301)
    {
        $this->is_seo_friendly_301 = $is_seo_friendly_301;
    }

    /**
     * @return bool
     */
    public function isSubscription(): bool
    {
        return $this->is_subscription;
    }

    /**
     * @param bool $is_subscription
     */
    public function setIsSubscription(bool $is_subscription)
    {
        $this->is_subscription = $is_subscription;
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
     * @return float
     */
    public function getMaxPayout(): float
    {
        return $this->max_payout;
    }

    /**
     * @param float $max_payout
     */
    public function setMaxPayout(float $max_payout)
    {
        $this->max_payout = $max_payout;
    }

    /**
     * @return float
     */
    public function getMaxPercentPayout(): float
    {
        return $this->max_percent_payout;
    }

    /**
     * @param float $max_percent_payout
     */
    public function setMaxPercentPayout(float $max_percent_payout)
    {
        $this->max_percent_payout = $max_percent_payout;
    }

    /**
     * @return \Datetime
     */
    public function getModified(): \Datetime
    {
        return $this->modified;
    }

    /**
     * @param \Datetime $modified
     */
    public function setModified(\Datetime $modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return int
     */
    public function getMonthlyConversionCap(): int
    {
        return $this->monthly_conversion_cap;
    }

    /**
     * @param int $monthly_conversion_cap
     */
    public function setMonthlyConversionCap(int $monthly_conversion_cap)
    {
        $this->monthly_conversion_cap = $monthly_conversion_cap;
    }

    /**
     * @return float
     */
    public function getMonthlyPayoutCap(): float
    {
        return $this->monthly_payout_cap;
    }

    /**
     * @param float $monthly_payout_cap
     */
    public function setMonthlyPayoutCap(float $monthly_payout_cap)
    {
        $this->monthly_payout_cap = $monthly_payout_cap;
    }

    /**
     * @return float
     */
    public function getMonthlyRevenueCap(): float
    {
        return $this->monthly_revenue_cap;
    }

    /**
     * @param float $monthly_revenue_cap
     */
    public function setMonthlyRevenueCap(float $monthly_revenue_cap)
    {
        $this->monthly_revenue_cap = $monthly_revenue_cap;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getOfferUrl(): string
    {
        return $this->offer_url;
    }

    /**
     * @param string $offer_url
     */
    public function setOfferUrl(string $offer_url)
    {
        $this->offer_url = $offer_url;
    }

    /**
     * @return float
     */
    public function getPayoutCap(): float
    {
        return $this->payout_cap;
    }

    /**
     * @param float $payout_cap
     */
    public function setPayoutCap(float $payout_cap)
    {
        $this->payout_cap = $payout_cap;
    }

    /**
     * @return string
     */
    public function getPayoutType(): string
    {
        return $this->payout_type;
    }

    /**
     * @param string $payout_type
     */
    public function setPayoutType(string $payout_type)
    {
        $this->payout_type = $payout_type;
    }

    /**
     * @return float
     */
    public function getPercentPayout(): float
    {
        return $this->percent_payout;
    }

    /**
     * @param float $percent_payout
     */
    public function setPercentPayout(float $percent_payout)
    {
        $this->percent_payout = $percent_payout;
    }

    /**
     * @return string
     */
    public function getPreviewUrl(): string
    {
        return $this->preview_url;
    }

    /**
     * @param string $preview_url
     */
    public function setPreviewUrl(string $preview_url)
    {
        $this->preview_url = $preview_url;
    }

    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getRedirectOfferId(): int
    {
        return $this->redirect_offer_id;
    }

    /**
     * @param int $redirect_offer_id
     */
    public function setRedirectOfferId(int $redirect_offer_id)
    {
        $this->redirect_offer_id = $redirect_offer_id;
    }

    /**
     * @return string
     */
    public function getRefId(): string
    {
        return $this->ref_id;
    }

    /**
     * @param string $ref_id
     */
    public function setRefId(string $ref_id)
    {
        $this->ref_id = $ref_id;
    }

    /**
     * @return bool
     */
    public function isRequireApproval(): bool
    {
        return $this->require_approval;
    }

    /**
     * @param bool $require_approval
     */
    public function setRequireApproval(bool $require_approval)
    {
        $this->require_approval = $require_approval;
    }

    /**
     * @return string
     */
    public function getRequireTermsAndConditions(): string
    {
        return $this->require_terms_and_conditions;
    }

    /**
     * @param string $require_terms_and_conditions
     */
    public function setRequireTermsAndConditions(string $require_terms_and_conditions)
    {
        $this->require_terms_and_conditions = $require_terms_and_conditions;
    }

    /**
     * @return float
     */
    public function getRevenueCap(): float
    {
        return $this->revenue_cap;
    }

    /**
     * @param float $revenue_cap
     */
    public function setRevenueCap(float $revenue_cap)
    {
        $this->revenue_cap = $revenue_cap;
    }

    /**
     * @return string
     */
    public function getRevenueType(): string
    {
        return $this->revenue_type;
    }

    /**
     * @param string $revenue_type
     */
    public function setRevenueType(string $revenue_type)
    {
        $this->revenue_type = $revenue_type;
    }

    /**
     * @return int
     */
    public function getSessionHours(): int
    {
        return $this->session_hours;
    }

    /**
     * @param int $session_hours
     */
    public function setSessionHours(int $session_hours)
    {
        $this->session_hours = $session_hours;
    }

    /**
     * @return int
     */
    public function getSessionImpressionHours(): int
    {
        return $this->session_impression_hours;
    }

    /**
     * @param int $session_impression_hours
     */
    public function setSessionImpressionHours(int $session_impression_hours)
    {
        $this->session_impression_hours = $session_impression_hours;
    }

    /**
     * @return bool
     */
    public function isSetSessionOnImpression(): bool
    {
        return $this->set_session_on_impression;
    }

    /**
     * @param bool $set_session_on_impression
     */
    public function setSetSessionOnImpression(bool $set_session_on_impression)
    {
        $this->set_session_on_impression = $set_session_on_impression;
    }

    /**
     * @return bool
     */
    public function isShowCustomVariables(): bool
    {
        return $this->show_custom_variables;
    }

    /**
     * @param bool $show_custom_variables
     */
    public function setShowCustomVariables(bool $show_custom_variables)
    {
        $this->show_custom_variables = $show_custom_variables;
    }

    /**
     * @return bool
     */
    public function isShowMailList(): bool
    {
        return $this->show_mail_list;
    }

    /**
     * @param bool $show_mail_list
     */
    public function setShowMailList(bool $show_mail_list)
    {
        $this->show_mail_list = $show_mail_list;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getSubscriptionDuration(): int
    {
        return $this->subscription_duration;
    }

    /**
     * @param int $subscription_duration
     */
    public function setSubscriptionDuration(int $subscription_duration)
    {
        $this->subscription_duration = $subscription_duration;
    }

    /**
     * @return string
     */
    public function getSubscriptionFrequency(): string
    {
        return $this->subscription_frequency;
    }

    /**
     * @param string $subscription_frequency
     */
    public function setSubscriptionFrequency(string $subscription_frequency)
    {
        $this->subscription_frequency = $subscription_frequency;
    }

    /**
     * @deprecated
     * @return int
     */
    public function getTargetBrowsers(): int
    {
        return $this->target_browsers;
    }

    /**
     * @deprecated
     * @param int $target_browsers
     */
    public function setTargetBrowsers(int $target_browsers)
    {
        $this->target_browsers = $target_browsers;
    }

    /**
     * @return string
     */
    public function getTermsAndConditions(): string
    {
        return $this->terms_and_conditions;
    }

    /**
     * @param string $terms_and_conditions
     */
    public function setTermsAndConditions(string $terms_and_conditions)
    {
        $this->terms_and_conditions = $terms_and_conditions;
    }

    /**
     * @return bool
     */
    public function isTieredPayout(): bool
    {
        return $this->tiered_payout;
    }

    /**
     * @param bool $tiered_payout
     */
    public function setTieredPayout(bool $tiered_payout)
    {
        $this->tiered_payout = $tiered_payout;
    }

    /**
     * @return bool
     */
    public function isTieredRevenue(): bool
    {
        return $this->tiered_revenue;
    }

    /**
     * @param bool $tiered_revenue
     */
    public function setTieredRevenue(bool $tiered_revenue)
    {
        $this->tiered_revenue = $tiered_revenue;
    }

    /**
     * @return bool
     */
    public function isUsePayoutGroups(): bool
    {
        return $this->use_payout_groups;
    }

    /**
     * @param bool $use_payout_groups
     */
    public function setUsePayoutGroups(bool $use_payout_groups)
    {
        $this->use_payout_groups = $use_payout_groups;
    }

    /**
     * @return bool
     */
    public function isUseRevenueGroups(): bool
    {
        return $this->use_revenue_groups;
    }

    /**
     * @param bool $use_revenue_groups
     */
    public function setUseRevenueGroups(bool $use_revenue_groups)
    {
        $this->use_revenue_groups = $use_revenue_groups;
    }

    /**
     * @return bool
     */
    public function isUseTargetRules(): bool
    {
        return $this->use_target_rules;
    }

    /**
     * @param bool $use_target_rules
     */
    public function setUseTargetRules(bool $use_target_rules)
    {
        $this->use_target_rules = $use_target_rules;
    }

    /**
     * @return bool
     */
    public function isWebsiteLinksCopyStaticParams(): bool
    {
        return $this->website_links_copy_static_params;
    }

    /**
     * @param bool $website_links_copy_static_params
     */
    public function setWebsiteLinksCopyStaticParams(bool $website_links_copy_static_params)
    {
        $this->website_links_copy_static_params = $website_links_copy_static_params;
    }

}