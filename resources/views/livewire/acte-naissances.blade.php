<div>
    <button  class="btn btn-light btn-slide text-primary" wire:click.prevent='creer'>
        <div class="fs-1 rounded-circle ">
            <i class="bi bi-stack"></i>
        </div>
        Acte de naissance
    </button>

    {{-- <h6><button class="text-secondary text-uppercase">creer Actualités</button></h6> --}}
    <div class="modal fade" wire:ignore.self id="naissanceModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Creer acte de naissance</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-wrap">

                <div class="col-md-6   p-3 ">
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="text" wire:model='nom' class="form-control  @error('nom') is-invalid @enderror" autocomplete="nom" autofocus id="floatingInputGroup1" placeholder="Nom" required>
                          <label for="floatingInputGroup1">nom</label>
                        </div>
                      </div>
                      @error('nom')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>

                <div class="col-md-6   p-3 ">
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="text" wire:model='prenom' class="form-control  @error('prenom') is-invalid @enderror" autocomplete="prenom" autofocus id="floatingInputGroup1" placeholder="prenom" required>
                          <label for="floatingInputGroup1">Prenom</label>
                        </div>
                      </div>
                      @error('prenom')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-12   p-3 ">
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="date" wire:model='date_naissance' class="form-control  @error('date_naissance') is-invalid @enderror" autocomplete="date_naissance" autofocus id="floatingInputGroup1" placeholder="Date naissance" required>
                          <label for="floatingInputGroup1">Date naissance</label>
                        </div>
                      </div>
                      @error('date_naissance')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='acte_naissance_pere' class="form-control @error('acte_naissance_pere') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Acte de naissance du pere">
                          <label for="floatingInputGroup3">Acte de naissance du pere</label>
                        </div>
                      </div>
                      @error('acte_naissance_pere')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3">
                    @if ($acte_naissance_pere)
                            <div wire:loading wire:target="photo">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $acte_naissance_pere->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>
                <div class="col-md-3 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='acte_naissance_mere' class="form-control @error('acte_naissance_mere') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Acte de naissance du mere">
                          <label for="floatingInputGroup3">Acte de naissance du mére</label>
                        </div>
                      </div>
                      @error('acte_naissance_mere')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-3">
                    @if ($acte_naissance_mere)
                            <div wire:loading wire:target="photo">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $acte_naissance_mere->temporaryUrl() }}" width="150" height="150">

                   @endif
                </div>

            </div>
            <div class="modal-footer">
              <button wire:click.prevent='ajouter' class="btn btn-primary" >creer</button>
            </div>
          </div>
        </div>
      </div>

</div>

<script>
    window.addEventListener('showModalNaissance', event => {
        $("#naissanceModal").modal('show');

    });
    window.addEventListener('hideModalNaissance', event => {
        $("#naissanceModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'acte de naissance creer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });


</script>
