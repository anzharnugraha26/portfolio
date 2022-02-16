<?php

namespace App\Http\Controllers\HtmlCssJs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function quis()
    {
        return view('htmlcssjs.quis');
    }
}
