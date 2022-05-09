<?php

return [
    'get' =>[
        '/' => 'HomeController@index',
        '/login' => 'LoginController@index',
        '/dashboard' => 'DashBoardController@index',
    ],
    'post' =>[
        '/login' => 'LoginController@store',
    ]
];
