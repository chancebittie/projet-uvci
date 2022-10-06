<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">action</h3>
                <div class="card-tools d-flex align-items-center ">
                    <!-- Button trigger modal -->
                    <button type="button" wire:click='creer' class="btn btn-primary mr-4" >
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
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date Naissance</th>
                            <th>Acte pére</th>
                            <th>Acte mére</th>
                            {{-- <th>Date</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actes_naissances as $acte_naissances)
                            <tr>
                                <td>{{substr($acte_naissances->nom, 0 , 20)}}...</td>
                                <td>{{substr($acte_naissances->prenom, 0 , 20)}}...</td>
                                <td>{{$acte_naissances->date_naissance}}</td>
                                <td>
                                    <img src="{{ Storage::url($acte_naissances->acte_naissance_pere)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($acte_naissances->acte_naissance_mere)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                {{-- <td>{{$acte_naissances->updated_at->diffForHumans()}}</td> --}}
                                <td class="text-center">
                                    <button class="btn btn-success"><i class="fas fa-eye">voir</i></button>
                                    <button class="btn btn-warning text-light" wire:click='goToEdit({{$acte_naissances->id}})'><i class="fas fa-eye">Modifier</i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>


            <!-- Modal Ajouter utilisateur-->
            <div class="modal fade" wire:ignore.self id="naissanceModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered  modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">  {{$editMode ? 'Modifier' : 'creer'}} un acte de naissance</h5>
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
                            @if ($editMode)
                                     {{-- ici s'affiche le preview image avant l'envoi --}}
                                 {{-- <img id="blahs" class="postImg" src="http://placehold.it/180" alt="votre image" /> --}}

                                 <img src="{{ Storage::url($acte_naissance_pere)  }}" width="50" height="50">
                              @else
                                @if ($acte_naissance_pere)
                                    Photo Preview:
                                    <img src="{{ $acte_naissance_pere->temporaryUrl() }}" width="100" height="100">
                                @endif
                              @endif
                        </div>
                        <div class="col-md-3 p-2"  >
                            <div class="input-group">
                                <div class="form-floating ">
                                  <input type="file" wire:model='acte_naissance_mere' class="form-control @error('acte_naissance_mere') is-invalid @enderror"    id="floatingInputGroup8" placeholder="Acte de naissance du mere">
                                  <label for="floatingInputGroup3">Acte de naissance de la mére</label>
                                </div>
                              </div>
                              @error('acte_naissance_mere')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="col-md-3">
                            @if ($editMode)
                                     {{-- ici s'affiche le preview image avant l'envoi --}}
                                 {{-- <img id="blahs" class="postImg" src="http://placehold.it/180" alt="votre image" /> --}}

                                 <img src="{{ Storage::url($acte_naissance_mere)  }}" width="50" height="50" >
                              @else
                                @if ($acte_naissance_mere)
                                    Photo Preview:
                                    <img src="{{ $acte_naissance_mere->temporaryUrl() }}" width="100" height="100">
                                @endif
                              @endif
                        </div>

                    </div>
                    <div class="modal-footer">
                      <button wire:click.prevent='{{$editMode ? 'modifier' : 'ajouter'}}' class="btn btn-primary" > {{$editMode ? 'Modifier' : 'creer'}} </button>
                    </div>
                  </div>
                </div>
              </div>





</div>
