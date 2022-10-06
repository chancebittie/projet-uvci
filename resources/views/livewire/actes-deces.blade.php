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
                            <th>extrait_defunt</th>
                            <th>piece_defunt</th>
                            <th>certif_medic_deces</th>
                            <th>piece_demandeur</th>
                            <th>Date</th>
                            {{-- <th>Date</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actes_deces as $acte_deces)
                            <tr>
                                <td>
                                    <img src="{{ Storage::url($acte_deces->extrait_defunt)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($acte_deces->piece_defunt)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($acte_deces->certif_medic_deces)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($acte_deces->piece_demandeur)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td>
                                <td>{{$acte_deces->created_at->diffForHumans()}}</td>
                                <td class="text-center">
                                    <button class="btn btn-success" disabled><i class="fas fa-eye">voir</i></button>
                                    <button class="btn btn-warning text-light" disabled wire:click='goToEdit({{$acte_deces->id}})'><i class="fas fa-eye">Modifier</i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>


            <!-- Modal Ajouter utilisateur-->
            <div class="modal fade" wire:ignore.self id="decesModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">{{$editMode ? 'Modifier' : 'creer'}} acte de deces</h5>
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
                            @if ($editMode)
                                     {{-- ici s'affiche le preview image avant l'envoi --}}
                                 {{-- <img id="blahs" class="postImg" src="http://placehold.it/180" alt="votre image" /> --}}

                                 <img src="{{ Storage::url($extrait_defunt)  }}" width="50" height="50" >
                              @else
                                @if ($extrait_defunt)
                                    Photo Preview:
                                    <img src="{{ $extrait_defunt->temporaryUrl() }}" width="100" height="100">
                                @endif
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
                            @if ($editMode)
                                     {{-- ici s'affiche le preview image avant l'envoi --}}
                                 {{-- <img id="blahs" class="postImg" src="http://placehold.it/180" alt="votre image" /> --}}

                                 <img src="{{ Storage::url($piece_defunt)  }}" width="50" height="50" >
                              @else
                                @if ($piece_defunt)
                                    Photo Preview:
                                    <img src="{{ $piece_defunt->temporaryUrl() }}" width="100" height="100">
                                @endif
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
                            @if ($editMode)
                                     {{-- ici s'affiche le preview image avant l'envoi --}}
                                 {{-- <img id="blahs" class="postImg" src="http://placehold.it/180" alt="votre image" /> --}}

                                 <img src="{{ Storage::url($certif_medic_deces)  }}" width="50" height="50" >
                              @else
                                @if ($certif_medic_deces)
                                    Photo Preview:
                                    <img src="{{ $certif_medic_deces->temporaryUrl() }}" width="100" height="100">
                                @endif
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
                            @if ($editMode)
                                     {{-- ici s'affiche le preview image avant l'envoi --}}
                                 {{-- <img id="blahs" class="postImg" src="http://placehold.it/180" alt="votre image" /> --}}

                                 <img src="{{ Storage::url($piece_demandeur)  }}" width="50" height="50" >
                              @else
                                @if ($piece_demandeur)
                                    Previsualisation Photo :
                                    <img src="{{ $piece_demandeur->temporaryUrl() }}" width="100" height="100">
                                @endif
                              @endif
                            {{-- @if ($piece_demandeur)
                                    <div wire:loading wire:target="piece_demandeur">Chatgement de l'image...</div>
                                    Previsualition de Photo :
                                    <img src="{{ $piece_demandeur->temporaryUrl() }}" width="150" height="150">

                           @endif --}}
                        </div>


                    </div>
                    <div class="modal-footer">
                      <button wire:click.prevent='{{$editMode ? 'modifier' : 'ajouter'}}' class="btn btn-primary" >{{$editMode ? 'Modifier' : 'Creer'}}</button>
                    </div>
                  </div>
                </div>
              </div>


</div>
