<?php
namespace LightSpeed\MVC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class OrderController 
{
    public function index(Request $request, Application $app)
    {
        $sql = "SELECT * FROM pizza";
        $rowset = $app['db']->fetchAll($sql);

        return $app['twig']->render('order/list.html', compact('rowset'));
    }
} 