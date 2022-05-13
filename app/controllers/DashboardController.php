<?php
namespace app\controllers;

class DashboardController
{
    public function index()
    {
        view('dashboard_home', ['title' => 'Dashboard - Home']);
    }
}
