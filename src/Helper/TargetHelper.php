<?php
/**
 * Created by PhpStorm.
 * User: carsten
 * Date: 7/15/17
 * Time: 3:58 PM
 */

namespace HasOffersApi\Helper;

/**
 * Class TargetHelper
 * @package HasOffersApi\Helper
 */
class TargetHelper
{

    protected $fileContent;

    public function __construct($file)
    {
        $this->fileContent = $this->readFile($file);
    }

    /**
     * @param string $file
     * @return mixed
     * @throws \Exception
     */
    private function readFile($file)
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
    public function getTargets()
    {
        $controller = [];

        if(empty($this->fileContent) === false) {
            foreach($this->fileContent as $key => $value) {
                $controller[] = $key;
            }
        }

        return $controller;
    }

    /**
     * @param string $controller
     * @return array
     */
    public function getTargetMethods($controller)
    {
        $methods = [$this->fileContent->{$controller}];

        if(isset($this->fileContent->{$controller}) === true) {
            foreach($this->fileContent->{$controller} as $key => $method) {
                $methods[] = $key;
            }
        }

        return $methods;
    }
}