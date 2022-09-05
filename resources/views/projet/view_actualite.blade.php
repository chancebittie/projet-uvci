@extends('layouts.app')

@section('content')


<!-- Feature Start -->
<div class="container-fluid overflow-hidden px-lg-0">
    <div class="container row feature px-lg-0">
        <p class="col-lg-3"></p>
        <div class="row g-5 mx-lg-0 col-lg-6">
            <div class="col-lg-12 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img src="{{ Storage::url($actualite->photo)  }}" width="100%" height="100%" >
                </div>
            </div>
            <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-5" style="margin-left: 1rem">{{$actualite->titre}}</h2>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="ms-4">
                        <p class="mb-0">{{$actualite->description}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <p class="col-lg-3"></p>
</div>
<!-- Feature End -->
@endsection
