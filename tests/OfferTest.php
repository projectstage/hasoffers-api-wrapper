<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/13/17
 * Time: 5:10 PM
 */

namespace HasOffersApiTests;

use HasOffersApi\HasOffersClient;
use PHPUnit\Framework\TestCase;

class OfferTest extends TestCase
{
    public function testInitializer(): void
    {
        $HasOfferClient = new HasOffersClient('troop','abjnrnu8c2n7yjgg9pb8wmjx5qzq785nxwss5n9rkxrs2cmge9ju7bv8awxpzj9p');


        $HasOfferClient->setLimit(22);
        $limit = $HasOfferClient->getLimit();
        $this->assertEquals('22', $limit);
    }
}
