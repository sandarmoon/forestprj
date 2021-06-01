@extends('frontendtemplate')
@section('content')
 <!-- ======= Header ======= -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        

        <div data-bs-interval="5000" class="container" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="row justify-content-center">
                <div class="col-10 align-self-center py-5">
                    <h2 class="animate__animated animate__fadeInDown mt-5 pt-5 text-center"> 227 <span>   templates and more </span></h2>

                    <p class="animate__animated fanimate__adeInUp text-center"> All Templates and themes are elegant and beautiful. </p>
                    
                    <div class="d-grid gap-2 col-4 mx-auto mt-3 " data-aos="fade-up" data-aos-delay="300">


                        <a href="templates.html" class="btn-get-started animate__animated animate__fadeInUp scrollto text-center">
                            Free Download Templates
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

  
    <main id="main">
        <!-- ======= Latest Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2> Latest </h2>
                    <p> Effortless Customization </p>
                </div>

                <div class="row">
                    @if(!empty($latestitems))
                    @if(count($latestitems) == 4)
                        @foreach($latestitems as $latestitem)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{asset($latestitem->thumbnail)}}" class="img-fluid websiteImg" alt="">
                                    <div class="social">
                                        <a href="{{$latestitem->demoUrl}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                            <i class='bx bx-laptop' ></i>
                                        </a>
                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                            <i class='bx bx-heart' ></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="#"> <h4> {{$latestitem->name}}</h4> </a>
                                    <span>
                                        By <a href="" class="mulish_bold"> {{$latestitem->author->user->name}} </a>
                                        in <a href="" class="mulish_bold"> {{$latestitem->subcategory->name}} </a>
                                    </span>
                                    <div class="my-2">
                                        <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                        @if($latestitem->status == 'Free')
                                            <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                        @else
                                            <p class="d-inline-block float-end text-primary fw-bold mulish_bold">{{$latestitem->price}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @elseif(count($latestitems) == 3)
                        @foreach($latestitems as $latestitem)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{asset($latestitem->thumbnail)}}" class="img-fluid websiteImg" alt="">
                                    <div class="social">
                                        <a href="{{$latestitem->demoUrl}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                            <i class='bx bx-laptop' ></i>
                                        </a>
                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                            <i class='bx bx-heart' ></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="#"> <h4>{{$latestitem->name}}</h4> </a>
                                    <span>
                                        By <a href="" class="mulish_bold"> {{$latestitem->author->user->name}} </a>
                                        in <a href="" class="mulish_bold"> {{$latestitem->subcategory->name}} </a>
                                    </span>
                                    <div class="my-2">
                                        <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                        <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w1.png')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="#"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                    @elseif(count($latestitems) == 2)
                        @foreach($latestitems as $latestitem)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{asset($latestitem->thumbnail)}}" class="img-fluid websiteImg" alt="">
                                    <div class="social">
                                        <a href="{{$latestitem->demoUrl}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                            <i class='bx bx-laptop' ></i>
                                        </a>
                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                            <i class='bx bx-heart' ></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="#"> <h4> {{$latestitem->name}}</h4> </a>
                                    <span>
                                        By <a href="" class="mulish_bold"> {{$latestitem->author->user->name}} </a>
                                        in <a href="" class="mulish_bold"> {{$latestitem->subcategory->name}} </a>
                                    </span>
                                    <div class="my-2">
                                        <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                        <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
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
                    @else
                    @foreach($latestitems as $latestitem)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{asset($latestitem->thumbnail)}}" class="img-fluid websiteImg" alt="">
                                    <div class="social">
                                        <a href="{{$latestitem->demoUrl}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                            <i class='bx bx-laptop' ></i>
                                        </a>
                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                            <i class='bx bx-heart' ></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="#"> <h4> {{$latestitem->name}}</h4> </a>
                                    <span>
                                        By <a href="" class="mulish_bold"> {{$latestitem->author->user->name}} </a>
                                        in <a href="" class="mulish_bold"> {{$latestitem->subcategory->name}} </a>
                                    </span>
                                    <div class="my-2">
                                        <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                        <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
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

                    @endif
                    @endif
                    <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
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
                                    <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="d-grid gap-2 col-3 mx-auto mt-3 " data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="custombtn_outline"> View More </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Latest Section -->

        <!-- ======= Popular Section ======= -->
        <section id="team" class="team portfolio">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2> Popular </h2>
                    <p> Better UX </p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
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
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
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
                                    <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-auto mt-3 " data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="custombtn_outline"> View More </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Popular Section -->

        <!-- ======= Free Section ======= -->
        <section id="team" class="team ">
          <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2> Free </h2>
                <p> Simplicity </p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
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
                                <p class="d-inline-block float-end"> Free  </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
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
                                <p class="d-inline-block float-end"> $39  </p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
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
                                <p class="d-inline-block float-end"> 5,000 MMK  </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
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
                                <p class="d-inline-block float-end"> Free  </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 col-3 mx-auto mt-3 " data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="custombtn_outline"> View More </a>
                </div>
            </div>

          </div>
        </section>
        <!-- End Free Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-out">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Join Our Newsletter</h3>
                        <p> Subscribe to our mailing list to get updates on our latest freebies, product news and exclusive offers. </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <div class="newsletter-box">
                            <input class="newsletter-txt" type="text" name="" placeholder="Enter Email-Address">
                            <a class="newsletter-btn" href="#">
                                <i class='bx bx-send icon-rotate-45' ></i>
                            </a>
                        </div>
                        <!-- <a class="cta-btn align-middle" href="#"> Notify Me </a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
          <div class="container">

            <div class="section-title" data-aos="zoom-out">
              <h2>Services</h2>
              <p>How It Works </p>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="zoom-in-left">
                  <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                  <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                  <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                  <h4 class="title"><a href="">Dolor Sitema</a></h4>
                  <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                  <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                  <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                  <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5">
                <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                  <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                  <h4 class="title"><a href="">Magni Dolores</a></h4>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mt-5">
                <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                  <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                  <h4 class="title"><a href="">Nemo Enim</a></h4>
                  <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5">
                <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
                  <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                  <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                  <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End Services Section -->

    </main><!-- End #main -->
@endsection