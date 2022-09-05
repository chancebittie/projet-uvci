@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10rem; font-size: arial sans serif; font-size: 1.6rem">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center text-danger" style="font-size: 2rem; padding-bottom: 25px">
                <strong>ALLAKRO UN SOUS-QUARTIER DE COCODY</strong>
            </h2>
            <P style="font-size: 1.5rem; margin: 2rem">
                Fondé en 1974, Allakro est un sous-quartier de Cocody peuplé de plus de 4 000 habitants. Il est délimité par la commune d’Adjamé et le camp de la gendarmerie Agban. Situé non loin de l’Université Virtuelle de Côte d’Ivoire, Allakro a pour voisins immédiats le Tribunal du Commerce d’Abidjan, le Consulat du Sénégal et la Fondation DONWAHI. Allakro regorge une population cosmopolite avec plusieurs nationalités qui y cohabitent. On y trouve des Ivoiriens, des Burkinabés, des Togolais, des Béninois, des Guinéens, des Maliens et des Ghanéens etc. La population exerce la plupart du temps dans le secteur informel. Ainsi, la principale activité est le commerce avec la vente du “garba” (attieké poisson), de boisson, produits vivriers, de fruits et légumes, les kiosques à café, des meubles et mobilier de maison etc. Le village Allakro du nom de son tout premier chef N’DA ALLA, est doté d’un certain nombre d'infrastructures tel que : une école (maternelle et primaire), une mosquée et une église etc
            </P>

        </div>

        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase mb-3">Repartition</h6>
                        <h1 class="mb-5">Repartition de la population</h1>
                    </div>
                    <div class="d-flex justify-content-center">

                        <div class="col justify-content-center">
                            <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;">57%</div>
                            <p class="text-center">
                                Ivoiriens
                            </p>
                        </div>
                        <div class="col justify-content-center">
                            <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;">43%</div>
                            <p class="text-center">
                                Etrangers
                            </p>
                        </div>
                        <div class="col justify-content-center">
                            <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;">57%</div>
                            <p class="text-center">
                                Hommes
                            </p>
                        </div>
                        <div class="col justify-content-center">
                            <div class="rounded-circle mx-auto bg-danger text-center text-light py-4 fs-2" style="width: 100px;height:100px;">43%</div>
                            <p class="text-center">
                                Femmes
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h1 class="text-danger">Des actions de l'université virtuelle de Côte D'ivoire au sein de cette communauté </h1>

            <div class="row mb-4 d-flex flex-wrap">
                <div class="col-md-4 px-4 pb-3">
                    <img src=" {{asset('uploads/images/acceuil.jpg')}} " alt="accueil" width="100%" height="200">
                </div>
                <div class="col-md-4 px-4 pb-3">
                    <img src=" {{asset('uploads/images/don.jpg')}} " alt="accueil" width="100%" height="200">
                </div>
                <div class="col-md-4 px-4  pb-3">
                    <img src=" {{asset('uploads/images/don1.jpg')}} " alt="accueil" width="100%" height="200">
                </div>
                <div class="col-md-4 px-4">
                    <img src=" {{asset('uploads/images/don2.jpg')}} " alt="accueil" width="100%" height="200">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid card" style="background-color: gray;">
    <div class="row pt-5 pb-5">
        <div class="col-md-6 text-center fs-4">
            Des actions de l'université virtuelle de Côte D'ivoire
        </div>
        <div class="col-md-6 text-center">
            <a href="actions" class="btn btn-primary">voir plus d'informations <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>
@endsection
