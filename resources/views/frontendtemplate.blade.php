<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Themetreasure </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                          
                        </ul>
                    </li>

                    <li>
                        <a class="nav-link scrollto" href="{{route('frontend.illustration')}}">Illustration</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="{{route('frontend.contactus')}}">Contact</a>
                    </li>
                    @if(!Auth::check())
                    <li>
                        
                        <a class="pe-auto nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#authModal">
                            <i class='bx bx-user pe-2 ' ></i> Member
                        </a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#"><span> {{Auth::user()->name}} </span> <i class='bx bxs-chevron-down'></i></a>
                        <ul>
                            <li>
                                <a href="{{route('author.create')}}"> Author </a>
                            </li>
                            <li>
                                <a href="templates.html"> List <span> ( 3 ) </span> </a>
                            </li>
                            <li>
                                <a href="{{route('wishlist')}}"> Wishlist </a>
                            </li>
                            <li>
                                <a href="{{route('collection')}}"> Collection </a>
                            </li>
                            <li>
                                <a class="dropdown-item preview-item" href="route('logout')" class="d-inline" 
                                    onclick="event.preventDefault();
                                                document.getElementById('logoutform').closest('form').submit();">
                                    

                                    
                                                Log out
                                                

                                    <form method="POST" id="logoutform" class="d-inline" action="{{ route('logout') }}">
                                                @csrf

                                                
                                            </form>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    @endif
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

    {{-- wishlist button audio --}}

    <audio id="mysoundclip" preload="auto">
        <source src="{{asset('frontend/assets/plugin/zapsplat_multimedia_cell_phone_smart_screen_button_press_click_feedback_003_60932.mp3')}}"></source>
    </audio>

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

                            <!-- Validation Errors -->
                         <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

                            <form class="row g-3" method="POST" id="signupform" >
                                @csrf
                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="text"
                                        name="name" class="form-control" id="inputName" placeholder="Your Name">
                                        <label for="inputName" class="ps-3 name_err">Your Name</label>
                                        <span class="text-danger error-text "></span>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="name@example.com">
                                        <label for="inputEmail" class="ps-3 email_err">Email address</label>
                                         <span class="text-danger error-text "></span>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control password" id="inputPassword" placeholder="Password" data-pass-target="">
                                        <label for="inputPassword" class="ps-3 password_err">Password</label>
                                        <span class="text-danger error-text "></span>
                                        <div class="eye slash">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <input  class="form-check-input" type="checkbox"  value="1" id="checkPolicy">
                                        <label class="form-check-label" for="checkPolicy">
                                            I agree to the <a href=""> Privacy Policy </a> .<br/>
                                            <span class="text-danger  error-text accept_err"></span>
                                        </label>
                                        
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-custom text-center" type="submit"> Create Account </button>
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
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form class="row g-3" method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="logininputEmail" placeholder="name@example.com">
                                        <label for="logininputEmail" class="ps-3">Email address</label>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control password" id="logininputPassword" placeholder="Password" data-pass-target="">
                                        <label for="logininputPassword" class="ps-3">Password</label>
                                        <div class="eye slash">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>

                                <div class="col-12 form-group">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-custom text-center" type="submit"> Login </button>
                                    </div>
                                </div>

                               {{--  <!-- <hr> -->
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

                                </div> --}}

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
    <script>
        $(document).ready(function(){
            
            $('#signupform').submit(function(e){
                e.preventDefault();
                var _token = $("input[name='_token']").val();
                // console.log(_token);
                var email = $("#inputEmail").val();
                var name = $("#inputName").val();
                var pswd = $("#inputPassword").val();
                var accept=$("#checkPolicy").val();

                 $.ajax({
                    url: "{{ route('register') }}",
                    type:'POST',
                    data: {_token:_token, email:email, password:pswd,name:name,accept:accept},
                    success: function(data) {
                    //   printMsg(data);
                    if($.isEmptyObject(data.errors)){
                        console.log(data.success);
                        window.location.href="{{ route('frontend.index') }}";
                     }
                        
                    },
                    error: function(error){
                        printMsg(error.responseJSON);
                    }

                });

                function printMsg (msg) {
                    console.log(msg);
                    
                        $.each( msg.errors, function( key, value ) {
                        $('.'+key+'_err').html(value);
                        $('.'+key+'_err').addClass('text-danger');
                        });
                    
                }
               

               
                
            })
        })
    </script>
    @yield('script')

</body>

</html>