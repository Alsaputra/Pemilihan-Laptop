<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title>Admin</title>
    <link rel="icon" href="{{url('img/logoatas.png')}}">


    <!-- Data Table -->
    <link href="{{asset('admin_asset/assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{asset('admin_asset/assets/js/all.min.js')}}" crossorigin="anonymous"></script>

</head>


<body class="sb-nav-fixed">

    @include('admin.layouts.navbar')

    <div id="layoutSidenav">
        @include('admin.layouts.sidebar')
        <div id="layoutSidenav_content">
            @yield('content')

            @include('admin.layouts.footer')
        </div>
    </div>


    <script src="{{asset('admin_asset/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/jquery-3.5.1.slim.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin_asset/assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin_asset/assets/js/scripts.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin_asset/assets/js/dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });
        });
    </script>
    @stack('script')
</body>

</html>