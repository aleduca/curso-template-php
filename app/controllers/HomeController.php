<?php
namespace app\controllers;

class HomeController
{
    public function index()
    {
        view('home', ['name' => 'Alexandre', 'age' => 40]);
    }
}
