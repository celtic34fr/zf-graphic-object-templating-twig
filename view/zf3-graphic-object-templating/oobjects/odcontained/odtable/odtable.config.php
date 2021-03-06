<?php

use GraphicObjectTemplating\OObjects\ODContained\ODTable;

return [
    'object'        => 'odtable',
    'typeObj'       => 'odcontained',
    'template'      => 'odtable.twig',

    'title'         => '',
    'titlePos'      => 'bottom_center',
    'titleStyle'    => '',

    'cols'          => [],
    'datas'         => [],
    'styles'        => [],
    'classesTab'    => [],
    'select'        => [],
    'event'         => [],
    'idRow'         => false,
    'pagination'    => ODTable::BOOLEAN_FALSE,
    'search'        => false,
    'length'        => ODTable::ODTABLELENGTH_10,
    'start'         => 0,
    'noPage'        => 0,
    'maxPage'       => 0,
    'isIdRow'       => false,
    'header'        => true,
    'tableClasses'  => '',

    'objLength'     => '',
    'objNavbar'     => '',
    'c'             => '',

    'btnActions'    => [],
    'btnsLine'      => [],
];