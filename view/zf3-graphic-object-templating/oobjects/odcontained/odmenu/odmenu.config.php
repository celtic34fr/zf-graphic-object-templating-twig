<?php

use GraphicObjectTemplating\OObjects\ODContained\ODMenu;

return [
    'object'        => 'odmenu',
    'typeObj'       => 'odcontained',
    'template'      => 'odmenu.twig',

    'dataTree'		=> [],
    'dataPath'		=> [],
    'activeMenu'    => false,
    'mode'          => ODMenu::ODMENUMODE_CLICK,
];