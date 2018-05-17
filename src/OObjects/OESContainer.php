<?php
/**
 * Created by PhpStorm.
 * User: candidat
 * Date: 17/05/18
 * Time: 10:35
 */

namespace GraphicObjectTemplating\OObjects;

use GraphicObjectTemplating\OObjects\OEObject;
use GraphicObjectTemplating\OObjects\OObject;
use GraphicObjectTemplating\OObjects\OSContainer;
use Exception;

class OESContainer extends OEObject
{
    private $_tExtends        = OSContainer::class;
    private $_tExtendIntances = "";

    public function __construct($id, $pathConfig, $className) {
        parent::__construct($id, $pathConfig, $className);
        $this->_tExtendIntances = new $this->_tExtends($id);
        return $this;
    }

    public function __call($funcName, $tArgs)
    {
        if(method_exists($this->_tExtendIntances, $funcName))
        { return call_user_func_array(array($this->_tExtendIntances, $funcName), $tArgs); }
        throw new Exception("The $funcName method doesn't exist");
    }

    public function __get($nameChild) {
        $properties = $this->getProperties();
        if (!empty($properties['children'])) {
            foreach ($properties['children'] as $idChild => $child) {
                $obj = OObject::buildObject($idChild);
                if ($obj) {
                    $name = $obj->getName();
                    if ($name == $nameChild) return $obj;
                }
            }
        }
        return false;
    }

    public function setTExtendInstances(OObject $object)
    {
        $this->_tExtendIntances = $object;
        return $this;
    }
}