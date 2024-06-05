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

        ];


        return $routes;
    }

}
