# HasOffersApiWrapper

[![Packagist](https://img.shields.io/packagist/v/projectstage/hasoffers-api-wrapper.svg)](https://packagist.org/packages/projectstage/hasoffers-api-wrapper)
[![Software License][ico-license]](LICENSE.md)
[![build status](https://travis-ci.org/projectstage/hasoffers-api-wrapper.svg)](https://travis-ci.org/projectstage/hasoffers-api-wrapper)

[HasOffers](http://www.hasoffers.com/) take your performance marketing to the next level. Either you could use their admin panel to setup your marketing campaign and handle
everything there (get stats for leads, sales, revenues, clicks, your publisher and so much more ...). But maybe you would like to build your
own application to integrate that kind of data within your business flow.

Therefore you can use HasOffers API. This wrapper package hopefully gives you an easy to use set of OOP methods to make your API calls without
having too much hassle.

## Install

Via Composer

```bash
$ composer require projectstage/hasoffers-api-wrapper
```

## Basic Usage

There is no rocket sience. Instantiate a HasOffers client with your authentication data, set some criterias and finally call the API. More
information about how to authenticate with the HasOffers API you'll find here: 
[setting-up-api-authentication](https://developers.tune.com/network-docs/setting-up-api-authentication/).

Information about the return field names and values you'll get e.g. for "Offer" [here](https://developers.tune.com/network-models/offer/)

```php

require_once __DIR__.'/vendor/autoload.php';

// your target controller name
$target = 'Offer';

// instantiate HasOffers client
$HasOfferClient = new \HasOffersApi\HasOffersClient('YOUR-NETWORK-ID','YOUR-API-KEY');

// setup criteria - here: From which controller you want to call which method
$Criteria = new \HasOffersApi\Helper\Criteria($target, 'findAll');

// set the criterias
$HasOfferClient->setFilters($Criteria);

// finally make the API call
// will return a stdClass object
$offers = $HasOfferClient->callApi();

// output the HasOffers campaign name
foreach($offers as $offer) {
    echo $offer->{$target}->name."\n";
}

```

## Extend Criteria

### andFilter

You can define as many *andFilter* as you want. Unfortunately a combination of *andFilter* + *orFilter* is not possible.
From point of development you could notate it like e.g.

```php
$Criteria
    ->andFilter('name', '%Love%', $Criteria::FILTER_LIKE)
    ->andFilter('advertiser_id',2)
    ->orFilter('name', '%live%', $Criteria::FILTER_LIKE);
```

but the very last entry counts. In the above example the both *andFilter* will be ignored so the MySql equivalent would
look like this:

```mysql
SELECT * FROM `Offer` WHERE `name` LIKE '%live%';
```

Assuming the *orFilter* would be the very first entry than both *andFilter* are active:

```mysql
SELECT * FROM `Offer` WHERE `name` LIKE '%Love%' AND `advertiser_id` = 2;
```

Finally here a short example of using one, or multiple *andFilter*:

```php

require_once __DIR__.'/vendor/autoload.php';

// your target controller name
$target = 'Offer';

// instantiate HasOffers client
$HasOfferClient = new \HasOffersApi\HasOffersClient('YOUR-NETWORK-ID','YOUR-API-KEY');

// setup criteria - here: From which controller you want to call which method
$Criteria = new \HasOffersApi\Helper\Criteria($target, 'findAll');

// find all offer where field name contains "YOUR-SEARCH-TERM"
// MySQL equivalent: SELECT FROM `Offer` WHERE `name` LIKE '%YOUR-SEARCH-TERM%'
$Criteria->andFilter('name', '%YOUR-SEARCH-TERM%', $Criteria::FILTER_LIKE);

// another example
// maybe you would like to use more AND combinations
// MySQL equivalent: SELECT FROM `Offer` WHERE `name` LIKE '%YOUR-SEARCH-TERM%' AND `advertiser_id` = 2
$Criteria
    ->andFilter('name', '%Love%', $Criteria::FILTER_LIKE)
    ->andFilter('advertiser_id',2);

// set the criterias
$HasOfferClient->setFilters($Criteria);

// finally make the API call
$offers = $HasOfferClient->callApi();

```

### orFilter

Here we have the same restricitons as for the *andFilter*, both you can't combine.

```php

require_once __DIR__.'/vendor/autoload.php';

// your target controller name
$target = 'Offer';

// instantiate HasOffers client
$HasOfferClient = new \HasOffersApi\HasOffersClient('YOUR-NETWORK-ID','YOUR-API-KEY');

// setup criteria - here: From which controller you want to call which method
$Criteria = new \HasOffersApi\Helper\Criteria($target, 'findAll');

// find all offer where field name contains "YOUR-SEARCH-TERM"
// MySQL equivalent: SELECT FROM `Offer` WHERE `name` LIKE '%YOUR-SEARCH-TERM%'
$Criteria->orFilter('name', '%YOUR-SEARCH-TERM%', $Criteria::FILTER_LIKE);

// another example
// maybe you would like to use more AND combinations
// MySQL equivalent: SELECT FROM `Offer` WHERE `name` LIKE '%YOUR-SEARCH-TERM%' OR `advertiser_id` = 2
$Criteria
    ->orFilter('name', '%Love%', $Criteria::FILTER_LIKE)
    ->orFilter('advertiser_id',2);

// set the criterias
$HasOfferClient->setFilters($Criteria);

// finally make the API call
$offers = $HasOfferClient->callApi();

```

### conditionalFilter

This filter will be used for reporting tasks. For more information about reports at HasOffer please have look [here](https://developers.tune.com/network-docs/filtering-sorting-paging/#report-filtering).

The *conditionalFilter* does not support *orFilter*. Even if you could notate:

```php
$Criteria
    ->conditionalFilter('expiration_date', ['2017-10-01', '2017-10-31'], $Criteria::FILTER_BETWEEN)
    ->orFilter('name', '%live%', $Criteria::FILTER_LIKE);
```

the *orFilter* part will be ignored.

### Criteria FILTER list

```php

Criteria::FILTER_OR;
Criteria::FILTER_NOT_EQUAL_TO;
Criteria::FILTER_LESS_THAN;
Criteria::FILTER_LESS_THAN_OR_EQUAL_TO;
Criteria::FILTER_GREATER_THAN;
Criteria::FILTER_GREATER_THAN_OR_EQUAL_TO;
Criteria::FILTER_LIKE;
Criteria::FILTER_NOT_LIKE;
Criteria::FILTER_NULL;
Criteria::FILTER_NOT_NULL;
Criteria::FILTER_TRUE;
Criteria::FILTER_FALSE;

// used for contitioanlFilter
Criteria::FILTER_EQUAL_TO;
Criteria::FILTER_BETWEEN;

```

## HasOffers client settings

### setFields

Setting some fields means basically that your response should only return the specified fields, not more. The MySql 
equivalent would look like this:

```mysql
SELECT `advertiser_id`, `name`, `preview_url`, `offer_url` FROM `Offer`;
```

```php
$fields = [
    'advertiser_id',
    'name',
    'preview_url',
    'offer_url'
];
$HasOfferClient->setFields($fields);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email [author] instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[author]: carsten.lorenz@projectstage.org
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
