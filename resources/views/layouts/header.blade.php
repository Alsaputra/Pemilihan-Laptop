    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.blade.php"> <img src="/img/logo1.png" alt="logo"  style="width: 50%;"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('form')}}">Perhitungan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('kesimpulan')}}">Kesimpulan</a>
                                </li>
                                <!-- @if(session()->has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('logout.frontend')}}">Logout</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('login')}}">Login</a>
                                </li>
                                <li>
                                    
                                </li> -->
                            </ul>
                        </div>
                        <!-- <div class="dropdown cart">
                            <a class="dropdown-toggle" href="{{url('checkout')}}">
                                <i class="flaticon-bag"></i>
                            </a>
                        </div> -->
                        
                        <!-- @endif -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->