<?php

return [
    'get' =>[
        '/' => 'HomeController@index',
        '/login' => 'LoginController@index',
    ],
    'post' =>[
        '/login' => 'LoginController@store',
    ]
];
