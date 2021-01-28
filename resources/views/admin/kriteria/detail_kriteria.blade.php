@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Detail Data Kriteria</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Detail Data
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Kategori</label>
                        <h5 class="text-dark">{{$detail->kategori}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Atribut</label>
                        <h5 class="text-dark">{{$detail->atribut}}</h5>
                    </div>
                </div>
                <a href="{{route('kriteria.edit',[$detail->id_kriteria])}}" class="mr-2 btn btn-warning btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit
                </a>
                <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                    <i class="mdi mdi-trash-can"></i>
                    Hapus
                </button>
                <a type="button" class="btn btn-secondary btn-pill" href="{{route('kriteria.index')}}">Cancel</a>
            </div>

            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{route('kriteria.destroy', [$detail -> id_kriteria])}}" method="post">
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
                                    Yakin mengahapus data {{ $detail -> kategori}}
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