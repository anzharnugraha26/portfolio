<?php

namespace App\Http\Controllers\AnzharEcommerce\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('anzhar-ecommerce.admin.dashboard.index');
    }
}
