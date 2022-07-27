<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/book/list' => [[['_route' => 'admin_app_book_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_list'], null, null, null, false, false, null]],
        '/admin/app/book/create' => [[['_route' => 'admin_app_book_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_create'], null, null, null, false, false, null]],
        '/admin/app/book/batch' => [[['_route' => 'admin_app_book_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_batch'], null, null, null, false, false, null]],
        '/admin/app/book/export' => [[['_route' => 'admin_app_book_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_export'], null, null, null, false, false, null]],
        '/admin/app/author/list' => [[['_route' => 'admin_app_author_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_list'], null, null, null, false, false, null]],
        '/admin/app/author/create' => [[['_route' => 'admin_app_author_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_create'], null, null, null, false, false, null]],
        '/admin/app/author/batch' => [[['_route' => 'admin_app_author_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_batch'], null, null, null, false, false, null]],
        '/admin/app/author/export' => [[['_route' => 'admin_app_author_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_export'], null, null, null, false, false, null]],
        '/admin/app/sonatauseruser/list' => [[['_route' => 'admin_app_sonatauseruser_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_list'], null, null, null, false, false, null]],
        '/admin/app/sonatauseruser/create' => [[['_route' => 'admin_app_sonatauseruser_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_create'], null, null, null, false, false, null]],
        '/admin/app/sonatauseruser/batch' => [[['_route' => 'admin_app_sonatauseruser_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_batch'], null, null, null, false, false, null]],
        '/admin/app/sonatauseruser/export' => [[['_route' => 'admin_app_sonatauseruser_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_export'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/db/authors' => [[['_route' => 'author_index', '_controller' => 'App\\Controller\\AuthorController::indexAction'], null, null, null, false, false, null]],
        '/db/create-author' => [[['_route' => 'addAuthor', '_controller' => 'App\\Controller\\AuthorController::createAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'book_index', '_controller' => 'App\\Controller\\BookController::indexAction'], null, null, null, false, false, null]],
        '/db/createbook' => [[['_route' => 'addBook', '_controller' => 'App\\Controller\\BookController::createAction'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'sonata_user_admin_security_login', '_controller' => 'sonata.user.action.login'], null, null, null, false, false, null]],
        '/admin/login_check' => [[['_route' => 'sonata_user_admin_security_check', '_controller' => 'sonata.user.action.check_login'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sonata_user_admin_security_logout', '_controller' => 'sonata.user.action.logout'], null, null, null, false, false, null]],
        '/admin/request' => [[['_route' => 'sonata_user_admin_resetting_request', '_controller' => 'sonata.user.action.request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/check-email' => [[['_route' => 'sonata_user_admin_resetting_check_email', '_controller' => 'sonata.user.action.check_email'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:233)'
                    .'|app/(?'
                        .'|book/([^/]++)/(?'
                            .'|edit(*:269)'
                            .'|delete(*:283)'
                            .'|show(*:295)'
                        .')'
                        .'|author/([^/]++)/(?'
                            .'|edit(*:327)'
                            .'|delete(*:341)'
                            .'|show(*:353)'
                        .')'
                        .'|sonatauseruser/([^/]++)/(?'
                            .'|edit(*:393)'
                            .'|delete(*:407)'
                            .'|show(*:419)'
                        .')'
                    .')'
                    .'|reset/([^/]++)(*:443)'
                .')'
                .'|/db/(?'
                    .'|edit(?'
                        .'|author/([^/]++)(*:481)'
                        .'|book/([^/]++)(*:502)'
                    .')'
                    .'|delete/([^/]++)(*:526)'
                    .'|books/([^/]++)(*:548)'
                .')'
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
        233 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        269 => [[['_route' => 'admin_app_book_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_edit'], ['id'], null, null, false, false, null]],
        283 => [[['_route' => 'admin_app_book_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_delete'], ['id'], null, null, false, false, null]],
        295 => [[['_route' => 'admin_app_book_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_show'], ['id'], null, null, false, false, null]],
        327 => [[['_route' => 'admin_app_author_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_edit'], ['id'], null, null, false, false, null]],
        341 => [[['_route' => 'admin_app_author_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_delete'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'admin_app_author_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_show'], ['id'], null, null, false, false, null]],
        393 => [[['_route' => 'admin_app_sonatauseruser_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_edit'], ['id'], null, null, false, false, null]],
        407 => [[['_route' => 'admin_app_sonatauseruser_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_delete'], ['id'], null, null, false, false, null]],
        419 => [[['_route' => 'admin_app_sonatauseruser_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_sonatauseruser_show'], ['id'], null, null, false, false, null]],
        443 => [[['_route' => 'sonata_user_admin_resetting_reset', '_controller' => 'sonata.user.action.reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        481 => [[['_route' => 'author_edit', '_controller' => 'App\\Controller\\AuthorController::editAction'], ['id'], null, null, false, true, null]],
        502 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::editAction'], ['id'], null, null, false, true, null]],
        526 => [[['_route' => 'author_delete', '_controller' => 'App\\Controller\\AuthorController::deleteAction'], ['id'], null, null, false, true, null]],
        548 => [
            [['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::deleteAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
