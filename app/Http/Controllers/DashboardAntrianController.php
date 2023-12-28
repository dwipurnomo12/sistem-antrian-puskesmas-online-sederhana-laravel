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

    public function indexPoliLansia()
    {
        return view('dashboard.antrian.poliLansia');
    }

    public function indexPoliBalita()
    {
        return view('dashboard.antrian.poliBalita');
    }

    public function indexPoliKia()
    {
        return view('dashboard.antrian.PoliKia');
    }

    public function indexPoliNifas()
    {
        return view('dashboard.antrian.poliNifas');
    }
}
