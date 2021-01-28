@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Sub Kriteria</h1>
        <ol class="mb-4">
            <a href="{{route('sub.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Sub Kriteria
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Nama Sub Kriteria</th>
                                <th>Nilai</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subkriteria as $key)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$key->kategori}}</td>
                                <td>{{$key->nama_sub}}</td>
                                <td>{{$key->bobot}}</td>
                                <td>{{$key->keterangan}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="{{route('sub.show',[$key->id_sub])}}">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection