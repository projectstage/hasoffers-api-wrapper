<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/15/17
 * Time: 5:08 PM
 */

namespace HasOffersApi\Helper;


/**
 * Class Criteria
 * @package HasOffersApi\Helper
 */
class Criteria
{
    CONST TARGET_INDEX = 'Target';
    CONST METHOD_INDEX = 'Method';

    CONST FILTER_OR = 'OR';
    CONST FILTER_NOT_EQUAL_TO = 'NOT_EQUAL_TO';                        // sample: &filters[status][NOT_EQUAL_TO]=active
    CONST FILTER_LESS_THAN = 'LESS_THAN';                              // sample: &filters[id][LESS_THAN]=25
    CONST FILTER_LESS_THAN_OR_EQUAL_TO = 'LESS_THAN_OR_EQUAL_TO';      // sample: &filters[id][LESS_THAN_OR_EQUAL_TO]=25
    CONST FILTER_GREATER_THAN = 'GREATER_THAN';                        // sample: &filters[id][GREATER_THAN]=25
    CONST FILTER_GREATER_THAN_OR_EQUAL_TO = 'GREATER_THAN_OR_EQUAL_TO';// sample: &filters[id][GREATER_THAN_OR_EQUAL_TO]=25
    CONST FILTER_LIKE = 'LIKE';                                        // sample: &filters[name][LIKE]=Atomic Tilt%
    CONST FILTER_NOT_LIKE = 'NOT_LIKE';                                // sample: &filters[name][NOT_LIKE]=%Free%
    CONST FILTER_NULL = 'NULL';                                        // sample: &filters[description][NULL]=1
    CONST FILTER_NOT_NULL = 'NOT_NULL';                                // sample: &filters[description][NOT_NULL]=1
    CONST FILTER_TRUE = 'TRUE';                                        // sample: &filters[is_private][TRUE]=1
    CONST FILTER_FALSE = 'FALSE';                                      // sample: &filters[is_private][FALSE]=1

    CONST FILTER_EQUAL_TO = 'EQUAL_TO';
    CONST FILTER_BETWEEN = 'BETWEEN';


    CONST PARAM_INDEX_FILTERS = 'filters';
    CONST PARAM_INDEX_CONDITIONAL = 'conditional';
    CONST PARAM_INDEX_CONDITIONAL_VALUES = 'values';

    /**
     * @var string
     */
    protected $current_target;

    /**
     * @var string
     */
    protected $current_method;

    /**
     * @var array
     */
    protected $criteria = [];

    /**
     * @var string
     */
    protected $resources_folder_name = 'Resources';

    /**
     * @var string
     */
    protected $target_list_file_name = 'target_list.json';

    /**
     * Criteria constructor.
     * @param string $target
     * @param string $method
     * @param array $params
     * @throws \Exception
     */
    public function __construct($target, $method, $params = [])
    {
        $target_list = $this->getTargets();

        if(in_array($target, $target_list) === true) {

            $method_list = $this->getTargetMethods($target);

            if(in_array($method, $method_list) === true) {

                $this->criteria[self::TARGET_INDEX] = $target;
                $this->criteria[self::METHOD_INDEX] = $method;

                $this->current_target = $target;
                $this->current_method = $method;

                if(count($params) > 0){
                    foreach($params as $key => $value) {
                        $this->criteria[$key] = $value;
                    }
                }

            } else {
                throw new \Exception(self::METHOD_INDEX.' "'.$method.'" not found.');
            }
        } else {
            throw new \Exception(self::TARGET_INDEX.' "'.$target.'" not found.');
        }

    }

    /**
     * Return absolute path of resource folder. This will be used for reading resource JSON files
     * @return string
     */
    private function getResourcesPath()
    {
        return __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.$this->resources_folder_name.DIRECTORY_SEPARATOR;
    }

    /**
     * @return array
     */
    private function getTargets()
    {
        $targetHelper = new TargetHelper($this->getResourcesPath().$this->target_list_file_name);
        return $targetHelper->getTargets();
    }

    /**
     * @param string $target
     * @return array
     */
    private function getTargetMethods($target)
    {
        $targetHelper = new TargetHelper($this->getResourcesPath().$this->target_list_file_name);
        return $targetHelper->getTargetMethods($target);
    }

    /**
     * This is the usual filter function - search for a AND b AND c AND d ...
     *
     * @see https://developers.tune.com/network-docs/filtering-sorting-paging/#filtering
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     * @throws \Exception
     */
    public function andFilter($column, $value, $criteria = '')
    {
        switch($criteria) {
            case self::FILTER_EQUAL_TO:
            case self::FILTER_BETWEEN:
                return $this->conditionalFilter($column, $value, $criteria);
                break;
        }

        unset($this->criteria[self::PARAM_INDEX_FILTERS][self::FILTER_OR]);

        if($criteria !== '') {
            $this->criteria[self::PARAM_INDEX_FILTERS][$column][$criteria] = $value;
        } else {
            $this->criteria[self::PARAM_INDEX_FILTERS][$column] = $value;
        }

        return $this;
    }

    /**
     * Declare an filter OR statement
     *
     * @see https://developers.tune.com/network-docs/filtering-sorting-paging/#filtering
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     * @throws \Exception
     */
    public function orFilter($column, $value, $criteria = '')
    {
        switch($criteria) {
            case self::FILTER_EQUAL_TO:
            case self::FILTER_BETWEEN:
                return $this->conditionalFilter($column, $value, $criteria);
                break;
        }

        unset($this->criteria[self::PARAM_INDEX_FILTERS][$column]);

        if($criteria !== '') {
            $this->criteria[self::PARAM_INDEX_FILTERS][self::FILTER_OR][$column][$criteria] = $value;
        } else {
            $this->criteria[self::PARAM_INDEX_FILTERS][self::FILTER_OR][$column] = $value;
        }

        return $this;
    }

    /**
     *
     * @see https://developers.tune.com/network-docs/filtering-sorting-paging/#report-filtering
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     * @throws \Exception
     */
    public function conditionalFilter($column, $value, $criteria)
    {
        if(is_array($value) === false || count($value) < 1) {
            throw new \Exception('You are using conditional filters. Therefore your $value parmater has to be an array with at least one entry.');
        }

        if($criteria === '') {
            $criteria = self::FILTER_EQUAL_TO;
        }

        if($criteria === self::FILTER_BETWEEN && count($value) != 2) {
            throw new \Exception('You are using conditional filters with scope "'.self::FILTER_BETWEEN.'". Therefore your $value parmater has to be an array with two entries.');
        }

        unset($this->criteria[self::PARAM_INDEX_FILTERS][self::FILTER_OR]);

        $this->criteria[self::PARAM_INDEX_FILTERS][$column][self::PARAM_INDEX_CONDITIONAL] = $criteria;

        foreach($value as $v) {
            $this->criteria[self::PARAM_INDEX_FILTERS][$column][self::PARAM_INDEX_CONDITIONAL_VALUES][] = $v;
        }

        return $this;

    }

    /**
     * @return string
     */
    public function getCurrentTarget()
    {
        return $this->current_target;
    }

    /**
     * @return string
     */
    public function getCurrentMethod()
    {
        return $this->current_method;
    }

    /**
     * @return array
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

}