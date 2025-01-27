<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/add_user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::login'], null, ['GET' => 0], null, false, false, null]],
        '/register_user' => [[['_route' => 'register_user', '_controller' => 'App\\Controller\\UserController::registerUser'], null, null, null, false, false, null]],
        '/view_user' => [[['_route' => 'view_user', '_controller' => 'App\\Controller\\UserController::viewUser'], null, ['GET' => 0], null, false, false, null]],
        '/view_users' => [[['_route' => 'view_users', '_controller' => 'App\\Controller\\UserController::viewUsers'], null, ['GET' => 0], null, false, false, null]],
        '/update_user' => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::updateUser'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/delete_user' => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
