@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Detail Normalisasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            Data Normalisasi
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Detail Normalisasi</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-account-box-outline font-size-20"></i>
                        </div>
                        <h2>Informasi Data</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row mb-4">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Merk Laptop</label>
                                <h5 class="text-dark">{{$detail->merk_lp}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Harga</label>
                                <h5 class="text-dark">{{$detail->harga}}</h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Processor</label>
                                <h5 class="text-dark">{{$detail->processor}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">RAM</label>
                                <h5 class="text-dark">{{$detail->ram}}</h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">HDD</label>
                                <h5 class="text-dark">{{$detail->hdd}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">SSD</label>
                                <h5 class="text-dark">{{$detail->ssd}}</h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">Monitor</label>
                                <h5 class="text-dark">{{$detail->monitor}}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <label for="">VGA</label>
                                <h5 class="text-dark">{{$detail->vga}}</h5>
                            </div>
                        </div>
                        <a href="{{route('user.edit',[$detail->id_normal])}}" class="mr-2 btn btn-warning btn-pill text-white">
                            <i class="mdi mdi-circle-edit-outline"></i>
                            Edit
                        </a>
                        <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                            <i class="mdi mdi-trash-can"></i>
                            Hapus
                        </button>
                        <a type="button" class="btn btn-secondary btn-pill" href="{{route('user.index')}}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('user.destroy', [$detail -> id_normal])}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>
                                Yakin mengahapus data {{ $detail -> merk_lp}}
                            </h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-pill" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger btn-pill">Ok</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
