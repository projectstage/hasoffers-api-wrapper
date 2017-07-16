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
     * @throws \Exception
     */
    public function __construct(string $target, string $method)
    {
        $target_list = $this->getTargets();

        if(in_array($target, $target_list) === true) {

            $method_list = $this->getTargetMethods($target);

            if(in_array($method, $method_list) === true) {

                $this->criteria['Target'] = $target;
                $this->criteria['Method'] = $method;

                $this->current_target = $target;
                $this->current_method = $method;

                $this->columnExists('id');

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
     */
    public function andFilter(string $column, $value, string $criteria = '')
    {

        if($criteria !== '') {
            $this->criteria['filters'][$column][$criteria] = $value;
        } else {
            $this->criteria['filters'][$column] = $value;
        }

        return $this;
    }

    /**
     * @param string $column
     * @param $value
     * @param string $criteria
     * @return $this
     */
    public function orFilter(string $column, $value, string $criteria = '')
    {

        if($criteria !== '') {
            $this->criteria['filters']['OR'][$column][$criteria] = $value;
        } else {
            $this->criteria['filters']['OR'][$column] = $value;
        }

        return $this;
    }

    public function addConditionalFilter(string $column, $value1, $value2, string $criteria)
    {

    }

    /**
     * @param $column
     * @return bool
     */
    private function columnExists($column)
    {
        $model_list = $this->getModelColumns($this->current_target);

        if(isset($model_list->{$this->current_target}->{$column}) === true) {
            return true;
        }
        return false;
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