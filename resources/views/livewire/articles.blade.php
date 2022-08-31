<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Article : {{$article_nombre}} </h3>
                <div class="card-tools d-flex align-items-center ">
                    <button type="button" wire:click='goToTypeArticle' class="btn btn-primary mr-4" >
                        <i class="fas fa-user-plus"></i>    Creé type article
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" wire:click='goToAdd' class="btn btn-primary mr-4" >
                        <i class="fas fa-user-plus"></i>    Ajouter article
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
                            <th>Prix</th>
                            <th>Type</th>
                            <th>image</th>
                            {{-- <th>Roles</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->nom}}</td>
                                <td>{{$article->prix}}</td>
                                <td>
                                    <img src="{{ Storage::url($article->imageUrl)  }}" width="50" height="50" style="border-radius: 50%;">

                                    {{-- <img src="{{$article->imageUrl}}" alt="" width="20"> --}}
                                </td>
                                <td>ss</td>
                                {{-- <td>{{$user->isAdmin ? "Administrateur":"Client"}}</span></td> --}}
                                <td class="text-center">
                                    <button class="btn btn-success"><i class="fas fa-eye">voir</i></button>
                                    <button class="btn btn-warning text-light" wire:click='goToEdit({{$article->id}})'><i class="fas fa-eye">Modifier</i></button>
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
                    <form wire:submit.prevent='{{$editMode ? "modifier":"ajouter"}}' enctype="multipart/form-data">

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
                                  <input type="text" wire:model='prix' class="form-control @error('prenom') is-invalid @enderror"   autocomplete="prix"  id="floatingInputGroup2" placeholder="Prix" required>
                                  <label for="floatingInputGroup2">Prix</label>
                                </div>
                              </div>
                              @error('prix')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>


                        <div class="col-md-6 p-2"  >
                            <div class="input-group">
                                {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                                <div class="form-floating ">
                                  <input type="file" wire:model='imageUrl' class="form-control @error('imageUrl') is-invalid @enderror"    id="floatingInputGroup8" placeholder="image" required>
                                  <label for="floatingInputGroup3">Image</label>
                                </div>
                              </div>
                              <div wire:loading wire:target="imageUrl">Chatgement de l'image...</div>
                              @if ($imageUrl)
                                    Photo Preview:
                                    <img src="{{ $imageUrl->temporaryUrl() }}" width="100" height="100">
                                @endif
                              @error('imageUrl')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>

                        <div class="col-md mt-3">
                            <div class="form-floating">
                              <select class="form-select fs-5 text-dark" wire:model='type_article_id' id="floatingSelectGrid">
                                        @foreach ($typeArticles as $typeArticle)
                                            <option value="{{$typeArticle->id}}">{{$typeArticle->type_nom}} </option>
                                        @endforeach
                              </select>
                              <label for="floatingSelectGrid">selectionner type article</label>
                            </div>
                          </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit"  class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}"> {{$editMode ? "Modifier":"Ajouter"}}</button>
                    </div>
                </form>
                </div>
                </div>
            </div>


            <!-- Modal Ajouter typeArticle-->
            <div class="modal fade" wire:ignore.self id="TyptArticleModal" data-bs-backdrop="static" x-data="{ eye: true }" data-bs-keyboard="false" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Type article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    {{-- <form wire:submit.prevent='createTypeArticle'> --}}
                        <div class="modal-body d-flex flex-wrap" >
                            <table class="table table-head-fixed text-nowrap table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Liste des types d'Article</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typeArticles as $typeArticle)
                                        <tr>
                                            <td> {{$typeArticle->type_nom}} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col  p-3 ">
                                <div class="input-group">
                                    <div class="form-floating ">
                                      <input type="text" wire:model='type_nom' class="form-control  @error('type_nom') is-invalid @enderror" autofocus id="floatingInputGroup30" placeholder="Type article nom" required>
                                      <label for="floatingInputGroup30">Type article nom</label>
                                    </div>
                                  </div>
                                  @error('type_nom')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                  @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" wire:click.prevent='createTypeArticle' class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}"> Ajouter </button>
                        </div>
                    {{-- </form> --}}
                    </div>
                    </div>
                </div>



</div>
