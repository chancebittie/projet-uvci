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
                    <h6 class="text-secondary text-uppercase">Actualités</h6>
                    <h1 class="mb-5">Les actualités</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Titre de l'actualité</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam...</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Titre de l'actualité</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Road Freight</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('assets/img/service-4.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Train Freight</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('assets/img/service-5.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Customs Clearance</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{asset('assets/img/service-6.jpg')}}" alt="">
                            </div>
                            <h4 class="mb-3">Warehouse Solutions</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="btn-slide mt-2" href="{{route('view_actualite')}}"><i class="fa fa-arrow-right"></i><span>Voir plus</span></a>
                        </div>
                    </div>
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
                    <a href="" class="btn-slide ">
                        <div class="fs-1 rounded-circle ">
                            <i class="bi bi-award"></i>
                        </div>
                        Acte de naissance
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn-slide">
                        <div class="fs-1 rounded-circle">
                            <i class="bi bi-stack"></i>
                        </div>
                        Acte de Decés
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="" class="btn-slide">
                        <div class="fs-1 rounded-circle">
                            <i class="bi bi-gift-fill"></i>
                        </div>
                        Acte de mariage
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
