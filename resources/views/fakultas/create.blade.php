@extends('layouts.app')

@section('title', 'Tambah Fakultas')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Fakultas</h6>
  </div>

  <div class="card-body">
    <form action="{{ route('fakultas.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label>Nama Fakultas</label>
        <input type="text" name="nama_fakultas" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Kode Fakultas</label>
        <input type="text" name="kode_fakultas" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
      <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
