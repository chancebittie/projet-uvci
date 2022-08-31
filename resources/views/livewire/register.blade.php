<div class="row justify-content-center " x-data="{ eye: true }">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-header">{{ __('Inscription') }}</div>

            <form method="POST" class="card-body " action="{{ route('register') }}">
                @csrf
                <div class="d-flex flex-wrap">


                    <div class="col-md-6   p-3 ">
                        <div class="input-group">
                            {{-- <span class="input-group-text"> <i class="fas fa-user"></i> </span> --}}
                            <div class="form-floating ">
                              <input type="text" wire:model='nom' class="form-control  @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"  autocomplete="nom" autofocus id="floatingInputGroup1" placeholder="nom" required>
                              <label for="floatingInputGroup1">Nom</label>
                            </div>
                          </div>
                          @error('nom')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                          @enderror
                    </div>

                    <div class="col-md-6   p-3">
                        <div class="input-group">
                            {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                            <div class="form-floating ">
                              <input type="text" wire:model='prenom' class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}"  autocomplete="prenom" autofocus id="floatingInputGroup2" placeholder="Prenom" required>
                              <label for="floatingInputGroup2">Prenom</label>
                            </div>
                          </div>
                          @error('prenom')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                          @enderror
                    </div>

                    <div class="col-md-6 p-2">
                        <div class="input-group">
                            {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                            <div class="form-floating ">
                              <input type="text" wire:model='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"  id="floatingInputGroup3" placeholder="Email" required>
                              <label for="floatingInputGroup3">Email</label>
                            </div>
                          </div>
                          @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                          @enderror
                    </div>

                    <div class="col-md-6 p-2">
                        <div class="input-group">
                            {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                            <div class="form-floating ">
                              <input type="text" wire:model='telephone' class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}"  autocomplete="telephone"  id="floatingInputGroup8" placeholder="Telephone" required>
                              <label for="floatingInputGroup3">Telephone</label>
                            </div>
                          </div>
                          @error('telephone')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                          @enderror
                    </div>

                    <div class="col-md-6 p-2">
                        <div class="input-group">
                            <span class="input-group-text" x-on:click="eye = ! eye"> <i x-bind:class="eye?'bi bi-eye-fill':'bi bi-eye-slash-fill'"></i> </span>
                            <div class="form-floating ">
                              <input x-bind:type="eye? 'text':'password'" wire:model='password' class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="email"  id="floatingInputGroup3" placeholder="password" required>
                              <label for="floatingInputGroup3">Mots de passe</label>
                            </div>
                        </div>
                          @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                          @enderror
                    </div>

                    <div class="col-md-6 p-2">
                        <div class="input-group">
                            <span class="input-group-text" x-on:click="eye = ! eye"> <i x-bind:class="eye?'bi bi-eye-fill':'bi bi-eye-slash-fill'"></i> </span>
                            <div class="form-floating ">
                              <input type="password" wire:model='password_confirmation' x-bind:type="eye? 'text':'password'" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}"  autocomplete="password_confirmation"  id="floatingInputGroup4" required>
                              <label for="floatingInputGroup2">Comfirmation</label>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>


                    <div class="row mt-3 pb-3 mx-auto">
                        {{-- <div class=" mx-auto"> --}}
                            <button type="submit" class="btn mx-auto col-md-3 {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}">
                                {{ __("s'inscrire") }}
                            </button>
                        {{-- </div> --}}
                    </div>
                </form>
        </div>
    </div>
</div>
