<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrukturDashboardController extends Controller
{
    public function index()
    {

        return view('instruktur.dashboard.index');
    }
}
