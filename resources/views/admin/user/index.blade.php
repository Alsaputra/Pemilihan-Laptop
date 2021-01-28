@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Data Normalisasi</h1>
            <br>
            <a href="{{route('user.create')}}" target="" class="btn btn-outline-primary text-uppercase">
                <i class="fas fa-plus-circle mr-2"></i> Tambah Data
            </a>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default" id="tamu_umum">
                    <div class="card-header-border-bottom card-header d-flex justify-content-between">
                        <h2>Daftar Normalisasi</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Normalisasi</p>
                            <div>
                                <a href="/user/export_excel" target="" class="btn btn-outline-success btn-sm text-uppercase">
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
                                            <a class="btn btn-sm text-white btn-primary" href="{{route('user.show',[$key->id_normal])}}">Detail</a>
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
