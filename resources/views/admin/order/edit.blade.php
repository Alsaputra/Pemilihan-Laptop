@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Edit Kriteria</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            Data Kriteria
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Edit Kriteria</li>
                </ol>
            </nav>
        </div>
        <form action="{{route('order.update', [$edit->id_kriteria])}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Edit Kriteria</h2>
                        </div>
                        <div class="card-body">
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
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Edit Kriteria</button>
            <a type="button" class="btn btn-secondary btn-lg" href="{{route('order.index')}}">Cancel</a>
        </form>
    </div>
</div>
@endsection