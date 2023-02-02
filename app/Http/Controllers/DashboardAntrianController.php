<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAntrianController extends Controller
{
    public function indexPoliUmum()
    {
        return view('dashboard.antrian.poliUmum');
    }

    public function indexPoliGigi()
    {
        return view('dashboard.antrian.poliGigi');
    }

    public function indexPoliTht()
    {
        return view('dashboard.antrian.poliTht');
    }
}
