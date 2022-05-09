<?php

return [
    'get' =>[
        '/' => 'HomeController@index',
        '/login' => 'LoginController@index',
        '/dashboard' => 'DashBoardController@index:auth',
    ],
    'post' =>[
        '/login' => 'LoginController@store',
    ]
];
