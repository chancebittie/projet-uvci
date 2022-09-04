@extends('layouts.app')

@section('content')


<!-- Feature Start -->
<div class="container-fluid overflow-hidden px-lg-0">
    <div class="container row feature px-lg-0">
        <p class="col-lg-3"></p>
        <div class="row g-5 mx-lg-0 col-lg-6">
            <div class="col-lg-12 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/img/feature.jpg')}}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-5" style="margin-left: 1rem">Le titre de l'actualité</h2>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="ms-4">
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo justo magna erat amet. Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <p class="col-lg-3"></p>
</div>
<!-- Feature End -->
@endsection
