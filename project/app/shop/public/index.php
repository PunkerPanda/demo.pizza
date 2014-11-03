<?php

require(dirname(dirname(dirname(__DIR__))) . '/bootstrap.php');

$bootstrap = new \Bootstrap();
$bootstrap->boot();
$container = $bootstrap->getContainer();


/**
 * TODO: Move this into application class
 */
$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => dirname(__DIR__) . '/template',
        'twig.options' => array('debug' => true)
    ));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
        'db.options' => array(
            'driver' => 'pdo_mysql',
            'dbhost' => 'localhost',
            'dbname' => 'spicypizza',
            'user' => 'lightspeed',
            'password' => 'lightspeed',
        ),
    ));

$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
            $twig->addGlobal('pi', 3.14);
            $twig->addFilter('levenshtein', new \Twig_Filter_Function('levenshtein'));

            return $twig;
        }));

/** TODO: routing should use yaml project specific file for readability */
$app->get('/',                '\LightSpeed\MVC\Controller\DashboardController::dashboard');
$app->get('/order',           '\LightSpeed\MVC\Controller\OrderController::index');
$app->get('/customers',       '\LightSpeed\MVC\Controller\CustomerController::index');
$app->get('/search/{args}',   '\LightSpeed\MVC\Controller\SearchController::search');

$app->run();