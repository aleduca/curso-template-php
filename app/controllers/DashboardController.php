<?php
namespace app\controllers;

use app\framework\classes\Cache;
use app\framework\database\Connection;

class DashboardController
{
    public function index()
    {
        $users = Cache::get('users', function () {
            $connection = Connection::getConnection();
            $query = $connection->query("select * from users limit 10");
            return $query->fetchAll();
        }, 1);

        view('dashboard_home', ['title' => 'Dashboard - Home', 'users' => $users]);
    }
}
