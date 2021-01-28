@extends('layouts.app')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-2">
                    <div class="section_tittle">
                        <h2>recent project</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="portfolio-filter filters">
                        <ul>
                            <li class="active" data-filter="all">All photos</li>
                            <li data-filter="1">Pre-Wedding</li>
                            <li data-filter="2">Wedding</li>
                            <li data-filter="3">MV</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item filtr-container">
                    <a class="img-gal filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_1.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Pre-Wedding photography</p>
                                        <h4>Rodi & Ifa</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_2.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Wedding photography</p>
                                        <h4>Rizal & Santi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-2 filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_3.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Pre-Wedding photography</p>
                                        <h4>Rizal & Santi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-2 filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_4.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Video Musik</p>
                                        <h4>Raihanah Voice</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_5.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Wedding photography</p>
                                        <h4>Robby & Dinah</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_6.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Video Musik</p>
                                        <h4>Raihanah Voice</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_9.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Video Musik</p>
                                        <h4>Raihanah Voice</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_10.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Wedding photography</p>
                                        <h4>Gazhfan & Amrina</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal width-2 filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_11.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Pre-Wedding photography</p>
                                        <h4>Rizal & Santi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->
    @endsection