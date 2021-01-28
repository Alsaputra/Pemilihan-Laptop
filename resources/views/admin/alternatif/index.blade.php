@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Alternatif</h1>
        <ol class="mb-4">
        <a href="{{route('alternatif.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Alternatif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Laptop</th>
                                <th>Seri Laptop</th>
                                <th>Harga</th>
                                <th>Processor</th>
                                <th>RAM</th>
                                <th>HDD</th>
                                <th>SSD</th>
                                <th>Monitor</th>
                                <th>VGA</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alternatif as $key)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$key->merk_lp}}</td>
                                <td>{{$key->seri_lp}}</td>
                                <td>{{$key->harga_lp}}</td>
                                <td>{{$key->processor_lp}}</td>
                                <td>{{$key->ram_lp}}</td>
                                <td>{{$key->hdd_lp}}</td>
                                <td>{{$key->ssd_lp}}</td>
                                <td>{{$key->monitor_lp}}</td>
                                <td>{{$key->vga_lp}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="{{route('alternatif.show',[$key->id_lp])}}">Detail</a>
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