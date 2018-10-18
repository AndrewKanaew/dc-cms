<?php
/**
 * Created by PhpStorm.
 * User: Канаева Ирина
 * Date: 17.10.2018
 * Time: 20:09
 */

namespace Engine\Core\Router;


class Router
{
    private $routes = [];
    private $host;
    private $dispatcher;

    /**
     * Router constructor.
     * @param $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * @param $key
     * @param $pattern
     * @param $controller
     * @param string $method
     */
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern' => $pattern,
            'controller' => $controller,
            'method' => $method
        ];
    }

    /**
     * @param $method
     * @param $uri
     */
    public function dispatch($method, $uri)
    {

    }

    /**
     * @return null
     */
    public function getDispatcher()
    {
        if ($this->dispatcher === null) {

        }

        return $this->dispatcher;
    }
}