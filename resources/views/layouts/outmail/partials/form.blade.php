<div class="form-group">
    <label>Tujuan</label>
    <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" id="tujuan" value="{{ old('tujuan') ?? $number->for }}">
    @error('tujuan')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Perihal</label>
    <input type="text" class="form-control @error('perihal') is-invalid @enderror" name="perihal" id="perihal" value="{{ old('perihal') ?? $number->subject }}">
    @error('perihal')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Pembuat</label>
    <input type="hidden" class="form-control" name="pembuat" id="pembuat" value="{{ $number->users->id ?? $user->id }}" readonly>
    <input type="text" class="form-control" value="{{ $number->users->name ?? $user->name }}" readonly>
</div>
<div class="form-group">
    <label>Divisi</label>
    <input type="hidden" class="form-control" name="divisi" value="{{ $number->divitions->id ?? $user->divitions->id }}" id="divisi" readonly>
    <input type="text" class="form-control" value="{{ $number->divitions->name ?? $user->divitions->name }}" readonly>
</div>
<div class="form-group">
    <button class="btn btn-primary btn-sm">{{ $btnLabel }}</button>
</div>
