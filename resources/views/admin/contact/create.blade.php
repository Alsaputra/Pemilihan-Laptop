@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1 class="mb-2">Tambah Sub Kriteria</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="/rt/tamu-kunjungan">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Data Sub Kriteria
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Tambah Sub Kriteria</li>
                </ol>
            </nav>
        </div>
        <form id="form" method="POST" action="{{route('kritik.store')}}">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-default" id="tamu_umum">
                        <div class="card-header-border-bottom card-header d-flex justify-content-between">
                            <h2>Data Sub Kriteria</h2>
                        </div>
                        <div class="card-body row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Kriteria</label>
                                    <div class="form-select" id="default-select">
                                        <select name="kriteria" class="form-control">
                                            <option value="">Pilih Kriteria</option>
                                            @foreach($kriteria as $key)
                                            <option value="{{$key->id_kriteria}}">{{$key->kategori}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Sub Kriteria</label>
                                    <input type="text" class="form-control" name="sub" placeholder="Masukan Nama Sub Kriteria">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-group mb-4 col-lg-2 col-md-6 col-sm-12">
                                <label>Nilai</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot" class="form-control">
                                        <option value="">Pilih Nilai</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 col-lg-4 col-md-6 col-sm-12">
                                <label>Bobot</label>
                                <div class="form-select" id="default-select">
                                    <select name="keterangan" class="form-control">
                                        <option value="">Pilih Bobot</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Kurang">Kurang</option>
                                        <option value="Cukup">Cukup</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat baik">Sangat baik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
            <a type="button" class="btn btn-secondary btn-lg" href="{{route('kritik.index')}}">Cancel</a>
        </form>


    </div>
</div>
@endsection