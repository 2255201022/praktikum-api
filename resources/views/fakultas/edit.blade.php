@extends('layouts.app')

@section('title', 'Edit Fakultas')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Edit Fakultas</h6>
  </div>

  <div class="card-body">
    <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label>Nama Fakultas</label>
        <input type="text" name="nama_fakultas" class="form-control"
               value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" required>
      </div>

      <div class="form-group">
        <label>Kode Fakultas</label>
        <input type="text" name="kode_fakultas" class="form-control"
               value="{{ old('kode_fakultas', $fakultas->kode_fakultas) }}" required>
      </div>

      <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
      <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
