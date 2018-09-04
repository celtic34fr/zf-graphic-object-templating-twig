<?php

use GraphicObjectTemplating\OObjects\ODContained\ODButton;

return [
    'object'        => 'odbutton',
    'typeObj'       => 'odcontained',
    'template'      => 'odbutton.twig',

    'type'          => ODButton::BUTTONTYPE_CUSTOM,
    'label'         => '',
    'icon'          => '',
    'nature'        => ODButton::BUTTONNATURE_DEFAULT,

    'resources' => [
        'js'		=> [
            'odbutton.js' => 'js/odbutton.js',
        ],
    ],
];