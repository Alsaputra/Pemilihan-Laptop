<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('admin_asset/assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{asset('admin_asset/assets/js/all.min.js')}}" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-signin" method="POST" action="{{route("login")}}">
                                        @csrf
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                        @endif
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmail">Email</label>
                                            <input class="form-control py-4" name="email" id="inputEmail" type="email" placeholder="Enter email address" required autofocus />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="btn btn-primary" href="index.html">Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Cari Laptop 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin_asset/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/jquery-3.5.1.slim.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin_asset/assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin_asset/assets/js/scripts.js')}}"></script>
    <script src="{{asset('admin_asset/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin_asset/assets/js/dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>
</body>

</html>