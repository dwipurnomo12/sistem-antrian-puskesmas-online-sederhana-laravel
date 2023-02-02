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
        $jumlahAntrianHariIni = Antrian::whereDate('tanggal_antrian', now()->toDateString())->count();
        $jumlahAntrianMingguIni = Antrian::whereBetween('tanggal_antrian', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $jumlahAntrianBulanIni = Antrian::whereMonth('tanggal_antrian', Carbon::now()->month)->count();
        $totalAntrian = Antrian::all()->count();

        return view('dashboard.index', [
            'jumlahAntrianHariIni' => $jumlahAntrianHariIni,
            'jumlahAntrianMingguIni' => $jumlahAntrianMingguIni,
            'jumlahAntrianBulanIni' => $jumlahAntrianBulanIni,
            'totalAntrian' => $totalAntrian
        ]);
    }
}
