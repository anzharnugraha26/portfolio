<?php

namespace App\Http\Controllers\PesonaMahameru\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    function index(){
       return view('pesona-mahameru.front-end.index');
    }
}
