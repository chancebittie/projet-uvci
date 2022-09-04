@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <header>
            <img src="{{asset('uploads/images/don.jpg')}}" class="" height="auto" width="100%;" alt="">
        </header>
        <div class="row mt-4">
            <div class="col m-2">
                L’université Virtuelle de Côte d’Ivoire (UVCI) est une université publique ivoirienne d’enseignement à distance. Créée par décret n° 2015-755 du 09 décembre 2015 et annoncée en septembre 2015, l’UVCI doit pallier le déficit d’infrastructures de l’enseignement supérieur en Côte d’Ivoire et la croissance importante du nombre d’étudiants. A ce titre, elle a pour mission de : Développer et vulgariser la formation ; Accompagner les établissements en présentiel dans le développement de l’offre de formation ouverte à distance ;  Diffuser la culture numérique ; En s’inscrivant dans cette dernière mission, l’UVCI compte diffuser la culture numérique en commençant par ses voisins immédiats du siège des 2 plateaux à Cocody, à savoir le quartier d’Allakro et plus tard dans toutes les localités dans lesquelles existe une communauté d’étudiants de l’UVCI.
            </div>
            <div class="col pl-4">
                <img src="{{asset('uploads/images/logo1.jpeg')}}" height="200" width="75%" alt="">
            </div>
        </div>
        {{-- fin partie université --}}

        <!-- Feature Start -->
        <div class="container-fluid overflow-hidden py-5 px-lg-0">
            <div class="container feature py-5 px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5">Directeur Général de l-Université Virtuelle de Côte d'Ivoire</h1>
                        <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                            <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="mb-0">Le Directeur Général de l’Université Virtuelle de Côte d’Ivoire (UVCI), le Professeur KONE Tiémoman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/dg_uvci.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        {{-- fin dg uvci --}}

        <div class="container row" style="width: 100%;">
            <div class="card col-md-12 mb-3" >
                <div class="card-body row">
                    <h5 class="card-title col-md-6">
                        <img src="{{asset('uploads/images/don1.jpg')}}" height="170" width="100%" alt="">
                    </h5>
                    <p class="card-text col-md-6">
                        <h3>La remise de don à la communauté</h3>
                        L’université Virtuelle de Côte d’Ivoire (UVCI) est une université publique ivoirienne d’enseignement à distance. Créée par décret n° 2015-755 du 09 décembre 2015 et annoncée en septembre 2015, l’UVCI doit pallier le déficit d’infrastructures de l’enseignement supérieur en Côte d’Ivoire.
                    </p>
                </div>
            </div>

            <div class="card col-md-12 mb-3" >
                <div class="card-body row">
                    <h5 class="card-title col-md-6">
                        <img src="{{asset('uploads/images/don1.jpg')}}" height="170" width="100%" alt="">
                    </h5>
                    <p class="card-text col-md-6">
                        <h3>La remise de don à la communauté</h3>
                        L’université Virtuelle de Côte d’Ivoire (UVCI) est une université publique ivoirienne d’enseignement à distance. Créée par décret n° 2015-755 du 09 décembre 2015 et annoncée en septembre 2015, l’UVCI doit pallier le déficit d’infrastructures de l’enseignement supérieur en Côte d’Ivoire.
                    </p>
                </div>
            </div>

            <div class="card col-md-12" >
                <div class="card-body row">
                    <h5 class="card-title col-md-6">
                        <img src="{{asset('uploads/images/don1.jpg')}}" height="170" width="100%" alt="">
                    </h5>
                    <p class="card-text col-md-6">
                        <h3>La remise de don à la communauté</h3>
                        L’université Virtuelle de Côte d’Ivoire (UVCI) est une université publique ivoirienne d’enseignement à distance. Créée par décret n° 2015-755 du 09 décembre 2015 et annoncée en septembre 2015, l’UVCI doit pallier le déficit d’infrastructures de l’enseignement supérieur en Côte d’Ivoire.
                    </p>
                </div>
            </div>
        </div>
        {{-- fin action --}}

        <div class="d-flex bg-primary">
            <div class="col-md-6 text-light">
            </div>
            <div class="col-md-6">
                <img src="{{asset('uploads/images/don1.jpg')}}" class="img-fluid" alt="">

            </div>
        </div>

    </div>
</div>
@endsection
