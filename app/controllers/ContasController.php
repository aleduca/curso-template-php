<?php
namespace app\controllers;

class ContasController
{
    public function index()
    {
        view('dashboard_contas', ['title' => 'Dashboard - Contas']);
    }
}
