<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/12/17
 * Time: 10:36 AM
 */

require_once __DIR__.'/vendor/autoload.php';

$HasOfferApi = new \HasOffersApi\HasOffersApi('troop','abjnrnu8c2n7yjgg9pb8wmjx5qzq785nxwss5n9rkxrs2cmge9ju7bv8awxpzj9p');

$Offer = new \HasOffersApi\Offer($HasOfferApi);
$Offer->useHasOffersApi()->setLimit(22);

$result = $Offer->findAll();

var_dump($result);

$Offer->findAllByIds([1,45,67]);

var_dump(http_build_query([]));
