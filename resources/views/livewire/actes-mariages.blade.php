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
                            <th>extrait homme</th>
                            <th>extrait femme</th>
                            <th>piece homme</th>
                            <th>piece femme</th>
                            <th>Date</th>
                            {{-- <th>Date</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actes_mariages as $acte_mariages)
                            <tr>
                                <td>
                                    <img src="{{ Storage::url($acte_mariages->extrait_homme)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($acte_mariages->extrait_femme)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($acte_mariages->piece_homme)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>

                                <td>
                                    <img src="{{ Storage::url($acte_mariages->piece_femme)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>{{$acte_mariages->created_at}}</td>
                                <td class="text-center">
                                    <button class="btn btn-success" disabled><i class="fas fa-eye">voir</i></button>
                                    <button class="btn btn-warning text-light" disabled wire:click='goToEdit({{$acte_mariages->id}})'><i class="fas fa-eye">Modifier</i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>


            <!-- Modal Ajouter utilisateur-->
            <div class="modal fade" wire:ignore.self id="mariageModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel"> {{$editMode ? "Modifier" : "Creer"}}  acte de mariage</h5>
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
                      <button wire:click.prevent='{{$editMode ? "modifier" : "ajouter"}}' class="btn btn-primary" >{{$editMode ? "Modifier" : "Ajouter"}}</button>
                    </div>



                  </div>
                </div>
              </div>


</div>
