@extends('layouts.app')
@section('content')
<div class="container-fluid py-5 bg-dark ">
        <h2 class="text-light text-center">Créer une annonce</h2>
        <div class="row justify-content-center">
            @livewire('emploi-stages')
        </div>
</div>
<script>
    window.addEventListener('succesAnnonce', event => {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        toast:true,
        title: 'annonce envoyer avec succes',
        showConfirmButton: false,
        timer: 3000
        })
});
</script>
@endsection
