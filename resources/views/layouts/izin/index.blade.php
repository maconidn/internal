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
                        <h4>{{ $title }}</h4>
                        <div class="card-header-action">
                            <a href="{{ route('add.user') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($izin as $i)
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card card-{{ $color[rand(0, count($color) - 1 )] }}">
                                    <div class="card-header">
                                        <h4>{{ $i->users->name }}</h4>
                                        @if ($i->status == 'Approved')
                                            <div class="card-header-action">
                                                <span class="badge badge-success">{{ $i->status }}</span>
                                            </div>
                                        @endif
                                        @if ($i->status == 'Hold')
                                            <div class="card-header-action">
                                                <span class="badge badge-secondary">{{ $i->status }}</span>
                                            </div>
                                        @endif
                                        @if ($i->status == 'Pending')
                                            <div class="card-header-action">
                                                <span class="badge badge-warning">{{ $i->status }}</span>
                                            </div>
                                        @endif
                                        @if ($i->status == 'Reviewed')
                                            <div class="card-header-action">
                                                <span class="badge badge-primary">{{ $i->status }}</span>
                                            </div>
                                        @endif
                                        @if ($i->status == 'Rejected')
                                            <div class="card-header-action">
                                                <span class="badge badge-danger">{{ $i->status }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <p>Alasan Izin : {{ $i->reason }}`Dari Tanggal : {{ $i->start_at->format('d-M-Y') . ' s/d ' . $i->end_at->format('d-M-Y') . ' ( ' . $i->end_at->diff($i->start_at)->format('%a') . 'Hari )' }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
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
