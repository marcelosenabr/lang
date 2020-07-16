<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nome do Pacote
    |--------------------------------------------------------------------------
    */
    'name' => 'Lang',

    /*
    |--------------------------------------------------------------------------
    | Publicar rotas
    |--------------------------------------------------------------------------
    */
    'routes_show' => false,
    'route_locale_show' => false,

    /*
    |--------------------------------------------------------------------------
    | Arquivos padrão para novos idiomas
    |--------------------------------------------------------------------------
    */
    // 'copy_default_dir' => null,
    // 'copy_default_json' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout blade
    |--------------------------------------------------------------------------
    */
    'view_layout' => 'multilingual::layouts.app',

    /*
    |--------------------------------------------------------------------------
    | Middlewares
    |--------------------------------------------------------------------------
    */
    'middleware' => []

];

