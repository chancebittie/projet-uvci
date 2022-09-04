<div class="col-lg-7">
    {{-- <div class="bg-light  wow fadeIn" data-wow-delay="0.5s">
        <form wire:submit.prevent='submit'>

        </form>
    </div> --}}
    <div class="bg-light text-center p-5 wow fadeIn border-1 shadow" data-wow-delay="0.5s">
        <form wire:submit.prevent='submit'>
            <div class="row g-3 border-1">
                <div class="col-12 col-sm-6">
                    {{-- <input type="text" class="form-control border-1" placeholder="Votre titre" style="height: 55px;"> --}}
                    <div class="input-group"> <div class="form-floating ">
                          <input type="text" wire:model='titre' class="form-control  @error('titre') is-invalid @enderror" name="titre"  autocomplete="titre"  id="floatingInputGroup1" placeholder="Le titre de l'emploi" required>
                          <label for="floatingInputGroup1">Le titre de l'emploi</label>
                        </div>
                      </div>
                      @error('titre')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="col-12 col-sm-6">
                    {{-- <input type="text" class="form-control border-1" placeholder="Votre societe" style="height: 55px;"> --}}
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="text" wire:model='societe' class="form-control @error('societe') is-invalid @enderror" name="societe"  autocomplete="societe"  id="floatingInputGroup2" placeholder="Le nom de votre societe" required>
                          <label for="floatingInputGroup2">Le nom de votre societe</label>
                        </div>
                      </div>
                      @error('societe')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-12 col-sm-6">
                    {{-- <input type="nombre" class="form-control border-1" placeholder="Votre nombre" style="height: 55px;"> --}}
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="text" wire:model='nombre' class="form-control @error('nombre') is-invalid @enderror" name="nombre"    id="floatingInputGroup3" placeholder="Le nombre de poste" required>
                          <label for="floatingInputGroup3">Le nombre de poste</label>
                        </div>
                      </div>
                      @error('nombre')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
                <div class="col-12 col-sm-6">
                    {{-- <input type="text" class="form-control border-1" placeholder="Votre numéro de téléphone" style="height: 55px;"> --}}
                    <div class="input-group">
                        {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                        <div class="form-floating ">
                          <input type="text" disabled value="{{Auth::user()->nom}} {{Auth::user()->prenom}}" class="form-control" name="telephone" value="{{ old('telephone') }}" id="floatingInputGroup8"  >
                          <label for="floatingInputGroup3">Utilisateur</label>
                        </div>
                      </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <div class="form-floating ">
                            <textarea class="form-control "  name="description" wire:model='description' style="height: 100px" placeholder="La description de l'emploi" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">La description de l'emploi ...</label>
                        </div>
                      </div>
                    @error('description')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</div>
