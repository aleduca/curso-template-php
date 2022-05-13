<?php

return [
    'get' =>[
        '/' => 'HomeController@index',
        '/login' => 'LoginController@index',
        '/dashboard' => 'DashBoardController@index:auth',
        '/logout' => 'LoginController@destroy',
    ],
    'post' =>[
        '/login' => 'LoginController@store',
    ]
];
