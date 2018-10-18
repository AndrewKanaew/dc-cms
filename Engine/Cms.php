<?php
/**
 * Created by PhpStorm.
 * User: Канаева Ирина
 * Date: 17.10.2018
 * Time: 18:37
 */

namespace Engine;


class Cms
{

    /**
     * @var $di
     */
    private $di;

    private $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     *  Run Cms
     */
    public function run()
    {
//        $this->router->add('home', '/', 'HomeController:index');
//        $this->router->add('product', '/product/{id}', 'ProductController:index');
        print_r($this->di);
    }
}