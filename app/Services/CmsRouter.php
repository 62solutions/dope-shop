<?php

namespace App\Services;

use App\Models\User;

class CmsRouter
{
    // заинжектить юзера для разделения маршрутов по правам юзера
    public  function getRoutes()
    {
        $routes = [];

        $routes[] = [
            'path' => '/',
            'name' => 'welcome',
            'meta' => ['auth' => false, 'title' => 'Главная' ],
            'component' => 'Welcome',
            'props' => [],
            'inmenu' => true,
        ];

        $routes[] = [
            'path' => '/stores',
            'name' => 'stores',
            'meta' => ['auth' => true, 'title' => 'Магазины' ],
            'component' => 'Stores',
            'props' => [],
            'inmenu' => true,

        ];

        $routes[] = [
            'path' => '/categories',
            'name' => 'categories',
            'meta' => ['auth' => true, 'title' => 'Категории' ],
            'component' => 'Categories',
            'props' => [],
            'inmenu' => true,
            'children' => [
                    [
                        'path' => '/categories/subcategory1',
                        'name' => 'Subcategory1',
                        'meta' => ['title' => 'подкатегория 1'],
                        'component' => 'Subcategory1',
                    ],
                    [
                        'path' => '/categories/subcategory2',
                        'name' => 'Subcategory2',
                        'meta' => ['title' => 'подкатегория 2'],
                        'component' => 'Subcategory2',
                    ],
                ]
        ];


        return $routes;
    }

}
