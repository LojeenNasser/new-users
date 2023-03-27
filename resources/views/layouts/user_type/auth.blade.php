@extends('layouts.app')
@include('layouts.navbars.sidebar')
@include('layouts.navbars.nav')
<div class="container-fluid py-4">
    @yield('content')
    @include('layouts.footer')
</div>
