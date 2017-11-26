<?php

return [
    'modules' => [
        Vanilo\Product\Providers\ModuleServiceProvider::class  => [],
        Vanilo\Cart\Providers\ModuleServiceProvider::class     => [],
        Vanilo\Checkout\Providers\ModuleServiceProvider::class => []
    ],
    'views' => [
        'namespace' => 'vanilo'
    ],
    'routes' => [
        'prefix'     => 'admin',
        'as'         => 'vanilo.',
        'middleware' => ['web', 'auth', 'acl'],
        'files'      => ['admin']
    ],
    'breadcrumbs' => true,
    'currency'    => [
        'code'   => 'USD',
        'sign'   => '$',
        'format' => '%2$s%1$g' // see sprintf. Amount is the first argument, currency is the second
        /* EURO example:
        'code'   => 'EUR',
        'sign'   => '€',
        'format' => '%1$g%2$s'
        */
    ]
];
