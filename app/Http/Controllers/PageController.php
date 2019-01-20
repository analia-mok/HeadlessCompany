<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($page)
    {
        if ($page === '/') {
            return view('welcome'); // TODO
        }

        return view('welcome'); // TODO
    }
}
