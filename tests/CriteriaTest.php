<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/13/17
 * Time: 5:10 PM
 */

namespace HasOffersApiTests;

use HasOffersApi\Helper\Criteria;
use PHPUnit\Framework\TestCase;

/**
 * Class CriteriaTest
 * @package HasOffersApiTests
 */
class CriteriaTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSetCurrentTarget($target, $method): void
    {
        $CriteriaTest = new Criteria($target, $method);

        $current_target = $CriteriaTest->getCurrentTarget();
        $this->assertEquals($target, $current_target);

    }

    /**
     * @dataProvider dataProvider
     */
    public function testSetCurrentMethod($target, $method): void
    {
        $CriteriaTest = new Criteria($target, $method);

        $current_method = $CriteriaTest->getCurrentMethod();
        $this->assertEquals($method, $current_method);

    }

    public function dataProvider()
    {
        return [
            ['Offer', 'findAll']
        ];
    }
}
