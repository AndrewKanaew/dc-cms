<?php
/**
 * Created by PhpStorm.
 * User: Канаева Ирина
 * Date: 18.10.2018
 * Time: 8:57
 */

namespace Engine\Core\Router;


class UrlDispatcher
{

    /**
     * @var array
     */
    private $method = [
      'GET',
      'POST'
    ];

    /**
     * @var array
     */
    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * @var array
     */
    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z0-9\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+',
    ];


    /**
     * @param $key
     * @param $pattern
     */
    public function addPattern ($key, $pattern)
    {
        $this->patterns[$key] = $pattern;
    }

    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));

        if (array_key_exists($uri, $routes)) {

        }

    }
}