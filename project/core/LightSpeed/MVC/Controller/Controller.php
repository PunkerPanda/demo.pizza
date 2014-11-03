<?php
namespace LightSpeed\MVC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

abstract class Controller
{
    /** @var Request  */
    protected $request;

    /** @var Application  */
    protected $app;

    public function __construct()
    {
    }

} 