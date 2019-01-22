<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($page = '')
    {
        if ($page === '/') {
            return view('pages.index'); // TODO
        }

        return view('pages.index'); // TODO
    }
}
