<div class="form-group">
    <label class="col-form-label">Nama lengkap</label>
    <div class="col-sm-12 col-md-12">
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-form-label">Email</label>
    <div class="col-sm-12 col-md-12">
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-form-label">NIK</label>
    <div class="col-sm-12 col-md-12">
        <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik') }}">
        @error('nik')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

{{-- <div class="form-group">
    <label class="col-form-label">Foto</label>
    <div class="col-sm-12 col-md-12">
        <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id="avatar">
        @error('avatar')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div> --}}

<div class="form-group">
    <button class="btn btn-primary btn-sm">{{ $btnLabel }}</button>
</div>
