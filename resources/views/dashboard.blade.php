@extends('layouts.app')
@section('content')

<!-- gallery_part part start-->
<section class="gallery_part section_padding" style="padding: 0%;">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 10%;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/gallery/2.jpg" alt="First slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/11.jpg" alt="Second slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/3.jpg" alt="Third slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/4.jpg" alt="Fourth slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/5.jpg" alt="Fifth slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/6.jpg" alt="Sixth slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/7.jpg" alt="Seventh slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/8.jpg" alt="Eight slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/9.jpg" alt="Nineth slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/10.jpg" alt="Tenth slide" style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/gallery/1.jpg" alt="Eleventh slide" style="height: 550px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="col-lg-5 offset-lg-2">
            <div class="row">
                <div class="section_tittle">
</section>

<section class="about_us section_padding" style="padding: 0px;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center">
                        <h5>About our application</h5>
                        <h2>Cari Laptop</h2>
                        <p>Cari Laptop merupakan sebuah website yang berguna untuk membantu Anda dalam mencari laptop yang sesuai dengan kriteria Anda. Semoga bermanfaat!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- gallery_part part end-->


<!--::blog part start::-->

<!--::blog part end::-->
@endsection