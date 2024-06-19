<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CmsRouter;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function getRouter(Request $request, CmsRouter $cmsRouter)
    {
        // добавить проверку авторизации когда будет каркас авторизации
//        if(!Auth::check()){
//            return [];
//        }else{
//            return $cmsRouter->getRoutes(Auth::user());
//        }
        return $cmsRouter->getRoutes();
    }
}
