<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/15/17
 * Time: 3:58 PM
 */

namespace HasOffersApi\Helper;

/**
 * Class ModelHelper
 * @package HasOffersApi\Helper
 */
class ModelHelper
{

    protected $fileContent;

    public function __construct(string $file)
    {
        $this->fileContent = $this->readFile($file);
    }

    /**
     * @param string $file
     * @return mixed
     * @throws \Exception
     */
    private function readFile(string $file)
    {
        try {
            return json_decode(file_get_contents($file));
        } catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return array
     */
    public function getModels()
    {
        $models = [];

        if(empty($this->fileContent) === false) {
            foreach($this->fileContent as $key => $value) {
                $models[] = $key;
            }
        }

        return $models;
    }

    /**
     * @param string $model
     * @return array
     */
    public function getModelColumns(string $model)
    {
        $columns = [];

        if(isset($this->fileContent->{$model}) === true) {

            foreach($this->fileContent->{$model} as $key => $column) {
                $columns[] = $key;
            }
        }

        return $columns;
    }
}