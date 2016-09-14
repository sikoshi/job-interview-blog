<?php

return [

    // Страница поста
    [
        'route'      => 'post',
        'controller' => 'posts',
        'action'     => 'view'
    ],


    // Страница создания поста
    [
        'route'      => 'create',
        'controller' => 'posts',
        'action'     => 'create'
    ],

    // Вход на сайт
    [
        'route'      => 'signin',
        'controller' => 'account',
        'action'     => 'signin'
    ],

    // Выход
    [
        'route'      => 'signout',
        'controller' => 'account',
        'action'     => 'signout'
    ],
];