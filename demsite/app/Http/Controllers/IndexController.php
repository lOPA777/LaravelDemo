<?php

namespace App\Http\Controllers;
use\App\Newsbd;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $newsbd = Newsbd::all();
    return view('index', ['newsbd' => $newsbd]);
    }
}
