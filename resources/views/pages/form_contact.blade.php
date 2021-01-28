@extends('layouts.app')
@section('content')
<section class="contact-section section_padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Kritik & Saran</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post">
                    @csrf
                    <div class="row">

                        <!-- <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Paket</label>
                                <div class="form-select" id="default-select">
                                    <select class="form-control">
                                        <option value="Prewedding">Prewedding</option>
                                        <option value="Akad">Akad</option>
                                        <option value="Resepsi">Resepsi</option>
                                        <option value="Music Video">Music Video</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-12">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input class="form-control" name="nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama'" placeholder='Masukkan Nama'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Alamat'" placeholder='Masukkan Alamat'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="hp">Nomor Handphone</label>
                                <input class="form-control" name="hp" id="hp" type="hp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan No. Telp'" placeholder='Masukkan No. Telp'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pesan</label>
                                <input class="form-control" name="pesan" id="hp" type="hp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Pesan'" placeholder='Masukkan Pesan'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button-contactForm btn_2">Kirim Pesan </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection