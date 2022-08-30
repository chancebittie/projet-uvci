@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center text-danger">
                ALLAKRO UN SOUS-QUARTIER DE COCODY
            </h2>
            <P>
                Fondé en 1974, Allakro est un sous-quartier de Cocody peuplé de plus de 4 000 habitants. Il est délimité par la commune d’Adjamé et le camp de la gendarmerie Agban. Situé non loin de l’Université Virtuelle de Côte d’Ivoire, Allakro a pour voisins immédiats le Tribunal du Commerce d’Abidjan, le Consulat du Sénégal et la Fondation DONWAHI. Allakro regorge une population cosmopolite avec plusieurs nationalités qui y cohabitent. On y trouve des Ivoiriens, des Burkinabés, des Togolais, des Béninois, des Guinéens, des Maliens et des Ghanéens etc. La population exerce la plupart du temps dans le secteur informel. Ainsi, la principale activité est le commerce avec la vente du “garba” (attieké poisson), de boisson,  produits vivriers, de fruits et légumes, les kiosques à café, des meubles et mobilier de maison etc. Le village Allakro du nom de son tout premier chef N’DA ALLA, est doté d’un certain nombre d'infrastructures tel que : une école (maternelle et primaire), une mosquée et une église etc
            </P>

            <h1 class="text-center text-danger">Repartition de la population</h1>
            <p>
                Par pays et par sexe
            </p>
            <div class="d-flex justify-content-center">

                <div class="col justify-content-center">
                    <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;" >57%</div>
                    <p class="text-center">
                        Ivoiriens
                    </p>
                </div>
                <div class="col justify-content-center">
                    <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;" >43%</div>
                    <p class="text-center">
                        Etrangers
                    </p>
                </div>
                <div class="col justify-content-center">
                    <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;" >57%</div>
                    <p class="text-center">
                        Hommes
                    </p>
                </div>
                <div class="col justify-content-center">
                    <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;" >43%</div>
                    <p class="text-center">
                        Femmes
                    </p>
                </div>

            </div>
        </div>

        <div class="row">
            <h1 class="text-danger">Des actions de l'université virtuelle de Côte D'ivoire au sein de cette communauté </h1>

            <div class="d-flex">
                <div class="col px-4">
                   <img src=" {{asset('uploads/images/acceuil.jpg')}} " alt="accueil" width="100%" height="200">
                </div>
                <div class="col px-4">
                    <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" width="100%" height="200">
                 </div>
                 <div class="col px-4">
                    <img src=" {{asset('uploads/images/don1.jpg')}} " alt="accueil" width="100%" height="200">
                 </div>
                 <div class="col px-4">
                    <img src=" {{asset('uploads/images/don2.jpg')}} " alt="accueil" width="100%" height="200">
                 </div>
            </div>
            <div class="d-flex mt-4">
                <div class="col-md-6 text-center">
                    UVCI
                </div>
                <div class="col text-center">
                    <a href="action" class="btn btn-primary">voir plus d'informations  <i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

            <div class="row  justify-content-center mt-4">
                <div class="col-md-10">
                    <div class="d-flex ">
                        <div class="col text-center">
                            <h1>Nous contactez</h1>
                        </div>
                        <div class="col-md-6">
                            <h1>ENTREZ VOS DONNEES </h1>
                            <div class="col-md-10 mt-3  mx-auto">
                                <div class="form-floating ">
                                      <input type="text" wire:model='name' class="form-control @error('pseudo') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name"  id="floatingInputGroup1" placeholder="name" required>
                                      <label for="floatingInputGroup1">Pseudo</label>
                                </div>
                                  @error('name')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="col-md-10 mt-3  mx-auto">
                                <div class="form-floating ">
                                      <input type="text" wire:model='name' class="form-control @error('pseudo') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name"  id="floatingInputGroup1" placeholder="name" required>
                                      <label for="floatingInputGroup1">Pseudo</label>
                                </div>
                                  @error('name')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="col-md-10 mt-3  mx-auto">
                                <div class="form-floating ">
                                      <input type="text" wire:model='name' class="form-control @error('pseudo') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name"  id="floatingInputGroup1" placeholder="name" required>
                                      <label for="floatingInputGroup1">Pseudo</label>
                                </div>
                                  @error('name')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
