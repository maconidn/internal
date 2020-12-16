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
                        @if (Cache::has('user-is-online-' . $user->id))
                        <div>
                            <span class="badge badge-success">Online</span>
                        </div>
                        @else
                        <div>
                            <span class="badge badge-danger">Offline</span>&nbsp;
                            <div class="text-job text-muted">
                                Terakhir online: {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row mt-sm-12">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card profile-widget">
                                    <div class="profile-widget-header">
                                        <img alt="image" src="{{ asset('storage/img/avatar/' . $user->details->avatar) }}" class="rounded-circle profile-widget-picture">
                                        <div class="profile-widget-items">
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Nomor surat</div>
                                                <div class="profile-widget-item-value">{{ $user->mailnumbers->count() }}</div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Surat Izin</div>
                                                <div class="profile-widget-item-value">{{ $user->permits->count() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-widget-description">
                                        <div class="profile-widget-name">{{ $user->name }} <div class="text-muted d-inline font-weight-normal">
                                                <div class="slash"></div> {{ $user->divitions->name . ' ' . $user->positions->name }}
                                                <div class="slash"></div> {{ $user->details->nik }}
                                            </div>
                                        </div>
                                        <div class="profile-widget-name">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </div>
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
<link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">
<link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/components.css') }}">

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
<script src="{{ asset('modules/summernote/summernote-bs4.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/components-user.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endpush
