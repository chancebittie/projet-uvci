@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="row">
                <img src=" {{asset('uploads/images/sante.jpg')}} " alt="accueil" width="100%" height="400">
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nostrum est, iusto sequi eveniet totam vero beatae? Numquam earum eveniet ducimus debitis veniam nulla reprehenderit. Eveniet illo perferendis placeat at?
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
                            <h3>Espace Hopital </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nostrum est, iusto sequi eveniet totam vero beatae? Numquam earum eveniet ducimus debitis veniam nulla reprehenderit. Eveniet illo perferendis placeat at?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin haed --}}

            {{-- debut center --}}
            <div class="row">
                <h1 class="text-danger text-center  py-4">Les pharmacies de gardes</h1>
                <div class="col">
                    <h3>Nom pharmacie</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores inventore qui enim. Deserunt excepturi quisquam accusamus illo facere libero incidunt atque nemo unde, aliquam iure aperiam similique optio quae expedita.
                    </p>
                </div>
                <div class="col">
                    <h3>Nom pharmacie</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores inventore qui enim. Deserunt excepturi quisquam accusamus illo facere libero incidunt atque nemo unde, aliquam iure aperiam similique optio quae expedita.
                    </p>
                </div>
                <div class="col">
                    <h3>Nom pharmacie</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores inventore qui enim. Deserunt excepturi quisquam accusamus illo facere libero incidunt atque nemo unde, aliquam iure aperiam similique optio quae expedita.
                    </p>
                </div>
            </div>
            {{-- fin pharmacie de garde --}}

            <div class="row justify-content-center">
                <div class="col-md-10 pb-4">
                    <img src=" {{asset('uploads/images/sante1.png')}} " alt="accueil" width="100%" height="300">
                </div>
                <div class="row">
                    <h1 class="text-danger text-center">Les centres de santé</h1>
                    <div class="d-flex">
                        <div class="col  text-center mt-2">
                            <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                            <p>
                                Association des commerçants
                            </p>
                        </div>
                        <div class="col  text-center mt-2">
                            <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                            <p>
                                Association des commerçants
                            </p>
                        </div>
                        <div class="col  text-center mt-2">
                            <img src=" {{asset('uploads/images/don.jpg')}} " class="w-50 h-100" alt="accueil" >
                            <p>
                                Association des commerçants
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
