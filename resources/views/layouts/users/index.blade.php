@extends('layouts.app')

@section('title', $title)

@section('main-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>
        <div class="row">
            @if (Session('success'))
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">{{Session('success')}}</div>
            </div>
            @endif
            @if (session('delete-success'))
            <div class="col-lg-12">
                <div class="alert alert-warning">{{ session('delete-success') }}</div>
            </div>
            @endif
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-header-title">
                            <h4>{{ $title }}</h4>
                        </div>
                        <div class="card-header-form px-5">
                            <form action="{{ route('users.search') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari" name="cari">
                                    <div class="input-group-btn">
                                        &nbsp;
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-header-action">
                            <a href="{{ route('add.user') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($users as $user)
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card card-{{ $color[rand(0, count($color) - 1 )] }} py-5">
                                        <div class="user-item">
                                            <img alt="image" src="{{ asset('storage/img/avatar/' . $user->details->avatar) }}" class="img-fluid">
                                            <i class="avatar-presence online"></i>
                                            <a href="{{ route('show.detail.user', $user) }}">
                                                <div class="user-details">
                                                    <div class="user-name">{{ $user->name }}</div>
                                                    <div class="text-job text-muted">{{ $user->divitions->name }}</div>
                                                    <div class="text-job text-muted">{{ $user->positions->name }}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </section>
</div>
<!-- End Main Content -->
@endsection

@push('base-css')
<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->
{{-- <link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">
<link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}"> --}}

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/components.css') }}">

<!-- Font Awesome -->
{{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
@endpush
@push('base-script')
<!-- General JS Scripts -->
<script src="{{ asset('modules/jquery.min.js') }}"></script>
<script src="{{ asset('modules/popper.js') }}"></script>
<script src="{{ asset('modules/tooltip.js') }}"></script>
<script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('modules/moment.min.js') }}"></script>
<script src="{{ asset('js/stisla.js') }}"></script>

<!-- JS Libraies -->
{{-- <script src="{{ asset('modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script> --}}

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/components-user.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endpush
