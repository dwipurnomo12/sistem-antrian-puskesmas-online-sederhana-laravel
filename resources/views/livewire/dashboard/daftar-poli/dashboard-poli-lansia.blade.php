<div>
    <div class="container">
        <div class="card mt-3" style="height: 550px">
            <div class="card-body">
                <div class="card-title">Daftar Antrian Poli Lansia & Disabilitas</div>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

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
                                        <th scope="col">Panggil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($poliLansia as $list)
                                        <tr style="text-align: center">
                                            <td>{{ $list->no_antrian }}</td>
                                            <td>{{ $list->nama }}</td>
                                            <td>{{ $list->alamat }}</td>
                                            <td>{{ $list->jenis_kelamin }}</td>
                                            <td>{{ $list->no_hp }}</td>
                                            <td>{{ $list->no_ktp }}</td>
                                            <td>
                                                <a class="btn btn-success"
                                                    wire:click="panggilAntrian({{ $list->id }})" role="button"
                                                    data-bs-toggle="modal" data-bs-target="#panggilAntrian"><i
                                                        class="bi bi-telephone-forward"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $poliLansia->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.dashboard.daftar-poli.panggilAntrian')
</div>
