<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cari Laptop</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="{{url('img/logoatas.png')}}">
    
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{url('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- ini css -->
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">

</head>

<body>
  @include('layouts.header')
    <!--::banner part start::-->

    <!--::banner part start::-->
    @yield('content');

    @include('layouts.footer');
    <div class="fixed-bottom">
        <a href="https://api.whatsapp.com/send?phone=6287869618049" target="_blank"><img src="/img/chatwa.png" alt="Chat Whatsapp" width="10%" style="float: right; margin: 20px"></a>
    </div>

    <!-- jquery plugins here-->
    <script src="{{url('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{url('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{url('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('js/jquery.filterizr.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{url('js/slick.min.js')}}"></script>
    <script src="{{url('js/swiper.min.js')}}"></script>
    <script src="{{url('js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/contact.js')}}"></script>
    <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('js/jquery.form.js')}}"></script>
    <script src="{{url('js/jquery.validate.min.js')}}"></script>
    <script src="{{url('js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{url('js/custom.js')}}"></script>

    @stack('script')
    

</body>
    

</html>