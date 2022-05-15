<?php
namespace app\controllers;

use app\framework\database\Connection;

class HomeController
{
    public function index()
    {
        view('home', ['name' => 'Alexandre', 'age' => 40]);
    }
}
