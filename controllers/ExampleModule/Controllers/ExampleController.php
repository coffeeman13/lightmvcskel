<?php
/**
 * Created by PhpStorm.
 * User: g_er
 * Date: 2019-03-13
 * Time: 9:00 PM
 */

namespace ExampleModule\Controllers;


use Ascmvc\Mvc\Controller;

class ExampleController extends Controller
{

    public function indexAction($vars = null)
    {
        return "Hello from ExampleController";
    }


}