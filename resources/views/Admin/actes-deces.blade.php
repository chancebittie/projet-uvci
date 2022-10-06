@extends('adminlte::page')
@section('title', 'deces')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content')
   <main>
         @livewire('actes-deces')
   </main>
@stop
{{-- @section('right-sidebar')
    <p>Welcome to this beautiful admin right-sidebar.</p>
@stop --}}

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- @vite(['resources/sass/app.scss']) --}}
@stop

@section('js')
{{-- @vite(['resources/js/app.js']) --}}
    <script> console.log('Hi!'); </script>
@stop

<script>
    window.addEventListener('showModalDeces', event => {
        $("#decesModal").modal('show');

    });
    window.addEventListener('hideModalDeces', event => {
        $("#decesModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'Acte de deces creer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });
    window.addEventListener('showModalDeces', event => {
        $("#decesModal").modal('show');

    });
    window.addEventListener('hideModalDeces', event => {
        $("#decesModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'Operation effectuer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });
    window.addEventListener('showModalDeces', event => {
        $("#decesModal").modal('show');

    });
    window.addEventListener('hideModalDeces', event => {
        $("#decesModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'Operation effectuer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });


</script>
