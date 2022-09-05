<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Table d'en-tête fixe</h3>
                <div class="card-tools d-flex align-items-center ">
                    <button type="button" wire:click='goToRole' class="btn btn-primary mr-4" >
                        <i class="fas fa-user-plus"></i>    Creé role
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" wire:click='goToAdd' class="btn btn-primary mr-4" >
                        <i class="fas fa-user-plus"></i>    Ajouter
                    </button>
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Chercher">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Roles</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->nom}}</td>
                                <td>{{$user->prenom}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->telephone}}</td>
                                <td>{{$user->isAdmin ? "Administrateur":"Client"}}</span></td>
                                <td class="text-center">
                                    {{-- <button class="btn btn-success"><i class="fas fa-eye">voir</i></button> --}}
                                    <button class="btn btn-primary text-light" wire:click='goToEdit({{$user->id}})'><i class="fas fa-eye">Modifier</i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>


            <!-- Modal Ajouter utilisateur-->
            <div class="modal fade" wire:ignore.self id="staticBackdrop" data-bs-backdrop="static" x-data="{ eye: true }" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> {{$editMode ? "modifier":"Ajouter"}} utilisateur </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent='{{$editMode ? "modifier":"ajouter"}}'>

                    <div class="modal-body d-flex flex-wrap">

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

                        @if ($editMode==false)
                        <div class="col-md-6 p-2">
                            <div class="input-group">
                                <span class="input-group-text" x-on:click="eye = ! eye"> <i x-bind:class="eye?'fas fa-eye':'fas fa-eye-slash'"></i> </span>
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
                        @endif


                            {{-- <div class="row g-2"> --}}
                                <div class="col-md mt-3">
                                  <div class="form-floating">
                                    <select class="form-select fs-5" wire:model='role' id="floatingSelectGrid">
                                            <option value="1">Administrateur</option>
                                            <option value="0">Client</option>
                                    </select>
                                    <label for="floatingSelectGrid">selectionner Roles</label>
                                  </div>
                                </div>
                              {{-- </div> --}}


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit"  class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}"> {{$editMode ? "Modifier":"Ajouter"}}</button>
                    </div>
                </form>
                </div>
                </div>
            </div>


            <!-- Modal Ajouter role-->
            {{-- <div class="modal fade" wire:ignore.self id="roleModal" data-bs-backdrop="static" x-data="{ eye: true }" data-bs-keyboard="false" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body d-flex flex-wrap" >
                            <table class="table table-head-fixed text-nowrap table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Liste des roles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td> {{$role->nom}} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col  p-3 ">
                                <form wire:submit.prevent='ajouterRole'>
                                <div class="input-group">
                                    <div class="form-floating ">
                                      <input type="text" wire:model='roleNom' class="form-control  @error('roleNom') is-invalid @enderror" autofocus id="floatingInputGroup30" placeholder="Role" required>
                                      <label for="floatingInputGroup30">Role</label>
                                    </div>
                                  </div>
                                  @error('roleNom')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                  @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit"  class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}"> Ajouter </button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div> --}}



</div>
