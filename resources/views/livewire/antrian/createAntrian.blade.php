<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createAntrian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Ambil Antrian</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="close_modal" aria-label="Close"></button>
        </div>

        <form wire:submit.prevent="save">
            <div class="modal-body">
              <div class="mb-3">
                <label>Tanggal Antrian</label>
                <input type="text" wire:model="tanggal_antrian" class="form-control" value="{{ $tanggal_antrian }}"readonly>
                @error('tanggal_antrian') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
              <div class="mb-3">
                <label>Nomor Antrian</label>
                <input type="string" wire:model="no_antrian" class="form-control" value="{{ $no_antrian }}" readonly>
                @error('no_antrian') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" wire:model="nama" class="form-control">
                @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea class="form-control" wire:model="alamat" cols="20"></textarea>
                @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select class="form-select" wire:model="jenis_kelamin" aria-label="Default select example">
                    <option selected>pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                @error('jenis_kelamin') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Nomor HP</label>
                <input type="text" wire:model="no_hp" class="form-control">
                @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
            </div> 
            <div class="mb-3">
                <label>Nomor KTP</label>
                <input type="text" wire:model="no_ktp" class="form-control">
                @error('no_ktp') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Ambil Antrian Untuk Poli</label>
                <select class="form-select" wire:model="poli" aria-label="Default select example">
                    <option selected>pilih Poli</option>
                    <option value="umum">Umum</option>
                    <option value="gigi">Gigi</option>
                    <option value="tht">THT</option>
                  </select>
                @error('poli') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="close_modal" >Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

      </div>
    </div>
  </div>