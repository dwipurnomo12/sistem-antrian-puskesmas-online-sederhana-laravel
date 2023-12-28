<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $poliUmum   = Antrian::where('poli', 'umum')->where('is_call', false)->count();
        $poliGigi   = Antrian::where('poli', 'gigi')->where('is_call', false)->count();
        $poliTht    = Antrian::where('poli', 'tht')->where('is_call', false)->count();
        $polLansia  = Antrian::where('poli', 'lansia & disabilitas')->where('is_call', false)->count();
        $poliBalita = Antrian::where('poli', 'balita')->where('is_call', false)->count();
        $poliKia    = Antrian::where('poli', 'kia & kb')->where('is_call', false)->count();
        $poliNifas  = Antrian::where('poli', 'nifas/pnc')->where('is_call', false)->count();

        return view('dashboard.index', [
            'poliUmum'      => $poliUmum,
            'poliGigi'      => $poliGigi,
            'poliTht'       => $poliTht,
            'poliLansia'    => $polLansia,
            'poliBalita'    => $poliBalita,
            'poliKia'       => $poliKia,
            'poliNifas'     => $poliNifas,
        ]);
    }
}
