<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/profile' => [
            [['_route' => 'app_user_update', '_controller' => 'App\\Controller\\ProfileController::updateProfile'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_user', '_controller' => 'App\\Controller\\ProfileController::showProfile'], null, null, null, false, false, null],
        ],
        '/my-tasks' => [[['_route' => 'app_user_tasks', '_controller' => 'App\\Controller\\ProfileController::showMyTasks'], null, null, null, false, false, null]],
        '/my-tasks/add-task' => [[['_route' => 'app_user_add_task', '_controller' => 'App\\Controller\\ProfileController::addTask'], null, null, null, false, false, null]],
        '/project/new' => [
            [['_route' => 'app_create_project', '_controller' => 'App\\Controller\\ProjectController::addProjectToDB'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_add_project', '_controller' => 'App\\Controller\\ProjectController::addProject'], null, null, null, false, false, null],
        ],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\SiteController::homepage'], null, null, null, false, false, null]],
        '/new-team' => [
            [['_route' => '', '_controller' => 'App\\Controller\\SiteController::addTeamToDB'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_add_team', '_controller' => 'App\\Controller\\SiteController::addTeam'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/user/([^/]++)(*:21)'
                .'|/project/([^/]++)(?'
                    .'|/(?'
                        .'|task/(?'
                            .'|new(?'
                                .'|(*:66)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:85)'
                                .'|/edit(?'
                                    .'|(*:100)'
                                .')'
                            .')'
                        .')'
                        .'|edit(?'
                            .'|(*:118)'
                        .')'
                    .')'
                    .'|(*:128)'
                .')'
                .'|/ajax/([^/]++)(*:151)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\ProfileController::showUser'], ['id'], null, null, false, true, null]],
        66 => [
            [['_route' => 'app_create_task', '_controller' => 'App\\Controller\\ProjectController::addTaskToDB'], ['project_id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_add_task', '_controller' => 'App\\Controller\\ProjectController::addTask'], ['project_id'], null, null, false, false, null],
        ],
        85 => [[['_route' => 'app_show_task', '_controller' => 'App\\Controller\\ProjectController::showTask'], ['project_id', 'task_id'], null, null, false, true, null]],
        100 => [
            [['_route' => 'app_edit_task_db', '_controller' => 'App\\Controller\\ProjectController::editTaskToDB'], ['project_id', 'task_id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_edit_task', '_controller' => 'App\\Controller\\ProjectController::editTask'], ['project_id', 'task_id'], null, null, false, false, null],
        ],
        118 => [
            [['_route' => 'app_edit_project_db', '_controller' => 'App\\Controller\\ProjectController::editProjectToDB'], ['project_id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_edit_project', '_controller' => 'App\\Controller\\ProjectController::editProject'], ['project_id'], null, null, false, false, null],
        ],
        128 => [[['_route' => 'app_show_project', '_controller' => 'App\\Controller\\ProjectController::showProject'], ['project_id'], null, null, false, true, null]],
        151 => [
            [['_route' => 'ajax_req', '_controller' => 'App\\Controller\\ProjectController::findByPriority'], ['str'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
