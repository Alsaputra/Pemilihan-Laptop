@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Kriteria</h1>
        <ol class="mb-4">
            <a href="{{route('kriteria.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Kriteria
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Atribut</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kriteria as $key)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$key->kategori}}</td>
                                <td>{{$key->atribut}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="{{route('kriteria.show',[$key->id_kriteria])}}">Detail</a>
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