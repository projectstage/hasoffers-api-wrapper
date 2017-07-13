<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/13/17
 * Time: 5:10 PM
 */

namespace HasOffersApiTests;

use HasOffersApi\HasOffersApi;
use HasOffersApi\Offer;
use PHPUnit\Framework\TestCase;

class OfferTest extends TestCase
{
    public function testInitializer(): void
    {
        $HasOfferApi = new HasOffersApi('troop','abjnrnu8c2n7yjgg9pb8wmjx5qzq785nxwss5n9rkxrs2cmge9ju7bv8awxpzj9p');

        $Offer = new Offer($HasOfferApi);
        $list = $Offer->getFieldsList();
        $this->assertObjectHasAttribute('expiration_date', $list);
    }
}
