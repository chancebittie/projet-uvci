@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <header>
            <img src=" {{asset('uploads/images/acceuil.jpg')}} " alt="accueil" width="100%" height="300">
        </header>
        <div class="d-flex px-5 text-center mt-5">
            <div class="col-md-6">
                <strong class="text-danger fs-1">Bienvenue</strong>
            </div>
            <div class="col-md-6 fs-5">
                <h2>Presentation du quartier Allakro</h2>
                <p>
                    Fondé en 1974, Allakro est un sous-quartier de Cocody peuplé de plus de 4 000 habitants. Il est délimité par la commune d’Adjamé et le camp de la gendarmerie Agban. Situé non loin de l’Université Virtuelle de Côte d’Ivoire, Allakro a pour voisins immédiats le Tribunal du Commerce d’Abidjan, le Consulat du Sénégal et la Fondation DONWAHI. Allakro regorge une population cosmopolite avec plusieurs nationalités qui y cohabitent. On y trouve des Ivoiriens, des Burkinabés, des Togolais, des Béninois, des Guinéens, des Maliens et des Ghanéens etc. La population exerce la plupart du temps dans le secteur informel. Ainsi, la principale activité est le commerce avec la vente du “garba” (attieké poisson), de boisson,  produits vivriers, de fruits et légumes, les kiosques à café, des meubles et mobilier de maison etc. Le village Allakro du nom de son tout premier chef N’DA ALLA, est doté d’un certain nombre d'infrastructures tel que : une école (maternelle et primaire), une mosquée et une église etc
                    <br>
                     <button class="btn border-primary rounded-pill text-primary mt-3">voir plus</button>
                </p>
            </div>
        </div>

        {{-- partie actualite --}}
        <div class="col-md-12" style="background: rgb(217, 231, 236);">
            <div class="col-md-6 text-center text-danger fs-1 py-2">
                <strong>ACTUALITE</strong>
            </div>
            <div class="d-flex flex-wrap">

                <div class="col-md-3 px-2 py-2 ">
                    <div class="col  bg-light border  shadow rounded bg-body" >
                        <div class="py-2 mx-2">
                            <h5>TITRE DE L'ACTUALITE</h5>
                        </div>
                        <div class="card-body">
                            <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" class="img-fluid">
                            <p class="mt-3 px-3">
                                sous titre de l'actualité
                            </p>
                            <p class="px-3">
                                <a href="" class="text-dark">voir plus</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 px-2 py-2 ">
                    <div class="col  bg-light border  shadow rounded bg-body" >
                        <div class="py-2 mx-2">
                            <h5>TITRE DE L'ACTUALITE</h5>
                        </div>
                        <div class="card-body">
                            <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" class="img-fluid">
                            <p class="mt-3 px-3">
                                sous titre de l'actualité
                            </p>
                            <p class="px-3">
                                <a href="" class="text-dark">voir plus</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 px-2 py-2 ">
                    <div class="col  bg-light border  shadow rounded bg-body" >
                        <div class="py-2 mx-2">
                            <h5>TITRE DE L'ACTUALITE</h5>
                        </div>
                        <div class="card-body">
                            <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" class="img-fluid">
                            <p class="mt-3 px-3">
                                sous titre de l'actualité
                            </p>
                            <p class="px-3">
                                <a href="" class="text-dark">voir plus</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 px-2 py-2 ">
                    <div class="col  bg-light border  shadow rounded bg-body" >
                        <div class="py-2 mx-2">
                            <h5>TITRE DE L'ACTUALITE</h5>
                        </div>
                        <div class="card-body">
                            <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" class="img-fluid">
                            <p class="mt-3 px-3">
                                sous titre de l'actualité
                            </p>
                            <p class="px-3">
                                <a href="" class="text-dark">voir plus</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 px-2 py-2 ">
                    <div class="col  bg-light border  shadow rounded bg-body" >
                        <div class="py-2 mx-2">
                            <h5>TITRE DE L'ACTUALITE</h5>
                        </div>
                        <div class="card-body">
                            <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" class="img-fluid">
                            <p class="mt-3 px-3">
                                sous titre de l'actualité
                            </p>
                            <p class="px-3">
                                <a href="" class="text-dark">voir plus</a>
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="text-center pb-3">
                <button class="btn text-primary rounded-pill border-primary">Voir plus</button>
            </div>
        </div> {{-- partie actualite --}}

        {{-- partie association --}}
        <div class="row">
            <h1 class="text-danger text-center py-5">LES DIFFERENTES ASSOCIATIONS A ALLAKRO</h1>
            <div class="d-flex flex-wrap">
                <div class="col-md-3  text-center mt-2">
                    <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                    <p>
                        Association des commerçants
                    </p>
                </div>
                <div class="col-md-3 text-center mt-2">
                    <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                    <p>
                        Association des commerçants
                    </p>
                </div>
                <div class="col-md-3  text-center mt-2">
                    <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                    <p>
                        Association des commerçants
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                    <p>
                        Association des commerçants
                    </p>
                </div>
            </div>
        </div>
         {{-- fin partie association --}}

        <div class="row mt-5">
            <div class="col-md-6 text-center">
                <h4 class="text-danger">DEMANDE D'ACTE EN LIGNE</h4>
            </div>
            <p class="text-center fs-5">
                faites votre demande en toutes securité
            </p>
            <div class="d-flex text-center">
                {{-- <i class="bi bi-person"></i> --}}
                <div class="col-md-4">
                   <a href="" class="btn ">
                    <div  class="fs-1 rounded-circle ">
                        <i class="bi bi-award"></i>
                    </div>
                    Acte de naissance
                   </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn">
                     <div  class="fs-1 rounded-circle">
                         <i class="bi bi-stack"></i>
                     </div>
                     Acte de Decés
                    </a>
                 </div>
                 <div class="col-md-4 text-center">
                    <a href="" class="btn">
                     <div  class="fs-1 rounded-circle">
                         <i class="bi bi-gift-fill"></i>
                     </div>
                     Acte de mariage
                    </a>
                 </div>
            </div>
        </div>

        {{-- contacter --}}

        <div class="row justify-content-center py-3" style="background: rgb(217, 231, 236);">
           <div class="col-md-8 text-center">
            <h1>Nous contacter</h1>
            <form action="" method="post">
                <div class="d-flex flex-wrap">
                    <div class="col-md-5 mt-3  mx-auto">
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
                    <div class="col-md-5 mt-3  mx-auto">
                        <div class="form-floating ">
                              <input type="text" wire:model='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"  id="floatingInputGroup2" placeholder="Adresse email" required>
                              <label for="floatingInputGroup2">Pseudo</label>
                        </div>
                          @error('email')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3 ">
                        <div class="form-floating">
                            <textarea class="form-control "  name="libelle" wire:model='libelle' style="height: 100px" placeholder="Entrez votre message" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Entrez votre message</label>
                          </div>
                          @error('libelle')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="mx-auto mt-3">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
        {{-- fin contactez --}}





    </div>
</div>
@endsection
