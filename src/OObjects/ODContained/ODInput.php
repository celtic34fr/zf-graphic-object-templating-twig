<?php
/**
 * Created by PhpStorm.
 * User: candidat
 * Date: 29/05/18
 * Time: 09:23
 */

namespace GraphicObjectTemplating\OObjects\ODContained;


use GraphicObjectTemplating\OObjects\ODContained;

class ODInput extends ODContained
{
    const INPUTTYPE_TEXT = 'text';
    const INPUTTYPE_PASSWORD = 'passwd';

    public function __construct($id)
    {

    }
}