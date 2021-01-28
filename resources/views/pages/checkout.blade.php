@extends('layouts.app')
@section('content')

<!-- Modal -->
@foreach($transactions as $key)
<div class="modal fade" id="exampleModal{{$key->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('checkout.update', [$key->id])}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <div class="form-group">
                        <!-- <label for="exampleFormControlFile1">Example file input</label> -->
                        <input type="hidden" name="id" value="{{$key->id}}">
                        <input type="file" name="bukti" class="form-control-file" id="exampleFormControlFile1">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endforeach
<section class="pricing_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Order Detail</a>
                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Customer Detail</a>
                <!-- <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a> -->
            </div>
        </nav>
        <!-- Order Detail -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="section-top-border">
                    @if (session()->has('status'))
                    @foreach($status as $value)
                    <div class="alert alert-success" role="alert">
                        Silakan melakukan pembayaran! {{$value}}
                    </div>
                    @endforeach
                    @endif

                    <h3 class="mb-30">Detail Order</h3>
                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="serial">#</div>
                                <div class="country">Nama Paket</div>
                                <div class="country">Tanggal</div>
                                <div class="country">Lokasi</div>
                                <div class="country">Biaya Trans.</div>
                                <div class="country">DP</div>
                                <div class="country">Status</div>
                                <div class="country">Total</div>
                                <div class="country">Bukti</div>
                            </div>
                            @foreach($transactions as $key)
                            <div class="table-row">

                                <div class="serial">{{$loop->iteration}}</div>
                                <div class="country">{{$key->name_pack}}</div>
                                <div class="country">{{$key->date}}</div>
                                <div class="country">{{$key->location}}</div>
                                <div class="country">{{$key->price_transportation}}</div>
                                <div class="country">{{$key->dp}}</div>
                           
                                @if($key->status == 1)
                                <div class="country">Disetujui</div>
                                @else
                                <div class="country">Menunggu</div>
                                @endif
                                


                                <div class="country">{{$key->total}}</div>
                                <div class="country"><button href="#" class="genric-btn info circle" data-toggle="modal" data-target="#exampleModal{{$key->id}}">Upload</button></div>
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="section-top-border">
                    <h3 class="mb-30">Data Pribadi</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Username</h4>
                                <p>{{$users->username}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Nama</h4>
                                <p>{{$users->name}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">No. KTP</h4>
                                <p>{{$users->KTP}}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">No. HP</h4>
                                <p>{{$users->no_phone}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Alamat</h4>
                                <p>{{$users->location}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Email</h4>
                                <p>{{$users->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection