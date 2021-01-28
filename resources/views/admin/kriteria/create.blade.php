@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Data Kriteria</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Tambah Data
            </div>
            <div class="card-body">

                <form id="form" method="POST" action="{{route('kriteria.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                            <label>Kategori</label>
                            <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
                        </div>
                        <div class="form-row mb-4 col-lg-2 col-md-6 col-sm-12">
                            <label>Atribut</label>
                            <input type="text" class="form-control" name="atribut" placeholder="Masukan Atribut">
                        </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
                <a type="button" class="btn btn-secondary btn-lg" href="{{route('kriteria.index')}}">Cancel</a>
            </div>
        </div>
    </div>
</main>

@endsection