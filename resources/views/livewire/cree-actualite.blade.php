<div>
    <button class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">creer Actualité</button>

    {{-- <h6><button class="text-secondary text-uppercase">creer Actualités</button></h6> --}}
    <div class="modal fade" wire:ignore.self id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Creer Actualité</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-wrap">

                <div class="col-md-12   p-3 ">
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="text" wire:model='titre' class="form-control  @error('titre') is-invalid @enderror" autocomplete="titre" autofocus id="floatingInputGroup1" placeholder="Titre" required>
                          <label for="floatingInputGroup1">Titre</label>
                        </div>
                      </div>
                      @error('titre')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>



                <div class="col-md-12 p-2">
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                            <textarea class="form-control "  name="description" wire:model='description' style="height: 100px" placeholder="Entrez votre message" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Entrez votre message</label>

                          {{-- <input type="text" wire:model='description' class="form-control @error('description') is-invalid @enderror"  autocomplete="description"  id="floatingInputGroup3" placeholder="Description" required>
                          <label for="floatingInputGroup3">Description</label> --}}
                        </div>
                      </div>
                      @error('description')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>

                <div class="col-md-12 p-2"  >
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="file" wire:model='photo' class="form-control @error('photo') is-invalid @enderror"    id="floatingInputGroup8" placeholder="image">
                          <label for="floatingInputGroup3">Image</label>
                        </div>
                      </div>
                      @error('photo')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-md-12">
                    @if ($photo)
                            <div wire:loading wire:target="photo">Chatgement de l'image...</div>
                            Previsualition de Photo :
                            <img src="{{ $photo->temporaryUrl() }}" width="150" height="150">

                   @endif


                </div>


            </div>
            <div class="modal-footer">
              <button wire:click.prevent='ajouter' class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Ajouter</button>
            </div>
          </div>
        </div>
      </div>

</div>
