<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Themetreasure </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontend/assets/logo/logo_transparent.png')}}" rel="icon">
    <link href="{{asset('frontend/assets/logo/logo_transparent.png')}}" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/assets/css/font.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @php $url = request()->route()->uri; @endphp

    @if($url == '/')
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        
    @else
    <header id="header" class="fixed-top d-flex align-items-center">
    @endif
    <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="{{route('frontend.index')}}">
                    <img src="{{asset('frontend/assets/logo/logo_transparent.png')}}" alt="" class="img-fluid">
                    <img src="{{asset('frontend/assets/logo/logo_text_white.png')}}" alt="" class="img-fluid d-xl-inline-block d-lg-inline-block d-md-inline-block d-sm-none d-none">

                </a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto active" href="{{route('frontend.index')}}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="about.html">About</a>
                    </li>

                    <li class="dropdown">
                        <a href="#"><span> Templates </span> <i class='bx bxs-chevron-down'></i></a>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{route('frontend.templates')}}">{{$category->name}}<span>
                                @php
                                    $item = array(); 
                                    $subcategories = $category->subcategories;  
                                    foreach($subcategories as $sub){
                                        $item = $sub->items;
                                    }
                               
                                @endphp ( {{count($item)}} ) </span></a>
                            </li>
                            @endforeach
                            <!-- <li>
                                <a href="{{route('frontend.templates')}}"> Education <span> ( 5 ) </span>  </a>
                            </li>
                            
                            <li>
                                <a href="{{route('frontend.templates')}}">Portfolio <span> ( 2 ) </span></a>
                            </li>
                            <li>
                                <a href="{{route('frontend.templates')}}"> E-commerce <span> ( 3 ) </span> </a>
                            </li>
                            <li><a href="{{route('frontend.templates')}}"> Hospital <span> ( 4 ) </span> </a></li> -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><span> Freebies </span> <i class='bx bxs-chevron-down'></i></a>
                        <ul>
                            @foreach($languages as $language)
                            <li>
                                <a href="{{route('frontend.templates')}}">{{$language->name}} <span>
                                    @php
                                        $languageitem = array(); 
                                        $itemlanguages = $language->items;  
                                        foreach($itemlanguages as $ilang){
                                            $languageitem = $ilang->languages;
                                        }
                               
                                    @endphp
                                 ( {{count($languageitem)}} ) </span></a>
                            </li>
                            @endforeach
                            <!-- <li>
                                <a href="{{route('frontend.templates')}}"> HTML Template <span> ( 5 ) </span>  </a>
                            </li>
                            
                            <li>
                                <a href="{{route('frontend.templates')}}"> CSS Template <span> ( 2 ) </span></a>
                            </li>
                            <li>
                                <a href="{{route('frontend.templates')}}"> Bootstrap Template <span> ( 3 ) </span> </a>
                            </li> -->
                        </ul>
                    </li>

                    <li>
                        <a class="nav-link scrollto" href="{{route('frontend.illustration')}}">Illustration</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="{{route('frontend.contactus')}}">Contact</a>
                    </li>

                    <li>
                        <a class="pe-auto nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#authModal">
                            <i class='bx bx-user pe-2 ' ></i> Member
                        </a>
                    </li>
                    <li>
                        <div class="overlay">
                            <a class="nav-link scrollto navicon mk-search-trigger mk-fullscreen-trigger" id="search-button-listener" href="javascript:void(0)">
                                <div id="search-button"> <i class='bx bx-search searchicon' ></i> </div>
                            </a>

                            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                                <a href="javascript:void(0)" class="mk-fullscreen-close navicon" id="mk-fullscreen-close-button">
                                    <i class='bx bx-x' ></i>
                                </a>
                                <div id="mk-fullscreen-search-wrapper">
                                    <form method="get" id="mk-fullscreen-searchform" action="">
                                        <input type="text" value="" placeholder="Search..." id="mk-fullscreen-search-input">
                                        <i class="bx bx-search fullscreen-search-icon"><input value="" type="submit"></i>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <a class="nav-link scrollto navicon" href="{{route('frontend.cart')}}">
                            <i class='bx bx-cart' style="font-size:23px"></i>
                            <span class="count pulse-button">1</span>

                        </a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    @yield('content')
   
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <img src="{{asset('frontend/assets/logo/logo_white_transparent.png')}}" class="img-fluid  mx-auto footerlogo d-block">
            <img src="{{asset('frontend/assets/logo/logo_text_white.png')}}" class="img-fluid mx-auto d-block txtlogo">
                <p> Contact me on the different platforms and social networks </p>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

            <div class="credits">Build by 
                <a href="http://yathawmyatnoe.tech/"> YTMN </a> 
            </div>    
            
        </div>
    </footer>

    <!-- End Footer -->

    <!--Auth Modal -->
    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                
                <div class="modal-body">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div id="page">
                        <div class="container-fluid" id="content-register">
                            <h1> Sign Up </h1>
                            <p> or <a href="javascript:void(0)" id="showlogin"> SignIn to your account. </a> </p>

                            <form class="row g-3">
                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="inputName" placeholder="Your Name">
                                        <label for="inputName" class="ps-3">Your Name</label>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com">
                                        <label for="inputEmail" class="ps-3">Email address</label>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="password" class="form-control password" id="inputPassword" placeholder="Password" data-pass-target="">
                                        <label for="inputPassword" class="ps-3">Password</label>
                                        <div class="eye slash">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkPolicy">
                                        <label class="form-check-label" for="checkPolicy">
                                            I agree to the <a href=""> Privacy Policy </a> .
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-custom text-center" type="button"> Create Account </button>
                                    </div>
                                </div>

                                <!-- <hr> -->
                                <div class="separator txt_mischka"> OR </div>
                                <p class="text-center txt_mischka"> with your social network </p>

                                <div class="row form-group">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-light text-center" type="button"> 
                                                <img src="{{asset('frontend/assets/img/google.png')}}" class="img-fluid googlelogo">
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-fb text-center text-white" type="button"> 
                                                <i class='bx bxl-facebook' ></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>

                        <div class="container-fluid" id="content-login">
                            <h1> Sign In </h1>
                            <p> or <a href="javascript:void(0)" id="showregister"> SignUp to your account. </a> </p>

                            <form class="row g-3">
                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="logininputEmail" placeholder="name@example.com">
                                        <label for="logininputEmail" class="ps-3">Email address</label>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="password" class="form-control password" id="logininputPassword" placeholder="Password" data-pass-target="">
                                        <label for="logininputPassword" class="ps-3">Password</label>
                                        <div class="eye slash">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <a href=""> Forget Password </a>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-custom text-center" type="button"> Login </button>
                                    </div>
                                </div>

                                <!-- <hr> -->
                                <div class="separator txt_mischka"> OR </div>
                                <p class="text-center txt_mischka"> with your social network </p>

                                <div class="row form-group">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-light text-center" type="button"> 
                                                <img src="{{asset('frontend/assets/img/google.png')}}" class="img-fluid googlelogo">
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-fb text-center text-white" type="button"> 
                                                <i class='bx bxl-facebook' ></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>

    <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Select 2 -->
    <script src="{{asset('frontend/assets/vendor/select2/dist/js/select2.min.js')}}"></script>
    
    <!-- Template Main JS File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

</body>

</html>