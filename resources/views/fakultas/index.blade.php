@extends('layouts.app')

@section('title', 'Data Fakultas')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header d-flex justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary">Data Fakultas</h6>
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary btn-sm">
      <i class="fas fa-plus"></i> Tambah Data
    </a>
  </div>

  <div class="card-body">
    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Fakultas</th>
            <th>Kode Fakultas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($fakultas as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nama_fakultas }}</td>
              <td>{{ $item->kode_fakultas }}</td>
              <td class="text-center">
                <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>

                <a href="{{ route('fakultas.delete', $item->id) }}" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
