<?php

namespace Engine;


abstract class Controller
{
    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }
}