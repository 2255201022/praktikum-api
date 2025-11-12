@extends('layouts.app')

@section('title', 'Tambah Prodi')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Prodi</h6>
  </div>

  <div class="card-body">
    <form action="{{ route('prodi.store') }}" method="POST">
      @csrf

      <div class="form-group">
        <label>Nama Prodi</label>
        <input type="text" name="nama_prodi" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Kode Prodi</label>
        <input type="text" name="kode_prodi" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Fakultas</label>
        <select name="fakultas_id" class="form-control" required>
          <option value="">-- Pilih Fakultas --</option>
          @foreach ($fakultas as $f)
            <option value="{{ $f->id }}">{{ $f->nama_fakultas }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
