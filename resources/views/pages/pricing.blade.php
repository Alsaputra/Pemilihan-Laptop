@extends('layouts.app')
@section('content')


<!-- breadcrumb start-->

<!-- breadcrumb start-->

<!--::our_service part start::-->

<!--::our_service part end::-->

<!--::pricing part start::-->
<section class="pricing_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <h2>pricing</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        @foreach($packages as $key)
            <div class="col-lg-4 col-sm-6">
                <div class="single_pricing_part">

                    <div class="pricing_tittle">
                        <p>{{$key->name_pack}}</p>
                    </div>
                    <div class="pricing_content">
                        <h3>Rp {{number_format($key->price,2,',','.')}}</h3>
                        <ul>
                            <li>{{$key->qty_photos}}</li>
                            <li>{{$key->qty_edit}}</li>
                            <li>{{$key->duration}}</li>
                        </ul>
                        <!-- ini button -->
                        <a href="{{route('pricing.create')}}" class="btn_2">Pesan Sekarang</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--::pricing part end::-->


@endsection
