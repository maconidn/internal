@extends('layouts.app')

@section('title', $title)

@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-6 col-sm-6">
                <form action="{{route('add.user')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('layouts.users.partials.form')
                </form>
            </div>

        </div>
    </section>
</div>
@endsection
@push('base-css')
<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('modules/weather-icon/css/weather-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('modules/weather-icon/css/weather-icons-wind.min.css') }}">
<link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/components.css') }}">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

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
<script src="{{ asset('modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('modules/upload-preview/assets/js/jquery.uploadPreview.js') }}"></script>
{{-- <script src="{{ asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script> --}}

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-post-create.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endpush
