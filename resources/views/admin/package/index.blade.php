@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Alternatif</h1>
            <br>
            <a href="{{route('package.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default" id="tamu_umum">
                    <div class="card-header-border-bottom card-header d-flex justify-content-between">
                        <h2>Alternatif</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Alternatif</p>
                            <div>
                                <a href="/package/export_excel" target="" class="btn btn-outline-success btn-sm text-uppercase">
                                    <i class="fas fa-file-excel"></i> Export Excel
                                </a>
                                <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                                    <i class="fas fa-print"></i> Print
                                </a>
                            </div>
                        </div>
                        <div class="responsive-data-table">
                            <table class="table dt-responsive nowrap data-table" style="width:100%">
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
                                            <a class="btn btn-sm text-white btn-primary" href="{{route('package.show',[$key->id_lp])}}">Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
