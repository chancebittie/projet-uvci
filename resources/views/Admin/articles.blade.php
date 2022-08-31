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
<style>
    .postImg{
            max-width:180px;
    }

</style>

<script>
    window.addEventListener('showModalTArticle', event => {
        $("#TyptArticleModal").modal('show');

    });
    window.addEventListener('hideModalTArticle', event => {
        $("#TyptArticleModal").modal('hide');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: 'Operation effectuer avec succes',
            showConfirmButton: false,
            timer: 3000
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
 </script>
 <script>
    // je suis obligé de mettre s al afin de redaurl sinon pour lr profil sa ne va pas marché
    function readURL(input) {
        if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                                $('#blahs')
                                    .attr('src', e.target.result);
                                        };
                reader.readAsDataURL(input.files[0]);
                                    }
            }
 </script>
