@extends('adminlte::page')
@section('title', 'articles')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content')
   <main>
         @livewire('articles')
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
    window.addEventListener('showModalTArticle', event => {
        $("#TyptArticleModal").modal('show');

    });
    window.addEventListener('hideModalTArticle', event => {
        $("#TyptArticleModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Operation effectuer avec succes',
            showConfirmButton: false,
            timer: 1500
            })
    })
    window.addEventListener('showModalArticle', event => {
        $("#staticBackdrop").modal('show');

    });
    window.addEventListener('hideModalArticle', event => {
        $("#staticBackdrop").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'Operation effectuer avec succes',
            showConfirmButton: false,
            timer: 3000
            })
    });

//     window.addEventListener('showModalss', event => {
//         swal({
//             title: "Are you sure?",
//             text: "Once deleted, you will not be able to recover this imaginary file!",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//             })
//             .then((willDelete) => {
//             if (willDelete) {
//                 swal("Poof! Your imaginary file has been deleted!", {
//                 icon: "success",
//                 });
//             } else {
//                 swal("Your imaginary file is safe!");
//             }
//             });
//     })
// </script>
