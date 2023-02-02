<?php

namespace App\Http\Livewire\Dashboard\DaftarPoli;

use App\Models\Antrian;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardPoliTht extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $antrian_id;


    public function panggilAntrian($antrian_id)
    {
        $this->antrian_id = $antrian_id;
    }

    public function updatePanggilan()
    {
        Antrian::find($this->antrian_id)->update(['is_call' => 1]);
        
        session()->flash('success', 'Berhasil Mengambil Antrian Ini');
        $this->dispatchBrowserEvent('closeModal');
    }

    public function render()
    {
        return view('livewire.dashboard.daftar-poli.dashboard-poli-tht',[
            'poliTht' => Antrian::where('poli', 'tht')->where('is_call', 0)->paginate(10)
        ]);
    }
}
