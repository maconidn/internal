@extends('base')

@section('content')
<div class="main-wrapper main-wrapper-1">
    <x-navbar></x-navbar>
    <x-sidebar></x-sidebar>

    @yield('main-content')

    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; {{ date('Y') }}
        </div>
        <div class="footer-right">

        </div>
    </footer>
</div>
@endsection
