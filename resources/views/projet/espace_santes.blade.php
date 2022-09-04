@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="row">
            <img src=" {{asset('uploads/images/sante.jpg')}} " alt="accueil" width="100%" height="550">
        </div>
        <div class="row bg-primary text-light pt-4">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img src=" {{asset('uploads/images/sante.jpg')}} " alt="accueil" width="100%" height="100">
                    </div>
                    <div class="col">
                        <h3>Espace pharmacie</h3>
                        <p>
                            Les pharmacies de garde de cette période
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img src=" {{asset('uploads/images/sante.jpg')}} " alt="accueil" width="100%" height="100">
                    </div>
                    <div class="col">
                        <h3>Espace Hôpital </h3>
                        <p>
                            Les hôptaux non loin de la communauté de Allakro
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- fin haed --}}

        {{-- debut center --}}
        <div class="row">
            <h1 class="text-danger text-center  py-4">Les pharmacies de gardes</h1>
            @foreach ($pharmacies as $pharmacie)
                <div class="col">
                    <h3> {{$pharmacie->titre}} </h3>
                    <p>
                        <span>Contact de la pharmacie</span> <br>
                        <span>{{$pharmacie->description}}Description de La localsation</span> <br>
                        <span>Du {{date('d-m-Y')}} au {{ date('d-m-Y', strtotime('+1 day'))  }}</span>
                    </p>
                </div>
            @endforeach
        </div>
        {{-- fin pharmacie de garde --}}

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class=" pb-4">
                    <img src=" {{asset('uploads/images/sante1.png')}} " alt="accueil" width="100%" height="300">
                </div>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Hôpitaux</h6>
                    <h1 class="mb-5">Les centres de santé à deux (02) kilomètre d'Allokro</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="" height="150" width="100%" src="{{asset('assets/img/hopi1.png')}}" alt="">
                            </div>
                            <h5 class="mb-0">Centre Esperance</h5>
                            <p>Description de La localsation</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="" height="150" width="100%" src="{{asset('assets/img/hopi2.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0"></h5>
                            <p>Description de La localsation</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="" height="150" width="100%" src="{{asset('assets/img/hopi3.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0">Nom centre</h5>
                            <p>Description de La localsation</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="" height="150" width="100%" src="{{asset('assets/img/hopi.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0">Nom centre</h5>
                            <p>Description de La localsation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    </div>
</div>
@endsection
