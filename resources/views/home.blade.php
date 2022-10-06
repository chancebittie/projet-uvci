@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <header>
            <img src=" {{asset('uploads/images/acceuil.jpg')}} " alt="accueil" width="100%" height="auto">
        </header>
        <div class="container">
            <div class="row mb-5">
                <div class="d-flex px-5 text-center mt-5">
                    <div class="col-md-6">
                        <h1>
                            <strong class="text-danger text-bold">Bienvenue</strong>
                        </h1>
                    </div>
                    <div class="col-md-4">
                        <h2 class="pb-3 text-bold">Presentation du quartier Allakro</h2>
                        <p class="fs-4">
                            Fondé en 1974, Allakro est un sous-quartier de Cocody peuplé de plus de 4 000 habitants. Il est délimité par la commune d’Adjamé et le camp de la gendarmerie Agban. Situé non loin de l’Université Virtuelle de Côte d’Ivoire, Allakro a pour ...
                            <br>
                            <a href="{{route('apropos_de')}}" class="btn border-primary rounded-pill text-primary fs-4 mt-3">voir plus</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- partie actualite --}}
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    @livewire('cree-actualite')
                    {{-- <a href="" class="text-secondary text-uppercase">creer Actualités</a> --}}
                    <h1 class="mb-5">Les actualités</h1>
                </div>
                <div class="d-flex flex-wrap g-4">
                    @if (count($actualites)<7)
                        <div class="col-md-6 col-lg-4 wow fadeInUp " data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img height="200" width="100%" src="{{asset('assets/img/noel.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Fête de Noël : Une Ong partage la magie de Noël avec les enfants d’Allakro (Cocody)</h4>
                            <p>Quartier précaire de la commune huppée de Cocody, Allakro a reçu la visite de l’Ong Le droit de vivre qui a mis la joie dans le cœur des enfants, le vendredi 17 décembre 2021....</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite1')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img height="200" width="100%" src="{{asset('assets/img/uvci.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Humanité numérique : l’Université virtuelle de Côte d’Ivoire au service du quartier précaire d’Allakro</h4>
                            <p>Quartier précaire de la commune huppée de Cocody, Allakro a reçu la visite de l’Ong Le droit de vivre qui a mis la joie dans le cœur des enfants, le vendredi 17 décembre 2021....</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite2')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img height="200" width="100%" src="{{asset('uploads/images/sante1.png')}}" alt="">
                            </div>
                            <h4 class="mb-3">Bientôt un centre de santé pour le village d’Allakro </h4>
                            <p>Aboisso- Le ministre de la Santé et de l’Hygiène publique, Eugène Aka Aouélé, a annoncé, dimanche, la construction d’un centre de santé à Allakro ...</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite3')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    @endif
                    @foreach ($actualites as $actualite)
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item p-4">
                                <div class="overflow-hidden mb-4">
                                    <img src="{{ Storage::url($actualite->photo)  }}"  height="200" width="100%">
                                </div>
                                <h4 class="mb-3">{{$actualite->titre}}</h4>
                                <p>{{$actualite->description}}</p>
                                <div class="d-flex" >
                                    <div class="col-md-8">{{$actualite->user->nom}} {{$actualite->user->prenom}}</div>
                                    <div class="col-md-8">{{$actualite->created_at->diffForHumans()}}</div>
                                    {{-- <h6></h6>
                                    <p style="text-align: right;" class="">{</p> --}}
                                </div>
                                <a class="btn-slide mt-2" href="{{route('view_actualite', $actualite->id)}}" ><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                                {{-- <a class="btn-slide mt-2" href="{{route('view_actualite')}}" ><i class="fa fa-arrow-right"></i><span>Voir plus</span></a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="row mt-5">
            <div class="col-md-6 text-center">
                <h4 class="text-danger  mb-5">DEMANDE D'ACTE EN LIGNE</h4>
            </div>
            <p class="text-center fs-3">
                faites vos demandes en toutes securités
            </p>
            <div class="d-flex text-center">
                {{-- <i class="bi bi-person"></i> --}}
                <div class="col-md-4">
                    @livewire('acte-naissances')
                </div>
                <div class="col-md-4">
                    @livewire('acte-deces')
                </div>
                <div class="col-md-4 text-center">
                    @livewire('acte-mariages')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
