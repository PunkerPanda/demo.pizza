<?php

require_once __DIR__ . "/vendor/autoload.php";

/**
 * Application core bootstrap.
 *
 */
class Bootstrap
{
    /** @var Pimple  */
    private $container;

    public function boot()
    {
        $this->container = new Pimple();
        $this->initLogger();
        $this->initErrorHandler();
        $this->initPersistence();
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function initLogger()
    {

    }

    public function initErrorHandler()
    {

    }

    public function initPersistence()
    {
        $this->container['db'] = function ($c) {
            $dbConfig = new \Spot\Config();
            $dbConfig->addConnection('mysql', 'mysql://pizzaiolo:pizza@localhost/demo.spicyPizza');
            return $spot = new \Spot\Locator($dbConfig);
        };
    }
}

