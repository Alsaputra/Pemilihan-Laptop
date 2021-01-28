@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Tambah Kriteria</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Data Kriteria
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Tambah Kriteria</li>
                </ol>
            </nav>
        </div>
        <form id="form" method="POST" action="{{route('order.store')}}">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-default" id="tamu_umum">
                        <div class="card-header-border-bottom card-header d-flex justify-content-between">
                            <h2>Data Kriteria</h2>
                        </div>
                        <div class="card-body row">
                            <div class="form-row mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Kategori</label>
                                <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
                            </div>
                            <div class="form-row mb-4 col-lg-2 col-md-6 col-sm-12">
                                <label>Atribut</label>
                                <input type="text" class="form-control" name="atribut" placeholder="Masukan Atribut">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
            <a type="button" class="btn btn-secondary btn-lg" href="{{route('order.index')}}">Cancel</a>
        </form>


    </div>
</div>
@endsection