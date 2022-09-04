<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Contactez-nous</h1>
            <p class="mb-5">Pour toutes informations ou préocupations, nous vous prions de nous contacter via ces coordonnées.</p>
            <div class="d-flex align-items-center">
                <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                <div class="ps-4">
                    <h6>Téléphone</h6>
                    <h3 class="text-primary m-0">+225 0545909666</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="bg-light text-center p-5 wow fadeIn border-1 shadow" data-wow-delay="0.5s">
                <form wire:submit.prevent='submit'>
                    <div class="row g-3 border-1">
                        <div class="col-12 col-sm-6">
                            {{-- <input type="text" class="form-control border-1" placeholder="Votre nom" style="height: 55px;"> --}}
                            <div class="input-group"> <div class="form-floating ">
                                  <input type="text" wire:model='nom' class="form-control  @error('nom') is-invalid @enderror" name="nom"  autocomplete="nom"  id="floatingInputGroup1" placeholder="Votre nom" required>
                                  <label for="floatingInputGroup1">Votre nom</label>
                                </div>
                              </div>
                              @error('nom')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div>
                        <div class="col-12 col-sm-6">
                            {{-- <input type="text" class="form-control border-1" placeholder="Votre prenom" style="height: 55px;"> --}}
                            <div class="input-group">
                                {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                                <div class="form-floating ">
                                  <input type="text" wire:model='prenom' class="form-control @error('prenom') is-invalid @enderror" name="prenom"  autocomplete="prenom"  id="floatingInputGroup2" placeholder="Votre Prenom" required>
                                  <label for="floatingInputGroup2">Votre Prenom</label>
                                </div>
                              </div>
                              @error('prenom')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="col-12 col-sm-6">
                            {{-- <input type="email" class="form-control border-1" placeholder="Votre email" style="height: 55px;"> --}}
                            <div class="input-group">
                                {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                                <div class="form-floating ">
                                  <input type="text" wire:model='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"  id="floatingInputGroup3" placeholder="Votre Adresse Email" required>
                                  <label for="floatingInputGroup3">Votre Adresse Email</label>
                                </div>
                              </div>
                              @error('email')
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
                                  <input type="text" wire:model='telephone' class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}"  autocomplete="telephone"  id="floatingInputGroup8" placeholder="Votre numéro de Telephone" required>
                                  <label for="floatingInputGroup3">Votre numéro de Telephone</label>
                                </div>
                              </div>
                              @error('telephone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-2 @error('description') is-invalid @enderror" wire:model='description' placeholder="Votre demande..."></textarea>
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
    </div>
</div>
