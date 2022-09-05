<div>
    <button  class="btn btn-light btn-slide text-primary" wire:click.prevent='creer'>

                <div class="fs-1 rounded-circle">
                    <i class="bi bi-stack"></i>
                </div>
                Acte de Decés
    </button>

    {{-- <h6><button class="text-secondary text-uppercase">creer Actualités</button></h6> --}}
    <div class="modal fade" wire:ignore.self id="decesModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Creer acte de deces</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-wrap">

                <div class="col-md-3 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='extrait_defunt' class="form-control @error('extrait_defunt') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Extrait defunt">
                          <label for="floatingInputGroup3">extrait_defunt</label>
                        </div>
                      </div>
                      @error('extrait_defunt')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3">
                    @if ($extrait_defunt)
                            <div wire:loading wire:target="extrait_defunt">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $extrait_defunt->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>

                <div class="col-md-3 p-2 mt-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='piece_defunt' class="form-control @error('piece_defunt') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Piece defunt">
                          <label for="floatingInputGroup3">Piece du defunt</label>
                        </div>
                      </div>
                      @error('piece_defunt')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3 mt-2">
                    @if ($piece_defunt)
                            <div wire:loading wire:target="piece_defunt">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $piece_defunt->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>

                <div class="col-md-3 p-2 mt-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='certif_medic_deces' class="form-control @error('certif_medic_deces') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Certificat medical">
                          <label for="floatingInputGroup3">Certificat medical</label>
                        </div>
                      </div>
                      @error('certif_medic_deces')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3 mt-2">
                    @if ($certif_medic_deces)
                            <div wire:loading wire:target="certif_medic_deces">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $certif_medic_deces->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>

                <div class="col-md-3 p-2 mt-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='piece_demandeur' class="form-control @error('piece_demandeur') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Piece du demandeur">
                          <label for="floatingInputGroup3">Piece du demandeur</label>
                        </div>
                      </div>
                      @error('piece_demandeur')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3 mt-2">
                    @if ($piece_demandeur)
                            <div wire:loading wire:target="piece_demandeur">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $piece_demandeur->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>


            </div>
            <div class="modal-footer">
              <button wire:click.prevent='ajouter' class="btn btn-primary" >Creer</button>
            </div>
          </div>
        </div>
      </div>

</div>

<script>
    window.addEventListener('showModalDeces', event => {
        $("#decesModal").modal('show');

    });
    window.addEventListener('hideModalDeces', event => {
        $("#decesModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'Acte de deces creer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });
</script>
