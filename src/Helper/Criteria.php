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

    CONST OR = 'OR';
    CONST NOT_EQUAL_TO = 'NOT_EQUAL_TO';                        // sample: &filters[status][NOT_EQUAL_TO]=active
    CONST LESS_THAN = 'LESS_THAN';                              // sample: &filters[id][LESS_THAN]=25
    CONST LESS_THAN_OR_EQUAL_TO = 'LESS_THAN_OR_EQUAL_TO';      // sample: &filters[id][LESS_THAN_OR_EQUAL_TO]=25
    CONST GREATER_THAN = 'GREATER_THAN';                        // sample: &filters[id][GREATER_THAN]=25
    CONST GREATER_THAN_OR_EQUAL_TO = 'GREATER_THAN_OR_EQUAL_TO';// sample: &filters[id][GREATER_THAN_OR_EQUAL_TO]=25
    CONST LIKE = 'LIKE';                                        // sample: &filters[name][LIKE]=Atomic Tilt%
    CONST NOT_LIKE = 'NOT_LIKE';                                // sample: &filters[name][NOT_LIKE]=%Free%
    CONST NULL = 'NULL';                                        // sample: &filters[description][NULL]=1
    CONST NOT_NULL = 'NOT_NULL';                                // sample: &filters[description][NOT_NULL]=1
    CONST TRUE = 'TRUE';                                        // sample: &filters[is_private][TRUE]=1
    CONST FALSE = 'FALSE';                                      // sample: &filters[is_private][FALSE]=1

    CONST EQUAL_TO = 'EQUAL_TO';
    CONST BETWEEN = 'BETWEEN';


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
     * @var string
     */
    protected $model_list_file_name = 'model_list.json';

    /**
     * Criteria constructor.
     * @param string $target
     * @param string $method
     * @param array $params
     * @throws \Exception
     */
    public function __construct(string $target, string $method, array $params = [])
    {
        $target_list = $this->getTargets();

        if(in_array($target, $target_list) === true) {

            $method_list = $this->getTargetMethods($target);

            if(in_array($method, $method_list) === true) {

                $this->criteria['Target'] = $target;
                $this->criteria['Method'] = $method;

                $this->current_target = $target;
                $this->current_method = $method;

                if(count($params) > 0){
                    foreach($params as $key => $value) {
                        $this->criteria[$key] = $value;
                    }
                }

            } else {
                throw new \Exception('Method "'.$method.'" not found.');
            }
        } else {
            throw new \Exception('Target "'.$target.'" not found.');
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
    private function getTargetMethods(string $target)
    {
        $targetHelper = new TargetHelper($this->getResourcesPath().$this->target_list_file_name);
        return $targetHelper->getTargetMethods($target);
    }

    /**
     * @return array
     */
    private function getModels()
    {
        $modelHelper = new ModelHelper($this->getResourcesPath().$this->model_list_file_name);
        return $modelHelper->getModels();
    }

    /**
     * @param string $model
     * @return array
     */
    private function getModelColumns(string $model)
    {
        $modelHelper = new ModelHelper($this->getResourcesPath().$this->model_list_file_name);
        return $modelHelper->getModelColumns($model);
    }

    /**
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     * @throws \Exception
     */
    public function andFilter(string $column, $value, string $criteria = '')
    {
        switch($criteria) {
            case self::EQUAL_TO:
            case self::BETWEEN:
                return $this->addConditionalFilter($column, $value, $criteria);
                break;
        }

        if($criteria !== '') {
            $this->criteria[self::PARAM_INDEX_FILTERS][$column][$criteria] = $value;
        } else {
            $this->criteria[self::PARAM_INDEX_FILTERS][$column] = $value;
        }

        return $this;
    }

    /**
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     * @throws \Exception
     */
    public function orFilter(string $column, $value, string $criteria = '')
    {
        switch($criteria) {
            case self::EQUAL_TO:
            case self::BETWEEN:
                return $this->addConditionalFilter($column, $value, $criteria);
                break;
        }

        if($criteria !== '') {
            $this->criteria[self::PARAM_INDEX_FILTERS][self::OR][$column][$criteria] = $value;
        } else {
            $this->criteria[self::PARAM_INDEX_FILTERS][self::OR][$column] = $value;
        }

        return $this;
    }

    /**
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     * @throws \Exception
     */
    public function addConditionalFilter(string $column, $value, string $criteria)
    {
        if(is_array($value) === false || count($value) < 1) {
            throw new \Exception('You are using conditional filters. Therefore your $value parmater has to be an array with at least one entry.');
        }

        if($criteria === '') {
            $criteria = self::EQUAL_TO;
        }

        if($criteria === self::BETWEEN && count($value) != 2) {
            throw new \Exception('You are using conditional filters with scope "'.self::BETWEEN.'". Therefore your $value parmater has to be an array with two entries.');
        }

        $this->criteria[self::PARAM_INDEX_FILTERS][$column][self::PARAM_INDEX_CONDITIONAL] = $criteria;

        // &filters[Offer.name][conditional]=LIKE&[Offer.name][values]=%gift card%
        // &filters[Stat.date][conditional]=BETWEEN&filters[Stat.date][values][0]=2013-12-29&filters[Stat.date][values][1]=2014-01-03
        // &filters[status][conditional]=EQUAL_TO&filters[status][values][0]=active&filters[status][values][1]=pending

        // https://psflc.api.hasoffers.com/Apiv3/json?
        //
        // NetworkToken=abjnrnu8c2n7yjgg9pb8wmjx5qzq785nxwss5n9rkxrs2cmge9ju7bv8awxpzj9p&
        //Target=Offer&
        //Method=findAll&
        //filters[id][GREATER_THAN_OR_EQUAL_TO]=2&
        //filters[OR][advertiser_id][GREATER_THAN]=12&
        //filters[create_date_utc][conditional]=BETWEEN&
        //filters[create_date_utc][values][0]=2017-02-01&filters[create_date_utc][values][1]=2017-07-12&

        //filters[create_date_utc][BETWEEN][0]=2017-02-01&filters[create_date_utc][BETWEEN][1]=2017-07-12&limit=22

        foreach($value as $v) {
            $this->criteria[self::PARAM_INDEX_FILTERS][$column][self::PARAM_INDEX_CONDITIONAL_VALUES][] = $v;
        }

        return $this;

    }

    /**
     * @return string
     */
    public function getCurrentTarget(): string
    {
        return $this->current_target;
    }

    /**
     * @return string
     */
    public function getCurrentMethod(): string
    {
        return $this->current_method;
    }

    /**
     * @return array
     */
    public function getCriteria(): array
    {
        return $this->criteria;
    }

    // curl https://troop.api.hasoffers.com/Apiv3/json?
    // NetworkToken=fasfasdfasdfasfasfasd&
    // Target=Offer&
    // Method=findAll&
    // fields[]=conversion_cap&fields[]=allow_multiple_conversions&
    // filters[currency]=EUR&filters[allow_website_links]=0&
    // sort[converted_offer_id]=desc&sort[allow_website_links]=desc&
    // limit=22&
    // contain[]=Goal


}