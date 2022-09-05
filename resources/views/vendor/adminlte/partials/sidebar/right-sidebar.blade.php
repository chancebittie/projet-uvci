<aside class="control-sidebar control-sidebar-{{ config('adminlte.right_sidebar_theme') }}">
    <h3 class="text-center">{{Auth::user()->nom}} {{Auth::user()->prenom}}</h3>
    @yield('right-sidebar')
</aside>
