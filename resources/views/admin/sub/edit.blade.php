@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data Sub Kriteria</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Edit Data
            </div>
            <div class="card-body">
                <form id="form" method="POST" action="{{route('sub.update', [$edit->id_sub])}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Nama Kriteria</label>
                                <div class="form-select" id="default-select">
                                    <select name="kriteria" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach($kriteria as $key => $row)
                                        <option @if($edit->id_kriteria == $row->id_kriteria) selected @endif value="{{$row->id_kriteria}}">{{$row->kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Nama Sub Kriteria</label>
                            <input type="text" class="form-control" name="nama" value="{{$edit->nama_sub}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <label>Nilai</label>
                            <div class="form-select" id="default-select">
                                <select name="bobot" class="form-control">
                                    <option value="">Pilih Nilai</option>
                                    <option @if($edit->bobot == 1) selected @endif value="1">1</option>
                                    <option @if($edit->bobot == 2) selected @endif value="2">2</option>
                                    <option @if($edit->bobot == 3) selected @endif value="3">3</option>
                                    <option @if($edit->bobot == 4) selected @endif value="4">4</option>
                                    <option @if($edit->bobot == 5) selected @endif value="5">5</option>
                                    <option @if($edit->bobot == 6) selected @endif value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
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
                    <button type="submit" class="btn btn-primary btn-lg">Edit Data</button>
                    <a type="button" class="btn btn-secondary btn-lg" href="{{route('sub.index')}}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection