@extends('admin.layouts.app')
@section('content')


<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Alternatif</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Kriteria</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
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
                            @foreach($normalisasi as $key)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$key->merk_lp}}</td>
                                <td>{{$key->harga}}</td>
                                <td>{{$key->processor}}</td>
                                <td>{{$key->ram}}</td>
                                <td>{{$key->hdd}}</td>
                                <td>{{$key->ssd}}</td>
                                <td>{{$key->monitor}}</td>
                                <td>{{$key->vga}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="{{route('order.show',[$key->id_normal])}}">Detail</a>
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

<!-- <div class="content-wrapper">
    <div class="content">

        <div class="breadcrumb-wrapper">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card bg-primary card-default">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Alternatif</h5>
                        <span class="h2 mt-2">{{$jalternatif}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card bg-success card-default">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Kriteria</h5>
                        <span class="h2 mt-2">{{$jkriteria}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                        <h2>Data Normalisasi</h2>
                    </div>
                    <div class="card-body">
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

                                    
@foreach($normalisasi as $key)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$key->merk_lp}}</td>
    <td>{{$key->harga}}</td>
    <td>{{$key->processor}}</td>
    <td>{{$key->ram}}</td>
    <td>{{$key->hdd}}</td>
    <td>{{$key->ssd}}</td>
    <td>{{$key->monitor}}</td>
    <td>{{$key->vga}}</td>
    <td>
        <a class="btn btn-sm text-white btn-primary" href="{{route('order.show',[$key->id_normal])}}">Detail</a>
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
</div> -->

@endsection