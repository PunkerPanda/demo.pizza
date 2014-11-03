<?php
namespace LightSpeed\MVC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller
{
    public function index(Request $request, Application $app)
    {
        $sql = "SELECT * FROM customer";
        $rowset = $app['db']->fetchAll($sql);

        return $app['twig']->render('customer/list.html', compact('rowset'));
    }
} 