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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/cov' => [[['_route' => 'app_admin_cov_dashboard', '_controller' => 'App\\Controller\\AdminCovController::dashboard'], null, null, null, false, false, null]],
        '/covoiturage' => [[['_route' => 'app_covoiturage_index', '_controller' => 'App\\Controller\\CovoiturageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/covoiturage/new' => [[['_route' => 'app_covoiturage_new', '_controller' => 'App\\Controller\\CovoiturageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/cov' => [[['_route' => 'app_reservation_cov_index', '_controller' => 'App\\Controller\\ReservationCovController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/taxi' => [[['_route' => 'app_reservation_taxi_index', '_controller' => 'App\\Controller\\ReservationTaxiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/taxi/new' => [[['_route' => 'app_reservation_taxi_new', '_controller' => 'App\\Controller\\ReservationTaxiController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationvelo' => [[['_route' => 'app_reservationvelo_index', '_controller' => 'App\\Controller\\ReservationveloController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservationvelo/start' => [[['_route' => 'app_reservationvelo_start', '_controller' => 'App\\Controller\\ReservationveloController::startReservation'], null, ['POST' => 0], null, false, false, null]],
        '/reservationvelo/new' => [[['_route' => 'app_reservationvelo_new', '_controller' => 'App\\Controller\\ReservationveloController::new'], null, ['POST' => 0], null, false, false, null]],
        '/stations' => [[['_route' => 'app_stations_index', '_controller' => 'App\\Controller\\StationveloController::index'], null, null, null, false, false, null]],
        '/stations/search' => [[['_route' => 'app_stations_search', '_controller' => 'App\\Controller\\StationveloController::searchStations'], null, null, null, false, false, null]],
        '/station/new' => [[['_route' => 'app_station_new', '_controller' => 'App\\Controller\\StationveloController::new'], null, null, null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/velo/type/new' => [[['_route' => 'app_velo_type_new', '_controller' => 'App\\Controller\\VeloTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\baseController::openAdminIndex'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/covoiturage/(?'
                    .'|([^/]++)(?'
                        .'|(*:229)'
                        .'|/edit(*:242)'
                        .'|(*:250)'
                    .')'
                    .'|reservation(*:270)'
                .')'
                .'|/reservation(?'
                    .'|/(?'
                        .'|cov/(?'
                            .'|new(?:/([^/]++))?(*:322)'
                            .'|([^/]++)(?'
                                .'|(*:341)'
                                .'|/edit(*:354)'
                                .'|(*:362)'
                            .')'
                        .')'
                        .'|taxi/([^/]++)(?'
                            .'|(*:388)'
                            .'|/edit(*:401)'
                            .'|(*:409)'
                        .')'
                    .')'
                    .'|velo/(?'
                        .'|payment/success/([^/]++)(*:451)'
                        .'|([^/]++)(?'
                            .'|(*:470)'
                            .'|/(?'
                                .'|edit(*:486)'
                                .'|download\\-pdf(*:507)'
                            .')'
                            .'|(*:516)'
                        .')'
                    .')'
                .')'
                .'|/station(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:558)'
                            .'|velos(*:571)'
                        .')'
                        .'|(*:580)'
                    .')'
                    .'|s/([^/]++)/velos(*:605)'
                .')'
                .'|/ve(?'
                    .'|hicule/([^/]++)(?'
                        .'|(*:638)'
                        .'|/edit(*:651)'
                        .'|(*:659)'
                    .')'
                    .'|lo/(?'
                        .'|new/([^/]++)(*:686)'
                        .'|([^/]++)(?'
                            .'|/edit(*:710)'
                            .'|(*:718)'
                        .')'
                        .'|type(?'
                            .'|(*:734)'
                            .'|/([^/]++)(?'
                                .'|(*:754)'
                                .'|/edit(*:767)'
                                .'|(*:775)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'app_covoiturage_show', '_controller' => 'App\\Controller\\CovoiturageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_covoiturage_edit', '_controller' => 'App\\Controller\\CovoiturageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'app_covoiturage_delete', '_controller' => 'App\\Controller\\CovoiturageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_reservation_covoiturage', '_controller' => 'App\\Controller\\CovoiturageController::reservation'], [], ['GET' => 0], null, false, false, null]],
        322 => [[['_route' => 'app_reservation_cov_new', 'covoiturageId' => null, '_controller' => 'App\\Controller\\ReservationCovController::new'], ['covoiturageId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        341 => [[['_route' => 'app_reservation_cov_show', '_controller' => 'App\\Controller\\ReservationCovController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_reservation_cov_edit', '_controller' => 'App\\Controller\\ReservationCovController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'app_reservation_cov_delete', '_controller' => 'App\\Controller\\ReservationCovController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        388 => [[['_route' => 'app_reservation_taxi_show', '_controller' => 'App\\Controller\\ReservationTaxiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_reservation_taxi_edit', '_controller' => 'App\\Controller\\ReservationTaxiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        409 => [[['_route' => 'app_reservation_taxi_delete', '_controller' => 'App\\Controller\\ReservationTaxiController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_reservationvelo_payment_success', '_controller' => 'App\\Controller\\ReservationveloController::paymentSuccess'], ['paymentId'], null, null, false, true, null]],
        470 => [[['_route' => 'app_reservationvelo_show', '_controller' => 'App\\Controller\\ReservationveloController::show'], ['id_reservation_velo'], ['GET' => 0], null, false, true, null]],
        486 => [[['_route' => 'app_reservationvelo_edit', '_controller' => 'App\\Controller\\ReservationveloController::edit'], ['id_reservation_velo'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        507 => [[['_route' => 'app_reservationvelo_download_pdf', '_controller' => 'App\\Controller\\ReservationveloController::downloadPdf'], ['id_reservation_velo'], null, null, false, false, null]],
        516 => [[['_route' => 'app_reservationvelo_delete', '_controller' => 'App\\Controller\\ReservationveloController::delete'], ['id_reservation_velo'], ['POST' => 0], null, false, true, null]],
        558 => [[['_route' => 'app_station_edit', '_controller' => 'App\\Controller\\StationveloController::edit'], ['id'], null, null, false, false, null]],
        571 => [[['_route' => 'app_station_velos', '_controller' => 'App\\Controller\\VeloController::index'], ['id'], null, null, false, false, null]],
        580 => [[['_route' => 'app_station_delete', '_controller' => 'App\\Controller\\StationveloController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        605 => [[['_route' => 'velos_list', '_controller' => 'App\\Controller\\StationveloController::listVelos'], ['id'], null, null, false, false, null]],
        638 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        686 => [[['_route' => 'app_velo_new', '_controller' => 'App\\Controller\\VeloController::new'], ['stationId'], null, null, false, true, null]],
        710 => [[['_route' => 'app_velo_edit', '_controller' => 'App\\Controller\\VeloController::edit'], ['id'], null, null, false, false, null]],
        718 => [[['_route' => 'app_velo_delete', '_controller' => 'App\\Controller\\VeloController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_velo_type_index', '_controller' => 'App\\Controller\\VeloTypeController::index'], [], ['GET' => 0], null, false, false, null]],
        754 => [[['_route' => 'app_velo_type_show', '_controller' => 'App\\Controller\\VeloTypeController::show'], ['id_type'], ['GET' => 0], null, false, true, null]],
        767 => [[['_route' => 'app_velo_type_edit', '_controller' => 'App\\Controller\\VeloTypeController::edit'], ['id_type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        775 => [
            [['_route' => 'app_velo_type_delete', '_controller' => 'App\\Controller\\VeloTypeController::delete'], ['id_type'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
