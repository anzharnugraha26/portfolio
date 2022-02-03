<?php

namespace App\Http\Controllers\TinggalJualan\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('tinggal-jualan.front-end.index');
    }

    public function service()
    {
        return view(
            'tinggal-jualan.front-end.service'
            // , compact('categories')
        );
    }
}
