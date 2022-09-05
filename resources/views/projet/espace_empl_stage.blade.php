@extends('layouts.app')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('assets/img/carousel-1.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">EMPLOIES ET STAGES</h1>
                            @guest
                                <a href="{{route('register')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Créer un compte</a>
                            @endguest
                            <a href="{{route('creer_empl_stage')}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Créer une annonce</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('assets/img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">TROUVER UN EMPLOIE OU UN STAGE</h1>
                            @guest
                                <a href="{{route('register')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Créer un compte</a>
                            @endguest
                            <a href="{{route('creer_empl_stage')}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Créer une annonce</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container text-center  ">
        <div class="row  border border-primary pt-5 shadow-lg">
            @if (count($annonces) > 0)
                @foreach ($annonces as $annonce)
                    <div class="col-md-8 col-sm-8 mb-4 ">
                        <h3 class="text-danger"> {{$annonce->titre_annonce}}    </h3>
                        <p>par <strong>{{$annonce->nom_entreprise}}</strong></p>
                        <p> {{$annonce->description}} </p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <span> {{$annonce->created_at->diffForHumans()}}</span>
                        <p><i>nombre : {{$annonce->nombre_poste}}</i></p>
                    </div>
                @endforeach
            @else
            <h3 class="text-danger"> Il n'y a pas encore d'offre d'emploi disponible   </h3>
            @endif
        </div>
    </div>
</div>

@endsection
