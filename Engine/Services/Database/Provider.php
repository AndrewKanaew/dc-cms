<?php

namespace Engine\Services\Database;


use Engine\Core\Database\Connection;
use Engine\Services\AbstractProvider;

class Provider extends AbstractProvider
{
    public $serviceName = 'db';

    /**
     * @return mixed|void
     */
    public function init() {
        $db = new Connection();
        $this->di->set($this->serviceName, $db);
    }
}