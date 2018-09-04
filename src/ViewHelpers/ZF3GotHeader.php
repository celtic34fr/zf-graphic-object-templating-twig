<?php

namespace GraphicObjectTemplating\ViewHelpers;

use GraphicObjectTemplating\Service\ZF3GotServices;
use Zend\View\Helper\AbstractHelper;

class ZF3GotHeader extends AbstractHelper
{
    /** @var ZF3GotServices $gs */
    protected $gs;

    public function __construct($gs)
    {
        $this->gs = $gs;
        return $this;
    }

    public function __invoke($object)
    {
        $html = $this->gs->header($object);
        return $html;
    }
}
?>