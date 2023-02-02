
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="panggilAntrian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Panggil Antrian</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="updatePanggilan">
            <div class="modal-body">
                <h4>Panggil Antrian Ini ?</h4>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Ya</button>
            </div>
        </form>
      </div>
    </div>
  </div>