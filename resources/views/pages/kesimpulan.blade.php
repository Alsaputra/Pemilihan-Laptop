@extends('layouts.app')
@section('content')
<!--::blog part start::-->
<section class="catagory_post padding_bottom" style="padding-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="section_tittle">
                    <h2>Kesimpulan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Processor</th>
                            <th scope="col">RAM</th>
                            <th scope="col">HDD</th>
                            <th scope="col">SSD</th>
                            <th scope="col">Monitor</th>
                            <th scope="col">VGA</th>
                            <th scope="col">Hasil Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($ranking))
                    @foreach($ranking as $key)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$key->full_name}}</td>
                            <td>{{$key->harga_lp}}</td>
                            <td>{{$key->processor_lp}}</td>
                            <td>{{$key->ram_lp}}</td>
                            <td>{{$key->hdd_lp}}</td>
                            <td>{{$key->ssd_lp}}</td>
                            <td>{{$key->monitor_lp}}</td>
                            <td>{{$key->vga_lp}}</td>
                            <td>{{$key->ranks}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--::blog part end::-->

@endsection