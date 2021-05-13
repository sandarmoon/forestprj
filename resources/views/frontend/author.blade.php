@extends('frontendtemplate')
@section('content')
    <!-- ======= Header ======= -->
    <!-- End Header -->

    <main id="main">

        <section class="inner-page team">
            <div class="container">

                <div class="row g-0 position-relative">
                    <div class="col-lg-3 col-md-4 mb-md-0 p-5">
                        <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-lg-9 col-md-8 p-5 ps-md-0">
                        <h3 class="my-3 d-inline-block"> Kyaw Kyaw </h3>

                        <a href="#" class="custombtn_outline ms-3"> Follow </a>

                        
                        <p class="py-3"> Bio Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>

                        <p class="d-inline-block me-3"> <span class="mulish_black"> 186 </span> Post  </p>
                        <a href="javascript:void(0)" class="text-reset mx-3" data-bs-toggle="offcanvas" data-bs-target="#followerPart"> 
                            <span class="mulish_black"> 92 </span> Followers  
                        </a>
                        <a href="javascript:void(0)" class="text-reset mx-3" data-bs-toggle="offcanvas" data-bs-target="#followingPart"> 
                            <span class="mulish_black"> 151 </span> Following  
                        </a>

                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-right">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w1.png')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                <span>
                                    By <a href="" class="mulish_bold"> Admin </a>
                                    in <a href="" class="mulish_bold"> Education </a>
                                </span>
                                <div class="my-2">
                                    <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                    <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-right" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w2.jpeg')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                <span>
                                    By <a href="" class="mulish_bold"> Admin </a>
                                    in <a href="" class="mulish_bold"> Education </a>
                                </span>
                                <div class="my-2">
                                    <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                    <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> $39  </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-right" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w3.jpeg')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                <span>
                                    By <a href="" class="mulish_bold"> Admin </a>
                                    in <a href="" class="mulish_bold"> Education </a>
                                </span>
                                <div class="my-2">
                                    <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                    <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> 5,000 MMK  </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-right" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w4.png')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                <span>
                                    By <a href="" class="mulish_bold"> Admin </a>
                                    in <a href="" class="mulish_bold"> Education </a>
                                </span>
                                <div class="my-2">
                                    <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                    <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> 5,000 MMK  </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-center" data-aos="fade-down" data-aos-delay="100">
                    <button class="btn btn-secondary me-md-2" type="button"> 
                        <i class='bx bxs-chevron-left'></i> Prev 
                    </button>
                    <button class="btn btn-secondary" type="button">
                        <i class='bx bxs-chevron-right'></i> Next
                    </button>
                </div>
                
            </div>
        </section>

    </main>
    <!-- End #main -->

<!-- Follower -->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="followerPart">
    <div class="offcanvas-header">
        <h5>92 Followers </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row g-4">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            

        </div>
    </div>
</div>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="followingPart">
    <div class="offcanvas-header">
        <h5>151 Following </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-items-center">
                <img src="{{asset('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="img-fluid followaccount rounded-circle me-3" alt="quixote">
                Don Quixote 

            </div>

        </div>
    </div>
</div>

 

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

   @endsection