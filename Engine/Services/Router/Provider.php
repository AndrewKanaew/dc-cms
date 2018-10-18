<?php

namespace Engine\Services\Router;


use Engine\Core\Router\Router;
use Engine\Services\AbstractProvider;

class Provider extends AbstractProvider
{
    public $serviceName = 'router';

    /**
     * @return mixed|void
     */
    public function init() {
        $router = new Router($_SERVER['HTTP_HOST']);
        $this->di->set($this->serviceName, $router);
    }
}