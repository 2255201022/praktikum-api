@extends('layouts.app')
@section('title', 'Data Fakultas')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Fakultas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fakultas</th>
                        <th>Kode Fakultas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fakultas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_fakultas }}</td>
                            <td>{{ $item->kode_fakultas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection