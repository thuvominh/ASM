<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'author_show' => [[], ['_controller' => 'App\\Controller\\AuthorController::show'], [], [['text', '/author']], [], [], []],
    'author_detail' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/author']], [], [], []],
    'author_create' => [[], ['_controller' => 'App\\Controller\\AuthorController::CreateAuthor'], [], [['text', '/author_create']], [], [], []],
    'author_edit' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::editAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/author/author_edit']], [], [], []],
    'book_show' => [[], ['_controller' => 'App\\Controller\\BookController::show'], [], [['text', '/book']], [], [], []],
    'welcome' => [[], ['_controller' => 'App\\Controller\\BookController::welcome'], [], [['text', '/welcome']], [], [], []],
    'book_create' => [[], ['_controller' => 'App\\Controller\\BookController::bookCreate'], [], [['text', '/book/create']], [], [], []],
    'book_detail' => [['id'], ['_controller' => 'App\\Controller\\BookController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'book_delete' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/delete']], [], [], []],
    'book_edit' => [['id'], ['_controller' => 'App\\Controller\\BookController::editBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/edit']], [], [], []],
    'api_get_books' => [[], ['_controller' => 'App\\Controller\\BookController::getCars'], [], [['text', '/api/books']], [], [], []],
    'search_book' => [[], ['_controller' => 'App\\Controller\\BookController::searchBook'], [], [['text', '/search_book']], [], [], []],
    'api_get_books_by_id' => [['id'], ['_controller' => 'App\\Controller\\BookController::getBooksById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'aboutus' => [[], ['_controller' => 'App\\Controller\\BookstoreController::index'], [], [['text', '/aboutus']], [], [], []],
    'list_category' => [[], ['_controller' => 'App\\Controller\\CategoryBookController::show'], [], [['text', '/category']], [], [], []],
    'category_detail' => [['id'], ['_controller' => 'App\\Controller\\CategoryBookController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryBookController::deleteCategoryById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/delete']], [], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryBookController::editCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/edit']], [], [], []],
    'create_category' => [[], ['_controller' => 'App\\Controller\\CategoryBookController::bookCreate'], [], [['text', '/category_create']], [], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\CustomerBookController::show'], [], [['text', '/customer']], [], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/registration']], [], [], []],
    'app_security' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/security']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'user show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'sonata_admin_redirect' => [[], ['route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], [], [['text', '/admin/']], [], [], []],
    'sonata_admin_dashboard' => [[], ['_controller' => 'sonata.admin.action.dashboard'], [], [['text', '/admin/dashboard']], [], [], []],
    'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], [], []],
    'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], [], []],
    'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format', true], ['text', '/admin/core/get-short-object-description']], [], [], []],
    'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], [], []],
    'sonata_admin_search' => [[], ['_controller' => 'sonata.admin.action.search'], [], [['text', '/admin/search']], [], [], []],
    'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];