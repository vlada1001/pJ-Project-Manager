<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/user/([^/]++)(*:183)'
                .'|/project/([^/]++)(?'
                    .'|/(?'
                        .'|task/(?'
                            .'|new(?'
                                .'|(*:229)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:249)'
                                .'|/edit(?'
                                    .'|(*:265)'
                                .')'
                            .')'
                        .')'
                        .'|edit(?'
                            .'|(*:283)'
                        .')'
                    .')'
                    .'|(*:293)'
                .')'
                .'|/ajax/([^/]++)(*:316)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\ProfileController::showUser'], ['id'], null, null, false, true, null]],
        229 => [
            [['_route' => 'app_create_task', '_controller' => 'App\\Controller\\ProjectController::addTaskToDB'], ['project_id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_add_task', '_controller' => 'App\\Controller\\ProjectController::addTask'], ['project_id'], null, null, false, false, null],
        ],
        249 => [[['_route' => 'app_show_task', '_controller' => 'App\\Controller\\ProjectController::showTask'], ['project_id', 'task_id'], null, null, false, true, null]],
        265 => [
            [['_route' => 'app_edit_task_db', '_controller' => 'App\\Controller\\ProjectController::editTaskToDB'], ['project_id', 'task_id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_edit_task', '_controller' => 'App\\Controller\\ProjectController::editTask'], ['project_id', 'task_id'], null, null, false, false, null],
        ],
        283 => [
            [['_route' => 'app_edit_project_db', '_controller' => 'App\\Controller\\ProjectController::editProjectToDB'], ['project_id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_edit_project', '_controller' => 'App\\Controller\\ProjectController::editProject'], ['project_id'], null, null, false, false, null],
        ],
        293 => [[['_route' => 'app_show_project', '_controller' => 'App\\Controller\\ProjectController::showProject'], ['project_id'], null, null, false, true, null]],
        316 => [
            [['_route' => 'ajax_req', '_controller' => 'App\\Controller\\ProjectController::findByPriority'], ['str'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
