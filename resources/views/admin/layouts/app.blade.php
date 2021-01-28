<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title>Admin</title>
    <link rel="icon" href="{{url('img/logoatas.png')}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('admin_asset/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <!-- No Extra plugin used -->
    <link href="{{asset('admin_asset/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />

    <link href="{{asset('admin_asset/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('admin_asset/assets/css/sleek.css')}}" />

    <!-- FAVICON -->
    <!-- <link href="{{asset('admin_asset/assets/img/favicon.png')}}" rel="shortcut icon" /> -->
    <script src="{{asset('admin_asset/assets/plugins/nprogress/nprogress.js')}}"></script>
    <!-- Data Table -->
    <link href="{{asset('admin_asset/assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet">

</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalMdTitle"></h4>
                </div>
                <div class="modal-body">
                    <div class="modalError"></div>
                    <div id="modalMdContent"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="toaster"></div>


    <div class="wrapper">
        <!-- Github Link -->

        @include('admin.layouts.sidebar');
        <div class="page-wrapper">
            @include('admin.layouts.navbar');
            @yield('content');

            @include('admin.layouts.footer');
        </div>
    </div>

    <script src="{{asset('admin_asset/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/jekyll-search.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/simplebar/simplebar.min.js')}}"></script>

    <script src="{{asset('admin_asset/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/sleek.bundle.js')}}"></script>

    <script src="{{asset('admin_asset/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="https://unpkg.com/chartjs-plugin-colorschemes"></script>
    <!-- Data Table -->
    <script src="{{asset('admin_asset/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });

        // Data Tabel
        jQuery(document).ready(function() {
            jQuery('.data-table').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).on('ajaxComplete ready', function() {
            $('.modalMd').off('click').on('click', function() {
                $('#modalMdContent').load($(this).attr('value'));
                $('#modalMdTitle').html($(this).attr('title'));
            });
        });
    </script>
    @stack('script')
</body>

</html>