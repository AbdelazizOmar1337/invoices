<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index($pageName)
    {
        if(view()->exists($pageName)){
            return view($pageName);
        }
        else
        {
            return view('404');
        }

    }
}
