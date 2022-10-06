<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Hopitaux</h3>
                <div class="card-tools d-flex align-items-center ">
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
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Status</th>
                            {{-- <th>Date</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pharmacies as $pharmacie)
                            <tr>
                                <td>{{$pharmacie->titre}}</td>
                                <td>{{$pharmacie->description}}</td>
                                {{-- <td>
                                     <img src="{{ Storage::url($pharmacie->photo)  }}" width="50" height="50" style="border-radius: 50%;">
                                </td> --}}
                                <td>{{$pharmacie->status ? 'De garde':'Pas de garde' }}</td>
                                <td class="text-center">
                                    @if ($pharmacie->status)
                                        <button wire:click.prevent='pasGarde({{$pharmacie->id}})' class="btn btn-success"> De garde</button>
                                    @else
                                        <button wire:click.prevent='deGarde(({{$pharmacie->id}}))' class="btn  btn-danger"> Pas dee garde</button>
                                    @endif
                                        <button class="btn btn-warning text-light" wire:click='goToEdit({{$pharmacie->id}})'><i class="fas fa-eye">Modifier</i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>

                <!-- Modal Ajouter pharmacie-->
            <div class="modal fade" wire:ignore.self id="pharmacieModal" data-bs-backdrop="static"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">{{$editMode ?'Modifier' :'Ajouter' }}  Pharmacie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent='createTypeArticle'>
                        <div class="modal-body d-flex flex-wrap" >
                            <div class="col  p-3 ">
                                <div class="input-group">
                                    <div class="form-floating ">
                                      <input type="text" wire:model='titre' class="form-control  @error('titre') is-invalid @enderror" autofocus id="floatingInputGroup30" placeholder="Type article nom" required>
                                      <label for="floatingInputGroup30">Titre</label>
                                    </div>
                                  </div>
                                  @error('titre')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                  @enderror
                            </div>
                            <div class="col-6  p-3 ">
                                <div class="input-group">
                                    <div class="form-floating ">
                                        <textarea class="form-control "  name="description" wire:model='description' style="height: 100px" placeholder="Entrez votre message" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Entrez votre message</label>
                                      {{-- <input type="text" wire:model='description' class="form-control  @error('description') is-invalid @enderror"  id="floatingInputGroup" placeholder="Description" required> --}}
                                      {{-- <label for="floatingInputGroup">Description</label> --}}
                                    </div>
                                  </div>
                                  @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                  @enderror
                            </div>
                            <div class="col-6 d-flex">
                                <div class="form-floating">
                                    <select class="form-select fs-5 text-dark" wire:model='status' id="floatingSelectGrid">
                                        <option value="0">Pas de garde </option>
                                        <option value="1"> De garde</option>
                                    </select>
                                    <label for="floatingSelectGrid">status</label>
                                  </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" wire:click.prevent='{{$editMode ?'modifier' :'ajouter' }}' class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}}"> {{$editMode ?'Modifier' :'Ajouter' }} </button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
</div>
