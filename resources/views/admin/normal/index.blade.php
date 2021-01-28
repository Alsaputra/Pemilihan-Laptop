@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Normalisasi</h1>
        <ol class="mb-4">
            <a href="{{route('normal.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Normalisasi
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Laptop</th>
                                <th>Harga</th>
                                <th>Processor</th>
                                <th>RAM</th>
                                <th>HDD</th>
                                <th>SSD</th>
                                <th>Monitor</th>
                                <th>VGA</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($normal as $key)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$key->full_name}}</td>
                                <td>{{$key->harga}}</td>
                                <td>{{$key->processor}}</td>
                                <td>{{$key->ram}}</td>
                                <td>{{$key->hdd}}</td>
                                <td>{{$key->ssd}}</td>
                                <td>{{$key->monitor}}</td>
                                <td>{{$key->vga}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="{{route('normal.show',[$key->id_normal])}}">Detail</a>
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