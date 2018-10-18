<?php

namespace Engine\Services;

use Engine\DI\DI;

abstract class AbstractProvider
{

    /**
     * @var \Engine\Di\DI;
     */
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}