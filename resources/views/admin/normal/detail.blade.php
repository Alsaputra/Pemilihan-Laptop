@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Detail Data Alternatif</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Detail Data
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
                </div>
                <div class="w-100"></div>
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Processor</label>
                        <h5 class="text-dark">{{$detail->processor}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">RAM</label>
                        <h5 class="text-dark">{{$detail->ram}}</h5>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">HDD</label>
                        <h5 class="text-dark">{{$detail->hdd}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">SSD</label>
                        <h5 class="text-dark">{{$detail->ssd}}</h5>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Monitor</label>
                        <h5 class="text-dark">{{$detail->monitor}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">VGA</label>
                        <h5 class="text-dark">{{$detail->vga}}</h5>
                    </div>
                </div>
                <a href="{{route('normal.edit',[$detail->id_normal])}}" class="mr-2 btn btn-warning btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit
                </a>
                <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                    <i class="mdi mdi-trash-can"></i>
                    Hapus
                </button>
                <a type="button" class="btn btn-secondary btn-pill" href="{{route('normal.index')}}">Cancel</a>
            </div>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('normal.destroy', [$detail -> id_normal])}}" method="post">
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
</main>

@endsection