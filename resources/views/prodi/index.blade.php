@extends('layouts.app')
@section('content')



<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Prodi</h1>
<a href="{{ route('prodi.create') }}" class="btn btn-primary mb-4">Tambah prodi</a>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Prodi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Prodi</th>
                        <th>Kode Prodi</th>
                    </tr>
                </thead>
                <tfoot>
                <tbody>
                    @foreach ($prodi as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <th>{{ $item->nama_prodi }}</th>
                            <th>{{ $item->kode_prodi }}</th>                       
                        </tr>
                    @endforeach                    
                   
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection