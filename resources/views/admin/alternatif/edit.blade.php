@extends('admin.layouts.app')
@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data Alternatif</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Edit Data
            </div>
            <div class="card-body">
                <form id="form" method="POST" action="{{route('alternatif.update', [$edit->id_lp])}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>Merk Laptop</label>
                            <input type="text" class="form-control" name="merk" value="{{$edit->merk_lp}}">
                        </div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>Seri Laptop</label>
                            <input type="text" class="form-control" name="seri" value="{{$edit->seri_lp}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>Harga</label>
                            <div class="form-select" id="default-select">
                                <select name="harga" class="form-control">
                                    <option value="">Pilih Harga</option>
                                    @foreach($subharga as $key => $row)
                                    <option @if($edit->harga_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>Processor</label>
                            <div class="form-select" id="default-select">
                                <select name="processor" class="form-control">
                                    <option value="">Pilih Processor</option>
                                    @foreach($subpros as $key => $row)
                                    <option @if($edit->processor_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>RAM</label>
                            <div class="form-select" id="default-select">
                                <select name="ram" class="form-control">
                                    <option value="">Pilih RAM</option>
                                    @foreach($subram as $key => $row)
                                    <option @if($edit->ram_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>HDD</label>
                            <div class="form-select" id="default-select">
                                <select name="hdd" class="form-control">
                                    <option value="">Pilih HDD</option>
                                    @foreach($subhdd as $key => $row)
                                    <option @if($edit->hdd_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>SSD</label>
                            <div class="form-select" id="default-select">
                                <select name="ssd" class="form-control">
                                    <option value="">Pilih SSD</option>
                                    @foreach($subssd as $key => $row)
                                    <option @if($edit->ssd_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>Monitor</label>
                            <div class="form-select" id="default-select">
                                <select name="monitor" class="form-control">
                                    <option value="">Pilih Monitor</option>
                                    @foreach($submonitor as $key => $row)
                                    <option @if($edit->monitor_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-group mb-4 col-lg-6 col-md-6 col-sm-12">
                            <label>VGA</label>
                            <div class="form-select" id="default-select">
                                <select name="vga" class="form-control">
                                    <option value="">Pilih VGA</option>
                                    @foreach($subvga as $key => $row)
                                    <option @if($edit->vga_lp == $row->nama_sub) selected @endif value="{{$row->nama_sub}}">{{$row->nama_sub}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Edit Data</button>
            <a type="button" class="btn btn-secondary btn-lg" href="{{route('alternatif.index')}}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection