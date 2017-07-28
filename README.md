# HasOffersApiWrapper

[![Packagist](https://img.shields.io/packagist/v/projectstage/hasoffers-api-wrapper.svg)](https://packagist.org/packages/projectstage/hasoffers-api-wrapper)
[![Software License][ico-license]](LICENSE.md)
[![build status](https://travis-ci.org/projectstage/hasoffers-api-wrapper.svg)](https://travis-ci.org/projectstage/hasoffers-api-wrapper)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require projectstage/hasoffers-api-wrapper
```

## Basic Usage

There is no rocket sience. Instantiate your HasOffers client with your authentication data, set soem criterias and finally call the API. More
information about how to uthenticate with the HasOffers API you'll find here 
[setting-up-api-authentication](https://developers.tune.com/network-docs/setting-up-api-authentication/).

``` php

// instantiate HasOffers client
$HasOfferClient = new \HasOffersApi\HasOffersClient('YOUR-NETWORK-ID','YOUR-API-KEY');

// setup criteria - here: From which controller you want to call which method
$Criteria = new \HasOffersApi\Helper\Criteria('Offer', 'findAll');

// finally make the API call
$offers = $HasOfferClient->callApi();

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
