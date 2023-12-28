<section id="antrian" class="d-flex align-items-center">
    <div class="container" style="margin-top: 150px">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($cekAntrian > 0)
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table-barang">
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
                                <th scope="col">Tgl Antrian</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detailAntrian as $item)
                                <tr style="text-align: center">
                                    <td>{{ $item->no_antrian }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->poli }}</td>
                                    <td>{{ $item->tanggal_antrian }}</td>
                                    <td>
                                        <a class="btn btn-success" a href="{{ route('cetakAntrian') }}"
                                            target="_blank"><i class="bi bi-printer"></i></a>

                                        <a class="btn btn-warning" wire:click="editAntrian({{ $item->id }})"
                                            role="button" data-bs-toggle="modal" data-bs-target="#editAntrian"><i
                                                class="bi bi-pencil"></i></a>

                                        <button type="button" class="btn btn-danger"
                                            wire:click="deleteAntrian({{ $item->id }})" role="button"
                                            data-bs-toggle="modal" data-bs-target="#deleteAntrian"><i
                                                class="bi bi-trash"></i></button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            {{-- Jangan Tampilkan Apa-apa --}}
        @endif

        @include('livewire.antrian.editAntrian')

        @include('livewire.antrian.createAntrian')

        @auth
            <!-- Button Modal -->
            <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#createAntrian">
                <i class="bi bi-file-plus me-1"></i>Ambil Antrian
            </button>
        @else
            <a href="/login" type="button" class="btn btn-primary my-3">
                <i class="bi bi-file-plus me-1"></i>Login Untuk Ambil Antrian
            </a>
        @endauth

        <div class="row">
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="poli">
                        <option value="">Sortir Berdasarkan Poli</option>
                        <option value="umum">Poli Umum</option>
                        <option value="gigi">Poli Gigi</option>
                        <option value="tht">Poli THT</option>
                        <option value="lansia & disabilitas">Lansia & Disabilitas</option>
                        <option value="balita">Balita</option>
                        <option value="kia & kb">KIA & KB</option>
                        <option value="nifas/pnc">Nifas / PNC</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <tr style="text-align: center">
                                <th scope="col">No</th>
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
                            @foreach ($antrian as $item)
                                <tr style="text-align: center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->no_antrian }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>
                                        {{ substr_replace($item->no_ktp, '******', 4, 6) }}
                                    </td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->poli }}</td>
                                    <td>{{ $item->tanggal_antrian }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $antrian->links() }}
            </div>
        </div>
    </div>
    @include('livewire.antrian.deleteAntrian')
</section><!-- End Hero -->
