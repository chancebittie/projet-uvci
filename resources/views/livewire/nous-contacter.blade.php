<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">contacter</h3>
                <div class="card-tools d-flex align-items-center ">
                    <!-- Button trigger modal -->
                    {{-- <button type="button" wire:click='goToAdd' class="btn btn-primary mr-4" >
                        <i class="fas fa-user-plus"></i>    Ajouter
                    </button> --}}
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
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Desscription</th>
                            <th>Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacters as $contacter)
                            <tr>
                                <td>{{substr($contacter->nom, 0 , 20)}}...</td>
                                <td>{{substr($contacter->prenom, 0 , 20)}}...</td>
                                <td>{{substr($contacter->email, 0 , 20)}}...</td>
                                <td>{{substr($contacter->telephone, 0 , 20)}}...</td>
                                <td>{{substr($contacter->description, 0 , 20)}}...</td>
                                <td>{{$contacter->updated_at->diffForHumans()}}</td>
                                <td class="text-center">
                                    {{-- <button class="btn btn-success"><i class="fas fa-eye">voir</i></button> --}}
                                    <button class="btn btn-warning text-light" wire:click='goToReponse({{$contacter->id}})'><i class="fas fa-eye">repondre</i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>


            <!-- Modal Ajouter utilisateur-->
            <div class="modal fade" wire:ignore.self id="nousContacter" data-bs-backdrop="static" x-data="{ eye: true }" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Reponse </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form >

                    <div class="modal-body d-flex flex-wrap">

                        {{-- <div class="col-md-6   p-3 ">
                            <div class="input-group">
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
                        </div> --}}

                        <div class="col-md-12 p-2">
                            <div class="input-group">
                                {{-- <span class="input-group-text"> <i class="fas fa-user-check"></i> </span> --}}
                                <div class="form-floating ">
                                    <textarea class="form-control "  name="reponse" wire:model='reponse' style="height: 100px" placeholder="Entrez votre message" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Entrez votre message</label>

                                  {{-- <input type="text" wire:model='description' class="form-control @error('description') is-invalid @enderror"  autocomplete="description"  id="floatingInputGroup3" placeholder="Description" required>
                                  <label for="floatingInputGroup3">Description</label> --}}
                                </div>
                              </div>
                              @error('reponse')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button wire:click.prevent='reponse'  class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}"> Envoyer</button>
                    </div>
                </form>
                </div>
                </div>
            </div>


</div>
