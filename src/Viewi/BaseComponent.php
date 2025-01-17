<?php

namespace Viewi;

use Viewi\DI\IContainer;

abstract class BaseComponent
{
    function __invoke($params, ?IContainer $container = null)
    {
        return App::run(get_class($this), $params, $container);
    }
}
