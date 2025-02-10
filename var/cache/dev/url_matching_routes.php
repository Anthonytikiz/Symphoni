<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admins' => [
            [['_route' => 'app_api_adminapi_create', '_controller' => 'App\\Controller\\API\\AdminApiController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_adminapi_findbyall', '_controller' => 'App\\Controller\\API\\AdminApiController::findByAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/clients' => [
            [['_route' => 'app_api_clientapi_create', '_controller' => 'App\\Controller\\API\\ClientApiController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_clientapi_findbyall', '_controller' => 'App\\Controller\\API\\ClientApiController::findByAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/client/commande' => [[['_route' => 'list', '_controller' => 'App\\Controller\\API\\ClientApiController::listClients'], null, ['GET' => 0], null, false, false, null]],
        '/api/commandes' => [
            [['_route' => 'commande_create', '_controller' => 'App\\Controller\\API\\CommandeController::createCommande'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'commande_list', '_controller' => 'App\\Controller\\API\\CommandeController::listCommandes'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/commandes/en-cours' => [[['_route' => 'commande_list_en_cours', '_controller' => 'App\\Controller\\API\\CommandeController::listCommandesEnCours'], null, ['GET' => 0], null, false, false, null]],
        '/api/ingredients' => [
            [['_route' => 'app_api_ingredientapi_index', '_controller' => 'App\\Controller\\API\\IngredientApiController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_ingredientapi_create', '_controller' => 'App\\Controller\\API\\IngredientApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/plats' => [
            [['_route' => 'app_api_platapi_getallplats', '_controller' => 'App\\Controller\\API\\PlatApiController::getAllPlats'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_platapi_createplat', '_controller' => 'App\\Controller\\API\\PlatApiController::createPlat'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/recettes' => [
            [['_route' => 'app_api_recetteapi_getallrecettes', '_controller' => 'App\\Controller\\API\\RecetteApiController::getAllRecettes'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_recetteapi_createrecette', '_controller' => 'App\\Controller\\API\\RecetteApiController::createRecette'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/relation-ingredient-recette' => [[['_route' => 'app_api_relationingredientrecette_createrelationingredientrecette', '_controller' => 'App\\Controller\\API\\RelationIngredientRecetteController::createRelationIngredientRecette'], null, ['POST' => 0], null, false, false, null]],
        '/api/relationplatcommandes' => [
            [['_route' => 'relationplatcommande_create', '_controller' => 'App\\Controller\\API\\RelationplatCommandeController::createRelationplatCommande'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'relationplatcommande_list', '_controller' => 'App\\Controller\\API\\RelationplatCommandeController::listRelationplatCommandes'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/stocks' => [[['_route' => 'api_stock_index', '_controller' => 'App\\Controller\\API\\StockApiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/stocks/all' => [[['_route' => 'stock_list', '_controller' => 'App\\Controller\\API\\StockApiController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|admins/(?'
                        .'|([^/]++)(*:68)'
                        .'|login(*:80)'
                    .')'
                    .'|c(?'
                        .'|lients/(?'
                            .'|([^/]++)(*:110)'
                            .'|login(*:123)'
                        .')'
                        .'|ommandes/(?'
                            .'|(\\d+)(*:149)'
                            .'|([^/]++)(?'
                                .'|(*:168)'
                            .')'
                            .'|statistiques(*:189)'
                        .')'
                    .')'
                    .'|ingredients/([^/]++)(?'
                        .'|(*:222)'
                    .')'
                    .'|plats/([^/]++)(?'
                        .'|(*:248)'
                        .'|/add\\-recette(*:269)'
                        .'|(*:277)'
                    .')'
                    .'|re(?'
                        .'|cettes/([^/]++)(?'
                            .'|(*:309)'
                        .')'
                        .'|lation(?'
                            .'|\\-ingredient\\-recette/([^/]++)(?'
                                .'|(*:360)'
                            .')'
                            .'|platcommandes/([^/]++)(?'
                                .'|(*:394)'
                            .')'
                        .')'
                    .')'
                    .'|stocks/(?'
                        .'|([^/]++)(*:423)'
                        .'|entre(*:436)'
                        .'|sortie(*:450)'
                        .'|([^/]++)(?'
                            .'|(*:469)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'app_api_adminapi_findbyid', '_controller' => 'App\\Controller\\API\\AdminApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_api_adminapi_login', '_controller' => 'App\\Controller\\API\\AdminApiController::login'], [], ['POST' => 0], null, false, false, null]],
        110 => [[['_route' => 'app_api_clientapi_findbyid', '_controller' => 'App\\Controller\\API\\ClientApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_api_clientapi_login', '_controller' => 'App\\Controller\\API\\ClientApiController::login'], [], ['POST' => 0], null, false, false, null]],
        149 => [[['_route' => 'commande_get', '_controller' => 'App\\Controller\\API\\CommandeController::getCommande'], ['id'], ['GET' => 0], null, false, true, null]],
        168 => [
            [['_route' => 'commande_update', '_controller' => 'App\\Controller\\API\\CommandeController::updateCommande'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'commande_delete', '_controller' => 'App\\Controller\\API\\CommandeController::deleteCommande'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        189 => [[['_route' => 'commande_api_statistiques', '_controller' => 'App\\Controller\\API\\CommandeController::getStatistiques'], [], ['GET' => 0], null, false, false, null]],
        222 => [
            [['_route' => 'app_api_ingredientapi_show', '_controller' => 'App\\Controller\\API\\IngredientApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_ingredientapi_update', '_controller' => 'App\\Controller\\API\\IngredientApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_ingredientapi_delete', '_controller' => 'App\\Controller\\API\\IngredientApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        248 => [
            [['_route' => 'app_api_platapi_getplat', '_controller' => 'App\\Controller\\API\\PlatApiController::getPlat'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_platapi_updateplat', '_controller' => 'App\\Controller\\API\\PlatApiController::updatePlat'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        269 => [[['_route' => 'app_api_platapi_addrecettetoplat', '_controller' => 'App\\Controller\\API\\PlatApiController::addRecetteToPlat'], ['id'], ['POST' => 0], null, false, false, null]],
        277 => [[['_route' => 'app_api_platapi_deleteplat', '_controller' => 'App\\Controller\\API\\PlatApiController::deletePlat'], ['id'], ['DELETE' => 0], null, false, true, null]],
        309 => [
            [['_route' => 'app_api_recetteapi_getrecette', '_controller' => 'App\\Controller\\API\\RecetteApiController::getRecette'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_recetteapi_updaterecette', '_controller' => 'App\\Controller\\API\\RecetteApiController::updateRecette'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_recetteapi_deleterecette', '_controller' => 'App\\Controller\\API\\RecetteApiController::deleteRecette'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => 'app_api_relationingredientrecette_getrelationingredientrecette', '_controller' => 'App\\Controller\\API\\RelationIngredientRecetteController::getRelationIngredientRecette'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_relationingredientrecette_updaterelationingredientrecette', '_controller' => 'App\\Controller\\API\\RelationIngredientRecetteController::updateRelationIngredientRecette'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_relationingredientrecette_deleterelationingredientrecette', '_controller' => 'App\\Controller\\API\\RelationIngredientRecetteController::deleteRelationIngredientRecette'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        394 => [
            [['_route' => 'relationplatcommande_get', '_controller' => 'App\\Controller\\API\\RelationplatCommandeController::getRelationplatCommande'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'relationplatcommande_update', '_controller' => 'App\\Controller\\API\\RelationplatCommandeController::updateRelationplatCommande'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'relationplatcommande_delete', '_controller' => 'App\\Controller\\API\\RelationplatCommandeController::deleteRelationplatCommande'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        423 => [[['_route' => 'api_stock_show', '_controller' => 'App\\Controller\\API\\StockApiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        436 => [[['_route' => 'api_stock_new_entre', '_controller' => 'App\\Controller\\API\\StockApiController::createEntrer'], [], ['POST' => 0], null, false, false, null]],
        450 => [[['_route' => 'api_stock_new_sortie', '_controller' => 'App\\Controller\\API\\StockApiController::createSortie'], [], ['POST' => 0], null, false, false, null]],
        469 => [
            [['_route' => 'api_stock_edit', '_controller' => 'App\\Controller\\API\\StockApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_stock_delete', '_controller' => 'App\\Controller\\API\\StockApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
