@extends('layouts.app')
@section('content')


  <!-- breadcrumb start-->
  
  <!-- ================ contact section end ================= -->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>contact</h2>
              <a href="{{route('contact.create')}}" class="btn_2">Kritik & Saran</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section section_padding">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Sidoarjo, Jawa TImur</h3>
              <p>Puri Indah, blok FB-25</p>
            </div>
          </div>
         
         
        </div>
        <div class="col-lg-4">
         
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+62 878-6961-8049</h3>
              <p>Mon to Fri 10am to 6pm</p>
            </div>
          </div>
         
        </div>
        <div class="col-lg-4">
         
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>kuropotret@gmail.com</h3>
              <p>Send us your Email anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection