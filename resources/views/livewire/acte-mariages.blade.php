<div>
    <button  class="btn btn-light btn-slide text-primary" wire:click.prevent='creer'>
            <div class="fs-1 rounded-circle">
                <i class="bi bi-gift-fill"></i>
            </div>
            Acte de mariage
    </button>

    {{-- <h6><button class="text-secondary text-uppercase">creer Actualités</button></h6> --}}
    <div class="modal fade" wire:ignore.self id="mariageModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Creer acte de mariage</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-wrap">

                <div class="col-md-3   p-3 ">
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='extrait_homme' class="form-control  @error('extrait_homme') is-invalid @enderror" autocomplete="extrait_homme" autofocus id="floatingInputGroup1" placeholder="Extrait homme" required>
                          <label for="floatingInputGroup1">Extrait homme</label>
                        </div>
                      </div>
                      @error('extrait_homme')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>



                <div class="col-md-3">
                    @if ($extrait_homme)
                            <div wire:loading wire:target="extrait_homme">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $extrait_homme->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>
                <div class="col-md-3 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='extrait_femme' class="form-control @error('extrait_femme') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Extrait femme">
                          <label for="floatingInputGroup3">Extrait femme</label>
                        </div>
                      </div>
                      @error('extrait_femme')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3">
                    @if ($extrait_femme)
                            <div wire:loading wire:target="extrait_femme">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $extrait_femme->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>
                <div class="col-md-3 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='piece_homme' class="form-control @error('piece_homme') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Piece homme">
                          <label for="floatingInputGroup3">Piece homme</label>
                        </div>
                      </div>
                      @error('piece_homme')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3">
                    @if ($piece_homme)
                            <div wire:loading wire:target="piece_homme">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $piece_homme->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>
                <div class="col-md-3 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='piece_femme' class="form-control @error('piece_femme') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Piece femme">
                          <label for="floatingInputGroup3">Piece femme</label>
                        </div>
                      </div>
                      @error('piece_femme')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3">
                    @if ($piece_femme)
                            <div wire:loading wire:target="piece_femme">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $piece_femme->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>

            </div>
            <div class="modal-footer">
              <button wire:click.prevent='ajouter' class="btn btn-primary" >Ajouter</button>
            </div>



          </div>
        </div>
      </div>

</div>

<script>
     window.addEventListener('showModalMariage', event => {
        $("#mariageModal").modal('show');

    });
    window.addEventListener('hideModalMariage', event => {
        $("#mariageModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'acte de mariage creer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });
</script>
