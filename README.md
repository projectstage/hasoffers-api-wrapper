# HasoffersApiWrapper

[![Packagist](	https://img.shields.io/packagist/v/projectstage/hasoffers-api-wrapper.svg)](https://packagist.org/packages/projectstage/hasoffers-api-wrapper)
[![Software License][ico-license]](LICENSE.md)
[![build status](https://travis-ci.org/projectstage/hasoffers-api-wrapper.svg)](https://travis-ci.org/projectstage/hasoffers-api-wrapper)
[![Coverage Status](https://coveralls.io/repos/github/projectstage/hasoffers-api-wrapper/badge.svg)](https://coveralls.io/github/projectstage/hasoffers-api-wrapper)


**Note:** Replace ```:author_name``` ```:author_username``` ```:author_website``` ```:author_email``` ```:vendor``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require projectstage/hasoffers-api-wrapper
```

## Basic Usage

``` php
$HasOffersApi = new HasOffersApi('troop', 'dfgd876sdf876b876sfg8bwt23g37fbsd7fgw');
$HasOffersApi->setLimit(20);

$Offer = new Offer($HasOffersApi);
$result = $Offer->findAll();
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

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [Carsten Lorenz][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors