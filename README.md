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

``` bash
$ composer require projectstage/hasoffers-api-wrapper
```

## Basic Usage

There is no rocket sience. Instantiate a HasOffers client with your authentication data, set some criterias and finally call the API. More
information about how to authenticate with the HasOffers API you'll find here: 
[setting-up-api-authentication](https://developers.tune.com/network-docs/setting-up-api-authentication/).

Information about the return field names and values you'll get e.g. for "Offer" [here](https://developers.tune.com/network-models/offer/)

``` php

// your target controller name
$target = 'Offer';

// instantiate HasOffers client
$HasOfferClient = new \HasOffersApi\HasOffersClient('YOUR-NETWORK-ID','YOUR-API-KEY');

// setup criteria - here: From which controller you want to call which method
$Criteria = new \HasOffersApi\Helper\Criteria($target, 'findAll');

// finally make the API call
// will return a stdClass object
$offers = $HasOfferClient->callApi();

// output the HasOffers campaign name
foreach($offers as $offer) {
    echo $offer->{$target}->name."\n";
}

```

## Extend Criteria

``` php

// instantiate HasOffers client
$HasOfferClient = new \HasOffersApi\HasOffersClient('YOUR-NETWORK-ID','YOUR-API-KEY');

// setup criteria - here: From which controller you want to call which method
$Criteria = new \HasOffersApi\Helper\Criteria('Offer', 'findAll');

// find all offer where field name contains "YOUR-SEARCH-TERM"
// MySQL equivalent: SELECT FROM `Offer` WHERE `name` LIKE '%YOUR-SEARCH-TERM%'
$Criteria->andFilter('name', '%YOUR-SEARCH-TERM%', $Criteria::FILTER_LIKE);

// finally make the API call
$offers = $HasOfferClient->callApi();

```

# Criteria FILTER list

``` php

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
Criteria::FILTER_EQUAL_TO;
Criteria::FILTER_BETWEEN;

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
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
