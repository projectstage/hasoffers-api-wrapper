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
    public function testSetCurrentTargetSuccess($target, $method)
    {
        $CriteriaTest = new Criteria($target, $method);

        $current_target = $CriteriaTest->getCurrentTarget();
        $this->assertEquals($target, $current_target);

    }

    /**
     * @dataProvider dataProvider
     */
    public function testSetCurrentMethodSuccess($target, $method)
    {
        $CriteriaTest = new Criteria($target, $method);

        $current_method = $CriteriaTest->getCurrentMethod();
        $this->assertEquals($method, $current_method);

    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetCriteriaSuccess($target, $method)
    {
        $CriteriaTest = new Criteria($target, $method);

        $criteria = $CriteriaTest->getCriteria();
        $this->assertArrayHasKey('Target', $criteria);
        $this->assertArrayHasKey('Method', $criteria);

    }

    /**
     * @dataProvider dataProvider
     */
    public function testAndFilterWithColumnSuccess($target, $method, $column, $value)
    {
        $CriteriaTest = new Criteria($target, $method);

        $CriteriaTest->andFilter($column, $value);

        $criteria = $CriteriaTest->getCriteria();
        $this->assertArrayHasKey($column, $criteria['filters']);

    }

    /**
     * @dataProvider dataProvider
     */
    public function testOrFilterWithColumnSuccess($target, $method, $column, $value)
    {
        $CriteriaTest = new Criteria($target, $method);

        $CriteriaTest->orFilter($column, $value);

        $criteria = $CriteriaTest->getCriteria();
        $this->assertArrayHasKey($column, $criteria['filters']['OR']);

    }

    /**
     * @dataProvider dataProvider
     */
    public function testAndFilterWithColumnAndCriteriaSuccess($target, $method, $column, $value, $criteria)
    {
        $CriteriaTest = new Criteria($target, $method);

        $CriteriaTest->andFilter($column, $value, $criteria);

        $criterias = $CriteriaTest->getCriteria();
        $this->assertArrayHasKey('filters', $criterias);
        $this->assertArrayHasKey($criteria, $criterias['filters'][$column]);

    }

    public function dataProvider()
    {
        return [
            ['Offer', 'findAll', 'id', 1, 'LIKE'],
            ['Offer', 'findById', 'id', 2, 'NULL']
        ];
    }
}
