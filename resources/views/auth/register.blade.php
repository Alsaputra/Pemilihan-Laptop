<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin" method="POST" action="{{route("register.post")}}">
                            @csrf
                            @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            <div class="form-label-group">
                                <input name="username" type="username" id="username" class="form-control"
                                    placeholder="Email address" required autofocus>
                                <label for="username">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input name="name" type="name" id="name" class="form-control"
                                    placeholder="Email address" required autofocus>
                                <label for="name">Name</label>
                            </div>
                            <div class="form-label-group">
                                <input name="ktp" type="ktp" id="ktp" class="form-control"
                                    placeholder="Email address" required autofocus>
                                <label for="ktp">No KTP</label>
                            </div>
                            <div class="form-label-group">
                                <input name="phone" type="phone" id="phone" class="form-control"
                                    placeholder="Email address" required autofocus>
                                <label for="phone">Number Phone</label>
                            </div>
                            <div class="form-label-group">
                                <input name="email" type="email" id="email" class="form-control"
                                    placeholder="Email address" required autofocus>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-label-group">
                                <input name="location" type="location" id="location" class="form-control"
                                    placeholder="Email address" required autofocus>
                                <label for="location">Location</label>
                            </div>
                            <div class="form-label-group">
                                <input name="password" type="password" id="inputPassword" class="form-control"
                                    placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="form-label-group">
                                <input name="password_confirm" type="password" id="password_confirm" class="form-control"
                                    placeholder="Password" required>
                                <label for="password_confirm">Password Confirmation</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
                            <a class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" href="{{route("login")}}">Login</a>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</html>
