@extends('layouts.app')
@section('content')
<!-- ini form -->
<section class="pricing_part section_padding" style="padding-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('pricing.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Isi Data Perhitungan</h2>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Harga</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_harga" class="form-control">
                                    <option value="">Pilih Harga</option>
                                        @foreach($subharga as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Processor</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_pros" class="form-control">
                                    <option value="">Pilih Processor</option>
                                        @foreach($subpros as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">RAM</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_ram" class="form-control">
                                    <option value="">Pilih RAM</option>
                                        @foreach($subram as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">HDD</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_hdd" class="form-control">
                                    <option value="">Pilih HDD</option>
                                        @foreach($subhdd as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">SSD</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_ssd" class="form-control">
                                    <option value="">Pilih SSD</option>
                                        @foreach($subssd as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Monitor</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_monitor" class="form-control">
                                    <option value="">Pilih Monitor</option>
                                        @foreach($submonitor as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">VGA</label>
                                <div class="form-select" id="default-select">
                                    <select name="bobot_vga" class="form-control">
                                    <option value="">Pilih VGA</option>
                                        @foreach($subvga as $key)
                                        <option value="{{$key->bobot}}">{{$key->nama_sub}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button-contactForm btn_2">ACCEPT</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection