@extends('layouts.app')

@section('title', 'Hapus Fakultas')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header">
    <h6 class="m-0 font-weight-bold text-danger">Hapus Fakultas</h6>
  </div>

  <div class="card-body">
    <p>Apakah Anda yakin ingin menghapus data fakultas <strong>{{ $fakultas->nama_fakultas }}</strong>?</p>

    <form action="{{ route('fakultas.destroy', $fakultas->id) }}" method="POST">
      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
      <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
