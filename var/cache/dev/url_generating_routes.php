<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/']], [], [], []],
    'add_user' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/add_user']], [], [], []],
    'register_user' => [[], ['_controller' => 'App\\Controller\\UserController::registerUser'], [], [['text', '/register_user']], [], [], []],
    'view_user' => [[], ['_controller' => 'App\\Controller\\UserController::viewUser'], [], [['text', '/view_user']], [], [], []],
    'view_users' => [[], ['_controller' => 'App\\Controller\\UserController::viewUsers'], [], [['text', '/view_users']], [], [], []],
    'update_user' => [[], ['_controller' => 'App\\Controller\\UserController::updateUser'], [], [['text', '/update_user']], [], [], []],
    'delete_user' => [[], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['text', '/delete_user']], [], [], []],
];
