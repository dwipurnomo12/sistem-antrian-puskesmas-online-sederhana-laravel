<div>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="card-title">Laporan Antrian</div>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <a class="btn btn-success float-end" a href="{{ route('cetakLaporan') }}" target="_blank"><i
                        class="bi bi-printer"></i></a>

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <select wire:model="tanggal_antrian" class="form-control">
                                <option value="">Semua Tanggal</option>
                                <option value="today">Hari ini</option>
                                <option value="week">Minggu ini</option>
                                <option value="month">Bulan ini</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-3">
                            <select wire:model="poli" class="form-control">
                                <option value="">Semua Poli</option>
                                <option value="umum">Poli Umum</option>
                                <option value="gigi">poli Gigi</option>
                                <option value="tht">Poli THT</option>
                                <option value="lansia & disabilitas">Lansia & Disabilitas</option>
                                <option value="balita">Balita</option>
                                <option value="kia & kb">KIA & KB</option>
                                <option value="nifas/pnc">Nifas / PNC</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input wire:model="search" type="search" class="form-control"
                                placeholder="Cari Nama Pasien" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table_id">
                                <thead>
                                    <tr style="text-align: center">
                                        <th scope="col">No Antrian</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Nomor KTP</th>
                                        <th scope="col">Tgl. Lahir</th>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Poli</th>
                                        <th scope="col">Tgl. Antrian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $list)
                                        <tr style="text-align: center">
                                            <td>{{ $list->no_antrian }}</td>
                                            <td>{{ $list->nama }}</td>
                                            <td>{{ $list->alamat }}</td>
                                            <td>{{ $list->jenis_kelamin }}</td>
                                            <td>{{ $list->no_hp }}</td>
                                            <td>{{ $list->no_ktp }}</td>
                                            <td>{{ $list->tgl_lahir }}</td>
                                            <td>{{ $list->pekerjaan }}</td>
                                            <td>{{ $list->poli }}</td>
                                            <td>{{ $list->tanggal_antrian }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $laporan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
