<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/author' => [[['_route' => 'author_show', '_controller' => 'App\\Controller\\AuthorController::show'], null, null, null, false, false, null]],
        '/author_create' => [[['_route' => 'author_create', '_controller' => 'App\\Controller\\AuthorController::CreateAuthor'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/book' => [[['_route' => 'book_show', '_controller' => 'App\\Controller\\BookController::show'], null, null, null, false, false, null]],
        '/welcome' => [[['_route' => 'welcome', '_controller' => 'App\\Controller\\BookController::welcome'], null, null, null, false, false, null]],
        '/book/create' => [[['_route' => 'book_create', '_controller' => 'App\\Controller\\BookController::bookCreate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/books' => [[['_route' => 'api_get_books', '_controller' => 'App\\Controller\\BookController::getCars'], null, ['GET' => 0], null, false, false, null]],
        '/search_book' => [[['_route' => 'search_book', '_controller' => 'App\\Controller\\BookController::searchBook'], null, null, null, false, false, null]],
        '/aboutus' => [[['_route' => 'aboutus', '_controller' => 'App\\Controller\\BookstoreController::index'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'list_category', '_controller' => 'App\\Controller\\CategoryBookController::show'], null, null, null, false, false, null]],
        '/category_create' => [[['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryBookController::bookCreate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/customer' => [[['_route' => 'account', '_controller' => 'App\\Controller\\CustomerBookController::show'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|uthor/(?'
                        .'|([^/]++)(*:29)'
                        .'|author_edit/([^/]++)(*:56)'
                    .')'
                    .'|pi/books/([^/]++)(*:81)'
                    .'|dmin/core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:147)'
                .')'
                .'|/book/(?'
                    .'|([^/]++)(*:173)'
                    .'|delete/([^/]++)(*:196)'
                    .'|edit/([^/]++)(*:217)'
                .')'
                .'|/category/(?'
                    .'|([^/]++)(*:247)'
                    .'|delete/([^/]++)(*:270)'
                    .'|edit/([^/]++)(*:291)'
                .')'
                .'|/user/([^/]++)(*:314)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:353)'
                    .'|wdt/([^/]++)(*:373)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:419)'
                            .'|router(*:433)'
                            .'|exception(?'
                                .'|(*:453)'
                                .'|\\.css(*:466)'
                            .')'
                        .')'
                        .'|(*:476)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'author_detail', '_controller' => 'App\\Controller\\AuthorController::detail'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'author_edit', '_controller' => 'App\\Controller\\AuthorController::editAuthor'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_get_books_by_id', '_controller' => 'App\\Controller\\BookController::getBooksById'], ['id'], ['GET' => 0], null, false, true, null]],
        147 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        173 => [[['_route' => 'book_detail', '_controller' => 'App\\Controller\\BookController::detail'], ['id'], null, null, false, true, null]],
        196 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::deleteBookById'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::editBook'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'category_detail', '_controller' => 'App\\Controller\\CategoryBookController::detail'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryBookController::deleteCategoryById'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryBookController::editCategory'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'user show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        373 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        419 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        433 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        453 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        466 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        476 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
