<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DashboardLaporanController extends Controller
{
    public $tanggal_antrian;
    public function index()
    {
        return view('dashboard.laporan.index');
    }

    public function cetaklaporan()
    {
        $tanggal_antrian = $this->tanggal_antrian;

        if($this->tanggal_antrian == "today"){
            $laporan = Antrian::where('tanggal_antrian', Carbon::now()->toDateString())->where('is_call', 1)->get();
        }else if ($this->tanggal_antrian == "week") {
            $laporan = Antrian::whereBetween('tanggal_antrian', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('is_call', 1)->get();
        }else if ($this->tanggal_antrian == "month"){
            $laporan = Antrian::whereMonth('tanggal_antrian', Carbon::now()->month)->where('is_call', 1)->get();
        }else {
            $laporan = Antrian::where('is_call', 1)->get();
        } 
        
        
        $pdf = PDF::loadView('livewire.dashboard.laporan.cetakLaporan', compact('laporan'));
        return $pdf->stream('laporan.pdf');
    }
}
