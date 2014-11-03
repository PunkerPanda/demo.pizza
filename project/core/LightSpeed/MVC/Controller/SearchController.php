<?php
namespace LightSpeed\MVC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class SearchController
{
    public function search(Request $request, Application $app)
    {
        return $app['twig']->render('main.html');
    }
} 