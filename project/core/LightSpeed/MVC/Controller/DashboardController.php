<?php
namespace LightSpeed\MVC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request, Application $app)
    {
        return $app['twig']->render('dashboard/dashboard.html');
    }
} 