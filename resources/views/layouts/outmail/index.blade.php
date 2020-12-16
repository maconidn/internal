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
                            <form action="{{ route('outmail.search') }}" method="GET">
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
                            <a href="{{ route('outmail.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nomor surat</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Perihal</th>
                                        <th scope="col">Pembuat</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Dibuat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($numbers as $number)
                                        <tr>
                                            <td>
                                                {{ $number->id . '/MMI/' . $number->divitions->code . '/' . $bln . '/' . $number->created_at->format('Y')}}
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('outmail.edit', $number->id) }}">Edit</a>
                                                    <div class="bullet text-danger"></div>
                                                    <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="text-danger">Delete
                                                        <form action="{{ route('outmail.delete', $number->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data?')">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $number->for }}</td>
                                            <td>{{ $number->subject }}</td>
                                            <td>{{ $number->users->name }}</td>
                                            <td>{{ $number->divitions->name }}</td>
                                            <td>
                                                {{ $number->created_at->diffForHumans() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $numbers->links() }}
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
<script src="{{ asset('modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('modules/chart.min.js') }}"></script>
<script src="{{ asset('modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/index-0.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endpush
