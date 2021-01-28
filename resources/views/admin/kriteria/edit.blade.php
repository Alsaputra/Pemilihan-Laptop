@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data Kriteria</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Edit Data
            </div>
            <div class="card-body">
                <form id="form" method="POST" action="{{route('kriteria.update', [$edit->id_kriteria])}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kategori</label>
                            <input type="text" class="form-control" name="kategori" value="{{$edit->kategori}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Atribut</label>
                            <input type="text" class="form-control" name="atribut" value="{{$edit->atribut}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Edit Data</button>
                    <a type="button" class="btn btn-secondary btn-lg" href="{{route('kriteria.index')}}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection